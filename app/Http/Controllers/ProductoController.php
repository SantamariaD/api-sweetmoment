<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Producto;

class ProductoController extends Controller
{
    /*****************Propiedades*****************/

    /***************Metodos******************/

    //INICIO METODO PARA GUARDAR UN PRODUCTO
    public function guardarProducto(Request $request)
    {
        //Recibir datos
        $json = $request->input('json', null);
        $datos_objeto = json_decode($json);
        $datos_array = json_decode($json, true);

        if (!empty($datos_array && $datos_objeto)) {
            //Limpiar datos
            $parametros_array = array_map('trim', $datos_array);

            //Seleccionar los datos a validar
            $validador = \Validator::make($parametros_array, [
                'nombre'          => 'required',
                'precio'          => 'required',
                'id_categoria'    => 'required',
                'descripcion'     => 'required'
            ]);
            //Validación
            if ($validador->fails()) {
                //Mensaje de error
                $respuesta = array(
                    'status' => 'error',
                    'codigo' => 500,
                    'mensaje' => 'Los datos no son correctos.',
                    'errores' => $validador->errors()
                );
            } else {
                //Crear Producto
                $producto = new Producto();
                $producto->nombre = $parametros_array['nombre'];
                $producto->precio = $parametros_array['precio'];
                $producto->descripcion = $parametros_array['descripcion'];
                $producto->id_categoria = $parametros_array['id_categoria'];
                //Guardar producto
                $producto->save();

                //Mensaje de respuesta
                $respuesta = array(
                    'status' => 'correcto',
                    'codigo' => 200,
                    'mensaje' => 'Se creo correctamente el producto.',
                );
            }
        } else {
            //Mensaje de error
            $respuesta = array(
                'status' => 'error',
                'codigo' => 500,
                'mensaje' => 'Informacion no valida.',
            );
        }

        //Retorno de respuesta en json
        return response()->json($respuesta);

    }
    //FIN METODO PARA GUARDAR UN PRODUCTO

    //INICIO METODO PARA TRAER TODOS LOS PRODUCTOS
    public function traerTodosProductos()
    {
        return response()->json(Producto::all());
    }
    //INICIO METODO PARA TRAER TODOS LOS PRODUCTOS
}
