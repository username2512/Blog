<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;
    public $table="details";

    protected $fillable = [
        'name',
        'password',
    ];
}
