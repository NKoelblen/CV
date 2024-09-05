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
                    <div class="d-flex wrap p-t-05">
                        <span>2015-2024 |&#xA0;</span>
                        <h3 class="medium">Développement Web</h3>
                        <p>→ Autodidacte</p>
                        <p>→ 2024 : Titre professionnel Niveau V</p>
                    </div>
                    <div class="d-flex wrap p-t-05">
                        <span>2013-2015 |&#xA0;</span>
                        <h3 class="medium">BTS Assistante de Manager</h3>
                    </div>
                    <div class="d-flex wrap p-t-05">
                        <span>2008-2009 |&#xA0;</span>
                        <h3 class="medium">Arts Appliqués</h3>
                    </div>
                </section>

                <section>
                    <h2 class="p-t-1">Intérêts</h2>
                    <ul class="d-flex wrap gap-h-15">
                        <li>Arts martiaux</li>
                        <li>Beaux Arts</li>
                        <li>Photographie</li>
                        <li>Cinéma</li>
                        <li>Musique</li>
                        <li>Littérature</li>
                        <li>Voyages...</li>
                    </ul>
                </section>

            </aside>

            <section id="experiences" class="d-flex column justify-between col-8">

                <p class="p-t-05">
                    <!-- Naturellement <strong>curieuse</strong> et <strong>engagée</strong>, depuis plus d'une
                    décénie de carrière, mes différents métiers m'ont permis d'acquérir l'<strong>autonomie</strong>, la
                    <strong>rigueur</strong>
                    et l'esprit d'<strong>équipe</strong>
                    nécessaires au Développement Web. -->
                    En complément de ce curriculum, je vous
                    invite également à visiter <strong>mon portfolio</strong> : <a
                        href="https://onoko.dev">onoko.dev</a>, <br> ainsi qu'à
                    consulter mes résultats au <strong>test de
                        personnalité</strong> AssessFirst : <a
                        href="https://my.assessfirst.com/public/profile/pke14irg-noemie-koelblen?lang=fr-FR">my.assessfirst.com</a>.
                </p>


                <div class="p-t-05">
                    <h2 class="">Expériences</h2>
                    <h3 class="medium p-t-05 p-b-05">Je pratique...</h3>
                    <ul id="practices" class="d-flex wrap gap-h-15">
                        <li>Analyse des <strong>besoins clients</strong></li>
                        <li>Gestion de <strong>Projet</strong></li>
                        <li>Méthodologie <strong>Agile</strong></li>
                        <li>Développement <strong>Back-end</strong></li>
                        <li><strong>Intégration Front-end</strong></li>
                        <li><strong>POO</strong> (Programmation Orientée Objet)</li>
                        <li><strong>Revue</strong> de code</li>
                        <li>Optimisation de <strong>Bases de données</strong></li>
                        <li><strong>Tests</strong> unitaires</li>
                        <li>Audit de <strong>Qualité</strong> de code</li>
                        <li>Optimisation des <strong>Performances</strong></li>
                        <li><strong>Formation</strong> aux utilisateurs</li>
                        <li>Traitement de <strong>tickets</strong></li>
                        <li><strong>Monitoring</strong> & <strong>Maintenance</strong> des applicatifs</li>
                        <li><strong>Référencement</strong> (SEO)</li>
                        <li>Analyse d'<strong>Audience</strong></li>
                        <li>Installation <strong>WSL</strong></li>
                        <li>Configuation de <strong>Containers</strong></li>
                        <li><strong>CI/CD</strong></li>
                        <li><strong>Versionning</strong> des applicatifs</li>
                        <li>Gestion d'<strong>Hébergement</strong></li>
                        <li><strong>Veille</strong> technologique</li>
                    </ul>
                </div>

                <div>
                    <h3 class="medium p-t-05">J'ai réalisé...</h3>

                    <?php foreach ($experiences as $key => $experience): ?>
                        <article
                            class="<?= $key !== 0 ? "border-top" : '' ?> <?= $key + 1 !== count($experiences) ? "p-b-05" : '' ?>">
                            <header class=" d-flex p-t-1 justify-between">
                                <h4 class="medium"><?= $experience['techno'] ?></h4>
                                <p>{ <?= implode(' | ', $experience['stack']) ?> }</p>
                            </header>
                            <?php foreach ($experience['projects'] as $project): ?>
                                <div>
                                    <div class="d-flex p-t-05">
                                        <span><?= $project['years'] ?> |&#xA0;</span>
                                        <h5 class="medium"><?= $project['title'] ?></h5>
                                        <?php if (isset($project['link'])): ?>
                                            <a href="https://<?= $project['link'] ?>">&#xA0;→ <?= $project['link'] ?></a>
                                        <?php endif; ?>
                                    </div>
                                    <p>→ <i><?= $project['description'] ?></i></p>
                                </div>
                            <?php endforeach; ?>
                            <?php if (isset($experience['tasks'])): ?>
                                <div class="d-flex">
                                    <ul class="p-t-1 d-flex wrap gap-h-15">
                                        <?php foreach ($experience['tasks'] as $task): ?>
                                            <li><?= $task ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>

            </section>

        </div>

        <footer class="d-flex">
            <div class="d-flex column justify-center col-4 p-l-2 p-r-1">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path
                            d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z" />
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z" />
                    </svg>
                    <span>63260 Chaptuzat</span>
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-car-front-fill" viewBox="0 0 16 16">
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg>
                    <span>Permis B véhiculé</span>
                </p>
            </div>
            <div class="d-flex column justify-center col-4 p-h-1">
                <a href="mailto:hello@onoko.dev" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                    </svg>
                    <span>hello@onoko.dev</span>
                </a>
                <a href="tel:0632077408">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg>
                    <span>06.32.07.74.08</span>
                </a>
            </div>
            <div class="d-flex column justify-center col-4 p-l-1 p-r-2">
                <a href="https://onoko.dev/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-globe" viewBox="0 0 16 16">
                        <path
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z" />
                    </svg>
                    <span>onoko.dev</span>
                </a>
                <a href="https://github.com/NKoelblen" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path
                            d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8" />
                    </svg>
                    <span>NKoelblen</span>
                </a>
                <a href="http://www.linkedin.com/in/no%C3%A9mie-koelblen" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path
                            d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z" />
                    </svg>
                    <span>noémie-koelblen</span>
                </a>
            </div>
        </footer>

    </main>
</body>

</html>