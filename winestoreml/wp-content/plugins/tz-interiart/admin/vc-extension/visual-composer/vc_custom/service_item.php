<?php

$args = array(
    'tz_image'              => '',
    'tz_font_icon'          => 'furniture',
    'tz_icon'               => '',
    'tz_title'              => '',
    'tz_description'        => '',
    'tz_option_readmore'    => 'show',
    'tz_readmore_text'      => '',
    'tz_readmore_link'      => '',
);

extract(shortcode_atts($args, $atts));

$tz_img_id = preg_replace( '/[^\d]/', '', $tz_image);
$tz_width_img ='';
$tz_height_img ='';
$tz_images_info = wp_get_attachment_image_src($tz_img_id, $size='full');
if(isset($tz_images_info) && !empty($tz_images_info)){
    $tz_url_img = $tz_images_info[0];
    $tz_width_img = $tz_images_info[1];
    $tz_height_img = $tz_images_info[2];
}

?>

<div class="tzView_Service_Slide_Item">

    <div class="tzView_Service_Image">
        <img width="<?php echo esc_attr($tz_width_img);?>" height="<?php echo esc_attr($tz_height_img);?>" alt="<?php echo esc_attr($tz_name);?>" src="<?php echo esc_url($tz_url_img);?>">
    </div>
    <div class="tzView_Service_Content">
        <?php
        if($tz_font_icon == 'et-line' || $tz_font_icon == 'elegant'){
            ?>
            <span aria-hidden='true' class='<?php echo esc_attr($tz_icon);?>'></span>
            <?php
        }elseif($tz_font_icon == 'awesome'){
            ?>
            <i class="fa <?php echo esc_attr($tz_icon);?>"></i>
            <?php
        }elseif($tz_font_icon == 'furniture'){
            ?>
            <span data-icon="<?php echo esc_attr($tz_icon)?>" class="icon"></span>
            <?php
        }
        ?>
        <h3 class="tzView_Service_Content_title"><?php echo esc_html($tz_title); ?></h3>
        <p class="tzView_Service_Des"><?php echo esc_html($tz_description);?></p>
        <?php if($tz_option_readmore == 'show' && $tz_readmore_text != '' && $tz_readmore_link != ''):?>
        <a href="<?php echo esc_url($tz_readmore_link);?>" class="tzViewService-readmore"><?php  echo esc_html($tz_readmore_text);?></a>
        <?php endif;?>
    </div>
</div>


