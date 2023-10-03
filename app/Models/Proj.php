<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proj extends Model
{
    use HasFactory;
     
    public function relUsersProj(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected $fillable = [
        'descricao',
        'titulo',
     
    ];
}
