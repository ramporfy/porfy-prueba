<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // cuatro permisos basicos de USUARIOS
        // USUARIOS
        // ---------------------------permiso Nevegar usuario----------------------
        Permission::create([
        	'name'			=> 'Navegar Usuarios',// se crea el nombre del permiso
        	'slug'			=> 'users.index',//se guardara la ruta
        	'description'	=> 'Lista y navega todos los usuarios del sistema',

        	]);
        // ---------------------------permiso ver usuario----------------------
        Permission::create([
        	'name'			=> 'Ver detalle de Usuario',// se crea el nombre del permiso
        	'slug'			=> 'users.show',//se guardara la ruta
        	'description'	=> 'Ver en detalle cada usuario del sistema',

        	]);
        // ---------------------------permiso editar usuario----------------------
        Permission::create([
        	'name'			=> 'Edicion de usuarios',// se crea el nombre del permiso
        	'slug'			=> 'users.edit',//se guardara la ruta
        	'description'	=> 'Editar cualquier dato de un usuario del sistema',

        	]);
        // ---------------------------permiso eliminar usuario----------------------
        Permission::create([
        	'name'			=> 'Eliminar usuario',// se crea el nombre del permiso
        	'slug'			=> 'user.destroy',//se guardara la ruta
        	'description'	=> 'Eliminar cualquier usuario del sistema',

        	]);

        //ROLES
        // cuatro permisos basicos de ROLES        
        // ---------------------------permiso Nevegar ROLES----------------------
        Permission::create([
        	'name'			=> 'Navegar roles',// se crea el nombre del permiso
        	'slug'			=> 'roles.index',//se guardara la ruta
        	'description'	=> 'Lista y navega todos los roles del sistema',

        	]);
        // ---------------------------permiso ver ROLES----------------------
        Permission::create([
        	'name'			=> 'Ver detalle de rol',// se crea el nombre del permiso
        	'slug'			=> 'roles.show',//se guardara la ruta
        	'description'	=> 'Ver en detalle cada rol del sistema',

        	]);
        // ---------------------------permiso crear ROLES----------------------
        Permission::create([
        	'name'			=> 'Creacion de roles',// se crea el nombre del permiso
        	'slug'			=> 'roles.create',//se guardara la ruta
        	'description'	=> 'Editar cualquier dato de un rol del sistema',

        	]);
        // ---------------------------permiso editar ROLES----------------------
        Permission::create([
        	'name'			=> 'Edicion de roles',// se crea el nombre del permiso
        	'slug'			=> 'roles.edit',//se guardara la ruta
        	'description'	=> 'Editar cualquier dato de un rol del sistema',

        	]);
        // ---------------------------permiso eliminar ROLES----------------------
        Permission::create([
        	'name'			=> 'Eliminar rol',// se crea el nombre del permiso
        	'slug'			=> 'roles.destroy',//se guardara la ruta
        	'description'	=> 'Eliminar cualquier rol del sistema',

        	]);

        //PUERTA
        // permisos basicos de las puertas       
        // ---------------------------permiso Nevegar PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Navegar puertas',// se crea el nombre del permiso
        	'slug'			=> 'puertas.index',//se guardara la ruta
        	'description'	=> 'Lista y navega todos los puertas del sistema',

        	]);
        // ---------------------------permiso ver PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Ver detalle de la puerta',// se crea el nombre del permiso
        	'slug'			=> 'puertas.show',//se guardara la ruta
        	'description'	=> 'Ver en detalle cada puerta del sistema',

        	]);
        // ---------------------------permiso crear PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Creacion de puertas',// se crea el nombre del permiso
        	'slug'			=> 'puertas.create',//se guardara la ruta
        	'description'	=> 'Editar cualquier dato de un puerta del sistema',

        	]);
        // ---------------------------permiso editar PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Edicion de puertas',// se crea el nombre del permiso
        	'slug'			=> 'puertas.edit',//se guardara la ruta
        	'description'	=> 'Editar cualquier dato de un puerta del sistema',

        	]);
        // ---------------------------permiso eliminar PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Eliminar puerta',// se crea el nombre del permiso
        	'slug'			=> 'puertas.destroy',//se guardara la ruta
        	'description'	=> 'Eliminar cualquier puerta del sistema',

        	]);
        // ---------------------------permiso Abrir PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Abrir puerta',// se crea el nombre del permiso
        	'slug'			=> 'puertas.abrir',//se guardara la ruta
        	'description'	=> 'Abrir cualquier puerta registrado en el sistema',

        	]);
        // ---------------------------permiso Cerrar PUERTAS----------------------
        Permission::create([
        	'name'			=> 'Cerrar puerta',// se crea el nombre del permiso
        	'slug'			=> 'puertas.cerrar',//se guardara la ruta
        	'description'	=> 'Cerrar cualquier puerta registrado en el sistema',

        	]);
    }

    
}
