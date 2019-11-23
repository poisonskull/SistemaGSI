@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <ul>
                            <a class="btn btn-info my-2 my-sm-1" href="{{ url('home') }}">
                                Agregar
                            </a>
                            <a class="btn btn-danger my-2 my-sm-1" href="{{ url('home') }}">
                                Eliminar
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Catalogo de activos</div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Sistema Operativo
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> Windows 10</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> 20/Noviembre/2019
                                            </li>
                                            <li class="list-group-item"><b>Último incidente: </b>N/A</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>15/Diciembre/2019</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Buffer overflow, stack
                                                overflow, elevación de privilegios, denegación de servicio, ejecución de
                                                código remoto, bypass de autenticación.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Plataforma de Pagos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> 1.18.4</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> 08/Julio/2019
                                            </li>
                                            <li class="list-group-item"><b>Último incidente: </b>01/Julio/2019 (Denegación de Servicio)</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>01/Diciembre/2019</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Explotación de vulnerabilidades
                                                de servidores web, inyección SQL, inyección de código JS, Clickjacking,
                                                redirección de URL.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                            Motor de Base de Datos
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b>SQL Server 2016</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> 29/Marzo/2019
                                            </li>
                                            <li class="list-group-item"><b>Último incidente: </b>N/A</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>15/Diciembre/2019</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Fuga de información,
                                                escalamiento de privilegios, inyección SQL, buffer overflow, abuso de
                                                privilegios, alteración de información, denegación de servicio, bypass
                                                de acceso, ejecución de comandos de sistema, ejecución de código remoto.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                            Servidor Web
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> IIS 10.0</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> 18/Agosto/2019</li>
                                            <li class="list-group-item"><b>Último incidente: </b>08/11/2018 (Denegación de Servicio)</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>15/Diciembre/2019</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Bypass de autenticación, suplantación de IP, interceptación pasiva, denegación de servicio, ataque de hombre en el medio, escalamiento de privilegios, pérdida de energía.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                            TPV
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> 2.0.4</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> 01/Marzo/2018</li>
                                            <li class="list-group-item"><b>Último incidente: </b>N/A</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>01/Marzo/2020</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Skimming, malware, mal uso de acceso físico, sniffer en la red, ataque de hombre en el medio, phising, acceso remoto, acceso total a internet, denegación de servicio.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix">
                                            Aplicación para TPV
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> 1.2.8</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> 01/Marzo/2018</li>
                                            <li class="list-group-item"><b>Último incidente: </b>N/A</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>01/Marzo/2020</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Explotación de vulnerabilidades de servidores web, inyección SQL, inyección de código JS, Cross-site request forgery (CSRF), denegación de servicio.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingSeven">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseSeven" aria-expanded="false"
                                            aria-controls="collapseSeven">
                                            Personal de TI
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> N/A</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> N/A</li>
                                            <li class="list-group-item"><b>Último incidente: </b>N/A</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>N/A</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Ingeniería social, secuestro, robo, incidentes de salud, desastres naturales.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingEight">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseEight" aria-expanded="false"
                                            aria-controls="collapseEight">
                                            Personal de Seguridad de la Información
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> N/A</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> N/A</li>
                                            <li class="list-group-item"><b>Último incidente: </b>N/A</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>N/A</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Ingeniería social, secuestro, robo, incidentes de salud, desastres naturales.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingNine">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                            data-target="#collapseNine" aria-expanded="false"
                                            aria-controls="collapseNine">
                                            Datacenter
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <li class="list-group-item"><b>Version:</b> N/A</li>
                                            <li class="list-group-item"><b>Última Actualización: </b> N/A</li>
                                            <li class="list-group-item"><b>Último incidente: </b>01/Agosto/2019</li>
                                            <li class="list-group-item"><b>Próxima revisión: </b>01/Febrero/2020</li>
                                            <li class="list-group-item"><b>Responsable del activo: </b> Luis Mario
                                                Rodríguez Ruiz <b>Teléfono: </b><a
                                                    href="tel:+525529836702">Llamar(525529836702)</a> </li>
                                            <li class="list-group-item"><b>Amenazas:</b> Sismo, explosión, robo, derrumbe, inundación, incendio.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection