<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Alldata extends Model
{ 
 	protected $fillable = ['chipcode', 'startingnumber', 'fullname', 'corridore_time', 'finish_time'];	
    
    const CREATED_AT = null;
    const UPDATED_AT = null;
}

