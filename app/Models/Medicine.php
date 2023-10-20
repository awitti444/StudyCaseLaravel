<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    // protected $tabel = 'medicines';

    //property yg digunakan untuk menyimpan nama2 column yg bisa diisi valuenya
    protected $fillable = [
        'type',
        'name',
        'price',
        'stock',
    ];
}
