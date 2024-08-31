<?php

namespace App\Http\Controllers;
use App\Models\poleras_deportivas;
use Exception;
use Illuminate\Http\Request;

class polerasController extends Controller
{
    //
    public function listapoleras (){
        $poleras = poleras_deportivas::get();

        return response()->json([
            'poleras' => $poleras,
            'status'=> true
        ]);
    }

    public function guardarpoleras (Request $request){
        try{
            $poleras = new poleras_deportivas();

            $poleras->nombre_jugador = $request->nombre_jugador_poleras;
            $poleras->marca = $request->marca_poleras;
            $poleras->talla = $request->talla_poleras;
            $poleras->color = $request->color_poleras;
            $poleras->material = $request->material_poleras;
            $poleras->precio = $request->precio_poleras;
            $poleras->equipo = $request->equipo_poleras;
            $poleras->estado = $request->estado_poleras;

            $poleras -> save();

            return response()-> json([
                'mensaje' => 'poleras deportivas guardado exitosamente ;',
                'status' => true
            ]);

        }catch(Exception $e){
            return response()->json([
                'mensaje'=> 'Error en la api de guardar poleras deportivas',
                'status' => false

            ]);
        }
    }
    public function buscarpoleras ($codigo_poleras){
        
            $poleras = poleras_deportivas::findOrFail($codigo_poleras);
            return response()->json([
                'polera_buscada' => $poleras,
                'status' => true
            ]);

    }

    public function actualizarpoleras (Request $request, $codigo_poleras){
        try{
            $poleras = poleras_deportivas::findOrFail($codigo_poleras);

            $poleras->nombre_jugador = $request->nombre_jugador_poleras;
            $poleras->marca = $request->marca_poleras;
            $poleras->talla = $request->talla_poleras;
            $poleras->color = $request->color_poleras;
            $poleras->material = $request->material_poleras;
            $poleras->precio = $request->precio_poleras;
            $poleras->equipo = $request->equipo_poleras;
            $poleras->estado = $request->estado_poleras;

            $poleras -> update();

            return response()-> json([
                'mensaje' => 'poleras actualizada correctamente ;',
                'status' => true
            ]);

        }catch(Exception $e){
            return response()->json([
                'mensaje'=> 'Error en la api en actualizar poleras',
                'status' => false

            ]);
        }
    }


    public function borrarpoleras( Request $request,$codigo_poleras)
    {
        try{
            $poleras = poleras_deportivas::findOrFail($codigo_poleras);
            $poleras->estado = 0;

            $poleras->update();
            
            return response()->json([
                'mensaje'=>'polera deportiva eliminado correctamente',
                'status'=> true
            ]);
        }catch(Exception $e){
            return response()->json([
                'mensaje'=>'Error en la api en eliminar poleras',
                'status'=> false
            ]); 
        }
    }
}
