<?php

/* FOSUserBundle:Registration:registerarbitre.html.twig */
class __TwigTemplate_0753e8c9d9b531055b003e6b1de5d4228bd128036836643f1e8bed952befd329 extends Twig_Template
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

                       
                                                    <center>

        <tr>        <div class=\"name\">
                <td> <label for=\"name\">Nom:</label><div class=\"clear\"></div></td>
                            
                            <td> ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td>
            </div> </tr>

             <div class=\"email\">
                            <label for=\"email\">Confirm Email:</label><div class=\"clear\"></div>
                            <td> ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>
                        </div>
                                          <td> ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td>

            
            
                        <div class=\"name\">
                            <label for=\"username\">Username:</label><div class=\"clear\"></div>
  
                         ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
                        </div>
                        
                        <div class=\"name\">
                            <label for=\"age\">Age:</label><div class=\"clear\"></div>
                         ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age", array()), 'widget');
        echo "

                        </div>
                              <div class=\"name\">
                            <label for=\"cin\">Cin:</label><div class=\"clear\"></div>
                         ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cin", array()), 'widget');
        echo "

                        </div>
                        <div class=\"name\">
                            <label for=\"password\">Mot de passe</label><div class=\"clear\"></div>
                       ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
                        </div>
                       
                         <div class=\"name\">
                            <label for=\"password\">Verification</label><div class=\"clear\"></div>
                       ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "experiencearbitre", array()), 'widget');
        echo "
                        </div>
                          <div class=\"name\">
                            <label for=\"password\">Competence arbitre:</label><div class=\"clear\"></div>
                       ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "competencearbitre", array()), 'widget');
        echo "
                        </div>
                        <div id=\"register-submit\">
                          <input type=\"submit\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit"), "html", null, true);
        echo "\" />
                        </div>
                        ";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </center>

                        <div class=\"ctn-img\">
                            <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("inscription/images/federer.png"), "html", null, true);
        echo "\" />
                       </div><!--Close Images-->
                       <div class=\"clear\"></div>
              
                                      
</div>

           </div><!--Close REgistration-->
          </div>
        </section>
      
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-1.10.2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--MENU-->
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/modernizr.custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/menu/cbpHorizontalMenu.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!--END MENU-->

<!-- Button Anchor Top-->
<script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.ui.totop.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script> 

</body>

<!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:10:42 GMT -->
</html>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:registerarbitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 118,  209 => 117,  202 => 113,  198 => 112,  193 => 110,  189 => 109,  175 => 98,  168 => 94,  163 => 92,  157 => 89,  150 => 85,  142 => 80,  134 => 75,  126 => 70,  118 => 65,  108 => 58,  103 => 56,  95 => 51,  84 => 43,  66 => 28,  61 => 26,  57 => 25,  52 => 23,  48 => 22,  43 => 20,  34 => 14,  19 => 1,);
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
/*                                                     <center>*/
/* */
/*         <tr>        <div class="name">*/
/*                 <td> <label for="name">Nom:</label><div class="clear"></div></td>*/
/*                             */
/*                             <td> {{form_widget(form.nom)}}</td>*/
/*             </div> </tr>*/
/* */
/*              <div class="email">*/
/*                             <label for="email">Confirm Email:</label><div class="clear"></div>*/
/*                             <td> {{form_widget(form.email)}}</td>*/
/*                         </div>*/
/*                                           <td> {{form_widget(form.email)}}</td>*/
/* */
/*             */
/*             */
/*                         <div class="name">*/
/*                             <label for="username">Username:</label><div class="clear"></div>*/
/*   */
/*                          {{form_widget(form.username)}}*/
/*                         </div>*/
/*                         */
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
/*                             <label for="password">Mot de passe</label><div class="clear"></div>*/
/*                        {{form_widget(form.plainPassword)}}*/
/*                         </div>*/
/*                        */
/*                          <div class="name">*/
/*                             <label for="password">Verification</label><div class="clear"></div>*/
/*                        {{form_widget(form.experiencearbitre)}}*/
/*                         </div>*/
/*                           <div class="name">*/
/*                             <label for="password">Competence arbitre:</label><div class="clear"></div>*/
/*                        {{form_widget(form.competencearbitre)}}*/
/*                         </div>*/
/*                         <div id="register-submit">*/
/*                           <input type="submit" value="{{ 'registration.submit'|trans }}" />*/
/*                         </div>*/
/*                         {{ form_end(form) }}*/
/*     </center>*/
/* */
/*                         <div class="ctn-img">*/
/*                             <img src="{{asset('inscription/images/federer.png')}}" />*/
/*                        </div><!--Close Images-->*/
/*                        <div class="clear"></div>*/
/*               */
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
