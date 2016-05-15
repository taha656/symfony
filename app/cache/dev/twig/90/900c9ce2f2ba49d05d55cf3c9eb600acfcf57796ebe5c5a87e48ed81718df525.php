<?php

/* TFTpersonneBundle:Article:listsup.html.twig */
class __TwigTemplate_6be33d24419a06dafe2a4ff59f9a0bb446f7d543106a48036141f77cb7bdf2af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("TFTpersonneBundle:Session:layout.html.twig", "TFTpersonneBundle:Article:listsup.html.twig", 4);
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

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "

<center>
<h1>Liste des Articles</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Sujet</th>
        <th>Date</th>
        
          
    </tr>
    </center>

";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "    <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "sujet", array()), "html", null, true);
            echo "</td>
        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "date", array()), "html", null, true);
            echo "   </td>
        
        
           <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_sup_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
     
        </tr> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    
    </table>
    ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Article:listsup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  68 => 27,  62 => 24,  58 => 23,  54 => 22,  51 => 21,  47 => 20,  31 => 6,  28 => 5,  11 => 4,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* {% extends "TFTpersonneBundle:Session:layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* */
/* <center>*/
/* <h1>Liste des Articles</h1>*/
/* <table border="1">*/
/*     <tr>*/
/*         <th>ID</th>*/
/*         <th>Sujet</th>*/
/*         <th>Date</th>*/
/*         */
/*           */
/*     </tr>*/
/*     </center>*/
/* */
/* {% for article in articles %}*/
/*     <tr>*/
/*         <td>{{article.id}}</td>*/
/*         <td>{{article.sujet}}</td>*/
/*         <td> {{article.date }}   </td>*/
/*         */
/*         */
/*            <td><a href="{{path('tft_sup_article',{'id':article.id})}}">Supprimer</a></td>*/
/*      */
/*         </tr> */
/*     {% endfor %}*/
/*     */
/*     </table>*/
/*     {% endblock %}*/
/* */
