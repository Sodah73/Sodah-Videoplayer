function setcookie(e, o, a, i, r, n) {
    var s = new Date;
    s.setTime(s.getTime()), a && (a = 1e3 * a * 60 * 60 * 24);
    var t = new Date(s.getTime() + a);
    document.cookie = e + "=" + escape(o) + (a ? ";expires=" + t.toGMTString() : "") + (i ? ";path=" + i : "") + (r ? ";domain=" + r : "") + (n ? ";secure" : "")
}

function getcookie(e) {
    var o = document.cookie.indexOf(e + "="),
        a = o + e.length + 1;
    if (!o && e != document.cookie.substring(0, e.length)) return null;
    if (-1 == o) return null;
    var i = document.cookie.indexOf(";", a);
    return -1 == i && (i = document.cookie.length), unescape(document.cookie.substring(a, i))
}

function jplayer_responsive(id, w, h) {
    var ratio = w/h;
    var width = jQuery("#unique-container-" + id + " object").width();
    jQuery("#unique-container-" + id + " object").height((width/ratio)-40);
}

function generateID(e) {
    return e + globalIdCounter++
}! function(e) {
    e.fn.sodahvideoplayer = function(o) {
        try {            
            var a = e.parseJSON(e(this).find(".playerData").text())
        } catch (i) {
            //console.log("JSON parse ERROR, fall back to JS!")
        }
        var r = e(this),
            id = generateID(1),
            n = e.extend(o, a),
            s = e('<div class="playerScreen">			<div id="unique-container-' + id + '" class="jPlayer-container"></div>			<a tabindex="1" href="#" class="video-play"><div class="play-icon"><i class="icon-play-circle"></i></div></a>			</div>			<div class="controls">			<div class="controlset left">			<a tabindex="1" href="#" class="play smooth"><i class="icon-play"></i></a>			<a tabindex="1" href="#" class="pause smooth"><i class="icon-pause"></i></a>			</div>			<div class="controlset right-volume">			<a tabindex="1" href="#" class="mute smooth"><i class="icon-volume"></i></a>			<a tabindex="1" href="#" class="unmute smooth"><i class="icon-mute"></i></a>			</div>			<div class="volumeblock">			<div class="volume-control"><div class="volume-value"></div></div>			</div>			<div class="controlset right">			<a href="#" tabindex="1" class="fullscreen smooth"><i class="icon-fullscreen"></i></a>			<a href="#" tabindex="1" class="smallscreen smooth"><i class="icon-fullscreen-exit"></i></a>			</div>			<div class="progress-block">			<div class="videotimer videocurrent"></div>			<div class="videotimer videoduration"></div>			<div class="videoprogress">			<div class="seekBar">			<div class="playBar"></div></div></div>  </div></div>');
        e(this).find(".playerData").remove(), e(this).append(s);
        var t = new Array;
        e.each(n.media, function(e) {
            "poster" != e && t.push(e)
        }), formats = t.join(", ");
        var l = getcookie("jplayer-volume"),
            a = {
                ready: function(o) {
                    o.jPlayer.status.noVolume && e(r).find(".controls .progress-block").css({
                        margin: "0 10px 0 45px"
                    }), e(this).jPlayer("setMedia", n.media), null != n.autoplay && e(this).jPlayer("play")
                },
                swfPath: "skin/jquery.jplayer.swf",
                supplied: formats,
                preload: "none",
                solution: "html, flash",
                volume: null != l ? l : "0.5",
                smoothPlayBar: !1,
                keyEnabled: !0,
                remainingDuration: !1,
                toggleDuration: !1,
                errorAlerts: !1,
                warningAlerts: !1,
                size: {
                    width: "100%",
                    height: "auto"
                },
                cssSelectorAncestor: "#" + e(r).attr("id"),
                cssSelector: {
                    videoPlay: ".video-play",
                    play: ".play",
                    pause: ".pause",
                    seekBar: ".seekBar",
                    playBar: ".playBar",
                    mute: ".right-volume .mute",
                    unmute: ".right-volume .unmute",
                    volumeBar: ".volume-control",
                    volumeBarValue: ".volume-control .volume-value",
                    currentTime: ".videotimer.videocurrent",
                    duration: ".videotimer.videoduration",
                    fullScreen: ".fullscreen",
                    restoreScreen: ".smallscreen",
                    gui: ".controls",
                    noSolution: ".noSolution"
                },
                error: function(o) {
                    o.jPlayer.error.type === e.jPlayer.error.URL_NOT_SET && e(this).jPlayer("setMedia", n.media).jPlayer("play")
                },
                play: function() {
                    e(r).find(".playerScreen .video-play").stop(!0, !0).fadeOut(150), e(this).on("click", function() {
                        e(this).jPlayer("pause")
                    }), e(this).jPlayer("pauseOthers"), jplayer_responsive(id, parseInt(n.media.size.width), parseInt(n.media.size.height))
                },
                pause: function() {
                    e(r).find(".playerScreen .video-play").stop(!0, !0).fadeIn(350), e(this).unbind("click")
                },
                ended: function() {
                    e(this).jPlayer("setMedia", n.media)
                },
                progress: function (e) {
                    //this will just work in FLASH
                    //console.log(e.jPlayer.status.seekPercent)
                },
                resize: function () {
                    //deprecated
                    //console.log("resize");
                },
                volumechange: function(e) {
                    setcookie("jplayer-volume", e.jPlayer.options.volume)
                }
            };
        e(r).find(".volumeblock").mousedown(function() {
            return parent = e(r).find(".volumeblock"), e(r).find(".volumeblock").mousemove(function(o) {
                e(r).find(".volume-control .volume-value").css({
                    width: o.pageX - e(parent).offset().left
                });
                var a = e(r).find(".volume-control").width();
                return e(r).find(".jPlayer-container").jPlayer("option", "muted", !1), e(r).find(".jPlayer-container").jPlayer("option", "volume", (o.pageX - e(parent).offset().left) / a), !1
            }), !1
        }), e(r).find(".videoprogress").mousedown(function() {
            return parent = e(r).find(".videoprogress .seekBar"), e(r).find(".videoprogress").mousemove(function(o) {
                var a = e(r).find(".videoprogress .seekBar").width(),
                    i = (o.pageX - e(parent).offset().left) / a * 100;
                return e(r).find(".videoprogress .seekBar .playBar").css({
                    width: i + "%"
                }), e(r).find(".jPlayer-container").jPlayer("playHead", i), !1
            }), !1
        }), e(document).mouseup(function() {
            e(".videoprogress, .volumeblock").unbind("mousemove")
        }), e.extend(a, n), e(this).find(".jPlayer-container").jPlayer(a), e(window).on("resize", jplayer_responsive(id, n.media.size.width, n.media.size.height))
    }
}(jQuery);
var globalIdCounter = 0;