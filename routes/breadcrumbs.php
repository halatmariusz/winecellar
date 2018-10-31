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
