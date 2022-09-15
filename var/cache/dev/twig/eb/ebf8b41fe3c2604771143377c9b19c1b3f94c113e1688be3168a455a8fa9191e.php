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

/* subject/attendance.html.twig */
class __TwigTemplate_45f7108edf9d0ea9e739f87dce599557125185ebf58c6cd7cb83ecd46703e206 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subject/attendance.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "subject/attendance.html.twig"));

        $this->parent = $this->loadTemplate("panel.html.twig", "subject/attendance.html.twig", 1);
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

        echo "Obecność";
        
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


<div style=\"margin-left: 200px; margin-right: 200px;\">
<button class=\"btn btn-info btn-lg btn-block\" id=\"myBtn\">Sprawdź obecność</button>
</div>
</br>
<div class=\"table-responsive text-nowrap\">

        ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attendance"] ?? null), 0, [], "array", false, true, false, 20), "User", [], "any", true, true, false, 20)) {
            // line 21
            echo "        <table class=\"table table-striped\">


          <thead>
            <tr>
              <th>Nazwisko i imię</th>
              
              ";
            // line 28
            $context["user"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attendance"]) || array_key_exists("attendance", $context) ? $context["attendance"] : (function () { throw new RuntimeError('Variable "attendance" does not exist.', 28, $this->source); })()), 0, [], "array", false, false, false, 28), "User", [], "any", false, false, false, 28);
            // line 29
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attendance"]) || array_key_exists("attendance", $context) ? $context["attendance"] : (function () { throw new RuntimeError('Variable "attendance" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 30
                echo "              ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["a"], "User", [], "any", false, false, false, 30), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })())))) {
                    // line 31
                    echo "              <th style=\"text-align: center; \">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 31), "Y-m-d"), "html", null, true);
                    echo "</th>
              ";
                }
                // line 33
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            </tr>
          </thead>
  
          <tbody>
          ";
            // line 38
            $context["i"] = 0;
            // line 39
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 40
                echo "          <tr>
              <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attendance"]) || array_key_exists("attendance", $context) ? $context["attendance"] : (function () { throw new RuntimeError('Variable "attendance" does not exist.', 41, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 41, $this->source); })()), [], "array", false, false, false, 41), "User", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
          ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attendance"]) || array_key_exists("attendance", $context) ? $context["attendance"] : (function () { throw new RuntimeError('Variable "attendance" does not exist.', 42, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["at"]) {
                    // line 43
                    echo "          ";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["at"], "User", [], "any", false, false, false, 43), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["attendance"]) || array_key_exists("attendance", $context) ? $context["attendance"] : (function () { throw new RuntimeError('Variable "attendance" does not exist.', 43, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 43, $this->source); })()), [], "array", false, false, false, 43), "User", [], "any", false, false, false, 43)))) {
                        // line 44
                        echo "          ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["at"], "mark", [], "any", false, false, false, 44), 1))) {
                            // line 45
                            echo "              <td style=\"text-align: center; \">X</td>
          ";
                        }
                        // line 47
                        echo "          ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["at"], "mark", [], "any", false, false, false, 47), 0))) {
                            // line 48
                            echo "              <td></td>
          ";
                        }
                        // line 50
                        echo "          ";
                    }
                    // line 51
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['at'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "          </tr>
          ";
                // line 53
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 53, $this->source); })()) + 1);
                // line 54
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "          </tbody>
        </table>
      </div>
</section>
";
        }
        // line 60
        echo "</br>
<div style=\"
margin-left: 550px;\">
<a type=\"button\" href=\"/subject/";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary btn-lg\">OCENY</a>
<a type=\"button\" href=\"/subject/";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "/at/";
        echo twig_escape_filter($this->env, (isset($context["sid"]) || array_key_exists("sid", $context) ? $context["sid"] : (function () { throw new RuntimeError('Variable "sid" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\">OBECNOŚĆ</a>
<a type=\"button\" href=\"/subject/";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "/nt/";
        echo twig_escape_filter($this->env, (isset($context["sid"]) || array_key_exists("sid", $context) ? $context["sid"] : (function () { throw new RuntimeError('Variable "sid" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary btn-lg\">UWAGI</a>
<a type=\"button\" href=\"/subject/";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "/at/";
        echo twig_escape_filter($this->env, (isset($context["sid"]) || array_key_exists("sid", $context) ? $context["sid"] : (function () { throw new RuntimeError('Variable "sid" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-outline-primary btn-lg\">WYDARZENIA</a>
</div>
</main>

<div id=\"myModal\" class=\"modal\">

  <div class=\"modal-content\">
    <span class=\"close\">&times;</span>
<div class=\"container pt-4\">
<div class=\"overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light\" style=\"max-width: 460px; max-height: 500px;\">
";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 76, $this->source); })()), 'form_start');
        echo "
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nazwisko i imię</th>
      <th scope=\"col\">Obecność</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 86
        $context["h"] = 1;
        // line 87
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 88
            echo "    <tr>
      <th scope=\"row\">";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 89, $this->source); })()), "html", null, true);
            echo "</th>
      <td>";
            // line 90
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 90, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 90), [], "any", false, false, false, 90), 'label');
            echo "</td>
      <td style=\"text-align: center;\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 91, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 91), [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "check-f"]]);
            echo "</td>
      <td></td>
    </tr>
    ";
            // line 94
            $context["h"] = ((isset($context["h"]) || array_key_exists("h", $context) ? $context["h"] : (function () { throw new RuntimeError('Variable "h" does not exist.', 94, $this->source); })()) + 1);
            // line 95
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "  </tbody>
</table>

";
        // line 99
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 99, $this->source); })()), 'form_end');
        echo "
</div>
</div>
</div>

<style>
    .check-f {
        height: 20px;
        width: 20px;
        background-color: #eee;
    }
    input.transparent-input{
       background-color:rgba(0,0,0,0) !important;
       border:none !important;
       box-shadow:none !important;
    }
    table th, table td{
   display: table-cell;
   vertical-align: middle;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  padding-left: 600px;
  padding-right: 600px;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<script>
// Get the modal
var modal = document.getElementById(\"myModal\");

// Get the button that opens the modal
var btn = document.getElementById(\"myBtn\");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName(\"close\")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = \"block\";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = \"none\";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = \"none\";
  }
}
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "subject/attendance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  291 => 99,  286 => 96,  280 => 95,  278 => 94,  272 => 91,  268 => 90,  264 => 89,  261 => 88,  256 => 87,  254 => 86,  241 => 76,  226 => 66,  220 => 65,  214 => 64,  210 => 63,  205 => 60,  198 => 55,  192 => 54,  190 => 53,  187 => 52,  181 => 51,  178 => 50,  174 => 48,  171 => 47,  167 => 45,  164 => 44,  161 => 43,  157 => 42,  153 => 41,  150 => 40,  145 => 39,  143 => 38,  137 => 34,  131 => 33,  125 => 31,  122 => 30,  117 => 29,  115 => 28,  106 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panel.html.twig' %}

{% block title %}Obecność{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<main>


<div style=\"margin-left: 200px; margin-right: 200px;\">
<button class=\"btn btn-info btn-lg btn-block\" id=\"myBtn\">Sprawdź obecność</button>
</div>
</br>
<div class=\"table-responsive text-nowrap\">

        {% if attendance[0].User is defined %}
        <table class=\"table table-striped\">


          <thead>
            <tr>
              <th>Nazwisko i imię</th>
              
              {% set user = attendance[0].User %}
              {% for a in attendance %}
              {% if a.User == user %}
              <th style=\"text-align: center; \">{{ a.date|date('Y-m-d') }}</th>
              {% endif %}
              {% endfor %}
            </tr>
          </thead>
  
          <tbody>
          {% set i = 0 %}
          {% for a in students %}
          <tr>
              <td>{{ attendance[i].User }}</td>
          {% for at in attendance %}
          {% if at.User == attendance[i].User %}
          {% if at.mark == 1 %}
              <td style=\"text-align: center; \">X</td>
          {% endif %}
          {% if at.mark == 0 %}
              <td></td>
          {% endif %}
          {% endif %}
          {% endfor %}
          </tr>
          {% set i = i + 1 %}
          {% endfor %}
          </tbody>
        </table>
      </div>
</section>
{% endif %}
</br>
<div style=\"
margin-left: 550px;\">
<a type=\"button\" href=\"/subject/{{id}}\" class=\"btn btn-outline-primary btn-lg\">OCENY</a>
<a type=\"button\" href=\"/subject/{{id}}/at/{{sid}}\" class=\"btn btn-primary btn-lg\">OBECNOŚĆ</a>
<a type=\"button\" href=\"/subject/{{id}}/nt/{{sid}}\" class=\"btn btn-outline-primary btn-lg\">UWAGI</a>
<a type=\"button\" href=\"/subject/{{id}}/at/{{sid}}\" class=\"btn btn-outline-primary btn-lg\">WYDARZENIA</a>
</div>
</main>

<div id=\"myModal\" class=\"modal\">

  <div class=\"modal-content\">
    <span class=\"close\">&times;</span>
<div class=\"container pt-4\">
<div class=\"overflow-auto p-3 mb-3 mb-md-0 mr-md-3 bg-light\" style=\"max-width: 460px; max-height: 500px;\">
{{ form_start(form1) }}
<table class=\"table table-striped\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Nazwisko i imię</th>
      <th scope=\"col\">Obecność</th>
    </tr>
  </thead>
  <tbody>
  {% set h = 1 %}
  {% for r in students %}
    <tr>
      <th scope=\"row\">{{ h }}</th>
      <td>{{ form_label(attribute(form1, r.id)) }}</td>
      <td style=\"text-align: center;\">{{ form_widget(attribute(form1, r.id), {'attr': {'class': 'check-f'}}) }}</td>
      <td></td>
    </tr>
    {% set h = h+1 %}
    {% endfor%}
  </tbody>
</table>

{{ form_end(form1) }}
</div>
</div>
</div>

<style>
    .check-f {
        height: 20px;
        width: 20px;
        background-color: #eee;
    }
    input.transparent-input{
       background-color:rgba(0,0,0,0) !important;
       border:none !important;
       box-shadow:none !important;
    }
    table th, table td{
   display: table-cell;
   vertical-align: middle;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  padding-left: 600px;
  padding-right: 600px;
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
<script>
// Get the modal
var modal = document.getElementById(\"myModal\");

// Get the button that opens the modal
var btn = document.getElementById(\"myBtn\");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName(\"close\")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = \"block\";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = \"none\";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = \"none\";
  }
}
</script>
{% endblock %}
", "subject/attendance.html.twig", "/sfprojects/jobeet/japp/templates/subject/attendance.html.twig");
    }
}
