<?php

namespace Modules\Roles\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RolesAndPermissionsTableSeeder extends Seeder
{

    private $presbitero_permissions, $supervisor_permissions, $super_admin_permissions, $junta_nacional_permissions;


    public function __construct()
    {
        /*
        set the default permissions
        */
        $this->super_admin_permissions =  [

                                /* Usuarios */
                                'acceso_usuarios',
                                'Ver Usuario',
                                'Registrar Usuario',
                                'Editar Usuario',
                                'Eliminar Usuario',

                                /* Asignar permisos */
                                'Asignar Permisos',


                                'acceso_permisos',
                                'Ver Permisos',
                                'Registrar Permisos',
                                'Editar Permisos',
                                'Eliminar Permisos',

                                /* Logins */
                                'acceso_logins',
                                'Ver Logins',

                                /* Logs*/
                                'acceso_logs',
                                'Ver LogSistema',


                                /* Roles */
                                'acceso_role',
                                'Ver Role',
                                'Registrar Role',
                                'Editar Role',
                                'Eliminar Role',

                                 /* Empresas */
                                'acceso_empresa',
                                'Ver Empresa',
                                'Registrar Empresa',
                                'Editar Empresa',
                                'Eliminar Empresa',

                              ];



             $this->presbitero_permissions     =  [ ];
             $this->supervisor_permissions     =  [ ];
             $this->junta_nacional_permissions =  [ ];

    }

    public function run()
      {
          // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        foreach ($this->super_admin_permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }




        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Administrador']);
        $role->givePermissionTo($this->super_admin_permissions);

        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Supervisor Nacional']);
        $role->givePermissionTo($this->supervisor_permissions);

         // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Miembro de la Junta Nacional']);
        $role->givePermissionTo($this->junta_nacional_permissions);

        // create the user role and set all user permissions
        $role = Role::create(['name' => 'Presbitero']);
        $role->givePermissionTo($this->presbitero_permissions);




    }
}
