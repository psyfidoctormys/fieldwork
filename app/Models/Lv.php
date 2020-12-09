<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LV extends Model
{
    use HasFactory;
    //Table Name
    protected $table = 'lv_T';
    //Primary Key
    public $primaryKey = 'sample';
    //Timestamps
    //public $timestamps = true;
}