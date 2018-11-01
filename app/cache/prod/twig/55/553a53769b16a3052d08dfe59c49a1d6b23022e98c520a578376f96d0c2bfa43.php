<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2d4212329d0c198c276e22fc5db7b38d004727d3ad266a1d3a91be9be83d87a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 6
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
            ";
                // line 7
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
  <div class=\"jumbotron\" style=\"max-width:400px;margin:40px auto;\">
    <div class=\"row text-center\" style=\"margin-bottom: 40px;\">
\t  \t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100px;margin:auto;\">
\t  \t<span><strong>QUINTA S. ANTONIO</strong></span>
\t  </div>
\t<form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t    ";
        // line 18
        if (($context["csrf_token"] ?? null)) {
            // line 19
            echo "\t        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
\t    ";
        }
        // line 21
        echo "\t  <div class=\"form-group\">
\t    <label for=\"exampleInputEmail1\">Nome de utilizador</label>
\t    <input type=\"text\" class=\"form-control\" placeholder=\"Nome de utilizador\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"_username\" required=\"required\">
\t  </div>
\t  <div class=\"form-group\">
\t    <label for=\"exampleInputPassword1\">Password</label>
\t    <input type=\"password\" class=\"form-control\" id=\"exampleInputPassword1\" placeholder=\"Password\" name=\"_password\" required=\"required\">
\t  </div>
\t  <!--<div class=\"checkbox\">
\t    <label>
\t      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" > Check me out
\t    </label>
\t  </div>-->
\t  <button type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\">Submit</button>
\t</form>
  </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 21,  84 => 19,  82 => 18,  78 => 17,  72 => 14,  67 => 11,  61 => 10,  52 => 7,  45 => 6,  40 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login.html.twig", "/home/vagrant/code/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
