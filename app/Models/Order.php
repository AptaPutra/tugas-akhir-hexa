<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use resource\view;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [

        'name',
        'vehicle',
        'merk',
        'option',
        
       
    ];

  
}