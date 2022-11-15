<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fees;
use App\Models\Student;
use App\Models\Pay;
use Session;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Pay::orderBy('id','asc')->paginate(5);

        return view('payments.index', compact('payments'));
    }


    public function showStudent(Request $request, Pay $pay)
    {
        $checkStudent = Pay::where('regNumber', $request->searchData)->exists();

        $payingStudent = Pay::where('regNumber', $request->searchData)->first();

        if ($checkStudent) {

            $payments = Pay::all()->where('regNumber', $request->searchData);

            return view('payments.student-view',compact('payments'), compact('payingStudent'));
        }else {
            Session::flash('message', 'Student has no payment.');
        }

        return redirect()->back();
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
        return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'sessionName' => 'required',
            'regNumber' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'sclass' => 'required',
        ]);

    
        $new_reg = Pay::where('regNumber', $request->regNumber)->exists();
        $new_session = Pay::where('sessionName', $request->sessionName)->exists();
        $new_term = Pay::where('term_fee', $request->term_fee)->exists();


        if (!$new_reg ) {
            # code...
            Pay::create($request->post());
            
        }elseif ($new_reg && $new_session && $new_term) {
            # code...
            Session::flash('message', 'Payment record for '.$request->regNumber. ' exists, search and update the payment or change the session');
                return redirect()->back();
        }else {
            # code...
            Pay::create($request->post());
        }



        // if ($new_reg) {

        //     if($new_session){

        //         Session::flash('message', 'Payment record for '.$request->regNumber. ' exists, search and update the payment or change the session');
        //         return redirect()->back();
        //     }elseif (condition) {
        //         # code...
        //     }

        // }else{
        //     Pay::create($request->post());
        // }

        return redirect()->route('payments.index')->with('success','Payment has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pay $payment, Fees $fee)
    {
        $fees = Fees::all();
        
        return view('receipts.receipt', compact('payment'), compact('fees'));
    }

    public function all_payments(Pay $payment)
    {
        $payments = Pay::orderBy('id','desc')->paginate(10);

        return view('payments.all_payments', compact('payments'));
    }

    public function class_payments_index()
    {
        return view('payments.class_payments_index');
    }

    public function class_payments(Pay $payment, Request $request)
    {
        $payments = Pay::where('sclass', $request->sclass)->where('sessionName', $request->sessionName)
            ->where('term_fee', $request->term_fee)->orderBy('regNumber', 'asc')->paginate(10);
            // dd('payments');
        return view('payments.class_payments', compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pay $payment)
    {
        return view('payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pay $payment)
    {
        $request->validate([
            'sessionName' => 'required',
            'regNumber' => 'required',
        ]);

        $payment->fill($request->post())->save();

        return redirect()->route('payments.index')->with('success', 'Payment Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pay $payment)
    {
        $payment->delete();
        return redirect()->route('payments.index')->with('success','Payment record has been deleted successfully');
    }
}
