<?php
require_once './technos.php';
require_once './experiences.php';
require_once './practices.php';
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
    <header>
        <div>
            <p>Noémie Koelblen</p>
            <h1>Développeuse PHP | Symfony</h1>
        </div>
        <img src="./assets/images/avatar.jpg">
    </header>


    <main>
        <aside>
            <section>
                <h2>Compétences</h2>
                <div>
                    <h3>Je parle...</h3>
                    <?= display_technos($technos, 'langage', $iconPath); ?>
                </div>
                <div>
                    <h3>J'utilise...</h3>
                    <div>
                        <h4>Environnement</h4>
                        <?= display_technos($technos, 'environnement', $iconPath); ?>
                    </div>
                    <div>
                        <h4>Outils</h4>
                        <?= display_technos($technos, 'tool', $iconPath); ?>
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

        <section>
            <h2>Expériences</h2>
            <div>
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
                                            <img src="<?= $iconPath . '\\' . $techno['icon'] ?>">
                                            <p><?= $techno['title'] ?></p>
                                        </li>
                                    <?php endif;
                                endforeach;
                            endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>

            <div>
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
                    <?php foreach ($practices as $practice):
                        foreach ($technos as $techno):
                            if ($practice === $techno['title']): ?>
                                <li>
                                    <img src="<?= $iconPath . '\\' . $techno['icon'] ?>">
                                    <p><?= $techno['title'] ?></p>
                                </li>
                            <?php endif;
                        endforeach;
                    endforeach; ?>
                </ul>
            </div>
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

</html>