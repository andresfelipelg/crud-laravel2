@extends("layout.plantilla")




@section("contenido")

<ul>

    @foreach ($productos as $producto )

    <li>{{$producto->nombre_articulo}}</li>    <li>{{$producto->seccion}}</li>
   

        
    @endforeach

</ul>

@endsection
