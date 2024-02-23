*levantar servidor para tener los recursos habilitados en desarrollo -npm run dev
*levantar serdor - php artisan serve
*levanrar contenedores - docker compose -d 

creando  un CRUD para profesor 

creo un ecositema 
* php artisan make:model profesor --all 
-esto crea los sig elementos:
migracion (para crear las tablas)
factoria (para generar los datos de las tabla)
controlador (para poder usar los metodos de esta tabla)
seeders (para poder ingresar datos a la tabla)

*modificamos la migracion con los datos de la tabla que se va a crear en teste caso 
    Schema::create('profesores', function (Blueprint $table) {
           $table->id();
            $table->string('nombre');
            $table->string('apellido');
             $table->string('email');
             $table->string('departamento');
;            $table->timestamps();
        });
*modificamos la factory de profesores en este caso 

   public function definition(): array
    {
        $departamento= ['Ingeniería', 'Administración','comercio'];
        return [
           'nombre' => $this->faker->name(),
           'apellido' => $this->faker->lastname(),
           'email' => $this->faker->unique()->safeEmail(),
           'departamento' => $this->faker()->andomElement($departamento),
        ];
    }
}

*ejecutar la migracion 

- si quieres borror todo y volver a crear las tablas y a poblarlas se hace asi  (php artisan migrate:fresh --seed )
