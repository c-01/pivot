<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];
//    protected $fillable = ['name', 'created_at'];
    protected $table = 'roles';

    public function users()
    {
//        return $this->belongsToMany(User::class);
        return $this->belongsToMany(User::class)
            ->withTimestamps() # insert datetime
            ->withPivot(['note']) # allow get value of note in table role_user
        ;

    }

}
