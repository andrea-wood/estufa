<?php

/* EndroidQrCodeBundle:QrCode:twigFunctions.html.twig */
class __TwigTemplate_3c57d104e9ecf5d2e78934c2b0ad2328e1b8ff79c8ecc647f9fed1d7a2b89657 extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Endroid\QrCode\Twig\Extension\QrCodeExtension']->qrCodePathFunction(($context["message"] ?? null)), "html", null, true);
        echo "\" />
<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Endroid\QrCode\Twig\Extension\QrCodeExtension']->qrCodeUrlFunction(($context["message"] ?? null), array("writer" => "svg")), "html", null, true);
        echo "\" />
<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Endroid\QrCode\Twig\Extension\QrCodeExtension']->qrCodeDataUriFunction(($context["message"] ?? null), array("writer" => "svg", "size" => 150)), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "EndroidQrCodeBundle:QrCode:twigFunctions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EndroidQrCodeBundle:QrCode:twigFunctions.html.twig", "/home/vagrant/code/vendor/endroid/qrcode/src/Bundle/QrCodeBundle/Resources/views/QrCode/twigFunctions.html.twig");
    }
}
