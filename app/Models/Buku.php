<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['judul','pengarang','tahun_terbit'];
    
    /**
     * Relasi many-to-one dengan model KategoriBuku
     */
    public function kategori_buku(){
        return $this->belongsTo("App\Models\KategoriBuku","id_kategori_buku");
    }

    /**
     * Relasi many-to-many dengan model Tag melalui tabel pivot tag_buku
     */
    public function tag(){
        return $this->belongsToMany(
            "App\Models\Tag", "tag_buku", "id_buku", "id_tag");
    }
}