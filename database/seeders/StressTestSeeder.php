<?php

namespace Database\Seeders;

use App\Models\StressTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StressTestSeeder extends Seeder
{
    public function run()
    {
        $questions = [
            'Seringkali merasa cemas atau khawatir tanpa alasan yang jelas?',
            'Kesulitan untuk fokus atau berkonsentrasi?',
            'Merasa sulit untuk tidur atau mengalami gangguan tidur?',
            'Sering merasa lelah tanpa alasan yang jelas?',
            'Mengalami perubahan berat badan yang signifikan dalam waktu singkat?',
            'Sering merasa kesepian atau terisolasi?',
            'Kesulitan mengontrol perasaan marah atau frustrasi?',
            'Merasa tidak berharga atau kehilangan minat pada kegiatan yang biasanya dinikmati?',
            'Mengalami ketegangan otot atau sakit kepala yang tidak dapat dijelaskan?',
            'Kesulitan mengambil keputusan kecil sehari-hari?',
        ];

        foreach ($questions as $question) {
            StressTest::create(['question' => $question]);
        }
    }
}
