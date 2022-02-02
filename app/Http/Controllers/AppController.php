<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;

class AppController extends Controller
{

    public function index()
    {
        $apps = App::latest()->paginate(20);
        return view('apps.index', [
            'apps' => $apps
        ]);
    }

    public function create(Request $request)
    {

        if ($request->method() == "POST") {
            dd("abc");
            $this->validate($request, [
                'app_name' => 'required',
                'app_surname' => 'required',
                'app_email' => 'required',
                'job_tel' => 'required',
                'ads_id' => 'required',
                'app_cv' => 'required'
            ]);
            return back();
        }
        return view('ads.view');
    }

    public function view(App $app)
    {
        return view('apps.view', [
            'app' => $app
        ]);
    }
}
