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

/* jour.html.twig */
class __TwigTemplate_845108d74c1b2ddc6bcb221ea312d992 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jour.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "jour.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "jour.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Locations du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 4, $this->source); })()), "Y-m-d"), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        yield "<link href=\"/assets/styles/jour.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "     



    <div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
        <div class=\"nav-buttons\">
            <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_day", ["date" => (isset($context["previousDate"]) || array_key_exists("previousDate", $context) ? $context["previousDate"] : (function () { throw new RuntimeError('Variable "previousDate" does not exist.', 14, $this->source); })())]), "html", null, true);
        yield "\"> <button id=\"prevButton\"> Jour précédent</button></a> &nbsp;&nbsp;&nbsp;
            <h2>Locations du ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 15, $this->source); })()), "Y-m-d"), "html", null, true);
        yield "</h2> &nbsp;&nbsp;&nbsp;
            <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("location_day", ["date" => (isset($context["nextDate"]) || array_key_exists("nextDate", $context) ? $context["nextDate"] : (function () { throw new RuntimeError('Variable "nextDate" does not exist.', 16, $this->source); })())]), "html", null, true);
        yield "\"><button id=\"nextButton\">Jour suivant</button></a>
        </div>
      
    <div class=\"row mt-2 \">
      
        <h5>Information sur la journer : </h5> 
        <p>Quantiter total : <b style=\"color:#0275d8\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantityRented"]) || array_key_exists("totalQuantityRented", $context) ? $context["totalQuantityRented"] : (function () { throw new RuntimeError('Variable "totalQuantityRented" does not exist.', 22, $this->source); })()), "html", null, true);
        yield "</b></p>
        <p>gain total : <b style=\"color:#0275d8\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalEarnings"]) || array_key_exists("totalEarnings", $context) ? $context["totalEarnings"] : (function () { throw new RuntimeError('Variable "totalEarnings" does not exist.', 23, $this->source); })()), "html", null, true);
        yield " €</b></br>
        CB : <b style=\"color:#0275d8\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 24, $this->source); })()), "totalCB", [], "any", false, false, false, 24), "html", null, true);
        yield "</b>
        &nbsp;&nbsp;
        Cheque Vacance : <b style=\"color:#0275d8\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 26, $this->source); })()), "totalCV", [], "any", false, false, false, 26), "html", null, true);
        yield "</b>
        &nbsp;&nbsp;
        Espece : <b style=\"color:#0275d8\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["totals"]) || array_key_exists("totals", $context) ? $context["totals"] : (function () { throw new RuntimeError('Variable "totals" does not exist.', 28, $this->source); })()), "totalEspece", [], "any", false, false, false, 28), "html", null, true);
        yield "</b>
        </p>



        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locations"]) || array_key_exists("locations", $context) ? $context["locations"] : (function () { throw new RuntimeError('Variable "locations" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 34
            yield "          ";
            // line 35
            yield "          <div class=\"col-3 mt-5\">
            <div class=\"card\" style=\" width: 13rem;\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">quantite : <b style=\"color:#0275d8\"> ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "quantite", [], "any", false, false, false, 38), "html", null, true);
            yield "</b></h5>
                <h5 class=\"card-title\">prix : <b style=\"color:#0275d8\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "money", [], "any", false, false, false, 39), "html", null, true);
            yield " €</b></h5>
                <p class=\"card-text\">nom : ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "nom", [], "any", false, false, false, 40), "html", null, true);
            yield "</br> tel : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "tel", [], "any", false, false, false, 40), "html", null, true);
            yield "</br>kit decouvert : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "quantiteDec", [], "any", false, false, false, 40), "html", null, true);
            yield "</br>kit sport : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "quantiteSpor", [], "any", false, false, false, 40), "html", null, true);
            yield "</br>kit pouly :";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "quantiteTyro", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                <p>date : ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "date", [], "any", false, false, false, 41), "Y-m-d H:i"), "html", null, true);
            yield "</p>
                <a href=\"#\" class=\"card-link\">Modifier</a>
              </div>
            </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        yield "      </div>
      
    </div>
  </header>
  


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
        return "jour.html.twig";
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
        return array (  208 => 48,  195 => 41,  183 => 40,  179 => 39,  175 => 38,  170 => 35,  168 => 34,  164 => 33,  156 => 28,  151 => 26,  146 => 24,  142 => 23,  138 => 22,  129 => 16,  125 => 15,  121 => 14,  113 => 8,  103 => 7,  82 => 5,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block title %}Locations du {{ currentDate|date('Y-m-d') }}{% endblock %}
{% block stylesheet %}<link href=\"/assets/styles/jour.css\" rel=\"stylesheet\">
{% endblock %}
{% block body %}
     



    <div class=\"pricing-header p-3 pb-md-4 mx-auto text-center\">
        <div class=\"nav-buttons\">
            <a href=\"{{ path('location_day', { 'date': previousDate }) }}\"> <button id=\"prevButton\"> Jour précédent</button></a> &nbsp;&nbsp;&nbsp;
            <h2>Locations du {{ currentDate|date('Y-m-d') }}</h2> &nbsp;&nbsp;&nbsp;
            <a href=\"{{ path('location_day', { 'date': nextDate }) }}\"><button id=\"nextButton\">Jour suivant</button></a>
        </div>
      
    <div class=\"row mt-2 \">
      
        <h5>Information sur la journer : </h5> 
        <p>Quantiter total : <b style=\"color:#0275d8\">{{ totalQuantityRented }}</b></p>
        <p>gain total : <b style=\"color:#0275d8\">{{ totalEarnings }} €</b></br>
        CB : <b style=\"color:#0275d8\">{{ totals.totalCB }}</b>
        &nbsp;&nbsp;
        Cheque Vacance : <b style=\"color:#0275d8\">{{ totals.totalCV }}</b>
        &nbsp;&nbsp;
        Espece : <b style=\"color:#0275d8\">{{ totals.totalEspece }}</b>
        </p>



        {% for location in locations %}
          {# {% if location.isDate('2024-05-19') %} #}
          <div class=\"col-3 mt-5\">
            <div class=\"card\" style=\" width: 13rem;\">
              <div class=\"card-body\">
                <h4 class=\"card-title\">quantite : <b style=\"color:#0275d8\"> {{location.quantite}}</b></h5>
                <h5 class=\"card-title\">prix : <b style=\"color:#0275d8\">{{location.money }} €</b></h5>
                <p class=\"card-text\">nom : {{location.nom}}</br> tel : {{location.tel}}</br>kit decouvert : {{location.quantiteDec}}</br>kit sport : {{location.quantiteSpor}}</br>kit pouly :{{location.quantiteTyro}}</p>
                <p>date : {{ location.date|date('Y-m-d H:i') }}</p>
                <a href=\"#\" class=\"card-link\">Modifier</a>
              </div>
            </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {% endfor %}
      </div>
      
    </div>
  </header>
  


  <script src=\"../assets/dist/js/bootstrap.bundle.min.js\"></script>
{% endblock %}   ", "jour.html.twig", "C:\\Users\\benjy\\algo\\symfony\\test\\templates\\jour.html.twig");
    }
}
