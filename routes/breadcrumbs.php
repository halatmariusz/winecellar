<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Calculator -> Sugar
Breadcrumbs::for('sugar', function ($trail) {
    $trail->parent('home');
    $trail->push('Calculator', '');
    $trail->push('Sugar', route('calculator.sugarForm'));
});

// Wines -> List
Breadcrumbs::for('wines-list', function ($trail) {
    $trail->parent('home');
    $trail->push('Wines', '');
    $trail->push('List', route('wines.list'));
});
