<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    protected $table = 'rumah_sakit';
    protected $fillable = ['nama', 'alamat', 'latitude', 'longitude'];
}
