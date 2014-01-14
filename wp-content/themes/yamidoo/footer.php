<?php
 global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
</div> <!-- end content-wrap -->
</div> <!-- end main-wrap -->

         
	<div id="footer">
		
		<div id="subscribe">
              
			<h4><img src="<?php bloginfo('template_directory'); ?>/images/feed.png" alt="Subscribe to RSS" /> <a href="<?php if (strlen($wpzoom_misc_feedburner) < 1) { bloginfo('rss2_url');} else {echo"$wpzoom_misc_feedburner";} ?>"><?php _e('Subscribe by RSS', 'wpzoom');?></a></h4>
				  
			<p><?php if (strlen($wpzoom_misc_feedburnerID) > 0) { ?> <?php _e('Or enter your e-mail to subscribe to our articles, and updates about what\'s new.', 'wpzoom');?></p>
				<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $wpzoom_misc_feedburnerID; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				<input type="text" onblur="if (this.value == '') {this.value = '<?php _e('enter your email...', 'wpzoom');?>';}" onfocus="if (this.value == '<?php _e('enter your email...', 'wpzoom');?>') {this.value = '';}" value="<?php _e('enter your email...', 'wpzoom');?>" name="semail" id="semail" />
				<input type="hidden" value="<?php echo $wpzoom_misc_feedburnerID; ?>" name="uri" />
				<input type="hidden" name="loc" value="en_US" />
				<input type="submit" id="submit" value="<?php _e('Subscribe', 'wpzoom');?>" />
				</form><?php } ?>
				
		</div> 
      
    
	    <div id="footer_right">
			<?php wp_nav_menu( array('container' => '', 'container_class' => '', 'menu_class' => '', 'sort_column' => 'menu_order', 'theme_location' => 'tertiary', 'depth' => '1' ) ); ?>
			
			<small> &copy; <?php _e('Copyright', 'wpzoom');?> <?php echo date("Y"); ?> &mdash; <a href="<?php echo get_option('home'); ?>/" class="on"><?php bloginfo('name'); ?></a>. <?php _e(' All Rights Reserved.', 'AndyXu');?></small><br />
<!--			<span><?php _e('Designed by', 'wpzoom');?> <a href="http://www.weidea.net" target="_blank" title="WPZOOM WordPress Themes"><img src="<?php bloginfo('template_directory'); ?>/images/wpzoom.png" alt="WPZOOM" /></a></span>
--!><span> AndyXu @UMUNC  </span>		
		</div>
                
	</div> <!-- end footer -->
            
	<div class="clear"></div>
       
</div> <!-- end page-wrap -->
 
 
<?php if ($wpzoom_misc_analytics != '' && $wpzoom_misc_analytics_select == 'Yes')
{
  echo stripslashes($wpzoom_misc_analytics);
} ?>
 
<?php if (is_home() && $paged < 2) { ?>
<script type="text/javascript">
$(function() {
     $("#navi ul").tabs("#panes > div", {
     effect: 'fade',
     fadeOutSpeed: 500,
   rotate: true
     
     }).slideshow({
         clickable: false,
         autoplay: <?php if ($wpzoom_slideshow_auto == 'Yes') { ?>true<?php }  if ($wpzoom_slideshow_auto == 'No') { ?>false<?php } ?>,
         interval: <?php echo "$wpzoom_slideshow_speed"; ?>
    });
}); 
</script>
<?php }?> 

<?php wp_footer(); ?>
</body>
</html>
