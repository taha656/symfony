<?php

/* TFTpersonneBundle:Comment:Repondre.html.twig */
class __TwigTemplate_75cbfe48833b6537dd48c192abeb1f29f4cd9f93f89fe5249c26ca4fdc5b81f3 extends Twig_Template
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
        echo "
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fonts/font-awesome-4.1.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style_dir.css\" rel=\"stylesheet"), "html", null, true);
        echo "\" type=\"text/css\" />
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/costum.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
<br>
<br>
<br>
<br>
    <center>
     <form>
         <div class=\"col-sm-offset-4 col-sm-4\">
    <table border =\"0\" >

";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 20
            echo "    

       <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Sujet :  </strong></span> <span class=\"\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titreduforum", array()), "html", null, true);
            echo "</span></li>
 <li class=\"list-group-item text-right\"><span class=\"pull-left\"><strong class=\"\">Description : </strong></span> <span class=\"\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Description", array()), "html", null, true);
            echo "</span></li>       
  
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
</form>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js\"></script>

";
        // line 31
        $this->loadTemplate("FOSCommentBundle:Thread:async.html.twig", "TFTpersonneBundle:Comment:Repondre.html.twig", 31)->display(array_merge($context, array("id" => "foo")));
        // line 32
        echo "

         </div>
</table>
            </center>

";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Comment:Repondre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  85 => 31,  79 => 27,  69 => 23,  65 => 22,  61 => 20,  57 => 19,  44 => 9,  40 => 8,  36 => 7,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/* <link href=""{{asset('css/fonts/font-awesome-4.1.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* <link href="{{asset('css/component.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/* <link href="{{asset('css/style_dir.css" rel="stylesheet')}}" type="text/css" />*/
/* <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css" />*/
/* <link href="{{asset('css/costum.css')}}" rel="stylesheet" type="text/css" />*/
/* <br>*/
/* <br>*/
/* <br>*/
/* <br>*/
/*     <center>*/
/*      <form>*/
/*          <div class="col-sm-offset-4 col-sm-4">*/
/*     <table border ="0" >*/
/* */
/* {% for m in mds %}*/
/*     */
/* */
/*        <li class="list-group-item text-right"><span class="pull-left"><strong class="">Sujet :  </strong></span> <span class="">{{ m.titreduforum }}</span></li>*/
/*  <li class="list-group-item text-right"><span class="pull-left"><strong class="">Description : </strong></span> <span class="">{{ m.Description }}</span></li>       */
/*   */
/*         */
/*         {% endfor %}*/
/* */
/* </form>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>*/
/* */
/* {% include 'FOSCommentBundle:Thread:async.html.twig' with {'id': 'foo'} %}*/
/* */
/* */
/*          </div>*/
/* </table>*/
/*             </center>*/
/* */
/* */
