<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
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
}
