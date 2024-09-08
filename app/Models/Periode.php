<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    use HasFactory;
    protected $fillable = ['year', 'name'];
    
    public function divisiPeriode() {
        return $this->hasMany(Divisi::class, 'periode');
    }
}
