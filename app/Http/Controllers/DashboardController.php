<?php

namespace App\Http\Controllers;

use App\Models\Questioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $data = Questioner::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $url = route('front.show', $row->id); // Buat URL ke show
                    // Kolom action, tambahkan tombol atau elemen HTML lainnya
                    return
                    '
                        <a href="' . $url . '" class="text-sm text-green-600">Show</a>
                    ';
                })
                ->rawColumns(['action']) // Memastikan kolom HTML dirender sebagai HTML
                ->make(true);
        }

        return view('dashboard');
    }

    public function message()
    {
        $questions = Questioner::all(); // Ambil semua data dari tabel Question
        $userRole = Auth::user()->role; // Role pengguna yang sedang login

        return view('answers.message', compact('questions', 'userRole'));
    }

    public function show($id)
    {
        $questioner = Questioner::findOrFail($id);
        return view('answers.show', compact('questioner'));
    }

}
