<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $table='artikel';

    protected $fillable=[
        'judul','isi','users_id','kategori_artikel_id'
    ];

    public function kategoriArtikel(){
        return $this->belongsTo('KategoriArtikel::class','kategori_artikel_id','id');
    }

    public function user(){
        return $this->belongsTo('user::class','users_id','id');
    }
}
