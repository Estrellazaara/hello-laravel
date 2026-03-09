<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superheroe extends Model
{
     use HasFactory;
     protected $fillable = [
         'name',
         'real_name',
         'gender',
        'Universe_id'
         ]; 

    public function universe()
    {
        return $this->belongsTo(\App\Models\Universe::class);
    }
    }