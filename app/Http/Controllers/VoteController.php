<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\School;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{

    public function DataVote()
    {

        // Fetch all schools
        $schools = School::all();

        // Fetch candidates with their associated vote counts
        $candidates = Candidate::withCount('votes')->get();

        // Group candidates by their associated school
        $candidatesBySchool = [];
        foreach ($candidates as $candidate) {
            $candidatesBySchool[$candidate->school_id][] = $candidate; // Assuming Candidate has a school_id field
        }

        return view('admin.datavote.index', compact('candidatesBySchool', 'schools'));
    }


    public function index()
    {
        // Dapatkan user yang sedang login
        $user = Auth::user();

        // Ambil kandidat dari sekolah yang sama dengan user yang login
        $candidates = Candidate::where('school_id', $user->school_id)->get();

        // Kirim data kandidat ke view 'vote'
        return view('vote', compact('candidates'));
    }


    public function store(Request $request)
    {
        // Dapatkan user yang sedang login
        $user = Auth::user();

        // Validasi kandidat berdasarkan ID dan sekolah
        $candidate = Candidate::where('id', $request->input('candidate_id'))
            ->where('school_id', $user->school_id)
            ->first();

        // Periksa apakah kandidat valid
        if (!$candidate) {
            // Jika kandidat tidak ditemukan atau berasal dari sekolah berbeda, tolak akses
            return redirect()->back()->withErrors('Anda hanya dapat memilih kandidat dari sekolah Anda sendiri.');
        }

        // Lakukan pengecekan apakah user sudah pernah vote sebelumnya
        $hasVoted = \DB::table('votes')
            ->where('user_id', $user->id)
            ->exists();

        if ($hasVoted) {
            // Jika user sudah pernah vote, arahkan ke halaman "sudah vote"
            return redirect()->route('already_vote');
        }

        // Simpan vote baru jika belum pernah vote
        \DB::table('votes')->insert([
            'user_id' => $user->id,
            'candidate_id' => $candidate->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect ke halaman sukses voting
        return redirect()->route('end');
    }


    public function endindex()
{
    // Logout user
    Auth::logout();

    // Tampilkan halaman 'end'
    return view('end');
}

}
