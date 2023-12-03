<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesifikasi extends Model
{
    protected $table = 'spesifikasi';
    protected $guarded = ['id'];

    public function pemilik(){
        return $this->hasOne(Pemilik::class);
    }
    public function noker(){
        return $this->hasOne(Noker::class);
    }
    public function service(){
        return $this->hasOne(Service::class);
    }

}