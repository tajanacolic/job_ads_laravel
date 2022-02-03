<?php

namespace App\Http\Controllers;

use App\Models\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index()
    {
        return redirect()->route('index.ad');
    }
    public function download(App $app)
    {
        return response()->download(storage_path(). "/app/".$app->app_cv, $app->app_name . "-" . $app->app_surname . "-cv.pdf");
    }
}
