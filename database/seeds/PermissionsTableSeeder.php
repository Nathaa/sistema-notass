<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //users
        Permission::create([
            'name' => 'Navegar usuario',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalles del usuario',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion del usuario',
            'slug' => 'users.edit',
            'description' => 'Edita cualquier dato del usuarios del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuarios del sistema',
        ]);

        //roles
        Permission::create([
            'name' => 'Navegar roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
            'name' => 'Crear roles',
            'slug' => 'roles.create',
            'description' => 'Crea roles del sistema',
        ]);

        Permission::create([
            'name' => 'Ver  detalle de roles',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Edita cualquier dato un rol del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema',
        ]);

        //periodo
        Permission::create([
            'name' => 'Navegar periodos',
            'slug' => 'periodos.index',
            'description' => 'Lista y navega todos los periodos del sistema',
        ]);

        Permission::create([
            'name' => 'Crear periodos',
            'slug' => 'periodos.create',
            'description' => 'Crea periodos del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de periodos',
            'slug' => 'periodos.edit',
            'description' => 'Edita cualquier dato un periodo del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar periodo',
            'slug' => 'periodos.destroy',
            'description' => 'Eliminar cualquier periodos del sistema',
        ]);

        //rango

        Permission::create([
            'name' => 'Navegar rangoss',
            'slug' => 'rangos.index',
            'description' => 'Lista y navega todos los rangos del sistema',
        ]);

        Permission::create([
            'name' => 'Crear rangoss',
            'slug' => 'rangos.create',
            'description' => 'Crea rangos del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de rangos',
            'slug' => 'rangos.edit',
            'description' => 'Edita cualquier dato un rango del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalle de algun rango',
            'slug' => 'rangos.show',
            'description' => 'Ver cualquier dato un rango del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar rango',
            'slug' => 'rangos.destroy',
            'description' => 'Eliminar cualquier rango del sistema',
        ]);

        //cursos

        Permission::create([
            'name' => 'Navegar cursos',
            'slug' => 'cursos.index',
            'description' => 'Lista y navega todos los cursos del sistema',
        ]);

        Permission::create([
            'name' => 'Crear algun curso',
            'slug' => 'cursos.create',
            'description' => 'Crea cursos del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de cursos',
            'slug' => 'cursos.edit',
            'description' => 'Edita cualquier dato un curso del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar curso',
            'slug' => 'cursos.destroy',
            'description' => 'Eliminar cualquier curso del sistema',
        ]);

        //notas

        Permission::create([
            'name' => 'Navegar notas',
            'slug' => 'notas.index',
            'description' => 'Lista y navega todos los periodos del sistema',
        ]);

        Permission::create([
            'name' => 'Crear notas',
            'slug' => 'notas.create',
            'description' => 'Crea notas del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion de notas',
            'slug' => 'notas.edit',
            'description' => 'Edita cualquier dato notas del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar periodo',
            'slug' => 'notas.destroy',
            'description' => 'Eliminar cualquier nota del sistema',
        ]);

        //alumno
        Permission::create([
            'name' => 'Navegar alumnos',
            'slug' => 'alumnos.index',
            'description' => 'Lista y navega todos los alumnos del sistema',
        ]);

        Permission::create([
            'name' => 'Ver detalles de alumnos',
            'slug' => 'alumnos.show',
            'description' => 'Ver en detalle cada alumno del sistema',
        ]);

        Permission::create([
            'name' => 'Edicion del alumnos',
            'slug' => 'alumnos.edit',
            'description' => 'Edita cualquier dato del alumno del sistema',
        ]);

        Permission::create([
            'name' => 'Eliminar alumnos',
            'slug' => 'alumnos.destroy',
            'description' => 'Eliminar cualquier alumno del sistema',
        ]);
    }
}
