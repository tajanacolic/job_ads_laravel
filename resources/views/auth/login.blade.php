@extends('layouts.app')

@section('content')

    <h1 class="view-title">Please Sign in</h1>


    <div class="justify-content-center" style="padding-top: 100px">

        @if (session('status'))

            <div class="alert alert-danger">

                    {{ session('status') }}

            </div>

        @endif

        <form action="{{ route('login') }}" method="post">

            @csrf

            <div class="row">
                <div class="col-25">
                <label for="username">Username</label></div>

                <div class="col-75">
                    <input id="username" value="{{ old('username') }}" type="text" class="form-control @error('username') is-invalid @enderror" name="username">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                <label for="password">Password</label></div>

                <div class="col-75">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <button type="submit" class="signinbutton">Sign in</button>
            </div>
        </form>
    </div>
@endsection
