<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //mengisi mass asignment
    //1 fillable: data yg boleh ditampilkan
    protected $fillable = ['nama_produk','stok','harga'];

    //2 guarded: kebalikan dr fillable
    //protected $guarded = ['id','created'];


    use HasFactory;
}
