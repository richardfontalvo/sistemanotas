<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;


public function student()
{
   return $this->belongsTo(Student::class);
}

public function matters()
{
  return $this->belongsTo(matters::class);
}

}