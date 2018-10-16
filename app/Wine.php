<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $table = 'wines';
    protected $fillable = [
        'user_id', 'title', 'description', 'volume', 'power', 'init_fruit', 'init_water', 'init_sugar', 'init_yeast', 'init_nutrient', 'yeast_name', 'nutrient_name', 'added_on', 'bottled'
    ];
}
