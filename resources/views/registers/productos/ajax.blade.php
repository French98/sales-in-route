@include('components.search')
<table class="ui     celled table">
    <thead>
    <th colspan="12">
        <a href="{{url('registers/productos/create')}}">
            <div class="ui small float-right teal labeled icon button">
                <i class="plus icon"></i> Nuevo
            </div>
        </a>
    </th>
    <tr>

    <th>
            @include('components.sort-table',[
                           'field'=>'id_producto',
                           'titulo'=>'id'])

        </th>
        <th>
            @include('components.sort-table',[
                           'field'=>'descripcion',
                           'titulo'=>'Nombre Producto'])

        </th>
        <th> @include('components.sort-table',[
                           'field'=>'color',
                           'titulo'=>'COLOR'])
        </th>
        <th> @include('components.sort-table',[
                           'field'=>'decripcion',
                           'titulo'=>'DESCRIPCION'])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'id_presentacion',
                          'titulo'=>'PRESENTACION'])
        </th>

        <th>
            @include('components.sort-table',[
                          'field'=>'id_marca',
                          'titulo'=>'MARCA '])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'id_unidad',
                          'titulo'=>'UNIDAD '])
        </th>
        <th>
            @include('components.sort-table',[
                          'field'=>'created_by',
                          'titulo'=>'CREADO POR'])
        </th>

        <th>
            @include('components.sort-table',[
                           'field'=>'created_at',
                           'titulo'=>'FECHA DE INGRESO'])


        </th>
        <th>
            @include('components.sort-table',[
                           'field'=>'updated_at',
                           'titulo'=>'ACTUALIZADO'])

        </th>

        <th >
            OPERACIONES
        </th>




    </tr>
    </thead>
    <tbody>
        @if($productos->isEmpty())
        @component('components.empty-table',['total_columns'=>7])
         @endcomponent
        @else
        @foreach($productos as $Product)

        <tr>
            <td>{{$Product->id_producto}}</td>
            <td>{{$Product->descripcion}}</td>
            <td>{{$Product->color}}</td>
            <td>{{$Product->descripcion}}</td>
            <td>{{$Product->id_presentacion}}</td>
            <td>{{$Product->id_marca}}</td>
            <td>{{$Product->id_unidad}}</td>
            <td>{{$Product->created_by}}</td>
            <td>{{$Product->created_at}}</td>
            <td>{{$Product->updated_at}}</td>
            <td >
                <div class="ui buttons">

                        <a href="{{route('Register.Producto.Edit',$Product->id_producto)}}">
                            <button class="ui yellow small button " >
                                MODIFICAR

                            </button>
                        </a>
                        <a href="">
                            <button class="ui red small button">
                                ELIMINAR
                            </button>
                        </a>

                </div>

            </td>

        </tr>

        @endforeach


        @endif

    </tbody>

    </tfoot>
</table>
