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
    <h1>{{ $wine->title }}</h1>
@endsection

@section('content')
    <div class="col-8">
        <div class="table-responsive card">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <td>Nastawiono</td>
                        <td>Objętość (l)</td>
                        <td>Moc (%)</td>
                        <td>Owoce (kg)</td>
                        <td>Woda (l)</td>
                        <td>Cukier (kg)</td>
                        <td>Drożdże (g|ml)</td>
                        <td>Pożywka (g)</td>
                        <td>Wiek (dni)</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $wine->added_on }}</td>
                        <td>{{ $wine->volume }}</td>
                        <td>{{ $wine->power }}</td>
                        <td>{{ $wine->init_fruit }}</td>
                        <td>{{ $wine->init_water }}</td>
                        <td>{{ $wine->init_sugar }}</td>
                        <td>{{ $wine->init_yeast }}</td>
                        <td>{{ $wine->init_nutrient }}</td>
                        <td>{{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($wine->added_on)) }}</td>
                    </tr>
                    <tr>
                        <td>{{ $wine->added_on }}</td>
                        <td>{{ $wine->volume }}</td>
                        <td>{{ $wine->power }}</td>
                        <td>{{ $wine->init_fruit }}</td>
                        <td>{{ $wine->init_water + $data['water'] }}</td>
                        <td>{{ $wine->init_sugar + $data['sugar'] }}</td>
                        <td>{{ $wine->init_yeast }}</td>
                        <td>{{ $wine->init_nutrient }}</td>
                        <td>{{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($wine->added_on)) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                Ostatnie prace przy nastawie
            </div>
            <div class="list-group list-group-flush">
                @foreach ($actions as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">{{ Helpers::wineDataTrans($item->data_key) }} -> {{ $item->added_on }}
                        <span class="badge badge-primary badge-pill">{{ $item->data_volume }}</span>
                    </li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
