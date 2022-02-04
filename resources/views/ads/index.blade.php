@extends('layouts.app')

@section('content')
    @if ($ads->count())
        <table class="table table-hover table-borderless">
            <tbody>
                @foreach ($ads as $ad)
                    <tr>
                        <td class="title"> {{ $ad->job_title }} </td>
                        <td class="rest"> {{ $ad->created_at->diffForHumans() }} | {{ $ad->job_type }} | {{ $ad->job_location }}</td>
                        <td class="rest"> {{ $ad->job_requirements }} </td>
                        <td>
                            <a class="button-details" href="{{ route('view.ad', $ad) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1 class="view-title">There are no current ads</h1>
    @endif
@endsection