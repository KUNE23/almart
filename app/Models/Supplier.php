<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Produkmasuk()
    {
        return $this->hasMany(Produkmasuk::class, 'id_supplier');
    }
}
