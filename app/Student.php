<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name','email','phone','status','faculty_id'];

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }
}
