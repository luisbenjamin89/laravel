<x-layouts.layout>

{{--    <table>--}}
{{--        <tr>--}}
{{--            <th>Nombre</th>--}}
{{--            <th>apellidos</th>--}}
{{--            <th>direccion</th>--}}
{{--            <th>telefono</th>--}}
{{--            <th>e-mail</th>--}}
{{--  @foreach($alumnos as $alumno)--}}
{{--            <tr>--}}
{{--            <td>{{$alumno -> nombre}}</td>--}}
{{--            <td>{{$alumno -> apellido}}</td>--}}
{{--            <td>{{$alumno -> direccion}}</td>--}}
{{--                <td>{{$alumno -> telefono}}</td>--}}
{{--            <td>{{$alumno -> email}}</td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--    </table>--}}

    <div class="overflow-x-auto max-h-full bg-black">
        <button class=" btn btn-primary ">Añadir Alumno</button>
        <table class="table table-xs table-pin-rows table-pin-cols">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>apellidos</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>e-mail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno -> nombre}}</td>
                    <td>{{$alumno -> apellido}}</td>
                    <td>{{$alumno -> direccion}}</td>
                    <td>{{$alumno -> telefono}}</td>
                    <td>{{$alumno -> emil}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</x-layouts.layout>


