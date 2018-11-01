<?php

/* :print:qrcodes.html.twig */
class __TwigTemplate_ea977604c10d92655010eee61bd6072a25f98b3b3c0c86d4ae4b5d6e42880137 extends Twig_Template
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
        $context["counter"] = 0;
        // line 17
        echo "
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mesas"] ?? null));
        foreach ($context['_seq'] as $context["index"] => $context["mesa"]) {
            // line 19
            echo "        ";
            if (((($context["index"] % 2) == 0) && (($context["counter"] ?? null) == 0))) {
                // line 20
                echo "          <page size=\"A4\">
        ";
            }
            // line 22
            echo "        <div class=\"row text-center\">
          <h1>Estufa da ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "type", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "name", array()), "html", null, true);
            echo "</h1>
          <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Endroid\QrCode\Twig\Extension\QrCodeExtension']->qrCodeUrlFunction($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesa", array("id" => twig_get_attribute($this->env, $this->source, $context["mesa"], "id", array()), "type" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["mesa"], "type", array())))))), "html", null, true);
            echo "\" class=\"img-responsive\" style=\"margin:10px auto;\" />
        </div>
        <hr style=\"border-top: dotted 2px;\" />
        ";
            // line 27
            $context["counter"] = (($context["counter"] ?? null) + 1);
            echo "  
        ";
            // line 28
            if ((($context["counter"] ?? null) == 2)) {
                echo "   
          ";
                // line 29
                $context["counter"] = 0;
                echo "  
          </page>
        ";
            }
            // line 32
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['mesa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Quinta S. Antonio";
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
        return ":print:qrcodes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 9,  106 => 8,  100 => 7,  94 => 33,  88 => 32,  82 => 29,  78 => 28,  74 => 27,  68 => 24,  62 => 23,  59 => 22,  55 => 20,  52 => 19,  48 => 18,  45 => 17,  43 => 16,  39 => 14,  37 => 8,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":print:qrcodes.html.twig", "/home/vagrant/code/app/Resources/views/print/qrcodes.html.twig");
    }
}
