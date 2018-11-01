<?php

/* :print:month.html.twig */
class __TwigTemplate_470de9023dc90d99b17f814ef20bf7ff10b1102ae7d57cafeafea0548e73aa94 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
          ";
        // line 16
        $context["month"] = array("name" => twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, ($context["date"] ?? null), "none", "none", null, "Europe/Lisbon", "MMMM y")), "daysInMonth" => twig_date_format_filter($this->env, ($context["date"] ?? null), "t"), "currentMonth" => twig_date_format_filter($this->env, ($context["date"] ?? null), "m"), "currentYear" => twig_date_format_filter($this->env, ($context["date"] ?? null), "Y"));
        // line 17
        echo "          ";
        $context["totais"] = 0;
        // line 18
        echo "          <page size=\"A4\">
            <h1>Controle de tratamentos, colheitas e sementeiras</h1>
            <table class=\"table table-bordered\"> 
              <thead> 
                <tr> 
                  <th colspan=\"";
        // line 23
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())) + 2), "html", null, true);
        echo "\" style=\"text-align: center;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "mesa", array()), "name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "mesa", array()), "type", array()), "html", null, true);
        echo "</th>
                  <th style=\"text-align: center;\">Data</th>
                </tr> 
              </thead> 
              <tbody style=\"text-align: center;font-weight: bold;\"> 
                <tr>
                  ";
        // line 29
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())) > 0)) {
            // line 30
            echo "                    <td colspan=\"";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())), "html", null, true);
            echo "\">Tratamentos</td>
                  ";
        }
        // line 32
        echo "                  <td>Colheitas</td>
                  <td>Data de sementeira</td>
                  <td rowspan=\"2\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["month"] ?? null), "name", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
            // line 38
            echo "                    <td rowspan=\"2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()), "html", null, true);
            echo "</td>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                  <td rowspan=\"2\">";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "type", array()), "name", array())), "html", null, true);
        echo "</td>
                  <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "type", array()), "name", array())), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                  <td>
                  \t";
        // line 45
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "sementeira", array()))) {
            // line 46
            echo "                          ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "sementeira", array()), "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "
                    ";
        } else {
            // line 48
            echo "                    \t ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y"), "html", null, true);
            echo "
                    ";
        }
        // line 50
        echo "                  </td>
                  <td>Dia</td>
                </tr>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["month"] ?? null), "daysInMonth", array())));
        foreach ($context['_seq'] as $context["index"] => $context["day"]) {
            // line 54
            echo "                  ";
            $context["currentDate"] = ((((twig_get_attribute($this->env, $this->source, ($context["month"] ?? null), "currentYear", array()) . "-") . twig_get_attribute($this->env, $this->source, ($context["month"] ?? null), "currentMonth", array())) . "-") . $context["day"]);
            // line 55
            echo "
                  <tr>   
                    ";
            // line 57
            if (twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "isEnded", array())) {
                // line 58
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                    // line 59
                    echo "                        <td ";
                    if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "endedAt", array()), "Y-m-d")))) {
                        echo "class=\"danger\"";
                    }
                    echo ">
                        ";
                    // line 60
                    if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "endedAt", array()), "Y-m-d")))) {
                        // line 61
                        echo "                          X
                        ";
                    }
                    // line 63
                    echo "                        </td>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                    ";
            } else {
                // line 66
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                    // line 67
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) > 1)) {
                        // line 68
                        echo "                          ";
                        $context["endProduto"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) . " days");
                        // line 69
                        echo "                        ";
                    } else {
                        // line 70
                        echo "                          ";
                        $context["endProduto"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) . " day");
                        // line 71
                        echo "                        ";
                    }
                    // line 72
                    echo "                        <td ";
                    if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), ($context["endProduto"] ?? null)), "Y-m-d")))) {
                        echo "class=\"danger\"";
                    }
                    echo ">
                        ";
                    // line 73
                    if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), ($context["endProduto"] ?? null)), "Y-m-d")))) {
                        // line 74
                        echo "                          X  
                        ";
                    }
                    // line 76
                    echo "                        </td>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "                    ";
            }
            // line 79
            echo "                    <td>
                      ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "colheitas", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["clh"]) {
                // line 81
                echo "                          ";
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clh"], "createdAt", array()), "d/m/Y") == twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "d/m/Y"))) {
                    echo " 
                              ";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clh"], "kg", array()), "html", null, true);
                    echo " KG 
                              ";
                    // line 83
                    $context["totais"] = (($context["totais"] ?? null) + twig_get_attribute($this->env, $this->source, $context["clh"], "kg", array()));
                    // line 84
                    echo "                          ";
                }
                // line 85
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clh'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                    </td>
                    <td ";
            // line 87
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y") == twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "d/m/Y"))) {
                echo " class=\"bg-info\" ";
            }
            echo ">
                      ";
            // line 88
            if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y") == twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "d/m/Y"))) {
                echo " ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y"), "html", null, true);
                echo " ";
            }
            // line 89
            echo "                    </td>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</td>
                  </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                ";
        if ((($context["totais"] ?? null) > 0)) {
            // line 94
            echo "                  <tr>
                    ";
            // line 95
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())) > 0)) {
                // line 96
                echo "                      <td colspan=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())), "html", null, true);
                echo "\" style=\"text-align: left;\"><b>Totais</b></td>
                      <td>
                       ";
                // line 98
                echo twig_escape_filter($this->env, ($context["totais"] ?? null), "html", null, true);
                echo " KG
                      </td>
                      <td colspan=\"2\"></td>
                    ";
            } else {
                // line 102
                echo "                      <td colspan=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())), "html", null, true);
                echo "\" style=\"text-align: left;\"><b>Totais</b>
                       ";
                // line 103
                echo twig_escape_filter($this->env, ($context["totais"] ?? null), "html", null, true);
                echo " KG
                      </td>
                      <td colspan=\"3\"></td>
                    ";
            }
            // line 107
            echo "                  </tr>
                 ";
        }
        // line 109
        echo "              </tbody> 
            </table>
          </page>

    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Quinta S. Antonio ";
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "          <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
          <link rel=\"stylesheet\" href=\"/css/print.css\">
        ";
    }

    public function getTemplateName()
    {
        return ":print:month.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 9,  324 => 8,  317 => 7,  307 => 109,  303 => 107,  296 => 103,  291 => 102,  284 => 98,  278 => 96,  276 => 95,  273 => 94,  270 => 93,  261 => 90,  258 => 89,  252 => 88,  246 => 87,  243 => 86,  237 => 85,  234 => 84,  232 => 83,  228 => 82,  223 => 81,  219 => 80,  216 => 79,  213 => 78,  206 => 76,  202 => 74,  200 => 73,  193 => 72,  190 => 71,  187 => 70,  184 => 69,  181 => 68,  178 => 67,  173 => 66,  170 => 65,  163 => 63,  159 => 61,  157 => 60,  150 => 59,  145 => 58,  143 => 57,  139 => 55,  136 => 54,  132 => 53,  127 => 50,  121 => 48,  115 => 46,  113 => 45,  106 => 41,  101 => 40,  90 => 38,  86 => 37,  80 => 34,  76 => 32,  70 => 30,  68 => 29,  55 => 23,  48 => 18,  45 => 17,  43 => 16,  39 => 14,  37 => 8,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":print:month.html.twig", "/home/vagrant/code/app/Resources/views/print/month.html.twig");
    }
}
