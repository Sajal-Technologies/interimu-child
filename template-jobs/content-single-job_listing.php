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
		<div class="row content-job-detail">
			<div class="list-content-job col-xs-12 col-md-<?php echo esc_attr( is_active_sidebar( 'job-single-sidebar' ) ? 8 : 12); ?>">

				<?php do_action( 'wp_job_board_pro_before_job_content', $post->ID ); ?>
				
				<!-- job description -->
				<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/description' ); ?>

				<!-- job application -->
				<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/application' ); ?>
                
                
                <!-- job application form -->
				<div id="main-application-form"><?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/main-apply-email-form' ); ?></div>
                
				<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/photos' ); ?>

				<?php echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/video' ); ?>

	            <!-- job releated -->
	            <?php
		            if ( superio_get_config('job_releated_show', true) ) {
		            	echo WP_Job_Board_Pro_Template_Loader::get_template_part( 'single-job_listing/releated' );
		            }
	            ?>

				<?php do_action( 'wp_job_board_pro_after_job_content', $post->ID ); ?>
			</div>
			
			<?php if ( is_active_sidebar( 'job-single-sidebar' ) ): ?>
				<div class="col-xs-12 col-md-4 sidebar-job">
			   		<?php dynamic_sidebar( 'job-single-sidebar' ); ?>
			   	</div>
		   	<?php endif; ?>
		   	
		</div>
	</div>

</article><!-- #post-## -->

<?php do_action( 'wp_job_board_pro_after_job_detail', $post->ID ); ?>