<?php



namespace App\Http\Controllers;

use App\Models\Vagas;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class VagasController extends Controller
{
    //
    public function index()
    {   
        $user = User::all();

        $vagess = Vagas::all();
        
       // dd($vagess);



           return view ('vagas')->with('vagess', $vagess)->withUser('user', $user);
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
        $vagas->criador_vaga_id =$request->criador_vaga_id;
        $vagas->salario =$request->salario;
       $vagas->carga_hr =$request->carga_hr;
        $vagas->user = Auth::user()->id;
        $vagas->descricao =$request->descricao;
        //$vagas->qtd_candidatos =$request->qtd_candidatos;
        $vagas->lmt_candidatos = $request->lmt_candidatos;
        $vagas->save();

        return redirect('vages');
    }

    public function destroy ($id_vaga)
    {
        
        $vagas = Vagas::findOrFail($id_vaga);
        $vagas->delete();
        return redirect('/vages');


    }

    public function edit (Request $request)
    {
       $id = $request->id_vaga;
      // dd($id);

        $vagess = Vagas::where([
            ['id_vaga', '=', $id] 
          ])->get();
         //dd($vagess);
        return view('edita')->with('vagess', $vagess)->withId('id',$id);
    
    }

    public function update (Request $request, $id_vaga)
    {

    $vagas = Vagas::findOrFail($id_vaga);
   // $vagas->titulo = $request->titulo ?? '';
  //  $vagas->descricao = $request->descricao ?? '';
    //$vagas->save();

     $data = [

            'Titulo'=> $request->titulo ?? '',
            'descricao'=> $request->descricao,
            'salario'=> $request->salario,

     ];

    Vagas::where('id_vaga',$request->id_vaga)->update($data);
    $user = User::all();

    $vagess = Vagas::all();
       return view ('vagas')->with('vagess', $vagess)->withUser('user', $user);
        
    }

}
