<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
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

/* @zenitPlatformStratus/storefront/utilities/icon.html.twig */
class __TwigTemplate_5f9b0efdb451befc9b2a0d5ecaa50bf7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'utilities_icon' => [$this, 'block_utilities_icon'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/utilities/icon.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/utilities/icon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/utilities/icon.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/utilities/icon.html.twig", "@zenitPlatformStratus/storefront/utilities/icon.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_utilities_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "utilities_icon"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        $context["icons"] = [0 => "heart", 1 => "heart-fill", 2 => "avatar", 3 => "bag", 4 => "help", 5 => "stack", 6 => "search", 7 => "x", 8 => "eye-open"];
        // line 6
        echo "
    ";
        // line 7
        if (( !array_key_exists("pack", $context) &&  !($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-icon-set") === "default"))) {
            // line 8
            echo "        ";
            if (twig_in_filter(($context["name"] ?? null), ($context["icons"] ?? null))) {
                // line 9
                echo "            ";
                $context["pack"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-icon-set");
                // line 10
                echo "            ";
                $context["namespace"] = "zenitPlatformStratus";
                // line 11
                echo "        ";
            }
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        $this->displayParentBlock("utilities_icon", $context, $blocks);
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/utilities/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  93 => 13,  90 => 12,  87 => 11,  84 => 10,  81 => 9,  78 => 8,  76 => 7,  73 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/utilities/icon.html.twig' %}

{% block utilities_icon %}
    {# ... change icons without extending every block #}
    {% set icons = [ 'heart', 'heart-fill', 'avatar', 'bag', 'help', 'stack', 'search', 'x', 'eye-open' ] %}

    {% if pack is not defined and theme_config('zen-icon-set') is not same as ('default') %}
        {% if name in icons %}
            {% set pack = theme_config('zen-icon-set') %}
            {% set namespace = 'zenitPlatformStratus' %}
        {% endif %}
    {% endif %}

    {{ parent() }}

{% endblock %}
", "@zenitPlatformStratus/storefront/utilities/icon.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/utilities/icon.html.twig");
    }
}
