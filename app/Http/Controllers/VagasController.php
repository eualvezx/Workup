<?php



namespace App\Http\Controllers;

use App\Models\Vagas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagasController extends Controller
{
    //
    public function index()
    {   


        $vagess = Vagas::all();
        



           return view ('vagas')->with('vagess', $vagess);
    }

    public function show()
    {
       
        return view ('vagas');
    }

    public function listar(Request $request)
    {
        return $request->id;
        $arquivos = $request->id;
        //dd($arquivos);
        return view ('listararquivos')->withArquivo($arquivos);
    }


    public function create()
    {
        return view('vagas');
    }


    public function store(Request $request)
    {
        $vagas = new Vagas();
        $vagas->titulo =$request->titulo;
        $vagas->salario =$request->salario;
        $vagas->carga_hr =$request->carga_hr;
        $vagas->descricao =$request->descricao;
        $vagas->tipo =$request->tipo;
        //$vagas->qtd_candidatos =$request->qtd_candidatos;
        $vagas->lmt_candidatos = $request->lmt_candidatos;
        $vagas->save();

        return redirect('vages');
    }

    
}
