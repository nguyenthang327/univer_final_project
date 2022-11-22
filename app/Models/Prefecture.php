<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prefecture
 * @property string $id
 * @property string $name
 * @property string $type
 */
class Prefecture extends Model
{
    public $timestamps = false;

    protected $table = 'prefectures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
    ];

    /**
     * Get admins for the prefecture
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function admins()
    {
    	return $this->hasMany('App\Admin');
    }

    /**
     * Get users for the prefecture
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
    	return $this->hasMany('App\User');
    }
}
