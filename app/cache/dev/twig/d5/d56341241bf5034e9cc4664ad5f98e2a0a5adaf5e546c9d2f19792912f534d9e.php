<?php

/* TFTpersonneBundle:Comment:rechercherForum.html.twig */
class __TwigTemplate_e6125ab7e09f91ee54164a3f573b4a69ea30d6055aff22e42bf82f5399c6d76c extends Twig_Template
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
        // line 3
        echo "
<form method=\"POST\">
    titre <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"rechercher\"/>
</form>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 9
            echo "     <table border =\"0\" >
        <tr>
            <td> <strong> Sujet</strong>  </td>
        <td>  ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "titreDuForum", array()), "html", null, true);
            echo "   </td><br></br>
    </tr>
           
        <tr>
            <td><strong>Description</strong></td>
            <td>
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "description", array()), "html", null, true);
            echo "
            </td>
        </tr>
        <tr>
            <td><strong> Date</strong> </td>

            <td>
      
            </td>
        </tr>

     <tr>
        <td> <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("repondre_forum", array("id" => $this->getAttribute($context["m"], "id", array()))), "html", null, true);
            echo "\"><input type=\"submit\" value=\"participer a ce forum\"/></a></td>
        </tr>
       
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</table>
<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<title>Bootstrap - Prebuilt Layout</title>

<!-- Bootstrap -->
<link href=\"../css/bootstrap.css\" rel=\"stylesheet\">
<link href=\"../../workspace/baby/css/go.css\" rel=\"stylesheet\" type=\"text/css\">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<div class=\"container\">
            <div class=\"col-sm-12\">

                <div class=\"bs-calltoaction bs-calltoaction-default\">
                    <div class=\"row\">
                        <div class=\"col-md-9 cta-contents\">
                            <h1 class=\"cta-title\">Its a Call To Action</h1>
                            <div class=\"cta-desc\">
                             
                                <p>sujet: Describe the action here.</p>
                                <p>Description:    Describe the action here.</p>
                                <p>Date:    Describe the action here.</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 cta-button\">
                            <a href=\"#\" class=\"btn btn-lg btn-block btn-default\">Participer</a>
                        </div>
                     </div>
                </div>

                <div class=\"bs-calltoaction bs-calltoaction-primary\">
                    <div class=\"row\">
                          <div class=\"col-md-9 cta-contents\">
                            <h1 class=\"cta-title\">Its a Call To Action</h1>
                            <div class=\"cta-desc\">
                             
                                <p>sujet: Describe the action here.</p>
                                <p>Description:    Describe the action here.</p>
                                <p>Date:    Describe the action here.</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 cta-button\">
                            <a href=\"#\" class=\"btn btn-lg btn-block btn-primary\">Participer</a>
                        </div>
                     </div>
                </div>

                <div class=\"bs-calltoaction bs-calltoaction-info\">
                    <div class=\"row\">
                        <div class=\"col-md-9 cta-contents\">
                            <h1 class=\"cta-title\">Its a Call To Action</h1>
                            <div class=\"cta-desc\">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 cta-button\">
                            <a href=\"#\" class=\"btn btn-lg btn-block btn-info\">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class=\"bs-calltoaction bs-calltoaction-success\">
                    <div class=\"row\">
                        <div class=\"col-md-9 cta-contents\">
                            <h1 class=\"cta-title\">Its a Call To Action</h1>
                            <div class=\"cta-desc\">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 cta-button\">
                            <a href=\"#\" class=\"btn btn-lg btn-block btn-success\">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class=\"bs-calltoaction bs-calltoaction-warning\">
                    <div class=\"row\">
                        <div class=\"col-md-9 cta-contents\">
                            <h1 class=\"cta-title\">Its a Call To Action</h1>
                            <div class=\"cta-desc\">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 cta-button\">
                            <a href=\"#\" class=\"btn btn-lg btn-block btn-warning\">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class=\"bs-calltoaction bs-calltoaction-danger\">
                    <div class=\"row\">
                        <div class=\"col-md-9 cta-contents\">
                            <h1 class=\"cta-title\">Its a Call To Action</h1>
                            <div class=\"cta-desc\">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class=\"col-md-3 cta-button\">
                            <a href=\"#\" class=\"btn btn-lg btn-block btn-danger\">Go for It!</a>
                        </div>
                     </div>
                </div>

            </div>
        </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Comment:rechercherForum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 34,  59 => 30,  44 => 18,  35 => 12,  30 => 9,  26 => 8,  19 => 3,);
    }
}
/* {# empty Twig template #}*/
/* {# empty Twig template #}*/
/* */
/* <form method="POST">*/
/*     titre <input type="text" name="search"/>*/
/*     <input type="submit" value="rechercher"/>*/
/* </form>*/
/* {% for m in mds %}*/
/*      <table border ="0" >*/
/*         <tr>*/
/*             <td> <strong> Sujet</strong>  </td>*/
/*         <td>  {{m.titreDuForum }}   </td><br></br>*/
/*     </tr>*/
/*            */
/*         <tr>*/
/*             <td><strong>Description</strong></td>*/
/*             <td>*/
/*         {{m.description}}*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><strong> Date</strong> </td>*/
/* */
/*             <td>*/
/*       */
/*             </td>*/
/*         </tr>*/
/* */
/*      <tr>*/
/*         <td> <a href="{{path("repondre_forum",{'id':m.id})}}"><input type="submit" value="participer a ce forum"/></a></td>*/
/*         </tr>*/
/*        */
/*         {% endfor %}*/
/* </table>*/
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/* <meta charset="UTF-8">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <title>Bootstrap - Prebuilt Layout</title>*/
/* */
/* <!-- Bootstrap -->*/
/* <link href="../css/bootstrap.css" rel="stylesheet">*/
/* <link href="../../workspace/baby/css/go.css" rel="stylesheet" type="text/css">*/
/* */
/* <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/* <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/* <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <div class="container">*/
/*             <div class="col-sm-12">*/
/* */
/*                 <div class="bs-calltoaction bs-calltoaction-default">*/
/*                     <div class="row">*/
/*                         <div class="col-md-9 cta-contents">*/
/*                             <h1 class="cta-title">Its a Call To Action</h1>*/
/*                             <div class="cta-desc">*/
/*                              */
/*                                 <p>sujet: Describe the action here.</p>*/
/*                                 <p>Description:    Describe the action here.</p>*/
/*                                 <p>Date:    Describe the action here.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3 cta-button">*/
/*                             <a href="#" class="btn btn-lg btn-block btn-default">Participer</a>*/
/*                         </div>*/
/*                      </div>*/
/*                 </div>*/
/* */
/*                 <div class="bs-calltoaction bs-calltoaction-primary">*/
/*                     <div class="row">*/
/*                           <div class="col-md-9 cta-contents">*/
/*                             <h1 class="cta-title">Its a Call To Action</h1>*/
/*                             <div class="cta-desc">*/
/*                              */
/*                                 <p>sujet: Describe the action here.</p>*/
/*                                 <p>Description:    Describe the action here.</p>*/
/*                                 <p>Date:    Describe the action here.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3 cta-button">*/
/*                             <a href="#" class="btn btn-lg btn-block btn-primary">Participer</a>*/
/*                         </div>*/
/*                      </div>*/
/*                 </div>*/
/* */
/*                 <div class="bs-calltoaction bs-calltoaction-info">*/
/*                     <div class="row">*/
/*                         <div class="col-md-9 cta-contents">*/
/*                             <h1 class="cta-title">Its a Call To Action</h1>*/
/*                             <div class="cta-desc">*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3 cta-button">*/
/*                             <a href="#" class="btn btn-lg btn-block btn-info">Go for It!</a>*/
/*                         </div>*/
/*                      </div>*/
/*                 </div>*/
/* */
/*                 <div class="bs-calltoaction bs-calltoaction-success">*/
/*                     <div class="row">*/
/*                         <div class="col-md-9 cta-contents">*/
/*                             <h1 class="cta-title">Its a Call To Action</h1>*/
/*                             <div class="cta-desc">*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3 cta-button">*/
/*                             <a href="#" class="btn btn-lg btn-block btn-success">Go for It!</a>*/
/*                         </div>*/
/*                      </div>*/
/*                 </div>*/
/* */
/*                 <div class="bs-calltoaction bs-calltoaction-warning">*/
/*                     <div class="row">*/
/*                         <div class="col-md-9 cta-contents">*/
/*                             <h1 class="cta-title">Its a Call To Action</h1>*/
/*                             <div class="cta-desc">*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3 cta-button">*/
/*                             <a href="#" class="btn btn-lg btn-block btn-warning">Go for It!</a>*/
/*                         </div>*/
/*                      </div>*/
/*                 </div>*/
/* */
/*                 <div class="bs-calltoaction bs-calltoaction-danger">*/
/*                     <div class="row">*/
/*                         <div class="col-md-9 cta-contents">*/
/*                             <h1 class="cta-title">Its a Call To Action</h1>*/
/*                             <div class="cta-desc">*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                                 <p>Describe the action here.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-3 cta-button">*/
/*                             <a href="#" class="btn btn-lg btn-block btn-danger">Go for It!</a>*/
/*                         </div>*/
/*                      </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* </body>*/
/* </html>*/
/* */
