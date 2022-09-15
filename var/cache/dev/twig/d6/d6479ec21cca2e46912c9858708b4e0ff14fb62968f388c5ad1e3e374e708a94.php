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

/* subject/note.html.twig */
class __TwigTemplate_965c0ea0972aedbfbf5eef1964ae012c7e592a40eabe4787591b8b5a886d9c35 extends Template
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
        return "panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subject/note.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subject/note.html.twig"));

        $this->parent = $this->loadTemplate("panel.html.twig", "subject/note.html.twig", 1);
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

        echo "Uwagi";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<main>

<form method=\"POST\">
<div style=\"width: 64%; padding-left: 550px; resize: none;\">
<select name=\"student\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 17
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "surname", [], "any", false, false, false, 17), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " 
</select>
<label for=\"comment\">Tytuł:</label>
<input name=\"title\" class=\"form-control\" id=\"comment\"/>
</br>
<div class=\"form-group\">
  <label for=\"comment\">Treść uwagi:</label>
  <textarea name=\"note\" class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div>
</br>
<button class=\"btn btn-info btn-lg btn-block\" type=\"submit\" name='submit'>Dodaj
    </button>
</div>
</br>
</br>
<div style=\"
margin-left: 550px;\">
<a type=\"button\" href=\"/subject/";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary btn-lg\">OCENY</a>
<a type=\"button\" href=\"/subject/";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "/at/";
        echo twig_escape_filter($this->env, (isset($context["sid"]) || array_key_exists("sid", $context) ? $context["sid"] : (function () { throw new RuntimeError('Variable "sid" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary btn-lg\">OBECNOŚĆ</a>
<a type=\"button\" href=\"/subject/";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "/nt/";
        echo twig_escape_filter($this->env, (isset($context["sid"]) || array_key_exists("sid", $context) ? $context["sid"] : (function () { throw new RuntimeError('Variable "sid" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\">UWAGI</a>
<a type=\"button\" href=\"/subject/";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "/et/";
        echo twig_escape_filter($this->env, (isset($context["sid"]) || array_key_exists("sid", $context) ? $context["sid"] : (function () { throw new RuntimeError('Variable "sid" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary btn-lg\">WYDARZENIA</a>
</div>
</form>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subject/note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 38,  146 => 37,  140 => 36,  136 => 35,  117 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panel.html.twig' %}

{% block title %}Uwagi{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<main>

<form method=\"POST\">
<div style=\"width: 64%; padding-left: 550px; resize: none;\">
<select name=\"student\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
{% for s in students %}
    <option value=\"{{s.id}}\">{{s.name}} {{s.surname}}</option>
{% endfor %} 
</select>
<label for=\"comment\">Tytuł:</label>
<input name=\"title\" class=\"form-control\" id=\"comment\"/>
</br>
<div class=\"form-group\">
  <label for=\"comment\">Treść uwagi:</label>
  <textarea name=\"note\" class=\"form-control\" rows=\"5\" id=\"comment\"></textarea>
</div>
</br>
<button class=\"btn btn-info btn-lg btn-block\" type=\"submit\" name='submit'>Dodaj
    </button>
</div>
</br>
</br>
<div style=\"
margin-left: 550px;\">
<a type=\"button\" href=\"/subject/{{id}}\" class=\"btn btn-outline-primary btn-lg\">OCENY</a>
<a type=\"button\" href=\"/subject/{{id}}/at/{{sid}}\" class=\"btn btn-outline-primary btn-lg\">OBECNOŚĆ</a>
<a type=\"button\" href=\"/subject/{{id}}/nt/{{sid}}\" class=\"btn btn-primary btn-lg\">UWAGI</a>
<a type=\"button\" href=\"/subject/{{id}}/et/{{sid}}\" class=\"btn btn-outline-primary btn-lg\">WYDARZENIA</a>
</div>
</form>
</main>
{% endblock %}", "subject/note.html.twig", "/sfprojects/jobeet/japp/templates/subject/note.html.twig");
    }
}
