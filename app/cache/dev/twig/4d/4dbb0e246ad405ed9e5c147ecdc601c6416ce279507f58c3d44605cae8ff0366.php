<?php

/* TFTpersonneBundle:Comment:Affichage.html.twig */
class __TwigTemplate_02ee864c6fe175ef0496508b50c008616592ec4d57e9a3475c7af56bacb15f79 extends Twig_Template
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_dir.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" type=\"text/css\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/costum.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <center>     
<h1>Liste des Forums </h1>

<form method=\"POST\">
    titre <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"rech\"/>
</form>
<div class=\"col-sm-offset-4 col-sm-4\">
    <br>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : $this->getContext($context, "modeles")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 19
            echo "   
    <table border =\"0\" >
        <center>

        
 <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Titre </strong></span> <span class=\"\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titreduforum", array()), "html", null, true);
            echo "</span></li>
 <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Description</strong></span> <span class=\"\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Description", array()), "html", null, true);
            echo "</span></li>       
   <a class =\"btn btn-success\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repondre_forum", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\">participer a ce forum</a>
 
 <br>
 <br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</div>

</table>
</center>
</fieldset>
</center>
     
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Comment:Affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  74 => 26,  70 => 25,  66 => 24,  59 => 19,  55 => 18,  42 => 8,  38 => 7,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
    }
}
/* <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/* <link href=""{{asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* <link href="{{asset('css/component.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* <link href="{{asset('css/style_dir.css" rel="stylesheet')}}" type="text/css" />*/
/* <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />*/
/* <link href="{{asset('css/costum.css')}}" rel="stylesheet" type="text/css" />*/
/*     <center>     */
/* <h1>Liste des Forums </h1>*/
/* */
/* <form method="POST">*/
/*     titre <input type="text" name="search"/>*/
/*     <input type="submit" value="rech"/>*/
/* </form>*/
/* <div class="col-sm-offset-4 col-sm-4">*/
/*     <br>*/
/* {% for m in modeles %}*/
/*    */
/*     <table border ="0" >*/
/*         <center>*/
/* */
/*         */
/*  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Titre </strong></span> <span class="">{{ m.titreduforum }}</span></li>*/
/*  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Description</strong></span> <span class="">{{ m.Description }}</span></li>       */
/*    <a class ="btn btn-success" href="{{path("repondre_forum",{'id':m.id})}}">participer a ce forum</a>*/
/*  */
/*  <br>*/
/*  <br>*/
/* {% endfor %}*/
/* </div>*/
/* */
/* </table>*/
/* </center>*/
/* </fieldset>*/
/* </center>*/
/*      */
/* */
