<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseStudiesController extends Controller
{

    public function index()
    {
        return view('case_studies/case_studies');
    }

}
