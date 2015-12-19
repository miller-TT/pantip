<?php 

include('function.php');


$data1 = file('data1.csv');
$data2 = file('data2.csv');
//$data3 = file('data3.csv');
//$data4 = file('data4.csv');
//$data5 = file('data5.csv');

//$data = array_merge($data1,$data2,$data3,$data4,$data5);
//$data = array_merge($data1,$data2,$data3);
$data = array_merge($data1,$data2);


shuffle($data); // Rand Show;
$limit = 20;
$timedate=date("Y-m-dTH:i:s+00:00");
$timehaha=date("Y/m/d : H:i:s");
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$titlekeyword;?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://<?=$urlwebsite;?>/sitemap.xml">
<link rel="alternate" type="application/rss+xml" title="<?=$keyword;?> Feed" href="http://<?=$urlwebsite;?>/rss.xml" />
<script type="text/javascript">
/* <![CDATA[ */
function addLoadEvent(func){var oldonload=window.onload;if(typeof window.onload!='function'){window.onload=func;}else{window.onload=function(){oldonload();func();}}}
/* ]]> */
</script>
<link rel='stylesheet' id='all-css-0' href='https://s2.wp.com/_static/??-eJx9j+EOgjAMhF/IWRWCv4zPAqOO4bYuWxfC27tJ1BAM/3qX+9orTF5IcoyOwSbhTVLaRYhWG5x9oBElr9VRxniA/5jRT4wwIvtWPsVbbeKdIfUDSCnsKbF4kDE0waR7hbs3JAXMvvUtl4TFXrdo0ObYHmZ986HKOOSC226rM7asXJ6AHFw7C6rBEetMx++w2clD7hbBpw46rUQXKDsBIs8GS/hub+e6OlVNc6mv4wuE65X6' type='text/css' media='all' />
<link rel='stylesheet' id='big-brother-gentium-css'  href='https://fonts.googleapis.com/css?family=Gentium+Basic%3A400%2C700%2C400italic%2C700italic&#038;subset=latin%2Clatin-ext&#038;ver=4.2-beta1-31828' type='text/css' media='all' />
<link rel='stylesheet' id='big-brother-open-sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C800&#038;subset=latin%2Clatin-ext&#038;ver=4.2-beta1-31828' type='text/css' media='all' />
<link rel='stylesheet' id='all-css-4' href='https://s1.wp.com/_static/??-eJx9jc0KAjEMhF/IGCoq7kF8lm2JMUvblP6w+PZWvFTEvQwzyXwMrgmcxkqxYmiQfGOJBZkiZemPP3bvStnhwNYHBSqYmkUrDDZrv2SU6LDUpydYk9Pwgw2TFHSRj27VmBS8urmKxq8Adz9L3kIzWa/cLWNvDfEN3cLVHM3pPJnDZVpeCItoMQ==' type='text/css' media='all' />
<link rel='stylesheet' id='print-css-5' href='https://s0.wp.com/wp-content/mu-plugins/global-print/global-print.css?m=1387483371g' type='text/css' media='print' />
<link rel='stylesheet' id='all-css-6' href='https://s2.wp.com/_static/??/wp-content/mu-plugins/post-flair/sharing/sharing.css,/wp-content/themes/h4/global.css?m=1427894205j' type='text/css' media='all' />
<script type='text/javascript'>
/* <![CDATA[ */
var LoggedOutFollow = {"invalid_email":"Your subscription did not succeed, please try again with a valid email address."};
/* ]]> */
</script>
<script type='text/javascript' src='https://s0.wp.com/_static/??-eJyFzl0KwjAMAOAL2XUbCr6IZ9lPVlLbpjbpip7eCvogDoVAQvIlRJeoMEwuz8Da1rhmSLdXaizv9C+gPJo0CDQewxtPFASCPK2nER2ozJAGU3v10EIbLhKLB+aKNqafL2FYEcpfZkHiMF1UAsb719XRkVHRZYOBda0NzJRFLeQcFV1wNiB15+xP3b5tD8eub3v7AEfxb6Q='></script>
<link rel='stylesheet' id='all-css-0' href='https://s2.wp.com/wp-content/mu-plugins/highlander-comments/style.css?m=1377793621g' type='text/css' media='all' />
<!--[if lt IE 8]>
<link rel='stylesheet' id='highlander-comments-ie7-css'  href='https://s2.wp.com/wp-content/mu-plugins/highlander-comments/style-ie7.css?m=1351637563g&#038;ver=20110606' type='text/css' media='all' />
<![endif]-->
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://<?=$urlwebsite;?>/topic/<?=$idlink;?>/<?=$titleurl;?>.html" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://s1.wp.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress.com" />
<link href='http://<?=$urlwebsite;?>/all.html' rel='canonical'/>
<link rel='shortlink' href='http://wp.me/s6bUFB-test' />
<link rel="alternate" type="application/json+oembed" href="https://public-api.wordpress.com/oembed/1.0/?format=json&amp;url=http://<?=$urlwebsite;?>/topic/<?=$idlink;?>/<?=$titleurl;?>.html&amp;for=wpcom-auto-discovery" /><link rel="alternate" type="application/xml+oembed" href="https://public-api.wordpress.com/oembed/1.0/?format=xml&amp;url=http://<?=$urlwebsite;?>/topic<?=$idlink;?>/<?=$titleurl;?>.html&amp;for=wpcom-auto-discovery" />
<!-- Jetpack Open Graph Tags -->
<meta property="og:type" content="article" />
<meta property="og:title" content="test" />
<meta property="og:url" content="http://<?=$urlwebsite;?>/all.html" />
<meta property="og:description" content="test" />
<meta property="article:published_time" content="<?=$timedate;?>" />
<meta property="article:modified_time" content="<?=$timedate;?>" />
<meta property="article:author" content="TOO" />
<meta property="og:site_name" content="TOO XCUTION" />
<meta property="og:image" content="https://s0.wp.com/i/blank.jpg" />
<meta property="og:locale" content="en_EN" />
<meta name="twitter:site" content="@wordpressdotcom" />
<meta name="twitter:card" content="summary" />
<meta property="fb:app_id" content="249643311490" />
<meta property="article:publisher" content="https://www.facebook.com/WordPresscom" />
<link rel="shortcut icon" type="image/x-icon" href="https://s2.wp.com/i/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image/x-icon" href="https://s2.wp.com/i/favicon.ico" sizes="16x16 24x24 32x32 48x48" />
<link rel="apple-touch-icon-precomposed" href="https://s0.wp.com/i/webclip.png" />
<link rel="search" type="application/opensearchdescription+xml" href="https://wordpress.com/opensearch.xml" title="WordPress.com" />
	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<style type="text/css">
			.recentcomments a {
				display: inline !important;
				padding: 0 !important;
				margin: 0 !important;
			}

			table.recentcommentsavatartop img.avatar, table.recentcommentsavatarend img.avatar {
				border: 0px;
				margin: 0;
			}

			table.recentcommentsavatartop a, table.recentcommentsavatarend a {
				border: 0px !important;
				background-color: transparent !important;
			}

			td.recentcommentsavatarend, td.recentcommentsavatartop {
				padding: 0px 0px 1px 0px;
				margin: 0px;
			}

			td.recentcommentstextend {
				border: none !important;
				padding: 0px 0px 2px 10px;
			}

			.rtl td.recentcommentstextend {
				padding: 0px 10px 2px 0px;
			}

			td.recentcommentstexttop {
				border: none;
				padding: 0px 0px 0px 10px;
			}

			.rtl td.recentcommentstexttop {
				padding: 0px 10px 0px 0px;
			}
		</style>

<meta name="description" content="test" />
<style type="text/css" id="syntaxhighlighteranchor"></style>

</head>

<body class="single single-post postid-4 single-format-standard mp6 customizer-styles-applied highlander-enabled highlander-light">
<div id="page" class="hfeed site">
		<header id="masthead" class="site-header clearfix" role="banner">
				<div class="site-branding">
						<h1 class="site-title"><a href="http://<?=$urlwebsite;?>" rel="home"><?=$keyword;?></a></h1>
			<h2 class="site-description">Product Reviews</h2>
		</div>

		<nav id="site-navigation" class="main-navigation nav-horizontal" role="navigation">
			<h1 class="menu-toggle">เมนู</h1>
			<a class="skip-link screen-reader-text" href="#content">Skip to content</a>

			<div class="menu"><ul><li ><a href="http://<?=$urlwebsite;?>">Home</a></li><li class="page_item page-item-1"><a href="http://<?=$urlwebsite;?>/all.html">All Products</a></li><li class="page_item page-item-1"><a href="http://<?=$urlwebsite;?>/sitemap.xml">Sitemap</a></li></ul></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content clearfix">
			<div class="breadcrumbs">
			<a class="breadcrumbs-root" href="http://<?=$urlwebsite;?>">Home</a><span class="breadcrumbs-current"><?=$titlekeyword;?></span>		</div>
		<div class="primary content-area">
		<main id="main" class="site-main" role="main">

					<div class="article-wrapper">
				
<article id="post-4" class="post-4 post type-post status-publish format-standard hentry category-">
	<header class="entry-header">
					<h1 class="entry-title"><a href="http://<?=$urlwebsite;?>" title="<?=$keyword;?>"><?=$keyword;?></a></h1>
		
		<div class="entry-meta">
						<span class="posted-on"><a href="http://<?=$urlwebsite;?>" rel="bookmark"><time class="entry-date published" datetime="<?=$timedate;?>"><?=$timehaha;?></time></a></span> <span class="byline"><span class="author vcard"><a class="url fn n" href="#">Joker</a></span></span>
					</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p><?



		echo '<ul>';

	for($x = 0; $x < $limit; $x++){
$prod = explode(",",$data[$x]); /* ถ้า CSV จาก imacro จะประมาณนี้ $prod = explode("\",\"",$data[$x]);*/

$id=$prod[0];

$title = $prod[1]; // คอลั่ม 1;

$img = $prod[2]; // คอลั่ม 2;

$prod_link = $prod[3]; // คอลั่ม3;

$titleurl=slug($title);
include("article.php");
$note=substr($article,0,400);
echo '<li><a href="http://'.$urlwebsite.'/topic/'.$id.'/'.$titleurl.'.html">'.$prod[1].'</a></br>';
echo $note;
echo '</li>';


}

echo '</ul>';

?></p>
<div id="jp-post-flair" class="sharedaddy sd-like-enabled sd-sharing-enabled"><div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing"><h3 class="sd-title">Share this:</h3><div class="sd-content"><ul><li class="share-twitter"><a rel="nofollow" class="share-twitter sd-button share-icon" href="http://<?=$urlwebsite;?>/?share=twitter" title="Click to share on Twitter" id="sharing-twitter-4"><span>Twitter</span></a></li><li class="share-facebook"><a rel="nofollow" class="share-facebook sd-button share-icon" href="http://<?=$urlwebsite;?>/?share=facebook" title="Share on Facebook" id="sharing-facebook-4"><span>Facebook</span></a></li><li class="share-google-plus-1"><a rel="nofollow" class="share-google-plus-1 sd-button share-icon" href="http://<?=$urlwebsite;?>/?share=google-plus-1" title="Click to share on Google+" id="sharing-google-4"><span>Google</span></a></li><li class="share-end"></li></ul></div></div></div><div class='sharedaddy sd-block sd-like jetpack-likes-widget-wrapper jetpack-likes-widget-unloaded' id='like-post-wrapper-91497467-4-555473b0cab4a' data-src='//widgets.wp.com/likes/#blog_id=91497467&amp;post_id=4&amp;origin=<?=$urlwebsite;?>&amp;obj_id=91497467-4-555473b0cab4a' data-name='like-post-frame-91497467-4-555473b0cab4a'><h3 class='sd-title'>Like this:</h3><div class='likes-widget-placeholder post-likes-widget-placeholder' style='height:55px'><span class='button'><span>Like</span></span> <span class="loading">Waiting...</span></div><span class='sd-text-color'></span><a class='sd-link-color'></a></div></div>			</div><!-- .entry-content -->

	<footer class="entry-meta">
			</footer><!-- .entry-meta -->
</article><!-- #post-## -->
			</div>

			
			
<div id="comments" class="comments-area clearfix">

	
	
	
							<div id="respond" class="comment-respond">
				<h3 id="reply-title" class="comment-reply-title">Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/2015/05/14/test/#respond" style="display:none;">Cancel</a></small></h3>
									<form action="#" method="post" id="commentform" class="comment-form" novalidate>
																										


												<input type="hidden" id="highlander_comment_nonce" name="highlander_comment_nonce" value="4655f4d398" /><input type="hidden" name="_wp_http_referer" value="#" />
<input type="hidden" name="hc_post_as" id="hc_post_as" value="guest" />

<div class="comment-form-field comment-textarea">
	<label for="comment">Enter your comment here...</label>
	<div id="comment-form-comment"><textarea id="comment" name="comment" title="Enter your comment here..."></textarea></div>
</div>

<div id="comment-form-identity">

	<div id="comment-form-nascar">
		<p>Fill in your details below or click an icon to log in:</p>
		<ul>
			<li class="selected" style="display:none;">
				<a href="#comment-form-guest" id="postas-guest" title="ผู้เยี่ยมชม">
					<span></span>
				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:WordPress.com" id="postas-wordpress" title="WordPress.com">
					<span></span>
				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:Twitter" id="postas-twitter" title="Twitter">
					<span></span>
				</a>
			</li>
			<li>
				<a href="#comment-form-load-service:Facebook" id="postas-facebook" title="Facebook">
					<span></span>
				</a>
			</li>
			<li>
			<iframe id="googleplus-sign-in" name="googleplus-sign-in" src="https://public-api.wordpress.com/connect/?googleplus-sign-in=https%3A%2F%2Fwordpress.com" width="24" height="24" scrolling="no" allowtransparency="true" seamless="seamless" frameborder="0"></iframe>
			</li>
		</ul>
	</div>

	<div id="comment-form-guest" class="comment-form-service selected">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
<a href="https://gravatar.com/site/signup/" target="_blank">				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25&amp;d=identicon&amp;forcedefault=y&amp;r=G" alt="Gravatar" width="25" class="no-grav" />
</a>			</div>

				<div class="comment-form-fields">
				<div class="comment-form-field comment-form-email">
					<label for="email">Email <span class="required">(input)</span> <span class="nopublish">(Address never made public)</span></label>
					<div class="comment-form-input"><input id="email" name="email" type="email" value="" /></div>
				</div>
				<div class="comment-form-field comment-form-author">
					<label for="author">Name <span class="required">(input)</span></label>
					<div class="comment-form-input"><input id="author" name="author" type="text" value="" /></div>
				</div>
				<div class="comment-form-field comment-form-url">
					<label for="url">Website</label>
					<div class="comment-form-input"><input id="url" name="url" type="text" value="" /></div>
				</div>
			</div>
	
		</div>
	</div>

	<div id="comment-form-wordpress" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://s2.wp.com/wp-content/mu-plugins/highlander-comments/images/wplogo.png" alt="WordPress.com Logo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="wp_avatar" id="wordpress-avatar" class="comment-meta-wordpress" value="" />
				<input type="hidden" name="wp_user_id" id="wordpress-user_id" class="comment-meta-wordpress" value="" />
				<input type="hidden" name="wp_access_token" id="wordpress-access_token" class="comment-meta-wordpress" value="" />
				<p class="comment-form-posting-as pa-wordpress"><strong></strong> You are commenting using your WordPress.com account. <span class="comment-form-log-out">(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'wordpress' );">Log&nbsp;Out</a>&nbsp;/&nbsp;<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Suffle</a>&nbsp;)</span></p>
			</div>
	
		</div>
	</div>

	<div id="comment-form-twitter" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25&amp;d=identicon&amp;forcedefault=y&amp;r=G" alt="Twitter picture" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="twitter_avatar" id="twitter-avatar" class="comment-meta-twitter" value="" />
				<input type="hidden" name="twitter_user_id" id="twitter-user_id" class="comment-meta-twitter" value="" />
				<input type="hidden" name="twitter_access_token" id="twitter-access_token" class="comment-meta-twitter" value="" />
				<p class="comment-form-posting-as pa-twitter"><strong></strong> You are commenting using your Twitter account. <span class="comment-form-log-out">(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'twitter' );">Log&nbsp;Out</a>&nbsp;/&nbsp;<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">suffle</a>&nbsp;)</span></p>
			</div>
	
		</div>
	</div>

	<div id="comment-form-facebook" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25&amp;d=identicon&amp;forcedefault=y&amp;r=G" alt="Facebook photo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="fb_avatar" id="facebook-avatar" class="comment-meta-facebook" value="" />
				<input type="hidden" name="fb_user_id" id="facebook-user_id" class="comment-meta-facebook" value="" />
				<input type="hidden" name="fb_access_token" id="facebook-access_token" class="comment-meta-facebook" value="" />
				<p class="comment-form-posting-as pa-facebook"><strong></strong> You are commenting using your Facebook account. <span class="comment-form-log-out">(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'facebook' );">Log&nbsp;Out</a>&nbsp;/&nbsp;<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Suffle</a>&nbsp;)</span></p>
			</div>
	
		</div>
	</div>

	<div id="comment-form-googleplus" class="comment-form-service">
		<div class="comment-form-padder">
			<div class="comment-form-avatar">
				<img src="https://1.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=25&amp;d=identicon&amp;forcedefault=y&amp;r=G" alt="Google+ photo" width="25" class="no-grav" />
			</div>

				<div class="comment-form-fields">
				<input type="hidden" name="googleplus_avatar" id="googleplus-avatar" class="comment-meta-googleplus" value="" />
				<input type="hidden" name="googleplus_user_id" id="googleplus-user_id" class="comment-meta-googleplus" value="" />
				<input type="hidden" name="googleplus_access_token" id="googleplus-access_token" class="comment-meta-googleplus" value="" />
				<p class="comment-form-posting-as pa-googleplus"><strong></strong> You are commenting using your Google+ account. <span class="comment-form-log-out">(&nbsp;<a href="javascript:HighlanderComments.doExternalLogout( 'googleplus' );">Log&nbsp;Out</a>&nbsp;/&nbsp;<a href="#" onclick="javascript:HighlanderComments.switchAccount();return false;">Suffle</a>&nbsp;)</span></p>
			</div>
	
		</div>
	</div>


	<div id="comment-form-load-service" class="comment-form-service">
		<div class="comment-form-posting-as-cancel"><a href="javascript:HighlanderComments.cancelExternalWindow();">Cancel</a></div>
		<p>Connecting to %s</p>
	</div>

</div>

<script type="text/javascript">
var highlander_expando_javascript = function(){
	var input = document.createElement( 'input' ),
	    comment = jQuery( '#comment' );

	if ( 'placeholder' in input ) {
		comment.attr( 'placeholder', jQuery( '.comment-textarea label' ).remove().text() );
	}

	// Expando Mode: start small, then auto-resize on first click + text length
	jQuery( '#comment-form-identity' ).hide();
	jQuery( '#comment-form-subscribe' ).hide();
	jQuery( '#commentform .form-submit' ).hide();

	comment.css( { 'height':'10px' } ).one( 'focus', function() {
		var timer = setInterval( HighlanderComments.resizeCallback, 10 )
		jQuery( this ).animate( { 'height': HighlanderComments.initialHeight } ).delay( 100 ).queue( function(n) { clearInterval( timer ); HighlanderComments.resizeCallback(); n(); } );
		jQuery( '#comment-form-identity' ).slideDown();
		jQuery( '#comment-form-subscribe' ).slideDown();
		jQuery( '#commentform .form-submit' ).slideDown();
	});
}
jQuery(document).ready( highlander_expando_javascript );
</script>

<div id="comment-form-subscribe">
	<p class="comment-subscription-form"><input type="checkbox" name="subscribe" id="subscribe" value="subscribe" style="width: auto;" tabindex="6"/> <label class="subscribe-label" id="subscribe-label" for="subscribe" style="display: inline;">Notify me of new comments via email.</label></p></div>

						
						<p class="form-submit"><input name="submit" type="submit" id="comment-submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='4' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p><p style="display: none;"><input type="hidden" id="akismet_comment_nonce" name="akismet_comment_nonce" value="f357588cbd" /></p>
<input type="hidden" name="genseq" value="1431598000" />
<p style="display: none;"><input type="hidden" id="ak_js" name="ak_js" value="151"/></p>					</form>
							</div><!-- #respond -->
			<div style="clear: both"></div>
</div><!-- #comments -->

		
		</main><!-- #main -->
	</div><!-- #primary -->

					<div class="secondary widget-area" role="complementary">
			<aside id="search-2" class="widget widget_search"><form role="search" method="get" class="search-form" action="#">
	<label>
		<span class="screen-reader-text">Search...</span>
		<input type="search" class="search-field" placeholder="Search" value="">
	</label>
	<input type="submit" class="search-submit" value="Search">
</form>
</aside>		<aside id="recent-posts-2" class="widget widget_recent_entries">		<h1 class="widget-title">Recents Post</h1>		<ul>
					<?

	include('tag.php');

	?>
				</ul>
		</aside></div><!-- #secondary -->
	
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer-wrapper">
			<div class="site-info">
				<p>Copyright</span> &copy; 2014 <a href="http://<?=$urlwebsite;?>"><?=$urlwebsite;?></a> | <a href="http://<?=$urlwebsite;?>/all.html">All Page</a> | <a href="http://<?=$urlwebsite;?>/sitemap.xml">Sitemap</a></br><? include("footer.php");?></p>
</div><!-- .site-info -->
					</div><!-- .site-footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- wpcom_wp_footer -->
<script type='text/javascript' src='//0.gravatar.com/js/gprofiles.js?ver=201520x'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var WPGroHo = {"my_hash":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://s2.wp.com/wp-content/mu-plugins/gravatar-hovercards/wpgroho.js?m=1380573781g'></script>

	<script>
		//initialize and attach hovercards to all gravatars
		jQuery( document ).ready( function( $ ) {

			if (typeof Gravatar === "undefined"){
				return;
			}

			if ( typeof Gravatar.init !== "function" ) {
				return;
			}			

			Gravatar.profile_cb = function( hash, id ) {
				WPGroHo.syncProfileData( hash, id );
			};
			Gravatar.my_hash = WPGroHo.my_hash;
			Gravatar.init( 'body', '#wp-admin-bar-my-account' );
		});
	</script>

		<div style="display:none">
	</div>

<script type='text/javascript' src='https://s2.wp.com/_static/??/wp-content/js/jquery/jquery.autoresize.js,/wp-content/mu-plugins/highlander-comments/script.js?m=1424115551j'></script>


	<script type="text/javascript">
		window.WPCOM_sharing_counts = {"https:\/\/<?=$urlwebsite;?>":4};
		window.WPCOM_jetpack = false;
				window.WPCOM_site_ID = 91497467;
			</script>
		<script type="text/javascript">
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-twitter' ).on( 'click', function() {
				window.open( jQuery(this).attr( 'href' ), 'wpcomtwitter', 'menubar=1,resizable=1,width=600,height=350' );
				return false;
			});
		});
		</script>
				<script type="text/javascript">
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-facebook' ).on( 'click', function() {
				window.open( jQuery(this).attr( 'href' ), 'wpcomfacebook', 'menubar=1,resizable=1,width=600,height=400' );
				return false;
			});
		});
		</script>
				<script type="text/javascript">
		jQuery(document).on( 'ready post-load', function(){
			jQuery( 'a.share-google-plus-1' ).on( 'click', function() {
				window.open( jQuery(this).attr( 'href' ), 'wpcomgoogle-plus-1', 'menubar=1,resizable=1,width=480,height=550' );
				return false;
			});
		});
		</script>
				<iframe src='https://widgets.wp.com/likes/master.html?ver=20141028#ver=20141028&amp;lang=th&amp;mp6=1' scrolling='no' id='likes-master' name='likes-master' style='display:none;'></iframe>
		<div id='likes-other-gravatars'><div class="likes-text"><span>%d</span> bloggers like this:</div><ul class="wpl-avatars sd-like-gravatars"></ul></div>
		<script type="text/javascript">
		//<![CDATA[
			var jetpackLikesWidgetQueue = [];
			var jetpackLikesWidgetBatch = [];
			var jetpackLikesMasterReady = false;

			function JetpackLikespostMessage( message, target ) {
				if ( "string" === typeof message ){
					try{
						message = JSON.parse( message );
					}
					catch(e) {
						return;
					}
				}

				pm( {
					target: target,
					type: 'likesMessage',
					data: message,
					origin: '*'
				} );
			}

			function JetpackLikesBatchHandler() {
				var requests = [];
				jQuery( 'div.jetpack-likes-widget-unloaded' ).each( function( i ) {
					if ( jetpackLikesWidgetBatch.indexOf( this.id ) > -1 )
						return;
					jetpackLikesWidgetBatch.push( this.id );
					var regex = /like-(post|comment)-wrapper-(\d+)-(\d+)-(\w+)/;
					var match = regex.exec( this.id );
					if ( ! match || match.length != 5 )
						return;

					var info = {
						blog_id: match[2],
						width:   this.width
					};

					if ( 'post' == match[1] ) {
						info.post_id = match[3];
					} else if ( 'comment' == match[1] ) {
						info.comment_id = match[3];
					}

					info.obj_id = match[4];

					requests.push( info );
				});

				if ( requests.length > 0 ) {
					JetpackLikespostMessage( { event: 'initialBatch', requests: requests }, window.frames['likes-master'] );
				}
			}

			function JetpackLikesMessageListener( event ) {
				if ( "undefined" == typeof event.event )
					return;

				if ( 'masterReady' == event.event ) {
					jQuery( document ).ready( function() {
						jetpackLikesMasterReady = true;

						var stylesData = {
								event: 'injectStyles'
						};

						if ( jQuery( 'iframe.admin-bar-likes-widget' ).length > 0 ) {
							JetpackLikespostMessage( { event: 'adminBarEnabled' }, window.frames[ 'likes-master' ] );

							stylesData.adminBarStyles = {
								background: jQuery( '#wpadminbar .quicklinks li#wp-admin-bar-wpl-like > a' ).css( 'background' ),
								isRtl: ( 'rtl' == jQuery( '#wpadminbar' ).css( 'direction' ) )
							};
						}

						if ( !window.addEventListener )
							jQuery( '#wp-admin-bar-admin-bar-likes-widget' ).hide();

						stylesData.textStyles = {
							color: jQuery( '.sd-text-color').css( 'color' ),
							fontFamily: jQuery( '.sd-text-color' ).css( 'font-family' ),
							fontSize: jQuery( '.sd-text-color' ).css( 'font-size' ),
							direction: jQuery( '.sd-text-color' ).css( 'direction' ),
							fontWeight: jQuery( '.sd-text-color' ).css( 'font-weight' ),
							fontStyle: jQuery( '.sd-text-color' ).css( 'font-style' ),
							textDecoration: jQuery( '.sd-text-color' ).css('text-decoration')
						};

						stylesData.linkStyles = {
							color: jQuery( '.sd-link-color' ).css('color'),
							fontFamily: jQuery( '.sd-link-color' ).css('font-family'),
							fontSize: jQuery( '.sd-link-color' ).css('font-size'),
							textDecoration: jQuery( '.sd-link-color' ).css('text-decoration'),
							fontWeight: jQuery( '.sd-link-color' ).css( 'font-weight' ),
							fontStyle: jQuery( '.sd-link-color' ).css( 'font-style' )
						};

						JetpackLikespostMessage( stylesData, window.frames[ 'likes-master' ] );

						JetpackLikesBatchHandler();

						jQuery( document ).on( 'inview', 'div.jetpack-likes-widget-unloaded', function() {
							jetpackLikesWidgetQueue.push( this.id );
						});
					});
				}

				if ( 'showLikeWidget' == event.event ) {
					jQuery( '#' + event.id + ' .post-likes-widget-placeholder'  ).fadeOut( 'fast', function() {
						jQuery( '#' + event.id + ' .post-likes-widget' ).fadeIn( 'fast', function() {
							JetpackLikespostMessage( { event: 'likeWidgetDisplayed', blog_id: event.blog_id, post_id: event.post_id, obj_id: event.obj_id }, window.frames['likes-master'] );
						});
					});
				}

				if ( 'clickReblogFlair' == event.event ) {
					wpcom_reblog.toggle_reblog_box_flair( event.obj_id );
				}

				if ( 'showOtherGravatars' == event.event ) {
					var $container = jQuery( '#likes-other-gravatars' );
					var $list = $container.find( 'ul' );

					$container.hide();
					$list.html( '' );

					$container.find( '.likes-text span' ).text( event.total );

					jQuery.each( event.likers, function( i, liker ) {
						$list.append( '<li class="' + liker.css_class + '"><a href="' + liker.profile_URL + '" class="wpl-liker" rel="nofollow" target="_parent"><img src="' + liker.avatar_URL + '" alt="' + liker.name + '" width="30" height="30" style="padding-right: 3px;" /></a></li>');
					} );

					var offset = jQuery( "[name='" + event.parent + "']" ).offset();

					$container.css( 'left', offset.left + event.position.left - 10 + 'px' );
					$container.css( 'top', offset.top + event.position.top - 33 + 'px' );

					var rowLength = Math.floor( event.width / 37 );
					var height = ( Math.ceil( event.likers.length / rowLength ) * 37 ) + 13;
					if ( height > 204 ) {
						height = 204;
					}

					$container.css( 'height', height + 'px' );
					$container.css( 'width', rowLength * 37 - 7 + 'px' );

					$list.css( 'width', rowLength * 37 + 'px' );

					$container.fadeIn( 'slow' );

					var scrollbarWidth = $list[0].offsetWidth - $list[0].clientWidth;
					if ( scrollbarWidth > 0 ) {
						$container.width( $container.width() + scrollbarWidth );
						$list.width( $list.width() + scrollbarWidth );
					}
				}
			}

			pm.bind( 'likesMessage', function(e) { JetpackLikesMessageListener(e); } );

			jQuery( document ).click( function( e ) {
				var $container = jQuery( '#likes-other-gravatars' );

				if ( $container.has( e.target ).length === 0 ) {
					$container.fadeOut( 'slow' );
				}
			});

			function JetpackLikesWidgetQueueHandler() {
				var wrapperID;
				if ( ! jetpackLikesMasterReady ) {
					setTimeout( JetpackLikesWidgetQueueHandler, 500 );
					return;
				}

				if ( jetpackLikesWidgetQueue.length > 0 ) {
					// We may have a widget that needs creating now
					var found = false;
					while( jetpackLikesWidgetQueue.length > 0 ) {
						// Grab the first member of the queue that isn't already loading.
						wrapperID = jetpackLikesWidgetQueue.splice( 0, 1 )[0];
						if ( jQuery( '#' + wrapperID ).hasClass( 'jetpack-likes-widget-unloaded' ) ) {
							found = true;
							break;
						}
					}
					if ( ! found ) {
						setTimeout( JetpackLikesWidgetQueueHandler, 500 );
						return;
					}
				} else if ( jQuery( 'div.jetpack-likes-widget-unloaded' ).length > 0 ) {
					// Grab any unloaded widgets for a batch request
					JetpackLikesBatchHandler();

					// Get the next unloaded widget
					wrapperID = jQuery( 'div.jetpack-likes-widget-unloaded' ).first()[0].id;
					if ( ! wrapperID ) {
						// Everything is currently loaded
						setTimeout( JetpackLikesWidgetQueueHandler, 500 );
						return;
					}
				}

				if ( 'undefined' === typeof wrapperID ) {
					setTimeout( JetpackLikesWidgetQueueHandler, 500 );
					return;
				}

				var $wrapper = jQuery( '#' + wrapperID );
				$wrapper.find( 'iframe' ).remove();

				if ( $wrapper.hasClass( 'slim-likes-widget' ) ) {
					$wrapper.find( '.post-likes-widget-placeholder' ).after( "<iframe class='post-likes-widget jetpack-likes-widget' name='" + $wrapper.data( 'name' ) + "' height='22px' width='68px' frameBorder='0' scrolling='no' src='" + $wrapper.data( 'src' ) + "'></iframe>" );
				} else {
					$wrapper.find( '.post-likes-widget-placeholder' ).after( "<iframe class='post-likes-widget jetpack-likes-widget' name='" + $wrapper.data( 'name' ) + "' height='55px' width='100%' frameBorder='0' src='" + $wrapper.data( 'src' ) + "'></iframe>" );
				}

				$wrapper.removeClass( 'jetpack-likes-widget-unloaded' ).addClass( 'jetpack-likes-widget-loading' );

				$wrapper.find( 'iframe' ).load( function( e ) {
					var $iframe = jQuery( e.target );
					$wrapper.removeClass( 'jetpack-likes-widget-loading' ).addClass( 'jetpack-likes-widget-loaded' );

					JetpackLikespostMessage( { event: 'loadLikeWidget', name: $iframe.attr( 'name' ), width: $iframe.width() }, window.frames[ 'likes-master' ] );

					if ( $wrapper.hasClass( 'slim-likes-widget' ) ) {
						$wrapper.find( 'iframe' ).Jetpack( 'resizeable' );
					}
				});
				setTimeout( JetpackLikesWidgetQueueHandler, 250 );
			}
			JetpackLikesWidgetQueueHandler();
		//]]>
		</script>
<script type='text/javascript' src='https://s1.wp.com/wp-content/mu-plugins/akismet-3.0/_inc/form.js?m=1404442431g'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var comment_like_text = {"loading":"\u0e01\u0e33\u0e25\u0e31\u0e07\u0e42\u0e2b\u0e25\u0e14..."};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var JetpackEmojiSettings = {"base_url":"https:\/\/s0.wp.com\/wp-content\/mu-plugins\/emoji\/twemoji\/"};
/* ]]> */
</script>
<script type='text/javascript'>
/* <![CDATA[ */
var sharing_js_options = {"lang":"en","counts":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://s1.wp.com/_static/??-eJyVj0sOwjAMRC9EcBHfDeIsaXCL03ysOKFwe8ICRGEBrEYaz9N4YGRlYsgYMliBI57JIF/mVmbwcvJFsSs9BQETva+WcjSg3BlHLchIjP9AE+MdzCf0NcalhZZ61aZYnXTHgj5TrzPF8DsjA3HtCYPqoimiOnrOo2BcOU4/SsjuOvf00fAyB320BHmc6Ne8xczaDOq39LcUR8mqc5oSyEknCv1DK3Tw+8Vq2ew226ZZ2xvye7Sl'></script>
<script type="text/javascript">
// <![CDATA[
(function() {
try{
  if ( window.external &&'msIsSiteMode' in window.external) {
    if (window.external.msIsSiteMode()) {
      var jl = document.createElement('script');
      jl.type='text/javascript';
      jl.async=true;
      jl.src='/wp-content/plugins/ie-sitemode/custom-jumplist.php';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(jl, s);
    }
  }
}catch(e){}
})();
// ]]>
</script>	<script type="text/javascript">
	var skimlinks_pub_id = "725X584219"
	var skimlinks_sitename = "tooxcution.wordpress.com";
	</script>
	<script type="text/javascript" src="https://s.skimresources.com/js/725X1342.skimlinks.js"></script><script src="//stats.wp.com/w.js?46" type="text/javascript" async defer></script>
<script type="text/javascript">
_tkq = window._tkq || [];
_stq = window._stq || [];
_tkq.push(['storeContext', {'blog_id':'91497467','blog_tz':'0','user_lang':'th','blog_lang':'th','user_id':'0'}]);
_stq.push(['view', {'blog':'91497467','v':'wpcom','tz':'0','user_id':'0','post':'4','subd':'tooxcution'}]);
_stq.push(['extra', {'crypt':'UE40eW5QN0p8M2Y/RE1mJVY3bm9aR3VCbS9mWm1pRyZuJS1LX1t5QmRXZzE3RC9rQWZHK1FjbDltdWdaMVFFZTcxUGVHLWR0WTJoRGwuflFyTHFUM3xMXy1Vd0FqfDE5dHMmX0xbfkFzdT81JUoyUXlCTEcwN00lU3wmRHlyUk1yaXpWbS8venpuVER+PSVQVzVJQm1dYlVyJlIwaEJSL21IVl8vJlNzKzJsc1FNSng2YlhwMGR4UXxDYktFYzdBSlVyLkNaVV9BX2E/dkNrW0UxTEssWkUreSY9MT10SGEra2lic2RlbURudyxZTmt8ZE5VJSxTS0lHfGRhbEZ3SE1zSWZbVWM9VUI0MTB5dUttUV1yRjZGOSYsUU1dcW8sXzF1U3ZZR2ZEXX5MRGhQSHwr'}]);
_stq.push([ 'clickTrackerInit', '91497467', '4' ]);
	</script>
<noscript><img src="https://pixel.wp.com/b.gif?v=noscript" style="height:0px;width:0px;overflow:hidden" alt="" /></noscript>
<script>
if ( 'object' === typeof wpcom_mobile_user_agent_info ) {

	wpcom_mobile_user_agent_info.init();
	var mobileStatsQueryString = "";
	
	if( false !== wpcom_mobile_user_agent_info.matchedPlatformName )
		mobileStatsQueryString += "&x_" + 'mobile_platforms' + '=' + wpcom_mobile_user_agent_info.matchedPlatformName;
	
	if( false !== wpcom_mobile_user_agent_info.matchedUserAgentName )
		mobileStatsQueryString += "&x_" + 'mobile_devices' + '=' + wpcom_mobile_user_agent_info.matchedUserAgentName;
	
	if( wpcom_mobile_user_agent_info.isIPad() )
		mobileStatsQueryString += "&x_" + 'ipad_views' + '=' + 'views';

	if( "" != mobileStatsQueryString ) {
		new Image().src = document.location.protocol + '//pixel.wp.com/g.gif?v=wpcom-no-pv' + mobileStatsQueryString + '&baba=' + Math.random();
	}
	
}
</script>
</body>
</html>
<!--
	generated in 0.162 seconds
	42892 bytes batcached for 300 seconds
-->