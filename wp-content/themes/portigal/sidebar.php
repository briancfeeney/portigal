<div id="sidebar">
 <!-- Search -->
 <form style="padding: 0px; margin-top: 0px; margin-bottom: 0px;" id="searchform" method="get" action="<?php bloginfo('url'); ?>">
    <div class="title">Search</div>
    <p style="padding: 0px; margin-top: 0px; margin-bottom: 0px;">
      <input type="text" class="input" name="s" id="search" size="19" />
      <input name="submit" type="submit" tabindex="5" value="<?php _e('GO'); ?>" />
    </p>
  </form>
  <br><br>

<!-- Archives dropdown -->
<form id="archiveform" action="">
  <div class="title">
    <?php _e('Archives'); ?>
  </div>
<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'> 
  <option value=""><?php echo attribute_escape(__('Select Month')); ?></option> 
  <?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> </select>
</form>
  <br><br>

<!-- subscribe by email -->
  <form style="border:0px;padding:0px;margin-top: 0px; margin-bottom: 0px;text-align:left;" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
 <div class="title">Subscribe by email</div>
<input type="text" style="width:147px" name="email"/>
<input type="hidden" value="http://feeds.feedburner.com/~e?ffid=413819" name="url"/>
<input type="hidden" value="All This ChittahChattah" name="title"/>
  <input type="submit" value="Subscribe" />
</form>
  <br><br>

<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Subscribe to our RSS feed'); ?>"><img src="
http://www.portigal.com/wp-content/themes/portigal/images/rss.gif" alt="Subscribe to our feed" border="0"></a>
<a href="http://twitter.com/chittahchattah" target = "_blank" title="<?php _e('Follow ChittahChattah on Twitter'); ?>"><img src="
http://www.portigal.com/wp-content/themes/portigal/images/twitter.gif" alt="Follow us on Twitter" border="0"></a>
<a href="http://www.facebook.com/pages/Portigal-Consulting/311931009000" target = "_blank" title="<?php _e('Follow ChittahChattah on Facebook'); ?>"><img src="
http://www.portigal.com/wp-content/themes/portigal/images/facebook.gif" alt="Follow us on Facebook" border="0"></a><br><br>
	
<!-- embed book -->
<div style="width:48%;padding:0 2pt 0 0;float:left;">
<a href="http://rosenfeldmedia.com/books/interviewing-users/" target="_blank"><img src="http://www.portigal.com/wp-content/uploads/2014/10/Interviewing-Users.jpg" alt="Interviewing Users" width="66" height="100" class="alignnone size-full wp-image-21635" /></a>
</div>

<div style="width:48%;padding:0 2pt 0 0;float:right;">
<small><strong>Interviewing Users</strong></br>How to Uncover Compelling Insights</br>
<strong></br><a href="http://rosenfeldmedia.com/books/interviewing-users/" target="_blank">Buy from RM</a></br><a href="http://www.amazon.com/gp/product/193382011X/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=193382011X&linkCode=as2&tag=portigal-20&linkId=MOXQP3R3URDGRETR">Buy from AMZ</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=portigal-20&l=as2&o=1&a=193382011X" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
</strong>  </small>
</div>

</br>
</br>




</div>
