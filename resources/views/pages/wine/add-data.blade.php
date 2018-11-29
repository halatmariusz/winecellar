@extends('layouts.default')

@section('pageTitle', 'Dodano do wina')
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
    {{ Breadcrumbs::render('wines-list') }}
@endsection

@section('pageHeader')
    <h1>{{ $wine->title }} - Dodano do wina</h1>
@endsection

@section('content')
    <div class="col col-6">
        {{ Form::open(array('route' => ['wines.add-dataPost', $wine_id], 'method' => 'post')) }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLiters">How many liters of wine (l)</label>
                    {{ Form::number('volume', false, ['class' => 'form-control', 'id' => 'inputLiters', 'placeholder' => 'Volume of wine', 'min' => '0', 'step' => 'any', 'required']) }}
                </div>
                <div class="form-group col-md-6">
                    <label for="inputdate">What the date of drain</label>
                    {{ Form::date('added_on', false, ['class' => 'form-control', 'id' => 'inputdate', 'required']) }}
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputKey">How many liters of wine (l)</label>
                    {{ Form::select('data_key', ['sugar' => 'Cukier', 'water' => 'Woda', 'acid' => 'Kwasek cytrynowy', 'drain' => 'Odcedź', 'sediment' => 'Zlej z nad osadu'], false, ['class' => 'form-control browser-default custom-select', 'id' => 'inputKey', 'placeholder' => 'Wybierz z listy', 'required']) }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        {{ Form::close() }}
    </div>
@endsection
