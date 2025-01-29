<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userDetails;
use App\Models\Education;
use App\Models\Experience;
use App\Models\skill;
use App\Models\project;
use App\Models\certification;

class UserController extends Controller
{
    
    public function destroy(userDetails $userDetails,Education $education,Experience $experience,skill $skill,project $project,certification $certification) 
    {
        $details=auth()->user()->details;
        $education=auth()->user()->education;
        $experience=auth()->user()->experiences;
        $projects=auth()->user()->projects;
        $skills=auth()->user()->skills;
        $certificates=auth()->user()->certifications;
        if (!empty($details)) {
            $details->delete();
        }
        foreach ($education as $e)
        {
            $e->delete();
        }
        foreach ($experience as $ex)
        {
            $ex->delete();
        }
        foreach ($projects as $p)
        {
            $p->delete();
        }
        foreach($skills as $s)
        {
            $s->delete();
        }
        foreach($certificates as $c)
        {
            $c->delete();
        }
        return redirect()->route('user-detail.create');   

    }
}
