<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'Mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    public $timestamps = false;
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
        'fakultas'
    ];

    public function ktm(){
        return $this->hasOne(ktm::class, 'id_mahasiswa'); //hasMany untuk one to many
    }
}