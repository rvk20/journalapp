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

/* security/login.html.twig */
class __TwigTemplate_01fb99a0e2b92fa2e907748d0739cfc98737c1abeaa21a8b1bcc60941b2154bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panel logowania";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


<style>
.bg-image-vertical {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: auto 100%;
  }
  
  @media (min-width: 1025px) {
    .h-custom-2 {
      height: 100%;
    }
  }
  </style>




<section class=\"vh-100\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-6 text-black\">

        <div class=\"px-5 ms-xl-4\">
          <i class=\"fas fa-crow fa-2x me-3 pt-5 mt-xl-4\" style=\"color: #709085;\"></i>
          <span class=\"h1 fw-bold mb-0\">Eduon</span>
        </div>

        <div class=\"d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5\">

        


<form method=\"post\" style=\"width: 23rem;\">
    ";
        // line 44
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageData", [], "any", false, false, false, 45), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 47
        echo "
    <h3 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Panel logowania</h3>

    <div class=\"form-outline mb-4\">
    <input type=\"email\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"form2Example18\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
    <label class=\"form-label\" for=\"form2Example18\">Adres Email</label>
    </div>
    <div class=\"form-outline mb-4\">
    <input type=\"password\" name=\"password\" id=\"form2Example28\" class=\"form-control form-control-lg\" autocomplete=\"current-password\" required>
    <label class=\"form-label\" for=\"form2Example28\">Hasło</label>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
    >   
       ";
        // line 66
        echo "    <div class=\"pt-1 mb-4\">
    <button class=\"btn btn-info btn-lg btn-block\" type=\"submit\">
        Zaloguj się
    </button>

  </br>
    <p>Nie masz konta? <a href=\"register\" class=\"link-info\">Zarejestruj się</a></p>
    </div>
</form>




        </div>

      </div>
      <div class=\"col-sm-6 px-0 d-none d-sm-block\">
        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp\" alt=\"Login image\" class=\"w-100 vh-100\" style=\"object-fit: cover; object-position: left;\">
      </div>
    </div>
  </div>
</section>
</br>
</br>
</br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 66,  153 => 59,  142 => 51,  136 => 47,  130 => 45,  128 => 44,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panel logowania{% endblock %}

{% block body %}



<style>
.bg-image-vertical {
    position: relative;
    overflow: hidden;
    background-repeat: no-repeat;
    background-position: right center;
    background-size: auto 100%;
  }
  
  @media (min-width: 1025px) {
    .h-custom-2 {
      height: 100%;
    }
  }
  </style>




<section class=\"vh-100\">
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-sm-6 text-black\">

        <div class=\"px-5 ms-xl-4\">
          <i class=\"fas fa-crow fa-2x me-3 pt-5 mt-xl-4\" style=\"color: #709085;\"></i>
          <span class=\"h1 fw-bold mb-0\">Eduon</span>
        </div>

        <div class=\"d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5\">

        


<form method=\"post\" style=\"width: 23rem;\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    <h3 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Panel logowania</h3>

    <div class=\"form-outline mb-4\">
    <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"form2Example18\" class=\"form-control form-control-lg\" autocomplete=\"email\" required autofocus>
    <label class=\"form-label\" for=\"form2Example18\">Adres Email</label>
    </div>
    <div class=\"form-outline mb-4\">
    <input type=\"password\" name=\"password\" id=\"form2Example28\" class=\"form-control form-control-lg\" autocomplete=\"current-password\" required>
    <label class=\"form-label\" for=\"form2Example28\">Hasło</label>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\"
           value=\"{{ csrf_token('authenticate') }}\"
    >   
       {# <div class=\"checkbox mb-3\">
            <label>
                <input type=\"checkbox\" name=\"_remember_me\"> Zapamiętaj
            </label>
        </div>#}
    <div class=\"pt-1 mb-4\">
    <button class=\"btn btn-info btn-lg btn-block\" type=\"submit\">
        Zaloguj się
    </button>

  </br>
    <p>Nie masz konta? <a href=\"register\" class=\"link-info\">Zarejestruj się</a></p>
    </div>
</form>




        </div>

      </div>
      <div class=\"col-sm-6 px-0 d-none d-sm-block\">
        <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp\" alt=\"Login image\" class=\"w-100 vh-100\" style=\"object-fit: cover; object-position: left;\">
      </div>
    </div>
  </div>
</section>
</br>
</br>
</br>
{% endblock %}
", "security/login.html.twig", "/sfprojects/jobeet/japp/templates/security/login.html.twig");
    }
}
