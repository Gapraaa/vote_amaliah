<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
