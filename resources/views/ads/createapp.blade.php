@extends('ads.view')

@section('form')
    <h1 class="view-title-app">Send application</h1>
    <div class="container">
        <form style="padding-top: 100px" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-25">
                    <label>Name</label></div>
                <div class="col-75">
                    <input type="text" name="job_name" placeholder="Eg. John" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Surname</label>
                </div>
                <div class="col-75">
                    <input type="text" name="job_surname" placeholder="Eg. Doe" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Email address</label>
                </div>
                <div class="col-75">
                    <input type="email" name="job_email" placeholder="Eg. john@example.com" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Phone number</label>
                </div>
                <div class="col-75">
                    <input type="tel" name="job_tel" placeholder="Eg. +657 653 987" value="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label>Upload CV</label>
                </div>
                <div class="col-75">
                    <input type="file" name="job_cv" value="">
                </div>
            </div>
            <input type="hidden" name="job_id" value="">
            <br>
            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection