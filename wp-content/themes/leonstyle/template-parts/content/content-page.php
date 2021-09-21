<?php
/**
 * The main template file
 *
 * @package leonstyle
 */

get_header();
?>
    <main class="">
		<?php get_template_part('/template-parts/content/room_slider')?>
		<?php get_template_part('/template-parts/content/sec_wrap')?>
		<?php get_template_part('/template-parts/content/room_area')?>
		<?php get_template_part('/template-parts/content/map_area')?>
		<?php get_template_part('/template-parts/content/movie_area')?>
		<?php get_template_part('/template-parts/content/contact_area')?>
    </main>
</div>

<?php
get_footer();