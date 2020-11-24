@extends('layouts.plantilla')

@section('titulo','Ventas :: Editar')

@section('contenido')

<div class="container mt-3">

	<div class="row">
		<div class="col-md-12">			
			<div class="card">
				<div class="card-header">
					<strong>Editar Venta</strong>
				</div>
				<div class="card-body">
					<form method="POST" action="{{ route('ventas.update', $datos->id) }}">
						@method('PUT')
						@csrf
						<div class="form-group">
							<label for="txtid">Id</label>
							<input type="text" class="form-control" id="txtid" name="txtid" value="{{ $datos->id }}" readonly>
						</div>
						<div class="form-group">
							<label for="txtnombreProducto">Nombre Producto</label>
							<input type="text" class="form-control" id="txtnombreProducto" name="txtnombreProducto" value="{{ $datos->nombreProducto}}">
						</div>			
						<div class="form-group">
							<label for="txtvalorCompra">Valor Compra</label>
							<input type="text" class="form-control" id="txtvalorCompra" name="txtvalorCompra" value="{{ $datos->valorCompra}}">
						</div>	
						<button type="submit" class="btn btn-info">Editar</button>										
					</form>

				</div>
			</div>
			
		</div>
	</div>
	
</div>


@endsection