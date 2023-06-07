
<?php echo get_header(); ?>

<?php
echo "<div id='nav'>";
//hiermee haal je het menu gesaved onder "extra-menu" op
echo wp_nav_menu( array( 'theme_location' => 'extra-menu' ) );

?>
</div>

<h1><?php the_title(); ?></h1>

<p><?php the_content(); ?></p>
<link ref="stylesheet" href="style.css">
