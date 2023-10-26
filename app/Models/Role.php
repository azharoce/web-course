<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $fillable = [
        'name',
        'code',
        'status',
    ];
    public static function data()
    {
        return Role::select('name', 'code')->get();
    }
}
