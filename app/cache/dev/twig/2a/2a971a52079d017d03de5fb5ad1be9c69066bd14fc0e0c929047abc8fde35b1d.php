<?php

/* TFTpersonneBundle:Article:ajouter.html.twig */
class __TwigTemplate_677cbe0cad20c0865c83b5acb559af674ddce973ce9b5b2eec871b849619946e extends Twig_Template
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

    <style>
                             .bar
            {
width:92%;
border:1px solid #ddd;background-color:#f9f9f9;height:40px;padding:0 10px;width:80%;font-size:12px;margin-bottom:20px;color:#333;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}#category,textarea.txt-area{margin-bottom:20px;color:#333;font-size:12px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}#category{border:1px solid #ddd;background-color:#fff;height:40px;padding:0 10px;width:80%;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}textarea.txt-area{border:1px solid #ddd;background-color:#f9f9f9;width:100%;height:150px;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}textarea.txt-link{padding:10px;margin-left:15px;width:98%;height:80px}#contact_form input[type=submit],.login-form input[type=submit],.register-form input[type=submit]{border:1px solid #e78315;background-color:#f59123;padding:15px 45px;font-size:13px;text-transform:uppercase;color:#fff;margin-bottom:40px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;transition:all .5s ease-in-out;cursor:pointer}#contact_form input[type=submit]:hover,.login-form input[type=submit]:hover,.register-form input[type=submit]:hover{color:#fff;background-color:#fcb86e}.website-info{margin-bottom:40px}.website-info p{color:#484848;margin-left:15px}.website-info p strong{text-transform:uppercase}.affiliate{width:100%;float:left;margin:30px 0 20px 15px}#contact_form .error,#contact_form .success{display:none;font-size:13px;color:#333}#footer-tag{background-color:rgba(0,0,0,.95)}#footer-tag .col-md-12{padding:0 20px 80px;overflow:hidden}.footer-map{background-image:url(../images/footer_map.png);background-repeat:no-repeat;width:100%;height:340px;position:absolute;z-index:0;background-position:40% 150px}.logo_footer{float:left}#footer-tag h3.last-cat{margin-bottom:10px}#footer-tag h3{font-family:'Open sans',sans-serif;font-size:18px;text-transform:uppercase;color:#fff;margin-bottom:20px;font-weight:800}#footer-tag p{font-weight:400;font-family:'Open sans',Sans-Serif;font-size:13px;line-height:20px;color:#b5b5b5}#footer-tag .last-tips{z-index:9999;position:relative}#footer-tag .social{text-align:center;margin:30px auto 0}#footer-tag .social li{display:inline-block;padding:5px}#footer-tag .social li a i{color:#ddd}ul.last-tips li,ul.last-tips li a{line-height:32px;color:#b5b5b5;font-family:'Open sans',Sans-Serif}#footer-tag .social li a{background:#000;padding:10px 17px;border:0 solid #111;border-radius:100%}#footer-tag .social li:nth-child(2) a,#footer-tag .social li:nth-child(3) a,#footer-tag .social li:nth-child(5) a{padding:10px 15px}#footer-tag .social li:nth-child(4) a{padding:10px 13px}#footer-tag .social li:nth-child(6) a{padding:10px 15px}#footer-tag .social .top-social{padding:0 5px 0 0}ul.last-tips li{border-bottom:1px solid #333;font-weight:300;font-size:14px}ul.last-tips li a{font-weight:400;font-size:13px;text-decoration:none}ul.last-tips li a:hover{color:#f57366;cursor:pointer}#footer-tag ul.social li a:hover{background:#f59123}.content-footer{background-color:#000;color:#fff;text-align:center;font-size:11px;padding:20px 0}.content-footer p{margin:0}.footer-last-news li img{float:left;width:30%;margin-right:10px}.footer-last-news li{margin-bottom:20px;margin-top:5px}.footer-newsletters input[type=submit]{border:1px solid #e78315;background-color:#f59123;padding:10px 45px;font-size:13px;font-weight:400;width:90%;text-transform:uppercase;color:#fff;margin-bottom:40px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;transition:all .5s ease-in-out;cursor:pointer}.footer-newsletters label{color:#ccc;font-weight:400;padding:3px;font-size:13px}.footer-newsletters input#email,.footer-newsletters input[type=text]{border:1px solid #333;background-color:#000;height:40px;padding:0 10px;width:90%;font-size:12px;margin-bottom:20px;color:#ccc;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}#toTop,#toTopHover{width:51px;height:51px;overflow:hidden}.footer-newsletters input[type=submit]:hover{color:#fff;background-color:#fcb86e}#toTop{display:none;text-decoration:none;position:fixed;bottom:10px;right:10px;border:none;text-indent:100%;z-index:9999;background:url(../img/ui.totop.png) left top no-repeat}#toTopHover,.clearfix{display:block}#toTopHover{background:url(../img/ui.totop.png) left -51px no-repeat;float:left;opacity:0;-moz-opacity:0}#slide-contentfull{padding:0 1px;background:#000}#slide0 .slide-contentfull{margin-bottom:0}.fullwidthbanner-container{width:100%!important;position:relative;padding:0;max-height:750px!important;overflow:hidden;margin-top:0}#slider-top .big-countdown{margin-top:10px}#slider-top .big-countdown h3{margin-top:20px;font-size:20px;margin-bottom:40px}#slider-top .kkcountdown-1 .kkcountdown-box .kkc-days-text,#slider-top .kkcountdown-1 .kkcountdown-box .kkc-hours-text,#slider-top .kkcountdown-1 .kkcountdown-box .kkc-min-text,#slider-top .kkcountdown-1 .kkcountdown-box .kkc-sec-text{font-size:14px;font-family:'Open sans',Sans-Serif;text-transform:uppercase;background:rgba(255,255,255,0);padding:0;margin:0}#slider-top .kkcountdown-1 div{font-size:38px;font-weight:400}#slider-top .kkcountdown-1 .kkcountdown-box div{background:rgba(255,255,255,.2);padding:30px 0;width:24%;float:left;margin-right:5px}#slider-top .kkcountdown-box{background:rgba(255,255,255,0);padding:0}
                
                
                
                
                
             .dat
             {
           color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 30px; margin: 0;
             }
             

             .button{
                 
                 border:1px solid #e78315;background-color:#f59123;padding:15px 45px;font-size:13px;text-transform:uppercase;color:#fff;margin-bottom:40px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;transition:all .5s ease-in-out;cursor:pointer
             }

        </style>
    
    
<head>
\t<meta charset=\"utf-8\"/>
\t<title>Dashboard I Admin Panel</title>
\t
\t<link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t<!--[if lt IE 9]>
\t<link rel=\"stylesheet\" href=\"css/ie.css\" type=\"text/css\" media=\"screen\" />
\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t<script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.5.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hideshow.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.tablesorter.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 42
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">Website Admin</a></h1>
\t\t\t<h2 class=\"section_title\">Dashboard</h2><div class=\"btn_view_site\"><a href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://www.medialoot.com"), "html", null, true);
        echo "\">View Site</a></div>
\t\t</hgroup>
\t</header> <!-- end of header bar -->
\t
\t<section id=\"secondary_bar\">
\t\t<div class=\"user\">
\t\t\t<p>John Doe (<a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo "\">3 Messages</a>)</p>
\t\t\t<!-- <a class=\"logout_user\" href=\"#\" title=\"Logout\">Logout</a> -->
\t\t</div>
\t\t<div class=\"breadcrumbs_container\">
\t\t\t<article class=\"breadcrumbs\"><a href=\"";
        // line 94
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
        // line 114
        echo $this->env->getExtension('routing')->getPath("ajout_admin_stade");
        echo "\"target=\"_blank\">New Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\"target=\"_blank\">Delete Stadium</a></li>
\t\t\t<li class=\"icn_categories\"><a href=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\">Edit Stadium</a></li>
                        <li class=\"icn_categories\"><a href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("rediriger_admin_stade");
        echo "\">extraire Stadium</a></li>
                        
                        
                     ";
        // line 122
        echo " \t\t\t
                       
                        <li class=\"icn_tags\"><a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("affich_admin_stade");
        echo "\"target=\"_blank\">view stade</a></li>
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
\t\t\t<li class=\"icn_new_article\"><a href =\"";
        // line 138
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
        // line 177
        $this->displayBlock('content2', $context, $blocks);
        // line 225
        echo "
</body>

</html>";
    }

    // line 177
    public function block_content2($context, array $blocks = array())
    {
        // line 178
        echo "\t<section id=\"main\" class=\"column\">
\t\t
\t\t
\t\t
\t\t
\t\t
\t\t                        <form method='POST'>

\t\t<article class=\"module width_full\">
\t\t\t<header><h3>Post New Article</h3></header>

\t\t\t\t<div class=\"module_content\">

\t\t\t\t\t\t<fieldset style=\"width:48%; float:left; margin-right: 3%;\"> <!-- to make two field float next to one another, adjust values accordingly -->
\t\t\t\t\t\t\t<label>Le sujet </label>
                                                        ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "sujet", array()), 'widget', array("attr" => array("class" => "bar")));
        echo "

                                                        
\t\t\t\t\t\t</fieldset>
                                                        
                                                        
\t\t\t\t\t\t<fieldset style=\"width:48%; float:left;\"> <!-- to make two field float next to one another, adjust values accordingly -->
\t\t\t\t\t\t\t<label>Le nom du joueur 2</label>
                                                                                                        ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget', array("attr" => array("class" => "bar")));
        echo "

                                                </fieldset>
                                                   

\t\t\t\t</div>


\t\t\t<footer>
\t\t\t\t<div class=\"submit_link\">
                    ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "Ajouter", array()), 'widget', array("attr" => array("class" => "button")));
        echo "                                          </fieldset>
";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "


\t\t\t\t</div>
                    
\t\t\t</footer>
\t\t</article><!-- end of post new article -->
\t\t                  </form>

\t\t
\t\t<div class=\"spacer\"></div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Article:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 212,  295 => 211,  282 => 201,  271 => 193,  254 => 178,  251 => 177,  244 => 225,  242 => 177,  200 => 138,  183 => 124,  179 => 122,  173 => 117,  169 => 116,  165 => 115,  161 => 114,  138 => 94,  131 => 90,  122 => 84,  118 => 83,  74 => 42,  70 => 41,  66 => 40,  62 => 39,  54 => 34,  20 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* */
/*     <style>*/
/*                              .bar*/
/*             {*/
/* width:92%;*/
/* border:1px solid #ddd;background-color:#f9f9f9;height:40px;padding:0 10px;width:80%;font-size:12px;margin-bottom:20px;color:#333;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}#category,textarea.txt-area{margin-bottom:20px;color:#333;font-size:12px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}#category{border:1px solid #ddd;background-color:#fff;height:40px;padding:0 10px;width:80%;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}textarea.txt-area{border:1px solid #ddd;background-color:#f9f9f9;width:100%;height:150px;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}textarea.txt-link{padding:10px;margin-left:15px;width:98%;height:80px}#contact_form input[type=submit],.login-form input[type=submit],.register-form input[type=submit]{border:1px solid #e78315;background-color:#f59123;padding:15px 45px;font-size:13px;text-transform:uppercase;color:#fff;margin-bottom:40px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;transition:all .5s ease-in-out;cursor:pointer}#contact_form input[type=submit]:hover,.login-form input[type=submit]:hover,.register-form input[type=submit]:hover{color:#fff;background-color:#fcb86e}.website-info{margin-bottom:40px}.website-info p{color:#484848;margin-left:15px}.website-info p strong{text-transform:uppercase}.affiliate{width:100%;float:left;margin:30px 0 20px 15px}#contact_form .error,#contact_form .success{display:none;font-size:13px;color:#333}#footer-tag{background-color:rgba(0,0,0,.95)}#footer-tag .col-md-12{padding:0 20px 80px;overflow:hidden}.footer-map{background-image:url(../images/footer_map.png);background-repeat:no-repeat;width:100%;height:340px;position:absolute;z-index:0;background-position:40% 150px}.logo_footer{float:left}#footer-tag h3.last-cat{margin-bottom:10px}#footer-tag h3{font-family:'Open sans',sans-serif;font-size:18px;text-transform:uppercase;color:#fff;margin-bottom:20px;font-weight:800}#footer-tag p{font-weight:400;font-family:'Open sans',Sans-Serif;font-size:13px;line-height:20px;color:#b5b5b5}#footer-tag .last-tips{z-index:9999;position:relative}#footer-tag .social{text-align:center;margin:30px auto 0}#footer-tag .social li{display:inline-block;padding:5px}#footer-tag .social li a i{color:#ddd}ul.last-tips li,ul.last-tips li a{line-height:32px;color:#b5b5b5;font-family:'Open sans',Sans-Serif}#footer-tag .social li a{background:#000;padding:10px 17px;border:0 solid #111;border-radius:100%}#footer-tag .social li:nth-child(2) a,#footer-tag .social li:nth-child(3) a,#footer-tag .social li:nth-child(5) a{padding:10px 15px}#footer-tag .social li:nth-child(4) a{padding:10px 13px}#footer-tag .social li:nth-child(6) a{padding:10px 15px}#footer-tag .social .top-social{padding:0 5px 0 0}ul.last-tips li{border-bottom:1px solid #333;font-weight:300;font-size:14px}ul.last-tips li a{font-weight:400;font-size:13px;text-decoration:none}ul.last-tips li a:hover{color:#f57366;cursor:pointer}#footer-tag ul.social li a:hover{background:#f59123}.content-footer{background-color:#000;color:#fff;text-align:center;font-size:11px;padding:20px 0}.content-footer p{margin:0}.footer-last-news li img{float:left;width:30%;margin-right:10px}.footer-last-news li{margin-bottom:20px;margin-top:5px}.footer-newsletters input[type=submit]{border:1px solid #e78315;background-color:#f59123;padding:10px 45px;font-size:13px;font-weight:400;width:90%;text-transform:uppercase;color:#fff;margin-bottom:40px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;transition:all .5s ease-in-out;cursor:pointer}.footer-newsletters label{color:#ccc;font-weight:400;padding:3px;font-size:13px}.footer-newsletters input#email,.footer-newsletters input[type=text]{border:1px solid #333;background-color:#000;height:40px;padding:0 10px;width:90%;font-size:12px;margin-bottom:20px;color:#ccc;-webkit-border-radius:1px;-moz-border-radius:1px;border-radius:1px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}#toTop,#toTopHover{width:51px;height:51px;overflow:hidden}.footer-newsletters input[type=submit]:hover{color:#fff;background-color:#fcb86e}#toTop{display:none;text-decoration:none;position:fixed;bottom:10px;right:10px;border:none;text-indent:100%;z-index:9999;background:url(../img/ui.totop.png) left top no-repeat}#toTopHover,.clearfix{display:block}#toTopHover{background:url(../img/ui.totop.png) left -51px no-repeat;float:left;opacity:0;-moz-opacity:0}#slide-contentfull{padding:0 1px;background:#000}#slide0 .slide-contentfull{margin-bottom:0}.fullwidthbanner-container{width:100%!important;position:relative;padding:0;max-height:750px!important;overflow:hidden;margin-top:0}#slider-top .big-countdown{margin-top:10px}#slider-top .big-countdown h3{margin-top:20px;font-size:20px;margin-bottom:40px}#slider-top .kkcountdown-1 .kkcountdown-box .kkc-days-text,#slider-top .kkcountdown-1 .kkcountdown-box .kkc-hours-text,#slider-top .kkcountdown-1 .kkcountdown-box .kkc-min-text,#slider-top .kkcountdown-1 .kkcountdown-box .kkc-sec-text{font-size:14px;font-family:'Open sans',Sans-Serif;text-transform:uppercase;background:rgba(255,255,255,0);padding:0;margin:0}#slider-top .kkcountdown-1 div{font-size:38px;font-weight:400}#slider-top .kkcountdown-1 .kkcountdown-box div{background:rgba(255,255,255,.2);padding:30px 0;width:24%;float:left;margin-right:5px}#slider-top .kkcountdown-box{background:rgba(255,255,255,0);padding:0}*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*              .dat*/
/*              {*/
/*            color: #7c795d; font-family: 'Trocchi', serif; font-size: 30px; font-weight: normal; line-height: 30px; margin: 0;*/
/*              }*/
/*              */
/* */
/*              .button{*/
/*                  */
/*                  border:1px solid #e78315;background-color:#f59123;padding:15px 45px;font-size:13px;text-transform:uppercase;color:#fff;margin-bottom:40px;-webkit-transition:all .5s ease;-moz-transition:all .5s ease-in-out;-o-transition:all .5s ease-in-out;-ms-transition:all .5s ease-in-out;transition:all .5s ease-in-out;cursor:pointer*/
/*              }*/
/* */
/*         </style>*/
/*     */
/*     */
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
/*                         <li class="icn_categories"><a href="{{path('rediriger_admin_stade')}}">extraire Stadium</a></li>*/
/*                         */
/*                         */
/*                      {#   <li class="icn_categories"><a {% for m in mds%} href="{{path('rechercher_admin_stade',{'nom' :  m.nom  })}}" {% endfor %}>*/
/*                                 search Stadium</a></li>#}*/
/*  			*/
/*                        */
/*                         <li class="icn_tags"><a href="{{path('affich_admin_stade')}}"target="_blank">view stade</a></li>*/
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
/* 		*/
/* 		*/
/* 		                        <form method='POST'>*/
/* */
/* 		<article class="module width_full">*/
/* 			<header><h3>Post New Article</h3></header>*/
/* */
/* 				<div class="module_content">*/
/* */
/* 						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->*/
/* 							<label>Le sujet </label>*/
/*                                                         {{ form_widget(f.sujet, { 'attr': {'class': 'bar'} }) }}*/
/* */
/*                                                         */
/* 						</fieldset>*/
/*                                                         */
/*                                                         */
/* 						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->*/
/* 							<label>Le nom du joueur 2</label>*/
/*                                                                                                         {{ form_widget(f.description, { 'attr': {'class': 'bar'} }) }}*/
/* */
/*                                                 </fieldset>*/
/*                                                    */
/* */
/* 				</div>*/
/* */
/* */
/* 			<footer>*/
/* 				<div class="submit_link">*/
/*                     {{ form_widget(f.Ajouter, { 'attr': {'class': 'button'} }) }}                                          </fieldset>*/
/* {{form_rest(f)}}*/
/* */
/* */
/* 				</div>*/
/*                     */
/* 			</footer>*/
/* 		</article><!-- end of post new article -->*/
/* 		                  </form>*/
/* */
/* 		*/
/* 		<div class="spacer"></div>*/
/* 	</section>*/
/* {%endblock %}*/
/* */
/* </body>*/
/* */
/* </html>*/
