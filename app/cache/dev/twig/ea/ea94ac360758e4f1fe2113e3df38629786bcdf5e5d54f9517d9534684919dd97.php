<?php

/* TFTpersonneBundle:Default:Inscription.html.twig */
class __TwigTemplate_2dfe5b7a8d18c8b0b2f9b28cced940cb954a6f34c80123dd3242a7916452e340 extends Twig_Template
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
        // line 2
        echo "

<center>

<a href =\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("tft_arbitre_registration");
        echo "\"> <h2>inscription arbitre</h2></a> </br>
<a href =\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("tft_arbitre_registration");
        echo "\"> <h2>inscription joueur</h2></a></br>
<a href =\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("tft_medecin_registration");
        echo "\"> <h2>inscription medecin</h2></a></br>
<a href =\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("tft_dopage_registration");
        echo "\"> <h2>inscription responsable anti dopage</h2></a><br>
<a href =\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tft_fan_registration");
        echo "\"> <h2>inscription fan</h2></a>
</center>";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Default:Inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  37 => 9,  33 => 8,  29 => 7,  25 => 6,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* <center>*/
/* */
/* <a href ="{{path ('tft_arbitre_registration')}}"> <h2>inscription arbitre</h2></a> </br>*/
/* <a href ="{{path ('tft_arbitre_registration')}}"> <h2>inscription joueur</h2></a></br>*/
/* <a href ="{{path ('tft_medecin_registration')}}"> <h2>inscription medecin</h2></a></br>*/
/* <a href ="{{path ('tft_dopage_registration')}}"> <h2>inscription responsable anti dopage</h2></a><br>*/
/* <a href ="{{path ('tft_fan_registration')}}"> <h2>inscription fan</h2></a>*/
/* </center>*/
