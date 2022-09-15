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
<main style=\"margin-left: 10px;\">

<select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"ice-cream\">
    <option value=\"\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</option>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 16
            echo "    ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 16), (isset($context["selected"]) || array_key_exists("selected", $context) ? $context["selected"] : (function () { throw new RuntimeError('Variable "selected" does not exist.', 16, $this->source); })())))) {
                // line 17
                echo "    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 17), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</option>
    ";
            }
            // line 19
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 41, $this->source); })()), 0, [], "array", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 41, $this->source); })()), 0, [], "array", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</option>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 43
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo " 
  </select></td>
      <td><select name=\"s21\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 47, $this->source); })()), 8, [], "array", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 47, $this->source); })()), 8, [], "array", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
        echo "</option>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 49
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo " 
  </select></td>
      <td><select name=\"s31\" name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 53, $this->source); })()), 16, [], "array", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 53, $this->source); })()), 16, [], "array", false, false, false, 53), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "</option>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 55
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo " 
  </select></td>
  <td><select name=\"s41\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 59, $this->source); })()), 24, [], "array", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 59, $this->source); })()), 24, [], "array", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
        echo "</option>
    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 61
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " 
  </select></td>
  <td><select name=\"s51\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 65, $this->source); })()), 32, [], "array", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 65, $this->source); })()), 32, [], "array", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
        echo "</option>
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 67
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 67), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo " 
  </select></td>
  
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td><select name=\"s12\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 75, $this->source); })()), 1, [], "array", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 75, $this->source); })()), 1, [], "array", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
        echo "</option>
    ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 77
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 77), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo " 
  </select></td>
  <td><select name=\"s22\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 81, $this->source); })()), 9, [], "array", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 81, $this->source); })()), 9, [], "array", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
        echo "</option>
    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 83
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 83), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 83), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo " 
  </select></td>
  <td><select name=\"s32\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 87, $this->source); })()), 17, [], "array", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 87, $this->source); })()), 17, [], "array", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
        echo "</option>
    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 89
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 89), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo " 
  </select></td>
  <td><select name=\"s42\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 93, $this->source); })()), 25, [], "array", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 93, $this->source); })()), 25, [], "array", false, false, false, 93), "name", [], "any", false, false, false, 93), "html", null, true);
        echo "</option>
    ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 95
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 95), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 95), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo " 
  </select></td>
  <td><select name=\"s52\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 99, $this->source); })()), 33, [], "array", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 99, $this->source); })()), 33, [], "array", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
        echo "</option>
    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 101
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 101), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 101), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td><select name=\"s13\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 108, $this->source); })()), 2, [], "array", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 108, $this->source); })()), 2, [], "array", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
        echo "  …</option>
    ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 109, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 110
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 110), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 110), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo " 
  </select></td>
  <td><select name=\"s23\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 114, $this->source); })()), 10, [], "array", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 114, $this->source); })()), 10, [], "array", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "</option>
    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 116
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 116), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 116), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo " 
  </select></td>
  <td><select name=\"s33\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 120, $this->source); })()), 18, [], "array", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 120, $this->source); })()), 18, [], "array", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
        echo "</option>
    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 122
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 122), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 122), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo " 
  </select></td>
  <td><select name=\"s43\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 126, $this->source); })()), 26, [], "array", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 126, $this->source); })()), 26, [], "array", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
        echo "</option>
    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 128
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 128), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 128), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo " 
  </select></td>
  <td><select name=\"s53\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 132, $this->source); })()), 34, [], "array", false, false, false, 132), "name", [], "any", false, false, false, 132), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 132, $this->source); })()), 34, [], "array", false, false, false, 132), "name", [], "any", false, false, false, 132), "html", null, true);
        echo "</option>
    ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 133, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 134
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 134), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">4</th>
      <td><select name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 141, $this->source); })()), 3, [], "array", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 141, $this->source); })()), 3, [], "array", false, false, false, 141), "name", [], "any", false, false, false, 141), "html", null, true);
        echo "</option>
    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 143
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 143), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 143), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo " 
  </select></td>
  <td><select name=\"s24\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 147, $this->source); })()), 11, [], "array", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 147, $this->source); })()), 11, [], "array", false, false, false, 147), "name", [], "any", false, false, false, 147), "html", null, true);
        echo "</option>
    ";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 149
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 149), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 149), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo " 
  </select></td>
  <td><select name=\"s34\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 153, $this->source); })()), 19, [], "array", false, false, false, 153), "name", [], "any", false, false, false, 153), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 153, $this->source); })()), 19, [], "array", false, false, false, 153), "name", [], "any", false, false, false, 153), "html", null, true);
        echo "</option>
    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 154, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 155
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 155), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 155), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo " 
  </select></td>
  <td><select name=\"s44\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 159, $this->source); })()), 27, [], "array", false, false, false, 159), "name", [], "any", false, false, false, 159), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 159, $this->source); })()), 27, [], "array", false, false, false, 159), "name", [], "any", false, false, false, 159), "html", null, true);
        echo "</option>
    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 161
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 161), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 161), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo " 
  </select></td>
  <td><select name=\"s54\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 165
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 165, $this->source); })()), 35, [], "array", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 165, $this->source); })()), 35, [], "array", false, false, false, 165), "name", [], "any", false, false, false, 165), "html", null, true);
        echo "</option>
    ";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 167
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 167), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 167), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">5</th>
      <td><select name=\"s15\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 174, $this->source); })()), 4, [], "array", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 174, $this->source); })()), 4, [], "array", false, false, false, 174), "name", [], "any", false, false, false, 174), "html", null, true);
        echo "</option>
    ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 175, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 176
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 176), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 176), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo " 
  </select></td>
  <td><select name=\"s25\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 180
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 180, $this->source); })()), 12, [], "array", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 180, $this->source); })()), 12, [], "array", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
        echo "</option>
    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 181, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 182
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 182), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 182), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo " 
  </select></td>
  <td><select name=\"s35\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 186, $this->source); })()), 20, [], "array", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 186, $this->source); })()), 20, [], "array", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true);
        echo "</option>
    ";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 187, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 188
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 188), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 188), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo " 
  </select></td>
  <td><select name=\"s45\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 192, $this->source); })()), 28, [], "array", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 192, $this->source); })()), 28, [], "array", false, false, false, 192), "name", [], "any", false, false, false, 192), "html", null, true);
        echo "</option>
    ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 193, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 194
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 194), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 194), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo " 
  </select></td>
  <td><select name=\"s55\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 198
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 198, $this->source); })()), 36, [], "array", false, false, false, 198), "name", [], "any", false, false, false, 198), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 198, $this->source); })()), 36, [], "array", false, false, false, 198), "name", [], "any", false, false, false, 198), "html", null, true);
        echo "</option>
    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 200
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 200), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 200), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">6</th>
      <td><select name=\"s16\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 207, $this->source); })()), 5, [], "array", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 207, $this->source); })()), 5, [], "array", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
        echo "</option>
    ";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 208, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 209
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 209), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 209), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo " 
  </select></td>
  <td><select name=\"s26\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 213, $this->source); })()), 13, [], "array", false, false, false, 213), "name", [], "any", false, false, false, 213), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 213, $this->source); })()), 13, [], "array", false, false, false, 213), "name", [], "any", false, false, false, 213), "html", null, true);
        echo "</option>
    ";
        // line 214
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 214, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 215
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 215), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 215), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo " 
  </select></td>
  <td><select name=\"s36\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 219, $this->source); })()), 21, [], "array", false, false, false, 219), "name", [], "any", false, false, false, 219), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 219, $this->source); })()), 21, [], "array", false, false, false, 219), "name", [], "any", false, false, false, 219), "html", null, true);
        echo "</option>
    ";
        // line 220
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 220, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 221
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 221), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 221), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo " 
  </select></td>
  <td><select name=\"s46\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 225, $this->source); })()), 29, [], "array", false, false, false, 225), "name", [], "any", false, false, false, 225), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 225, $this->source); })()), 29, [], "array", false, false, false, 225), "name", [], "any", false, false, false, 225), "html", null, true);
        echo "</option>
    ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 226, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 227
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 227), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 227), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo " 
  </select></td>
  <td><select name=\"s56\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 231, $this->source); })()), 37, [], "array", false, false, false, 231), "name", [], "any", false, false, false, 231), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 231, $this->source); })()), 37, [], "array", false, false, false, 231), "name", [], "any", false, false, false, 231), "html", null, true);
        echo "</option>
    ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 232, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 233
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 233), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 233), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 234
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">7</th>
      <td><select name=\"s17\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 240, $this->source); })()), 6, [], "array", false, false, false, 240), "name", [], "any", false, false, false, 240), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 240, $this->source); })()), 6, [], "array", false, false, false, 240), "name", [], "any", false, false, false, 240), "html", null, true);
        echo "</option>
    ";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 241, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 242
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 242), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 242), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo " 
  </select></td>
  <td><select name=\"s27\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 246, $this->source); })()), 14, [], "array", false, false, false, 246), "name", [], "any", false, false, false, 246), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 246, $this->source); })()), 14, [], "array", false, false, false, 246), "name", [], "any", false, false, false, 246), "html", null, true);
        echo "</option>
    ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 247, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 248
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 248), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 248), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 249
        echo " 
  </select></td>
  <td><select name=\"s37\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 252
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 252, $this->source); })()), 22, [], "array", false, false, false, 252), "name", [], "any", false, false, false, 252), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 252, $this->source); })()), 22, [], "array", false, false, false, 252), "name", [], "any", false, false, false, 252), "html", null, true);
        echo "</option>
    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 253, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 254
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 254), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 254), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo " 
  </select></td>
  <td><select name=\"s47\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 258, $this->source); })()), 30, [], "array", false, false, false, 258), "name", [], "any", false, false, false, 258), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 258, $this->source); })()), 30, [], "array", false, false, false, 258), "name", [], "any", false, false, false, 258), "html", null, true);
        echo "</option>
    ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 259, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 260
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 260), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 260), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo " 
  </select></td>
  <td><select name=\"s57\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 264, $this->source); })()), 38, [], "array", false, false, false, 264), "name", [], "any", false, false, false, 264), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 264, $this->source); })()), 38, [], "array", false, false, false, 264), "name", [], "any", false, false, false, 264), "html", null, true);
        echo "</option>
    ";
        // line 265
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 265, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 266
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 266), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 266), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">8</th>
      <td><select name=\"s18\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 273, $this->source); })()), 7, [], "array", false, false, false, 273), "name", [], "any", false, false, false, 273), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 273, $this->source); })()), 7, [], "array", false, false, false, 273), "name", [], "any", false, false, false, 273), "html", null, true);
        echo "</option>
    ";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 274, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 275
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 275), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 275), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo " 
  </select></td>
  <td><select name=\"s28\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 279, $this->source); })()), 15, [], "array", false, false, false, 279), "name", [], "any", false, false, false, 279), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 279, $this->source); })()), 15, [], "array", false, false, false, 279), "name", [], "any", false, false, false, 279), "html", null, true);
        echo "</option>
    ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 280, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 281
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 281), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 281), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 282
        echo " 
  </select></td>
  <td><select name=\"s38\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 285
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 285, $this->source); })()), 23, [], "array", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 285, $this->source); })()), 23, [], "array", false, false, false, 285), "name", [], "any", false, false, false, 285), "html", null, true);
        echo "</option>
    ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 286, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 287
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 287), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 287), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo " 
  </select></td>
  <td><select name=\"s48\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 291, $this->source); })()), 31, [], "array", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 291, $this->source); })()), 31, [], "array", false, false, false, 291), "name", [], "any", false, false, false, 291), "html", null, true);
        echo "</option>
    ";
        // line 292
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 292, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 293
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 293), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 293), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        echo " 
  </select></td>
  <td><select name=\"s58\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 297
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 297, $this->source); })()), 39, [], "array", false, false, false, 297), "name", [], "any", false, false, false, 297), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 297, $this->source); })()), 39, [], "array", false, false, false, 297), "name", [], "any", false, false, false, 297), "html", null, true);
        echo "</option>
    ";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 298, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 299
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 299), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 299), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
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
        return array (  1202 => 300,  1191 => 299,  1187 => 298,  1181 => 297,  1176 => 294,  1165 => 293,  1161 => 292,  1155 => 291,  1150 => 288,  1139 => 287,  1135 => 286,  1129 => 285,  1124 => 282,  1113 => 281,  1109 => 280,  1103 => 279,  1098 => 276,  1087 => 275,  1083 => 274,  1077 => 273,  1069 => 267,  1058 => 266,  1054 => 265,  1048 => 264,  1043 => 261,  1032 => 260,  1028 => 259,  1022 => 258,  1017 => 255,  1006 => 254,  1002 => 253,  996 => 252,  991 => 249,  980 => 248,  976 => 247,  970 => 246,  965 => 243,  954 => 242,  950 => 241,  944 => 240,  936 => 234,  925 => 233,  921 => 232,  915 => 231,  910 => 228,  899 => 227,  895 => 226,  889 => 225,  884 => 222,  873 => 221,  869 => 220,  863 => 219,  858 => 216,  847 => 215,  843 => 214,  837 => 213,  832 => 210,  821 => 209,  817 => 208,  811 => 207,  803 => 201,  792 => 200,  788 => 199,  782 => 198,  777 => 195,  766 => 194,  762 => 193,  756 => 192,  751 => 189,  740 => 188,  736 => 187,  730 => 186,  725 => 183,  714 => 182,  710 => 181,  704 => 180,  699 => 177,  688 => 176,  684 => 175,  678 => 174,  670 => 168,  659 => 167,  655 => 166,  649 => 165,  644 => 162,  633 => 161,  629 => 160,  623 => 159,  618 => 156,  607 => 155,  603 => 154,  597 => 153,  592 => 150,  581 => 149,  577 => 148,  571 => 147,  566 => 144,  555 => 143,  551 => 142,  545 => 141,  537 => 135,  526 => 134,  522 => 133,  516 => 132,  511 => 129,  500 => 128,  496 => 127,  490 => 126,  485 => 123,  474 => 122,  470 => 121,  464 => 120,  459 => 117,  448 => 116,  444 => 115,  438 => 114,  433 => 111,  422 => 110,  418 => 109,  412 => 108,  404 => 102,  393 => 101,  389 => 100,  383 => 99,  378 => 96,  367 => 95,  363 => 94,  357 => 93,  352 => 90,  341 => 89,  337 => 88,  331 => 87,  326 => 84,  315 => 83,  311 => 82,  305 => 81,  300 => 78,  289 => 77,  285 => 76,  279 => 75,  270 => 68,  259 => 67,  255 => 66,  249 => 65,  244 => 62,  233 => 61,  229 => 60,  223 => 59,  218 => 56,  207 => 55,  203 => 54,  197 => 53,  192 => 50,  181 => 49,  177 => 48,  171 => 47,  166 => 44,  155 => 43,  151 => 42,  145 => 41,  116 => 19,  108 => 17,  105 => 16,  101 => 15,  97 => 14,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
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
<main style=\"margin-left: 10px;\">

<select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"ice-cream\">
    <option value=\"\">{{ selected }}</option>
    {% for element in group %}
    {% if element.name != selected %}
    <option value=\"{{element.id}}\">{{element.name}}</option>
    {% endif %}
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
