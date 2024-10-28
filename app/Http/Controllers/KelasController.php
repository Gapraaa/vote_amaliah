<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\School;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // Display a listing of the classes
    public function index()
{
    $schools = School::with(['kelas' => function ($query) {
        $query->withCount('users'); // Menghitung total pengguna di setiap kelas
    }])->get();

    return view('admin.datakelas.index', compact('schools'));
}


    // Store a newly created class in the database
    public function store(Request $request)
    {
        // Validate the input
        $request->validate([
            'kode_kelas' => 'required|unique:kelas,kode_kelas',
            'nama_kelas' => 'required',
            'school_id' => 'required|exists:schools,id', // Pastikan school_id ada di tabel schools
        ]);

        // Create a new class
        Kelas::create([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'school_id' => $request->school_id, // Tambahkan school_id
        ]);

        // Redirect back with success message
        return redirect()->route('datakelas.index')->with('success', 'Class created successfully.');
    }

    // Update the specified class in the database
    public function update(Request $request, $id)
    {
        // Find the class by ID
        $kelas = Kelas::findOrFail($id);

        // Validate the input
        $request->validate([
            'kode_kelas' => 'required|unique:kelas,kode_kelas,' . $kelas->id,
            'nama_kelas' => 'required',
            'school_id' => 'required|exists:schools,id', // Validasi school_id
        ]);

        // Update class information
        $kelas->update([
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,
            'school_id' => $request->school_id, // Tambahkan school_id
        ]);

        // Redirect back with success message
        return redirect()->route('datakelas.index')->with('success', 'Class updated successfully.');
    }

    // Remove the specified class from the database
    public function destroy($id)
    {
        // Find the class by ID and delete
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();

        // Redirect back with success message
        return redirect()->route('datakelas.index')->with('success', 'Class deleted successfully.');
    }
}
