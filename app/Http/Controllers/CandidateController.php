<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\User;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of candidates.
     */
    public function index()
    {
        // Ambil semua kandidat untuk kedua sekolah
        $candidatesSchool1 = Candidate::with(['ketua', 'wakil', 'school'])
            ->where('school_id', 1)
            ->get();
        $candidatesSchool2 = Candidate::with(['ketua', 'wakil', 'school'])
            ->where('school_id', 2)
            ->get();
        // Ambil semua pengguna untuk keperluan dropdown
        $users = User::all();
        $schools = School::all();
        return view('admin.candidate.index', compact('candidatesSchool1', 'candidatesSchool2', 'users', 'schools'));
    }

    /**
     * Show the form for creating a new candidate.
     */
    public function create()
    {
        // Ambil semua user untuk ketua dan wakil
        $users = User::all();
        // Ambil semua sekolah
        $schools = School::all();

        return view('candidates.create', compact('users', 'schools'));
    }

    /**
     * Store a newly created candidate in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'ketua_id' => 'required|exists:users,id',
        'wakil_id' => 'nullable|exists:users,id',
        'visi' => 'required|string',
        'misi' => 'required|string',
        'candidate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk satu gambar
        'school_id' => 'required|exists:schools,id', // Validasi untuk school_id
    ]);

    // Simpan gambar kandidat jika ada
    if ($request->hasFile('candidate_image')) {
        $candidateImagePath = $request->file('candidate_image')->store('images/candidates', 'public');
    } else {
        $candidateImagePath = null; // jika tidak ada file
    }

    // Simpan data kandidat
    Candidate::create([
        'name' => $request->input('name'),
        'ketua_id' => $request->input('ketua_id'),
        'wakil_id' => $request->input('wakil_id'),
        'visi' => $request->input('visi'),
        'misi' => $request->input('misi'),
        'candidate_image' => $candidateImagePath, // Pastikan ini sesuai dengan kolom di database
        'school_id' => $request->input('school_id'), // Menyimpan school_id
    ]);

    return redirect()->route('candidate.index')->with('success', 'Candidate created successfully.');
}


    /**
     * Show the form for editing the specified candidate.
     */
    public function edit(Candidate $candidate)
    {
        // Ambil semua user untuk ketua dan wakil
        $users = User::all();
        // Ambil semua sekolah
        $schools = School::all();

        return view('candidates.edit', compact('candidate', 'users', 'schools'));
    }

    /**
     * Update the specified candidate in storage.
     */
    public function update(Request $request, Candidate $candidate)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'ketua_id' => 'required|exists:users,id',
            'wakil_id' => 'nullable|exists:users,id',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'candidate_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk satu gambar
            'school_id' => 'required|exists:schools,id',
        ]);

        // Cek apakah ada file gambar baru yang diunggah
        if ($request->hasFile('candidate_image')) {
            // Hapus gambar lama jika ada
            if ($candidate->candidate_image) {
                Storage::disk('public')->delete($candidate->candidate_image);
            }
            // Simpan gambar baru
            $candidate->candidate_image = $request->file('candidate_image')->store('images/candidates', 'public');
        }

        // Update data kandidat, tetapi tidak mengganti gambar yang sudah ada jika tidak di-upload
        $candidate->update([
            'name' => $request->input('name'),
            'ketua_id' => $request->input('ketua_id'),
            'wakil_id' => $request->input('wakil_id'),
            'visi' => $request->input('visi'),
            'misi' => $request->input('misi'),
            'school_id' => $request->input('school_id'),
            'candidate_image' => $candidate->candidate_image, // Hanya update gambar jika baru di-upload
        ]);

        return redirect()->route('candidate.index')->with('success', 'Candidate updated successfully.');
    }

    /**
     * Remove the specified candidate from storage.
     */
    public function destroy($id)
    {
        // Temukan kandidat berdasarkan ID
        $candidate = Candidate::findOrFail($id);

        // Hapus gambar kandidat jika ada
        if ($candidate->candidate_image) {
            Storage::disk('public')->delete($candidate->candidate_image);
        }

        // Hapus data kandidat
        $candidate->delete();

        return redirect()->route('candidate.index')->with('success', 'Candidate deleted successfully.');
    }

    /**
     * Show the specified candidate details.
     */
    public function show(Candidate $candidate)
    {
        return view('candidates.show', compact('candidate'));
    }
}
