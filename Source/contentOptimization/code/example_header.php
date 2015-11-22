<?php global $smof_data;?>
<!doctype html>
<?php
$rtl = '';
if ((isset($smof_data['ft_rtl']) && $smof_data['ft_rtl'] == 1) || (isset($_GET['rtl']) && $_GET['rtl'] == 'true') || is_rtl()) {
	$rtl = 1;
} else {
	$rtl = '';
}

?>
<html <?php language_attributes();?> <?php echo ($rtl == 1)?'dir="rtl"':''?>>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right');
?><?php bloginfo('name');
?></title>
    <meta name="generator" content="Enpine Theme By FameThemes" />
    <script type="text/javascript" src="wp-includes/js/piwik.js"></script>
        <script type="text/javascript" src="wp-includes/js/visitor_cookies.js"></script>
<?php if (!empty($smof_data['ft_favicon'])):?><link rel="shortcut icon" href="<?php echo esc_url($smof_data['ft_favicon']);?>" type="image/x-icon" /><?php endif;
?>
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png" />
<?php wp_head();?>

</head>
<body <?php body_class();?>>
<header id="header">
    <div class="wrapper clearfix">
        <div class="ft-hdleft">
            <a class="ft-jpbutton" href="#menu"><i class="icon-reorder"></i></a>
            <div class="ft-logo" <?php if (!empty($smof_data['ft_logo_margin'])):?>style="margin-top:<?php if (!empty($smof_data['ft_logo_margin'])):?><?php echo esc_attr($smof_data['ft_logo_margin']);?><?php endif;?>px"<?php endif;
?>>
<?php if (!empty($smof_data['ft_logo'])):?><?php if (is_home() || is_front_page()):?>
                <h1 class="ct-logo"><a href="http://digitant.co/" title="<?php bloginfo('name');?>"><img src="<?php echo esc_url($smof_data['ft_logo']);?>" width="<?php if (!empty($smof_data['ft_logo_width'])):?><?php echo esc_attr($smof_data['ft_logo_width']);?><?php endif;?>" height="<?php if (!empty($smof_data['ft_logo_height'])):?><?php echo esc_attr($smof_data['ft_logo_height']);?><?php endif;?>" alt="<?php bloginfo('name');?>" /></a></h1>
<?php  else :?>
                <div class="ct-logo"><a href="http://digitant.co/" title="<?php bloginfo('name');?>"><img src="<?php echo esc_url($smof_data['ft_logo']);?>" width="<?php if (!empty($smof_data['ft_logo_width'])):?><?php echo esc_attr($smof_data['ft_logo_width']);?><?php endif;?>" height="<?php if (!empty($smof_data['ft_logo_height'])):?><?php echo esc_attr($smof_data['ft_logo_height']);?><?php endif;?>" alt="<?php bloginfo('name');?>" /></a></div>
<?php endif;?><?php  else :?><?php if (is_home() || is_front_page()):?>
                <h1 class="ct-logo"><a href="http://digitant.co/" title="<?php bloginfo('name');?>"><?php bloginfo('name');
?></a></h1>
<?php  else :?>
                <div class="ct-logo"><a href="http://digitant.co/" title="<?php bloginfo('name');?>"><?php bloginfo('name');
?></a></div>
<?php endif;?>
                <?php endif;?></div>
        </div>

        <div class="ft-hdright clearfix">
            <div class="ft-mobile">
<?php if (has_nav_menu('mobile_navigation')):?>
                <?php wp_nav_menu(array('theme_location' => 'mobile_navigation', 'container' => false, 'menu_class' => 'mobilemenu', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 3, 'items_wrap' => '<ul class="mobilemenu">%3$s</ul>'));?>
                <?php  else :?>
                <?php endif;?>
</div>
            <nav class="ft-menu">
<?php if (has_nav_menu('primary_navigation')):?>
                <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'container' => false, 'menu_class' => 'primenu', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 3, 'items_wrap' => '<ul class="primenu">%3$s</ul>'));?>
                <?php  else :?>
                <p class="ft-nomenus"><?php _e('Please Setup Your Menus : Dashboard -> Appearance -> Menus', 'ft');?></p>
<?php endif;?>
</nav>
            <div class="ft-icons">
                <ul>
<?php if (!empty($smof_data['ft_rss'])):?><li><a rel="nofollow" target="_blank" href="<?php echo esc_url($smof_data['ft_rss']);?>"><i class="icon-rss"></i></a></li><?php endif;
?>
                    <?php if (!empty($smof_data['ft_twitter'])):?><li><a rel="nofollow" target="_blank" href="http://twitter.com/<?php echo esc_attr($smof_data['ft_twitter']);?>"><i class="icon-twitter"></i></a></li><?php endif;
?>
                    <?php if (!empty($smof_data['ft_facebook'])):?><li><a rel="nofollow" target="_blank" href="<?php echo esc_url($smof_data['ft_facebook']);?>"><i class="icon-facebook"></i></a></li><?php endif;
?>
                    <?php if (!empty($smof_data['ft_google_plus'])):?><li><a rel="nofollow" target="_blank" href="<?php echo esc_url($smof_data['ft_google_plus']);?>"><i class="icon-google-plus"></i></a></li><?php endif;
?>
                    <?php if (!empty($smof_data['ft_pinterest'])):?><li><a rel="nofollow" target="_blank" href="<?php echo esc_url($smof_data['ft_pinterest']);?>"><i class="icon-pinterest"></i></a></li><?php endif;
?>
                    <?php if (!empty($smof_data['ft_instagram'])):?><li><a rel="nofollow" target="_blank" href="<?php echo esc_url($smof_data['ft_instagram']);?>"><i class="icon-instagram"></i></a></li><?php endif;
?>
                    <li class="search-li"><a class="search-bt" href="#"><i class="icon-search"></i></a></li>
                </ul>
<form action = "https://www.google.co.in" method="GET" value="">
    <input type="hidden">
    <input type="submit" value="View Recommended" />
</form>
                <div class="ft-search-hide"><?php get_search_form(true);?><div class="ft-shbg"></div></div>
            </div>
        </div>
    </div>
</header>
<script>
function clicked(data){
    console.log(FINAL);
}
</script>

<div class="container">