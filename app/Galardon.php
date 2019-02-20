<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galardon extends Model{
    use HasCompositeKey;
    
    protected $primaryKey = ['titulo','anyo'];
}