<?php

/* TFTpersonneBundle:Pronostic:affichPronostic.html.twig */
class __TwigTemplate_372b0dc21923a1ca39d106d1a883d6c95b18ce23e567dfc83850a613ba5720fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("TFTpersonneBundle::pronosticUser.html.twig", "TFTpersonneBundle:Pronostic:affichPronostic.html.twig", 3);
        $this->blocks = array(
            'content2' => array($this, 'block_content2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TFTpersonneBundle::pronosticUser.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content2($context, array $blocks = array())
    {
        // line 6
        echo "



    <form method=\"POST\">

";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'form');
        echo "

            
                     
       
        
                           <div class=\"col-md-1 acc-title\"> Cat </div>
                          
        
        
                           <div class=\"col-md-1 acc-title\"> match : </div>
                           </td>
        
                            <div class=\"col-md-2 acc-title\">Joueur 1</div>
        
        
                            <div class=\"col-md-3 acc-title\">Joueur 2</div>
                            
                            </td>
       
                            <div class=\"col-md-2 acc-title\">Choix</div>
       </div>
          ";
        // line 34
        $context["var"] = 1;
        // line 35
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
               
                  
                            <div class=\"col-md-1 timg\"><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/atp_img.png"), "html", null, true);
            echo "\" alt=\"\" /></div>
                            <div class=\"col-md-2 t1\">       
              ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "idmatches1", array()), "id", array()), "html", null, true);
            echo " 
             
</div>
                            <div class=\"col-md-3 t2\"><p>            
              ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idmatches1", array()), "idjoueur1", array()), "nom", array()), "html", null, true);
            echo " 
            
 </div>
                            <div class=\"col-md-2 t3\">            
              ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idmatches1", array()), "idjoueur2", array()), "nom", array()), "html", null, true);
            echo " 
            
</div>
                            <div class=\"col-md-2 t4\">         
            <INPUT type=\"checkbox\" name=\"choix";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
            echo "\" value=\"1\"> 1

<INPUT type=\"checkbox\" name=\"choix";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")), "html", null, true);
            echo "\" value=\"2\"> 2
            </td></div>";
            // line 100
            echo "            </td></div>
                            
                            <div class=\"acc-footer\"></div>

                         ";
            // line 104
            $context["var"] = ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) + 1);
            echo "   
                    
                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo " 
                 <input type=\"submit\" value=ajouter\"></form>
                 

   ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Pronostic:affichPronostic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 106,  116 => 104,  110 => 100,  106 => 54,  101 => 52,  94 => 48,  87 => 44,  80 => 40,  75 => 38,  66 => 35,  64 => 34,  39 => 12,  31 => 6,  28 => 5,  11 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/*  {% extends 'TFTpersonneBundle::pronosticUser.html.twig' %}*/
/*  */
/* {% block content2 %}*/
/* */
/* */
/* */
/* */
/*     <form method="POST">*/
/* */
/* {{ form(Form)}}*/
/* */
/*             */
/*                      */
/*        */
/*         */
/*                            <div class="col-md-1 acc-title"> Cat </div>*/
/*                           */
/*         */
/*         */
/*                            <div class="col-md-1 acc-title"> match : </div>*/
/*                            </td>*/
/*         */
/*                             <div class="col-md-2 acc-title">Joueur 1</div>*/
/*         */
/*         */
/*                             <div class="col-md-3 acc-title">Joueur 2</div>*/
/*                             */
/*                             </td>*/
/*        */
/*                             <div class="col-md-2 acc-title">Choix</div>*/
/*        </div>*/
/*           {% set var = 1 %}*/
/*                 {% for m in mds%} */
/*                */
/*                   */
/*                             <div class="col-md-1 timg"><img src="{{asset('images/atp_img.png')}}" alt="" /></div>*/
/*                             <div class="col-md-2 t1">       */
/*               {{m.idmatches1.id}} */
/*              */
/* </div>*/
/*                             <div class="col-md-3 t2"><p>            */
/*               {{m.idmatches1.idjoueur1.nom}} */
/*             */
/*  </div>*/
/*                             <div class="col-md-2 t3">            */
/*               {{m.idmatches1.idjoueur2.nom}} */
/*             */
/* </div>*/
/*                             <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix{{var}}" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix{{var}}" value="2"> 2*/
/*             </td></div>{#*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix2" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix2" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix3" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix3" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix4" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix4" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix5" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix5" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix6" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix6" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix7" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix8" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix" value="8"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix9" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix9" value="2"> 2*/
/*             </td></div>*/
/*                               <div class="col-md-2 t4">         */
/*             <INPUT type="checkbox" name="choix10" value="1"> 1*/
/* */
/* <INPUT type="checkbox" name="choix10" value="2"> 2 #}*/
/*             </td></div>*/
/*                             */
/*                             <div class="acc-footer"></div>*/
/* */
/*                          {% set var=var+1 %}   */
/*                     */
/*                  {% endfor %} */
/*                  <input type="submit" value=ajouter"></form>*/
/*                  */
/* */
/*    {% endblock %} */
