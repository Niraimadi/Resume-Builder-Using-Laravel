<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\userDetails;
use Illuminate\Http\Request;
class ResumeController extends Controller
{
    public function index(Request $request)
    {
        $user=auth()->user();
        $details=auth()->user()->details;
        if(!empty($details))
        {
            return view('resume',compact('user'));
        }  
        else{
            echo("<h2>Please fill the details to see preview</h2>");
        }
    }
    public function download(){
        $user=auth()->user();
        $pdf=\PDF::loadview('resume',compact('user'));
        return $pdf->download('resume.pdf');
    }

    public function temp1Index(Request $request)
    {
        $user=auth()->user();
        $details=auth()->user()->details;
        if(!empty($details))
        {
            return view('resume1',compact('user'));
        }  
        else{
            echo("<h2>Please fill the details to see preview</h2>");
        }
    }

    public function temp1Download(){
        $user=auth()->user();
        $pdf=\PDF::loadview('resume1',compact('user'));
        return $pdf->download('resume1.pdf');
    }

    public function temp2Index(Request $request)
    {
        $user=auth()->user();
        $details=auth()->user()->details;
        if(!empty($details))
        {
            return view('resume2',compact('user'));
        }  
        else{
            echo("<h2>Please fill the details to see preview</h2>");
        }
    }

    public function temp2Download(){
        $user=auth()->user();
        $pdf=\PDF::loadview('resume2',compact('user'));
        return $pdf->download('resume2.pdf');
    }

   }
