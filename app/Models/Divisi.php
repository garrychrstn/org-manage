<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'periode'];

    public function periodes()
    {
        return $this->belongsTo(Periode::class, 'periode');
    }
}
