<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WakilRektorI extends Model
{
    use HasFactory;
    protected $table = "wakil_rektor_i";
    protected $guarded = ['created_at', 'updated_at'];
}
