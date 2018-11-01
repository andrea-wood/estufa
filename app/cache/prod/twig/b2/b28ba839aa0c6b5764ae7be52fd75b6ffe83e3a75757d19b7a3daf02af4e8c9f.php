<?php

/* :default:calendar.html.twig */
class __TwigTemplate_26fdbaf6f74b297bbf2568d6c06cea3aa672a809c6f5735c3b8dcdca0240b5f6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
         ";
        // line 2
        $context["time"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ciclo"] ?? null), "createdAt", array()), "U");
        // line 3
        echo "
          <table>
            <thead>
              <tr>
                <th colspan=\"7\" class=\"center\">
                  ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["time"] ?? null), "F"), "html", null, true);
        echo "
                </th>
              </tr>
              <tr>
                <th width=\"12%\">Sunday</th>
                <th width=\"15%\">Monday</th>
                <th width=\"15%\">Tuesday</th>
                <th width=\"16%\">Wednesday</th>
                <th width=\"15%\">Thursday</th>
                <th width=\"15%\">Friday</th>
                <th width=\"12%\">Saturday</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              ";
        // line 23
        $context["daysInMonth"] = twig_date_format_filter($this->env, ($context["time"] ?? null), "t");
        // line 24
        echo "              ";
        $context["startDow"] = twig_date_format_filter($this->env, twig_date_format_filter($this->env, ($context["time"] ?? null), "F 1\\s\\t Y"), "w");
        // line 25
        echo "              ";
        $context["dow"] = ($context["startDow"] ?? null);
        // line 26
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["daysInMonth"] ?? null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 27
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", array()) && (($context["startDow"] ?? null) != 0))) {
                // line 28
                echo "                  <td colspan=\"";
                echo twig_escape_filter($this->env, ($context["startDow"] ?? null), "html", null, true);
                echo "\"></td>
                ";
            }
            // line 30
            echo "                <td>
                  <div>
                    <div>";
            // line 32
            echo twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</div>
                    <div>
                     ";
            // line 35
            echo "                    </div>
                  </div>
                </td>
                ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", array()) && (($context["dow"] ?? null) != 6))) {
                // line 39
                echo "                  <td colspan=\"";
                echo twig_escape_filter($this->env, (6 - ($context["dow"] ?? null)), "html", null, true);
                echo "\">&nbsp;</td>
                ";
            }
            // line 41
            echo "                ";
            if ((($context["dow"] ?? null) == 6)) {
                // line 42
                echo "                  ";
                $context["dow"] = 0;
                // line 43
                echo "                </tr>
                <tr>
                ";
            } else {
                // line 46
                echo "                  ";
                $context["dow"] = (($context["dow"] ?? null) + 1);
                // line 47
                echo "                ";
            }
            // line 48
            echo "              ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "              </tr>
            </tbody>
          </table>";
    }

    public function getTemplateName()
    {
        return ":default:calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 49,  127 => 48,  124 => 47,  121 => 46,  116 => 43,  113 => 42,  110 => 41,  104 => 39,  102 => 38,  97 => 35,  92 => 32,  88 => 30,  82 => 28,  79 => 27,  61 => 26,  58 => 25,  55 => 24,  53 => 23,  35 => 8,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:calendar.html.twig", "/home/vagrant/code/app/Resources/views/default/calendar.html.twig");
    }
}
