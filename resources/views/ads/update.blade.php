@extends('layouts.app')

@section('content')
    <h1 class="view-title">Update job ad</h1>
    <x-adUpdate :ad="$ad"/>
@endsection