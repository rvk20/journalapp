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

/* profile/index.html.twig */
class __TwigTemplate_800fa75def2efed53a83d15510a26c4efc9fdb2cef5e189c0e8397fe328ebe0c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("panel.html.twig", "profile/index.html.twig", 1);
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

        echo "Profil";
        
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
                        <h4>
                            ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["surname"]) || array_key_exists("surname", $context) ? $context["surname"] : (function () { throw new RuntimeError('Variable "surname" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</h4>
                        <small><cite title=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " <i class=\"glyphicon glyphicon-map-marker\">
                        </i></cite></small>
                        <p>
                            <i class=\"glyphicon glyphicon-envelope\"></i>";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "
                            <br />
                            <i class=\"glyphicon glyphicon-envelope\"></i>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["phone"]) || array_key_exists("phone", $context) ? $context["phone"] : (function () { throw new RuntimeError('Variable "phone" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "
                            <br />
                            ";
        // line 28
        if ((0 === twig_compare((isset($context["rang"]) || array_key_exists("rang", $context) ? $context["rang"] : (function () { throw new RuntimeError('Variable "rang" does not exist.', 28, $this->source); })()), "teacher"))) {
            // line 29
            echo "                            <i class=\"glyphicon glyphicon-gift\"></i>Nauczyciel</p>
                            
                            ";
        }
        // line 32
        echo "                            ";
        if ((0 === twig_compare((isset($context["rang"]) || array_key_exists("rang", $context) ? $context["rang"] : (function () { throw new RuntimeError('Variable "rang" does not exist.', 32, $this->source); })()), "student"))) {
            // line 33
            echo "                            <i class=\"glyphicon glyphicon-gift\"></i>Grupa: ";
            echo twig_escape_filter($this->env, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "</p>
                            ";
        }
        // line 35
        echo "                            
                        <!-- Split button -->
                        <div class=\"btn-group\">
                            <a type=\"button\" href=\"/settings\" class=\"btn btn-primary\">
                                Edytuj</a>
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
        return "profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 35,  138 => 33,  135 => 32,  130 => 29,  128 => 28,  123 => 26,  118 => 24,  110 => 21,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'panel.html.twig' %}

{% block title %}Profil{% endblock %}

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
                        <h4>
                            {{name}} {{surname}}</h4>
                        <small><cite title=\"{{address}}\">{{address}} <i class=\"glyphicon glyphicon-map-marker\">
                        </i></cite></small>
                        <p>
                            <i class=\"glyphicon glyphicon-envelope\"></i>{{email}}
                            <br />
                            <i class=\"glyphicon glyphicon-envelope\"></i>{{phone}}
                            <br />
                            {% if (rang==\"teacher\") %}
                            <i class=\"glyphicon glyphicon-gift\"></i>Nauczyciel</p>
                            
                            {% endif %}
                            {% if  (rang==\"student\") %}
                            <i class=\"glyphicon glyphicon-gift\"></i>Grupa: {{group}}</p>
                            {% endif %}
                            
                        <!-- Split button -->
                        <div class=\"btn-group\">
                            <a type=\"button\" href=\"/settings\" class=\"btn btn-primary\">
                                Edytuj</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

{% endblock %}
", "profile/index.html.twig", "/sfprojects/jobeet/japp/templates/profile/index.html.twig");
    }
}
