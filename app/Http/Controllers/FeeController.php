<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fees;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fees::orderBy('id','asc')->paginate(5);
        return view('fees.index', compact('fees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fees.create');
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
            'className' => 'required',
            
        ]);

        Fees::create($request->post());
        return redirect()->route('fees.index')->with('success','Class Fee has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('fees.show', compact('fee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fees $fee)
    {
        return view('fees.edit',compact('fee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fees $fee)
    {
        $request->validate([
            'className' => 'required',
            
        ]);
        
        $fee->fill($request->post())->save();

        return redirect()->route('fees.index')->with('success','Fee Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fees $fee)
    {
        $fee->delete();
        return redirect()->route('fees.index')->with('success','Fee has been deleted successfully');
    }
}
