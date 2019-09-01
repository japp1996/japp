<?php
$ano = \Carbon\Carbon::now()->format('Y');
return [

    'Presentacion' => [
        'Saludo' => 'HOLA',
        'Oficio' => 'JUNIOR PHP-JAVASCRIPT DEVELOPER',
        'Soy' => 'SOY JOSE PADRON',
        'Contratar' => 'Contratar',
        'VerCV' => 'Ver CV'
    ],
    'Menu' => [
        'Inicio' => 'Inicio',
        'Conocimientos' => 'Conocimientos',
        'Contacto' => 'Contacto',
        'Idioma' => 'Idioma'
    ],
    'About' => [
        'Me' => 'Conozca <br> un poco sobre mí<br> antes que nada',
        'Oficio' => 'Venezolano. 22 años. Técnico Superior en Informática. Programador PHP-Javascript. 
                    Experiencia en desarrollo de aplicaciones web, docencia y soporte técnico. Metodología ágil de trabajo y metódica.
                    ',
        'Anos' => 'Apróximadamente 3 años en el área web.',
        'DescargarCV' => 'Descargar CV',
        'Experiencia' => 'Años de Experiencia en el desarrollo web y diseño gráfico',
        'Llamame' => 'LLÁMAME'
    ],
    'Servicios'  => [
        'Ofrecidos' => 'Servicios ofrecidos',
        'Descripcion' => 'Atención ofrecida a cualquiera interesado en subir su negocio a internet y generar ingresos <br> 
                            Si tiene una idea y desea monetizarla a traves de una aplicación ésta es su oportunidad con
                            precios bastante económicos.<br>',
        'Desarrollo' => 'DESARROLLO WEB',
        'DescripcionUno' => 'Aplicaciones web conforme a su necesidad con tecnología estandar y estrategia de desarrollo ágil',
        'Grafico' => 'DISEÑO GRÁFICO',
        'DescripcionDos' => 'Manuales de Marca, Logos, Publicidades, Posts, Videos.',
        'Diseno' => 'DISEÑO WEB',
        'DescripcionTres' => 'Interfaces conforme a requerimientos del cliente, colores corporativos y responsives.',
        'App' => 'APPS MOVILES',
        'DescripcionCuatro' => 'Aplicaciones moviles para Android y IOS.',
    ],
    'Portafolio' => [
        'Portafolio' => 'Portafolio',
        'Proyectos' => 'Proyectos de calidad',
        'Sitio' => 'Sitio web',
        'Sitios' => 'Sitios web',
        'Logos' => 'Logos',
        'Publicidades' => 'Publicidades',
        'Todos' => 'Todos',
        'Publicidad' => 'Publicidad',
        'Contribucion' => 'Contribución en ',
        'Host' => 'Host Gratuito',
        'Repositorio' => 'Repositorio personal de codigos',
    ],
    'Clientes' => [
        'Comentarios' => 'COMENTARIOS DE CLIENTES',
        'Gregorio' => '',
        'Leonardo' => '',
        'Mario' => '',
        'Jose' => ''
    ],
    'Brochure' => [
        'Recibir' => 'RECIBIR MI CATÁLOGO DE OFERTAS',
        'Enviar' => 'Le enviare a su correo un PDF con información más detallada acerca de mis servicios y precios.',
        'Correo' => 'Direccion de correo electronico',
        'Solicitar' => 'Solicitar Cotizacion',

    ],
    'Pie' => [
        'Sigueme' => 'SÍGUEME',
        'Copyright' => 'Copyright © ' . $ano . ' Todos los derechos reservados | Japp'
    ],
    'Contacto' => [
        'Escribeme' => 'Escribeme',
    ]
];