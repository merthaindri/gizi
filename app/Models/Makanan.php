<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_makanan', 'nama_makanan', 'natrium', 'kalium', 'protein', 'indeks_glikemik', 'cara_pengolahan'
    ];

    public function natriumInfo() {
        return $this->belongsTo(SubKriteria::class, 'natrium');
    }

    public function kaliumInfo() {
        return $this->belongsTo(SubKriteria::class, 'kalium');
    }

    public function proteinInfo() {
        return $this->belongsTo(SubKriteria::class, 'protein');
    }

    public function indeksGlikemik() {
        return $this->belongsTo(SubKriteria::class, 'indeks_glikemik');
    }

    public function caraPengolahan() {
        return $this->belongsTo(SubKriteria::class, 'cara_pengolahan');
    }
}
