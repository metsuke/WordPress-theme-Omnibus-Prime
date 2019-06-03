<?php
/*
 * Omnibus Prime page template file: page.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */

  get_header();
?>

  <div class="grid">

    <main id="main__content" class="col-xs-12" role="main">

      <?php
        if ( is_user_logged_in() ) {
      ?>

        <a class="edit btn-icn-txt" href="<?php echo get_edit_post_link(); ?>">
          <svg viewBox="0 0 32 32" aria-hidden="true">
            <path d="M15.013,8.505c-0.218,0.218-0.323,0.525-0.286,0.831l0.188,1.493l-0.353-0.353c-0.358-0.358-1.016-0.444-1.453,0.042c-4.078,4.566-6.515,9.168-6.587,12.043c-3.572,3.286-6.226,5.729-6.229,5.731C0.105,28.479,0,28.733,0,28.999v2c0,0.552,0.447,1,1,1L3,32c0.265-0.001,0.52-0.106,0.707-0.294c0.003-0.003,2.444-2.656,5.73-6.227c3.312-0.066,8.885-3.313,14.061-8.49c2.881-2.879,5.205-5.89,6.724-8.704c0.269-0.499,0.073-1.15-0.48-1.392l-0.354-0.155l1.467-0.557c0.257-0.098,0.483-0.307,0.588-0.604c0.797-2.268,0.74-3.944-0.166-4.85C28.937-1.612,21.642,1.876,15.013,8.505z M13.855,11.183l2.412,2.412c-2.831,2.604-5.914,5.44-8.613,7.924C8.169,19.082,10.154,15.329,13.855,11.183z M3,30.999H1v-2l25-23L3,30.999z M30.498,5.246l-3.756,1.429l2.6,1.135c-1.329,2.464-3.483,5.407-6.551,8.473c-4.911,4.91-9.497,7.475-12.315,8.067c6.794-7.385,16.26-17.673,16.26-17.673c0.362-0.395,0.351-1.005-0.028-1.384c-0.38-0.379-0.99-0.392-1.385-0.029c0,0-4.141,3.81-9.054,8.33L15.72,9.212c7.009-7.009,13.373-9.254,14.848-7.777C31.155,2.021,31.153,3.381,30.498,5.246z"/>
          </svg>
          <span><?php _e( 'Edit page', 'omnibus-prime' ); ?></span>
        </a>

      <?php } ?>

      <h2>
        <?php the_title(); ?>
      </h2>

      <?php
        if ( have_posts() ) {

          while ( have_posts() ) {

            the_post();

            the_content();

          }

        }
      ?>

    </main>

  </div>

<?php get_footer(); ?>