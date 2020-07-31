<?php

namespace Modules\Movie\Entities;

use Illuminate\Notifications\Notifiable;
use Modules\Core\Entities\CoreModel as Model;

class Actor extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'nationality', 'birth_date', 'avatar'
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

    public function movies()
    {
        return $this->belongsToMany('Modules\Movie\Entities\Movie', 'movie_actor');
    }
}
