<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class Dokter extends Model
    {
        protected $fillable = ['name', 'picture', 'spesialis', 'rating'];

        // Dokter.php
        public function antrians()
        {
            return $this->hasMany(Antrian::class);
        }

        // Dokter.php

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    }
