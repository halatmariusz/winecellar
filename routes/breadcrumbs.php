<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Calculator -> Sugar
Breadcrumbs::for('sugar', function ($trail) {
    $trail->parent('home');
    $trail->push('Kalkulatory', '');
    $trail->push('Cukier', route('calculator.sugarForm'));
});

// Calendar
Breadcrumbs::for('calendar', function ($trail) {
    $trail->parent('home');
    $trail->push('Kalendarz', '');
});

// Wines -> List
Breadcrumbs::for('wines-list', function ($trail) {
    $trail->parent('home');
    $trail->push('Produkcja', '');
    $trail->push('Nastawy', route('wines.list'));
});

// Wines -> New
Breadcrumbs::for('wines-new', function ($trail) {
    $trail->parent('wines-list');
    $trail->push('Nowy nastaw', route('wines.new'));
});

// Wines -> Add data
Breadcrumbs::for('wines-add-data', function ($trail) {
    $trail->parent('wines-list');
    $trail->push('Dodano do wina', route('wines.add-data'));
});
