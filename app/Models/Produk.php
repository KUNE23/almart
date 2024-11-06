<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_produk');
    }
    public function detailtransaksi()
    {
        return $this->hasmany(DetailTransaksi::class, 'id_produk', 'id');
    }
    public function transaksi()
    {
        return $this->hasmany(Transaksi::class, 'id_transaksi', 'id');
    }
}
