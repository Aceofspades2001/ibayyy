<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primarykey = 'id';
    protected $fillable = ['first_name',
    'last_name',
    'dateofbirth',
    'phone',];
}
