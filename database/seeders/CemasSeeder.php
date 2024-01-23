<?php

namespace Database\Seeders;

use App\Models\Cemas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            'Merasa sulit untuk bernapas atau mengalami sesak nafas tanpa alasan yang jelas?',
            'Pikiran yang berlebihan atau takut akan hal-hal buruk yang mungkin terjadi?',
            'Menghindari situasi atau tempat tertentu karena rasa takut atau kecemasan yang berlebihan?',
            'Peningkatan detak jantung atau gejala fisik lainnya saat merasa cemas?',
            'Sulit untuk bersantai atau merasa gelisah secara konstan?',
            'Mengalami perubahan mood yang tiba-tiba atau perasaan sedih yang intens tanpa alasan yang jelas?',
            'Sulit untuk menghadapi interaksi sosial atau berbicara di depan umum?',
            'Merasa terancam atau ketakutan yang berlebihan terhadap situasi atau objek tertentu?',
            'Mengalami perubahan pola makan yang ekstrem atau tidak teratur?',
            'Pikiran berulang atau obsesi yang sulit dihentikan, meskipun menyadari bahwa pikiran tersebut tidak masuk akal?',
        ];

        foreach ($questions as $question) {
            Cemas::create(['question' => $question]);
        }
    }
}
