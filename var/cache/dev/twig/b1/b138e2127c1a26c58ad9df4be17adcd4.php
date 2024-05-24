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
        yield "<div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
    <h1 class=\"display-4 fw-normal text-body-emphasis\">Location</h1>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["success"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["successMessage"]) {
            // line 7
            yield "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"alert alert-success\">
                ";
            // line 10
            yield $context["successMessage"];
            yield "
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['successMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
    ";
        // line 16
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        yield "
    <form>
        <div class=\"mb-3\">
            <label for=\"exampleInputNom\" class=\"form-label\">Nom</label>
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "Nom", [], "any", false, false, false, 20), 'widget');
        yield "
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleInputTel\" class=\"form-label\">Telephone</label>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "tel", [], "any", false, false, false, 24), 'widget');
        yield "
        </div>
        <div class=\"mb-3\">
            <label for=\"start\">date:</label>
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "date", [], "any", false, false, false, 28), 'widget');
        yield "
        </div>
    </form>
</div>

<main>
    <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
        <div class=\"col\">
            <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                    <h4 class=\"my-0 fw-normal\">Decouvert</h4>
                </div>
                <div class=\"card-body\">
                    <br/>
                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "quantiteDec", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "quantity-input", "data-price" => 10]]);
        yield "
                    <br/>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                    <h4 class=\"my-0 fw-normal\">Sportif</h4>
                </div>
                <div class=\"card-body\">
                    <br/>
                    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "quantiteSpor", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "quantity-input", "data-price" => 15]]);
        yield "
                    <br/>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                    <h4 class=\"my-0 fw-normal\">Tyrolienne</h4>
                </div>
                <div class=\"card-body\">
                    <br/>
                    ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "quantiteTyro", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "quantity-input", "data-price" => 5]]);
        yield "
                    <br/>
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
            <h3 class=\"fw-normal text-body-emphasis\">Moyen de payement :</h3>
            <br/><br/>
            <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
                <div class=\"col\">
                    <div class=\"card mb-4 rounded-3 shadow-sm\">
                        <div class=\"card-header py-3\">
                            <h4 class=\"my-0 fw-normal\">CB</h4>
                        </div>
                        <div class=\"card-body\">
                            <br/>
                            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "moneyCB", [], "any", false, false, false, 89), 'widget', ["attr" => ["step" => 5]]);
        yield "
                            <br/>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card mb-4 rounded-3 shadow-sm\">
                        <div class=\"card-header py-3\">
                            <h4 class=\"my-0 fw-normal\">CV</h4>
                        </div>
                        <div class=\"card-body\">
                            <br/>
                            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "moneyCheque", [], "any", false, false, false, 101), 'widget', ["attr" => ["step" => 5]]);
        yield "
                            <br/>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card mb-4 rounded-3 shadow-sm\">
                        <div class=\"card-header py-3\">
                            <h4 class=\"my-0 fw-normal\">Espece</h4>
                        </div>
                        <div class=\"card-body\">
                            <br/>
                            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "moneyEspece", [], "any", false, false, false, 113), 'widget', ["attr" => ["step" => 5]]);
        yield "
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
        <h3>Total Cost: <span id=\"totalCost\">0</span> €</h3>
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valide</button>
        ";
        // line 125
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        yield "
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('showMoreFields');
        var additionalFields = document.getElementById('additionalFields');
        var totalCostElement = document.getElementById('totalCost');
        var quantityInputs = document.querySelectorAll('.quantity-input');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                additionalFields.style.display = 'block';
            } else {
                additionalFields.style.display = 'none';
            }
        });

        function updateTotalCost() {
            var totalCost = 0;
            quantityInputs.forEach(function(input) {
                var price = parseFloat(input.dataset.price) || 0;
                var quantity = parseInt(input.value) || 0;
                totalCost += price * quantity;
            });
            totalCostElement.textContent = totalCost.toFixed(2);
        }

        quantityInputs.forEach(function(input) {
            input.addEventListener('input', updateTotalCost);
        });

        updateTotalCost();  // Initial calculation
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
        return array (  256 => 125,  241 => 113,  226 => 101,  211 => 89,  185 => 66,  170 => 54,  155 => 42,  138 => 28,  131 => 24,  124 => 20,  117 => 16,  114 => 15,  103 => 10,  98 => 7,  94 => 6,  90 => 4,  80 => 3,  60 => 2,  37 => 1,);
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
                {{successMessage|raw}}
            </div>
        </div>
    </div>
    {% endfor %}

    {{ form_start(form) }}
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
    </form>
</div>

<main>
    <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
        <div class=\"col\">
            <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                    <h4 class=\"my-0 fw-normal\">Decouvert</h4>
                </div>
                <div class=\"card-body\">
                    <br/>
                    {{ form_widget(form.quantiteDec, {'attr': {'class': 'quantity-input', 'data-price': 10}}) }}
                    <br/>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                    <h4 class=\"my-0 fw-normal\">Sportif</h4>
                </div>
                <div class=\"card-body\">
                    <br/>
                    {{ form_widget(form.quantiteSpor, {'attr': {'class': 'quantity-input', 'data-price': 15}}) }}
                    <br/>
                </div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card mb-4 rounded-3 shadow-sm\">
                <div class=\"card-header py-3\">
                    <h4 class=\"my-0 fw-normal\">Tyrolienne</h4>
                </div>
                <div class=\"card-body\">
                    <br/>
                    {{ form_widget(form.quantiteTyro, {'attr': {'class': 'quantity-input', 'data-price': 5}}) }}
                    <br/>
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
            <h3 class=\"fw-normal text-body-emphasis\">Moyen de payement :</h3>
            <br/><br/>
            <div class=\"row row-cols-1 row-cols-md-3 mb-3 text-center\">
                <div class=\"col\">
                    <div class=\"card mb-4 rounded-3 shadow-sm\">
                        <div class=\"card-header py-3\">
                            <h4 class=\"my-0 fw-normal\">CB</h4>
                        </div>
                        <div class=\"card-body\">
                            <br/>
                            {{ form_widget(form.moneyCB, {'attr': {'step': 5}}) }}
                            <br/>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card mb-4 rounded-3 shadow-sm\">
                        <div class=\"card-header py-3\">
                            <h4 class=\"my-0 fw-normal\">CV</h4>
                        </div>
                        <div class=\"card-body\">
                            <br/>
                            {{ form_widget(form.moneyCheque, {'attr': {'step': 5}}) }}
                            <br/>
                        </div>
                    </div>
                </div>
                <div class=\"col\">
                    <div class=\"card mb-4 rounded-3 shadow-sm\">
                        <div class=\"card-header py-3\">
                            <h4 class=\"my-0 fw-normal\">Espece</h4>
                        </div>
                        <div class=\"card-body\">
                            <br/>
                            {{ form_widget(form.moneyEspece, {'attr': {'step': 5}}) }}
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
        <h3>Total Cost: <span id=\"totalCost\">0</span> €</h3>
        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valide</button>
        {{ form_end(form) }}
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var checkbox = document.getElementById('showMoreFields');
        var additionalFields = document.getElementById('additionalFields');
        var totalCostElement = document.getElementById('totalCost');
        var quantityInputs = document.querySelectorAll('.quantity-input');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                additionalFields.style.display = 'block';
            } else {
                additionalFields.style.display = 'none';
            }
        });

        function updateTotalCost() {
            var totalCost = 0;
            quantityInputs.forEach(function(input) {
                var price = parseFloat(input.dataset.price) || 0;
                var quantity = parseInt(input.value) || 0;
                totalCost += price * quantity;
            });
            totalCostElement.textContent = totalCost.toFixed(2);
        }

        quantityInputs.forEach(function(input) {
            input.addEventListener('input', updateTotalCost);
        });

        updateTotalCost();  // Initial calculation
    });
</script>
<script src=\"../assets/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}
", "location.html.twig", "C:\\Users\\benjy\\algo\\symfony\\test\\templates\\location.html.twig");
    }
}
