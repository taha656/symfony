<?php

/* TFTpersonneBundle:Stade:rechercherStade.html.twig */
class __TwigTemplate_9de384537bca5bd5088f2b003e9c879170d76552674ce8c77a2e3524cf903cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TFTpersonneBundle::adminIndex.html.twig", "TFTpersonneBundle:Stade:rechercherStade.html.twig", 2);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TFTpersonneBundle::adminIndex.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content2($context, array $blocks = array())
    {
        // line 4
        echo "    <center>
<form method=\"POST\">
    nom <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"rech\"/>
</form>
<table border=\"1\">
    <tr> <td> nom </td> 
        <td> Type de Terrain </td>
        <td> capacité </td>
        <td> surface </td>
    </tr>
    
     ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 17
            echo "         <tr> <td>
                ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "
            </td>
            <td>
              ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "typeDeTerrain", array()), "html", null, true);
            echo "  
            </td>
            <td>
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "capacite", array()), "html", null, true);
            echo "
            </td>
             <td>
                ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "surface", array()), "html", null, true);
            echo "
            </td>
            </tr>
         
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    
</table>
    </center>
      ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Stade:rechercherStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 32,  70 => 27,  64 => 24,  58 => 21,  52 => 18,  49 => 17,  45 => 16,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'TFTpersonneBundle::adminIndex.html.twig' %}*/
/* {% block content2 %}*/
/*     <center>*/
/* <form method="POST">*/
/*     nom <input type="text" name="search"/>*/
/*     <input type="submit" value="rech"/>*/
/* </form>*/
/* <table border="1">*/
/*     <tr> <td> nom </td> */
/*         <td> Type de Terrain </td>*/
/*         <td> capacité </td>*/
/*         <td> surface </td>*/
/*     </tr>*/
/*     */
/*      {% for m in mds %}*/
/*          <tr> <td>*/
/*                 {{m.nom}}*/
/*             </td>*/
/*             <td>*/
/*               {{m.typeDeTerrain}}  */
/*             </td>*/
/*             <td>*/
/*                 {{m.capacite}}*/
/*             </td>*/
/*              <td>*/
/*                 {{m.surface}}*/
/*             </td>*/
/*             </tr>*/
/*          */
/*       {% endfor %}*/
/*     */
/* </table>*/
/*     </center>*/
/*       {% endblock %}*/
