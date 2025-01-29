<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills=auth()->user()->skills;
        return view('skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('skills.create');
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
            'name'=>'required',
            'rating'=>'required'
        ]);

        auth()->user()->skills()->create($formData);
        return redirect()->route('skill.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(skill $skill)
    {
        return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skill $skill)
    {
        $request->validate([
            'name'=>'required',
            'rating'=>'required'
        ]);

        $skill->update($request->all());
        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(skill $skill)
    {
        $skill->delete();
        return back();
    }
}
