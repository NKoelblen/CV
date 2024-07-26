<?php
function display_technos(array $technos, string $type, string $iconPath): string
{
    ob_start(); ?>
    <ul class="d-flex wrap marker-none gap-v-075">
        <?php foreach ($technos as $techno):
            if ($techno['type'] === $type): ?>
                <li class="col-4 d-flex column align-center gap-025">
                    <img src="<?= $iconPath . '\\' . $techno['icon'] ?>">
                    <p><?= $techno['title'] ?></p>
                </li>
            <?php endif;
        endforeach; ?>
    </ul>
    <?php return ob_get_clean();
}