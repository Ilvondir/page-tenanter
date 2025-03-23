<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opinion extends Model
{
    /** @use HasFactory<\Database\Factories\OpinionFactory> */
    use HasFactory;
    use SoftDeletes;

    public $table = 'opinions';
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function user() {
        return $this->hasOne(User::class);
    }
}
