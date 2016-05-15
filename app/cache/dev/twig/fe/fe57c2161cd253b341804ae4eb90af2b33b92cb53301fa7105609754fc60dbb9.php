<?php

/* TFTpersonneBundle:Pronostic:resultatPronostic.html.twig */
class __TwigTemplate_0cea9f7e82e90a11da85b36f76067ae1bcb0ecd0d68389a5057bfc82008331f5 extends Twig_Template
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
        // line 2
        echo "qqqqq
    <center>
      <form method=\"POST\">   
 

      
       ";
        // line 8
        $context["var"] = 1;
        // line 9
        echo "           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mds"]) ? $context["mds"] : $this->getContext($context, "mds")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
               <table border=\"1\">
                   <tr>
        <td>
           id jeu : 
        </td>
        <td>
          id utilisateur
        </td>
        <td>
          prix
        </td>
        <td>
           choix 
        
           </td>
            <td>
           resultat 
        
           </td>
      
      
    </tr>  
               <tr>
            <td>
              ";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 41
            echo "            </td> 
            <td>
              ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 46
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 47
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 49
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 50
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 52
            echo "            </td>
            <td>
               ";
            // line 54
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 56
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 57
                echo "                    gagné
                   ";
            }
            // line 59
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 62
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 63
            echo " 
                       ";
            // line 64
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches1", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 65
            echo "                   
                   
             ";
            // line 68
            echo "            </td>
               <br><br>
          </tr>
          
          
            <tr>
            <td>
              ";
            // line 75
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 77
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 82
            echo "            </td> 
            <td>
              ";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 87
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 88
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 90
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 91
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 93
            echo "            </td>
            <td>
               ";
            // line 95
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 97
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 98
                echo "                    gagné
                   ";
            }
            // line 100
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 103
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 104
            echo " 
                       ";
            // line 105
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches2", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 106
            echo "                   
                   
             ";
            // line 109
            echo "            </td>
               <br>
          </tr>
          
          
            <tr>
            <td>
              ";
            // line 116
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 118
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 123
            echo "            </td> 
            <td>
              ";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 128
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 129
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 131
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 132
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 134
            echo "            </td>
            <td>
               ";
            // line 136
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 138
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 139
                echo "                    gagné
                   ";
            }
            // line 141
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 144
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 145
            echo " 
                       ";
            // line 146
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches3", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 147
            echo "                   
                   
             ";
            // line 150
            echo "            </td>
               <br><br>
          </tr>
          
          
            <tr>
            <td>
              ";
            // line 157
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 159
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 164
            echo "            </td> 
            <td>
              ";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 169
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 170
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 172
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 173
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 175
            echo "            </td>
            <td>
               ";
            // line 177
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 179
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 180
                echo "                    gagné
                   ";
            }
            // line 182
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 185
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 186
            echo " 
                       ";
            // line 187
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches4", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 188
            echo "                   
                   
             ";
            // line 191
            echo "            </td>
               <br>
          </tr>
          
            <tr>
            <td>
              ";
            // line 197
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 199
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 204
            echo "            </td> 
            <td>
              ";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 209
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 210
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 212
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 213
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 215
            echo "            </td>
            <td>
               ";
            // line 217
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 219
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 220
                echo "                    gagné
                   ";
            }
            // line 222
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 225
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 226
            echo " 
                       ";
            // line 227
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches5", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 228
            echo "                   
                   
             ";
            // line 231
            echo "            </td>
               <br><br>
          </tr>
          
            <tr>
            <td>
              ";
            // line 237
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 239
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 244
            echo "            </td> 
            <td>
              ";
            // line 246
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 249
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 250
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 252
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 253
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 255
            echo "            </td>
            <td>
               ";
            // line 257
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 259
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 260
                echo "                    gagné
                   ";
            }
            // line 262
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 265
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 266
            echo " 
                       ";
            // line 267
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches6", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 268
            echo "                   
                   
             ";
            // line 271
            echo "            </td>
               <br>
          </tr>
          
          
            <tr>
            <td>
              ";
            // line 278
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 280
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 285
            echo "            </td> 
            <td>
              ";
            // line 287
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 290
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 291
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 293
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 294
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 296
            echo "            </td>
            <td>
               ";
            // line 298
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 300
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 301
                echo "                    gagné
                   ";
            }
            // line 303
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 306
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 307
            echo " 
                       ";
            // line 308
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches7", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 309
            echo "                   
                   
             ";
            // line 312
            echo "            </td>
            <br>
          </tr>
          
            <tr>
            <td>
              ";
            // line 318
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 320
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 325
            echo "            </td> 
            <td>
              ";
            // line 327
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 330
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 331
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 333
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 334
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 336
            echo "            </td>
            <td>
               ";
            // line 338
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 340
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 341
                echo "                    gagné
                   ";
            }
            // line 343
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 346
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 347
            echo " 
                       ";
            // line 348
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches8", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 349
            echo "                   
                   
             ";
            // line 352
            echo "            </td>
               <br><br>
          </tr>
          
            <tr>
            <td>
              ";
            // line 358
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 360
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 365
            echo "            </td> 
            <td>
              ";
            // line 367
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 370
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 371
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 373
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 374
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 376
            echo "            </td>
            <td>
               ";
            // line 378
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 380
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 381
                echo "                    gagné
                   ";
            }
            // line 383
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 386
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 387
            echo " 
                       ";
            // line 388
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches9", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 389
            echo "                   
                   
             ";
            // line 392
            echo "            </td>
               
          </tr>
          
            <tr>
            <td>
              ";
            // line 398
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "idjoueur1", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 vs
                 ";
            // line 400
            echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "idjeu", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "idjoueur2", array()), "nom", array())) : ("")), "html", null, true);
            echo " 
                 
            </td> 
            <td>
            ";
            // line 405
            echo "            </td> 
            <td>
              ";
            // line 407
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prix", array()), "html", null, true);
            echo " 
            </td>
             <td>
                 ";
            // line 410
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) {
                // line 411
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix1", array()), "html", null, true);
                echo "
";
            }
            // line 413
            echo "     ";
            if (((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 2)) {
                // line 414
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "choix2", array()), "html", null, true);
                echo "
";
            }
            // line 416
            echo "            </td>
            <td>
               ";
            // line 418
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "resultat", array()) === "")) : (""))) {
                echo " En Attente
                   ";
            }
            // line 420
            echo "                ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                // line 421
                echo "                    gagné
                   ";
            }
            // line 423
            echo "                  ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a gagné
                      
                   ";
            }
            // line 426
            echo "                   ";
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "resultat", array()) === "1") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 2))) : (""))) {
                echo " a perdu
 ";
            }
            // line 427
            echo " 
                       ";
            // line 428
            if ((($this->getAttribute($context["m"], "idjeu", array())) ? (((($this->getAttribute($this->getAttribute($this->getAttribute($context["m"], "idjeu", array()), "idmatches10", array()), "resultat", array()) === "2") && ((isset($context["var"]) ? $context["var"] : $this->getContext($context, "var")) === 1)) && ($this->getAttribute($context["m"], "choix1", array()) === 1))) : (""))) {
                echo " a perdu
                   ";
            }
            // line 429
            echo "                   
                   
             ";
            // line 432
            echo "            </td>
               <br>
          </tr>
               </table>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 437
        echo "           ";
        // line 438
        echo "        
       
      
      

            
            
            
           

   
            
</form>
</center> ";
    }

    public function getTemplateName()
    {
        return "TFTpersonneBundle:Pronostic:resultatPronostic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  948 => 438,  946 => 437,  936 => 432,  932 => 429,  927 => 428,  924 => 427,  918 => 426,  911 => 423,  907 => 421,  904 => 420,  899 => 418,  895 => 416,  889 => 414,  886 => 413,  880 => 411,  878 => 410,  872 => 407,  868 => 405,  861 => 400,  856 => 398,  848 => 392,  844 => 389,  839 => 388,  836 => 387,  830 => 386,  823 => 383,  819 => 381,  816 => 380,  811 => 378,  807 => 376,  801 => 374,  798 => 373,  792 => 371,  790 => 370,  784 => 367,  780 => 365,  773 => 360,  768 => 358,  760 => 352,  756 => 349,  751 => 348,  748 => 347,  742 => 346,  735 => 343,  731 => 341,  728 => 340,  723 => 338,  719 => 336,  713 => 334,  710 => 333,  704 => 331,  702 => 330,  696 => 327,  692 => 325,  685 => 320,  680 => 318,  672 => 312,  668 => 309,  663 => 308,  660 => 307,  654 => 306,  647 => 303,  643 => 301,  640 => 300,  635 => 298,  631 => 296,  625 => 294,  622 => 293,  616 => 291,  614 => 290,  608 => 287,  604 => 285,  597 => 280,  592 => 278,  583 => 271,  579 => 268,  574 => 267,  571 => 266,  565 => 265,  558 => 262,  554 => 260,  551 => 259,  546 => 257,  542 => 255,  536 => 253,  533 => 252,  527 => 250,  525 => 249,  519 => 246,  515 => 244,  508 => 239,  503 => 237,  495 => 231,  491 => 228,  486 => 227,  483 => 226,  477 => 225,  470 => 222,  466 => 220,  463 => 219,  458 => 217,  454 => 215,  448 => 213,  445 => 212,  439 => 210,  437 => 209,  431 => 206,  427 => 204,  420 => 199,  415 => 197,  407 => 191,  403 => 188,  398 => 187,  395 => 186,  389 => 185,  382 => 182,  378 => 180,  375 => 179,  370 => 177,  366 => 175,  360 => 173,  357 => 172,  351 => 170,  349 => 169,  343 => 166,  339 => 164,  332 => 159,  327 => 157,  318 => 150,  314 => 147,  309 => 146,  306 => 145,  300 => 144,  293 => 141,  289 => 139,  286 => 138,  281 => 136,  277 => 134,  271 => 132,  268 => 131,  262 => 129,  260 => 128,  254 => 125,  250 => 123,  243 => 118,  238 => 116,  229 => 109,  225 => 106,  220 => 105,  217 => 104,  211 => 103,  204 => 100,  200 => 98,  197 => 97,  192 => 95,  188 => 93,  182 => 91,  179 => 90,  173 => 88,  171 => 87,  165 => 84,  161 => 82,  154 => 77,  149 => 75,  140 => 68,  136 => 65,  131 => 64,  128 => 63,  122 => 62,  115 => 59,  111 => 57,  108 => 56,  103 => 54,  99 => 52,  93 => 50,  90 => 49,  84 => 47,  82 => 46,  76 => 43,  72 => 41,  65 => 36,  60 => 34,  29 => 9,  27 => 8,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* qqqqq*/
/*     <center>*/
/*       <form method="POST">   */
/*  */
/* */
/*       */
/*        {% set var = 1 %}*/
/*            {% for m in mds%} */
/*                <table border="1">*/
/*                    <tr>*/
/*         <td>*/
/*            id jeu : */
/*         </td>*/
/*         <td>*/
/*           id utilisateur*/
/*         </td>*/
/*         <td>*/
/*           prix*/
/*         </td>*/
/*         <td>*/
/*            choix */
/*         */
/*            </td>*/
/*             <td>*/
/*            resultat */
/*         */
/*            </td>*/
/*       */
/*       */
/*     </tr>  */
/*                <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches1.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches1.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches1.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches1.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches1.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches1.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches1.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br><br>*/
/*           </tr>*/
/*           */
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches2.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches2.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches2.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches2.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches2.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches2.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches2.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br>*/
/*           </tr>*/
/*           */
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches3.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches3.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches3.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches3.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches3.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches3.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches3.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br><br>*/
/*           </tr>*/
/*           */
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches4.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches4.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches4.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches4.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches4.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches4.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches4.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br>*/
/*           </tr>*/
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches5.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches5.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches5.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches5.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches5.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches5.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches5.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br><br>*/
/*           </tr>*/
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches6.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches6.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches6.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches6.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches6.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches6.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches6.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br>*/
/*           </tr>*/
/*           */
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches7.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches7.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches7.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches7.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches7.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches7.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches7.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*             <br>*/
/*           </tr>*/
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches8.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches8.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches8.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches8.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches8.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches8.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches8.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br><br>*/
/*           </tr>*/
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches9.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches9.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches9.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches9.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches9.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches9.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches9.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                */
/*           </tr>*/
/*           */
/*             <tr>*/
/*             <td>*/
/*               {{ m.idjeu ? m.idjeu.idmatches10.idjoueur1.nom}} */
/*                  vs*/
/*                  {{ m.idjeu ? m.idjeu.idmatches10.idjoueur2.nom}} */
/*                  */
/*             </td> */
/*             <td>*/
/*             {#  {{m.idutilisateur.nom}} #}*/
/*             </td> */
/*             <td>*/
/*               {{m.prix}} */
/*             </td>*/
/*              <td>*/
/*                  {% if var is sameas(1) %}*/
/*               {{ m.choix1 }}*/
/* {% endif %}*/
/*      {% if var is sameas(2) %}*/
/*               {{ m.choix2 }}*/
/* {% endif %}*/
/*             </td>*/
/*             <td>*/
/*                {% if m.idjeu ? m.idjeu.idmatches10.resultat is sameas("") %} En Attente*/
/*                    {% endif %}*/
/*                 {% if m.idjeu ? m.idjeu.idmatches10.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (1)%}*/
/*                     gagné*/
/*                    {% endif %}*/
/*                   {% if m.idjeu ? m.idjeu.idmatches10.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (2)%} a gagné*/
/*                       */
/*                    {% endif %}*/
/*                    {% if m.idjeu ? m.idjeu.idmatches10.resultat is sameas("1") and var is sameas(1) and m.choix1 is sameas (2)%} a perdu*/
/*  {% endif %} */
/*                        {% if m.idjeu ? m.idjeu.idmatches10.resultat is sameas("2") and var is sameas(1) and m.choix1 is sameas (1)%} a perdu*/
/*                    {% endif %}                   */
/*                    */
/*              {# {{m.idjeu.idmatches.resultat}} #}*/
/*             </td>*/
/*                <br>*/
/*           </tr>*/
/*                </table>*/
/*           {% endfor %}*/
/*            {# <INPUT type="text" name="prix">#}*/
/*         */
/*        */
/*       */
/*       */
/* */
/*             */
/*             */
/*             */
/*            */
/* */
/*    */
/*             */
/* </form>*/
/* </center> */
