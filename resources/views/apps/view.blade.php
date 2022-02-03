@extends('layouts.app')

@section('content')

    <div>

        <form style="display: inline-block" method="post" action="{{ route('delete.app', $app) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="button-details">Delete</button>
        </form>

    </div>
    <h1 class="view-title">{{ $app->app_name . ' ' .  $app->app_surname }}</h1>

    <h2 class="view-title2">{{ $app->app_email . "  |  " . $app->job_tel }}</h2>

    <h3 class="view-title3">{{ "Job ad ID: " . $app->ads_id }}</h3>

    <a class="button-details" href="{{ route('view.ad', $app->ads_id) }}">Job ad</a>

    <a class="button-details" href="{{ Storage::disk('public')->get($app->app_cv) }}">Download CV</a>

@endsection