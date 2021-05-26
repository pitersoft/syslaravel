<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Cliente']);

       	Permission::create(['name' => 'users'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'users.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'users.create'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'users.edit'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'users.destroy'])->syncRoles([$role1, $role2]);

       	Permission::create(['name' => 'personas'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'personas.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'personas.create'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'personas.edit'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'personas.destroy'])->syncRoles([$role1, $role2]);

       	Permission::create(['name' => 'permisos'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'permisos.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'permisos.create'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'permisos.edit'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'permisos.destroy'])->syncRoles([$role1, $role2]);

       	Permission::create(['name' => 'diligencias'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'diligencias.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'diligencias.create'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'diligencias.edit'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'diligencias.destroy'])->syncRoles([$role1, $role2]);

       	Permission::create(['name' => 'reportevisitas'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportevisitas.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportevisitas.pdf-diligencias'])->syncRoles([$role1, $role2]);

       	Permission::create(['name' => 'reportepermisos'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportepermisos.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportepermisos.pdf-diligencias'])->syncRoles([$role1, $role2]);

       	Permission::create(['name' => 'reportediligencias'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportediligencias.index'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportediligencias.create'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportediligencias.edit'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportediligencias.destroy'])->syncRoles([$role1, $role2]);
       	Permission::create(['name' => 'reportediligencias.pdf-diligencias'])->syncRoles([$role1, $role2]);


    }
}
