<?php

namespace App\Models;
use SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
protected $fillable = ['name', 'email', 'phone',
'address','university_id'] ;
public function university(){
return $this->belongsTo(University::class);
}
}


