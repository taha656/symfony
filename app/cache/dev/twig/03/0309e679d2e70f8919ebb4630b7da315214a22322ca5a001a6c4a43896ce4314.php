<?php

/* TFTpersonneBundle:Session:layout.html.twig */
class __TwigTemplate_ffa70e94245db6090c8d5016014bb723c0d22f599461fcfacb7c17ddb85fc3d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        echo "<!doctype html>

<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\"/>
\t<title>Admin</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 22
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Website Admin</a></h1>
\t\t\t<h2 class=\"section_title\">Dashboard</h2><div class=\"btn_view_site\"><a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.medialoot.com"), "html", null, true);
        echo "\">View Site</a></div>
\t\t</hgroup>
\t</header> <!-- end of header bar -->
\t
\t<section id=\"secondary_bar\">
\t\t<div class=\"user\">
\t\t\t<p>Sirine (<a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\"></a>)</p>
\t\t\t<!-- <a class=\"logout_user\" href=\"#\" title=\"Logout\">Logout</a> -->
\t\t</div>
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<article class=\"breadcrumbs\"><a href=\"";
        // line 74
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
                
                <h3>Session</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("tft_personne_ajout");
        echo "\">New Session</a></li>
\t\t\t<li class=\"icn_edit_article\"><a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("tft_personne_listup");
        echo "\">Edit Session</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("tft_personne_listsup");
        echo "\">Delete Session</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"";
        // line 96
        echo $this->env->getExtension('routing')->getPath("tft_personne_aff");
        echo "\">view Session</a></li>
\t\t</ul>
                
                <h3>Club</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"#\">New Club</a></li>
\t\t\t<li class=\"icn_edit_article\"><a href=\"#\">Edit Club</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Delete Club</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">Add Player</a></li>
                        \t\t\t<li class=\"icn_tags\"><a href=\"#\">Delete Player</a></li>

\t\t</ul>
                <h3>Match</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"#\">New Match</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Edit Match</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Delete Match</a></li>
                        <li class=\"icn_categories\"><a href=\"#\">Edit Shedule</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">view match</a></li>
\t\t</ul>
                 <h3>Stadium</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"#\">New Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Edit Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Delete Stadium</a></li>
                        
\t\t\t<li class=\"icn_tags\"><a href=\"#\">view match</a></li>
\t\t</ul>
                 <h3>Pronostics</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href=\"#\">New Pronostic</a></li>
\t\t\t
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Delete Pronostic</a></li>
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
                
                </ul>
\t\t<h3>Article</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_settings\"><a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("tft_ajout_article");
        echo "\">New Article</a></li>
\t\t\t<li class=\"icn_security\"><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("tft_listup_article");
        echo "\">Edit Article</a></li>
\t\t\t<li class=\"icn_jump_back\"><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("tft_listsup_article");
        echo "\">Delete Article</a></li>
                        <li class=\"icn_jump_back\"><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("tft_aff_article");
        echo "\">View Article</a></li>

                        
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
\t";
        // line 178
        $this->displayBlock('content', $context, $blocks);
        // line 179
        echo "\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t
</body>

</html>
";
    }

    // line 178
    public function block_content($context, array $blocks = array())
    {
        // line 179
        echo " ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Session:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 179,  262 => 178,  247 => 179,  245 => 178,  229 => 165,  225 => 164,  221 => 163,  217 => 162,  148 => 96,  144 => 95,  140 => 94,  136 => 93,  114 => 74,  107 => 70,  98 => 64,  94 => 63,  50 => 22,  46 => 21,  42 => 20,  38 => 19,  30 => 14,  20 => 6,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* */
/* <head>*/
/* 	<meta charset="utf-8"/>*/
/* 	<title>Admin</title>*/
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
/* 			<p>Sirine (<a href="{{asset('#')}}"></a>)</p>*/
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
/*                 */
/*                 <h3>Session</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="{{path('tft_personne_ajout')}}">New Session</a></li>*/
/* 			<li class="icn_edit_article"><a href="{{path('tft_personne_listup')}}">Edit Session</a></li>*/
/* 			<li class="icn_categories"><a href="{{path('tft_personne_listsup')}}">Delete Session</a></li>*/
/* 			<li class="icn_tags"><a href="{{path('tft_personne_aff')}}">view Session</a></li>*/
/* 		</ul>*/
/*                 */
/*                 <h3>Club</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="#">New Club</a></li>*/
/* 			<li class="icn_edit_article"><a href="#">Edit Club</a></li>*/
/* 			<li class="icn_categories"><a href="#">Delete Club</a></li>*/
/* 			<li class="icn_tags"><a href="#">Add Player</a></li>*/
/*                         			<li class="icn_tags"><a href="#">Delete Player</a></li>*/
/* */
/* 		</ul>*/
/*                 <h3>Match</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="#">New Match</a></li>*/
/* 			<li class="icn_categories"><a href="#">Edit Match</a></li>*/
/* 			<li class="icn_categories"><a href="#">Delete Match</a></li>*/
/*                         <li class="icn_categories"><a href="#">Edit Shedule</a></li>*/
/* 			<li class="icn_tags"><a href="#">view match</a></li>*/
/* 		</ul>*/
/*                  <h3>Stadium</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="#">New Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="#">Edit Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="#">Delete Stadium</a></li>*/
/*                         */
/* 			<li class="icn_tags"><a href="#">view match</a></li>*/
/* 		</ul>*/
/*                  <h3>Pronostics</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_new_article"><a href="#">New Pronostic</a></li>*/
/* 			*/
/* 			<li class="icn_categories"><a href="#">Delete Pronostic</a></li>*/
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
/*                 */
/*                 </ul>*/
/* 		<h3>Article</h3>*/
/* 		<ul class="toggle">*/
/* 			<li class="icn_settings"><a href="{{path('tft_ajout_article')}}">New Article</a></li>*/
/* 			<li class="icn_security"><a href="{{path('tft_listup_article')}}">Edit Article</a></li>*/
/* 			<li class="icn_jump_back"><a href="{{path('tft_listsup_article')}}">Delete Article</a></li>*/
/*                         <li class="icn_jump_back"><a href="{{path('tft_aff_article')}}">View Article</a></li>*/
/* */
/*                         */
/* 		</ul>*/
/* 		*/
/* 		<footer>*/
/* 			<hr />*/
/* 			<p><strong>Copyright &copy; 2011 Website Admin</strong></p>*/
/* 			<p>Theme by <a href="http://www.medialoot.com">MediaLoot</a></p>*/
/* 		</footer>*/
/* 	</aside><!-- end of sidebar -->*/
/* 	*/
/* 		*/
/* 	{% block content %}*/
/*  {% endblock %}	*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/* </body>*/
/* */
/* </html>*/
/* */
