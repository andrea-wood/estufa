<?php

/* :default:sementeiras.html.twig */
class __TwigTemplate_c5be37887668b28c03f94d61f59fd5f7acdf4edd58ecc8d996719a82cc23bcfb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:sementeiras.html.twig", 1);
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
      <li class=\"active\">Sementeiras</li>
    </ol>
    
    <div class=\"content\">
  \t\t<h3>Sementeiras</h3>
  \t\t<hr>
      <div class=\"jumbotron\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Id</th><th>Tipo</th><th>Mês<th>Data de sementeira</th><th>Operações</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sementeiras"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sementeira"]) {
            // line 20
            echo "              <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sementeira", array("id" => twig_get_attribute($this->env, $this->source, $context["sementeira"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-th\" aria-hidden=\"true\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sementeira"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sementeira"], "type", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sementeira"], "createdAt", array()), "none", "none", null, "Europe/Lisbon", "MMMM y")), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sementeira"], "createdAt", array()), "d/m/Y - H:i"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sementeira", array("id" => twig_get_attribute($this->env, $this->source, $context["sementeira"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sementeira'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "          </tbody>
        </table>
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_sementeira");
        echo "\" role=\"button\" class=\"btn btn-primary add_sementeira_link\">
        \t<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar uma sementeira
        </a>
      </div>
    </div>
";
    }

    // line 37
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 38
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:sementeiras.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 38,  105 => 37,  95 => 30,  91 => 28,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:sementeiras.html.twig", "/home/vagrant/code/app/Resources/views/default/sementeiras.html.twig");
    }
}
