@include('navbar')
@extends('layouts\app')
@section('content')
    
    <div class="container">
            <div>
                <h2> Projetos</h2>
                <hr>
                <button class="text-right">+ </button>
                <button class="text-right">Baixar</button>
            </div>
            <div class="flex col-auto">
            <table class="table-auto border-collapse border border-solid  border-black text-[16px]">
            <thead class="bg-neutral-300"> 
                <tr>
                    <th  >Nome do projeto</th>
                    <th >Data do Upload</th>
                </tr>
            </thead> 

            <?php


            $file = fopen(public_path('aaa.txt'), 'r');

            while(!feof($file)){
            $line = fgets($file);
            echo $line. "<br>";
            }

            fclose($file);






        
            $dir = 'projetos/'.$arquivo;
            $lista = scandir($dir);
            //var_dump($lista);
            

           foreach($lista as $listas){
            if ($listas !="." && $listas !=".." ) {
                var_dump($listas);
            
                if(!is_dir($listas)){
                    $icon ='https://uxwing.com/wp-content/themes/uxwing/download/file-and-folder-type/page-file-icon.png';
                    $pasta='https://icones.pro/wp-content/uploads/2021/04/symbole-de-dossier-rouge.png';
                   // echo "<img src='$icon' width='50'  border='0' />";
                }
                echo"<tr>
                  <td > 
                    <a  href='listar'>
                        <img src='$pasta' width='16'  border='0' /> ola$listas
                    </a>
                  
                 </th>
                 <td>
                  <a > erro </a>
                    </td>
                </tr>";
            }
           
        }
          ?>
            </table>
            <div>
        <H5>Descrição</H5>
        <p>Arquivos relacionados a um novo projeto</p>
    </div>
            </div>
        
    </div>
@endsection
