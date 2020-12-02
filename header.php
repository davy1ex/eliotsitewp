<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliotsite</title>
</head>
<body>
    <header class="container">
        <div class="logo"><img src="<?php the_field('logo_header') ?>" alt=""></div>
        <?php wp_nav_menu([
            'container' => 'nav'
        ]) ?>
        <!-- <nav>
            <ul>
                <li><a href="">tour</a></li>
                <li><a href="">music</a></li>
                <li><a href="">video</a></li>
                <li><a href="">posts</a></li>
            </ul>
        </nav> -->
    </header>

<?php wp_head() ?>