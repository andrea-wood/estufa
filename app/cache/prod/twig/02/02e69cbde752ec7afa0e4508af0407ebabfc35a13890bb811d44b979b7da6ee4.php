<?php

/* :default:tanques.html.twig */
class __TwigTemplate_85cb13d8c5759d940053dbd31f1ac9397ed8cb9efa5efcb45d4a6d4721d6d0d5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:tanques.html.twig", 1);
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
      <li class=\"active\">Tanques</li>
    </ol>
    
    <div class=\"content\">
  \t\t<h3>Tanques</h3>
  \t\t<hr>
      
      <div class=\"jumbotron\">
        ";
        // line 13
        if ( !twig_test_empty(($context["tanques"] ?? null))) {
            // line 14
            echo "        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Nome do tanque</th><th>Operações</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tanques"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tanque"]) {
                // line 22
                echo "              <tr>
                <td><span class=\"glyphicon glyphicon-tint\" aria-hidden=\"true\"></span> <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tanque", array("id" => twig_get_attribute($this->env, $this->source, $context["tanque"], "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tanque"], "name", array()), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tanque", array("id" => twig_get_attribute($this->env, $this->source, $context["tanque"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
              </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tanque'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          </tbody>
        </table>
        ";
        }
        // line 30
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_tanque");
        echo "\" role=\"button\" class=\"btn btn-primary add_tanque_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar um tanque</a>
      </div>
      
    </div>
";
    }

    // line 36
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 37
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:tanques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  99 => 36,  89 => 30,  84 => 27,  75 => 24,  69 => 23,  66 => 22,  62 => 21,  53 => 14,  51 => 13,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:tanques.html.twig", "/home/vagrant/code/app/Resources/views/default/tanques.html.twig");
    }
}
