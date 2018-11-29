<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Wine;

class WineData extends Model
{
    protected $table = 'wines_data';
    protected $fillable = [
        'user_id', 'wine_id', 'data_key', 'data_volume', 'description', 'added_on'
    ];

    public function wine()
    {
        return $this->belongsTo(Wine::class, 'wine_id');
    }
}
