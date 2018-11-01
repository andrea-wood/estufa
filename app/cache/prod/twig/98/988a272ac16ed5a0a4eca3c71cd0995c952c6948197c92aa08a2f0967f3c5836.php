<?php

/* :default:produtos.html.twig */
class __TwigTemplate_56cb404057e64ebd6ec699bd74d1b24eb6927b355aa5b8835d08c7452d335468 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:produtos.html.twig", 1);
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
      <li class=\"active\">Produtos</li>
    </ol>
    
    <div class=\"content\">
  \t\t<h3>Produtos</h3>
  \t\t<hr>
      ";
        // line 11
        if ( !twig_test_empty(($context["produtos"] ?? null))) {
            // line 12
            echo "      

      <div class=\"jumbotron\">
        <table class=\"table table-striped\">
          <thead>
            <tr>
              <th>Nome do produto</th><th>Dias de espera</th><th>Ultima atualização</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["produtos"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
                // line 23
                echo "              <tr>
                <td><span class=\"glyphicon glyphicon-oil\" aria-hidden=\"true\"></span> <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produto", array("id" => twig_get_attribute($this->env, $this->source, $context["produto"], "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "name", array()), "html", null, true);
                echo "</a></td>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "days", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produto"], "updatedAt", array()), "d/m/Y - H:i"), "html", null, true);
                echo "</td>
              </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          </tbody>
        </table>
        <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_produto");
            echo "\" role=\"button\" class=\"btn btn-primary add_produto_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar um produto</a>
      </div>
 
      
      ";
        }
        // line 36
        echo "    </div>


";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 42
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:produtos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  108 => 41,  101 => 36,  93 => 31,  89 => 29,  80 => 26,  76 => 25,  70 => 24,  67 => 23,  63 => 22,  51 => 12,  49 => 11,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:produtos.html.twig", "/home/vagrant/code/app/Resources/views/default/produtos.html.twig");
    }
}
