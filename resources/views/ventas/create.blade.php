@extends('layouts.plantilla')

@section('titulo','Ventas :: Registrar')

@section('contenido')

<div class="container mt-3">
		<div class="row">
			<div class="col-md-12">			
				<div class="card">
					<div class="card-header">
						<strong>Registrar Venta</strong>
					</div>
					<div class="card-body">	
					<form method="POST" action="{{ route('ventas.store') }}">
						@method('POST')
						@csrf
						<div class="form-group">
							<label for="txtnombreProducto">Nombre Producto</label>
							<input type="text" class="form-control" id="txtnombreProducto" name="txtnombreProducto" value="">
						</div>			
						<div class="form-group">
							<label for="txtvalorCompra">Valor Compra</label>
							<input type="text" class="form-control" id="txtvalorCompra" name="txtvalorCompra" value="">
						</div>	
						<button type="submit" class="btn btn-info">Registrar</button>										
					</form>

				</div>
			</div>
			
		</div>
	</div>
	
</div>

@endsection