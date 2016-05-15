<?php

/* TFTpersonneBundle:Stade:redirigerStade.html.twig */
class __TwigTemplate_76563462c63af8fe5a5b29157d02ee538b9a8aa3d0d6628021a66e78a99d4437 extends Twig_Template
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
        // line 4
        echo "   
  <table border=\"2\">
    <tr>
        <td>
           ID 
        </td>
        <td>
           nom 
        </td>
         <td>
           capacite 
        </td>
         <td>
           typeDeTerrain 
        </td>
         <td>
           surface 
        </td>
   
    </tr>  
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 25
            echo "        <tr>
            <td>
               ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo " 
            </td> 
            <td>
               ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "  
            </td>
            <td>
               ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "capacite", array()), "html", null, true);
            echo "  
            </td>
            <td>
               ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "typeDeTerrain", array()), "html", null, true);
            echo "  
            </td>
            <td>
               ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "surface", array()), "html", null, true);
            echo "  
            </td>
         
            
        </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "       <a href=\"";
        echo $this->env->getExtension('routing')->getPath("exporter_admin_stade");
        echo "\"
                  >export</a>
        
</table>



 ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Stade:redirigerStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 45,  73 => 39,  67 => 36,  61 => 33,  55 => 30,  49 => 27,  45 => 25,  41 => 24,  19 => 4,);
    }
}
/* {# empty Twig template #}*/
/* {#{% extends 'TFTpersonneBundle::adminIndex.html.twig' %}*/
/* {% block content2 %}#}*/
/*    */
/*   <table border="2">*/
/*     <tr>*/
/*         <td>*/
/*            ID */
/*         </td>*/
/*         <td>*/
/*            nom */
/*         </td>*/
/*          <td>*/
/*            capacite */
/*         </td>*/
/*          <td>*/
/*            typeDeTerrain */
/*         </td>*/
/*          <td>*/
/*            surface */
/*         </td>*/
/*    */
/*     </tr>  */
/*     {% for m in mds%}*/
/*         <tr>*/
/*             <td>*/
/*                {{m.id}} */
/*             </td> */
/*             <td>*/
/*                {{m.nom}}  */
/*             </td>*/
/*             <td>*/
/*                {{m.capacite}}  */
/*             </td>*/
/*             <td>*/
/*                {{m.typeDeTerrain}}  */
/*             </td>*/
/*             <td>*/
/*                {{m.surface}}  */
/*             </td>*/
/*          */
/*             */
/*         </tr>*/
/*        {% endfor %}*/
/*        <a href="{{path('exporter_admin_stade')}}"*/
/*                   >export</a>*/
/*         */
/* </table>*/
/* */
/* */
/* */
/*  {# {% endblock %} #}*/
/* */
