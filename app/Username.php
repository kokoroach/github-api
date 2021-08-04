<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Username extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'login', 'company', 'followers', 'public_repos', 'mean_followers'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}