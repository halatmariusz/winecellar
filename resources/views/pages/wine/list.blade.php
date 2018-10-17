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
            @foreach ($wines as $key => $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->added_on }}</td>
                    <td>{{ $item->volume }}</td>
                    <td>{{ $item->power }}</td>
                    <td>{{ $item->init_fruit }}</td>
                    <td>{{ $item->init_water }}</td>
                    <td>{{ $item->init_sugar }}</td>
                    <td>{{ $item->init_yeast }}</td>
                    <td>{{ $item->init_nutrient }}</td>
                    <td>{{ \Carbon\Carbon::now()->diffInDays(\Carbon\Carbon::parse($item->added_on)) }}</td>
                    <td>
                        @if ($item->is_drain == 0)
                            <a href="{!! route('wines.drain', ['wine_id' => $item->id]) !!}" class="btn">Odcedź</a>
                        @endif
                        <a href="{!! route('wines.sugar', ['wine_id' => $item->id]) !!}" class="btn">Dodaj cukru</a>
                        <a href="{!! route('wines.water', ['wine_id' => $item->id]) !!}" class="btn">Dodaj wody</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
      </div>
@endsection
