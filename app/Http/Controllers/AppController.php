<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Models\App;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class AppController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth'])->only('index', 'view', 'delete');
    }

    public function index()
    {
        $apps = App::latest()->paginate(20);
        return view('apps.index', [
            'apps' => $apps
        ]);
    }

    public function create(Request $request)
    {

        if ($request->method() == "GET") {
            return view('ads.view');
        }
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'ads_id' => 'required',
            'cv' => 'required|file|mimes:pdf'
        ]);
        $path = $request->file('cv')->store('cv');
        App::create([
            'app_name' => $request->name,
            'app_surname' => $request->surname,
            'app_email' => $request->email,
            'job_tel' => $request->phone,
            'ads_id' => $request->ads_id,
            'app_cv' => $path
        ]);
        return redirect()->route('index.ad');
    }

    public function view(App $app)
    {
        return view('apps.view', [
            'app' => $app
        ]);
    }

    public function delete(App $app)
    {

        $app->delete();

        return redirect()->route('index.app');
    }
}
