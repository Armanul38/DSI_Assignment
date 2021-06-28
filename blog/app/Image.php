<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='dsi_data';
    protected $fillable=['title','link','price','image'];
}
