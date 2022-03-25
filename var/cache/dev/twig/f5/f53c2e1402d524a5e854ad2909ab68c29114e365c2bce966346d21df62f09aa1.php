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

/* register/index.html.twig */
class __TwigTemplate_58aa53ec49b8fd833eab97d4e92f5921745416bc195d667629093be1b2f08f0e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "register/index.html.twig", 1);
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

        echo "Rejestracja";
        
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

<div class=\"example-wrapper\">

<h3 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Rejestracja</h3>

    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-outline mb-4\">
    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "ranga", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
    </div>
    <div class=\"form-outline mb-4\">
    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Adres Email</label>
    </div>
    <div class=\"form-outline mb-4\">
    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), "pass", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Hasło</label>
    </div>
    
    <div class=\"form-outline mb-4\">
    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "password", [], "any", false, false, false, 56), "confirm", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Powtórz hasło</label>
    </div>

    <div class=\"form-outline mb-4\">
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "Imie", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Imię</label>
    </div>

    <div class=\"form-outline mb-4\">
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "Nazwisko", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Nazwisko</label>
    </div>

    <div class=\"form-outline mb-4\">
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "Adres", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Adres</label>
    </div>

    <div class=\"form-outline mb-4\">
    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Numertelefonu", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control form-control-lg"]]);
        echo "
    <label class=\"form-label\" for=\"form2Example18\">Numer telefonu</label>
    </div>

    <div class=\"form-outline mb-4\">
    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "grupa", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
    </div>
";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
</br>
<p>Masz już konto? <a href=\"/\" class=\"link-info\">Zaloguj się</a></p>
</div>
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
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 83,  192 => 81,  184 => 76,  176 => 71,  168 => 66,  160 => 61,  152 => 56,  144 => 51,  137 => 47,  131 => 44,  126 => 42,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Rejestracja{% endblock %}

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

<div class=\"example-wrapper\">

<h3 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Rejestracja</h3>

    {{ form_start(form) }}
    <div class=\"form-outline mb-4\">
    {{ form_widget(form.ranga, {'attr': {'class': 'form-select'}}) }}
    </div>
    <div class=\"form-outline mb-4\">
    {{ form_widget(form.email, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Adres Email</label>
    </div>
    <div class=\"form-outline mb-4\">
    {{ form_widget(form.password.pass, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Hasło</label>
    </div>
    
    <div class=\"form-outline mb-4\">
    {{ form_widget(form.password.confirm, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Powtórz hasło</label>
    </div>

    <div class=\"form-outline mb-4\">
    {{ form_widget(form.Imie, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Imię</label>
    </div>

    <div class=\"form-outline mb-4\">
    {{ form_widget(form.Nazwisko, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Nazwisko</label>
    </div>

    <div class=\"form-outline mb-4\">
    {{ form_widget(form.Adres, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Adres</label>
    </div>

    <div class=\"form-outline mb-4\">
    {{ form_widget(form.Numertelefonu, {'attr': {'class': 'form-control form-control-lg'}}) }}
    <label class=\"form-label\" for=\"form2Example18\">Numer telefonu</label>
    </div>

    <div class=\"form-outline mb-4\">
    {{ form_widget(form.grupa, {'attr': {'class': 'form-select'}}) }}
    </div>
{{ form_end(form) }}
</br>
<p>Masz już konto? <a href=\"/\" class=\"link-info\">Zaloguj się</a></p>
</div>
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

", "register/index.html.twig", "/sfprojects/jobeet/japp/templates/register/index.html.twig");
    }
}
