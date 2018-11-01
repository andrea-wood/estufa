<?php

/* :print:qrcode.html.twig */
class __TwigTemplate_0a0856e0e7dec812a5312421ec860f10a5c7124ba9458db4c579e6fb0fce3a03 extends Twig_Template
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
          <page size=\"A4\">
            <div class=\"row text-center\">
              <h1>Estufa da ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "type", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "name", array()), "html", null, true);
        echo "</h1>
              <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Endroid\QrCode\Twig\Extension\QrCodeExtension']->qrCodeUrlFunction($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesa", array("id" => twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "id", array()), "type" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "type", array())))))), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"margin:10px auto;\" />
            </div>
          </page>
    </body>
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
        return ":print:qrcode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  67 => 8,  61 => 7,  51 => 19,  45 => 18,  39 => 14,  37 => 8,  33 => 7,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":print:qrcode.html.twig", "/home/vagrant/code/app/Resources/views/print/qrcode.html.twig");
    }
}
