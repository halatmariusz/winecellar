@extends('layouts.default')

@section('pageTitle', 'Nastaw nowe wino')
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
    {{ Breadcrumbs::render('wines-new') }}
@endsection

@section('pageHeader')
    <h1>Nastaw nowe wino</h1>
@endsection

@section('content')
    <div class="col col-8 offset-2">
        {{ Form::open(array('route' => 'wines.newPost', 'method' => 'post')) }}
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputTitle">Nazwa wina</label>
                    {{ Form::text('title', false, ['class' => 'form-control', 'id' => 'inputTitle', 'placeholder' => 'Nazwa wina', 'required']) }}
                </div>
                <div class="form-group col-12">
                    <label for="inputDescription">Opis wina</label>
                    {{ Form::textarea('description', false, ['class' => 'form-control', 'id' => 'inputDescription', 'placeholder' => 'Opis wina', 'rows' => 4 ]) }}
                </div>
                <div class="form-group col-6">
                    <label for="inputVolume">Objętość początkowa nastawu (l)</label>
                    {{ Form::number('volume', false, ['class' => 'form-control', 'id' => 'inputVolume', 'placeholder' => 'Objętość początkowa nastawu', 'min' => '0', 'step' => 'any', 'required']) }}
                </div>
                <div class="form-group col-6">
                    <label for="inputPower">Przewidywana moc nastawu (%)</label>
                    {{ Form::number('power', false, ['class' => 'form-control', 'id' => 'inputPower', 'placeholder' => 'Przewidywana moc nastawu', 'min' => '0', 'step' => 'any', 'required']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputFruit">Owoce (kg)</label>
                    {{ Form::number('init_fruit', false, ['class' => 'form-control', 'id' => 'inputFruit', 'placeholder' => 'Owoce', 'min' => '0', 'step' => 'any', 'required']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputWater">Woda (l)</label>
                    {{ Form::number('init_water', false, ['class' => 'form-control', 'id' => 'inputWater', 'placeholder' => 'Woda', 'min' => '0', 'step' => 'any']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputSugar">Cukier (kg)</label>
                    {{ Form::number('init_sugar', false, ['class' => 'form-control', 'id' => 'inputSugar', 'placeholder' => 'Cukier', 'min' => '0', 'step' => 'any']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputAcid">Kwasek cytrynowy (g)</label>
                    {{ Form::number('init_citric_acid', false, ['class' => 'form-control', 'id' => 'inputAcid', 'placeholder' => 'Kwasek cytrynowy', 'min' => '0', 'step' => 'any']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputYeast">Drożdże (g)</label>
                    {{ Form::number('init_yeast', false, ['class' => 'form-control', 'id' => 'inputYeast', 'placeholder' => 'Drożdże']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputYeastName">Nazwa drożdży</label>
                    {{ Form::text('yeast_name', false, ['class' => 'form-control', 'id' => 'inputYeastName', 'placeholder' => 'Nazwa drożdży']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputNutrient">Pożywka (g)</label>
                    {{ Form::number('init_nutrient', false, ['class' => 'form-control', 'id' => 'inputNutrient', 'placeholder' => 'Pożywka']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputNutrientName">Nazwa pożywki</label>
                    {{ Form::text('nutrient_name', false, ['class' => 'form-control', 'id' => 'inputNutrientName', 'placeholder' => 'Nazwa pożywki']) }}
                </div>
                <div class="form-group col-3">
                    <label for="inputdate">What the date of drain</label>
                    {{ Form::date('added_on', false, ['class' => 'form-control', 'id' => 'inputdate', 'required']) }}
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Zapisz</button>
        {{ Form::close() }}
    </div>
@endsection
