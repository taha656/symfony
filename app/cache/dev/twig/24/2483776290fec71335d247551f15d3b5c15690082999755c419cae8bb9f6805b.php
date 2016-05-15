<?php

/* TFTpersonneBundle:Article:liste.html.twig */
class __TwigTemplate_bf6b6069df4fb92d2cde83419bfc6729d46a935b92f7a0d34a4ddecd92df0062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TFTpersonneBundle:Session:layout.html.twig", "TFTpersonneBundle:Article:liste.html.twig", 2);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
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
        
        </tr> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 
</table>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Article:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  64 => 24,  60 => 23,  56 => 22,  53 => 21,  49 => 20,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "TFTpersonneBundle:Session:layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* */
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
/*     */
/*     {% for article in articles %}*/
/*     <tr>*/
/*         <td>{{article.id}}</td>*/
/*         <td>{{article.sujet}}</td>*/
/*         <td> {{article.date }}   </td>*/
/*         */
/*         </tr> */
/*     {% endfor %} */
/* </table>*/
/* {% endblock %}*/
/* */
/*     */
/* */
