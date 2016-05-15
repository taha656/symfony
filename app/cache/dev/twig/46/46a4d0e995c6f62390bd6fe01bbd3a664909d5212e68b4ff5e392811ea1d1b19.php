<?php

/* TFTpersonneBundle:Stade:affichStade.html.twig */
class __TwigTemplate_102f4e790431066bb0b1b66ab5c87b4584d59c017406d7416e9a2a4e6e2d3cb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TFTpersonneBundle::adminIndex.html.twig", "TFTpersonneBundle:Stade:affichStade.html.twig", 2);
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
        echo "    <li class=\"icn_categories\"><a ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rechercher_admin_stade", array("nom" => $this->getAttribute($context["m"], "nom", array()))), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
                                search Stadium</a></li>
    <center>
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
        <td>
           supprimer 
        </td>
        <td>
           modifier 
        </td>
    </tr>  
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 32
            echo "        <tr>
            <td>
               ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "id", array()), "html", null, true);
            echo " 
            </td> 
            <td>
               ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nom", array()), "html", null, true);
            echo "  
            </td>
            <td>
               ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "capacite", array()), "html", null, true);
            echo "  
            </td>
            <td>
               ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "typeDeTerrain", array()), "html", null, true);
            echo "  
            </td>
            <td>
               ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "surface", array()), "html", null, true);
            echo "  
            </td>
            <td>
              <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer_admin_stade", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"
                  >supprimer</a>
            </td>
             <td>
               <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifier_admin_stade", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"
                  >modifier</a>
            </td>
            
        </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "       <a href=\"";
        echo $this->env->getExtension('routing')->getPath("rediriger_admin_stade");
        echo "\"
                  >export</a>
      
</table>
</center> 


  ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Stade:affichStade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 59,  116 => 53,  109 => 49,  103 => 46,  97 => 43,  91 => 40,  85 => 37,  79 => 34,  75 => 32,  71 => 31,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'TFTpersonneBundle::adminIndex.html.twig' %}*/
/* {% block content2 %}*/
/*     <li class="icn_categories"><a {% for m in mds%} href="{{path('rechercher_admin_stade',{'nom' :  m.nom  })}}" {% endfor %}>*/
/*                                 search Stadium</a></li>*/
/*     <center>*/
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
/*         <td>*/
/*            supprimer */
/*         </td>*/
/*         <td>*/
/*            modifier */
/*         </td>*/
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
/*             <td>*/
/*               <a href="{{path('supprimer_admin_stade',{'id' : m.id})}}"*/
/*                   >supprimer</a>*/
/*             </td>*/
/*              <td>*/
/*                <a href="{{path('modifier_admin_stade',{'id' : m.id})}}"*/
/*                   >modifier</a>*/
/*             </td>*/
/*             */
/*         </tr>*/
/*        {% endfor %}*/
/*        <a href="{{path('rediriger_admin_stade')}}"*/
/*                   >export</a>*/
/*       */
/* </table>*/
/* </center> */
/* */
/* */
/*   {% endblock %} */
/* */
