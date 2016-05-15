<?php

/* TFTpersonneBundle:Article:listup.html.twig */
class __TwigTemplate_1dfe906a4eb75b9210e063a604bce62c28081043fd648ca0c290777a5ca5ba51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("TFTpersonneBundle:Session:layout.html.twig", "TFTpersonneBundle:Article:listup.html.twig", 6);
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

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<center>

<h1>Liste des Articles</h1>

<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Sujet</th>
        <th>Date</th>
        
          
    </tr>
        </center>


";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 24
            echo "    <tr>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "sujet", array()), "html", null, true);
            echo "</td>
        <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "date", array()), "html", null, true);
            echo "   </td>
        
        
                <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tft_mod_article", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">Modifier</a></td>

        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " 
</table>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Article:listup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 33,  69 => 30,  63 => 27,  59 => 26,  55 => 25,  52 => 24,  48 => 23,  31 => 8,  28 => 7,  11 => 6,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* */
/* */
/* {% extends "TFTpersonneBundle:Session:layout.html.twig" %}*/
/* {% block content %}*/
/* <center>*/
/* */
/* <h1>Liste des Articles</h1>*/
/* */
/* <table border="1">*/
/*     <tr>*/
/*         <th>ID</th>*/
/*         <th>Sujet</th>*/
/*         <th>Date</th>*/
/*         */
/*           */
/*     </tr>*/
/*         </center>*/
/* */
/* */
/* {% for article in articles %}*/
/*     <tr>*/
/*         <td>{{article.id}}</td>*/
/*         <td>{{article.sujet}}</td>*/
/*         <td> {{article.date }}   </td>*/
/*         */
/*         */
/*                 <td><a href="{{path('tft_mod_article',{'id':article.id})}}">Modifier</a></td>*/
/* */
/*         </tr>*/
/*         {% endfor %} */
/* </table>*/
/* {% endblock %}*/
/* */
