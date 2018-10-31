@extends('layouts.default')

@section('pageTitle', 'Wines list')
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
    <h1>Wines list</h1>
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>Lp.</td>
                    <td>Nazwa wina</td>
                    <td>Nastawiono</td>
                    <td>Objętość (l)</td>
                    <td>Moc (%)</td>
                    <td>Owoce (kg)</td>
                    <td>Woda (l)</td>
                    <td>Cukier (kg)</td>
                    <td>Drożdże (g|ml)</td>
                    <td>Pożywka (g)</td>
                    <td>Wiek (dni)</td>
                    <td>Opcje</td>
                </tr>
            </thead>
            <tbody></tbody>
            @foreach ($wines as $key => $wine)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $wine->title }}</td>
                    <td>{{ $wine->added_on }}</td>
                    <td>{{ $wine->volume }}</td>
                    <td>{{ $wine->power }}</td>
                    <td>{{ $wine->init_fruit }}</td>
                    <td>{{ $wine->init_water }}</td>
                    <td>{{ $wine->init_sugar }}</td>
                    <td>{{ $wine->init_yeast }}</td>
                    <td>{{ $wine->init_nutrient }}</td>
                    <td>{{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($wine->added_on)) }}</td>
                    <td>
                        @if ($wine->is_drain == 0)
                            <a href="{!! route('wines.drain', ['wine_id' => $wine->id]) !!}" class="btn">Odcedź</a>
                        @endif
                        <a href="{!! route('wines.sugar', ['wine_id' => $wine->id]) !!}" class="btn">Dodaj cukru</a>
                        <a href="{!! route('wines.water', ['wine_id' => $wine->id]) !!}" class="btn">Dodaj wody</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection
