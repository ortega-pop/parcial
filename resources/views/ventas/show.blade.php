@extends('layouts.plantilla')

@section('titulo','Ventas :: Ver')

@section('contenido')

<div class="container mt-3">

	<div class="row">
		<div class="col-md-12">

			<div class="card">
				<div class="card-header">
					<strong>Ver Venta</strong>
				</div>
				<div class="card-body">
					<p><strong>Id:</strong>{{ $datos->id }} </p>
					<p><strong>Nombre Producto:</strong>{{ $datos->nombreProducto }} </p>
					<p><strong>Valor Compra:$</strong>{{ $datos->valorCompra }} </p>
				</div>
			</div>
			
		</div>
	</div>
	
</div>


@endsection