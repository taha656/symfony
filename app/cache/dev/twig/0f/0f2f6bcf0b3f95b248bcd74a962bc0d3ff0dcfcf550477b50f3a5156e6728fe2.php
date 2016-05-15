<?php

/* FOSUserBundle:Registration:registerfan.html.twig */
class __TwigTemplate_ff2205885faa26dae2b3e1a037f96e65719c6ce778560f266c50d63fb76bc619 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html xmlns=\"http://www.w3.org/1999/xhtml\">

<!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:10:41 GMT -->
<head>
    <title>WT TENNIS</title>
<meta content=\"text/html; charset=utf-8\" http-equiv=\"Content-Type\" />

<meta name=\"author\" content=\"corsini\" />
<meta name=\"keywords\" content=\"Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,\tcharity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href=\"css/fonts/font-awesome-4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/jquery.jscrollpane.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/style_dir.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"img/favicon.ico\" />
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>

<section class=\"container box-logo\">
   
 </section>
    <section class=\"drawer\">
\t\t\t\t
     
   
           <!-- REGISTER BOX -->
           <div class=\"top-score-title right-score col-md-12\">
            <h3>Inscrivez <span>Vous</span><span class=\"point-int\"> !</span></h3>
                <div class=\"col-md-12 login-page\">
                          ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "attr" => array("class" => "register-form")));
        echo "

                       
                       
        <tr>        <div class=\"name\">
                <td> <label for=\"name\">Nom:</label><div class=\"clear\"></div></td>
                            
                            <td> ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
            </div> </tr>
              <tr>            <div class=\"name\">
                            <td>   <label for=\"email\">Email:</label><div class=\"clear\"></div></td>
                         
                           <td> ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>

                       
                       </div></tr>
                        <tr>    
                        <div class=\"name\">
                            <label for=\"username\">Username:</label><div class=\"clear\"></div>
  
                         ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                        </div>
                        <div class=\"name\">
                            <label for=\"age\">Age:</label><div class=\"clear\"></div>
                         ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "

                        </div>
                              <div class=\"name\">
                            <label for=\"cin\">Cin:</label><div class=\"clear\"></div>
                         ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget');
        echo "

                        </div>
                        <div class=\"name\">
                            <label for=\"password\"></label><div class=\"clear\"></div>
                       ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
                        </div>
                        
                        <div id=\"register-submit\">
                          <input type=\"submit\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" />
                        </div>
                        ";
        // line 83
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        <div class=\"ctn-img\">
                            <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/images/federer.png"), "html", null, true);
        echo "\" />
                       </div><!--Close Images-->
                       <div class=\"clear\"></div>
                                      
</div>

           </div><!--Close REgistration-->
          </div>
        </section>
      
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--MENU-->
<script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--END MENU-->

<!-- Button Anchor Top-->
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 

</body>

<!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:10:42 GMT -->
</html>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:registerfan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 105,  187 => 104,  180 => 100,  176 => 99,  171 => 97,  167 => 96,  154 => 86,  148 => 83,  143 => 81,  136 => 77,  128 => 72,  120 => 67,  113 => 63,  102 => 55,  94 => 50,  84 => 43,  66 => 28,  61 => 26,  57 => 25,  52 => 23,  48 => 22,  43 => 20,  34 => 14,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/* */
/* <!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:10:41 GMT -->*/
/* <head>*/
/*     <title>WT TENNIS</title>*/
/* <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />*/
/* */
/* <meta name="author" content="corsini" />*/
/* <meta name="keywords" content="Tennis, club, events, football, golf, non-profit, betting assistant, football,fitness, tennis, sport, soccer, goal, sports, volleyball, basketball,	charity, club, cricket, football, hockey, magazine, non profit, rugby, soccer, sport, sports, tennis" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     */
/*     <link href="{{asset('inscription/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,700,800,900' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>*/
/*     <link href="css/fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* */
/*     <link href="{{asset('inscription/css/animate.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*     <link href="{{asset('inscription/css/jquery.bxslider.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{asset('inscription/css/jquery.jscrollpane.css')}}" rel="stylesheet" type="text/css" />*/
/*     */
/*     <link href="{{asset('inscription/css/component.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{asset('inscription/css/style_dir.css')}}" rel="stylesheet" type="text/css" />*/
/*     <link rel="shortcut icon" type="image/png" href="img/favicon.ico" />*/
/*     <link href="{{asset('inscription/css/responsive.css')}}" rel="stylesheet" type="text/css" />*/
/* </head>*/
/* <body>*/
/* */
/* <section class="container box-logo">*/
/*    */
/*  </section>*/
/*     <section class="drawer">*/
/* 				*/
/*      */
/*    */
/*            <!-- REGISTER BOX -->*/
/*            <div class="top-score-title right-score col-md-12">*/
/*             <h3>Inscrivez <span>Vous</span><span class="point-int"> !</span></h3>*/
/*                 <div class="col-md-12 login-page">*/
/*                           {{ form_start(form, {'method': 'post', 'attr': {'class': 'register-form'}}) }}*/
/* */
/*                        */
/*                        */
/*         <tr>        <div class="name">*/
/*                 <td> <label for="name">Nom:</label><div class="clear"></div></td>*/
/*                             */
/*                             <td> {{form_widget(form.nom)}}</td>*/
/*             </div> </tr>*/
/*               <tr>            <div class="name">*/
/*                             <td>   <label for="email">Email:</label><div class="clear"></div></td>*/
/*                          */
/*                            <td> {{form_widget(form.email)}}</td>*/
/* */
/*                        */
/*                        </div></tr>*/
/*                         <tr>    */
/*                         <div class="name">*/
/*                             <label for="username">Username:</label><div class="clear"></div>*/
/*   */
/*                          {{form_widget(form.username)}}*/
/*                         </div>*/
/*                         <div class="name">*/
/*                             <label for="age">Age:</label><div class="clear"></div>*/
/*                          {{form_widget(form.age)}}*/
/* */
/*                         </div>*/
/*                               <div class="name">*/
/*                             <label for="cin">Cin:</label><div class="clear"></div>*/
/*                          {{form_widget(form.cin)}}*/
/* */
/*                         </div>*/
/*                         <div class="name">*/
/*                             <label for="password"></label><div class="clear"></div>*/
/*                        {{form_widget(form.plainPassword)}}*/
/*                         </div>*/
/*                         */
/*                         <div id="register-submit">*/
/*                           <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/* */
/*                         <div class="ctn-img">*/
/*                             <img src="{{asset('inscription/images/federer.png')}}" />*/
/*                        </div><!--Close Images-->*/
/*                        <div class="clear"></div>*/
/*                                       */
/* </div>*/
/* */
/*            </div><!--Close REgistration-->*/
/*           </div>*/
/*         </section>*/
/*       */
/* <script src="{{asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>*/
/* <!--MENU-->*/
/* <script src="{{asset('js/menu/modernizr.custom.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('js/menu/cbpHorizontalMenu.js')}}" type="text/javascript"></script>*/
/* <!--END MENU-->*/
/* */
/* <!-- Button Anchor Top-->*/
/* <script src="{{asset('js/jquery.ui.totop.js')}}" type="text/javascript"></script>*/
/* <script src="{{asset('js/custom.js')}}" type="text/javascript"></script> */
/* */
/* </body>*/
/* */
/* <!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:10:42 GMT -->*/
/* </html>*/
/* */
