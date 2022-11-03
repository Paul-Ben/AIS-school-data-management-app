<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay;
use App\Models\Student;
use App\Models\Fee;
use Session;

class RecieptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('receipts.index');
    }


    public function showReciept(Request $request, Pay $pay)
    {
        $checkStudent = Pay::where('regNumber', $request->searchData)->exists();
        // $checkSession = Pay::where('sessionName', $request->searchData2)->exists();

        $payingStudent = Pay::where('regNumber', $request->searchData)->first();

        if ($checkStudent) {

            $payments = Pay::all()->where('regNumber', $request->searchData);

            return view('receipts.student-view',compact('payments'), compact('payingStudent'));
        }else {
            Session::flash('message', 'Student has no payment.');
        }

        return redirect()->back();
        
    }

    public function printReceipt(Request $request, Pay $pay)
    {
        $data = $request->session()->all();
        dd($data);
        return view('receipts.receipt', compact('pay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
