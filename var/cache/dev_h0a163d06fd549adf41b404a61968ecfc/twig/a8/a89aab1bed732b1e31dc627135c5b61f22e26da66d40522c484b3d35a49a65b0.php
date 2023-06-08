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

/* @zenitPlatformStratus/storefront/layout/navigation/categories.html.twig */
class __TwigTemplate_b2a357c4c4189c8a928a500e3e5fe642 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_navigation_categories_item' => [$this, 'block_layout_navigation_categories_item'],
            'layout_navigation_categories_item_link' => [$this, 'block_layout_navigation_categories_item_link'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/navigation/categories.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig"));

        // line 4
        $context["zenCustomFields"] = ["category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 5
($context["page"] ?? null), "header", [], "any", false, false, false, 5), "navigation", [], "any", false, false, false, 5), "active", [], "any", false, false, false, 5), "translated", [], "any", false, false, false, 5), "customFields", [], "any", false, false, false, 5)];
        // line 2
        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/navigation/categories.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_layout_navigation_categories_item($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item"));

        // line 9
        echo "    ";
        // line 12
        echo "    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-flyout-navigation-max-depth")) {
            // line 13
            echo "        ";
            $context["navigationMaxDepth"] = ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-flyout-navigation-max-depth") - 1);
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        ";
            $context["navigationMaxDepth"] = 3;
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $this->displayParentBlock("layout_navigation_categories_item", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_layout_navigation_categories_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_categories_item_link"));

        // line 22
        echo "    ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 22), "type", [], "any", false, false, false, 22) == "folder")) {
            // line 23
            echo "        <div class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"
             title=\"";
            // line 24
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
            <span itemprop=\"name\">";
            // line 25
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>

            ";
            // line 28
            echo "            ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig", 28)->display(twig_to_array(["category" => sw_get_attribute($this->env, $this->source,             // line 29
($context["treeItem"] ?? null), "category", [], "any", false, false, false, 29)]));
            // line 31
            echo "        </div>
    ";
        } else {
            // line 33
            echo "        <a class=\"nav-item nav-link navigation-flyout-link is-level-";
            echo sw_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            if (((($context["id"] ?? null) == ($context["activeId"] ?? null)) || twig_in_filter(($context["id"] ?? null), ($context["activePath"] ?? null)))) {
                echo " active";
            }
            echo "\"
           href=\"";
            // line 34
            echo sw_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\"
           itemprop=\"url\"
           ";
            // line 36
            if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 36))) {
                echo "target=\"_blank\"
           ";
                // line 37
                if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["treeItem"] ?? null), "category", [], "any", false, false, false, 37), "linkType", [], "any", false, false, false, 37) == "external")) {
                    echo "rel=\"noopener noreferrer\"";
                }
                // line 38
                echo "            ";
            }
            // line 39
            echo "           title=\"";
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\">
            <span itemprop=\"name\">";
            // line 40
            echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</span>

            ";
            // line 43
            echo "            ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig", 43)->display(twig_to_array(["category" => sw_get_attribute($this->env, $this->source,             // line 44
($context["treeItem"] ?? null), "category", [], "any", false, false, false, 44)]));
            // line 46
            echo "        </a>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 46,  176 => 44,  174 => 43,  169 => 40,  164 => 39,  161 => 38,  157 => 37,  153 => 36,  148 => 34,  140 => 33,  136 => 31,  134 => 29,  132 => 28,  127 => 25,  123 => 24,  118 => 23,  115 => 22,  105 => 21,  93 => 18,  90 => 17,  87 => 16,  84 => 15,  81 => 14,  78 => 13,  75 => 12,  73 => 9,  63 => 8,  52 => 2,  50 => 5,  49 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/navigation/categories.html.twig' %}

{# ... custom fields #}
{% set zenCustomFields = {
    category: page.header.navigation.active.translated.customFields,
} %}

{% block layout_navigation_categories_item %}
    {# ... override navigation MaxDepth, taking into account that the flyout menu starts
    counting the level without top categories level, unlike the sidebar categories.
    So we have to reduce zen-flyout-navigation-max-depth by one #}
    {% if theme_config('zen-flyout-navigation-max-depth') %}
        {% set navigationMaxDepth = theme_config('zen-flyout-navigation-max-depth') - 1 %}
    {% else %}
        {% set navigationMaxDepth = 3 %}
    {% endif %}

    {{ parent() }}
{% endblock %}

{% block layout_navigation_categories_item_link %}
    {% if treeItem.category.type == 'folder' %}
        <div class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}\"
             title=\"{{ name }}\">
            <span itemprop=\"name\">{{ name }}</span>

            {# ... add badge #}
            {% sw_include '@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig' with {
                category: treeItem.category,
            } only %}
        </div>
    {% else %}
        <a class=\"nav-item nav-link navigation-flyout-link is-level-{{ level }}{% if id == activeId or id in activePath %} active{% endif %}\"
           href=\"{{ link }}\"
           itemprop=\"url\"
           {% if category_linknewtab(treeItem.category) %}target=\"_blank\"
           {% if treeItem.category.linkType == \"external\" %}rel=\"noopener noreferrer\"{% endif %}
            {% endif %}
           title=\"{{ name }}\">
            <span itemprop=\"name\">{{ name }}</span>

            {# ... add badge #}
            {% sw_include '@zenitPlatformStratus/storefront/layout/navigation/zen-navigation-badge.html.twig' with {
                category: treeItem.category,
            } only %}
        </a>
    {% endif %}
{% endblock %}", "@zenitPlatformStratus/storefront/layout/navigation/categories.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/navigation/categories.html.twig");
    }
}
