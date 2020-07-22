<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	
    protected $table = 'students';
    protected $fillable = ['cne','firstName','secondName','age','speciality'];
    protected $hidden = ['id'];
    public function students()
    {
    	 return $this->belongsTo('App\Student', 'id');
    }
}
