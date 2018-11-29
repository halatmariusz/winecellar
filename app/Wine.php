<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $table = 'wines';
    protected $dates = [
        'added_on',
        'created_at'
    ];
    protected $fillable = [
        'user_id', 'title', 'description', 'volume', 'power', 'init_fruit', 'init_water', 'init_sugar', 'init_yeast', 'init_nutrient', 'init_citric_acid', 'yeast_name', 'nutrient_name', 'added_on', 'bottled'
    ];

    public function data()
    {
        return $this->hasMany(WineData::class, 'wine_id', 'id');
    }

    public function getLatestData()
    {
        return $this->data()->orderBy('id', 'DESC');
    }
}
