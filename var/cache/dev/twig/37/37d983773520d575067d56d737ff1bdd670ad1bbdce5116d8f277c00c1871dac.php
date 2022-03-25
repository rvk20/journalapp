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

/* plan/index.html.twig */
class __TwigTemplate_e85f845d9570141c6cc98a18c254e9d214b6255f7fc4e455c875bf5ea14f84de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plan/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plan/index.html.twig"));

        $this->parent = $this->loadTemplate("panel.html.twig", "plan/index.html.twig", 1);
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

        echo "Rozkład zajęć";
        
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

<div class=\"container pt-4\">

<div style=\"display: block;
  width: 30%;
  border: 0;
  float:left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
  
  <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Poniedziałek</h1></th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 32
        $context["h"] = 1;
        // line 33
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["day1"]) || array_key_exists("day1", $context) ? $context["day1"] : (function () { throw new RuntimeError('Variable "day1" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 34
            echo "    <tr>
      <th ><p class=\"h4\">
      ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 36, $this->source); })()), "html", null, true);
            echo ".
      ";
            // line 37
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 37), "Brak zajęć"))) {
                // line 38
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 38), "html", null, true);
                echo "
      ";
            }
            // line 40
            echo "      ";
            $context["h"] = ((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 40, $this->source); })()) + 1);
            // line 41
            echo "      </p></th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "   
  </tbody>
</table>

  </div>

  <div style=\"display: block;
  width: 1%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>

  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Wtorek</h1></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 78
        $context["h"] = 1;
        // line 79
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["day2"]) || array_key_exists("day2", $context) ? $context["day2"] : (function () { throw new RuntimeError('Variable "day2" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 80
            echo "    <tr>
      <th><p class=\"h4\">
      ";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 82, $this->source); })()), "html", null, true);
            echo ".
      ";
            // line 83
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 83), "Brak zajęć"))) {
                // line 84
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 84), "html", null, true);
                echo "
      ";
            }
            // line 86
            echo "      ";
            $context["h"] = ((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 86, $this->source); })()) + 1);
            // line 87
            echo "      </p></th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "   
  </tbody>
</table>
  </div>
    <div style=\"display: block;
  width: 1%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>
  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Środa</h1></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 121
        $context["h"] = 1;
        // line 122
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["day3"]) || array_key_exists("day3", $context) ? $context["day3"] : (function () { throw new RuntimeError('Variable "day3" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 123
            echo "    <tr>
      <th><p class=\"h4\">
      ";
            // line 125
            echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 125, $this->source); })()), "html", null, true);
            echo ".
      ";
            // line 126
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 126), "Brak zajęć"))) {
                // line 127
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 127), "html", null, true);
                echo "
      ";
            }
            // line 129
            echo "      ";
            $context["h"] = ((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 129, $this->source); })()) + 1);
            // line 130
            echo "      </p></th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "   
  </tbody>
</table>
  </div>
  
    </br></br></br></br></br></br></br></br></br></br></br></br>
     <div style=\"display: block;
  width: 18%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>

  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Czwartek</h1></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 167
        $context["h"] = 1;
        // line 168
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["day4"]) || array_key_exists("day4", $context) ? $context["day4"] : (function () { throw new RuntimeError('Variable "day4" does not exist.', 168, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 169
            echo "    <tr>
      <th ><p class=\"h4\">
      ";
            // line 171
            echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 171, $this->source); })()), "html", null, true);
            echo ".
      ";
            // line 172
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 172), "Brak zajęć"))) {
                // line 173
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 173), "html", null, true);
                echo "
      ";
            }
            // line 175
            echo "      ";
            $context["h"] = ((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 175, $this->source); })()) + 1);
            // line 176
            echo "      </p></th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "   
  </tbody>
</table>
  </div>
  <div style=\"display: block;
  width: 1%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>
  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Piątek</h1></th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 210
        $context["h"] = 1;
        // line 211
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["day5"]) || array_key_exists("day5", $context) ? $context["day5"] : (function () { throw new RuntimeError('Variable "day5" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 212
            echo "    <tr>
      <th><p class=\"h4\">
      ";
            // line 214
            echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 214, $this->source); })()), "html", null, true);
            echo ".
      ";
            // line 215
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 215), "Brak zajęć"))) {
                // line 216
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "name", [], "any", false, false, false, 216), "html", null, true);
                echo "
      ";
            }
            // line 218
            echo "      ";
            $context["h"] = ((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 218, $this->source); })()) + 1);
            // line 219
            echo "      </p></th>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "   
  </tbody>
</table>
  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plan/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  424 => 222,  416 => 219,  413 => 218,  407 => 216,  405 => 215,  401 => 214,  397 => 212,  392 => 211,  390 => 210,  357 => 179,  349 => 176,  346 => 175,  340 => 173,  338 => 172,  334 => 171,  330 => 169,  325 => 168,  323 => 167,  287 => 133,  279 => 130,  276 => 129,  270 => 127,  268 => 126,  264 => 125,  260 => 123,  255 => 122,  253 => 121,  220 => 90,  212 => 87,  209 => 86,  203 => 84,  201 => 83,  197 => 82,  193 => 80,  188 => 79,  186 => 78,  150 => 44,  142 => 41,  139 => 40,  133 => 38,  131 => 37,  127 => 36,  123 => 34,  118 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panel.html.twig' %}

{% block title %}Rozkład zajęć{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container pt-4\">

<div style=\"display: block;
  width: 30%;
  border: 0;
  float:left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
  
  <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Poniedziałek</h1></th>
    </tr>
  </thead>
  <tbody>
  {% set h = 1 %}
    {% for e in day1 %}
    <tr>
      <th ><p class=\"h4\">
      {{ h }}.
      {% if e.name != \"Brak zajęć\" %}
      {{e.name}}
      {% endif %}
      {% set h = h+1 %}
      </p></th>
    </tr>
    {% endfor %}
   
  </tbody>
</table>

  </div>

  <div style=\"display: block;
  width: 1%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>

  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Wtorek</h1></th>
    </tr>
  </thead>
  <tbody>
    {% set h = 1 %}
    {% for e in day2 %}
    <tr>
      <th><p class=\"h4\">
      {{ h }}.
      {% if e.name != \"Brak zajęć\" %}
      {{e.name}}
      {% endif %}
      {% set h = h+1 %}
      </p></th>
    </tr>
    {% endfor %}
   
  </tbody>
</table>
  </div>
    <div style=\"display: block;
  width: 1%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>
  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Środa</h1></th>
    </tr>
  </thead>
  <tbody>
    {% set h = 1 %}
    {% for e in day3 %}
    <tr>
      <th><p class=\"h4\">
      {{ h }}.
      {% if e.name != \"Brak zajęć\" %}
      {{e.name}}
      {% endif %}
      {% set h = h+1 %}
      </p></th>
    </tr>
    {% endfor %}
   
  </tbody>
</table>
  </div>
  
    </br></br></br></br></br></br></br></br></br></br></br></br>
     <div style=\"display: block;
  width: 18%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>

  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Czwartek</h1></th>
    </tr>
  </thead>
  <tbody>
    {% set h = 1 %}
    {% for e in day4 %}
    <tr>
      <th ><p class=\"h4\">
      {{ h }}.
      {% if e.name != \"Brak zajęć\" %}
      {{e.name}}
      {% endif %}
      {% set h = h+1 %}
      </p></th>
    </tr>
    {% endfor %}
   
  </tbody>
</table>
  </div>
  <div style=\"display: block;
  width: 1%;
  float:left;
  padding-top: 30px;
  padding-right: 15px;
  padding-bottom: 30px;
  padding-left: 15px;
  \">
  </div>
  <div style=\"display: block;
  width: 30%;
  border: 0;
  float: left;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
  padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 30px;
  \">
    <table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\"><h1 class=\"display-6\">Piątek</h1></th>
    </tr>
  </thead>
  <tbody>
    {% set h = 1 %}
    {% for e in day5 %}
    <tr>
      <th><p class=\"h4\">
      {{ h }}.
      {% if e.name != \"Brak zajęć\" %}
      {{e.name}}
      {% endif %}
      {% set h = h+1 %}
      </p></th>
    </tr>
    {% endfor %}
   
  </tbody>
</table>
  </div>

</div>

{% endblock %}
", "plan/index.html.twig", "/sfprojects/jobeet/japp/templates/plan/index.html.twig");
    }
}
