<?php

/* base.html.twig */
class __TwigTemplate_9b21adf06f08b85f88166bca82b74d682e16f9837f80d65e93ba7ca2d4c664c1 extends Twig_Template
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
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
        // line 10
        echo "          <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
          <!-- Latest compiled and minified CSS -->
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
          <!-- Optional theme -->
          <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css\" integrity=\"sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp\" crossorigin=\"anonymous\">
          <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
          <link rel=\"stylesheet\" href=\"/css/style.css\">
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 46
        echo "    </head>
    <body>
      <div class=\"modal-backdrop fade in\" id=\"loader-bg\" style=\"display:none;\"></div>
      <div id=\"wrapper\">
        <div class=\"container-fluid\">  
        ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 52
            echo "        <nav class=\"navbar navbar-default navbar-fixed-top\">
          <div class=\"progress\" id=\"loader\" style=\"margin-bottom: 0;display:none;\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\"></div>
          </div>
          <div class=\"container-fluid\">
            <div class=\"navbar-header\">
              <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
              <a class=\"navbar-brand\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\" title=\"Estufas Quinta S. Antonio\"><img alt=\"Brand\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
            echo "\" style=\"width:20px;\"></a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                <li ";
            // line 68
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "homepage")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
            echo "\">Home</a></li>
                <li class=\"dropdown ";
            // line 69
            if (twig_in_filter("estufa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo "active";
            }
            echo "\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Estufas <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 72
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estufa", array("type" => "catarina"));
            echo "\">Estufa da Catarina</a></li>
                    <li><a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estufa", array("type" => "ana"));
            echo "\">Estufa da Ana</a></li>           
 \t                <li class=\"dropdown-header\"></li>
 \t                <li><a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sementeiras");
            echo "\">Sementeiras</a></li>

<!--  
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    
                    <li><a href=\"#\">Separated link</a></li>
                    <li><a href=\"#\">One more separated link</a></li> -->
                  </ul>
                </li>
                <li class=\"dropdown ";
            // line 85
            if (twig_in_filter("export", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo "active";
            }
            echo "\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Exportação <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 88
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_mesas");
            echo "\">Mesas</a></li>
                  </ul>
                </li>
                <li ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "produtos")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produtos");
            echo "\">Produtos</a></li>
                <li ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "sementes")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sementes");
            echo "\">Sementes</a></li>
                <li class=\"dropdown ";
            // line 93
            if (twig_in_filter("tanques", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"))) {
                echo "active";
            }
            echo "\">
                  <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Tanques <span class=\"caret\"></span></a>
                  <ul class=\"dropdown-menu\">
                    <li><a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tanques");
            echo "\">Lista de tanques</a></li>
                    <li><a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("nutrientes");
            echo "\">Nutrientes</a></li>
 <!--                <li class=\"dropdown-header\"></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li role=\"separator\" class=\"divider\"></li>
                    
                    <li><a href=\"#\">Separated link</a></li>
                    <li><a href=\"#\">One more separated link</a></li> -->
                  </ul>
                </li>
                <li ";
            // line 106
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "qrcode")) {
                echo "class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qrcode");
            echo "\">Qrcode</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">  
                <li><a href=\"#\" title=\"Signed as ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"  aria-hidden=\"true\"></span></a></li>
                <li><a href=\"";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span></a></li>  
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

        ";
        }
        // line 117
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "        </div>
        </div>
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
        echo "        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
            <script>
            \$(function() {
                var progress = function(){

                    setInterval(function () {
                      var \$bar = \$('.progress-bar');
                      if ((\$bar.width() / \$bar.parent().width() * 100) >= 100) {
                          clearInterval(progress);
                          \$('.progress').removeClass('active');
                      } else {
                          \$bar.width(\$bar.width() + 40 + \"%\");
                      }
                  }, 1600);

                }

                \$(\"form\").submit(function(){
                    \$( \"#loader-bg\" ).toggle();
                    \$( \"#loader\" ).toggle();
                    progress();
                });

            });
            </script>
        ";
    }

    // line 117
    public function block_body($context, array $blocks = array())
    {
        // line 118
        echo "            ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 120
        echo "        ";
    }

    // line 118
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 119
        echo "            ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 119,  271 => 118,  267 => 120,  264 => 118,  261 => 117,  230 => 18,  227 => 17,  223 => 9,  220 => 8,  214 => 7,  206 => 121,  203 => 117,  193 => 110,  189 => 109,  179 => 106,  167 => 97,  163 => 96,  155 => 93,  147 => 92,  139 => 91,  133 => 88,  125 => 85,  112 => 75,  107 => 73,  103 => 72,  95 => 69,  87 => 68,  78 => 64,  64 => 52,  62 => 51,  55 => 46,  53 => 17,  42 => 10,  40 => 8,  36 => 7,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/home/vagrant/code/app/Resources/views/base.html.twig");
    }
}
