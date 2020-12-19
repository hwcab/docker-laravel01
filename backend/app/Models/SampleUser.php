<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleUser extends Model
{
    use HasFactory;

    protected $table = 'sample_users';
    
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    public static function getUsers()
    {
        return self::all();
    }
}
