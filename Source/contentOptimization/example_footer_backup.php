<?php global $smof_data;?>
<footer id="footer">
    <div class="wrapper">
        <div class="ft-widgets clearfix">
<?php dynamic_sidebar("Footer Widgets");?>
</div>
        <!--div class="ft-ftposts clearfix">
<?php $args = array('showposts' => '6', 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'rand');
query_posts($args);
?>
            <?php if (have_posts()):?>
            <?php $count = 0;?>
<?php while (have_posts()):the_post();?>
            <?php $count++;?>
            <article id="post-<?php the_ID();?>" class="ft-ftpost">
                <div class="ft-fimg clearfix">
<?php if (has_post_thumbnail()):?><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail('footer');
?></a><?php endif;
?>
                    <h3 class="ft-ptitle entry-title"><a href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title_attribute();?>"><?php the_title();
?></a></h3>
                    <div class="ft-fimg-shadow shadow-<?php echo $count;?>"></div>
                </div>
            </article>
<?php endwhile;?>
            <?php endif;?>
            <?php wp_reset_query();?>
        </div-->
        <div class="ft-copyright clearfix">
            <!--div class="ft-cpleft">
                <div><p><?php if (!empty($smof_data['ft_logo'])):?><a href="<?php echo esc_url(home_url('/'));?>" title="<?php bloginfo('name');?>"><img src="<?php echo esc_url($smof_data['ft_logo']);?>" width="<?php if (!empty($smof_data['ft_logo_width'])):?><?php echo esc_attr($smof_data['ft_logo_width']);?><?php endif;?>" height="<?php if (!empty($smof_data['ft_logo_height'])):?><?php echo esc_attr($smof_data['ft_logo_height']);?><?php endif;?>" alt="<?php bloginfo('name');?>" /></a><?php  else :?><?php bloginfo('name');
?><?php endif;
?></p></div>
                <p><?php if (!empty($smof_data['ft_footer_text'])):?><?php echo $smof_data['ft_footer_text'];
?><?php  else :?>Copyright &copy;
<?php echo date('Y');
?> <?php bloginfo('name');
?>. <?php _e('All Rights Reserved', 'ft')?>.<?php endif;
?></p>
            </div-->
            <div class="ft-cpright">
                <p><?php _e('Copyright &copy; 2015 Digital Consulting Pvt Ltd.', 'ft');
?> <!--?php bloginfo('description');
 ?-->.</p>
                <p><!--?php _e('All Rights Reserved.','ft') ?--> <!--a target="_blank" href="http://www.famethemes.com/"><img src="<?php echo get_template_directory_uri();?>/images/copyright/famethemes.png" width="39" height="20" alt="<?php _e('FameThemes', 'ft');?>"/></a--></p>
            </div>
        </div>
        <div class="ft-ftmenu clearfix">
<?php if (has_nav_menu('footer_navigation')):?>
            <?php wp_nav_menu(array('theme_location' => 'footer_navigation', 'container' => false, 'menu_class' => 'footermenu', 'echo' => true, 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 3, 'items_wrap' => '<ul class="footermenu">%3$s</ul>'));?>
            <?php  else :?>
            <!--p class="ft-nomenus"><?php _e('Please Setup Your Menus : Dashboard -> Appearance -> Menus', 'ft');?></p-->
<?php endif;?>
</div>
    </div>
</footer>

</div>

<aside class="ft-backtop">
    <div class="back-top">
        <a href="#top">
            <span><i class="icon-arrow-up"></i></span>
        </a>
    </div>
</aside>

<?php wp_footer();?>

<?php if (!empty($smof_data['ft_google_analytics'])):?><?php echo $smof_data['ft_google_analytics'];
?><?php endif;
?>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.0.4/js.cookie.min.js"></script>

<script type="text/javascript">
function guid() {
  function s4() {
    return Math.floor((1 + Math.random()) * 0x10000)
      .toString(16)
      .substring(1);
  }
  return s4() + s4() + '-' + s4() + '-' + s4() + '-' +
    s4() + '-' + s4() + s4() + s4();
}
</script>

<script type = "text/javascript">

if(!Cookies.get('v_id')) {
    var visitorId = guid();
    Cookies.set('v_id', visitorId, {expires: 365});
}
console.log(Cookies.get('v_id'));
var v_id = Cookies.get('v_id');
var tag_array = [];
 jQuery("a[rel$='tag']").each(function(){tag_array.push(this.innerHTML)});
for(var i = 0; i< tag_array.length;i++){
    tag_array[i]  = tag_array[i].toLowerCase();}
var ggg=tag_array.filter(function(itm,i,tag_array){
    return i==tag_array.indexOf(itm);
});
var tag_str = "";
var max_len = ggg.length
for(var i=0;i<max_len;i++){
    if(i+1 != max_len){
        tag_str = tag_str + ggg[i] + ", ";}
    else{
        tag_str = tag_str + ggg[i];
}
}
console.log(tag_str);

jQuery.ajax({
    url: 'http://www.digitant.co/contentOptimization/code/php/post_data_processing.php',
        type: 'POST',
    data: {
        domain_id: location.hostname,
        visitor_id: v_id,
        url: window.location.href,
        tag_string: tag_str,
        pageTitle: document.title,
    },
    success: function(response) {
        console.log(response);
    },
    failure: function(response) {
        console.log(response);
    }
  });
jQuery.ajax({
    url:
'http://www.digitant.co/contentOptimization/code/php/pageRank.php',
    type:'POST',
    data: {
        tag_string: tag_str,
    },
    success: function(response) {
        console.log(response);
    },
    failure: function(response) {
        console.log(response);
    },
});
</script>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["setCookieDomain", "*.digitant.co"]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  _paq.push(['setCustomVariable', '1','tag_str',tag_str]);
  (function() {
    var u="//www.digitant.co/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 3]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript';
 g.async=true;
 g.defer=true;
 g.src=u+'piwik.js';
 s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//www.digitant.co/piwik/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->



</body>
</html>