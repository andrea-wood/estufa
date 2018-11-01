<?php

/* :default:nutrientes.html.twig */
class __TwigTemplate_a56738643c613febb68a3421c04e1ab1fa60e7a2bc1d6e116a6f47c3b5f858fb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:nutrientes.html.twig", 1);
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
      <li class=\"active\">Nutrientes</li>
    </ol>
    
    <div class=\"content\">
  \t\t<h3>Nutrientes</h3>
  \t\t<hr>
      
      <div class=\"jumbotron\">
        ";
        // line 13
        if ( !twig_test_empty(($context["nutrientes"] ?? null))) {
            // line 14
            echo "        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Nome do nutriente</th><th>Operações</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["nutrientes"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["nutriente"]) {
                // line 22
                echo "              <tr>
                <td><span class=\"glyphicon glyphicon-oil\" aria-hidden=\"true\"></span> <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutriente", array("id" => twig_get_attribute($this->env, $this->source, $context["nutriente"], "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nutriente"], "name", array()), "html", null, true);
                echo "</a></td>
                <td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutriente", array("id" => twig_get_attribute($this->env, $this->source, $context["nutriente"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
              </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nutriente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          </tbody>
        </table>
        ";
        }
        // line 30
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_nutriente");
        echo "\" role=\"button\" class=\"btn btn-primary add_nutriente_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar um nutriente</a>
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
        return ":default:nutrientes.html.twig";
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
        return new Twig_Source("", ":default:nutrientes.html.twig", "/home/vagrant/code/app/Resources/views/default/nutrientes.html.twig");
    }
}
