<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;
    public $table = "prodi";
    public $timestamps = false; // Menonaktifkan timestamps
}
