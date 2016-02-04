<?php
/**
 * @package WP-SODAH-VIDEO-PLAYER
 * @version 1.15.12.07
 */
/*
Plugin Name: SODAH AUDIO VIDEO PLAYER
Plugin URI: http://www.sodah.de
Description: Responsive html5/flash audio & video player
Author: Sodah
Version: 1.15.12.07
Author URI: http://www.sodah.de
*/
function sodah_videoplayer_head() {
?> 
<style type="text/css">
	@font-face {
	  font-family: "player-font";
	  src: url("<?php echo plugin_dir_url(__FILE__); ?>fonts/player-font.eot");
	  src: url("<?php echo plugin_dir_url(__FILE__); ?>fonts/player-font.eot?#iefix") format("embedded-opentype"), 
	  url("<?php echo plugin_dir_url(__FILE__); ?>fonts/player-font.woff") format("woff"), 
	  url("<?php echo plugin_dir_url(__FILE__); ?>fonts/player-font.ttf") format("truetype"), 
	  url("<?php echo plugin_dir_url(__FILE__); ?>fonts/player-font.svg#player-font") format("svg");
	  font-weight: normal;
	  font-style: normal;
	}
</style>
<link href="<?php echo plugin_dir_url(__FILE__); ?>css/sodah.jplayer.skin.css" rel="stylesheet">
<?php
} 

function sodah_videoplayer_menu() {    
    add_menu_page(__('Video Player'), __('Video Player'), 'administrator', __FILE__, 'sodah_videoplayer_settings_page',plugins_url('/img/sodahvideoplayer.png', __FILE__));    
}

function sodah_videoplayer_settings_page(){
  
?>
<div class="wrap">
    <div id="icon-options-general" class="icon32"></div>
    <h2>Sodah Audio & Video Player</h2> 
    <div style="height: 20px">
        <div class="updated_custom" id="message_custom001" style="display: none;">&nbsp;</div>
    </div>
    <div id="dashboard-widgets-wrap">
        <div id="dashboard-widgets" class="metabox-holder">
            <div id="postbox-container-1" class="postbox-container" style="width:100%;">
                <div id="normal-sortables" class="meta-box-sortables ui-sortable">
                    <div class="postbox">
                        <h3 style="cursor: default"><span>Responsive html5/flash audio & video player.</span></h3>

                        <div class="inside">
                            <div>
                                <p>                                    
                                    Played all mp4, webm, ogg videofiles and mp3 audio. <br />
                                    Skin comes in two color variations Light & Dark. 
                                </p>
                                <h3>
                                	Features
                                </h3>
                                <ul style="list-style: circle; margin-left:30px;">
                                	<li>Extreme easy to deploy</li>
                                	<li>Responsive</li>
                                	<li>Vector based for high density displays</li>
                                	<li>Customizable size and colors</li>
                                	<li>Draggable seek & volume bar</li>
                                	<li>Coded using CSS3 for animations instead of laggy javascript</li>
                                	<li>Includes a overlay over video for pause/stop events</li>
                                	<li>Volume is permanently saved</li>
                                </ul>
                                <h3>
                                	Platforms and Browsers
                                </h3>
                                <ul style="list-style: circle; margin-left:30px;">
                                	<li>Windows: Firefox, Chrome, Opera, Safari, IE9, IE10+</li>
                                	<li>OSX: Safari, Firefox, Chrome, Opera</li>
                                	<li>iOS: Mobile Safari: iPad, iPhone, iPod Touch</li>
                                	<li>Android 2.3+: Chrome, Firefox, Opera and most other mobile browsers</li>
                                	<li>Blackberry: OS 7 Phone Browser, PlayBook Browser</li>
                                </ul>
                                 <h3>
                                	Media Support
                                </h3>
                                <ul style="list-style: circle; margin-left:30px;">
                                	<li>HTML5: mp3, mp4 (AAC/H.264), ogg (Vorbis/Theora), webm (Vorbis/VP8), wav</li>
                                	<li>Flash: mp3, mp4 (AAC/H.264), rtmp, flv</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="postbox ">                            
                        <h3 style="cursor: default"><span><?php echo 'General Settings';?></span></h3>
                        
                        <div class="inside">
                            <table>
                            	 <tr>
                                    <td colspan="2">
                                        <label>Style</label>
                                    </td>
                                    <td>
                                        <select class="sodahvideoplayershortcode" id="style" name="style">
                                            <option value="light">light</option>
                                            <option value="dark">dark</option>
                                        </select>                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    <div class="postbox ">                            
                        <h3 style="cursor: default"><span>Audio Settings</span></h3>
                        
                        <div class="inside">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 20%;">
                                        <label>MP3</label>
                                    </td>
                                    <td style="width:80%">
                                        <input style="width:100%" class="sodahvideoplayershortcode" type="text" id="mp3" name="mp3" placeholder="http://your stream url here" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                     <div class="postbox ">                            
                        <h3 style="cursor: default"><span>Video Settings</span></h3>
                        
                        <div class="inside">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 20%;">
                                        <label>MP4</label>
                                    </td>
                                    <td style="width:80%">
                                        <input style="width:100%" class="sodahvideoplayershortcode" type="text" id="mp4" name="mp4" placeholder="http://your stream url here" />
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 20%;">
                                        <label>OGG</label>
                                    </td>
                                    <td style="width:80%">
                                        <input style="width:100%" class="sodahvideoplayershortcode" type="text" id="ogg" name="ogg" placeholder="http://your stream url here"/>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 20%;">
                                        <label>WEBM</label>
                                    </td>
                                    <td style="width:80%">
                                        <input style="width:100%" class="sodahvideoplayershortcode" type="text" id="webm" name="webm" placeholder="http://your stream url here"/>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="width: 20%;">
                                        <label>JPG</label>
                                    </td>
                                    <td style="width:80%">
                                        <input style="width:100%"  class="sodahvideoplayershortcode" type="text" id="jpg" name="jpg" placeholder="http://your poster url here"/>
                                    </td>
                                </tr>

                                 <tr>
                                    <td style="width: 20%;">
                                        <label>width</label>
                                    </td>
                                    <td style="width:80%">
                                        <input class="sodahvideoplayershortcode" type="text"  id="width" name="width" placeholder="width of your player with px"/>
                                    </td>
                                </tr>

                                 <tr>
                                    <td style="width: 20%;">
                                        <label>height</label>
                                    </td>
                                    <td style="width:80%">
                                        <input class="sodahvideoplayershortcode" type="text" id="height" name="height" placeholder="height of your player with px"/>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="postbox ">                            
                        <h3 style="cursor: default"><span><?php echo 'Generated shortcode';?></span></h3>
                        <div class="inside">
                            <textarea style="width: 100%; min-height:70px; font-size: 11px" id="matrix_shortcode" name="matrix_shortcode" readonly="readonly">[sodah-videoplayer]</textarea>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function(){    
    jQuery(".sodahvideoplayershortcode").live('change',function(){        
      sodahvideoplayer_shortcodegenerator();    
    });
    sodahvideoplayer_shortcodegenerator = function () {
        var nfrwidth = jQuery("#width").val();
        var nfrheight = jQuery("#height").val();
        var nfrstyle = jQuery("#style").val();
        var nfrjpg = jQuery("#jpg").val();
        var nfrmp3 = jQuery("#mp3").val();
        var nfrmp4 = jQuery("#mp4").val();
        var nfrogg = jQuery("#ogg").val();
        var nfrwebm = jQuery("#webm").val();
        jQuery("#matrix_shortcode").val("[sodah-videoplayer style='"+ nfrstyle +"' width='"+ nfrwidth +"' height='"+ nfrheight +"' jpg='"+ nfrjpg + "' mp3='"+ nfrmp3 + "' mp4='"+ nfrmp4 + "' ogg='"+ nfrogg +"' webm='"+ nfrwebm +"']");      
    }
    jQuery('#matrix_shortcode').click(function() {
        jQuery(this).select();
    });
    sodahvideoplayer_shortcodegenerator();
});
</script>

<?php
}

function sodah_videoplayer_shortcode($atts=array()){	
  global $post;
  global $data;

  //defaults
  $width = "100%";
  $height = "40px";
  $jpg = "";
  $mp4 = "";
  $mp3 = "";
  $webm = "";
  $ogg = "";
  $style = "";
  
  if(isset($atts['style'])){
      $style = $atts['style'];
  }
  if(isset($atts['width'])){
      $width = $atts['width'];
  }
  if(isset($atts['height'])){
      $height = $atts['height'];
  }
  if(isset($atts['jpg'])){
      $jpg = $atts['jpg'];
  }
  if(isset($atts['mp4'])){
      $mp4 = $atts['mp4'];
  }
  if(isset($atts['mp3'])){
      $mp3 = $atts['mp3'];
  }
  if(isset($atts['webm'])){
      $webm = $atts['webm'];
  }
  if(isset($atts['ogg'])){
      $ogg = $atts['ogg'];
  }

  $content1 = "
  	<div class='player-box-lifted'>
	  	<div class='sodahvideoplayer jPlayer ".$style."' id='wp".rand()."' data-width='".$width."'  data-height='".$height."'  data-jpg='".$jpg."'  data-mp3='".$mp3."'  data-mp4='".$mp4."'  data-webm='".$webm."'  data-ogg='".$ogg."'>
	  	</div>
	  	<div class='jp-no-solution' style='display: none;'>
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href='http://get.adobe.com/flashplayer/' target='_blank'>Flash plugin</a>.
		</div>
	</div>
  ";

	wp_reset_query();
	return $content1;
}

function sodah_videoplayer_footer() {
  	if(!wp_script_is('jquery')) { //MISSING?
  		wp_enqueue_script('jquery',"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js");   
  	}
  	if(!wp_script_is('jPlayer')) {//MISSING?
  		wp_enqueue_script('jPlayer',plugin_dir_url(__FILE__)."js/jquery.jplayer.min.js");
	}
	if(!wp_script_is('sodahvideoplayer')) {//MISSING?
  		wp_enqueue_script('sodahvideoplayer',plugin_dir_url(__FILE__)."js/sodah.videoplayer.js");
	}
	if(wp_script_is('jPlayer') && wp_script_is('sodahvideoplayer')) {
  ?>
  <script type="text/javascript">
      jQuery(document).ready(function($) {
      	try {
      		$('.sodahvideoplayer').each(function() {
      			//Audio
      			if ($(this).data("mp3") != ""){
      				$(this).sodahvideoplayer({
						media: {
							title: "",
							mp3: $(this).data("mp3"),
						},
						swfPath: "<?php echo plugin_dir_url(__FILE__); ?>js"
					});
      			} else {
	      			//Video
		      		$(this).sodahvideoplayer({
						media: {
							title: "",
							m4v: $(this).data("mp4"),
							webm: $(this).data("webm"),
							ogg: $(this).data("ogg"),
							size: {
								width: $(this).data("width"),
								height: $(this).data("height")
		                	},
							poster: $(this).data("jpg")
						},
						swfPath: "<?php echo plugin_dir_url(__FILE__); ?>js"
					});
		      	}
	      	});
	   } catch (e){
	   		//error
	   }
      });
  </script>
  <?php
	}
}
add_action('admin_menu', 'sodah_videoplayer_menu');
add_action( 'wp_head', 'sodah_videoplayer_head'); 
add_action( 'wp_footer', 'sodah_videoplayer_footer'); 
add_shortcode("sodah-videoplayer", "sodah_videoplayer_shortcode");
?>