<?php

use Illuminate\Database\Seeder;

class activo_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
	\DB::table('activo')->insert(array(
    	'nombre' => "Estación de trabajo (PC) - Programadores",
    	'version' => "Dell", 
    	'ultima_actualizacion' => "08/Noviembre/2019",
    	'ultimo_incidente' => "N/A",
    	'proxima_revision' => "15/Diciembre/2019",
    	'datos_responsable' => "Luis Mario Rodriguez Ruiz",
    	'tel_responsable' => "5566891645",
    	'cyber_percent' => 0.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	
	\DB::table('activo')->insert(array(
    	'nombre' => "Plataforma de pagos",
    	'version' => "N/A", 
    	'ultima_actualizacion' => "11/Marzo/2015",
    	'ultimo_incidente' => "08/Enero/2018",
    	'proxima_revision' => "30/Diciembre/2019",
    	'datos_responsable' => "Laura Hernandez Hernandez",
    	'tel_responsable' => "5546791645",
    	'cyber_percent' => 20.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Base de datos de clientes",
    	'version' => "SQL Server", 
     	'ultima_actualizacion' => "16/Marzo/2016",
    	'ultimo_incidente' => "N/A",
    	'proxima_revision' => "30/Febrero/2022",
    	'datos_responsable' => "Ajelandro Ramirez Barrios",
    	'tel_responsable' => "5542930445",
    	'cyber_percent' => 0.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	
	\DB::table('activo')->insert(array(
    	'nombre' => "Servidor web - transacciones",
    	'version' => "Apache 2.0", 
    	'ultima_actualizacion' => "11/Abril/2017",
    	'ultimo_incidente' => "N/A",
    	'proxima_revision' => "20/Eenero/2020",
    	'datos_responsable' => "Jesus Parker Mena",
    	'tel_responsable' => "5584930545",
    	'cyber_percent' => 0.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "TPV",
    	'version' => "ATM", 
    	'ultima_actualizacion' => "20/Enero/2014",
    	'ultimo_incidente' => "20/Noviembre/2019",
    	'proxima_revision' => "30/Diciembre/2019",
    	'datos_responsable' => "Sandra Lopez Garcia",
    	'tel_responsable' => "5543827109",
    	'cyber_percent' => 90.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Equipos Telecomunicaciones",
    	'version' => "Cisco", 
    	'ultima_actualizacion' => "20/Octubre/2018",
    	'ultimo_incidente' => "05/Julio/2016",
    	'proxima_revision' => "20/Diciembre/2019",
    	'datos_responsable' => "Roberto Morales Juarez",
    	'tel_responsable' => "5583901645",
    	'cyber_percent' => 20.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Sistema operativo",
    	'version' => "Windows 10", 
    	'ultima_actualizacion' => "14/Noviembre/2019",
    	'ultimo_incidente' => "12/Noviembre/2019",
    	'proxima_revision' => "20/Mayo/2020",
    	'datos_responsable' => "Ruben Sepulveda Cortez",
    	'tel_responsable' => "5546387654",
    	'cyber_percent' => 5.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Aplicación para TPV",
    	'version' => "N/A", 
    	'ultima_actualizacion' => "18/Marzo/2015",
    	'ultimo_incidente' => "25/Noviembre/2018",
    	'proxima_revision' => "N/A",
    	'datos_responsable' => "Andrea Mendez Suarez",
    	'tel_responsable' => "5590483645",
    	'cyber_percent' => 100.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Servicio de correo electrónico",
    	'version' => "Gmail", 
    	'ultima_actualizacion' => "N/A",
    	'ultimo_incidente' => "07/Septiembre/2018",
    	'proxima_revision' => "N/A",
    	'datos_responsable' => "Laura Hernandez Hernandez",
    	'tel_responsable' => "5542345987",
    	'cyber_percent' => 40.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Infraestructura eléctrica del centro de datos",
    	'version' => "N/A", 
    	'ultima_actualizacion' => "11/Enero/2015",
    	'ultimo_incidente' => "10/Agosto/2019",
    	'proxima_revision' => "30/Diciembre/2019",
    	'datos_responsable' => "Jorge Escamilla Perez",
    	'tel_responsable' => "5302941645",
    	'cyber_percent' => 10.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Personal de desarrollo",
    	'version' => "N/A", 
    	'ultima_actualizacion' => "N/A",
    	'ultimo_incidente' => "N/A",
    	'proxima_revision' => "25/Marzo/2020",
    	'datos_responsable' => "Arturo Jimenez Benites",
    	'tel_responsable' => "5546791645",
    	'cyber_percent' => 0.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));
	\DB::table('activo')->insert(array(
    	'nombre' => "Personal de Telecomunicaciones",
    	'version' => "N/A", 
    	'ultima_actualizacion' => "N/A",
    	'ultimo_incidente' => "N/A",
    	'proxima_revision' => "25/Marzo/2020",
    	'datos_responsable' => "Arturo Jimenez Benites",
    	'tel_responsable' => "5546791645",
    	'cyber_percent' => 0.0,
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
    		));



/// RELACION ACTIVOS AMENAZAS

    // 1  -->  Estación de trabajo (PC) - Programadores
        \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 1,'activo_id' => 1, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 2,'activo_id' => 1, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 3,'activo_id' => 1, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 1, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 5,'activo_id' => 1, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
    // 2  -->  Plataforma de pagos
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 6,'activo_id' => 2, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 2, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 7,'activo_id' => 2, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 2, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
 
    // 3  -->  Base de datos de clientes
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 10,'activo_id' => 3, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 11,'activo_id' => 3, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 12,'activo_id' => 3, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 13,'activo_id' => 3, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 3, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
             
    // 4  -->  Servidor web - transacciones
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 4, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 14,'activo_id' => 4, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 4, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 15,'activo_id' => 4, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 16,'activo_id' => 4, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         

    // 5  -->  TPV
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 17,'activo_id' => 5, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 15,'activo_id' => 5, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 5, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 5, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 1,'activo_id' => 5, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
    // 6  -->  Equipos Telecomunicaciones
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 6, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 6, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 1,'activo_id' => 6, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 12,'activo_id' => 6, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 17,'activo_id' => 6, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            
    // 7  -->  Sistema operativo
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 18,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 16,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 12,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
             \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 20,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
             \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 17,'activo_id' => 7, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
    // 8  -->  Aplicación para TPV
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 21,'activo_id' => 8, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 8, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 7,'activo_id' => 8, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 9,'activo_id' => 8, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 12,'activo_id' => 8, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
             
    // 9  --> Servicio de correo electrónico
        \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 22,'activo_id' => 9, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 9, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 23,'activo_id' => 9, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 24,'activo_id' => 9, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 10,'activo_id' => 9, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
             
    // 10  -->  Infraestructura eléctrica del centro de datos
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 4,'activo_id' => 10, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 25,'activo_id' => 10, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 2,'activo_id' => 10, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 26,'activo_id' => 10, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 27,'activo_id' => 10, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
    // 11 -->  Personal de desarrollo
                     \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 30,'activo_id' => 11, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 3,'activo_id' => 11, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 31,'activo_id' => 11, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 10,'activo_id' => 11, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 12,'activo_id' => 11, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
             
    // 12 -->  Personal de Telecomunicaciones
        \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 32,'activo_id' => 12, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
         \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 33,'activo_id' => 12, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
          \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 34,'activo_id' => 12, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
           \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 35,'activo_id' => 12, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
            \DB::table('activo_amenaza')->insert(array(
        'amenaza_id' => 36,'activo_id' => 12, 'created_at' => date('Y-m-d H:m:s'),'updated_at' => date('Y-m-d H:m:s')
            ));
		
    }
}
