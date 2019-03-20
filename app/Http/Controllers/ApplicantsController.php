<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
     public function loadApplyView(){
         return view('applicants.apply');
     }

     public function loadProfileView(){
         return view('applicants.profile');
     }
}
