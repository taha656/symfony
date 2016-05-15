<?php

/* TFTpersonneBundle:Stade:ajouterStade.html.twig */
class __TwigTemplate_761d809237394abb450ed7d2827a93db786055c0712c55f8a43423bed0af94bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TFTpersonneBundle::Map.html.twig", "TFTpersonneBundle:Stade:ajouterStade.html.twig", 1);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TFTpersonneBundle::Map.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content2($context, array $blocks = array())
    {
        echo "<form method=\"POST\">
    <center>
       

    <table>
        <td> nom </td><tr>
    <td>
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "
    </td></tr>
    <td>
     capacite 
    </td><tr>
     <td>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "capacite", array()), 'widget');
        echo "
     </td></tr>
        <td>
     type de terrain 
        </td><tr>
     <td>
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "typeDeTerrain", array()), 'widget');
        echo "
     </td></tr>
        <td>
     surface 
        </td><tr>
     <td>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "surface", array()), 'widget');
        echo "
     </td></tr>
        <td>
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "  </td> 
</table>

    </center></form>
    <html> <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.663552505915!2d10.187543314723618!3d36.89839626986674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7454c6ed51%3A0x683b3ab5565cd357!2sESPRIT!5e0!3m2!1sfr!2sfr!4v1462909423661\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>

   ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Stade:ajouterStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  66 => 27,  57 => 21,  48 => 15,  39 => 9,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'TFTpersonneBundle::Map.html.twig' %}*/
/* {% block content2 %}<form method="POST">*/
/*     <center>*/
/*        */
/* */
/*     <table>*/
/*         <td> nom </td><tr>*/
/*     <td>*/
/*         {{form_widget(f.nom)}}*/
/*     </td></tr>*/
/*     <td>*/
/*      capacite */
/*     </td><tr>*/
/*      <td>*/
/*         {{form_widget(f.capacite)}}*/
/*      </td></tr>*/
/*         <td>*/
/*      type de terrain */
/*         </td><tr>*/
/*      <td>*/
/*         {{form_widget(f.typeDeTerrain)}}*/
/*      </td></tr>*/
/*         <td>*/
/*      surface */
/*         </td><tr>*/
/*      <td>*/
/*         {{form_widget(f.surface)}}*/
/*      </td></tr>*/
/*         <td>*/
/*             {{form_rest(f)}}  </td> */
/* </table>*/
/* */
/*     </center></form>*/
/*     <html> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3190.663552505915!2d10.187543314723618!3d36.89839626986674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb7454c6ed51%3A0x683b3ab5565cd357!2sESPRIT!5e0!3m2!1sfr!2sfr!4v1462909423661" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/* */
/*    {% endblock %} */
/* */
