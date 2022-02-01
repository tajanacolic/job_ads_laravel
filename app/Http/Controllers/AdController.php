<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth'])->only('create', 'update', 'delete');
    }

    public function index()
    {
        $ads = Ad::latest()->paginate(20);
        return view('ads.index',[
            'ads' => $ads
        ]);
    }

    public function create(Request $request)
    {
        
        if($request->method() == "POST")
        {
            dd("abc");
            $this->validate($request, [
             'job_title' => 'required',
             'job_type' => 'required',
             'job_location' => 'required',
             'job_requirements' => 'required',
             'job_description' => 'required',
            ]);
            return back();
        }
        return view('ads.create');
    }

    public function view(Ad $ad)
    {
        return view('ads.createapp', [
            'ad' => $ad
        ]);
    }
}
