<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lista = Ventas::orderBy('id')->simplePaginate(10);

        return view('ventas.index', compact('lista') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $datos = Ventas::create(
            [
                'nombreProducto' => $request->txtnombreProducto,
                'valorCompra' => $request->txtvalorCompra
            ]
        );

        return redirect()->route('ventas.edit', $datos->id)->with('lblmensaje', 'Venta ingresada OK');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $datos = Ventas::find($id);
        return view('ventas.show', compact('datos') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datos = Ventas::find($id);
        return view('ventas.edit', compact('datos') );   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $datos = Ventas::find($id);
        $datos->nombreProducto = $request->input('txtnombreProducto');
        $datos->valorCompra = $request->input('txtvalorCompra');   
        $datos->save();  
        return redirect()->route('ventas.edit', $datos->id )->with('lblmensaje', 'Venta actualizada OK con ID = ' . $datos->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pro = Ventas::find($id);
        if( $pro ){
            $pro->delete();
            return back()->with('lblmensaje', 'Venta con ID = ' . $id . ' eliminado OK');
        }
    }
}
