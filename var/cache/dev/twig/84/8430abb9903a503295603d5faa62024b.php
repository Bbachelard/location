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

/* base.html.twig */
class __TwigTemplate_6769f28bd1d64dc7bf0a4a395168222d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <script src=\"/assets/js/color-modes.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Falternatifshop43%2F&psig=AOvVaw1OZ6F0Ql0VcVWpLA4GxVT8&ust=1716110329085000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKi1sKTvloYDFQAAAAAdAAAAABAE\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
        <meta name=\"generator\" content=\"Hugo 0.122.0\">
        <title>Location</title>
        <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.3/examples/pricing/\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\">
        <link href=\"/assets/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/assets/dist/css/pricing.css\" rel=\"stylesheet\">
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('stylesheet', $context, $blocks);
        // line 22
        yield "</title>
    
    </head>
    <body>
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
      <symbol id=\"check2\" viewBox=\"0 0 16 16\">
        <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"/>
      </symbol>
      <symbol id=\"circle-half\" viewBox=\"0 0 16 16\">
        <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
      </symbol>
      <symbol id=\"moon-stars-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z\"/>
        <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
      </symbol>
      <symbol id=\"sun-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
      </symbol>
    </svg>

    <div class=\"dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle\">
        <button class=\"btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center\"
                id=\"bd-theme\"
                type=\"button\"
                aria-expanded=\"false\"
                data-bs-toggle=\"dropdown\"
                aria-label=\"Toggle theme (auto)\">
            <svg class=\"bi my-1 theme-icon-active\" width=\"1em\" height=\"1em\"><use href=\"#circle-half\"></use></svg>
            <span class=\"visually-hidden\" id=\"bd-theme-text\">Toggle theme</span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"bd-theme-text\">
            <li>
            <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"light\" aria-pressed=\"false\">
                <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#sun-fill\"></use></svg>
                Light
                <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
            </button>
            </li>
            <li>
            <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"dark\" aria-pressed=\"false\">
                <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#moon-stars-fill\"></use></svg>
                Dark
                <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
            </button>
            </li>
            <li>
            <button type=\"button\" class=\"dropdown-item d-flex align-items-center active\" data-bs-theme-value=\"auto\" aria-pressed=\"true\">
                <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#circle-half\"></use></svg>
                Auto
                <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
            </button>
            </li>
        </ul>
    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
  <symbol id=\"check\" viewBox=\"0 0 16 16\">
    <title>Check</title>
    <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"/>
  </symbol>
</svg>

<div class=\"container py-3\">
  <header>
    <div class=\"d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom\">
      <a href=\"/\" class=\"d-flex align-items-center link-body-emphasis text-decoration-none\">
        <span class=\"fs-4\">Location</span>
      </a>

      <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
      <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_redirection");
        yield "\">Aujourd'hui</a>
        <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_calandrier");
        yield "\">Calandrier</a>
        <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location");
        yield "\">Location</a>
        <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"#\">Menu</a>
      </nav>
    </div>
        ";
        // line 97
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 98
        yield "    </div>
   
     <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
    <div class=\"row\">
      <div class=\"col-12 col-md\">
        <img class=\"mb-2\" src=\"../assets/brand/bootstrap-logo.svg\" alt=\"\" width=\"24\" height=\"19\">
        <small class=\"d-block mb-3 text-body-secondary\">&copy; 2017–2024</small>
      </div>
      <div class=\"col-6 col-md\">
        <h5>Features</h5>
        <ul class=\"list-unstyled text-small\">
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Cool stuff</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Random feature</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Team feature</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Stuff for developers</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Another one</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Last time</a></li>
        </ul>
      </div>
      <div class=\"col-6 col-md\">
        <h5>Resources</h5>
        <ul class=\"list-unstyled text-small\">
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Resource</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Resource name</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Another resource</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Final resource</a></li>
        </ul>
      </div>
      <div class=\"col-6 col-md\">
        <h5>About</h5>
        <ul class=\"list-unstyled text-small\">
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Team</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Locations</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Privacy</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
   </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Alternatifs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 17
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 18
        yield "        <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.3/examples/pricing/\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\">
        <link href=\"/assets/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/assets/dist/css/pricing.css\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 97
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  255 => 97,  240 => 18,  230 => 17,  210 => 6,  158 => 98,  156 => 97,  149 => 93,  145 => 92,  141 => 91,  70 => 22,  68 => 17,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <script src=\"/assets/js/color-modes.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Alternatifs{% endblock %}</title>
        <link rel=\"icon\" href=\"https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.facebook.com%2Falternatifshop43%2F&psig=AOvVaw1OZ6F0Ql0VcVWpLA4GxVT8&ust=1716110329085000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKi1sKTvloYDFQAAAAAdAAAAABAE\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"Mark Otto, Jacob Thornton, and Bootstrap contributors\">
        <meta name=\"generator\" content=\"Hugo 0.122.0\">
        <title>Location</title>
        <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.3/examples/pricing/\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\">
        <link href=\"/assets/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/assets/dist/css/pricing.css\" rel=\"stylesheet\">
        {% block stylesheet %}
        <link rel=\"canonical\" href=\"https://getbootstrap.com/docs/5.3/examples/pricing/\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/@docsearch/css@3\">
        <link href=\"/assets/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"/assets/dist/css/pricing.css\" rel=\"stylesheet\">
        {% endblock %}</title>
    
    </head>
    <body>
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
      <symbol id=\"check2\" viewBox=\"0 0 16 16\">
        <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"/>
      </symbol>
      <symbol id=\"circle-half\" viewBox=\"0 0 16 16\">
        <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
      </symbol>
      <symbol id=\"moon-stars-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z\"/>
        <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
      </symbol>
      <symbol id=\"sun-fill\" viewBox=\"0 0 16 16\">
        <path d=\"M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
      </symbol>
    </svg>

    <div class=\"dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle\">
        <button class=\"btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center\"
                id=\"bd-theme\"
                type=\"button\"
                aria-expanded=\"false\"
                data-bs-toggle=\"dropdown\"
                aria-label=\"Toggle theme (auto)\">
            <svg class=\"bi my-1 theme-icon-active\" width=\"1em\" height=\"1em\"><use href=\"#circle-half\"></use></svg>
            <span class=\"visually-hidden\" id=\"bd-theme-text\">Toggle theme</span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-end shadow\" aria-labelledby=\"bd-theme-text\">
            <li>
            <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"light\" aria-pressed=\"false\">
                <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#sun-fill\"></use></svg>
                Light
                <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
            </button>
            </li>
            <li>
            <button type=\"button\" class=\"dropdown-item d-flex align-items-center\" data-bs-theme-value=\"dark\" aria-pressed=\"false\">
                <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#moon-stars-fill\"></use></svg>
                Dark
                <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
            </button>
            </li>
            <li>
            <button type=\"button\" class=\"dropdown-item d-flex align-items-center active\" data-bs-theme-value=\"auto\" aria-pressed=\"true\">
                <svg class=\"bi me-2 opacity-50\" width=\"1em\" height=\"1em\"><use href=\"#circle-half\"></use></svg>
                Auto
                <svg class=\"bi ms-auto d-none\" width=\"1em\" height=\"1em\"><use href=\"#check2\"></use></svg>
            </button>
            </li>
        </ul>
    </div>
    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"d-none\">
  <symbol id=\"check\" viewBox=\"0 0 16 16\">
    <title>Check</title>
    <path d=\"M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z\"/>
  </symbol>
</svg>

<div class=\"container py-3\">
  <header>
    <div class=\"d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom\">
      <a href=\"/\" class=\"d-flex align-items-center link-body-emphasis text-decoration-none\">
        <span class=\"fs-4\">Location</span>
      </a>

      <nav class=\"d-inline-flex mt-2 mt-md-0 ms-md-auto\">
      <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{ path('app_redirection') }}\">Aujourd'hui</a>
        <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{path('app_calandrier')}}\">Calandrier</a>
        <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"{{path('app_location')}}\">Location</a>
        <a class=\"me-3 py-2 link-body-emphasis text-decoration-none\" href=\"#\">Menu</a>
      </nav>
    </div>
        {% block body %}{% endblock %}
    </div>
   
     <footer class=\"pt-4 my-md-5 pt-md-5 border-top\">
    <div class=\"row\">
      <div class=\"col-12 col-md\">
        <img class=\"mb-2\" src=\"../assets/brand/bootstrap-logo.svg\" alt=\"\" width=\"24\" height=\"19\">
        <small class=\"d-block mb-3 text-body-secondary\">&copy; 2017–2024</small>
      </div>
      <div class=\"col-6 col-md\">
        <h5>Features</h5>
        <ul class=\"list-unstyled text-small\">
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Cool stuff</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Random feature</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Team feature</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Stuff for developers</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Another one</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Last time</a></li>
        </ul>
      </div>
      <div class=\"col-6 col-md\">
        <h5>Resources</h5>
        <ul class=\"list-unstyled text-small\">
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Resource</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Resource name</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Another resource</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Final resource</a></li>
        </ul>
      </div>
      <div class=\"col-6 col-md\">
        <h5>About</h5>
        <ul class=\"list-unstyled text-small\">
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Team</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Locations</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Privacy</a></li>
          <li class=\"mb-1\"><a class=\"link-secondary text-decoration-none\" href=\"#\">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
   </body>
</html>
", "base.html.twig", "C:\\Users\\benjy\\algo\\symfony\\test\\templates\\base.html.twig");
    }
}
