<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;

    //tidak perlu function karena sudah pkai elequent
     protected $fillable = ["nama","nim","email","jurusan"];
}
