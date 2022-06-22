<?php

use Illuminate\Database\Seeder;
use App\Models\RouteModule;

class RouteModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $route_modules = array(
            array('id' => '1','name' => 'Base de conocimiento','route_name' => 'knowledge_base.index','icon' => 'fas fa-brain','visible' => '1','route_module_id' => NULL,'created_at' => '2022-06-17 06:30:12','updated_at' => '2022-06-17 06:30:12'),
            array('id' => '2','name' => 'Inicio','route_name' => 'knowledge_base.index','icon' => 'fas fa-table','visible' => '1','route_module_id' => '1','created_at' => '2022-06-17 06:30:12','updated_at' => '2022-06-17 06:30:12'),
            array('id' => '3','name' => 'Nuevo','route_name' => 'knowledge_base.create','icon' => 'fa-solid fa-circle-plus','visible' => '1','route_module_id' => '1','created_at' => '2022-06-17 02:53:48','updated_at' => '2022-06-17 02:53:52'),
            array('id' => '4','name' => 'Editar','route_name' => 'knowledge_base.edit','icon' => 'fa-solid fa-square-pen','visible' => '0','route_module_id' => '1','created_at' => '2022-06-17 02:51:49','updated_at' => '2022-06-17 02:51:55'),
            array('id' => '5','name' => 'Reporte','route_name' => 'knowledge_base.index','icon' => 'fas fa-file-chart-pie','visible' => '1','route_module_id' => '1','created_at' => '2022-06-17 06:30:12','updated_at' => '2022-06-17 06:30:12'),
            array('id' => '6','name' => 'Ver','route_name' => 'knowledge_base.show','icon' => 'fas fa-eye','visible' => '0','route_module_id' => '1','created_at' => '2022-06-17 03:00:16','updated_at' => '2022-06-17 03:00:20'),
            array('id' => '7','name' => 'Orden de trabajo','route_name' => 'work_order.index','icon' => 'far fa-clipboard','visible' => '1','route_module_id' => NULL,'created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '8','name' => 'Inicio','route_name' => 'work_order.index','icon' => 'fas fa-table','visible' => '1','route_module_id' => '7','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '9','name' => 'Nuevo','route_name' => 'work_order.create','icon' => 'fa-solid fa-circle-plus','visible' => '1','route_module_id' => '7','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '10','name' => 'Editar','route_name' => 'work_order.edit','icon' => 'fa-solid fa-square-pen','visible' => '0','route_module_id' => '7','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '11','name' => 'Ver','route_name' => 'work_order.show','icon' => 'fas fa-eye','visible' => '0','route_module_id' => '7','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '12','name' => 'Reg. de mantenimiento','route_name' => 'maintenance_record.index','icon' => 'fas fa-briefcase','visible' => '1','route_module_id' => NULL,'created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '13','name' => 'Inicio','route_name' => 'maintenance_record.index','icon' => 'fas fa-table','visible' => '1','route_module_id' => '12','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '14','name' => 'Nuevo','route_name' => 'maintenance_record.create','icon' => 'fa-solid fa-circle-plus','visible' => '1','route_module_id' => '12','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '15','name' => 'Editar','route_name' => 'maintenance_record.edit','icon' => 'fa-solid fa-square-pen','visible' => '0','route_module_id' => '12','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01'),
            array('id' => '16','name' => 'Ver','route_name' => 'maintenance_record.show','icon' => 'fas fa-eye','visible' => '0','route_module_id' => '12','created_at' => '2022-06-17 03:03:58','updated_at' => '2022-06-17 03:04:01')
        );
        RouteModule::insert($route_modules);
    }
}
