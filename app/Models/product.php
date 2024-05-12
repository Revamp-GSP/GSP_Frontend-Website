<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['produk', 'id_service', 'nama_service', 'deskripsi', 'created_by'];

    protected static function booted() {
        static::updating(function ($product) {
            $product->date_updated = now();
        });
    }

    public function projects() {
        return $this->hasMany(project::class);
    }
}