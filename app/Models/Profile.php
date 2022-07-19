<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'user_id',
        'phone',
        'about',
        'image',
        'created_at',
        'updated_at',
    ];

    public function profile(){
        return $this->belongsToMany('App\Models\User','users','id','user_id');
    }
}
