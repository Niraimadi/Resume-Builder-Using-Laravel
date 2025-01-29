<?php

namespace App\Http\Controllers;

use App\Models\userDetails;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details=auth()->user()->details;
        if (!empty($details)) {  
            return view('user_detail.index',compact('details'));
        }
        else {
            return view('user_detail.create');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user_detail.create');
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
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'summary'=>'required'
        ]);

        auth()->user()->details()->create($request->all());
       return redirect()->route('user-detail.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function show(userDetails $userDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(userDetails $userDetails)
    {
        $userDetails=auth()->user()->details;
        return view('user_detail.edit',compact('userDetails'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userDetails $userDetails)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'summary'=>'required'
        ]);
        $userDetails=auth()->user()->details;
       $userDetails->update($request->except('_token'));
       return redirect('user-detail');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userDetails  $userDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(userDetails $userDetails)
    {
        $details=auth()->user()->details;
        $details->delete();
        return back();
    }
}
