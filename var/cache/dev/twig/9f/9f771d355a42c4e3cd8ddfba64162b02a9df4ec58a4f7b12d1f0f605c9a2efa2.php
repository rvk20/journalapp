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

/* lesson/plan.html.twig */
class __TwigTemplate_413cf3b8eb50cc8032bf4b40fca5f9766278420b68ed5778429ee3cc80ec6b07 extends Template
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
        return "lesson/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesson/plan.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesson/plan.html.twig"));

        $this->parent = $this->loadTemplate("lesson/index.html.twig", "lesson/plan.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Plany lekcji";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<main style=\"margin-top: 58px\">
<div class=\"container pt-4\">
<select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"ice-cream\">
    <option value=\"\">Wybierz klasę  …</option>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 16
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
  </select>

 
</br>

<form method=\"POST\">
<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Poniedziałek</th>
      <th scope=\"col\">Wtorek</th>
      <th scope=\"col\">Środa</th>
      <th scope=\"col\">Czwartek</th>
      <th scope=\"col\">Piątek</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td><select name=\"s11\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 39, $this->source); })()), 0, [], "array", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 39, $this->source); })()), 0, [], "array", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "</option>
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 41
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo " 
  </select></td>
      <td><select name=\"s21\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 45, $this->source); })()), 8, [], "array", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 45, $this->source); })()), 8, [], "array", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
        echo "</option>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 47
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 47), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo " 
  </select></td>
      <td><select name=\"s31\" name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 51, $this->source); })()), 16, [], "array", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 51, $this->source); })()), 16, [], "array", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
        echo "</option>
    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 53
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " 
  </select></td>
  <td><select name=\"s41\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 57, $this->source); })()), 24, [], "array", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 57, $this->source); })()), 24, [], "array", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
        echo "</option>
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 59
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo " 
  </select></td>
  <td><select name=\"s51\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 63, $this->source); })()), 32, [], "array", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 63, $this->source); })()), 32, [], "array", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "</option>
    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 65
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo " 
  </select></td>
  
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td><select name=\"s12\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 73, $this->source); })()), 1, [], "array", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 73, $this->source); })()), 1, [], "array", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "</option>
    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 75
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo " 
  </select></td>
  <td><select name=\"s22\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 79, $this->source); })()), 9, [], "array", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 79, $this->source); })()), 9, [], "array", false, false, false, 79), "name", [], "any", false, false, false, 79), "html", null, true);
        echo "</option>
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 81
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo " 
  </select></td>
  <td><select name=\"s32\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 85, $this->source); })()), 17, [], "array", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 85, $this->source); })()), 17, [], "array", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
        echo "</option>
    ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 87
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo " 
  </select></td>
  <td><select name=\"s42\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 91, $this->source); })()), 25, [], "array", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 91, $this->source); })()), 25, [], "array", false, false, false, 91), "name", [], "any", false, false, false, 91), "html", null, true);
        echo "</option>
    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 93
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 93), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo " 
  </select></td>
  <td><select name=\"s52\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 97, $this->source); })()), 33, [], "array", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 97, $this->source); })()), 33, [], "array", false, false, false, 97), "name", [], "any", false, false, false, 97), "html", null, true);
        echo "</option>
    ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 99
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td><select name=\"s13\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 106, $this->source); })()), 2, [], "array", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 106, $this->source); })()), 2, [], "array", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
        echo "  …</option>
    ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 108
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo " 
  </select></td>
  <td><select name=\"s23\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 112, $this->source); })()), 10, [], "array", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 112, $this->source); })()), 10, [], "array", false, false, false, 112), "name", [], "any", false, false, false, 112), "html", null, true);
        echo "</option>
    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 114
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 114), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 114), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo " 
  </select></td>
  <td><select name=\"s33\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 118, $this->source); })()), 18, [], "array", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 118, $this->source); })()), 18, [], "array", false, false, false, 118), "name", [], "any", false, false, false, 118), "html", null, true);
        echo "</option>
    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 120
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 120), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 120), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo " 
  </select></td>
  <td><select name=\"s43\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 124, $this->source); })()), 26, [], "array", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 124, $this->source); })()), 26, [], "array", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
        echo "</option>
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 126
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 126), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 126), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo " 
  </select></td>
  <td><select name=\"s53\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 130, $this->source); })()), 34, [], "array", false, false, false, 130), "name", [], "any", false, false, false, 130), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 130, $this->source); })()), 34, [], "array", false, false, false, 130), "name", [], "any", false, false, false, 130), "html", null, true);
        echo "</option>
    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 131, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 132
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 132), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 132), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">4</th>
      <td><select name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 139, $this->source); })()), 3, [], "array", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 139, $this->source); })()), 3, [], "array", false, false, false, 139), "name", [], "any", false, false, false, 139), "html", null, true);
        echo "</option>
    ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 141
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 141), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 141), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo " 
  </select></td>
  <td><select name=\"s24\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 145, $this->source); })()), 11, [], "array", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 145, $this->source); })()), 11, [], "array", false, false, false, 145), "name", [], "any", false, false, false, 145), "html", null, true);
        echo "</option>
    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 146, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 147
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 147), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 147), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo " 
  </select></td>
  <td><select name=\"s34\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 151, $this->source); })()), 19, [], "array", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 151, $this->source); })()), 19, [], "array", false, false, false, 151), "name", [], "any", false, false, false, 151), "html", null, true);
        echo "</option>
    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 153
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 153), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 153), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        echo " 
  </select></td>
  <td><select name=\"s44\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 157, $this->source); })()), 27, [], "array", false, false, false, 157), "name", [], "any", false, false, false, 157), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 157, $this->source); })()), 27, [], "array", false, false, false, 157), "name", [], "any", false, false, false, 157), "html", null, true);
        echo "</option>
    ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 158, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 159
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 159), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 159), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo " 
  </select></td>
  <td><select name=\"s54\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 163
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 163, $this->source); })()), 35, [], "array", false, false, false, 163), "name", [], "any", false, false, false, 163), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 163, $this->source); })()), 35, [], "array", false, false, false, 163), "name", [], "any", false, false, false, 163), "html", null, true);
        echo "</option>
    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 164, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 165
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 165), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 165), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">5</th>
      <td><select name=\"s15\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 172, $this->source); })()), 4, [], "array", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 172, $this->source); })()), 4, [], "array", false, false, false, 172), "name", [], "any", false, false, false, 172), "html", null, true);
        echo "</option>
    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 173, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 174
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 174), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 174), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo " 
  </select></td>
  <td><select name=\"s25\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 178, $this->source); })()), 12, [], "array", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 178, $this->source); })()), 12, [], "array", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
        echo "</option>
    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 180
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 180), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 180), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo " 
  </select></td>
  <td><select name=\"s35\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 184, $this->source); })()), 20, [], "array", false, false, false, 184), "name", [], "any", false, false, false, 184), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 184, $this->source); })()), 20, [], "array", false, false, false, 184), "name", [], "any", false, false, false, 184), "html", null, true);
        echo "</option>
    ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 185, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 186
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 186), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 186), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo " 
  </select></td>
  <td><select name=\"s45\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 190, $this->source); })()), 28, [], "array", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 190, $this->source); })()), 28, [], "array", false, false, false, 190), "name", [], "any", false, false, false, 190), "html", null, true);
        echo "</option>
    ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 192
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 192), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 192), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo " 
  </select></td>
  <td><select name=\"s55\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 196, $this->source); })()), 36, [], "array", false, false, false, 196), "name", [], "any", false, false, false, 196), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 196, $this->source); })()), 36, [], "array", false, false, false, 196), "name", [], "any", false, false, false, 196), "html", null, true);
        echo "</option>
    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 197, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 198
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 198), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 198), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">6</th>
      <td><select name=\"s16\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 205, $this->source); })()), 5, [], "array", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 205, $this->source); })()), 5, [], "array", false, false, false, 205), "name", [], "any", false, false, false, 205), "html", null, true);
        echo "</option>
    ";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 206, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 207
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 207), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 207), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 208
        echo " 
  </select></td>
  <td><select name=\"s26\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 211, $this->source); })()), 13, [], "array", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 211, $this->source); })()), 13, [], "array", false, false, false, 211), "name", [], "any", false, false, false, 211), "html", null, true);
        echo "</option>
    ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 212, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 213
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 213), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 213), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        echo " 
  </select></td>
  <td><select name=\"s36\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 217
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 217, $this->source); })()), 21, [], "array", false, false, false, 217), "name", [], "any", false, false, false, 217), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 217, $this->source); })()), 21, [], "array", false, false, false, 217), "name", [], "any", false, false, false, 217), "html", null, true);
        echo "</option>
    ";
        // line 218
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 218, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 219
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 219), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 219), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo " 
  </select></td>
  <td><select name=\"s46\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 223, $this->source); })()), 29, [], "array", false, false, false, 223), "name", [], "any", false, false, false, 223), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 223, $this->source); })()), 29, [], "array", false, false, false, 223), "name", [], "any", false, false, false, 223), "html", null, true);
        echo "</option>
    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 224, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 225
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 225), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 225), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo " 
  </select></td>
  <td><select name=\"s56\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 229
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 229, $this->source); })()), 37, [], "array", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 229, $this->source); })()), 37, [], "array", false, false, false, 229), "name", [], "any", false, false, false, 229), "html", null, true);
        echo "</option>
    ";
        // line 230
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 230, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 231
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 231), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 231), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">7</th>
      <td><select name=\"s17\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 238
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 238, $this->source); })()), 6, [], "array", false, false, false, 238), "name", [], "any", false, false, false, 238), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 238, $this->source); })()), 6, [], "array", false, false, false, 238), "name", [], "any", false, false, false, 238), "html", null, true);
        echo "</option>
    ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 239, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 240
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 240), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 240), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo " 
  </select></td>
  <td><select name=\"s27\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 244, $this->source); })()), 14, [], "array", false, false, false, 244), "name", [], "any", false, false, false, 244), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 244, $this->source); })()), 14, [], "array", false, false, false, 244), "name", [], "any", false, false, false, 244), "html", null, true);
        echo "</option>
    ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 245, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 246
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 246), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 246), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo " 
  </select></td>
  <td><select name=\"s37\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 250, $this->source); })()), 22, [], "array", false, false, false, 250), "name", [], "any", false, false, false, 250), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 250, $this->source); })()), 22, [], "array", false, false, false, 250), "name", [], "any", false, false, false, 250), "html", null, true);
        echo "</option>
    ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 251, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 252
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 252), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 252), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo " 
  </select></td>
  <td><select name=\"s47\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 256, $this->source); })()), 30, [], "array", false, false, false, 256), "name", [], "any", false, false, false, 256), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 256, $this->source); })()), 30, [], "array", false, false, false, 256), "name", [], "any", false, false, false, 256), "html", null, true);
        echo "</option>
    ";
        // line 257
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 257, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 258
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 258), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 258), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        echo " 
  </select></td>
  <td><select name=\"s57\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 262, $this->source); })()), 38, [], "array", false, false, false, 262), "name", [], "any", false, false, false, 262), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 262, $this->source); })()), 38, [], "array", false, false, false, 262), "name", [], "any", false, false, false, 262), "html", null, true);
        echo "</option>
    ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 263, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 264
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 264), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 264), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">8</th>
      <td><select name=\"s18\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 271, $this->source); })()), 7, [], "array", false, false, false, 271), "name", [], "any", false, false, false, 271), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 271, $this->source); })()), 7, [], "array", false, false, false, 271), "name", [], "any", false, false, false, 271), "html", null, true);
        echo "</option>
    ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 272, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 273
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 273), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 273), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        echo " 
  </select></td>
  <td><select name=\"s28\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 277
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 277, $this->source); })()), 15, [], "array", false, false, false, 277), "name", [], "any", false, false, false, 277), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 277, $this->source); })()), 15, [], "array", false, false, false, 277), "name", [], "any", false, false, false, 277), "html", null, true);
        echo "</option>
    ";
        // line 278
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 278, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 279
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 279), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 279), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        echo " 
  </select></td>
  <td><select name=\"s38\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 283
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 283, $this->source); })()), 23, [], "array", false, false, false, 283), "name", [], "any", false, false, false, 283), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 283, $this->source); })()), 23, [], "array", false, false, false, 283), "name", [], "any", false, false, false, 283), "html", null, true);
        echo "</option>
    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 284, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 285
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 285), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 285), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo " 
  </select></td>
  <td><select name=\"s48\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 289, $this->source); })()), 31, [], "array", false, false, false, 289), "name", [], "any", false, false, false, 289), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 289, $this->source); })()), 31, [], "array", false, false, false, 289), "name", [], "any", false, false, false, 289), "html", null, true);
        echo "</option>
    ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 290, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 291
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 291), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 291), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo " 
  </select></td>
  <td><select name=\"s58\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 295, $this->source); })()), 39, [], "array", false, false, false, 295), "name", [], "any", false, false, false, 295), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 295, $this->source); })()), 39, [], "array", false, false, false, 295), "name", [], "any", false, false, false, 295), "html", null, true);
        echo "</option>
    ";
        // line 296
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 296, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 297
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 297), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 297), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo " 
  </select></td>
    </tr>
  </tbody>
</table>
<button class=\"btn btn-info btn-lg btn-block\" type=\"submit\" name='submit'>Aktualizuj
    </button>
</form>
</br>
</br>
</div>
</main>
<script>
const selectElement = document.querySelector('select[name=\"ice-cream\"]');

selectElement.addEventListener('change', (event) => {
  location.href = `/lesson/\${event.target.value}`;
});

</script>
  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lesson/plan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1194 => 298,  1183 => 297,  1179 => 296,  1173 => 295,  1168 => 292,  1157 => 291,  1153 => 290,  1147 => 289,  1142 => 286,  1131 => 285,  1127 => 284,  1121 => 283,  1116 => 280,  1105 => 279,  1101 => 278,  1095 => 277,  1090 => 274,  1079 => 273,  1075 => 272,  1069 => 271,  1061 => 265,  1050 => 264,  1046 => 263,  1040 => 262,  1035 => 259,  1024 => 258,  1020 => 257,  1014 => 256,  1009 => 253,  998 => 252,  994 => 251,  988 => 250,  983 => 247,  972 => 246,  968 => 245,  962 => 244,  957 => 241,  946 => 240,  942 => 239,  936 => 238,  928 => 232,  917 => 231,  913 => 230,  907 => 229,  902 => 226,  891 => 225,  887 => 224,  881 => 223,  876 => 220,  865 => 219,  861 => 218,  855 => 217,  850 => 214,  839 => 213,  835 => 212,  829 => 211,  824 => 208,  813 => 207,  809 => 206,  803 => 205,  795 => 199,  784 => 198,  780 => 197,  774 => 196,  769 => 193,  758 => 192,  754 => 191,  748 => 190,  743 => 187,  732 => 186,  728 => 185,  722 => 184,  717 => 181,  706 => 180,  702 => 179,  696 => 178,  691 => 175,  680 => 174,  676 => 173,  670 => 172,  662 => 166,  651 => 165,  647 => 164,  641 => 163,  636 => 160,  625 => 159,  621 => 158,  615 => 157,  610 => 154,  599 => 153,  595 => 152,  589 => 151,  584 => 148,  573 => 147,  569 => 146,  563 => 145,  558 => 142,  547 => 141,  543 => 140,  537 => 139,  529 => 133,  518 => 132,  514 => 131,  508 => 130,  503 => 127,  492 => 126,  488 => 125,  482 => 124,  477 => 121,  466 => 120,  462 => 119,  456 => 118,  451 => 115,  440 => 114,  436 => 113,  430 => 112,  425 => 109,  414 => 108,  410 => 107,  404 => 106,  396 => 100,  385 => 99,  381 => 98,  375 => 97,  370 => 94,  359 => 93,  355 => 92,  349 => 91,  344 => 88,  333 => 87,  329 => 86,  323 => 85,  318 => 82,  307 => 81,  303 => 80,  297 => 79,  292 => 76,  281 => 75,  277 => 74,  271 => 73,  262 => 66,  251 => 65,  247 => 64,  241 => 63,  236 => 60,  225 => 59,  221 => 58,  215 => 57,  210 => 54,  199 => 53,  195 => 52,  189 => 51,  184 => 48,  173 => 47,  169 => 46,  163 => 45,  158 => 42,  147 => 41,  143 => 40,  137 => 39,  113 => 17,  102 => 16,  98 => 15,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'lesson/index.html.twig' %}


{% block title %}Plany lekcji{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
<main style=\"margin-top: 58px\">
<div class=\"container pt-4\">
<select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"ice-cream\">
    <option value=\"\">Wybierz klasę  …</option>
    {% for element in group %}
    <option value=\"{{element.id}}\">{{element.name}}</option>
    {% endfor %} 
  </select>

 
</br>

<form method=\"POST\">
<table class=\"table\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">Poniedziałek</th>
      <th scope=\"col\">Wtorek</th>
      <th scope=\"col\">Środa</th>
      <th scope=\"col\">Czwartek</th>
      <th scope=\"col\">Piątek</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td><select name=\"s11\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[0].name}}\">{{plan[0].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
      <td><select name=\"s21\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"{{plan[8].name}}\">{{plan[8].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
      <td><select name=\"s31\" name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[16].name}}\">{{plan[16].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s41\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"{{plan[24].name}}\">{{plan[24].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s51\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[32].name}}\">{{plan[32].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td><select name=\"s12\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[1].name}}\">{{plan[1].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s22\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[9].name}}\">{{plan[9].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s32\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[17].name}}\">{{plan[17].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s42\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[25].name}}\">{{plan[25].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s52\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[33].name}}\">{{plan[33].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td><select name=\"s13\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[2].name}}\">{{plan[2].name}}  …</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s23\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[10].name}}\">{{plan[10].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s33\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[18].name}}\">{{plan[18].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s43\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[26].name}}\">{{plan[26].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s53\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[34].name}}\">{{plan[34].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">4</th>
      <td><select name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[3].name}}\">{{plan[3].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s24\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[11].name}}\">{{plan[11].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s34\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[19].name}}\">{{plan[19].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s44\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[27].name}}\">{{plan[27].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s54\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[35].name}}\">{{plan[35].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">5</th>
      <td><select name=\"s15\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[4].name}}\">{{plan[4].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s25\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[12].name}}\">{{plan[12].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s35\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[20].name}}\">{{plan[20].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s45\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[28].name}}\">{{plan[28].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s55\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[36].name}}\">{{plan[36].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">6</th>
      <td><select name=\"s16\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[5].name}}\">{{plan[5].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s26\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[13].name}}\">{{plan[13].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s36\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[21].name}}\">{{plan[21].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s46\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[29].name}}\">{{plan[29].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s56\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[37].name}}\">{{plan[37].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">7</th>
      <td><select name=\"s17\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[6].name}}\">{{plan[6].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s27\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[14].name}}\">{{plan[14].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s37\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[22].name}}\">{{plan[22].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s47\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[30].name}}\">{{plan[30].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s57\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[38].name}}\">{{plan[38].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">8</th>
      <td><select name=\"s18\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[7].name}}\">{{plan[7].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s28\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[15].name}}\">{{plan[15].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s38\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[23].name}}\">{{plan[23].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s48\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[31].name}}\">{{plan[31].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
  <td><select name=\"s58\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"{{plan[39].name}}\">{{plan[39].name}}</option>
    {% for s in subjects %}
    <option value=\"{{s.name}}\">{{s.name}}</option>
    {% endfor %} 
  </select></td>
    </tr>
  </tbody>
</table>
<button class=\"btn btn-info btn-lg btn-block\" type=\"submit\" name='submit'>Aktualizuj
    </button>
</form>
</br>
</br>
</div>
</main>
<script>
const selectElement = document.querySelector('select[name=\"ice-cream\"]');

selectElement.addEventListener('change', (event) => {
  location.href = `/lesson/\${event.target.value}`;
});

</script>
  
{% endblock %}
", "lesson/plan.html.twig", "/sfprojects/jobeet/japp/templates/lesson/plan.html.twig");
    }
}
