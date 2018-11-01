<?php

/* :default:sementes.html.twig */
class __TwigTemplate_40b50197a682519f590c53716533ff91088d6cae97fea6a9db6a707907540eaa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:sementes.html.twig", 1);
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
  \t\t<h3>Sementes</h3>
  \t\t<hr>
      <div class=\"jumbotron\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Nome da semente</th><th>Ultima atualização</th><th>Operações</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sementes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["semente"]) {
            // line 20
            echo "              <tr>
                <td><span class=\"glyphicon glyphicon-leaf\" aria-hidden=\"true\"></span> <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("semente", array("id" => twig_get_attribute($this->env, $this->source, $context["semente"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["semente"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["semente"], "updatedAt", array()), "d/m/Y - H:i"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("semente", array("id" => twig_get_attribute($this->env, $this->source, $context["semente"], "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span></a></td>
              </tr> 
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "          </tbody>
        </table>
        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_semente");
        echo "\" role=\"button\" class=\"btn btn-primary add_semente_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar uma tipo de semente</a>
      </div>
    </div>
";
    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 34
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:sementes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  95 => 33,  87 => 28,  83 => 26,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:sementes.html.twig", "/home/vagrant/code/app/Resources/views/default/sementes.html.twig");
    }
}
