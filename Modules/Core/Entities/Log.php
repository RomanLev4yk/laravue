<?php

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public $timestamps = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->created_at = $model->freshTimestamp();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'module', 'type', 'message', 'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];
}
