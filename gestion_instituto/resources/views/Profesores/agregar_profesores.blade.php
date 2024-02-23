<x-layouts.layout>

    <div class=" flex bg-white justify-center items-center p-5 max-h-full">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="/Profesores" class="w-1/3  bg-black border rounded-2xl p-5">
            @csrf
            <h1>Pantall de agregacion de profesores </h1>

            <div>
                <x-input-label for="nombre" :value="__('nombre')" />
                @foreach($errors->get('nombre') as $error)
                <p class="text-red-500 text-sm">{{$error}}</p>
                @endforeach
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value='""' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="apellido" :value="__('apellido')" />
                @foreach($errors->get('apellido') as $error)
                <p class="text-red-500 text-sm">{{$error}}</p>
                @endforeach
                <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value='""' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('email')" />
                @foreach($errors->get('email') as $error)
                <p class="text-red-500 text-sm">{{$error}}</p>
                @endforeach
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" />

            </div>

            <label class="form-control w-full max-w-xs ">
                <x-input-label for="departamento" :value="__('departamento')" />
                <select name="departamento" id="departamento">
                    <option disabled selected>selectionar departamento</option>
                    <option value="Administración">Administración </option>
                    <option value="Informática">Informática</option>
                    <option value="Comercio">Comercio</option>
                    <option value="Imagen">Imagen</option>
                </select>
            </label>


            <x-primary-button class="ms-3">
                {{ __('Guardar') }}
            </x-primary-button>

        </form>

    </div>

</x-layouts.layout>