<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//spatie
use Spatie\Permission\Models\Permission;
class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos =[
            //roles
            'ver-rol', 'crear-rol', 'editar-rol', 'borrar-rol',
            //material
            'ver-material', 'crear-material', 'editar-material', 'borrar-material',
            //caegoria
            'ver-categoria', 'crear-categoria', 'editar-categoria', 'borrar-categoria',
            //tipo
            'ver-tipo', 'crear-tipo', 'editar-tipo', 'borrar-tipo',
            //usuario
            'ver-usuario', 'crear-usuario', 'editar-usuario', 'borrar-usuario',
        ];
        foreach($permisos as $permiso){
            Permission::create(['name'=>$permiso]);
        }
    }
}
