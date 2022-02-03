@extends('layouts.app')

@section('content')
    @auth
        <div>
            <a class="button-details" href="{{ route('update.ad', $ad) }}">Edit</a>
        </div>
        <div>
            <form style="display: inline-block" method="post" action="{{ route('delete.ad', $ad) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="button-details">Delete</button>
            </form>
        </div>
    @endauth
    <h1 class="view-title">{{ $ad->job_title }}</h1>
    <h2 class="view-title2">{{ $ad->job_requirements }}</h2>
    <h3 class="view-title3">{{ $ad->created_at }} | {{ $ad->job_type }} | {{ $ad->job_location }}</h3>
    <p class="view-description">{{ $ad->job_description }}</p>

    @guest

        @yield('form')
        
    @endguest

@endsection