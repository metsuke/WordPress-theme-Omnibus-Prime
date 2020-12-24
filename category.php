<?php
/*
 * Omnibus Prime category file: category.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  get_header();
?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12 col-md-8" role="main">

      <h1>
        <?php
          $category = get_queried_object();
          echo
            esc_html(__('Entries with the category', 'omnibus-prime' )) .
            ' <strong>' .
            $category->slug .
            ' </strong>:';
        ?>
      </h1>

      <?php
        if ( is_category() ) {

          get_template_part( 'loop' );

        }
      ?>

    </main>

    <?php get_sidebar(); ?>

  </div>

<?php get_footer(); ?>
