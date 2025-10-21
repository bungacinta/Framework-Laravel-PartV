<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    
    protected $table = 'tag';
    protected $primaryKey = 'id_tag';
    protected $fillable = ['tag'];

    /**
     * Relasi many-to-many dengan model Buku
     */
    public function buku(){
        return $this->belongsToMany(
            "App\Models\Buku","tag_buku", "id_tag","id_buku");
    }
}