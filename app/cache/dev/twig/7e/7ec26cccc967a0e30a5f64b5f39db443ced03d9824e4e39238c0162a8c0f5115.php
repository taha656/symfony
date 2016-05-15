<?php

/* TFTpersonneBundle::adminIndex2.html.twig */
class __TwigTemplate_924144e903548c94ffb72bf35dda7c8114f0a1eba05d2e0c896b24e816420cbc extends Twig_Template
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

<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\"/>
\t<title>Dashboard I Admin Panel</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 18
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Website Admin</a></h1>
\t\t\t<h2 class=\"section_title\">Dashboard</h2><div class=\"btn_view_site\"><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.medialoot.com"), "html", null, true);
        echo "\">View Site</a></div>
\t\t</hgroup>
\t</header> <!-- end of header bar -->
\t
\t<section id=\"secondary_bar\">
\t\t<div class=\"user\">
\t\t\t<p>John Doe (<a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">3 Messages</a>)</p>
\t\t\t<!-- <a class=\"logout_user\" href=\"#\" title=\"Logout\">Logout</a> -->
\t\t</div>
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<article class=\"breadcrumbs\"><a href=\"";
        // line 70
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
                <h3>Stadium</h3>
\t\t<ul class=\"toggle\">
\t\t\t
                        
                        <li class=\"icn_new_article\"><a href =\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("ajout_admin_stade");
        echo "\"target=\"_blank\">New Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\"target=\"_blank\">Delete Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\">Edit Stadium</a></li>
                        <li class=\"icn_categories\"><a href=\"";
        // line 93
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\">afficher stade</a></li>
                       
 \t\t\t
                       
                        <li class=\"icn_tags\"><a href=\"";
        // line 97
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\"target=\"_blank\">view stade</a></li>
\t\t</ul
                 <h3>Match</h3>
                 <li class=\"icn_new_article\"><a href=\"#\">New Match</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Edit Match</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"#\">Delete Match</a></li>
                        <li class=\"icn_categories\"><a href=\"#\">Edit Shedule</a></li>
\t\t\t<li class=\"icn_tags\"><a href=\"#\">view match</a></li>
\t\t<ul class=\"toggle\">
\t\t\t
                        
\t\t</ul>
                 <h3>Pronostics</h3>
\t\t<ul class=\"toggle\">
\t\t\t<li class=\"icn_new_article\"><a href =\"";
        // line 111
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
\t ";
        // line 150
        $this->displayBlock('content2', $context, $blocks);
        // line 364
        echo "
</body>

</html>
";
    }

    // line 150
    public function block_content2($context, array $blocks = array())
    {
        // line 151
        echo "\t<section id=\"main\" class=\"column\">
\t\t
\t\t
\t\t
\t\t<article class=\"module width_full\">
\t\t\t<header><h3>Stats</h3></header>
\t\t\t<div class=\"module_content\">
\t\t\t\t<article class=\"stats_graph\">
\t\t\t\t\t<img src=\"http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30\" width=\"520\" height=\"140\" alt=\"\" />
\t\t\t\t</article>
\t\t\t\t
\t\t\t\t<article class=\"stats_overview\">
\t\t\t\t\t<div class=\"overview_today\">
\t\t\t\t\t\t<p class=\"overview_day\">Today</p>
\t\t\t\t\t\t<p class=\"overview_count\">1,876</p>
\t\t\t\t\t\t<p class=\"overview_type\">Hits</p>
\t\t\t\t\t\t<p class=\"overview_count\">2,103</p>
\t\t\t\t\t\t<p class=\"overview_type\">Views</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"overview_previous\">
\t\t\t\t\t\t<p class=\"overview_day\">Yesterday</p>
\t\t\t\t\t\t<p class=\"overview_count\">1,646</p>
\t\t\t\t\t\t<p class=\"overview_type\">Hits</p>
\t\t\t\t\t\t<p class=\"overview_count\">2,054</p>
\t\t\t\t\t\t<p class=\"overview_type\">Views</p>
\t\t\t\t\t</div>
\t\t\t\t</article>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t</div>
\t\t</article><!-- end of stats article -->
\t\t
\t\t<article class=\"module width_3_quarter\">
\t\t<header><h3 class=\"tabs_involved\">Content Manager</h3>
\t\t<ul class=\"tabs\">
   \t\t\t<li><a href=\"#tab1\">Posts</a></li>
    \t\t<li><a href=\"#tab2\">Comments</a></li>
\t\t</ul>
\t\t</header>

\t\t<div class=\"tab_container\">
\t\t\t<div id=\"tab1\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
\t\t\t\t<tr> 
   \t\t\t\t\t<th></th> 
    \t\t\t\t<th>Entry Name</th> 
    \t\t\t\t<th>Category</th>   
    \t\t\t\t<th>Created On</th> 
    \t\t\t\t<th>Actions</th> 
\t\t\t\t</tr> 
\t\t\t</thead> 
\t\t\t<tbody> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Lorem Ipsum Dolor Sit Amet</td> 
    \t\t\t\t<td>Articles</td> 
    \t\t\t\t<td>5th April 2011</td> 
    \t\t\t\t<td><input type=\"image\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Ipsum Lorem Dolor Sit Amet</td> 
    \t\t\t\t<td>Freebies</td> 
    \t\t\t\t<td>6th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr>
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Sit Amet Dolor Ipsum</td> 
    \t\t\t\t<td>Tutorials</td> 
    \t\t\t\t<td>10th April 2011</td> 
    \t\t\t\t<td><input type=\"image\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Dolor Lorem Amet</td> 
    \t\t\t\t<td>Articles</td> 
    \t\t\t\t<td>16th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr>
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Dolor Lorem Amet</td> 
    \t\t\t\t<td>Articles</td> 
    \t\t\t\t<td>16th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr>  
\t\t\t</tbody> 
\t\t\t</table>
\t\t\t</div><!-- end of #tab1 -->
\t\t\t
\t\t\t<div id=\"tab2\" class=\"tab_content\">
\t\t\t<table class=\"tablesorter\" cellspacing=\"0\"> 
\t\t\t<thead> 
\t\t\t\t<tr> 
   \t\t\t\t\t<th></th> 
    \t\t\t\t<th>Comment</th> 
    \t\t\t\t<th>Posted by</th> 
    \t\t\t\t<th>Posted On</th> 
    \t\t\t\t<th>Actions</th> 
\t\t\t\t</tr> 
\t\t\t</thead> 
\t\t\t<tbody> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Lorem Ipsum Dolor Sit Amet</td> 
    \t\t\t\t<td>Mark Corrigan</td> 
    \t\t\t\t<td>5th April 2011</td> 
    \t\t\t\t<td><input type=\"image\" src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Ipsum Lorem Dolor Sit Amet</td> 
    \t\t\t\t<td>Jeremy Usbourne</td> 
    \t\t\t\t<td>6th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr>
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Sit Amet Dolor Ipsum</td> 
    \t\t\t\t<td>Super Hans</td> 
    \t\t\t\t<td>10th April 2011</td> 
    \t\t\t\t<td><input type=\"image\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Dolor Lorem Amet</td> 
    \t\t\t\t<td>Alan Johnson</td> 
    \t\t\t\t<td>16th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t\t<tr> 
   \t\t\t\t\t<td><input type=\"checkbox\"></td> 
    \t\t\t\t<td>Dolor Lorem Amet</td> 
    \t\t\t\t<td>Dobby</td> 
    \t\t\t\t<td>16th April 2011</td> 
   \t\t\t\t \t<td><input type=\"image\" src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_edit.png"), "html", null, true);
        echo "\" title=\"Edit\"><input type=\"image\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/icn_trash.png"), "html", null, true);
        echo "\" title=\"Trash\"></td> 
\t\t\t\t</tr> 
\t\t\t</tbody> 
\t\t\t</table>

\t\t\t</div><!-- end of #tab2 -->
\t\t\t
\t\t</div><!-- end of .tab_container -->
\t\t
\t\t</article><!-- end of content manager article -->
\t\t
\t\t<article class=\"module width_quarter\">
\t\t\t<header><h3>Messages</h3></header>
\t\t\t<div class=\"message_list\">
\t\t\t\t<div class=\"module_content\">
\t\t\t\t\t<div class=\"message\"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
\t\t\t\t\t<p><strong>John Doe</strong></p></div>
\t\t\t\t\t<div class=\"message\"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
\t\t\t\t\t<p><strong>John Doe</strong></p></div>
\t\t\t\t\t<div class=\"message\"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
\t\t\t\t\t<p><strong>John Doe</strong></p></div>
\t\t\t\t\t<div class=\"message\"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
\t\t\t\t\t<p><strong>John Doe</strong></p></div>
\t\t\t\t\t<div class=\"message\"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
\t\t\t\t\t<p><strong>John Doe</strong></p></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<form class=\"post_message\">
\t\t\t\t\t<input type=\"text\" value=\"Message\" onfocus=\"if(!this._haschanged){this.value=''};this._haschanged=true;\">
\t\t\t\t\t<input type=\"submit\" class=\"btn_post_message\" value=\"\"/>
\t\t\t\t</form>
\t\t\t</footer>
\t\t</article><!-- end of messages article -->
\t\t
\t\t<div class=\"clear\"></div>
\t\t
\t\t<article class=\"module width_full\">
\t\t\t<header><h3>Post New Article</h3></header>
\t\t\t\t<div class=\"module_content\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<label>Post Title</label>
\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t<label>Content</label>
\t\t\t\t\t\t\t<textarea rows=\"12\"></textarea>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset style=\"width:48%; float:left; margin-right: 3%;\"> <!-- to make two field float next to one another, adjust values accordingly -->
\t\t\t\t\t\t\t<label>Category</label>
\t\t\t\t\t\t\t<select style=\"width:92%;\">
\t\t\t\t\t\t\t\t<option>Articles</option>
\t\t\t\t\t\t\t\t<option>Tutorials</option>
\t\t\t\t\t\t\t\t<option>Freebies</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t<fieldset style=\"width:48%; float:left;\"> <!-- to make two field float next to one another, adjust values accordingly -->
\t\t\t\t\t\t\t<label>Tags</label>
\t\t\t\t\t\t\t<input type=\"text\" style=\"width:92%;\">
\t\t\t\t\t\t</fieldset><div class=\"clear\"></div>
\t\t\t\t</div>
\t\t\t<footer>
\t\t\t\t<div class=\"submit_link\">
\t\t\t\t\t<select>
\t\t\t\t\t\t<option>Draft</option>
\t\t\t\t\t\t<option>Published</option>
\t\t\t\t\t</select>
\t\t\t\t\t<input type=\"submit\" value=\"Publish\" class=\"alt_btn\">
\t\t\t\t\t<input type=\"submit\" value=\"Reset\">
\t\t\t\t</div>
\t\t\t</footer>
\t\t</article><!-- end of post new article -->
\t\t
\t\t
\t\t<div class=\"spacer\"></div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle::adminIndex2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 287,  399 => 280,  387 => 273,  375 => 266,  363 => 259,  335 => 236,  323 => 229,  311 => 222,  299 => 215,  287 => 208,  228 => 151,  225 => 150,  217 => 364,  215 => 150,  173 => 111,  156 => 97,  149 => 93,  145 => 92,  141 => 91,  137 => 90,  114 => 70,  107 => 66,  98 => 60,  94 => 59,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  30 => 10,  20 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* */
/* <head>*/
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
/*                 <h3>Stadium</h3>*/
/* 		<ul class="toggle">*/
/* 			*/
/*                         */
/*                         <li class="icn_new_article"><a href ="{{path('ajout_admin_stade')}}"target="_blank">New Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="{{path('affich_admin_stade')}}"target="_blank">Delete Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="{{path('affich_admin_stade')}}">Edit Stadium</a></li>*/
/*                         <li class="icn_categories"><a href="{{path('affich_admin_stade')}}">afficher stade</a></li>*/
/*                        */
/*  			*/
/*                        */
/*                         <li class="icn_tags"><a href="{{path('affich_admin_stade')}}"target="_blank">view stade</a></li>*/
/* 		</ul*/
/*                  <h3>Match</h3>*/
/*                  <li class="icn_new_article"><a href="#">New Match</a></li>*/
/* 			<li class="icn_categories"><a href="#">Edit Match</a></li>*/
/* 			<li class="icn_categories"><a href="#">Delete Match</a></li>*/
/*                         <li class="icn_categories"><a href="#">Edit Shedule</a></li>*/
/* 			<li class="icn_tags"><a href="#">view match</a></li>*/
/* 		<ul class="toggle">*/
/* 			*/
/*                         */
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
/* 	 {% block content2 %}*/
/* 	<section id="main" class="column">*/
/* 		*/
/* 		*/
/* 		*/
/* 		<article class="module width_full">*/
/* 			<header><h3>Stats</h3></header>*/
/* 			<div class="module_content">*/
/* 				<article class="stats_graph">*/
/* 					<img src="http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30" width="520" height="140" alt="" />*/
/* 				</article>*/
/* 				*/
/* 				<article class="stats_overview">*/
/* 					<div class="overview_today">*/
/* 						<p class="overview_day">Today</p>*/
/* 						<p class="overview_count">1,876</p>*/
/* 						<p class="overview_type">Hits</p>*/
/* 						<p class="overview_count">2,103</p>*/
/* 						<p class="overview_type">Views</p>*/
/* 					</div>*/
/* 					<div class="overview_previous">*/
/* 						<p class="overview_day">Yesterday</p>*/
/* 						<p class="overview_count">1,646</p>*/
/* 						<p class="overview_type">Hits</p>*/
/* 						<p class="overview_count">2,054</p>*/
/* 						<p class="overview_type">Views</p>*/
/* 					</div>*/
/* 				</article>*/
/* 				<div class="clear"></div>*/
/* 			</div>*/
/* 		</article><!-- end of stats article -->*/
/* 		*/
/* 		<article class="module width_3_quarter">*/
/* 		<header><h3 class="tabs_involved">Content Manager</h3>*/
/* 		<ul class="tabs">*/
/*    			<li><a href="#tab1">Posts</a></li>*/
/*     		<li><a href="#tab2">Comments</a></li>*/
/* 		</ul>*/
/* 		</header>*/
/* */
/* 		<div class="tab_container">*/
/* 			<div id="tab1" class="tab_content">*/
/* 			<table class="tablesorter" cellspacing="0"> */
/* 			<thead> */
/* 				<tr> */
/*    					<th></th> */
/*     				<th>Entry Name</th> */
/*     				<th>Category</th>   */
/*     				<th>Created On</th> */
/*     				<th>Actions</th> */
/* 				</tr> */
/* 			</thead> */
/* 			<tbody> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Lorem Ipsum Dolor Sit Amet</td> */
/*     				<td>Articles</td> */
/*     				<td>5th April 2011</td> */
/*     				<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Ipsum Lorem Dolor Sit Amet</td> */
/*     				<td>Freebies</td> */
/*     				<td>6th April 2011</td> */
/*    				 	<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr>*/
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Sit Amet Dolor Ipsum</td> */
/*     				<td>Tutorials</td> */
/*     				<td>10th April 2011</td> */
/*     				<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Dolor Lorem Amet</td> */
/*     				<td>Articles</td> */
/*     				<td>16th April 2011</td> */
/*    				 	<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr>*/
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Dolor Lorem Amet</td> */
/*     				<td>Articles</td> */
/*     				<td>16th April 2011</td> */
/*    				 	<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr>  */
/* 			</tbody> */
/* 			</table>*/
/* 			</div><!-- end of #tab1 -->*/
/* 			*/
/* 			<div id="tab2" class="tab_content">*/
/* 			<table class="tablesorter" cellspacing="0"> */
/* 			<thead> */
/* 				<tr> */
/*    					<th></th> */
/*     				<th>Comment</th> */
/*     				<th>Posted by</th> */
/*     				<th>Posted On</th> */
/*     				<th>Actions</th> */
/* 				</tr> */
/* 			</thead> */
/* 			<tbody> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Lorem Ipsum Dolor Sit Amet</td> */
/*     				<td>Mark Corrigan</td> */
/*     				<td>5th April 2011</td> */
/*     				<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Ipsum Lorem Dolor Sit Amet</td> */
/*     				<td>Jeremy Usbourne</td> */
/*     				<td>6th April 2011</td> */
/*    				 	<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr>*/
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Sit Amet Dolor Ipsum</td> */
/*     				<td>Super Hans</td> */
/*     				<td>10th April 2011</td> */
/*     				<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Dolor Lorem Amet</td> */
/*     				<td>Alan Johnson</td> */
/*     				<td>16th April 2011</td> */
/*    				 	<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr> */
/* 				<tr> */
/*    					<td><input type="checkbox"></td> */
/*     				<td>Dolor Lorem Amet</td> */
/*     				<td>Dobby</td> */
/*     				<td>16th April 2011</td> */
/*    				 	<td><input type="image" src="{{asset('images/icn_edit.png')}}" title="Edit"><input type="image" src="{{asset('images/icn_trash.png')}}" title="Trash"></td> */
/* 				</tr> */
/* 			</tbody> */
/* 			</table>*/
/* */
/* 			</div><!-- end of #tab2 -->*/
/* 			*/
/* 		</div><!-- end of .tab_container -->*/
/* 		*/
/* 		</article><!-- end of content manager article -->*/
/* 		*/
/* 		<article class="module width_quarter">*/
/* 			<header><h3>Messages</h3></header>*/
/* 			<div class="message_list">*/
/* 				<div class="module_content">*/
/* 					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>*/
/* 					<p><strong>John Doe</strong></p></div>*/
/* 					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>*/
/* 					<p><strong>John Doe</strong></p></div>*/
/* 					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>*/
/* 					<p><strong>John Doe</strong></p></div>*/
/* 					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>*/
/* 					<p><strong>John Doe</strong></p></div>*/
/* 					<div class="message"><p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>*/
/* 					<p><strong>John Doe</strong></p></div>*/
/* 				</div>*/
/* 			</div>*/
/* 			<footer>*/
/* 				<form class="post_message">*/
/* 					<input type="text" value="Message" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">*/
/* 					<input type="submit" class="btn_post_message" value=""/>*/
/* 				</form>*/
/* 			</footer>*/
/* 		</article><!-- end of messages article -->*/
/* 		*/
/* 		<div class="clear"></div>*/
/* 		*/
/* 		<article class="module width_full">*/
/* 			<header><h3>Post New Article</h3></header>*/
/* 				<div class="module_content">*/
/* 						<fieldset>*/
/* 							<label>Post Title</label>*/
/* 							<input type="text">*/
/* 						</fieldset>*/
/* 						<fieldset>*/
/* 							<label>Content</label>*/
/* 							<textarea rows="12"></textarea>*/
/* 						</fieldset>*/
/* 						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->*/
/* 							<label>Category</label>*/
/* 							<select style="width:92%;">*/
/* 								<option>Articles</option>*/
/* 								<option>Tutorials</option>*/
/* 								<option>Freebies</option>*/
/* 							</select>*/
/* 						</fieldset>*/
/* 						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->*/
/* 							<label>Tags</label>*/
/* 							<input type="text" style="width:92%;">*/
/* 						</fieldset><div class="clear"></div>*/
/* 				</div>*/
/* 			<footer>*/
/* 				<div class="submit_link">*/
/* 					<select>*/
/* 						<option>Draft</option>*/
/* 						<option>Published</option>*/
/* 					</select>*/
/* 					<input type="submit" value="Publish" class="alt_btn">*/
/* 					<input type="submit" value="Reset">*/
/* 				</div>*/
/* 			</footer>*/
/* 		</article><!-- end of post new article -->*/
/* 		*/
/* 		*/
/* 		<div class="spacer"></div>*/
/* 	</section>*/
/* {%endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
