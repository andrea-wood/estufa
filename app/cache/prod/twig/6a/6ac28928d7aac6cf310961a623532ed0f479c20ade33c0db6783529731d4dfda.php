<?php

/* :default:estufa.html.twig */
class __TwigTemplate_69afade0e83eaadc3c28091ccb5f7a38b45e7e448c7c3d8055eafa3d5bf921cb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:estufa.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a></li>
      <li class=\"active\">Estufa da ";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["type"] ?? null)), "html", null, true);
        echo "</li>
    </ol>
    
    <div class=\"content\">
\t\t\t<h3>Estufa da ";
        // line 9
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["type"] ?? null)), "html", null, true);
        echo "</h3>
\t\t\t<hr>
\t      <!-- Main component for a primary marketing message or call to action -->
\t      <div class=\"jumbotron\">
\t      \t<div class=\"panel-group\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
\t        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mesas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mesa"]) {
            // line 15
            echo "\t\t\t\t  <div class=\"panel ";
            if ((twig_get_attribute($this->env, $this->source, $context["mesa"], "status", array()) == 0)) {
                echo "panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["mesa"], "status", array()) == 2)) {
                echo "panel-danger";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, $context["mesa"], "status", array()) == 1)) {
                echo "panel-success";
            }
            echo "\">
\t\t\t\t    <div class=\"panel-heading\" role=\"tab\" id=\"heading";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t      <h4 class=\"panel-title\">
\t\t\t\t        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
\t\t\t\t         ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "name", array()), "html", null, true);
            echo "
\t\t\t\t        </a>
\t\t\t\t      </h4>
\t\t\t\t    </div>
\t\t\t\t    <div id=\"collapse";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingOne\">
\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t      \t<div class=\"row\">
\t\t\t\t      \t\t<ul>
\t\t\t        \t\t\t";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mesa"], "ciclos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
                // line 28
                echo "\t\t\t      \t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["ciclo"], "isActive", array())) {
                    // line 29
                    echo "\t\t      \t\t\t\t\t\t\t<li><b>Sementeira</b></li>
\t\t\t      \t\t\t\t\t\t<ul>
\t\t\t      \t\t\t\t\t\t\t<li>
\t\t\t      \t\t\t\t\t\t\t";
                    // line 32
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["ciclo"], "sementeira", array()))) {
                        // line 33
                        echo "\t\t\t      \t\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ciclo"], "sementeira", array()), "createdAt", array()), "d/m/Y"), "html", null, true);
                        echo "
\t\t\t      \t\t\t\t\t\t\t";
                    } else {
                        // line 35
                        echo "\t\t\t      \t\t\t\t\t\t\t\t-
\t\t\t      \t\t\t\t\t\t\t";
                    }
                    // line 37
                    echo "\t\t\t      \t\t\t\t\t\t\t</li>
\t\t\t      \t\t\t\t\t\t</ul>
\t\t\t      \t\t\t\t\t\t<li><b>Plantaçao</b></li>
\t\t\t      \t\t\t\t\t\t<ul>
\t\t\t      \t\t\t\t\t\t\t<li>
                                                ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ciclo"], "createdAt", array()), "d/m/Y"), "html", null, true);
                    echo "
\t\t\t      \t\t\t\t\t\t\t</li>
\t\t\t      \t\t\t\t\t\t</ul>
\t\t\t      \t\t\t\t\t\t<li><b>Sementes</b></li>
\t\t\t      \t\t\t\t\t\t<ul>
\t\t\t      \t\t\t\t\t\t\t<li>
\t\t\t      \t\t\t\t\t\t\t\t";
                    // line 48
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ciclo"], "type", array()), "name", array()), "html", null, true);
                    echo "
\t\t\t      \t\t\t\t\t\t\t</li>
\t\t\t      \t\t\t\t\t\t</ul>
\t\t\t      \t\t\t\t\t";
                }
                // line 52
                echo "\t\t  \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t        \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mesa"], "ciclos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
                // line 54
                echo "\t\t\t      \t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["ciclo"], "isActive", array())) {
                    // line 55
                    echo "\t\t\t      \t\t\t\t\t\t<li><b>Produtos</b></li>
\t\t        \t\t\t\t\t\t<ul>
\t\t\t      \t\t\t\t\t\t";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ciclo"], "tratamentos", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                        // line 58
                        echo "\t\t\t      \t\t\t\t\t\t\t<li><b>";
                        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "name", array()), 0, 3), "html", null, true);
                        echo " : ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "diffExpirationDate", array(), "method"), "%R%a dias"), "html", null, true);
                        echo "</b></li>
\t\t\t      \t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "\t\t\t      \t\t\t\t\t\t</ul>
\t\t\t      \t\t\t\t\t";
                }
                // line 62
                echo "\t\t  \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "\t\t  \t\t\t\t\t\t<br>
\t\t\t        \t\t\t";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["mesa"], "ciclos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
                // line 65
                echo "\t\t\t      \t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["ciclo"], "isActive", array())) {
                    // line 66
                    echo "\t\t\t      \t\t\t\t\t <li><b>Colheitas</b></li>
\t\t        \t\t\t\t\t\t<ul>
\t\t\t      \t\t\t\t\t\t";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ciclo"], "colheitas", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["colheita"]) {
                        // line 69
                        echo "\t\t\t      \t\t\t\t\t\t\t<li><b>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colheita"], "kg", array()), "html", null, true);
                        echo " Quilos ( ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colheita"], "createdAt", array()), "d/m/Y"), "html", null, true);
                        echo " )</b></li>
\t\t\t      \t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colheita'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "\t\t\t      \t\t\t\t\t\t</ul>
\t\t\t      \t\t\t\t\t";
                }
                // line 73
                echo "\t\t  \t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "\t
\t\t  \t\t\t\t\t</ul>\t        \t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr>
\t\t\t\t\t  <div class=\"row text-center\">
\t\t\t\t\t  \t<a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesa", array("id" => twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()), "type" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "type", array())))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-plus\" style=\"color:#333;font-size: 20px;\" aria-hidden=\"true\"></span></a>
\t\t\t\t\t  </div>
\t\t\t\t      </div>
\t\t\t\t    </div>
\t\t\t\t  </div>
\t    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t    \t</div>
\t      </div>
      </div>
";
    }

    // line 89
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 90
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:estufa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 90,  254 => 89,  247 => 84,  235 => 78,  223 => 73,  219 => 71,  208 => 69,  204 => 68,  200 => 66,  197 => 65,  193 => 64,  190 => 63,  184 => 62,  180 => 60,  169 => 58,  165 => 57,  161 => 55,  158 => 54,  153 => 53,  147 => 52,  140 => 48,  131 => 42,  124 => 37,  120 => 35,  114 => 33,  112 => 32,  107 => 29,  104 => 28,  100 => 27,  93 => 23,  86 => 19,  82 => 18,  77 => 16,  62 => 15,  58 => 14,  50 => 9,  43 => 5,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:estufa.html.twig", "/home/vagrant/code/app/Resources/views/default/estufa.html.twig");
    }
}
