<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionerStoreRequest;
use App\Models\Questioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionerController extends Controller
{
    public function store(QuestionerStoreRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            $objective = $request->objective;

            // Jika objective kosong (Lainnya), ambil dari tujuan_lainnya
            if (!$objective) {
                $objective = $request->tujuan_lainnya;
            }

            // Ganti nilai objective dengan nilai yang benar (jika "Lainnya" dipilih)
            $validated['objective'] = $objective;

            // Simpan data ke database
            Questioner::create($validated);
        });

        // Redirect ke halaman terima kasih setelah data berhasil disimpan
        return redirect()->route('front.thankyou');
    }
}
