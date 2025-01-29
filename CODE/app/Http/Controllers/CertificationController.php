<?php

namespace App\Http\Controllers;

use App\Models\certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates=auth()->user()->certifications;
        return view('certifications.index',compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formData=$request->validate([
            'title'=>'required',
            'issuer'=>'required',
            'date'=>'required',
        ]);

        auth()->user()->certifications()->create($formData);
        return redirect()->route('certification.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(certification $certification)
    {
        return view('certifications.edit',compact('certification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, certification $certification)
    {
        $request->validate([
            'title'=>'required',
            'issuer'=>'required',
            'date'=>'required',
        ]);

        $certification->update($request->all());
        return redirect()->route('certification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(certification $certification)
    {
        $certification->delete();
        return back();
    }
}
