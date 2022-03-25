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

/* settings/index.html.twig */
class __TwigTemplate_09675cadeab2741c1eb7850e3ca06679432629ef20edec751f30bcfabc4986d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings/index.html.twig"));

        $this->parent = $this->loadTemplate("panel.html.twig", "settings/index.html.twig", 1);
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

        echo "Ustawienia";
        
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

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-6\">
            <div class=\"well well-sm\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-8\">
                    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                        <h4>
                            ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new RuntimeError('Variable "surname" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</h4>
                        <small><cite title=\"address\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "address", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => ""]]);
        echo " <i class=\"glyphicon glyphicon-map-marker\">
                        </i></cite></small>
                        <p>
                            <i class=\"glyphicon glyphicon-envelope\"></i>";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "
                            <br />
                            <i class=\"glyphicon glyphicon-envelope\"></i>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => ""]]);
        echo "
                            <br />
                            
                              ";
        // line 30
        if ((0 === twig_compare((isset($context["rang"]) || array_key_exists("rang", $context) ? $context["rang"] : (function () { throw new RuntimeError('Variable "rang" does not exist.', 30, $this->source); })()), "teacher"))) {
            // line 31
            echo "                            <i class=\"glyphicon glyphicon-gift\"></i>Nauczyciel</p>
                            
                            ";
        }
        // line 34
        echo "                            ";
        if ((0 === twig_compare((isset($context["rang"]) || array_key_exists("rang", $context) ? $context["rang"] : (function () { throw new RuntimeError('Variable "rang" does not exist.', 34, $this->source); })()), "student"))) {
            // line 35
            echo "                            <i class=\"glyphicon glyphicon-gift\"></i>Grupa: ";
            echo twig_escape_filter($this->env, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</p>
                            ";
        }
        // line 37
        echo "                            
                            
                            
                        <!-- Split button -->
                        <div class=\"btn-group\">
                            
                                ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
                        </div>
                        <br />
                        <div class=\"btn-group\">
                            <a type=\"button\" href=\"/chpass\" class=\"btn btn-primary\">
                                Zmień hasło</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "settings/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 43,  147 => 37,  141 => 35,  138 => 34,  133 => 31,  131 => 30,  125 => 27,  120 => 25,  114 => 22,  108 => 21,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panel.html.twig' %}

{% block title %}Ustawienia{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"container pt-4\">

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-md-6\">
            <div class=\"well well-sm\">
                <div class=\"row\">
                    <div class=\"col-sm-6 col-md-8\">
                    {{ form_start(form) }}
                        <h4>
                            {{name}} {{surname}}</h4>
                        <small><cite title=\"address\">{{ form_widget(form.address, {'attr': {'class': ''}}) }} <i class=\"glyphicon glyphicon-map-marker\">
                        </i></cite></small>
                        <p>
                            <i class=\"glyphicon glyphicon-envelope\"></i>{{email}}
                            <br />
                            <i class=\"glyphicon glyphicon-envelope\"></i>{{ form_widget(form.phone, {'attr': {'class': ''}}) }}
                            <br />
                            
                              {% if (rang==\"teacher\") %}
                            <i class=\"glyphicon glyphicon-gift\"></i>Nauczyciel</p>
                            
                            {% endif %}
                            {% if  (rang==\"student\") %}
                            <i class=\"glyphicon glyphicon-gift\"></i>Grupa: {{group}}</p>
                            {% endif %}
                            
                            
                            
                        <!-- Split button -->
                        <div class=\"btn-group\">
                            
                                {{ form_end(form) }}
                        </div>
                        <br />
                        <div class=\"btn-group\">
                            <a type=\"button\" href=\"/chpass\" class=\"btn btn-primary\">
                                Zmień hasło</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{% endblock %}
", "settings/index.html.twig", "/sfprojects/jobeet/japp/templates/settings/index.html.twig");
    }
}
