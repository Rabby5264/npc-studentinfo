<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class result_extende extends Model
{
    use HasFactory;

    
    protected $table = "students" ;

    protected $fillable = ['name','email','roll','department','semester','session'];

}
