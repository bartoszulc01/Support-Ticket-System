<?php
   /**
    * 
   */

  global $template;

   ?>
   
<div class="menu">
    <nav class="menu-navbar navbar navbar-expand-lg navbar-light w-100 start-style">
    <a class="navbar-brand py-0 main-logo" href="<?php bloginfo( 'url' ); ?>">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?></a>
        <div class="container-contact">
            <a href="#bs-example-navbar-collapse-1" class="p-0 border-0 navbar-toggler"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'GoSolve' ); ?>">
            <div class="hamburger  js-hamburger">
            <div class="hamburger__burger hamburger__burger--black"></div>
            </div>
            </a>
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse align-self-start',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
    </nav>
</div>