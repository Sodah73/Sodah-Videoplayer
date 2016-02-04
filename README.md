=== Sodah-Videoplayer ===
Contributors: Sodah
Tags: responsive, html5, video, player, javascript
Tested up to: 4.2.2
Stable tag: 1.15.12.07
License: LGPLv3
License URI: http://www.gnu.org/licenses/lgpl-3.0.html

Self-hosted responsive HTML5 video for WordPress, built on the widely used jPlayer HTML5 video player. Embed video in your post or page using HTML5.

== Description ==

A video plugin for WordPress built on the jPlayer HTML5 video player library. Allows you to embed video in your post or page using HTML5 with Flash fallback support for non-HTML5 browsers.

View [jplayer.org](http://jplayer.org) for additional information.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the `sodah-videoplayer` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Use the shortcode gererator on left menu

##Video Shortcode Options
-------------------------

### mp4
The location of the h.264/MP4 source for the video.
    
    [sodah-videoplayer mp4="http://www.mysite/my-clip.mp4"]

### ogg
The location of the Theora/Ogg source for the video.

    [sodah-videoplayer ogg="http://www.mysite/my-clip.ogg"]

### webm
The location of the VP8/WebM source for the video.

    [sodah-videoplayer webm="http://www.mysite/my-clip.webm"]
    
### mp3
The location of the MP3/Audio source for the audio.

    [sodah-videoplayer mp3="http://www.mysite/my-audio.mp3"]

### jpg
The location of the poster frame for the video.

    [sodah-videoplayer jpg="http://www.mysite/my-poster.jpg"]

### width
The width of the video.

    [sodah-videoplayer width="640"]

### height
The height of the video.

    [sodah-videoplayer height="264"]

### style
Skin comes in two color variations light or dark

    [sodah-videoplayer style="light"]


== Changelog ==

= 1.15.12.07 =

* First release.
