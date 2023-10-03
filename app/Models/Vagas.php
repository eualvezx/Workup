<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vagas extends Model
{
   
    protected $fillable = [
        'titulo',
        'salario',
        'carga_hr',
        'descricao',
        //'qtd_candidatos',
        'lmt_candidatos',
        'tipo',
    ];

}
