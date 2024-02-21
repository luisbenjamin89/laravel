<x-layouts.layout>

    <div class=" flex bg-white justify-center items-center p-5 max-h-full" >
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="/alumnos" class="w-1/3  bg-black border rounded-2xl p-5">
            @csrf
            <h1>Pantall de creacion  </h1>

            <div>
                <x-input-label for="nombre" :value="__('nombre')" />
                <x-text-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value='""' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="apellido" :value="__('apellido')" />
                <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value='""' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="direccion" :value="__('direccion')" />
                <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion" :value='""' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="telefono" :value="__('telefono')" />
                <x-text-input id="telefono" class="block mt-1 w-full" type="text" name="telefono" :value='""' />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div>
                <x-input-label for="emil" :value="__('emil')" />
                <x-text-input id="emil" class="block mt-1 w-full" type="emil" name="emil" :value="old('emil')" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <x-primary-button class="ms-3">
                {{ __('Guardar') }}
            </x-primary-button>

        </form>

    </div>






</x-layouts.layout>
