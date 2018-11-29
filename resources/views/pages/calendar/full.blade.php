@extends('layouts.default')

@section('pageTitle', 'Kalendarz')
@section('metaDescription', '')
@section('metaKeywords', '')

@section('ogTitle', '')
@section('ogDescription', '')
@section('ogImage', '')
@section('ogUrl', URL::current())
@section('twitterTitle', '')
@section('twitterDescription', '')
@section('twitterImage', '')
@section('twitterCard', '')
@section('twitterCard', '')

@section('bodyClass', '')

@section('breadcrumbs')
    {{ Breadcrumbs::render('calendar') }}
@endsection

@section('pageHeader')
    <h1>Kalendarz</h1>
@endsection

@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="card">
            {!! $calendar->calendar() !!}
        </div>
    </div>
@endsection

@section('scripts')
{!! $calendar->script() !!}
@endsection
