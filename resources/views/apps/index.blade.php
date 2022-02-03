@extends('layouts.app')

@section('content')
    @if ($apps->count())
        <table class="table table-hover table-borderless">
            <tbody>
                @foreach ($apps as $app)
                    <tr>
                        <td class="title"> {{ $app->app_name . " " . $app->app_surname  }}</td>
                        <td class="rest"> {{ $app->ads_id }} </td>
                        <td>
                            <a class="button-details" href="{{ route('view.app', $app) }}">Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <h1 class="view-title">There are no current applications</h1>
    @endif
@endsection