<?php
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