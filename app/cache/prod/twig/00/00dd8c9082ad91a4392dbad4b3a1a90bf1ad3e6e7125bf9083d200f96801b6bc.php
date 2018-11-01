<?php

/* :default:mesa.html.twig */
class __TwigTemplate_b3f6cdacad8323fb9a9658c860156b3c1fc424e04ce7287b7d14973036704658 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:mesa.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("estufa", array("type" => twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "type", array())))), "html", null, true);
        echo "\">Estufa da ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "type", array()), "html", null, true);
        echo "</a></li>
      <li class=\"active\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "name", array()), "html", null, true);
        echo "</li>
    </ol>
    
    <div class=\"content\">
  \t\t<h3>Estufa da ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "type", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "name", array()), "html", null, true);
        echo "</h3>
  \t\t<hr>
      ";
        // line 12
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "ciclos", array()))) {
            // line 13
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "ciclos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
                // line 14
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["ciclo"], "isActive", array())) {
                    // line 15
                    echo "      <div class=\"jumbotron\">
        <ul class=\"list-unstyled\">
          <li><h3>Sementes: ";
                    // line 17
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ciclo"], "type", array()), "name", array())), "html", null, true);
                    echo "</h3></li>
          <li><h3>Sementeira: ";
                    // line 18
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["ciclo"], "sementeira", array()))) {
                        echo " ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ciclo"], "sementeira", array()), "createdAt", array()), "d/m/Y"), "html", null, true);
                        echo " ";
                    } else {
                        echo " - ";
                    }
                    echo "</h3></li>
          <li><h3>Plantação: ";
                    // line 19
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ciclo"], "createdAt", array()), "d/m/Y"), "html", null, true);
                    echo "</h3></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li><h3>Tratamentos: </h3>
            ";
                    // line 22
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["ciclo"], "tratamentos", array()))) {
                        // line 23
                        echo "            <ul>
              ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ciclo"], "tratamentos", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["tratamento"]) {
                            // line 25
                            echo "              <li ";
                            if ((twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "getExpirationDate", array(), "method"), "Y-m-d"))) {
                                echo "class=\"text-danger\"";
                            } else {
                                echo "class=\"text-success\"";
                            }
                            echo ">
                <b><a href=\"";
                            // line 26
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produto", array("id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "id", array()))), "html", null, true);
                            echo "\" class=\"text-danger\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["tratamento"], "produto", array()), "name", array()), "html", null, true);
                            echo "</a></b>  ( Creação : ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "createdAt", array()), "d/m/Y"), "html", null, true);
                            echo " / Expiração : ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tratamento"], "getExpirationDate", array(), "method"), "d/m/Y"), "html", null, true);
                            echo " )
              </li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tratamento'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "            </ul>
           ";
                    }
                    // line 31
                    echo "           </li>
           <li role=\"separator\" class=\"divider\"></li>
          <li><h3>Colheitas: </h3>
            ";
                    // line 34
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["ciclo"], "colheitas", array()))) {
                        // line 35
                        echo "            <ul>
              ";
                        // line 36
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["ciclo"], "colheitas", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["colheita"]) {
                            // line 37
                            echo "              <li>
                <b>";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colheita"], "kg", array()), "html", null, true);
                            echo " Quilos</b>  ( ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["colheita"], "createdAt", array()), "d/m/Y"), "html", null, true);
                            echo " )
              </li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['colheita'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "            </ul>
           ";
                    }
                    // line 43
                    echo "           </li>
        </ul>
      </div>
      ";
                }
                // line 47
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "      ";
        }
        // line 49
        echo "      <!-- Main component for a primary marketing message or call to action -->
      <div class=\"jumbotron\">
      <h3>Acçóes:</h3>
      ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
      ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
      </div>
      ";
        // line 56
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "ciclos", array()))) {
            // line 57
            echo "
      <div class=\"jumbotron\">
          <h3>Velhos Ciclos:</h3>
          <ul>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["mesa"] ?? null), "ciclos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["ciclo"]) {
                // line 62
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["ciclo"], "isActive", array()) == 0)) {
                    // line 63
                    echo "                <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ciclo"], "type", array()), "name", array()), "html", null, true);
                    echo " ( ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ciclo"], "createdAt", array()), "d/m/Y - H:i"), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ciclo"], "updatedAt", array()), "d/m/Y - H:i"), "html", null, true);
                    echo " )</li>
                ";
                }
                // line 65
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciclo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </ul>
      </div>
      ";
        }
        // line 69
        echo "    </div>

<div class=\"modal fade\" id=\"modalCheck\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"modalCheckLabel\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\" id=\"modalCheckLabel\">Check</h4>
      </div>
      <div class=\"modal-body\">
        Arre you sure?
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-danger\" id=\"confirm\">Acabar</button>
      </div>
    </div>
  </div>
</div>

   <script>
    var \$collectionHolderTratamentos;

    var \$collectionHolderColheitas;

    var \$addTratamentoLink = \$('<div class=\"form-class text-center\"><button type=\"button\" class=\"btn btn-primary add_tratamento_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar um tratamento</button></div>');

    var \$addColheitaLink = \$('<div class=\"form-class text-center\"><button type=\"button\" class=\"btn btn-primary add_colheita_link\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> Adicionar uma colheita</button></div>');

    var \$newTratamentoLinkLi = \$addTratamentoLink;

     var \$newColheitaLinkLi = \$addColheitaLink;

    \$(document).ready(function() {

          \$collectionHolderTratamentos = \$('#appbundle_mesa_ciclo_tratamentos');
         
          \$collectionHolderTratamentos.append(\$newTratamentoLinkLi);

          \$collectionHolderTratamentos.data('index', \$collectionHolderTratamentos.find(':input').length);

          \$addTratamentoLink.on('click', function(e) {

              e.preventDefault();

              addTratamentoForm(\$collectionHolderTratamentos, \$newTratamentoLinkLi);

          });

          \$collectionHolderColheitas = \$('#appbundle_mesa_ciclo_colheitas');
         
          \$collectionHolderColheitas.append(\$newColheitaLinkLi);

          \$collectionHolderColheitas.data('index', \$collectionHolderColheitas.find(':input').length);

          \$addColheitaLink.on('click', function(e) {

              e.preventDefault();

              addColheitaForm(\$collectionHolderColheitas, \$newColheitaLinkLi);
              
          });

          \$(\"#confirm\").on(\"click\", function(){
              \$(\"#appbundle_mesa_close\").unbind('click');
              \$(\"#appbundle_mesa_close\").trigger('click');
          });

          \$(\"#appbundle_mesa_close\").on(\"click\", function(e){
              e.preventDefault();
          });

          

      });

      function addTratamentoForm(\$collectionHolderTratamentos, \$newTratamentoLinkLi) {

        var prototype = \$collectionHolderTratamentos.data('prototype');

        var index = \$collectionHolderTratamentos.data('index');

        var newForm = prototype.replace(/__name__/g, index);

        \$collectionHolderTratamentos.data('index', index + 1);

        var \$newFormDiv = \$(newForm);

        addFormDeleteLink(\$newFormDiv.find('.collection-box'));

        \$newTratamentoLinkLi.before(\$newFormDiv);

      }


      function addColheitaForm(\$collectionHolderColheitas, \$newColheitaLinkLi) {

        var prototype = \$collectionHolderColheitas.data('prototype');

        var index = \$collectionHolderColheitas.data('index');

        var newForm = prototype.replace(/__name__/g, index);

        \$collectionHolderColheitas.data('index', index + 1);

        var \$newFormDiv = \$(newForm);

        addFormDeleteLink(\$newFormDiv.find('.collection-box'));
        
        \$newColheitaLinkLi.before(\$newFormDiv);

      }


      function addFormDeleteLink(\$Form) {

          var \$removeFormA = \$('<div class=\"form-class text-center\"><a href=\"#\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-minus\" aria-hidden=\"true\"></span> Eliminar tratamento</a></div>');

          \$Form.append(\$removeFormA);

          \$removeFormA.on('click', function(e) {

              e.preventDefault();

              \$Form.parent().remove();
          });
      }

    </script>


";
    }

    // line 202
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 203
        echo "<style>

</style>
";
    }

    public function getTemplateName()
    {
        return ":default:mesa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 203,  370 => 202,  235 => 69,  230 => 66,  224 => 65,  214 => 63,  211 => 62,  207 => 61,  201 => 57,  199 => 56,  194 => 54,  190 => 53,  186 => 52,  181 => 49,  178 => 48,  172 => 47,  166 => 43,  162 => 41,  151 => 38,  148 => 37,  144 => 36,  141 => 35,  139 => 34,  134 => 31,  130 => 29,  115 => 26,  106 => 25,  102 => 24,  99 => 23,  97 => 22,  91 => 19,  81 => 18,  77 => 17,  73 => 15,  70 => 14,  65 => 13,  63 => 12,  56 => 10,  49 => 6,  43 => 5,  39 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":default:mesa.html.twig", "/home/vagrant/code/app/Resources/views/default/mesa.html.twig");
    }
}
