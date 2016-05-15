<?php

/* TFTpersonneBundle:image:list.html.twig */
class __TwigTemplate_52f2cf0631f6d1064f312a14e3d3d9ae223eba92e05245d71ff3c4d6526c33f4 extends Twig_Template
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
";
        // line 3
        echo "
<table border=\"2\">

 <tr>

 <th> Id </th>

 <th> Title</th>

 <th> Show picture </th>

 </tr>

 

 ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "
 <tr>

 <th>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</th>

 <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "</th>

 <th>

 <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_aff_image", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\">
Show picture
 </a> 

</th>

 </tr>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
</table>";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:image:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 37,  60 => 28,  53 => 24,  48 => 22,  43 => 19,  39 => 18,  22 => 3,  19 => 1,);
    }
}
/* */
/* {# empty Twig template #}*/
/* */
/* <table border="2">*/
/* */
/*  <tr>*/
/* */
/*  <th> Id </th>*/
/* */
/*  <th> Title</th>*/
/* */
/*  <th> Show picture </th>*/
/* */
/*  </tr>*/
/* */
/*  */
/* */
/*  {% for image in images %}*/
/* */
/*  <tr>*/
/* */
/*  <th>{{image.id}}</th>*/
/* */
/*  <th>{{image.description}}</th>*/
/* */
/*  <th>*/
/* */
/*  <a href="{{path("tft_aff_image", {'id':image.id })}}">*/
/* Show picture*/
/*  </a> */
/* */
/* </th>*/
/* */
/*  </tr>*/
/* */
/*  {% endfor %}*/
/* */
/* </table>*/
