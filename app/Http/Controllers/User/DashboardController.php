<?php

namespace App\Http\Controllers\User;

use App\Models\Kriteria;
use App\Models\Question;
use App\Models\Indicator;
use App\Models\SubIndicator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard.index');
    }

    public function nilai()
    {
        return view('user.nilai.index');
    }

    public function identitas()
    {
        $indikators = Indicator::get();
        return view('user.question.soal-identitas', compact('indikators'));
    }

    public function submitIdentitas(Request $request)
    {
        dd($request->all());
        return redirect()->route('user.dashboard');
    }

    public function soal($slug)
    {
        $indikators = Indicator::get();
        $indikator = Indicator::where('slug', $slug)->first();
        $subindikator = SubIndicator::where('indicator_id', $indikator->id)->get();
        $question = Question::get();
        $kriteria = Kriteria::get();

        return view('user.question.soal-indikator', compact('indikators', 'indikator', 'subindikator', 'question', 'kriteria'));
    }

    public function submitSoal(Request $request)
    {
        return redirect()->route('soal');
    }
}