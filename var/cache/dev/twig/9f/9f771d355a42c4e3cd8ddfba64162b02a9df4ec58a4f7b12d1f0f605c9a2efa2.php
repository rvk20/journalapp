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
<div class=\"container pt-4\">
<select class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"ice-cream\">
    <option value=\"\">Wybierz klasę  …</option>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 15
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
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
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 38, $this->source); })()), 0, [], "array", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 38, $this->source); })()), 0, [], "array", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
        echo "</option>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 40
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo " 
  </select></td>
      <td><select name=\"s21\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 44, $this->source); })()), 8, [], "array", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 44, $this->source); })()), 8, [], "array", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
        echo "</option>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 46
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo " 
  </select></td>
      <td><select name=\"s31\" name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 50, $this->source); })()), 16, [], "array", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 50, $this->source); })()), 16, [], "array", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        echo "</option>
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 52
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 52), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo " 
  </select></td>
  <td><select name=\"s41\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option  value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 56, $this->source); })()), 24, [], "array", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 56, $this->source); })()), 24, [], "array", false, false, false, 56), "name", [], "any", false, false, false, 56), "html", null, true);
        echo "</option>
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 58
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 58), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo " 
  </select></td>
  <td><select name=\"s51\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 62, $this->source); })()), 32, [], "array", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 62, $this->source); })()), 32, [], "array", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
        echo "</option>
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 64
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo " 
  </select></td>
  
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td><select name=\"s12\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 72, $this->source); })()), 1, [], "array", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 72, $this->source); })()), 1, [], "array", false, false, false, 72), "name", [], "any", false, false, false, 72), "html", null, true);
        echo "</option>
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 74
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 74), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " 
  </select></td>
  <td><select name=\"s22\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 78, $this->source); })()), 9, [], "array", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 78, $this->source); })()), 9, [], "array", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
        echo "</option>
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 80
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo " 
  </select></td>
  <td><select name=\"s32\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 84, $this->source); })()), 17, [], "array", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 84, $this->source); })()), 17, [], "array", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
        echo "</option>
    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 86
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 86), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo " 
  </select></td>
  <td><select name=\"s42\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 90, $this->source); })()), 25, [], "array", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 90, $this->source); })()), 25, [], "array", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
        echo "</option>
    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 92
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 92), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 92), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo " 
  </select></td>
  <td><select name=\"s52\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 96, $this->source); })()), 33, [], "array", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 96, $this->source); })()), 33, [], "array", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
        echo "</option>
    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 98
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 98), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 98), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td><select name=\"s13\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 105, $this->source); })()), 2, [], "array", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 105, $this->source); })()), 2, [], "array", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
        echo "  …</option>
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 107
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo " 
  </select></td>
  <td><select name=\"s23\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 111, $this->source); })()), 10, [], "array", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 111, $this->source); })()), 10, [], "array", false, false, false, 111), "name", [], "any", false, false, false, 111), "html", null, true);
        echo "</option>
    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 112, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 113
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 113), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 113), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo " 
  </select></td>
  <td><select name=\"s33\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 117, $this->source); })()), 18, [], "array", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 117, $this->source); })()), 18, [], "array", false, false, false, 117), "name", [], "any", false, false, false, 117), "html", null, true);
        echo "</option>
    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 119
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 119), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 119), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo " 
  </select></td>
  <td><select name=\"s43\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 123, $this->source); })()), 26, [], "array", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 123, $this->source); })()), 26, [], "array", false, false, false, 123), "name", [], "any", false, false, false, 123), "html", null, true);
        echo "</option>
    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 124, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 125
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 125), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 125), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo " 
  </select></td>
  <td><select name=\"s53\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 129, $this->source); })()), 34, [], "array", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 129, $this->source); })()), 34, [], "array", false, false, false, 129), "name", [], "any", false, false, false, 129), "html", null, true);
        echo "</option>
    ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 130, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 131
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 131), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 131), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">4</th>
      <td><select name=\"s14\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 138, $this->source); })()), 3, [], "array", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 138, $this->source); })()), 3, [], "array", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true);
        echo "</option>
    ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 139, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 140
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 140), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 140), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo " 
  </select></td>
  <td><select name=\"s24\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 144, $this->source); })()), 11, [], "array", false, false, false, 144), "name", [], "any", false, false, false, 144), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 144, $this->source); })()), 11, [], "array", false, false, false, 144), "name", [], "any", false, false, false, 144), "html", null, true);
        echo "</option>
    ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 145, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 146
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 146), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 146), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo " 
  </select></td>
  <td><select name=\"s34\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), 19, [], "array", false, false, false, 150), "name", [], "any", false, false, false, 150), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 150, $this->source); })()), 19, [], "array", false, false, false, 150), "name", [], "any", false, false, false, 150), "html", null, true);
        echo "</option>
    ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 152
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 152), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 152), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo " 
  </select></td>
  <td><select name=\"s44\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 156, $this->source); })()), 27, [], "array", false, false, false, 156), "name", [], "any", false, false, false, 156), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 156, $this->source); })()), 27, [], "array", false, false, false, 156), "name", [], "any", false, false, false, 156), "html", null, true);
        echo "</option>
    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 157, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 158
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 158), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 158), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo " 
  </select></td>
  <td><select name=\"s54\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 162, $this->source); })()), 35, [], "array", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 162, $this->source); })()), 35, [], "array", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
        echo "</option>
    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 164
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 164), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 164), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">5</th>
      <td><select name=\"s15\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 171, $this->source); })()), 4, [], "array", false, false, false, 171), "name", [], "any", false, false, false, 171), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 171, $this->source); })()), 4, [], "array", false, false, false, 171), "name", [], "any", false, false, false, 171), "html", null, true);
        echo "</option>
    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 172, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 173
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 173), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 173), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo " 
  </select></td>
  <td><select name=\"s25\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 177
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 177, $this->source); })()), 12, [], "array", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 177, $this->source); })()), 12, [], "array", false, false, false, 177), "name", [], "any", false, false, false, 177), "html", null, true);
        echo "</option>
    ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 179
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 179), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 179), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo " 
  </select></td>
  <td><select name=\"s35\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 183, $this->source); })()), 20, [], "array", false, false, false, 183), "name", [], "any", false, false, false, 183), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 183, $this->source); })()), 20, [], "array", false, false, false, 183), "name", [], "any", false, false, false, 183), "html", null, true);
        echo "</option>
    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 184, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 185
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 185), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 185), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo " 
  </select></td>
  <td><select name=\"s45\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 189, $this->source); })()), 28, [], "array", false, false, false, 189), "name", [], "any", false, false, false, 189), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 189, $this->source); })()), 28, [], "array", false, false, false, 189), "name", [], "any", false, false, false, 189), "html", null, true);
        echo "</option>
    ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 191
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 191), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 191), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo " 
  </select></td>
  <td><select name=\"s55\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 195, $this->source); })()), 36, [], "array", false, false, false, 195), "name", [], "any", false, false, false, 195), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 195, $this->source); })()), 36, [], "array", false, false, false, 195), "name", [], "any", false, false, false, 195), "html", null, true);
        echo "</option>
    ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 196, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 197
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 197), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 197), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">6</th>
      <td><select name=\"s16\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 204
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 204, $this->source); })()), 5, [], "array", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 204, $this->source); })()), 5, [], "array", false, false, false, 204), "name", [], "any", false, false, false, 204), "html", null, true);
        echo "</option>
    ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 205, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 206
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 206), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 206), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo " 
  </select></td>
  <td><select name=\"s26\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 210
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 210, $this->source); })()), 13, [], "array", false, false, false, 210), "name", [], "any", false, false, false, 210), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 210, $this->source); })()), 13, [], "array", false, false, false, 210), "name", [], "any", false, false, false, 210), "html", null, true);
        echo "</option>
    ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 211, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 212
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 212), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 212), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo " 
  </select></td>
  <td><select name=\"s36\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 216, $this->source); })()), 21, [], "array", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 216, $this->source); })()), 21, [], "array", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
        echo "</option>
    ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 217, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 218
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 218), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 218), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo " 
  </select></td>
  <td><select name=\"s46\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 222, $this->source); })()), 29, [], "array", false, false, false, 222), "name", [], "any", false, false, false, 222), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 222, $this->source); })()), 29, [], "array", false, false, false, 222), "name", [], "any", false, false, false, 222), "html", null, true);
        echo "</option>
    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 223, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 224
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 224), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 224), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 225
        echo " 
  </select></td>
  <td><select name=\"s56\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 228, $this->source); })()), 37, [], "array", false, false, false, 228), "name", [], "any", false, false, false, 228), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 228, $this->source); })()), 37, [], "array", false, false, false, 228), "name", [], "any", false, false, false, 228), "html", null, true);
        echo "</option>
    ";
        // line 229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 229, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 230
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 230), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 230), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">7</th>
      <td><select name=\"s17\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 237, $this->source); })()), 6, [], "array", false, false, false, 237), "name", [], "any", false, false, false, 237), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 237, $this->source); })()), 6, [], "array", false, false, false, 237), "name", [], "any", false, false, false, 237), "html", null, true);
        echo "</option>
    ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 239
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 239), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 239), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo " 
  </select></td>
  <td><select name=\"s27\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 243, $this->source); })()), 14, [], "array", false, false, false, 243), "name", [], "any", false, false, false, 243), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 243, $this->source); })()), 14, [], "array", false, false, false, 243), "name", [], "any", false, false, false, 243), "html", null, true);
        echo "</option>
    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 244, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 245
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 245), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 245), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        echo " 
  </select></td>
  <td><select name=\"s37\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 249
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 249, $this->source); })()), 22, [], "array", false, false, false, 249), "name", [], "any", false, false, false, 249), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 249, $this->source); })()), 22, [], "array", false, false, false, 249), "name", [], "any", false, false, false, 249), "html", null, true);
        echo "</option>
    ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 250, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 251
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 251), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 251), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        echo " 
  </select></td>
  <td><select name=\"s47\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 255, $this->source); })()), 30, [], "array", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 255, $this->source); })()), 30, [], "array", false, false, false, 255), "name", [], "any", false, false, false, 255), "html", null, true);
        echo "</option>
    ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 256, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 257
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 257), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 257), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo " 
  </select></td>
  <td><select name=\"s57\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 261, $this->source); })()), 38, [], "array", false, false, false, 261), "name", [], "any", false, false, false, 261), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 261, $this->source); })()), 38, [], "array", false, false, false, 261), "name", [], "any", false, false, false, 261), "html", null, true);
        echo "</option>
    ";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 262, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 263
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 263), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 263), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo " 
  </select></td>
    </tr>
    <tr>
      <th scope=\"row\">8</th>
      <td><select name=\"s18\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 270, $this->source); })()), 7, [], "array", false, false, false, 270), "name", [], "any", false, false, false, 270), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 270, $this->source); })()), 7, [], "array", false, false, false, 270), "name", [], "any", false, false, false, 270), "html", null, true);
        echo "</option>
    ";
        // line 271
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 271, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 272
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 272), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 272), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo " 
  </select></td>
  <td><select name=\"s28\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 276, $this->source); })()), 15, [], "array", false, false, false, 276), "name", [], "any", false, false, false, 276), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 276, $this->source); })()), 15, [], "array", false, false, false, 276), "name", [], "any", false, false, false, 276), "html", null, true);
        echo "</option>
    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 277, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 278
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 278), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 278), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo " 
  </select></td>
  <td><select name=\"s38\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 282
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 282, $this->source); })()), 23, [], "array", false, false, false, 282), "name", [], "any", false, false, false, 282), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 282, $this->source); })()), 23, [], "array", false, false, false, 282), "name", [], "any", false, false, false, 282), "html", null, true);
        echo "</option>
    ";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 283, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 284
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 284), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 284), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 285
        echo " 
  </select></td>
  <td><select name=\"s48\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 288
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 288, $this->source); })()), 31, [], "array", false, false, false, 288), "name", [], "any", false, false, false, 288), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 288, $this->source); })()), 31, [], "array", false, false, false, 288), "name", [], "any", false, false, false, 288), "html", null, true);
        echo "</option>
    ";
        // line 289
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 289, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 290
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 290), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 290), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo " 
  </select></td>
  <td><select name=\"s58\" class=\"form-select form-select-lg mb-3\" aria-label=\".form-select-lg example\"aria-label=\".form-select-lg example\" name=\"plan\">
    <option value=\"";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 294, $this->source); })()), 39, [], "array", false, false, false, 294), "name", [], "any", false, false, false, 294), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 294, $this->source); })()), 39, [], "array", false, false, false, 294), "name", [], "any", false, false, false, 294), "html", null, true);
        echo "</option>
    ";
        // line 295
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 295, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 296
            echo "    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 296), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 296), "html", null, true);
            echo "</option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
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
        return array (  1193 => 297,  1182 => 296,  1178 => 295,  1172 => 294,  1167 => 291,  1156 => 290,  1152 => 289,  1146 => 288,  1141 => 285,  1130 => 284,  1126 => 283,  1120 => 282,  1115 => 279,  1104 => 278,  1100 => 277,  1094 => 276,  1089 => 273,  1078 => 272,  1074 => 271,  1068 => 270,  1060 => 264,  1049 => 263,  1045 => 262,  1039 => 261,  1034 => 258,  1023 => 257,  1019 => 256,  1013 => 255,  1008 => 252,  997 => 251,  993 => 250,  987 => 249,  982 => 246,  971 => 245,  967 => 244,  961 => 243,  956 => 240,  945 => 239,  941 => 238,  935 => 237,  927 => 231,  916 => 230,  912 => 229,  906 => 228,  901 => 225,  890 => 224,  886 => 223,  880 => 222,  875 => 219,  864 => 218,  860 => 217,  854 => 216,  849 => 213,  838 => 212,  834 => 211,  828 => 210,  823 => 207,  812 => 206,  808 => 205,  802 => 204,  794 => 198,  783 => 197,  779 => 196,  773 => 195,  768 => 192,  757 => 191,  753 => 190,  747 => 189,  742 => 186,  731 => 185,  727 => 184,  721 => 183,  716 => 180,  705 => 179,  701 => 178,  695 => 177,  690 => 174,  679 => 173,  675 => 172,  669 => 171,  661 => 165,  650 => 164,  646 => 163,  640 => 162,  635 => 159,  624 => 158,  620 => 157,  614 => 156,  609 => 153,  598 => 152,  594 => 151,  588 => 150,  583 => 147,  572 => 146,  568 => 145,  562 => 144,  557 => 141,  546 => 140,  542 => 139,  536 => 138,  528 => 132,  517 => 131,  513 => 130,  507 => 129,  502 => 126,  491 => 125,  487 => 124,  481 => 123,  476 => 120,  465 => 119,  461 => 118,  455 => 117,  450 => 114,  439 => 113,  435 => 112,  429 => 111,  424 => 108,  413 => 107,  409 => 106,  403 => 105,  395 => 99,  384 => 98,  380 => 97,  374 => 96,  369 => 93,  358 => 92,  354 => 91,  348 => 90,  343 => 87,  332 => 86,  328 => 85,  322 => 84,  317 => 81,  306 => 80,  302 => 79,  296 => 78,  291 => 75,  280 => 74,  276 => 73,  270 => 72,  261 => 65,  250 => 64,  246 => 63,  240 => 62,  235 => 59,  224 => 58,  220 => 57,  214 => 56,  209 => 53,  198 => 52,  194 => 51,  188 => 50,  183 => 47,  172 => 46,  168 => 45,  162 => 44,  157 => 41,  146 => 40,  142 => 39,  136 => 38,  112 => 16,  101 => 15,  97 => 14,  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
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
