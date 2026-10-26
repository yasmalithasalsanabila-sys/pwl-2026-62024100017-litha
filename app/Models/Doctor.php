<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'doctor_code',
        'name',
        'specialization',
        'phone',
        'is_active',
        'poli_id',      // <-- baru
    ];

    // <-- baru: satu Doctor dimiliki oleh satu Poli
    public function poli()
    {
        return $this->belongsTo(Poli::class);
    }
}