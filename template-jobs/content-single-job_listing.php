<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
global $post;
?>

<?php do_action( 'wp_job_board_pro_before_job_detail', $post->ID ); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('job-single-v1'); ?>>

	<!-- heading -->
	<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/header' ); ?>

	<div class="job-content-area <?php echo apply_filters('superio_job_content_class', 'container');?>">
		<!-- Main content -->
		<?php if ( wp_is_mobile() ) { ?>
			<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'job-listing/mobile' ); ?>
		<?php }else { ?>
			<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'job-listing/desktop' ); ?>
		<?php } ?>
	</div>

</article><!-- #post-## -->

<?php do_action( 'wp_job_board_pro_after_job_detail', $post->ID ); ?>