<?php

/* :default:qrcode-list.html.twig */
class __TwigTemplate_66964a545848137fbb5a18b561142837fd4b6d8792a51af898dabca99df6a757 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:qrcode-list.html.twig", 1);
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
      <li class=\"active\">Lista Qrcode</li>
    </ol>
    
    <div class=\"content\">

      <h3>Lista Qrcode</h3>
      <hr>

      <div class=\"jumbotron\">
        <h3>Lista</h3>
        <hr>
        <div class=\"row text-center\">
          <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qrc_print_all");
        echo "\" title=\"Imprimir todos\" class=\"btn btn-default\">
            <span class=\"glyphicon glyphicon-print\" aria-hidden=\"true\"></span>
          </a>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>#</th><th>Mesa</th><th>Estufa</th><th>Qrcode</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mesas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mesa"]) {
            // line 30
            echo "                    <tr>
                      <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()), "html", null, true);
            echo "</th>
                      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "name", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "type", array()), "html", null, true);
            echo "</td>
                      <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qrcode_print", array("id" => twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-qrcode\" aria-hidden=\"true\"></span></a></td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mesa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                </tbody>
            </table>
        </div>
      </div>
 
    </div>

";
    }

    // line 46
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 47
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:qrcode-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 47,  109 => 46,  98 => 37,  89 => 34,  85 => 33,  81 => 32,  77 => 31,  74 => 30,  70 => 29,  55 => 17,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:qrcode-list.html.twig", "/home/vagrant/code/app/Resources/views/default/qrcode-list.html.twig");
    }
}
