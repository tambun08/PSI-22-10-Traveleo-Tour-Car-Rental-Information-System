<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSupir extends Model
{
    use HasFactory;
    protected $table = 'assign_supir';
    public $timestamps = false;

    public function supir(){
        return $this->belongsTo(User::class, 'supir_id','id');
    }

    public function pesanan() { 
        return $this->belongsTo(Pesanan::class, 'pesanan_id','id');
    }
}
