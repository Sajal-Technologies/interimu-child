<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
global $post;

$meta_obj = WP_Job_Board_Pro_Employer_Meta::get_instance($post->ID);
$cover_photo_url = $meta_obj->get_post_meta('cover_photo');
$style = '';
if ( !empty($cover_photo_url) ) {
    $style = 'style="background-image:url('.$cover_photo_url.');"';
}
?>
<div class="employer-detail-header candidate-detail-header v1" <?php echo trim($style); ?>>
    <div class="container">
        
        <div class="flex-middle-sm row">
        <div class="col-xs-12 col-sm-8">
        <div class="wrapper-breads"><div class="wrapper-breads-inner"><div class="breadscrumb-inner clearfix bg"><h2 class="bread-title"><?php
                            $title = superio_employer_name($post);
                            ?><h1 class="candidate-title">
                            <?php echo trim($title); ?>
                        </h1></h2><div class="clearfix"><ol class="breadcrumb"><li><a href="https://interimu.nl">Home</a>  </li> <li><span class="active"><?php echo trim($title); ?></span></li></ol></div></div></div>
        </div>
    </div>
            <div class="col-xs-12 col-sm-4">
                <div class="candidate-detail-buttons flex-middle justify-content-end-sm">
                    <?php
                        if ( superio_is_wp_private_message() ) {
                            $user_id = WP_Job_Board_Pro_User::get_user_by_employer_id($post->ID);
                            superio_private_message_form($post, $user_id);
                        }
                    ?>
                    <!-- <?php superio_employer_display_follow_btn($post->ID); ?> -->
                </div>
            </div>
        </div>
    </div>
</div>