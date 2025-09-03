<?php

namespace App\Models;
use App\Model\Student;


use Illuminate\Database\Eloquent\Model;

class University extends Model
{
       protected $table = 'univeities';
    protected $fillable = ['name'];

public function students()
{
return $this->hasMany(Student::class);
}
}
