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

/* @zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig */
class __TwigTemplate_72fe94ade718af3eacb9dc2291641b2c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'zen_layout_navigation_badge' => [$this, 'block_zen_layout_navigation_badge'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig"));

        // line 1
        $this->displayBlock('zen_layout_navigation_badge', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_zen_layout_navigation_badge($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_badge"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_navigation_badge"));

        // line 2
        echo "    ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 2), "customFields", [], "any", false, false, false, 2), "zenit_stratus_category_badge_text", [], "any", false, false, false, 2))) {
            // line 3
            echo "        ";
            $context["color"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 3), "customFields", [], "any", false, false, false, 3), "zenit_stratus_category_badge_color", [], "any", false, false, false, 3)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 3), "customFields", [], "any", false, false, false, 3), "zenit_stratus_category_badge_color", [], "any", false, false, false, 3)) : (""));
            // line 4
            echo "        ";
            $context["background"] = ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 4), "customFields", [], "any", false, false, false, 4), "zenit_stratus_category_badge_bg", [], "any", false, false, false, 4)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 4), "customFields", [], "any", false, false, false, 4), "zenit_stratus_category_badge_bg", [], "any", false, false, false, 4)) : (""));
            // line 5
            echo "
        <span class=\"badge navigation-badge\" style=\"";
            // line 6
            if (($context["color"] ?? null)) {
                echo "color:";
                echo sw_escape_filter($this->env, ($context["color"] ?? null), "html", null, true);
                echo ";";
            }
            if (($context["background"] ?? null)) {
                echo " background:";
                echo sw_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
                echo ";";
            }
            echo "\">
            ";
            // line 7
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "translated", [], "any", false, false, false, 7), "customFields", [], "any", false, false, false, 7), "zenit_stratus_category_badge_text", [], "any", false, false, false, 7), "html", null, true);
            echo "
        </span>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  75 => 6,  72 => 5,  69 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block zen_layout_navigation_badge %}
    {% if category.translated.customFields.zenit_stratus_category_badge_text is not empty %}
        {% set color = category.translated.customFields.zenit_stratus_category_badge_color ? category.translated.customFields.zenit_stratus_category_badge_color : '' %}
        {% set background = category.translated.customFields.zenit_stratus_category_badge_bg ? category.translated.customFields.zenit_stratus_category_badge_bg : '' %}

        <span class=\"badge navigation-badge\" style=\"{% if color %}color:{{ color }};{% endif %}{% if background %} background:{{ background }};{% endif %}\">
            {{ category.translated.customFields.zenit_stratus_category_badge_text }}
        </span>
    {% endif %}
{% endblock %}", "@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/navigation/zen-navigation-badge.html.twig");
    }
}
