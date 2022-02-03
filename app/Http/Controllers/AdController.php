<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only('create', 'update', 'delete');
    }

    public function index()
    {
        $ads = Ad::latest()->paginate(20);
        return view('ads.index', [
            'ads' => $ads
        ]);
    }

    public function create(Request $request)
    {

        if ($request->method() == "GET") {
            return view('ads.create');
        }
        $this->validate($request, [
            'job_title' => 'required',
            'job_type' => 'required',
            'job_location' => 'required',
            'job_requirements' => 'required',
            'job_description' => 'required',
        ]);
        Ad::create([
            'job_title' => $request->job_title,
            'job_type' => $request->job_type,
            'job_location' => $request->job_location,
            'job_requirements' => $request->job_requirements,
            'job_description' => $request->job_description,
        ]);
        return redirect()->route('index.ad');
    }

    public function view(Ad $ad)
    {
        return view('ads.createapp', [
            'ad' => $ad
        ]);
    }

    public function delete(Ad $ad)
    {

        $ad->delete();

        return redirect()->route('index.ad');
    }

    public function update(Request $request, Ad $ad)
    {

        if ($request->method() == "GET") {
            return view('ads.update', [
                'ad' => $ad
            ]);
        }

        $ad->update([
            'job_title' => $request->job_title,
            'job_type' => $request->job_type,
            'job_location' => $request->job_location,
            'job_requirements' => $request->job_requirements,
            'job_description' => $request->job_description,
        ]);

        return redirect()->route('view.ad', $ad);
    }
}
