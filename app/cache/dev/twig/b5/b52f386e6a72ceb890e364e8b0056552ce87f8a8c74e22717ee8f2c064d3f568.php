<?php

/* TFTpersonneBundle::Map.html.twig */
class __TwigTemplate_00a41fae50e8a5ab422343719952ec84276e7c7d048c61476497a269521fbbc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!doctype html>

<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />

<meta name=\"author\" content=\"corsini\" />
<meta name=\"keywords\" content=\"Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,\tcharity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    
    <link href=\"css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300\" rel='stylesheet' type='text/css'/>
    <link href=\"http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900\" rel='stylesheet' type='text/css'/>
    <link href=\"http://fonts.googleapis.com/css?family=Oswald:400,300,700\"
          rel='stylesheet' type='text/css'>
    <link href=\"css/fonts/font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />

     <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_dir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\" type=\"text/javascript\"></script>
\t<meta charset=\"utf-8\"/>
\t<title>Dashboard I Admin Panel</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.equalHeight.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\$(document).ready(function() 
    \t{ 
      \t  \$(\".tablesorter\").tablesorter(); 
   \t } 
\t);
\t\$(document).ready(function() {

\t//When page loads...
\t\$(\".tab_content\").hide(); //Hide all content
\t\$(\"ul.tabs li:first\").addClass(\"active\").show(); //Activate first tab
\t\$(\".tab_content:first\").show(); //Show first tab content

\t//On Click Event
\t\$(\"ul.tabs li\").click(function() {

\t\t\$(\"ul.tabs li\").removeClass(\"active\"); //Remove any \"active\" class
\t\t\$(this).addClass(\"active\"); //Add \"active\" class to selected tab
\t\t\$(\".tab_content\").hide(); //Hide all tab content

\t\tvar activeTab = \$(this).find(\"a\").attr(\"href\"); //Find the href attribute value to identify the active tab + content
\t\t\$(activeTab).fadeIn(); //Fade in the active ID content
\t\treturn false;
\t});

});
    </script>
    <script type=\"text/javascript\">
    \$(function(){
        \$('.column').equalHeight();
    });
</script>

</head>


<body>

\t<header id=\"header\">
\t\t<hgroup>
\t\t\t<h1 class=\"site_title\"><a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Website Admin</a></h1>
\t\t\t<h2 class=\"section_title\">Dashboard</h2><div class=\"btn_view_site\"><a href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.medialoot.com"), "html", null, true);
        echo "\">View Site</a></div>
\t\t</hgroup>
\t</header> <!-- end of header bar -->
\t
\t<section id=\"secondary_bar\">
\t\t<div class=\"user\">
\t\t\t<p>John Doe (<a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">3 Messages</a>)</p>
\t\t\t<!-- <a class=\"logout_user\" href=\"#\" title=\"Logout\">Logout</a> -->
\t\t</div>
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<article class=\"breadcrumbs\"><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Website Admin</a> <div class=\"breadcrumb_divider\"></div> <a class=\"current\">Dashboard</a></article>
\t\t</div>
\t</section><!-- end of secondary bar -->
\t
\t<aside id=\"sidebar\" class=\"column\">
\t\t<form class=\"quick_search\">
\t\t\t<input type=\"text\" value=\"Quick Search\" onfocus=\"if(!this._haschanged){this.value=''};this._haschanged=true;\">
\t\t</form>
\t\t<hr/>
                <h3>statistical</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"#\">best player</a></li>
\t\t\t<li class=\"icn_edit_article\"><a href=\"#\">top 10 ranking</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">best team</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">top 10 ranking team</a></li>
\t\t</ul>
                <h3>Match</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href =\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("ajout_admin_stade");
        echo "\"target=\"_blank\">New Match</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Edit Match</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Delete Match</a></li>
                        <li class=\"icn_categories\"><a href=\"#\">Edit Shedule</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">view match</a></li>
\t\t</ul>
                 <h3>Stadium</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href =\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("ajout_admin_stade");
        echo "\"target=\"_blank\">New Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\">Edit Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\">Delete Stadium</a></li>
                        <li class=\"icn_categories\"><a href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\">view Stadium</a></li>
                        
\t\t\t<li class=\"icn_tags\"><a href=\"#\">view match</a></li>
\t\t</ul>
                 <h3>Pronostics</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href =\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("ajout_admin_pronostic");
        echo "\"target=\"_blank\">New Pronostic</a></li>
                        <li class=\"icn_categories\"><a href=\"#\">Delete Pronostic</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">view Pronostic</a></li>
\t\t</ul>
                
\t\t<h3>Content</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"#\">New Article</a></li>
\t\t\t<li class=\"icn_edit_article\"><a href=\"#\">Edit Articles</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Categories</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">Tags</a></li>
\t\t</ul>
\t\t<h3>Users</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_add_user\"><a href=\"#\">Add New User</a></li>
\t\t\t<li class=\"icn_view_users\"><a href=\"#\">View Users</a></li>
\t\t\t<li class=\"icn_profile\"><a href=\"#\">Your Profile</a></li>
\t\t</ul>
\t\t<h3>Media</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_folder\"><a href=\"#\">File Manager</a></li>
\t\t\t<li class=\"icn_photo\"><a href=\"#\">Gallery</a></li>
\t\t\t<li class=\"icn_audio\"><a href=\"#\">Audio</a></li>
\t\t\t<li class=\"icn_video\"><a href=\"#\">Video</a></li>
\t\t</ul>
\t\t<h3>Admin</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_settings\"><a href=\"#\">Options</a></li>
\t\t\t<li class=\"icn_security\"><a href=\"#\">Security</a></li>
\t\t\t<li class=\"icn_jump_back\"><a href=\"#\">Logout</a></li>
\t\t</ul>
\t\t
     
\t\t<footer>
\t\t\t<hr />
\t\t\t<p><strong>Copyright &copy; 2011 Website Admin</strong></p>
\t\t\t<p>Theme by <a href=\"http://www.medialoot.com\">MediaLoot</a></p>
\t\t</footer>
\t</aside><!-- end of sidebar -->
\t

\t\t
\t\t
            </center>
\t\t


<!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:11:13 GMT -->



    <div class=\"taha\"  margin-left=455000px\">
        <center>
   <section class=\"drawer\">
    <section id=\"contact\" class=\"secondary-page\">
      <div class=\"general\">
           <!--Google Maps-->
            <div id=\"map_container\">
\t\t\t    <div id=\"map_canvas\"></div>
\t\t    </div>

                </div>
                </section>
                

<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--MENU-->
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--END MENU-->
<!-- Button Anchor Top-->
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
    /********************************************
    GOOGLE MAPS
    ********************************************/

    // The following example creates a marker in Stockholm, Sweden
    // using a DROP animation. Clicking on the marker will toggle
    // the animation between a BOUNCE animation and no animation.
    \$(document).ready(function (\$) {
        \"use strict\";
        var stockholm = new google.maps.LatLng(36.858894, 10.172457);
        var parliament = new google.maps.LatLng(36.858894, 10.172457);
        var image = '";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/marker.png"), "html", null, true);
        echo "';
        var marker;
        var map;

        function initialize() {
            var styleArray = [
        {
            featureType: 'all',
            stylers: [
            { saturation: -1000 }
            ]
        }, {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [
            { hue: ' 00ffee' },
            { saturation: -100 },
            { \"lightness\": -8 },
            { \"gamma\": 1.18 }
            ]
        }
        ];
            var mapOptions = {
                zoom: 14,
                styles: styleArray,
                center: stockholm
            };

            map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                icon: image,
                position: parliament
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function toggleBounce() {

            if (marker.getAnimation() != null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    });
</script>
        </section>
</center>

<!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:11:07 GMT -->


</div>
";
        // line 272
        $this->displayBlock('content2', $context, $blocks);
        // line 274
        echo "
</body>

</html>
";
    }

    // line 272
    public function block_content2($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle::Map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 272,  372 => 274,  370 => 272,  307 => 212,  291 => 199,  286 => 197,  280 => 194,  276 => 193,  270 => 190,  266 => 189,  198 => 124,  189 => 118,  185 => 117,  181 => 116,  177 => 115,  166 => 107,  145 => 89,  138 => 85,  129 => 79,  125 => 78,  81 => 37,  77 => 36,  73 => 35,  69 => 34,  61 => 29,  53 => 24,  49 => 23,  45 => 22,  40 => 20,  20 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!doctype html>*/
/* */
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* */
/* <head>*/
/*     <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/* <meta name="author" content="corsini" />*/
/* <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,	charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     */
/*     <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />*/
/*     <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300" rel='stylesheet' type='text/css'/>*/
/*     <link href="http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900" rel='stylesheet' type='text/css'/>*/
/*     <link href="http://fonts.googleapis.com/css?family=Oswald:400,300,700"*/
/*           rel='stylesheet' type='text/css'>*/
/*     <link href="css/fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* */
/*      <link href="{{asset('css/component.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*     <link href="{{asset('css/style_dir.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.ico')}}" />*/
/*     <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />*/
/*     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" type="text/javascript"></script>*/
/* 	<meta charset="utf-8"/>*/
/* 	<title>Dashboard I Admin Panel</title>*/
/* 	*/
/* 	<link rel="stylesheet" href="{{asset('css/layout.css')}}" type="text/css" media="screen" />*/
/* 	<!--[if lt IE 9]>*/
/* 	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />*/
/* 	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>*/
/* 	<![endif]-->*/
/* 	<script src="{{asset('js/jquery-1.5.2.min.js')}}" type="text/javascript"></script>*/
/* 	<script src="{{asset('js/hideshow.js')}}" type="text/javascript"></script>*/
/* 	<script src="{{asset('js/jquery.tablesorter.min.js')}}" type="text/javascript"></script>*/
/* 	<script type="text/javascript" src="{{asset('js/jquery.equalHeight.js')}}"></script>*/
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function() */
/*     	{ */
/*       	  $(".tablesorter").tablesorter(); */
/*    	 } */
/* 	);*/
/* 	$(document).ready(function() {*/
/* */
/* 	//When page loads...*/
/* 	$(".tab_content").hide(); //Hide all content*/
/* 	$("ul.tabs li:first").addClass("active").show(); //Activate first tab*/
/* 	$(".tab_content:first").show(); //Show first tab content*/
/* */
/* 	//On Click Event*/
/* 	$("ul.tabs li").click(function() {*/
/* */
/* 		$("ul.tabs li").removeClass("active"); //Remove any "active" class*/
/* 		$(this).addClass("active"); //Add "active" class to selected tab*/
/* 		$(".tab_content").hide(); //Hide all tab content*/
/* */
/* 		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content*/
/* 		$(activeTab).fadeIn(); //Fade in the active ID content*/
/* 		return false;*/
/* 	});*/
/* */
/* });*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*     $(function(){*/
/*         $('.column').equalHeight();*/
/*     });*/
/* </script>*/
/* */
/* </head>*/
/* */
/* */
/* <body>*/
/* */
/* 	<header id="header">*/
/* 		<hgroup>*/
/* 			<h1 class="site_title"><a href="{{asset('index.html')}}">Website Admin</a></h1>*/
/* 			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="{{asset('http://www.medialoot.com')}}">View Site</a></div>*/
/* 		</hgroup>*/
/* 	</header> <!-- end of header bar -->*/
/* 	*/
/* 	<section id="secondary_bar">*/
/* 		<div class="user">*/
/* 			<p>John Doe (<a href="{{asset('#')}}">3 Messages</a>)</p>*/
/* 			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->*/
/* 		</div>*/
/* 		<div class="breadcrumbs_container">*/
/* 			<article class="breadcrumbs"><a href="{{asset('index.html')}}">Website Admin</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>*/
/* 		</div>*/
/* 	</section><!-- end of secondary bar -->*/
/* 	*/
/* 	<aside id="sidebar" class="column">*/
/* 		<form class="quick_search">*/
/* 			<input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">*/
/* 		</form>*/
/* 		<hr/>*/
/*                 <h3>statistical</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="#">best player</a></li>*/
/* 			<li class="icn_edit_article"><a href="#">top 10 ranking</a></li>*/
/* 			<li class="icn_categories"><a href="#">best team</a></li>*/
/* 			<li class="icn_tags"><a href="#">top 10 ranking team</a></li>*/
/* 		</ul>*/
/*                 <h3>Match</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href ="{{path('ajout_admin_stade')}}"target="_blank">New Match</a></li>*/
/* 			<li class="icn_categories"><a href="#">Edit Match</a></li>*/
/* 			<li class="icn_categories"><a href="#">Delete Match</a></li>*/
/*                         <li class="icn_categories"><a href="#">Edit Shedule</a></li>*/
/* 			<li class="icn_tags"><a href="#">view match</a></li>*/
/* 		</ul>*/
/*                  <h3>Stadium</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href ="{{path('ajout_admin_stade')}}"target="_blank">New Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="{{path('affich_admin_stade')}}">Edit Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="{{path('affich_admin_stade')}}">Delete Stadium</a></li>*/
/*                         <li class="icn_categories"><a href="{{path('affich_admin_stade')}}">view Stadium</a></li>*/
/*                         */
/* 			<li class="icn_tags"><a href="#">view match</a></li>*/
/* 		</ul>*/
/*                  <h3>Pronostics</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href ="{{path('ajout_admin_pronostic')}}"target="_blank">New Pronostic</a></li>*/
/*                         <li class="icn_categories"><a href="#">Delete Pronostic</a></li>*/
/* 			<li class="icn_tags"><a href="#">view Pronostic</a></li>*/
/* 		</ul>*/
/*                 */
/* 		<h3>Content</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="#">New Article</a></li>*/
/* 			<li class="icn_edit_article"><a href="#">Edit Articles</a></li>*/
/* 			<li class="icn_categories"><a href="#">Categories</a></li>*/
/* 			<li class="icn_tags"><a href="#">Tags</a></li>*/
/* 		</ul>*/
/* 		<h3>Users</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_add_user"><a href="#">Add New User</a></li>*/
/* 			<li class="icn_view_users"><a href="#">View Users</a></li>*/
/* 			<li class="icn_profile"><a href="#">Your Profile</a></li>*/
/* 		</ul>*/
/* 		<h3>Media</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_folder"><a href="#">File Manager</a></li>*/
/* 			<li class="icn_photo"><a href="#">Gallery</a></li>*/
/* 			<li class="icn_audio"><a href="#">Audio</a></li>*/
/* 			<li class="icn_video"><a href="#">Video</a></li>*/
/* 		</ul>*/
/* 		<h3>Admin</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_settings"><a href="#">Options</a></li>*/
/* 			<li class="icn_security"><a href="#">Security</a></li>*/
/* 			<li class="icn_jump_back"><a href="#">Logout</a></li>*/
/* 		</ul>*/
/* 		*/
/*      */
/* 		<footer>*/
/* 			<hr />*/
/* 			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>*/
/* 			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>*/
/* 		</footer>*/
/* 	</aside><!-- end of sidebar -->*/
/* 	*/
/* */
/* 		*/
/* 		*/
/*             </center>*/
/* 		*/
/* */
/* */
/* <!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:11:13 GMT -->*/
/* */
/* */
/* */
/*     <div class="taha"  margin-left=455000px">*/
/*         <center>*/
/*    <section class="drawer">*/
/*     <section id="contact" class="secondary-page">*/
/*       <div class="general">*/
/*            <!--Google Maps-->*/
/*             <div id="map_container">*/
/* 			    <div id="map_canvas"></div>*/
/* 		    </div>*/
/* */
/*                 </div>*/
/*                 </section>*/
/*                 */
/* */
/* <script src="{{asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>*/
/* */
/* <!--MENU-->*/
/* <script src="{{asset('js/menu/modernizr.custom.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('js/menu/cbpHorizontalMenu.js')}}" type="text/javascript"></script>*/
/* <!--END MENU-->*/
/* <!-- Button Anchor Top-->*/
/* <script src="{{asset('js/jquery.ui.totop.js')}}" type="text/javascript"></script>*/
/* */
/* <script src="{{asset('js/custom.js')}}" type="text/javascript"></script>*/
/* <script type="text/javascript">*/
/*     /*********************************************/
/*     GOOGLE MAPS*/
/*     ********************************************//* */
/* */
/*     // The following example creates a marker in Stockholm, Sweden*/
/*     // using a DROP animation. Clicking on the marker will toggle*/
/*     // the animation between a BOUNCE animation and no animation.*/
/*     $(document).ready(function ($) {*/
/*         "use strict";*/
/*         var stockholm = new google.maps.LatLng(36.858894, 10.172457);*/
/*         var parliament = new google.maps.LatLng(36.858894, 10.172457);*/
/*         var image = '{{asset('images/marker.png')}}';*/
/*         var marker;*/
/*         var map;*/
/* */
/*         function initialize() {*/
/*             var styleArray = [*/
/*         {*/
/*             featureType: 'all',*/
/*             stylers: [*/
/*             { saturation: -1000 }*/
/*             ]*/
/*         }, {*/
/*             featureType: 'road.arterial',*/
/*             elementType: 'geometry',*/
/*             stylers: [*/
/*             { hue: ' 00ffee' },*/
/*             { saturation: -100 },*/
/*             { "lightness": -8 },*/
/*             { "gamma": 1.18 }*/
/*             ]*/
/*         }*/
/*         ];*/
/*             var mapOptions = {*/
/*                 zoom: 14,*/
/*                 styles: styleArray,*/
/*                 center: stockholm*/
/*             };*/
/* */
/*             map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);*/
/* */
/*             marker = new google.maps.Marker({*/
/*                 map: map,*/
/*                 draggable: true,*/
/*                 animation: google.maps.Animation.DROP,*/
/*                 icon: image,*/
/*                 position: parliament*/
/*             });*/
/*             google.maps.event.addListener(marker, 'click', toggleBounce);*/
/*         }*/
/* */
/*         function toggleBounce() {*/
/* */
/*             if (marker.getAnimation() != null) {*/
/*                 marker.setAnimation(null);*/
/*             } else {*/
/*                 marker.setAnimation(google.maps.Animation.BOUNCE);*/
/*             }*/
/*         }*/
/* */
/*         google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/*     });*/
/* </script>*/
/*         </section>*/
/* </center>*/
/* */
/* <!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/matches.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:11:07 GMT -->*/
/* */
/* */
/* </div>*/
/* {% block content2 %}*/
/* {%endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
