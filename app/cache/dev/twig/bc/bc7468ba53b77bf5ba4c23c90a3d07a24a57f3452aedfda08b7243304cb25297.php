<?php

/* TFTpersonneBundle:Stade:modifierStade.html.twig */
class __TwigTemplate_933958dcc68474f1fd013ba72de34a5a7ce95488cc88bb94278f0c458a1ea981 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TFTpersonneBundle::adminIndex2.html.twig", "TFTpersonneBundle:Stade:modifierStade.html.twig", 3);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TFTpersonneBundle::adminIndex2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content2($context, array $blocks = array())
    {
        // line 5
        echo "    <center>
<form method=\"POST\">
    <table>
    <td> nom </td>
    <td>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "
    </td>
    <td>
     capacite 
</td>
     <td>
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "capacite", array()), 'widget');
        echo "
    </td>
        <td>
     type de terrain 
</td>
     <td>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "typeDeTerrain", array()), 'widget');
        echo "
    </td>
        <td>
     surface 
</td>
     <td>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "surface", array()), 'widget');
        echo "
    </td>
</table>
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "      
</form>

    </center>
 ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Stade:modifierStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  65 => 28,  56 => 22,  47 => 16,  38 => 10,  31 => 5,  28 => 4,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* {% extends 'TFTpersonneBundle::adminIndex2.html.twig' %}*/
/* {% block content2 %}*/
/*     <center>*/
/* <form method="POST">*/
/*     <table>*/
/*     <td> nom </td>*/
/*     <td>*/
/*         {{form_widget(f.nom)}}*/
/*     </td>*/
/*     <td>*/
/*      capacite */
/* </td>*/
/*      <td>*/
/*         {{form_widget(f.capacite)}}*/
/*     </td>*/
/*         <td>*/
/*      type de terrain */
/* </td>*/
/*      <td>*/
/*         {{form_widget(f.typeDeTerrain)}}*/
/*     </td>*/
/*         <td>*/
/*      surface */
/* </td>*/
/*      <td>*/
/*         {{form_widget(f.surface)}}*/
/*     </td>*/
/* </table>*/
/*       {{form_rest(f)}}      */
/* </form>*/
/* */
/*     </center>*/
/*  {% endblock %}*/
