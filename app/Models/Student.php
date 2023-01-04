<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // protected $table = 'students'; // anotasi untuk object ke nama tabel (tidak di perlukan jika nama tabel berakhiran 's' dan nama object tidak pake 's')
}
