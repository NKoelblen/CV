<?php
$technos = [
    [
        'title' => 'MySQL',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'PHP',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Symfony',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Laravel',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'HTML',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Twig',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'CSS',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Sass',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Bootstrap',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'JavaScript',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Wordpress',
        'icon' => '',
        'type' => 'langage'
    ],
    [
        'title' => 'Ubuntu',
        'icon' => '',
        'type' => 'environnement'
    ],
    [
        'title' => 'VSCode',
        'icon' => '',
        'type' => 'environnement'
    ],
    [
        'title' => 'Docker',
        'icon' => '',
        'type' => 'environnement'
    ],
    [
        'title' => 'Postman',
        'icon' => '',
        'type' => 'environnement'
    ],
    [
        'title' => 'Git',
        'icon' => '',
        'type' => 'environnement'
    ],
    [
        'title' => 'GitHub',
        'icon' => '',
        'type' => 'environnement'
    ],
    [
        'title' => 'Figma',
        'icon' => '',
        'type' => 'tool'
    ],
    [
        'title' => 'Illustrator',
        'icon' => '',
        'type' => 'tool'
    ],
    [
        'title' => 'Indesign',
        'icon' => '',
        'type' => 'tool'
    ],
    [
        'title' => 'Asana',
        'icon' => '',
        'type' => 'tool'
    ],
    [
        'title' => 'Notion',
        'icon' => '',
        'type' => 'tool'
    ],
    [
        'title' => 'OVH',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'Doctrine',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'Spotify API',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'JQuery',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'Leaflet JS',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'Yoast SEO',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'Google Analytics',
        'icon' => '',
        'type' => 'other'
    ],
    [
        'title' => 'O2Switch',
        'icon' => '',
        'type' => 'other'
    ],
];

$experiences = [
    [
        'years' => '2024',
        'title' => 'Onoko photo',
        'link' => 'onoko.dev/projects/onoko-photo',
        'description' => 'Blog d\'un photographe amateur',
        'tasks' => [
            'Développement Back-end & Front-end',
            'Architecture MVC',
            'Optimisation de base de données',
            'Back-office & système d\'authentification',
            'Gestion des permissions d\'accès aux photos privées',
            'Sécurisation de l\'accès aux fichiers',
        ],
        'stack' => [
            'PHP',
            'MySQL',
            'Bootstrap'
        ]
    ],
    [
        'years' => '2024',
        'title' => 'Onoko',
        'link' => 'onoko.dev',
        'description' => 'Mon portfolio',
        'tasks' => [
            'Design',
            'Développement Front-end & Back-end',
            'POO',
            'Création de thème',
            'Création de plugin',
            'Post Types & Metaboxes personnalisés',
            'Gestion d\'hébergement'
        ],
        'stack' => [
            'Wordpress',
            'Javascript',
            'Sass',
            'OVH',
        ]
    ],
    [
        'years' => '2024',
        'title' => 'Mmmusic',
        'link' => 'onoko.dev/projects/mmmusic',
        'description' => 'Création dynamique de playlists Spotify',
        'tasks' => [
            'Développement Back-end',
            'Développement d\'API REST',
            'Optimisation de base de données',
            'Back-office & système d\'authentification',
        ],
        'stack' => [
            'Symfony',
            'Doctrine',
            'Twig',
            'Spotify API'
        ]
    ],
    [
        'years' => '2024',
        'title' => 'Théâtre du Lyon',
        'link' => 'onoko.dev/projects/theatre-du-lyon',
        'description' => 'Site Web dune compagnie de théâtre',
        'tasks' => [
            'Revue de code',
            'Développement Front-end & Back-end',
            'Création de thème',
            'Post Types & Metaboxes personnalisés',
            'Traitement de tickets',
        ],
        'stack' => [
            'Wordpress',
            'Figma',
            'Bootstrap'
        ]
    ],
    [
        'years' => '2023-2024',
        'title' => 'Azoth',
        'link' => 'onoko.dev/projects/azoth-v-2',
        'description' => 'Site Web d\'une association d\'Arts martiaux',
        'tasks' => [
            'Design & Maquettes',
            'PAO',
            'Revue de code',
            'Développement Front-end & Back-end',
            'Création de thème',
            'Post Types & Metaboxes personnalisés',
            'Rôles personnalisés',
            'CRON',
            'SEO',
            'Analyse d\'audience',
            'Gestion d\'hébergement',
            'Traitement de tickets',
        ],
        'stack' => [
            'Figma',
            'Illustrator',
            'Wordpress',
            'Bootstrap',
            'JQuery',
            'Leaflet JS',
            'Yoast SEO',
            'Google Analytics',
            'O2Switch'
        ]
    ]
];

function display_techno(array $technos, string $type): string
{
    ob_start(); ?>
    <ul>
        <?php foreach ($technos as $techno):
            if ($techno['type'] === $type): ?>
                <li><img src="<?= $techno['icon'] ?>">
                    <p><?= $techno['title'] ?></p>
                </li>
            <?php endif;
        endforeach; ?>
    </ul>
    <?php return ob_get_clean();
}
?>

<body>
    <header>
        <div>
            <p>Noémie Koelblen</p>
            <h1>Développeuse PHP | Symfony</h1>
        </div>
        <img src="">
    </header>

    <aside>
        <section>
            <h2>Compétences</h2>
            <div>
                <h3>Je parle...</h3>
                <?= display_techno($technos, 'langage'); ?>
            </div>
            <div>
                <h3>J'utilise...</h3>
                <div>
                    <h4>Environnement</h4>
                    <?= display_techno($technos, 'environnement'); ?>
                </div>
                <div>
                    <h4>Outils</h4>
                    <?= display_techno($technos, 'tool'); ?>
                </div>
            </div>
        </section>

        <section>
            <h2>Formations</h2>
            <div>
                <span>2023-2024 | </span>
                <h3>Développement Web</h3>
                <p>→ Titre professionnel Niveau V</p>
            </div>
            <div>
                <span>2008-2009 | </span>
                <h3>Arts Appliqués</h3>
            </div>
        </section>

        <section>
            <h2>Intérêts</h2>
            <ul>
                <li>Arts martiaux</li>
                <li>Dessin</li>
                <li>Photographie</li>
                <li>Musique</li>
                <li>Cinéma</li>
                <li>Beaux Arts</li>
                <li>Voyages...</li>
            </ul>
        </section>

    </aside>

    <main>
        <h2>Expériences</h2>
        <section>
            <h3>J'ai réalisé...</h3>

            <?php foreach ($experiences as $experience): ?>
                <article>
                    <header>
                        <span><?= $experience['years'] ?> | </span>
                        <h3><?= $experience['title'] ?></h3>
                        <a href="https://<?= $experience['link'] ?>"><?= $experience['link'] ?></a>
                    </header>
                    <p>{ <?= $experience['description'] ?> }</p>
                    <ul>
                        <?php foreach ($experience['tasks'] as $task): ?>
                            <li><?= $task ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <ul>
                        <?php foreach ($experience['stack'] as $stack):
                            foreach ($technos as $techno):
                                if ($stack === $techno['title']): ?>
                                    <li>
                                        <img src="<?= $techno['icon'] ?>">
                                        <p><?= $techno['title'] ?></p>
                                    </li>
                                <?php endif;
                            endforeach;
                        endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </section>

        <section>
            <h2>Je pratique...</h2>
            <ul>
                <li>Méthodologie Agile</li>
                <li>Installation WSL</li>
                <li>Configuation de containers d'applications</li>
                <li>Versionning des applicatifs</li>
                <li>Tests unitaires</li>
                <li>Audit de qualité de code</li>
                <li>CI/CD</li>
                <li>Monitoring et maintenance des applicatifs</li>
                <li>Veille informationnelle</li>
            </ul>
            <ul>
                <li>
                    <img src="">
                    <p>Docker</p>
                </li>
                <li>
                    <img src="">
                    <p>Git</p>
                </li>
                <li>
                    <img src="">
                    <p>GitHub</p>
                </li>
                <li>
                    <img src="">
                    <p>PHPUnit</p>
                </li>
                <li>
                    <img src="">
                    <p>PHPStan</p>
                </li>
            </ul>
        </section>
    </main>

    <footer>
        <div>
            <p>63260 Chaptuzat</p>
            <p>Permis B véhiculé</p>
        </div>
        <div>
            <a href="mailto:hello@onoko.dev" target="_blank">hello@onoko.dev</a>
            <a href="tel:0632077408">06.32.07.74.08</a>
        </div>
        <div>
            <a href="https://onoko.dev/" target="_blank">onoko.dev</a>
            <a href="https://github.com/NKoelblen" target="_blank">NKoelblen</a>
            <a href="http://www.linkedin.com/in/no%C3%A9mie-koelblen" target="_blank">noémie-koelblen</a>
        </div>
    </footer>
</body>