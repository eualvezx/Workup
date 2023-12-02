<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
   
    public function relVagas(){
        return $this->belongsTo(User::class, 'criador_vaga_id', 'id');
    }

    protected $fillable = [
        'titulo',
        'salario',
        'carga_hr',
        'descricao',
        //'qtd_candidatos',
        'lmt_candidatos',
        'user',
    ];


    protected $primaryKey = 'id_vaga';
}
