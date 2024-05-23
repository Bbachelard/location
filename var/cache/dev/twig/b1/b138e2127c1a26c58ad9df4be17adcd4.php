<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* location.html.twig */
class __TwigTemplate_dbe85b794ae22537f6f451f8702905fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "location.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "location.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Location";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "     

<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4 fw-normal text-body-emphasis\">Location</h1>
      ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["successMessage"]) {
            // line 9
            yield "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"alert alert-success\">
                ";
            // line 12
            yield $context["successMessage"];
            yield "
            </div>
        </div>
    </div>#
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['successMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "      

";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        yield "
<form>
        <div class=\"mb-3\">
          <label for=\"exampleInputNom\" class=\"form-label\">Nom</label>
          ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "Nom", [], "any", false, false, false, 23), 'widget');
        yield "
        </div>
        <div class=\"mb-3\">
          <label for=\"exampleInputTel\" class=\"form-label\">Telephone</label>
          ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "tel", [], "any", false, false, false, 27), 'widget');
        yield "
        </div>
        <div class=\"mb-3\">
          <label for=\"start\">date:</label>
          ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), 'widget');
        yield "
        </div>
        
    </div>
  </header>

  <main>
    <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Decouvert</h4>
          </div>
          <div class=\"card-body\">
            </br>
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "quantiteDec", [], "any", false, false, false, 46), 'widget');
        yield "
            </br>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Sportif</h4>
          </div>
          <div class=\"card-body\">
            </br>
            ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "quantiteSpor", [], "any", false, false, false, 58), 'widget');
        yield "
            </br>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Tyrolienne</h4>
          </div>
          <div class=\"card-body\">
            </br>
            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "quantiteTyro", [], "any", false, false, false, 70), 'widget');
        yield "
            </br>
          </div>
        </div>
      </div>
    </div>
    


  <div class=\"mb-3 form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"showMoreFields\">
    <label class=\"form-check-label\" for=\"showMoreFields\">Pour maintenant</label>
</div>
<div id=\"additionalFields\" style=\"display: none;\">
      <div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <h3 class=\" fw-normal text-body-emphasis\">Moyen de payement :</h3>
      </br></br>
    
            <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
            <div class=\"col\">
              <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                  <h4 class=\"my-0 fw-normal\">CB</h4>
                </div>
                <div class=\"card-body\">
                  </br>
                  ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "moneyCB", [], "any", false, false, false, 96), 'widget');
        yield "
                  </br>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                  <h4 class=\"my-0 fw-normal\">CV</h4>
                </div>
                <div class=\"card-body\">
                  </br>
                  ";
        // line 109
        yield "                  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "moneyCheque", [], "any", false, false, false, 109), 'widget');
        yield "
                  ";
        // line 111
        yield "                  </br>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                  <h4 class=\"my-0 fw-normal\">Espece</h4>
                </div>
                <div class=\"card-body\">
                  </br>
                  ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "moneyEspece", [], "any", false, false, false, 122), 'widget');
        yield "
                  </br>
                </div>
              </div>
            </div>
          </div>
    
    </div>
</div>



<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <button type=\"submit\" class=\"btn btn-primary btn-lg \">Valide</button>
      ";
        // line 136
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        yield "
</form>
</div>
</main>

 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('showMoreFields');
        var additionalFields = document.getElementById('additionalFields');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                additionalFields.style.display = 'block';
            } else {
                additionalFields.style.display = 'none';
            }
        });
    });
</script>
<script src=\"../assets/dist/js/bootstrap.bundle.min.js\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "location.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  268 => 136,  251 => 122,  238 => 111,  233 => 109,  218 => 96,  189 => 70,  174 => 58,  159 => 46,  141 => 31,  134 => 27,  127 => 23,  120 => 19,  116 => 17,  105 => 12,  100 => 9,  96 => 8,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Location{% endblock %}
{% block body %}
     

<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4 fw-normal text-body-emphasis\">Location</h1>
      {% for successMessage in app.flashes('success') %}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"alert alert-success\">
                {{successMessage| raw}}
            </div>
        </div>
    </div>#
{% endfor %}
      

{{form_start(form) }}
<form>
        <div class=\"mb-3\">
          <label for=\"exampleInputNom\" class=\"form-label\">Nom</label>
          {{ form_widget(form.Nom) }}
        </div>
        <div class=\"mb-3\">
          <label for=\"exampleInputTel\" class=\"form-label\">Telephone</label>
          {{ form_widget(form.tel) }}
        </div>
        <div class=\"mb-3\">
          <label for=\"start\">date:</label>
          {{ form_widget(form.date) }}
        </div>
        
    </div>
  </header>

  <main>
    <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Decouvert</h4>
          </div>
          <div class=\"card-body\">
            </br>
            {{ form_widget(form.quantiteDec) }}
            </br>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Sportif</h4>
          </div>
          <div class=\"card-body\">
            </br>
            {{ form_widget(form.quantiteSpor) }}
            </br>
          </div>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card mb-4 rounded-3 shadow-sm\">
          <div class=\"card-header py-3\">
            <h4 class=\"my-0 fw-normal\">Tyrolienne</h4>
          </div>
          <div class=\"card-body\">
            </br>
            {{ form_widget(form.quantiteTyro) }}
            </br>
          </div>
        </div>
      </div>
    </div>
    


  <div class=\"mb-3 form-check\">
    <input type=\"checkbox\" class=\"form-check-input\" id=\"showMoreFields\">
    <label class=\"form-check-label\" for=\"showMoreFields\">Pour maintenant</label>
</div>
<div id=\"additionalFields\" style=\"display: none;\">
      <div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <h3 class=\" fw-normal text-body-emphasis\">Moyen de payement :</h3>
      </br></br>
    
            <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
            <div class=\"col\">
              <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                  <h4 class=\"my-0 fw-normal\">CB</h4>
                </div>
                <div class=\"card-body\">
                  </br>
                  {{ form_widget(form.moneyCB) }}
                  </br>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                  <h4 class=\"my-0 fw-normal\">CV</h4>
                </div>
                <div class=\"card-body\">
                  </br>
                  {#<button type=\"button\" class=\"w-50 btn btn-lg btn-primary\">▲</button>#}
                  {{ form_widget(form.moneyCheque) }}
                  {#<button type=\"button\" class=\"w-50 btn btn-lg btn-primary\">▼</button>#}
                  </br>
                </div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                  <h4 class=\"my-0 fw-normal\">Espece</h4>
                </div>
                <div class=\"card-body\">
                  </br>
                  {{ form_widget(form.moneyEspece) }}
                  </br>
                </div>
              </div>
            </div>
          </div>
    
    </div>
</div>



<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
      <button type=\"submit\" class=\"btn btn-primary btn-lg \">Valide</button>
      {{ form_end(form) }}
</form>
</div>
</main>

 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('showMoreFields');
        var additionalFields = document.getElementById('additionalFields');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                additionalFields.style.display = 'block';
            } else {
                additionalFields.style.display = 'none';
            }
        });
    });
</script>
<script src=\"../assets/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}    
", "location.html.twig", "C:\\Users\\benjy\\algo\\symfony\\test\\templates\\location.html.twig");
    }
}
