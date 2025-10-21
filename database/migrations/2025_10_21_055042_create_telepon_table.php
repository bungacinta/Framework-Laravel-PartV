<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    use HasFactory;
    
    protected $table = 'penerbit';
    protected $primaryKey = 'id_penerbit';
    
    protected $fillable = [
        'penerbit',
        'alamat'
    ];
    
    // RELASI KE TELEPON
    public function telepon()
    {
        return $this->hasOne(Telepon::class, 'id_penerbit');
    }
}