<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        wp_title('|', true, 'right'); 
        bloginfo('name'); 
        ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="site-header">
        <div class="header-container">
            <h1><?php bloginfo('name'); ?></h1>
            
            <button class="menu-toggle" aria-label="Toggle navigation">
                ☰
            </button>

            <nav class="nav-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="case-studies.php">Case Studies</a></li>
                    <li><a href="aboute-me.php">About Me</a></li>
                </ul>
            </nav>
        </div>
    </header>
    

