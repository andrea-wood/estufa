<?php

/* :default:index.html.twig */
class __TwigTemplate_f57386d4fee051f079caa35a0babb132ef52ded3c43cf10bc0f17de6df60208c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "

    <div class=\"content\">
      <!-- Main component for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
            <div class=\"row\">
                  <div class=\"col-md-6 text-center\" style=\"margin-bottom:20px;\">
                        <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estufa", array("type" => "ana"));
        echo "\" ><span class=\"glyphicon glyphicon-home\" style=\"font-size:50px;\" aria-hidden=\"true\"></span></a>
                        <h3>Ana</h3>
                    </div>
                  <div class=\"col-md-6 text-center\" style=\"margin-bottom:20px;\">
                    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estufa", array("type" => "catarina"));
        echo "\" ><span class=\"glyphicon glyphicon-home\" style=\"font-size:50px;\" aria-hidden=\"true\"></span></a>
                    <h3>Catarina</h3>
                    </div>
                </div>
      </div>
</div>

";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  64 => 24,  52 => 15,  45 => 11,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:index.html.twig", "/home/vagrant/code/app/Resources/views/default/index.html.twig");
    }
}
