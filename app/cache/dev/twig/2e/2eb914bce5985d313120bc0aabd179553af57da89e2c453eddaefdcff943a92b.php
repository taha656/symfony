<?php

/* TFTpersonneBundle:Resultat:afficheradminresultat.html.twig */
class __TwigTemplate_30a4a41a037a4945720b718c45f60181456145fde0f2550ae1b9491a6f7372c2 extends Twig_Template
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
        // line 1
        echo "




";
        // line 7
        echo "<!doctype html>

<html lang=\"en\">

<head>
    
    <meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />

        <meta name=\"author\" content=\"Corsini Alessio\" />
        <meta name=\"keywords\" content=\"Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,\tcharity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!--<link href=\"css/bootstrap.in.css\" rel=\"stylesheet\" type=\"text/css\" />-->

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>




        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

                <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!--Clients-->
                <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/own/owl.carousel.css "), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/own/owl.theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />


                <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

                <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/minislide/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_dir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link rel=\"shortcut icon\" type=\"image/png\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.ico"), "html", null, true);
        echo "\" />
                <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <link href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />




    
    
    
    
    
    
    
    
    
\t<meta charset=\"utf-8\"/>
\t<title>Dashboard I Admin Panel</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 71
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
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Website Admin</a></h1>
\t\t\t<h2 class=\"section_title\">Dashboard</h2><div class=\"btn_view_site\"><a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.medialoot.com"), "html", null, true);
        echo "\">View Site</a></div>
\t\t</hgroup>
\t</header> <!-- end of header bar -->
\t
\t<section id=\"secondary_bar\">
\t\t<div class=\"user\">
\t\t\t<p>John Doe (<a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">3 Messages</a>)</p>
\t\t\t<!-- <a class=\"logout_user\" href=\"#\" title=\"Logout\">Logout</a> -->
\t\t</div>
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<article class=\"breadcrumbs\"><a href=\"";
        // line 123
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
                        
                        <li class=\"icn_new_article\"><a href =\"\"target=\"_blank\">New Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"\"target=\"_blank\">Delete Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"\">Edit Stadium</a></li>
                        <li class=\"icn_categories\"><a href=\"\">extraire Stadium</a></li>
                        
                        
 \t\t\t
                       
                        <li class=\"icn_tags\"><a href=\"\"target=\"_blank\">view stade</a></li>
                </ul>
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
\t\t\t<li class=\"icn_new_article\"><a href =\"\"target=\"_blank\">New Pronostic</a></li>
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

        <section id=\"main\" class=\"column\">
\t\t
\t\t
\t\t
\t\t
                
                
                
                
                
                
                
                
            
   
                
                
                
                
                
\t\t<div class=\"clear\"></div>
\t\t
                
                
                
                
                
        <div class=\"general general-results\">
           <div class=\"top-score-title right-score col-md-9\">
                
               
                        ";
        // line 236
        $this->displayBlock('content2', $context, $blocks);
        // line 295
        echo " 
                        </div>
                    </div>
           </div><!--Close Top Match-->
        </div>
                        
                        
                        
                        
                        
                
                
                
                
                
                
                
                
                
                
                
                
\t\t
\t\t
\t\t<div class=\"spacer\"></div>
\t</section>

</body>

</html>


































          
          
          
          
        
         

";
    }

    // line 236
    public function block_content2($context, array $blocks = array())
    {
        // line 237
        echo "    
                          <ul class=\"tab-links-matches\">
                                
                                
                              
                                
                                <li><a href=\"#tab2222\">";
        // line 243
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</a></li>
                               
                                
                            </ul>

                           
                            
                            
                            
          
";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 254
            echo "<tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">


                            
                            


                            <div class=\"tab-content\">
                                <div id=\"tab1111\" class=\"tab active\">
                                   <table class=\"match-tbs\">
                                         <tr><td class=\"match-tbs-title\" colspan=\"7\">Manzah staduim</td></tr>
                                         <tr class=\"match-sets\"><td></td><td class=\"fpt\">Nationalité</td><td class=\"fpt\">Set 1</td><td class=\"fpt\">Set 2</td><td class=\"fpt\">Set 3</td></tr>

                                       
                                                                                

                                        
                
<tr><td class=\"fpt fpt2\">";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Idjoueur1", array()), "html", null, true);
            echo "</td><td class=\"fpt fpt2\">TUN</td><td class=\"fpt fpt2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "set1joueur1", array()), "html", null, true);
            echo "</td><td class=\"fpt fpt2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "set2joueur1", array()), "html", null, true);
            echo "</td><td class=\"fpt fpt2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "set3joueur1", array()), "html", null, true);
            echo "</td> <td class=\"fpt fpt2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_admin_resultat", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></td></tr>
<tr><td class=\"fpt fpt2\">";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "Idjoueur2", array()), "nom", array()), "html", null, true);
            echo "  </td><td class=\"fpt fpt2\">TUN</td><td class=\"fpt fpt2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "set1joueur2", array()), "html", null, true);
            echo "</td><td class=\"fpt fpt2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "set2joueur2", array()), "html", null, true);
            echo "</td> <td class=\"fpt fpt2\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "set3joueur2", array()), "html", null, true);
            echo "</td><td class=\"fpt fpt2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_admin_resultat", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td></tr>




               
           
                 
                       
                                        
                                        <tr><td class=\"match-more\" colspan=\"7\"><a href=\"match.html\" class=\"ca-more\"><i class=\"fa fa-angle-double-right\"></i>more</a></td></tr>
                                    </table>
                             
                                </div>
                           
                            </div>

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "
                


  ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Resultat:afficheradminresultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 291,  478 => 273,  466 => 272,  442 => 254,  425 => 253,  412 => 243,  404 => 237,  401 => 236,  326 => 295,  324 => 236,  208 => 123,  201 => 119,  192 => 113,  188 => 112,  144 => 71,  140 => 70,  136 => 69,  132 => 68,  124 => 63,  104 => 46,  100 => 45,  96 => 44,  92 => 43,  88 => 42,  84 => 41,  80 => 40,  75 => 38,  71 => 37,  65 => 34,  61 => 33,  56 => 31,  41 => 19,  27 => 7,  20 => 1,);
    }
}
/* */
/* */
/* */
/* */
/* */
/* {# empty Twig template #}*/
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* */
/* <head>*/
/*     */
/*     <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/*         <meta name="author" content="Corsini Alessio" />*/
/*         <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,	charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/* */
/*         <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!--<link href="css/bootstrap.in.css" rel="stylesheet" type="text/css" />-->*/
/* */
/*         <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/* */
/* */
/* */
/* */
/*         <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*         <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/*             <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>*/
/* */
/*                 <link href="{{asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <!--Clients-->*/
/*                 <link href="{{asset('css/own/owl.carousel.css ')}}" rel="stylesheet" type="text/css" />*/
/*                 <link href="{{asset('css/own/owl.theme.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*                 <link href="{{asset('css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <link href="{{asset('css/jquery.jscrollpane.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*                 <link href="{{asset('css/minislide/flexslider.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <link href="{{asset('css/component.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <link href="{{asset('css/style_dir.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <link rel="shortcut icon" type="image/png" href="{{asset('img/favicon.ico')}}" />*/
/*                 <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />*/
/*                 <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* */
/* */
/* */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
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
/*                         <li class="icn_new_article"><a href =""target="_blank">New Stadium</a></li>*/
/* 			<li class="icn_categories"><a href=""target="_blank">Delete Stadium</a></li>*/
/* 			<li class="icn_categories"><a href="">Edit Stadium</a></li>*/
/*                         <li class="icn_categories"><a href="">extraire Stadium</a></li>*/
/*                         */
/*                         */
/*  			*/
/*                        */
/*                         <li class="icn_tags"><a href=""target="_blank">view stade</a></li>*/
/*                 </ul>*/
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
/* 			<li class="icn_new_article"><a href =""target="_blank">New Pronostic</a></li>*/
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
/* */
/*         <section id="main" class="column">*/
/* 		*/
/* 		*/
/* 		*/
/* 		*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*             */
/*    */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/* 		<div class="clear"></div>*/
/* 		*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*         <div class="general general-results">*/
/*            <div class="top-score-title right-score col-md-9">*/
/*                 */
/*                */
/*                         {% block content2 %}*/
/*     */
/*                           <ul class="tab-links-matches">*/
/*                                 */
/*                                 */
/*                               */
/*                                 */
/*                                 <li><a href="#tab2222">{{ knp_pagination_render(pagination) }}</a></li>*/
/*                                */
/*                                 */
/*                             </ul>*/
/* */
/*                            */
/*                             */
/*                             */
/*                             */
/*           */
/* {% for m in pagination %}*/
/* <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/* */
/* */
/*                             */
/*                             */
/* */
/* */
/*                             <div class="tab-content">*/
/*                                 <div id="tab1111" class="tab active">*/
/*                                    <table class="match-tbs">*/
/*                                          <tr><td class="match-tbs-title" colspan="7">Manzah staduim</td></tr>*/
/*                                          <tr class="match-sets"><td></td><td class="fpt">Nationalité</td><td class="fpt">Set 1</td><td class="fpt">Set 2</td><td class="fpt">Set 3</td></tr>*/
/* */
/*                                        */
/*                                                                                 */
/* */
/*                                         */
/*                 */
/* <tr><td class="fpt fpt2">{{m.Idjoueur1}}</td><td class="fpt fpt2">TUN</td><td class="fpt fpt2">{{m.set1joueur1}}</td><td class="fpt fpt2">{{m.set2joueur1}}</td><td class="fpt fpt2">{{m.set3joueur1}}</td> <td class="fpt fpt2"><a href="{{path('supprimer_admin_resultat',{'id' : m.id})}}">supprimer</a></td></tr>*/
/* <tr><td class="fpt fpt2">{{m.Idjoueur2.nom}}  </td><td class="fpt fpt2">TUN</td><td class="fpt fpt2">{{m.set1joueur2}}</td><td class="fpt fpt2">{{m.set2joueur2}}</td> <td class="fpt fpt2">{{m.set3joueur2}}</td><td class="fpt fpt2"><a href="{{path('modifier_admin_resultat',{'id' : m.id})}}">Modifier</a></td></tr>*/
/* */
/* */
/* */
/* */
/*                */
/*            */
/*                  */
/*                        */
/*                                         */
/*                                         <tr><td class="match-more" colspan="7"><a href="match.html" class="ca-more"><i class="fa fa-angle-double-right"></i>more</a></td></tr>*/
/*                                     </table>*/
/*                              */
/*                                 </div>*/
/*                            */
/*                             </div>*/
/* */
/* {% endfor %}*/
/* */
/*                 */
/* */
/* */
/*   {% endblock %} */
/*                         </div>*/
/*                     </div>*/
/*            </div><!--Close Top Match-->*/
/*         </div>*/
/*                         */
/*                         */
/*                         */
/*                         */
/*                         */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/* 		*/
/* 		*/
/* 		<div class="spacer"></div>*/
/* 	</section>*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*           */
/*           */
/*           */
/*           */
/*         */
/*          */
/* */
/* */
