<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class amenaza_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    \DB::table('amenaza')->insert(array(
           'nombre' => "Robo " ,
           'nivel'  => 6,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
        \DB::table('amenaza')->insert(array(
           'nombre' => "Sabotaje" ,
           'nivel'  => 2,
           'control' => 'Restauración (DRP)',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Mal uso de privilegios" ,
           'nivel'  => 6,
           'control' => 'Mínimo de privilegios + Política de seguridad',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Denegación de servicios" ,
           'nivel'  => 3,
           'control' => 'Alta disponibilidad',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Errores" ,
           'nivel'  => 3 ,
           'control' => 'Campañas de concienciación',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Inyección de código" ,
           'nivel'  => 9 ,
           'control' => 'Política de Desarrollo Seguro + DAST + SAST',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Rompimiento de técnicas de cifrados" ,
           'nivel'  => 2 ,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Bomba lógica " ,
           'nivel'  => 2 ,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Acceso no autorizado" ,
           'nivel'  => 7,
           'control' => 'Minimo privilegio – control de acceso',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Fuga de información" ,
           'nivel'  =>  7,
           'control' => 'Política de Desarrollo Seguro + DAST + SAST',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Robo de información" ,
           'nivel'  =>  8,
           'control' => 'Mínimo de privilegios + cifrado',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Abuso de privilegios" ,
           'nivel'  => 2,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Alteración de información" ,
           'nivel'  =>  6,
           'control' => 'Cifrado + Control de integridad de archivos FIM',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Suplantación de IP" ,
           'nivel'  =>  2,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Ataque de hombre en el medio" ,
           'nivel'  =>  2,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Escalamiento de privilegios" ,
           'nivel'  =>  2,
           'control' => 'Hardening de equipos + Monitoreo de Cuentas',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Malas configuraciones" ,
           'nivel'  =>  6,
           'control' => 'Hardening + Política de Seguridad',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Acceso local no autorizado" ,
           'nivel'  =>  2,
           'control' => 'Hardening de equipos + Monitoreo de Cuentas',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Acceso remoto no autorizado" ,
           'nivel'  =>  2,
           'control' => 'Control de acceso MFA',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Buffer overflow" ,
           'nivel'  =>  1,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Ejecución de código no autorizado" ,
           'nivel'  =>  2,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Phishing" ,
           'nivel'  =>  9,
           'control' => 'Configuraciones seguras de servicio de correo + Monitoreo',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Malware" ,
           'nivel'  =>  9,
           'control' => 'Configuraciones seguras de servicio de correo + Monitoreo + sandbox',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Usurpación de identidad" ,
           'nivel'  =>  7,
           'control' => 'Control de Acceso + MFA',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Sobrecarga de líneas eléctricas" ,
           'nivel'  =>  2,
           'control' => 'UPS',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Vandalismo" ,
           'nivel'  =>  1,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Error humano del mantenimiento" ,
           'nivel'  =>  9,
           'control' => 'Política de control de acceso físico al DC – Control de acceso biométrico',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Penalizaciones por incumplimiento" ,
           'nivel'  =>  6,
           'control' => 'Auditorías Internas + Validación de contrato + buenas prácticas',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Uso de malas prácticas de desarrollo" ,
           'nivel'  =>  2,
           'control' => 'Política de desarrollo seguro + Buenas prácticas (OWASP)',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Ingeniería social" ,
           'nivel'  =>  7,
           'control' => 'Conciencia de seguridad',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    
    \DB::table('amenaza')->insert(array(
           'nombre' => "Conflictos de interés" ,
           'nivel'  =>  6,
           'control' => 'Concienciación',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Fraude" ,
           'nivel'  =>  2,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Errores del personal" ,
           'nivel'  =>  6,
           'control' => 'Campañas de concienciación + Política de actas al personal',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Inconformidad" ,
           'nivel'  =>  7,
           'control' => 'Campañas de concienciación + Capacitación',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Carga de estrés" ,
           'nivel'  =>  6,
           'control' => 'Capacitación',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
    \DB::table('amenaza')->insert(array(
           'nombre' => "Extorsión" ,
           'nivel'  =>  2,
           'control' => 'N/A',
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
        ));
		
    }
}
