@extends('ads.view')

@section('form')
    @guest
        <h1 class="view-title-app">Send application</h1>
        <div class="container">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @error('name')
                    <div>  {{ $message }} </div>
                    @enderror
                    @error('surname')
                        <div>  {{ $message }} </div>
                    @enderror
                    @error('email')
                        <div>  {{ $message }} </div>
                    @enderror
                    @error('phone')
                        <div>  {{ $message }} </div>
                    @enderror
                    @error('cv')
                        <div>  {{ $message }} </div>
                    @enderror
                </div>
            @endif
            <form style="padding-top: 100px" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-25">
                        <label>Name</label></div>
                    <div class="col-75">
                        <input type="text" name="name" placeholder="Eg. John" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Surname</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="surname" placeholder="Eg. Doe" value="{{ old('surname') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Email address</label>
                    </div>
                    <div class="col-75">
                        <input type="email" name="email" placeholder="Eg. john@example.com" value="{{ old('email') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Phone number</label>
                    </div>
                    <div class="col-75">
                        <input type="tel" name="phone" placeholder="Eg. +657 653 987" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label>Upload CV</label>
                    </div>
                    <div class="col-75">
                        <input type="file" name="cv" value="{{ old('cv') }}">
                    </div>
                </div>
                <input type="hidden" name="ads_id" value="{{ $ad->id }}">
                <br>
                <div class="row">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    @endguest
@endsection