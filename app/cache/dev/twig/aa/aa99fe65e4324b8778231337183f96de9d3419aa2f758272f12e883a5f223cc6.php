<?php

/* TFTpersonneBundle:Session:ajouter.html.twig */
class __TwigTemplate_069f55b9af9be209788dd1007c8d35e8d0fd9f5dd01ade6e46c1a1fbb53afb78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("TFTpersonneBundle:Session:layout.html.twig", "TFTpersonneBundle:Session:ajouter.html.twig", 8);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TFTpersonneBundle:Session:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "


<center>
    <h1>Ajouter Session </h1> 

";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "
</center>





    ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Session:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  31 => 10,  28 => 9,  11 => 8,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
/* */
/* */
/* */
/* {% extends "TFTpersonneBundle:Session:layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* */
/* */
/* <center>*/
/*     <h1>Ajouter Session </h1> */
/* */
/* {{form(Form)}}*/
/* </center>*/
/* */
/* */
/* */
/* */
/* */
/*     {% endblock %}*/
/* */
/* */
