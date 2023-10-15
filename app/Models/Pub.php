<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    use HasFactory;

    public function relUsers(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $fillable=['descricao', 'user_id', ];
   
}

