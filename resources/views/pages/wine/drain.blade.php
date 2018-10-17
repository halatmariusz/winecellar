@extends('layouts.default')

@section('pageTitle', 'Odcedzanie owoców')
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
    {{ Breadcrumbs::render('drain') }}
@endsection

@section('pageHeader')
    <h1>Odcedzanie owoców</h1>
@endsection

@section('content')
    <div class="col col-6">
        {{ Form::open(array('route' => ['wines.drainPost', $wine_id], 'method' => 'post')) }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLiters">How many liters of wine (l)</label>
                    {{ Form::number('volume', false, ['class' => 'form-control', 'id' => 'inputLiters', 'placeholder' => 'Volume of wine', 'min' => '0', 'step' => '1', 'required']) }}
                </div>
                <div class="form-group col-md-6">
                    <label for="inputdate">What the date of drain</label>
                    {{ Form::date('added_on', false, ['class' => 'form-control', 'id' => 'inputdate', 'required']) }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        {{ Form::close() }}
    </div>
@endsection
