<?php
function display_technos(array $technos, string $type, string $iconPath): string
{
    ob_start(); ?>
    <ul>
        <?php foreach ($technos as $techno):
            if ($techno['type'] === $type): ?>
                <li><img src="<?= $iconPath . '\\' . $techno['icon'] ?>">
                    <p><?= $techno['title'] ?></p>
                </li>
            <?php endif;
        endforeach; ?>
    </ul>
    <?php return ob_get_clean();
}