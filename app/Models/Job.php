<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table= 'jobs';
    protected $fillable = [
//         'name',
//         'description',
//         'user_id',
//         'status',
//         'payment',
// 'created_at',
'name',
'description',
'user_id',
'status',
'payment',
'location',
'created_at',
'updated_at',
    ];


}
