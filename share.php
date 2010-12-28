<?php
	require_once('config-anim.php');
    define("DOC_URL"  , $config['woerth']['url']);
    define("DOC_TITLE", $config[$animID]['comment']);
?>
<style type="text/css">

    .sharing { position:relative;height:17px; top:11px}
    
    .sharing .inputEmbed span {
        color:white;
        font-weight:bold;
        text-decoration:underline;
        cursor:pointer;
    }

    .sharing a, .sharing .share{
       font-size:12px;
       color:gray;
       text-decoration:none;
       float:right;
       margin-right:5px;
    }

    .sharing .bg-white {
        background:white;
        padding:1px 2px;
        padding-bottom:0px;
        height:17px;
        border-radius:3px;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
    }

    .sharing .share.twitter {
    }

    .sharing a img{
       border:0px;
    }
</style>

<div class="sharing">
    
    <span class="share inputEmbed" style="display:none" >
        <input value='' />
        <span onclick="dropEmbed();">Fermer</span>
    </span>

    <a class="share mini-embed bg-white " href="#" onclick="getEmbed()">
        &lt;integrer&gt;
    </a>

    <a class="share mini-share-mail bg-white" 
       target="_blank"
       href='http://www.addtoany.com/email?linkurl=<?php echo  rawurlencode(DOC_URL);  ?>&linkname=<?php echo   rawurlencode(DOC_TITLE);  ?>&t=<?php echo rawurldecode(DOC_TITLE); ?>'>
        <img alt="share mail" src="mini-email.png" /> email
    </a>

    <a  class="share facebook"
        name="fb_share"
        type="button_count"
        share_url="<?php echo rawurlencode(DOC_URL);  ?>"
        href="http://www.facebook.com/sharer.php?t=<?php echo rawurldecode(DOC_TITLE); ?>">
        Partager
    </a>
    <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>


    <!--div class="share">
        <div id="fblikehome" >
            <script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/fr_FR"></script>
            <script type="text/javascript">FB.init("2725117df67e250b205434cbbd61d918");</script>
            <fb:fan profile_id="67334499441" stream="0" connections="0" logobar="0" width="300" css=""></fb:fan>
        </div>
    </div-->

    <span class="share twitter bg-white">
        <iframe width="50"
                scrolling="no"
                height="20"
                frameborder="0"
                src="http://api.tweetmeme.com/button.js?url=<?php echo rawurlencode(DOC_URL); ?>&amp;style=compact&amp;hashtags=OWNI">
        </iframe>
    </span>
    
</div>