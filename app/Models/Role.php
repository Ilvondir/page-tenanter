<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table = 'roles';
    public $timestamps = false;
    public $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
