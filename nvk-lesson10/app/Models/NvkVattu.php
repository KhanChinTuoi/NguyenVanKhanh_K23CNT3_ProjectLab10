<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NvkVattu extends Model
{
    use HasFactory;

    protected $table = "nvkvattu";
    
    public $timestamps = false;
}
