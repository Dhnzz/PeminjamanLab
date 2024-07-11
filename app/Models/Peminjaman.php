<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peminjaman extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ruangan_id',
        'tgl_mulai',
        'tgl_berakhir',
    ];

    public function User(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function Ruangan(): BelongsTo{
        return $this->belongsTo(Ruangan::class);
    }
}
