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

/* @zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig */
class __TwigTemplate_8981a498bd4b73e954eee92ff1689faa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_actions' => [$this, 'block_layout_navigation_offcanvas_navigation_actions'],
            'zen_layout_navigation_offcanvas_navigation_action_service' => [$this, 'block_zen_layout_navigation_offcanvas_navigation_action_service'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_navigation_offcanvas_navigation_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_actions"));

        // line 4
        echo "    <nav class=\"nav navigation-offcanvas-actions\">
        ";
        // line 5
        $this->displayBlock("layout_navigation_offcanvas_navigation_action_language", $context, $blocks);
        echo "

        ";
        // line 7
        $this->displayBlock("layout_navigation_offcanvas_navigation_action_currency", $context, $blocks);
        echo "

        ";
        // line 10
        echo "        ";
        $this->displayBlock('zen_layout_navigation_offcanvas_navigation_action_service', $context, $blocks);
        // line 13
        echo "    </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_zen_layout_navigation_offcanvas_navigation_action_service($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_service"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_offcanvas_navigation_action_service"));

        // line 11
        echo "            ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/header/actions/service-menu-widget.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig", 11)->display(twig_array_merge($context, ["position" => "offcanvas"]));
        // line 12
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 12,  106 => 11,  96 => 10,  85 => 13,  82 => 10,  77 => 7,  72 => 5,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/navigation/offcanvas/navigation.html.twig' %}

{% block layout_navigation_offcanvas_navigation_actions %}
    <nav class=\"nav navigation-offcanvas-actions\">
        {{ block('layout_navigation_offcanvas_navigation_action_language') }}

        {{ block('layout_navigation_offcanvas_navigation_action_currency') }}

        {# ... add service menu widget #}
        {% block zen_layout_navigation_offcanvas_navigation_action_service %}
            {% sw_include '@Storefront/storefront/layout/header/actions/service-menu-widget.html.twig' with {position: 'offcanvas'} %}
        {% endblock %}
    </nav>
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/navigation/offcanvas/navigation.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/navigation/offcanvas/navigation.html.twig");
    }
}
