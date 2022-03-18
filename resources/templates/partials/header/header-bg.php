
<?php
$obraz = get_field( 'obraz' ); ?>
<?php 
    
if ( get_field('obraz') ) : ?>
<section class="header-backgrounds" style="background-image: url('<?php echo esc_url( $obraz['url'] ); ?>');">
    <div class="container h-100">
        <div class="d-flex h-100 flex-column justify-content-end">
        <div class="row justify-content-start">
            <div class="col-lg-12">
                <h1 class="h1"><?php the_field( 'tytul' ); ?></h1>
            </div>
        </div>
       
        </div>
       
    </div>
</section>
<?php endif; ?>
<div class="breadcrumbs">
    <div class="container">
    <?php dynamic_sidebar('blog-sidebar'); ?>
    </div>
</div>
