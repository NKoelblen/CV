<?php
require_once './technos.php';
require_once './experiences.php';
require_once './functions.php';

$iconPath = './assets/images/icons';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main class="d-flex column justify-between">

        <header class="d-flex justify-end border-bottom">
            <div id="title">
                <p id="name" class="uppercase p-b-05">Noémie Koelblen</p>
                <h1>Développeuse PHP | Symfony</h1>
            </div>
            <img id="avatar" src="./assets/images/avatar.jpg">
        </header>

        <div class="d-flex">
            <aside class="d-flex column justify-between col-4">
                <section>
                    <h2 class="p-t-1">Compétences</h2>
                    <div>
                        <h3 class="medium p-t-1 p-b-05">Je parle...</h3>
                        <?= display_technos($technos, 'langage', $iconPath); ?>
                    </div>
                    <div>
                        <h3 class="medium p-t-1">J'utilise...</h3>
                        <div>
                            <h4 class="light p-v-05">Environnement</h4>
                            <?= display_technos($technos, 'environnement', $iconPath); ?>
                        </div>
                        <div>
                            <h4 class="light p-v-05">Outils</h4>
                            <?= display_technos($technos, 'tool', $iconPath); ?>
                        </div>
                    </div>

                    <div>
                        <h3 class="medium p-t-1 p-b-05">J'apprends...</h3>
                        <?= display_technos($technos, 'learning', $iconPath); ?>
                    </div>
                </section>

                <section>
                    <h2 class="p-t-1">Formations</h2>
                    <div class="d-flex wrap p-t-1">
                        <span>2023-2024 |&#xA0;</span>
                        <h3 class="medium">Développement Web</h3>
                        <p>→ Titre professionnel Niveau V</p>
                    </div>
                    <div class="d-flex wrap p-t-1">
                        <span>2008-2009 |&#xA0;</span>
                        <h3 class="medium">Arts Appliqués</h3>
                    </div>
                </section>

                <section>
                    <h2 class="p-t-1">Intérêts</h2>
                    <ul class="d-flex wrap gap-h-15 marker-none">
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

            <section id="experiences" class="d-flex column justify-between col-8">
                <h2 class="p-t-1">Expériences</h2>
                <div>
                    <h3 class="medium p-t-1">J'ai réalisé...</h3>

                    <?php foreach ($experiences as $experience): ?>
                        <article class="border-bottom p-b-05">
                            <header class="d-flex p-t-1">
                                <span><?= $experience['years'] ?> |&#xA0;</span>
                                <h4 class="medium"><?= $experience['title'] ?></h4>
                                <a href="https://<?= $experience['link'] ?>">&#xA0;→ <?= $experience['link'] ?></a>
                            </header>
                            <p class="p-b-05">{ <i><?= $experience['description'] ?></i> }</p>
                            <div class="d-flex">
                                <ul>
                                    <?php foreach ($experience['tasks'] as $task): ?>
                                        <li><?= $task ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div>
                    <h3 class="medium p-t-1 p-b-05">Je pratique...</h3>
                    <ul class="d-flex wrap gap-h-15 marker-none">
                        <li>Méthodologie <strong>Agile</strong></li>
                        <li>Installation <strong>WSL</strong></li>
                        <li>Configuation de <strong>containers d'applications</strong></li>
                        <li><strong>Versionning</strong> des applicatifs</li>
                        <li><strong>Tests</strong> unitaires</li>
                        <li><strong>Audit</strong> de qualité de code</li>
                        <li><strong>CI/CD</strong></li>
                        <li><strong>Monitoring</strong> & <strong>Maintenance</strong> des applicatifs</li>
                        <li><strong>Veille</strong> informationnelle</li>
                    </ul>
                </div>
            </section>
        </div>

        <footer class="d-flex">
            <div class="d-flex column col-4">
                <p>63260 Chaptuzat</p>
                <p>Permis B véhiculé</p>
            </div>
            <div class="d-flex column col-4">
                <a href="mailto:hello@onoko.dev" target="_blank">hello@onoko.dev</a>
                <a href="tel:0632077408">06.32.07.74.08</a>
            </div>
            <div class="d-flex column col-4">
                <a href="https://onoko.dev/" target="_blank">onoko.dev</a>
                <a href="https://github.com/NKoelblen" target="_blank">NKoelblen</a>
                <a href="http://www.linkedin.com/in/no%C3%A9mie-koelblen" target="_blank">noémie-koelblen</a>
            </div>
        </footer>

    </main>
</body>

</html>