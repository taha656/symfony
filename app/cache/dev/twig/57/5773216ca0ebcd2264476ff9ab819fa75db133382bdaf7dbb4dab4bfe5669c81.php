<?php

/* TFTpersonneBundle:Session:liste.html.twig */
class __TwigTemplate_f7dc97b0b1c7cfdd43dc86aecb42afea57cb98e8dab5bb84ee3d115d50e7cfad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("TFTpersonneBundle:Session:layout.html.twig", "TFTpersonneBundle:Session:liste.html.twig", 5);
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

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <center>
        
<h1>Liste des sessions</h1>

<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>NomArbitre</th>
        <th>Duree</th>
        <th>Date_debut</th>
        <th>Date_fin</th>
        <th>Type</th>
        <th>Lieu</th>
          
    </tr>
    </center>
     
    
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sessions"]) ? $context["sessions"] : $this->getContext($context, "sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 26
            echo "    <tr>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "id", array()), "html", null, true);
            echo "</td>
         <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "nomarbitre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "duree", array()), "html", null, true);
            echo "</td>
        <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "dateDebut", array()), "html", null, true);
            echo "   </td>
        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "dateFin", array()), "html", null, true);
            echo "   </td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "type", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "lieu", array()), "html", null, true);
            echo "</td>

        

        
        
        

        

        
        
        
   </tr> 
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo " 
</table>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Session:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 47,  82 => 33,  78 => 32,  74 => 31,  70 => 30,  66 => 29,  62 => 28,  58 => 27,  55 => 26,  51 => 25,  31 => 7,  28 => 6,  11 => 5,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
/* */
/* {% extends "TFTpersonneBundle:Session:layout.html.twig" %}*/
/* {% block content %}*/
/*     <center>*/
/*         */
/* <h1>Liste des sessions</h1>*/
/* */
/* <table border="1">*/
/*     <tr>*/
/*         <th>ID</th>*/
/*         <th>NomArbitre</th>*/
/*         <th>Duree</th>*/
/*         <th>Date_debut</th>*/
/*         <th>Date_fin</th>*/
/*         <th>Type</th>*/
/*         <th>Lieu</th>*/
/*           */
/*     </tr>*/
/*     </center>*/
/*      */
/*     */
/*     {% for session in sessions %}*/
/*     <tr>*/
/*         <td>{{session.id}}</td>*/
/*          <td>{{session.nomarbitre}}</td>*/
/*         <td>{{session.duree}}</td>*/
/*         <td> {{session.dateDebut}}   </td>*/
/*         <td> {{session.dateFin}}   </td>*/
/*         <td>{{session.type}}</td>*/
/*         <td>{{session.lieu}}</td>*/
/* */
/*         */
/* */
/*         */
/*         */
/*         */
/* */
/*         */
/* */
/*         */
/*         */
/*         */
/*    </tr> */
/*     {% endfor %} */
/* </table>*/
/* {% endblock %}*/
