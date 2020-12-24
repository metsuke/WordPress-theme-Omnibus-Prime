<?php
/*
 * Omnibus Prime archive file: archive.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  get_header();
?>

  <div class="grid">

    <main id="main__content" class="h-feed col-xs-12" role="main">

      <h1><?php _e( 'Archive', 'omnibus-prime' ); ?></h1>

      <section id="archive__search">

        <h2><?php _e( 'Search', 'omnibus-prime' ); ?></h2>

        <?php get_search_form(); ?>

      </section>

      <hr>

      <section id="archive__months">

        <h2><?php _e( 'Posts by Month:', 'omnibus-prime' ); ?></h2>

        <ul>
          <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>

      </section>

      <hr>

      <section id="archive__categories">

        <h2><?php _e( 'Posts by category:', 'omnibus-prime' ); ?></h2>

        <ul>
          <?php
            wp_list_categories( array(
              'title_li' => ''
            ) );
          ?>
        </ul>

      </section>

    </main>

  </div>

<?php get_footer(); ?>
