<?php

/* TFTpersonneBundle:image:upload.html.twig */
class __TwigTemplate_c955e3459f47d39feb89bc1ede852c757392512bb9ad836b9a534d5f75d992ca extends Twig_Template
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
";
        // line 4
        echo "
<h1>Upload File</h1>

<form action=\"#\" method=\"post\" ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">

 ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "

 <input type=\"submit\" value=\"Upload Document\" />

</form>

";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:image:upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  27 => 7,  22 => 4,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* {# empty Twig template #}*/
/* */
/* <h1>Upload File</h1>*/
/* */
/* <form action="#" method="post" {{ form_enctype(Form) }}>*/
/* */
/*  {{ form_widget(Form) }}*/
/* */
/*  <input type="submit" value="Upload Document" />*/
/* */
/* </form>*/
/* */
/* */
