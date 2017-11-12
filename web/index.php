<?php ob_start(); ?>
lorem ipsum
<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . "/../src/layout/default.php"?>