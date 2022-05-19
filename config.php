<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [],
    'isIndex' => function ($page) {
        return in_array($page->getPath(), ['', '/fr', '/en']);
    },

    // General
    'author' => 'Adnan RIHAN',
    'locale' => 'fr',
    'locales' => [
        'fr' => [
            'lang' => 'fr',
            'territory' => 'FR',
            'icon' => 'flag-fr.svg',
            'alt' => 'FR Flag',
            'description' => "Bienvenu sur mon site personnel: Adnan RIHAN – Architecte Informatique, Développeur Full-Stack, Cryptographe et Pilote d'avion. Je conçois et développe des architectures et solutions de bureau en C/C++/Qt, Web en PHP/NodeJS (Laravel), serveurs headless (Unix et Linux), Administration de réseaux et systèmes mais aussi frontend (HTML/CSS/JS, Bootstrap, VueJS…) bien que ce ne soit pas ma spécialité. En tant que cryptographe, je conçois également des systèmes d'authentification, chiffrement et d'échange de données sécurisées. Pilote d'avion et musicien le reste du temps, j'aime donc voyager.",
            'keywords' => "Développeur, Programmeur, C, C++, Qt, Laravel, Linux, Unix, Bash, Shell, Serveur, Headless, Webapp, Web, Applications de bureau, Architecture système, Ingénieur Système, Cryptographe, PHP, PHP5, PHP7, JS, HTML, HTML5, CSS, CSS2, CSS3, javascript, bootstrap, vuejs, Crypto, Cryptographie, QCA, MikroTik, Ingénieur Certifié MikroTik, MikroTik Certified Engineer, Consultant Certifié MikroTik, MikroTik Certified Consultant, MikroTik Certified Network Associate, MTCNA, MikroTik Certified IPv6 Engineer, MTCIPv6E, MikroTik Certified Routing Engineer, MTCRE, MikroTik Certified Traffic Control Engineer, MTCTCE, MikroTik Certified Wireless Engineer, MTCWE, Formateur Académique Certifié MikroTik, Revendeur Agréé MikroTik",
            'title' => "Architecte Informatique, Développeur Full-Stack, Cryptographe et Pilote",
        ],
        'en' => [
            'lang' => 'en',
            'territory' => 'US',
            'icon' => 'flag-us.svg',
            'alt' => 'Drapeau États-Unis d\'Amérique',
            'description' => "Welcome to my personnal website: Adnan RIHAN – IT Architect, Full-Stack Developer, Cryptographer and Pilot. I design and develop architectures and desktop solutions in C/C++/Qt, Web in PHP/NodeJS (Laravel), headless servers (Unix and Linux), Network and Systems Administration but also frontend (HTML/CSS/JS, Bootstrap, VueJS…) although it is not my specialty. As a cryptographer, I also design authentication, encryption and secure data exchange systems. Pilot and musician the rest of the time, I like to travel.",
            'keywords' => 'Developer, Programmer, C, C++, Qt, Laravel, Linux, Unix, Bash, Shell, Server, Headless, Webapp, Web, Desktop applications, System Architecture, System Engineering, Cryptographer, PHP, PHP5, PHP7, JS, HTML, HTML5, CSS, CSS2, CSS3, javascript, bootstrap, vuejs, Crypto, Cryptography, QCA, MikroTik, Ingénieur Certifié MikroTik, MikroTik Certified Engineer, Consultant Certifié MikroTik, MikroTik Certified Consultant, MikroTik Certified Network Associate, MTCNA, MikroTik Certified IPv6 Engineer, MTCIPv6E, MikroTik Certified Routing Engineer, MTCRE, MikroTik Certified Traffic Control Engineer, MTCTCE, MikroTik Certified Wireless Engineer, MTCWE, MikroTik Certified Academy Trainer, MikroTik Authorized Reseller',
            'title' => "IT Architect, Full-Stack Developer, Cryptographer and Pilot",
        ],
    ],
];
