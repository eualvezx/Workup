@extends('layouts\app')
@section('content')
    


    <div class=" px-24 rounded-md w-full">
	<div class=" flex items-center justify-between pb-6">
		
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
                            <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Nome
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Data de Upload
								</th>
								
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Tamanho
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Baixar
								</th>
							</tr>
						</thead>
						<tbody>
                        <tr>
								
										

            <?php

            $dir = '../public/storage/files/'.$arquivo.'/publico';
            $dira = '/storage/files/'.$arquivo.'/publico';
            $lista = scandir($dir);
            $listo = dir($dir);
           // var_dump($listo);

            
            //echo($dir);
            
          
            $icon ='https://uxwing.com/wp-content/themes/uxwing/download/file-and-folder-type/page-file-icon.png';
            $pasta='https://icones.pro/wp-content/uploads/2021/04/symbole-de-dossier-noir.png';
           
       
   
           foreach($lista as $listas){
          
            //var_dump($listas);
            if ($listas !="." && $listas !=".." ) {
               $nome= $dir.'/'.$listas;
               $noma= $dira.'/'.$listas;
              
              // var_dump($listas);
             

        //  $data = date ("d/m/Y H:i:s", filemtime($nome));
          $data = date ("d/m/Y", filemtime($nome));
         $peso = filesize($nome).'.bites';

                if(is_dir($nome)){
                  
                   
                    echo"<td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
                    <div class='flex items-center'>
                    <div class='flex-shrink-0 w-10 h-10'>
                    <img 
                    src='$pasta'
                        alt='''' />
                        </div>
                        <div class='ml-3'>
                            <p class='text-gray-900 whitespace-no-wrap'>
                            $listas
                            </p>
                        </div>
                    </div>
            </td>
            <td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
                <p class='text-gray-900 whitespace-no-wrap'>$data</p>
            </td>
            <td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
                <p class='text-gray-900 whitespace-no-wrap'>
                $peso 
                </p>
            </td>
            <td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
            <i class='fa-solid fa-ban fa-2xl'>
            </i>
            </td>
        </tr>
        
                  </tr>";
                }else{
                    echo"<td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
                    <div class='flex items-center'>
                    <div class='flex-shrink-0 w-10 h-10'>
                    <img 
                    src='$icon'
                        alt='''' />
                        </div>
                        <div class='ml-3'>
                            <p class='text-gray-900 whitespace-no-wrap'>
                            $listas
                            </p>
                        </div>
                    </div>
            </td>
            <td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
                <p class='text-gray-900 whitespace-no-wrap'>$data</p>
            </td>
            <td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
                <p class='text-gray-900 whitespace-no-wrap'>
                $peso 
                </p>
            </td>
            <td class='px-5 py-3 border-b border-gray-200 bg-white text-sm'>
            
                <a href='$noma'download>
                    <i class='text-indigo-600 fa-solid fa-file-arrow-down  fa-2xl space-x-2'>
                    </i>
                </a>
            
            </td>
        </tr>
        
                  </tr>";
                 }

           
        }
    }
    
          ?>
           </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

        
 
@endsection


