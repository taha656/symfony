<?php

/* TFTpersonneBundle:Default:fan.html.twig */
class __TwigTemplate_4c051cfa10d529a77533a66a24e4420fed4cf9030899a7c9f5ba09dd3f543f04 extends Twig_Template
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
        echo "
<!DOCTYPE html>

<!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:11:02 GMT -->
<head>
    <title>WT TENNIS</title>

\t 

</head>
<body>

";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TFTpersonneBundle:Comment:rechercherForum"));
        echo "


</body>
  
</html";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Default:fan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* */
/* <!-- Mirrored from www.ilcorsaronero.it/progettienvato/SiteParallax/ParallaxSite/site_tennis/preview/results.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 11:11:02 GMT -->*/
/* <head>*/
/*     <title>WT TENNIS</title>*/
/* */
/* 	 */
/* */
/* </head>*/
/* <body>*/
/* */
/* {{ render(controller('TFTpersonneBundle:Comment:rechercherForum')) }}*/
/* */
/* */
/* </body>*/
/*   */
/* </html*/
