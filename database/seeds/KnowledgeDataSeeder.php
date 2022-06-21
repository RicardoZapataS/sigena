<?php

use Illuminate\Database\Seeder;

class KnowledgeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $knowledge_base_data = array(
            array('id' => '1','team' => 'DVOR','date_event' => '2022-01-03','time_event' => '11:00','type_fail' => 'Ground Check y ajuste de parametros','date_attention' => '2022-01-03','time_attention' => '11:10','time_rehabilitation' => '10','performed_action' => 'Calibracion parametros','replaced' => NULL,'notam' => NULL,'user_id' => '2'),
            array('id' => '2','team' => 'DME','date_event' => '2022-01-03','time_event' => '11:10','type_fail' => 'Verificacion periodica','date_attention' => '02022-01-03','time_attention' => '11:20','time_rehabilitation' => '10','performed_action' => 'Calibracion parametros','replaced' => NULL,'notam' => NULL,'user_id' => '2'),
            array('id' => '3','team' => 'DVOR','date_event' => '2022-01-20','time_event' => '16:00','type_fail' => 'Pre alarma','date_attention' => '2022-01-20','time_attention' => '16:05','time_rehabilitation' => '5','performed_action' => 'Ajuste 9960 Hz Mod.','replaced' => NULL,'notam' => NULL,'user_id' => '3'),
            array('id' => '4','team' => 'DVOR','date_event' => '2022-02-13','time_event' => '11:20','type_fail' => 'Ground Check y ajuste de parametros','date_attention' => '2022-02-13','time_attention' => '11:30','time_rehabilitation' => '10','performed_action' => 'Calibracion parametros','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '5','team' => 'DME','date_event' => '2022-02-13','time_event' => '11:30','type_fail' => 'Verificacion periodica','date_attention' => '2022-02-13','time_attention' => '11:40','time_rehabilitation' => '10','performed_action' => 'Calibracion parametros','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '6','team' => 'DME','date_event' => '2022-02-22','time_event' => '17:40','type_fail' => 'Alarma y transferencia de Tx1 a Tx2','date_attention' => '2022-02-22','time_attention' => '17:45','time_rehabilitation' => '5','performed_action' => 'Reseteo y ajuste parametros.','replaced' => NULL,'notam' => NULL,'user_id' => '2'),
            array('id' => '7','team' => 'DVOR','date_event' => '2022-02-26','time_event' => '17:20','type_fail' => 'Pre alarma','date_attention' => '2022-02-26','time_attention' => '17:25','time_rehabilitation' => '5','performed_action' => 'Ajuste 9960 Hz Mod.','replaced' => NULL,'notam' => NULL,'user_id' => '2'),
            array('id' => '8','team' => 'DVOR','date_event' => '2022-03-20','time_event' => '10:30','type_fail' => 'Ground Check y ajuste de parametros','date_attention' => '2022-03-20','time_attention' => '10:40','time_rehabilitation' => '10','performed_action' => 'Calibracion parametros','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '9','team' => 'DME','date_event' => '2022-03-20','time_event' => '10:40','type_fail' => 'Verificacion periodica','date_attention' => '2022-03-20','time_attention' => '10:50','time_rehabilitation' => '10','performed_action' => 'Calibracion parametros','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '10','team' => 'DME','date_event' => '2022-03-25','time_event' => '14:45','type_fail' => 'Pre  alarma monitor 2','date_attention' => '2022-03-25','time_attention' => '14:50','time_rehabilitation' => '5','performed_action' => 'Ajuste ERP','replaced' => NULL,'notam' => NULL,'user_id' => '3'),
            array('id' => '11','team' => 'DVOR','date_event' => '2022-04-05','time_event' => '17:00','type_fail' => 'Cambio Transmisor por recomendacion','date_attention' => '2022-04-05','time_attention' => '17:05','time_rehabilitation' => '5','performed_action' => 'Transferencia de Tx1 a Tx2','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '12','team' => 'DME','date_event' => '2022-04-05','time_event' => '17:05','type_fail' => 'Cambio Transmisor por recomendacion','date_attention' => '2022-04-05','time_attention' => '17:10','time_rehabilitation' => '5','performed_action' => 'Transferencia de Tx1 a Tx2','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '13','team' => 'DVOR','date_event' => '2022-04-13','time_event' => '17:00','type_fail' => 'Alarma y equipo fuera de servicio','date_attention' => '2022-04-13','time_attention' => '17:15','time_rehabilitation' => '15','performed_action' => 'Reseteo y ajuste parametros.','replaced' => NULL,'notam' => NULL,'user_id' => '4'),
            array('id' => '14','team' => 'DVOR','date_event' => '2022-04-18','time_event' => '10:20','type_fail' => 'Pre alarma','date_attention' => '2022-04-18','time_attention' => '10:30','time_rehabilitation' => '5','performed_action' => 'Ajuste 9960 Hz Mod.','replaced' => NULL,'notam' => NULL,'user_id' => '2'),
            array('id' => '15','team' => 'DVOR','date_event' => '2022-04-22','time_event' => '10:00','type_fail' => 'Alarma y equipo fuera de servicio','date_attention' => '2022-04-22','time_attention' => '10:20','time_rehabilitation' => '40','performed_action' => 'Tx2 U/S y Tx1 OPER. Cambio Tx2 a Tx1 y ajustes.','replaced' => NULL,'notam' => 'Pareq ESPI 230001 SLVRYGYL','user_id' => '2'),
            array('id' => '16','team' => 'DVOR','date_event' => '2022-04-23','time_event' => '18:00','type_fail' => 'Pre alarma por RF Level fuera de rango.','date_attention' => '2022-04-23','time_attention' => '19:00','time_rehabilitation' => '5','performed_action' => 'Ajuste RF Level','replaced' => NULL,'notam' => NULL,'user_id' => '2'),
            array('id' => '17','team' => 'DVOR','date_event' => '2022-04-26','time_event' => '11:00','type_fail' => 'Mantenimiento 49 antenas.','date_attention' => '2022-04-26','time_attention' => '19:05','time_rehabilitation' => '480','performed_action' => 'Manten 49 antenas y calibracion','replaced' => NULL,'notam' => 'C 1166/22','user_id' => '5'),
            array('id' => '18','team' => 'DME','date_event' => '2022-04-26','time_event' => '16:00','type_fail' => 'Cambio Transmisor','date_attention' => '2022-04-26','time_attention' => '16:05','time_rehabilitation' => '5','performed_action' => 'Transferencia de Tx2 a Tx1','replaced' => NULL,'notam' => NULL,'user_id' => '5'),
            array('id' => '19','team' => 'DVOR','date_event' => '2022-05-09','time_event' => '10:20','type_fail' => 'Manten. Antena monitora y conectores','date_attention' => '2022-05-09','time_attention' => '11:20','time_rehabilitation' => '60','performed_action' => 'Manten. Antena monitora y conectores','replaced' => NULL,'notam' => NULL,'user_id' => '3'),
            array('id' => '20','team' => 'DVOR','date_event' => '2022-06-04','time_event' => '11:20','type_fail' => 'U/S DVOR para cambio de modulo TX','date_attention' => '2022-06-04','time_attention' => '14:20','time_rehabilitation' => '180','performed_action' => 'Cambio transmisor y relay SB3. Tx1 y Tx2 OPER. Tx2 al aire.','replaced' => 'CAA S/N 110109 ','notam' => 'C1592/22(trabajo) y C1604/22 (OPER)','user_id' => '4'),
            array('id' => '21','team' => 'DME','date_event' => '2022-06-04','time_event' => '13:00','type_fail' => 'Cambio Transmisor por recomendacion','date_attention' => '2022-06-04','time_attention' => '13:05','time_rehabilitation' => '5','performed_action' => 'Transferencia de Tx1 a Tx2','replaced' => 'Null','notam' => NULL,'user_id' => '4')
        );
        \App\Models\KnowledgeBaseData::insert($knowledge_base_data);
    }
}
