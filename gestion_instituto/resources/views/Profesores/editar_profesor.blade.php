<x-layouts.layout>

    <div class=" flex bg-white justify-center items-center p-5 max-h-full">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form action="/Profesores/{{$profesor->id}}" class="w-1/3  bg-black border rounded-2xl p-5" method='POST'>
            @csrf
            @method('PUT')

            <h1>Editar profesor </h1>

            <div>
                <x-input-label for="nombre" :value="__('nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" value="{{$profesor-> nombre}}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="apellido" :value="__('apellido')" />
                <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" value="{{$profesor-> apellido}}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>


            <!-- Email Address -->
            <div>
                <x-input-label for="emil" :value="__('emil')" />
                <x-text-input id="emil" class="block mt-1 w-full" type="emil" name="emil" value="{{$profesor->email}}" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <label class="form-control w-full max-w-xs ">
                <x-input-label for="departamento" :value="__('departamento')" />
                <select name="departamento" id="departamento" class="text-black">
                    <option disabled selected value="{{$profesor->departamento}}"> {{$profesor->departamento}}</option>
                    <option value="Administración">Administración </option>
                    <option value="Informática">Informática</option>
                    <option value="Comercio">Comercio</option>
                    <option value="Imagen">Imagen</option>
                </select>
            </label>

            <x-primary-button class="ms-3" onclick="confirmEdit(event, this)">
                {{ __('actuilizar') }}
            </x-primary-button>

        </form>

    </div>

    <script>
        function confirmEdit(event, button) {
            event.preventDefault();
            Swal.fire({
                title: "Quieres guardar los cambios?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Guardar",
                denyButtonText: `No Guardar`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire("Guardar", "", "success");
                    button.closest('form').submit();
                } else if (result.isDenied) {
                    Swal.fire("Los cambios no fueron guardados ", "", "info");
                }
            });
        }
    </script>





</x-layouts.layout>