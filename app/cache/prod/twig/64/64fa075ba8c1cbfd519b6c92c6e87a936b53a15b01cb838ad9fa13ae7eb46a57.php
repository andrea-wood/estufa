<?php

/* :print:ciclo.html.twig */
class __TwigTemplate_b1a78df9e6eec8088ed81d143c48cac328ae2fe3d43ce0854454b3f60e0023d2 extends Twig_Template
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
        $context["months"] = array();
        // line 17
        echo "
        ";
        // line 18
        $context["endDate"] = 0;
        // line 19
        echo "
        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "isEnded", array())) {
            // line 21
            echo "
          ";
            // line 22
            $context["endDate"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "endedAt", array()), "U");
            // line 23
            echo "
        ";
        } else {
            // line 25
            echo "          
          ";
            // line 26
            $context["endDate"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "updatedAt", array()), "U");
            // line 27
            echo "
          ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                // line 29
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) > 1)) {
                    // line 30
                    echo "              ";
                    $context["endProduto"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) . " days");
                    // line 31
                    echo "            ";
                } else {
                    // line 32
                    echo "              ";
                    $context["endProduto"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) . " day");
                    // line 33
                    echo "            ";
                }
                // line 34
                echo "            ";
                if ((twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), ($context["endProduto"] ?? null)), "U") > ($context["endDate"] ?? null))) {
                    // line 35
                    echo "                 ";
                    $context["endDate"] = twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), ($context["endProduto"] ?? null)), "U");
                    // line 36
                    echo "            ";
                }
                // line 37
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "U"), ($context["endDate"] ?? null), 86400));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 42
            echo "          ";
            $context["month"] = twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, $context["day"], "none", "none", null, "Europe/Lisbon", "MMMM y"));
            // line 43
            echo "          ";
            $context["monthInfo"] = array("name" => ($context["month"] ?? null), "daysInMonth" => twig_date_format_filter($this->env, $context["day"], "t"), "currentMonth" => twig_date_format_filter($this->env, $context["day"], "m"), "currentYear" => twig_date_format_filter($this->env, $context["day"], "Y"));
            // line 44
            echo "          ";
            if (!twig_in_filter(($context["monthInfo"] ?? null), ($context["months"] ?? null))) {
                // line 45
                echo "              ";
                $context["months"] = twig_array_merge(($context["months"] ?? null), array(0 => ($context["monthInfo"] ?? null)));
                // line 46
                echo "          ";
            }
            // line 47
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["months"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["k"] => $context["month"]) {
            // line 50
            echo "          <page size=\"A4\">
            <h1>Controle de tratamentos, colheitas e sementeiras</h1>
            <table class=\"table table-bordered\"> 
              <thead> 
                <tr> 
                  <th colspan=\"";
            // line 55
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
            // line 61
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())) > 0)) {
                // line 62
                echo "                    <td colspan=\"";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())), "html", null, true);
                echo "\">Tratamentos</td>
                  ";
            }
            // line 64
            echo "                  <td>Colheitas</td>
                  <td>Data de sementeira</td>
                  <td rowspan=\"2\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["month"], "name", array()), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                  ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                // line 70
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
            // line 72
            echo "                  <td rowspan=\"2\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "type", array()), "name", array())), "html", null, true);
            echo "</td>
                  <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "type", array()), "name", array())), "html", null, true);
            echo "</td>
                </tr>
                <tr>
                  <td>dd/mm/aa</td>
                  <td>Dia</td>
                </tr>
                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["month"], "daysInMonth", array())));
            foreach ($context['_seq'] as $context["index"] => $context["day"]) {
                // line 80
                echo "                  ";
                $context["currentDate"] = ((((twig_get_attribute($this->env, $this->source, $context["month"], "currentYear", array()) . "-") . twig_get_attribute($this->env, $this->source, $context["month"], "currentMonth", array())) . "-") . $context["day"]);
                // line 81
                echo "
                  <tr>   
                    ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "isEnded", array())) {
                    // line 84
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                        // line 85
                        echo "                        <td ";
                        if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "endedAt", array()), "Y-m-d")))) {
                            echo "class=\"danger\"";
                        }
                        echo ">
                        ";
                        // line 86
                        if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "endedAt", array()), "Y-m-d")))) {
                            // line 87
                            echo "                          X
                        ";
                        }
                        // line 89
                        echo "                        </td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                    ";
                } else {
                    // line 92
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                        // line 93
                        echo "                        ";
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) > 1)) {
                            // line 94
                            echo "                          ";
                            $context["endProduto"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) . " days");
                            // line 95
                            echo "                        ";
                        } else {
                            // line 96
                            echo "                          ";
                            $context["endProduto"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "days", array()) . " day");
                            // line 97
                            echo "                        ";
                        }
                        // line 98
                        echo "                        <td ";
                        if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), ($context["endProduto"] ?? null)), "Y-m-d")))) {
                            echo "class=\"danger\"";
                        }
                        echo ">
                        ";
                        // line 99
                        if (((twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") >= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "Y-m-d")) && (twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "Y-m-d") <= twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), ($context["endProduto"] ?? null)), "Y-m-d")))) {
                            // line 100
                            echo "                          X  
                        ";
                        }
                        // line 102
                        echo "                        </td>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 104
                    echo "                    ";
                }
                // line 105
                echo "                    <td>
                      ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "colheitas", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["clh"]) {
                    // line 107
                    echo "                          ";
                    if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clh"], "createdAt", array()), "d/m/Y") == twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "d/m/Y"))) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["clh"], "kg", array()), "html", null, true);
                        echo " KG ";
                    }
                    // line 108
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clh'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "                    </td>
                    <td ";
                // line 110
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y") == twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "d/m/Y"))) {
                    echo " class=\"bg-info\" ";
                }
                echo ">
                      ";
                // line 111
                if ((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y") == twig_date_format_filter($this->env, ($context["currentDate"] ?? null), "d/m/Y"))) {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "d/m/Y"), "html", null, true);
                    echo " ";
                }
                // line 112
                echo "                    </td>
                    <td>";
                // line 113
                echo twig_escape_filter($this->env, $context["day"], "html", null, true);
                echo "</td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "
                ";
            // line 117
            if ((twig_length_filter($this->env, ($context["months"] ?? null)) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()))) {
                // line 118
                echo "                <tr>
                  ";
                // line 119
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())) > 0)) {
                    // line 120
                    echo "                    <td colspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())), "html", null, true);
                    echo "\" style=\"text-align: left;\"><b>Totais</b></td>
                    <td>
                      ";
                    // line 122
                    $context["totais"] = 0;
                    // line 123
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "colheitas", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["clh"]) {
                        // line 124
                        echo "                        ";
                        $context["totais"] = (($context["totais"] ?? null) + twig_get_attribute($this->env, $this->source, $context["clh"], "kg", array()));
                        // line 125
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clh'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 126
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($context["totais"] ?? null), "html", null, true);
                    echo " KG
                    </td>
                    <td colspan=\"2\"></td>
                  ";
                } else {
                    // line 130
                    echo "                    <td colspan=\"";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "tratamentos", array())), "html", null, true);
                    echo "\" style=\"text-align: left;\"><b>Totais</b>
                      ";
                    // line 131
                    $context["totais"] = 0;
                    // line 132
                    echo "                      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "colheitas", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["clh"]) {
                        // line 133
                        echo "                        ";
                        $context["totais"] = (($context["totais"] ?? null) + twig_get_attribute($this->env, $this->source, $context["clh"], "kg", array()));
                        // line 134
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['clh'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 135
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($context["totais"] ?? null), "html", null, true);
                    echo " KG
                    </td>
                    <td colspan=\"3\"></td>
                  ";
                }
                // line 139
                echo "                </tr>
                ";
            }
            // line 141
            echo "              </tbody> 
            </table>
          </page>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "    </body>
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
        return ":print:ciclo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 9,  459 => 8,  452 => 7,  446 => 145,  429 => 141,  425 => 139,  417 => 135,  411 => 134,  408 => 133,  403 => 132,  401 => 131,  396 => 130,  388 => 126,  382 => 125,  379 => 124,  374 => 123,  372 => 122,  366 => 120,  364 => 119,  361 => 118,  359 => 117,  356 => 116,  347 => 113,  344 => 112,  338 => 111,  332 => 110,  329 => 109,  323 => 108,  316 => 107,  312 => 106,  309 => 105,  306 => 104,  299 => 102,  295 => 100,  293 => 99,  286 => 98,  283 => 97,  280 => 96,  277 => 95,  274 => 94,  271 => 93,  266 => 92,  263 => 91,  256 => 89,  252 => 87,  250 => 86,  243 => 85,  238 => 84,  236 => 83,  232 => 81,  229 => 80,  225 => 79,  216 => 73,  211 => 72,  200 => 70,  196 => 69,  190 => 66,  186 => 64,  180 => 62,  178 => 61,  165 => 55,  158 => 50,  141 => 49,  138 => 48,  132 => 47,  129 => 46,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  113 => 41,  110 => 40,  106 => 38,  100 => 37,  97 => 36,  94 => 35,  91 => 34,  88 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  72 => 28,  69 => 27,  67 => 26,  64 => 25,  60 => 23,  58 => 22,  55 => 21,  53 => 20,  50 => 19,  48 => 18,  45 => 17,  43 => 16,  39 => 14,  37 => 8,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":print:ciclo.html.twig", "/home/vagrant/code/app/Resources/views/print/ciclo.html.twig");
    }
}
