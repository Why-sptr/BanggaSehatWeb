<?php

namespace App\Http\Controllers;

use App\Models\StressTest;
use Illuminate\Http\Request;

class StressTestController extends Controller
{
    public function index()
    {
        $questions = StressTest::all();
        return view('stress', compact('questions'));
    }

    public function store(Request $request)
    {
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'question_') === 0) {
                $questionId = substr($key, strlen('question_'));
                $answer = $value;
                // Simpan jawaban ke dalam database
            }
        }

        // Hitung tingkat stres berdasarkan jawaban
        $stressLevel = $this->calculateStressLevel($request->all());

        return view('hasil-stress', compact('stressLevel'));
    }

    private function calculateStressLevel($answers)
    {
        $totalPoints = 0;

        foreach ($answers as $key => $value) {
            if (strpos($key, 'question_') === 0) {
                $questionId = substr($key, strlen('question_'));
                $weight = $this->getQuestionWeight($questionId);
                $totalPoints += (int)$value * $weight;
            }
        }

        if ($totalPoints <= 10) {
            return 'Rendah';
        } elseif ($totalPoints <= 20) {
            return 'Sedang';
        } else {
            return 'Tinggi';
        }
    }

    private function getQuestionWeight($questionId)
    {
        switch ($questionId) {
            case 1:
                return 3; // Seringkali merasa cemas atau khawatir tanpa alasan yang jelas?
            case 2:
                return 2; // Kesulitan untuk fokus atau berkonsentrasi?
            case 3:
                return 3; // Merasa sulit untuk tidur atau mengalami gangguan tidur?
            case 4:
                return 2; // Sering merasa lelah tanpa alasan yang jelas?
            case 5:
                return 3; // Mengalami perubahan berat badan yang signifikan dalam waktu singkat?
            case 6:
                return 2; // Sering merasa kesepian atau terisolasi?
            case 7:
                return 3; // Kesulitan mengontrol perasaan marah atau frustrasi?
            case 8:
                return 2; // Merasa tidak berharga atau kehilangan minat pada kegiatan yang biasanya dinikmati?
            case 9:
                return 3; // Mengalami ketegangan otot atau sakit kepala yang tidak dapat dijelaskan?
            case 10:
                return 2; // Kesulitan mengambil keputusan kecil sehari-hari?
            default:
                return 1; // Bobot default
        }
    }
}
