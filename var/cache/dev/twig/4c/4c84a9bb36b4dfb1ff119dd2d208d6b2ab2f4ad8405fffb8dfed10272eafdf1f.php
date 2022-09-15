<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* panel.html.twig */
class __TwigTemplate_750f4f54b512ca4d0b48032d76ea444d05cb1e0ab511407f52e4288276070cd7 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "panel.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Font Awesome -->
<link
  href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\"
  rel=\"stylesheet\"
/>
<!-- Google Fonts -->
<link
  href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
  rel=\"stylesheet\"
/>
<!-- MDB -->
<link
  href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css\"
  rel=\"stylesheet\"
/>
<!-- MDB -->
<script
  type=\"text/javascript\"
  src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js\"
></script>
<style>
body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}


</style>
<script>
// Graph
var ctx = document.getElementById(\"myChart\");

var myChart = new Chart(ctx, {
  type: \"line\",
  data: {
    labels: [
      \"Sunday\",
      \"Monday\",
      \"Tuesday\",
      \"Wednesday\",
      \"Thursday\",
      \"Friday\",
      \"Saturday\",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: \"transparent\",
        borderColor: \"#007bff\",
        borderWidth: 4,
        pointBackgroundColor: \"#007bff\",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});
</script>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 114
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 117
        echo "
        ";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        // line 121
        echo "    </head>
    <body>
    <header>
  <!-- Sidebar -->
  <nav
       id=\"sidebarMenu\"
       class=\"collapse d-lg-block sidebar collapse bg-white\"
       >
    <div class=\"position-sticky\">
      <div class=\"list-group list-group-flush mx-3 mt-4\">       
           ";
        // line 131
        echo $this->extensions['Knp\Menu\Twig\MenuExtension']->render("main", ["allow_safe_labels" => true, "currentClass" => "nav-link active"]);
        echo "
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav
       id=\"main-navbar\"
       class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top\"
       >
    <!-- Container wrapper -->
    <div class=\"container-fluid\">
      <!-- Toggle button -->
      <button
              class=\"navbar-toggler\"
              type=\"button\"
              data-mdb-toggle=\"collapse\"
              data-mdb-target=\"#sidebarMenu\"
              aria-controls=\"sidebarMenu\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
              >
        <i class=\"fas fa-bars\"></i>
      </button>

      <!-- Brand -->
      <a class=\"navbar-brand\" href=\"/index\">
        <img
             src=\"/logo.png\"
             height=\"25\"
             alt=\"\"
             loading=\"lazy\"
             />
      </a>

      <!-- Right links -->
      <ul class=\"navbar-nav ms-auto d-flex flex-row\">
        <!-- Notification dropdown -->
        

       

       

        <!-- Avatar -->
        <li class=\"nav-item dropdown\">
          <a
             class=\"nav-link dropdown-toggle hidden-arrow d-flex align-items-center\"
             href=\"#\"
             id=\"navbarDropdownMenuLink\"
             role=\"button\"
             data-mdb-toggle=\"dropdown\"
             aria-expanded=\"false\"
             >
            <img
                 src=\"/avatar.png\"
                 class=\"rounded-circle\"
                 height=\"22\"
                 alt=\"\"
                 loading=\"lazy\"
                 />
          </a>
          <ul
              class=\"dropdown-menu dropdown-menu-end\"
              aria-labelledby=\"navbarDropdownMenuLink\"
              >
            <li><a class=\"dropdown-item\" href=\"/profile\">Mój profil</a></li>
            <li><a class=\"dropdown-item\" href=\"/settings\">Ustawienia</a></li>
            <li><a class=\"dropdown-item\" href=\"/logout\">Wyloguj się</a></li>
          </ul>
          
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style=\"margin-top: 58px\">
  <div class=\"container pt-4\">
    
  </div>
</main>
      ";
        // line 218
        $this->displayBlock('body', $context, $blocks);
        // line 220
        echo "    </body>
 



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Strona główna";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 114
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 115
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_link_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "            ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('encore_entry_script_tags')->getCallable(), ["app"]), "html", null, true);
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 219
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 219,  356 => 218,  343 => 119,  333 => 118,  320 => 115,  310 => 114,  291 => 5,  276 => 220,  274 => 218,  184 => 131,  172 => 121,  170 => 118,  167 => 117,  164 => 114,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Strona główna{% endblock %}</title>
        <!-- Font Awesome -->
<link
  href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\"
  rel=\"stylesheet\"
/>
<!-- Google Fonts -->
<link
  href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
  rel=\"stylesheet\"
/>
<!-- MDB -->
<link
  href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css\"
  rel=\"stylesheet\"
/>
<!-- MDB -->
<script
  type=\"text/javascript\"
  src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js\"
></script>
<style>
body {
  background-color: #fbfbfb;
}
@media (min-width: 991.98px) {
  main {
    padding-left: 240px;
  }
}

/* Sidebar */
.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  padding: 58px 0 0; /* Height of navbar */
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
  width: 240px;
  z-index: 600;
}

@media (max-width: 991.98px) {
  .sidebar {
    width: 100%;
  }
}
.sidebar .active {
  border-radius: 5px;
  box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
  position: relative;
  top: 0;
  height: calc(100vh - 48px);
  padding-top: 0.5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}


</style>
<script>
// Graph
var ctx = document.getElementById(\"myChart\");

var myChart = new Chart(ctx, {
  type: \"line\",
  data: {
    labels: [
      \"Sunday\",
      \"Monday\",
      \"Tuesday\",
      \"Wednesday\",
      \"Thursday\",
      \"Friday\",
      \"Saturday\",
    ],
    datasets: [
      {
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: \"transparent\",
        borderColor: \"#007bff\",
        borderWidth: 4,
        pointBackgroundColor: \"#007bff\",
      },
    ],
  },
  options: {
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: false,
          },
        },
      ],
    },
    legend: {
      display: false,
    },
  },
});
</script>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}
            {{ encore_entry_link_tags('app') }}
        {% endblock %}

        {% block javascripts %}
            {{ encore_entry_script_tags('app') }}
        {% endblock %}
    </head>
    <body>
    <header>
  <!-- Sidebar -->
  <nav
       id=\"sidebarMenu\"
       class=\"collapse d-lg-block sidebar collapse bg-white\"
       >
    <div class=\"position-sticky\">
      <div class=\"list-group list-group-flush mx-3 mt-4\">       
           {{ knp_menu_render('main', {'allow_safe_labels': true, 'currentClass': 'nav-link active'}) }}
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav
       id=\"main-navbar\"
       class=\"navbar navbar-expand-lg navbar-light bg-white fixed-top\"
       >
    <!-- Container wrapper -->
    <div class=\"container-fluid\">
      <!-- Toggle button -->
      <button
              class=\"navbar-toggler\"
              type=\"button\"
              data-mdb-toggle=\"collapse\"
              data-mdb-target=\"#sidebarMenu\"
              aria-controls=\"sidebarMenu\"
              aria-expanded=\"false\"
              aria-label=\"Toggle navigation\"
              >
        <i class=\"fas fa-bars\"></i>
      </button>

      <!-- Brand -->
      <a class=\"navbar-brand\" href=\"/index\">
        <img
             src=\"/logo.png\"
             height=\"25\"
             alt=\"\"
             loading=\"lazy\"
             />
      </a>

      <!-- Right links -->
      <ul class=\"navbar-nav ms-auto d-flex flex-row\">
        <!-- Notification dropdown -->
        

       

       

        <!-- Avatar -->
        <li class=\"nav-item dropdown\">
          <a
             class=\"nav-link dropdown-toggle hidden-arrow d-flex align-items-center\"
             href=\"#\"
             id=\"navbarDropdownMenuLink\"
             role=\"button\"
             data-mdb-toggle=\"dropdown\"
             aria-expanded=\"false\"
             >
            <img
                 src=\"/avatar.png\"
                 class=\"rounded-circle\"
                 height=\"22\"
                 alt=\"\"
                 loading=\"lazy\"
                 />
          </a>
          <ul
              class=\"dropdown-menu dropdown-menu-end\"
              aria-labelledby=\"navbarDropdownMenuLink\"
              >
            <li><a class=\"dropdown-item\" href=\"/profile\">Mój profil</a></li>
            <li><a class=\"dropdown-item\" href=\"/settings\">Ustawienia</a></li>
            <li><a class=\"dropdown-item\" href=\"/logout\">Wyloguj się</a></li>
          </ul>
          
        </li>
      </ul>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style=\"margin-top: 58px\">
  <div class=\"container pt-4\">
    
  </div>
</main>
      {% block body %}
        {% endblock %}
    </body>
 



", "panel.html.twig", "/sfprojects/jobeet/japp/templates/panel.html.twig");
    }
}
