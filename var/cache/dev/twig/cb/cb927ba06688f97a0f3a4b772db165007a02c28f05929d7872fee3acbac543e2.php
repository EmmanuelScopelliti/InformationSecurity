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

/* @Installer/installer/license.html.twig */
class __TwigTemplate_3bb2b0b5e0a7b8fb39b6d2462a697beff74cc52cf788eba0066fd5e3aed43cf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_content' => [$this, 'block_base_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@Installer/installer/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Installer/installer/license.html.twig"));

        $this->parent = $this->loadTemplate("@Installer/installer/base.html.twig", "@Installer/installer/license.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_base_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_content"));

        // line 4
        echo "    <div class=\"card__title\">
        <h2>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.license_agreement_header"), "html", null, true);
        echo "</h2>
    </div>

    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.license");
        echo "\" id=\"license-agreement\" method=\"post\">
        <div class=\"card__body\">
            ";
        // line 10
        if (($context["error"] ?? null)) {
            // line 11
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.license_agreement_error"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 15
        echo "
            <p>
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.license_agreement_info"), "html", null, true);
        echo "
            </p>

            <div id=\"tos\" class=\"license-agreement\">";
        // line 20
        echo ($context["licenseAgreement"] ?? null);
        echo "</div>

            <div class=\"custom-checkbox\">
                <input type=\"checkbox\" id=\"terms\" name=\"tos\" required/>
                <label for=\"terms\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.license_agreement_checkbox"), "html", null, true);
        echo "</label>
            </div>
        </div>

        <div class=\"card__footer flex-container\">
            <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("installer.requirements");
        echo "\" class=\"btn btn-default flex-item\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.back"), "html", null, true);
        echo "</a>
            <button type=\"submit\"
                    class=\"btn btn-primary flex-item flex-right\"
                    onclick=\"document.getElementById('license-agreement').classList.add('is--submitted')\">
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("shopware.installer.forward"), "html", null, true);
        echo "
            </button>
        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Installer/installer/license.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  109 => 29,  101 => 24,  94 => 20,  88 => 17,  84 => 15,  78 => 12,  75 => 11,  73 => 10,  68 => 8,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@Installer/installer/base.html.twig' %}

{% block base_content %}
    <div class=\"card__title\">
        <h2>{{ \"shopware.installer.license_agreement_header\"|trans }}</h2>
    </div>

    <form action=\"{{ url('installer.license') }}\" id=\"license-agreement\" method=\"post\">
        <div class=\"card__body\">
            {% if error %}
                <div class=\"alert alert-error\">
                    {{ \"shopware.installer.license_agreement_error\"|trans }}
                </div>
            {% endif %}

            <p>
                {{ \"shopware.installer.license_agreement_info\"|trans }}
            </p>

            <div id=\"tos\" class=\"license-agreement\">{{ licenseAgreement|raw }}</div>

            <div class=\"custom-checkbox\">
                <input type=\"checkbox\" id=\"terms\" name=\"tos\" required/>
                <label for=\"terms\">{{ \"shopware.installer.license_agreement_checkbox\"|trans }}</label>
            </div>
        </div>

        <div class=\"card__footer flex-container\">
            <a href=\"{{ url('installer.requirements') }}\" class=\"btn btn-default flex-item\">{{ \"shopware.installer.back\"|trans }}</a>
            <button type=\"submit\"
                    class=\"btn btn-primary flex-item flex-right\"
                    onclick=\"document.getElementById('license-agreement').classList.add('is--submitted')\">
                {{ \"shopware.installer.forward\"|trans }}
            </button>
        </div>
    </form>
{% endblock %}
", "@Installer/installer/license.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/core/Installer/Resources/views/installer/license.html.twig");
    }
}
