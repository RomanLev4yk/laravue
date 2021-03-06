<?php

namespace Modules\Movie\Entities;

use Illuminate\Notifications\Notifiable;
use Modules\Core\Entities\CoreModel as Model;

class Movie extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'year', 'producer', 'fees', 'genre', 'rateIMDB', 'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    protected $attributes = [
    ];

    public function actors()
    {
        return $this->belongsToMany('Modules\Movie\Entities\Actor', 'movie_actor');
    }
}
