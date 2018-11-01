<?php

/* :default:tanque.html.twig */
class __TwigTemplate_89a6593f8c9a504faf6cdae98e941e39854903cc0a9ec9cd596b8cd5a3f8c68c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:tanque.html.twig", 1);
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
      <li><a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tanques");
        echo "\">Tanques</a></li>
      <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tanque"] ?? null), "name", array()), "html", null, true);
        echo "</li>
    </ol>
    <div class=\"content\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " flash-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                ";
                // line 12
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  \t\t<h3>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tanque"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
  \t\t<hr>
      <div class=\"jumbotron\">
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'row');
        echo "
        <hr>
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nutrientes", array()), 'row');
        echo "
        <hr>
        <div class=\"text-center\" style=\"padding:20px;\">
          ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'row');
        echo "
        </div>
        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
      </div>
      <div class=\"jumbotron\">
          <h3>Lista nutrientes</h3>
          <hr>
          ";
        // line 32
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["tanque"] ?? null), "nutrientes", array()))) {
            // line 33
            echo "          <div class=\"table-responsive\">
              <table class=\"table table-striped\">
                  <thead>
                    <tr>
                      <th>Nutriente</th><th>Quilos</th><th>Data</th>
                    </tr>
                  </thead>
                  <tbody>
                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["tanque"] ?? null), "nutrientes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["nutriente"]) {
                // line 42
                echo "                    <tr>
                      <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["nutriente"], "nutriente", array()), "name", array()), "html", null, true);
                echo "</td>
                      <td>";
                // line 44
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["nutriente"], "kg", array()))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nutriente"], "kg", array()), "html", null, true);
                    echo " kg";
                }
                echo "</td>
                      <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nutriente"], "createdAt", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nutriente'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                  </tbody>
              </table>
          </div>
          ";
        }
        // line 52
        echo "      </div>
    </div>
   <script>

    var \$collectionHolderNutrientes;

    var \$addNutrienteLink = \$('<div class=\"form-class text-center\"><button type=\"button\" class=\"btn btn-primary add_nutriente_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar um nutriente</button></div>');

    var \$newNutrienteLinkLi = \$addNutrienteLink;

    \$(document).ready(function() {

          \$collectionHolderNutrientes = \$('#appbundle_tanque_nutrientes');
         
          \$collectionHolderNutrientes.append(\$newNutrienteLinkLi);

          \$collectionHolderNutrientes.data('index', \$collectionHolderNutrientes.find(\".collection-box\").length);

          //\$collectionHolderNutrientes.find('.collection-box').each(function() {
          //
          //    addNutrienteFormDeleteLink(\$(this));
          
          //});
          
          \$addNutrienteLink.on('click', function(e) {

              e.preventDefault();

              addNutrienteForm(\$collectionHolderNutrientes, \$newNutrienteLinkLi);
              
          });

      });

      function addNutrienteForm(\$collectionHolderNutrientes, \$newNutrienteLinkLi) {

        var prototype = \$collectionHolderNutrientes.data('prototype');

        var index = \$collectionHolderNutrientes.data('index');

        var newForm = prototype.replace(/__name__/g, index);

        \$collectionHolderNutrientes.data('index', index + 1);

        var \$newFormDiv = \$(newForm);

        addNutrienteFormDeleteLink(\$newFormDiv.find('.collection-box'));

        \$newNutrienteLinkLi.before(\$newFormDiv);

      }

      function addNutrienteFormDeleteLink(\$NutrienteForm) {

          var \$removeFormA = \$('<div class=\"form-class text-center\"><a href=\"#\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span> Eliminar nutriente</a></div>');

          \$NutrienteForm.append(\$removeFormA);

          \$removeFormA.on('click', function(e) {

              e.preventDefault();

              \$NutrienteForm.parent().remove();
          });
      }

    </script>
";
    }

    // line 121
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 122
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:tanque.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 122,  235 => 121,  164 => 52,  158 => 48,  149 => 45,  142 => 44,  138 => 43,  135 => 42,  131 => 41,  121 => 33,  119 => 32,  111 => 27,  106 => 25,  100 => 22,  95 => 20,  91 => 19,  84 => 16,  78 => 15,  69 => 12,  62 => 11,  57 => 10,  53 => 9,  47 => 6,  43 => 5,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:tanque.html.twig", "/home/vagrant/code/app/Resources/views/default/tanque.html.twig");
    }
}
