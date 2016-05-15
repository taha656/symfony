<?php

/* TFTpersonneBundle:image:affiche.html.twig */
class __TwigTemplate_dc6db27c36cc9ebe97265ff85ba158f28577b83f9ad276e1839a28398f879327 extends Twig_Template
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
        echo "<div>
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("tft_image_route", array("id" => $this->getAttribute((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")), "id", array())))), "html", null, true);
        echo "\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:image:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div>*/
/* <img src="{{ asset(path('tft_image_route', {'id': images.id})) }}"/>*/
/* </div>*/
/* */
