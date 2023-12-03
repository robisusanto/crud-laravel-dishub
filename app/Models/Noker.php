<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noker extends Model
{
    use HasFactory;
    protected $table = 'noker';
    protected $guarded = ['id'];

    public function spesifikasi(){
        return $this->belongsTo(Spesifikasi::class,'foreign_key');
    }

}