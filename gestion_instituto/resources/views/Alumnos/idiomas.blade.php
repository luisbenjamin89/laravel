<x-layouts.layout>

    <div class=" flex flex-col justify-center items-center p-5 ¡">
        <div class="card w-1/3 bg-base-100 shadow-xl bg-black">
            <div class="card-body">
                <div class="grid grid-cols-3 gap-3 ">

                    <div>
                        <fieldset>
                            <legend>Idiomas que habla {{$alumno->nombre}}</legend>
                            @foreach($alumno->idioma as $idioma)
                            <h2>{{$idioma->ideoma}}</h2>
                            @endforeach
                        </fieldset>


                    </div>

                </div>


                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Volver</button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>