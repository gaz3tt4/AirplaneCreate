<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;

   # @var array <int, string>
    protected $fillable = [
        'id',
        'brand',
        'model',
        'year',
        'status',
    ];
    const CREATED_AT ='dt_include';
    const UPDATED_AT ='dt_update';



}
