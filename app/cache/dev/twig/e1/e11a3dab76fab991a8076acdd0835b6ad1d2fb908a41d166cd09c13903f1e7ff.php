<?php

/* TFTpersonneBundle:Comment:forum.html.twig */
class __TwigTemplate_750a1f5d31f0d2694ec0991ef76b78d6a2f955780f52def1866f97d23caa7dbc extends Twig_Template
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
<div class=\"col-sm-offset-4 col-sm-4\">

    <form id =\"forum\" name=\"tft_personnebundle_forum\" method=\"POST\"action=\"\">
        <div id=\"tft_personnebundle_forum\">
        </div>
        <div class=\"form-group\">

            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre_du_forum", array()), 'label');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre_du_forum", array()), 'widget', array("attr" => array("class" => "col-sm-2  form-control")));
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre_du_forum", array()), 'errors');
        echo "
        </div>
        <div class=\"form-group\">

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Description", array()), 'label');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Description", array()), 'widget', array("attr" => array("class" => "col-sm-2 form-control")));
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Description", array()), 'errors');
        echo "


        </div>   

        <div class=\"form-group non\">

            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "_token", array()), 'label');
        echo "
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "_token", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "_token", array()), 'errors');
        echo "


        </div>     

        <div class=\"form-group\">
            <button type=\"submit\" id=\"tft_personnebundle_forum_valider\" name=\"tft_personnebundle_forum[valider]\"class=\"btn btn-default\" >Valider</button>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Comment:forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 33,  90 => 32,  86 => 31,  76 => 24,  72 => 23,  68 => 22,  61 => 18,  57 => 17,  53 => 16,  42 => 8,  38 => 7,  34 => 6,  29 => 4,  24 => 2,  19 => 1,);
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
/* <div class="col-sm-offset-4 col-sm-4">*/
/* */
/*     <form id ="forum" name="tft_personnebundle_forum" method="POST"action="">*/
/*         <div id="tft_personnebundle_forum">*/
/*         </div>*/
/*         <div class="form-group">*/
/* */
/*             {{ form_label(Form.titre_du_forum) }}*/
/*             {{ form_widget(Form.titre_du_forum,{ 'attr': {'class': 'col-sm-2  form-control' } }) }}*/
/*             {{ form_errors(Form.titre_du_forum) }}*/
/*         </div>*/
/*         <div class="form-group">*/
/* */
/*             {{ form_label(Form.Description) }}*/
/*             {{ form_widget(Form.Description,{ 'attr': {'class': 'col-sm-2 form-control' } }) }}*/
/*             {{ form_errors(Form.Description) }}*/
/* */
/* */
/*         </div>   */
/* */
/*         <div class="form-group non">*/
/* */
/*             {{ form_label(Form._token) }}*/
/*             {{ form_widget(Form._token,{ 'attr': {'class': 'form-control' } }) }}*/
/*             {{ form_errors(Form._token) }}*/
/* */
/* */
/*         </div>     */
/* */
/*         <div class="form-group">*/
/*             <button type="submit" id="tft_personnebundle_forum_valider" name="tft_personnebundle_forum[valider]"class="btn btn-default" >Valider</button>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* */
