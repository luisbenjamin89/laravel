*levantar servidor para tener los recursos habilitados en desarrollo -npm run dev
*levantar serdor - php artisan serve
\*levanrar contenedores - docker compose -d

##creando un CRUD para profesor

creo un ecositema

-   php artisan make:model profesor --all
    -esto crea los sig elementos:
    migracion (para crear las tablas)
    factoria (para generar los datos de las tabla)
    controlador (para poder usar los metodos de esta tabla)
    seeders (para poder ingresar datos a la tabla)
    modelo (para para interacturar con una tabla congreta de la base de datos)
    request (autoriza ,valida los datos del formulario)
    policy ()
    rutas (tengo que crearlas y diran que recursos ofrece mi aplicaicon)

\*creo las rutas gregando en routes / web.php usando le metodo de laraven que me facilita el trabajo y agrego el uso en el
encabezado del documento

use \App\Http\Controllers\ProfesorController;

Route::resource("proefesores",ProfesorController::class);

una vez teniendo esto podemos hacer mostrar la lista de rutas y ya veremos las rutas creadas para cada metodo que podemos ejecutar en el modelo

php artisan route:list

GET|HEAD proefesores .............................................................. proefesores.index › ProfesorController@index
POST proefesores .............................................................. proefesores.store › ProfesorController@store
GET|HEAD proefesores/create ..................................................... proefesores.create › ProfesorController@create
GET|HEAD proefesores/{proefesore} ................................................... proefesores.show › ProfesorController@show
PUT|PATCH proefesores/{proefesore} ............................................... proefesores.update › ProfesorController@update
DELETE proefesores/{proefesore} ............................................. proefesores.destroy › ProfesorController@destroy
GET|HEAD proefesores/{proefesore}/edit .............................................. proefesores.edit › ProfesorController@edit

\*modificamos la migracion con los datos de la tabla que se va a crear en teste caso

Schema::create('profesores', function (Blueprint $table) {
$table->id();
$table->string('nombre');
$table->string('apellido');
$table->string('email');
$table->string('departamento');
; $table->timestamps();
});

\*modificamos la factory de profesores en este caso

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

-   agregamos en el seed la llamada al factory y le decimos cuantos registros queremos que nos inserte en la base de datos

public function run(): void
{
Profesor::factory()->count(100)->create();
//
}

\*ejecutar la migracion

-   si quieres borror todo y volver a crear las tablas y a poblarlas se hace asi (php artisan migrate:fresh --seed )
