<?php
/*
 * Omnibus Prime search form: searchform.php
 *
 * @package Omnibus Prime
 * @since 1.0
 * @version 1.0
 */
?>

<form class="searchbox" action="<?php echo home_url( '/' ); ?>" method="get" role="search">

  <input id="s" name="s" placeholder="<?php _e( 'Search...', 'omnibus-prime' ); ?>" value="<?php echo get_search_query() ?>" aria-label="<?php _e( 'Search for something:', 'omnibus-prime' ); ?>" type="search">

  <button id="searchsubmit" class="btn-icn" name="submit" type="submit">

    <svg viewBox="0 0 32 32" aria-hidden="true">
      <!--
        Puxl icons 1.0: lens.svg - https://puxl.io/puxl-icons
        Created by @MrKanuel, brought by The Puxl Clan with love from Basque Country
        Puxl icons is licensed under the GPL V3 - Copyright © 2018 Puxl
        https://github.com/puxl/puxl-icons/blob/master/LICENSE
      -->
      <path d="M31.121,26.878l-5.982-5.983c-0.925-0.924-2.301-1.119-3.416-0.586l-2.268-2.268 c3.605-4.321,3.383-10.76-0.676-14.817c-4.295-4.296-11.26-4.296-15.556,0c-4.296,4.296-4.296,11.261,0,15.555 c4.057,4.059,10.495,4.283,14.817,0.68l2.269,2.268c-0.531,1.113-0.336,2.487,0.586,3.41l5.984,5.984 c1.171,1.171,3.071,1.171,4.242,0C32.293,29.95,32.293,28.05,31.121,26.878z M17.363,17.363c-3.514,3.516-9.213,3.516-12.729,0 c-3.514-3.514-3.514-9.213,0-12.729c3.514-3.515,9.213-3.515,12.728,0C20.879,8.15,20.879,13.85,17.363,17.363z M30.414,30.414 c-0.78,0.779-2.048,0.779-2.828,0l-5.984-5.984c-0.771-0.781-0.771-2.048,0-2.828c0.78-0.771,2.049-0.781,2.828,0l5.984,5.984 C31.193,28.366,31.193,29.634,30.414,30.414z"/>
    </svg>

    <span><?php esc_attr_e( 'Search', 'omnibus-prime' ); ?></span>

  </button>

</form>
