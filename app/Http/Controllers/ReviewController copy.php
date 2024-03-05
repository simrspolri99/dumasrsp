<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(){
        return view('review.index', [
            'title' => 'review',
            'active' => 'review'
        ]);
    }

    public function store(Request $request){
        // Validasi data
        $validatedData = $request->validate([
            'nama' => 'required|min:3|max:255',
            'email' => 'required|email|min:3|max:255', // Ubah validasi untuk email
            'rekmed' => 'required|min:3|max:255',
            'sarpras' => 'required|min:3|max:255',
            'kecepatanpelayanan' => 'required|min:3|max:255',
            'administrasi' => 'required|min:3|max:255',
            'kritiksaran' => 'required|min:3|max:255'
        ]);

        // Tambahkan data user_id jika Anda ingin menyimpan ID pengguna yang membuat survey
        // $validatedData['user_id'] = Auth::id();

        // Simpan data ke database
        $survey = Survey::create($validatedData);

    }
}
