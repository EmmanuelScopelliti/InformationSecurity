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

/* @Storefront/storefront/layout/navigation/offcanvas/categories.html.twig */
class __TwigTemplate_35a0f5213f2befad82ec08293e926de8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories' => [$this, 'block_layout_navigation_offcanvas_navigation_categories'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig"));

        // line 2
        $context["activeId"] = (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, true, false, 2), "id", [], "any", true, true, false, 2) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, true, false, 2), "id", [], "any", false, false, false, 2)))) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, true, false, 2), "id", [], "any", false, false, false, 2)) : (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 2), "navigationCategoryId", [], "any", false, false, false, 2)));
        // line 3
        $context["isRoot"] = (($context["activeId"] ?? null) == sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "navigationCategoryId", [], "any", false, false, false, 3));
        // line 4
        $context["children"] = sw_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "getChildren", [0 => ($context["activeId"] ?? null)], "method", false, false, false, 4);
        // line 5
        $context["active"] = sw_get_attribute($this->env, $this->source, ($context["navigation"] ?? null), "active", [], "any", false, false, false, 5);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_navigation_offcanvas_navigation_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories"));

        // line 8
        echo "    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            ";
        // line 10
        if ( !($context["isRoot"] ?? null)) {
            // line 11
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 11)->display($context);
            // line 12
            echo "
                ";
            // line 13
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 13)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 14
            echo "
                ";
            // line 15
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 15)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 16
            echo "            ";
        } else {
            // line 17
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            <ul class=\"list-unstyled navigation-offcanvas-list\">
                ";
        // line 21
        if (( !($context["isRoot"] ?? null) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, false, 21), "active", [], "any", false, false, false, 21), "type", [], "any", false, false, false, 21) != "folder"))) {
            // line 22
            echo "                    ";
            $this->loadTemplate("@zenitPlatformStratus/storefront/layout/navigation/offcanvas/show-active-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 22)->display(twig_array_merge($context, ["item" => ($context["active"] ?? null)]));
            // line 23
            echo "                ";
        }
        // line 24
        echo "
                ";
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["children"] ?? null), "tree", [], "any", false, false, false, 26));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "                    ";
            $this->loadTemplate("@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", 27)->display(twig_array_merge($context, ["item" => $context["item"], "activeId" => ($context["activeId"] ?? null)]));
            // line 28
            echo "                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </ul>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 29,  138 => 28,  135 => 27,  117 => 26,  114 => 24,  111 => 23,  108 => 22,  106 => 21,  102 => 19,  99 => 18,  96 => 17,  93 => 16,  91 => 15,  88 => 14,  86 => 13,  83 => 12,  80 => 11,  78 => 10,  74 => 8,  55 => 7,  52 => 6,  50 => 5,  48 => 4,  46 => 3,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var navigation \\Shopware\\Core\\Content\\Category\\Tree\\Tree #}
{% set activeId = navigation.active.id ?? context.salesChannel.navigationCategoryId %}
{% set isRoot = activeId == context.salesChannel.navigationCategoryId %}
{% set children = navigation.getChildren(activeId) %}
{% set active = navigation.active %}

{% block layout_navigation_offcanvas_navigation_categories %}
    <div class=\"navigation-offcanvas-container js-navigation-offcanvas\">
        <div class=\"navigation-offcanvas-overlay-content js-navigation-offcanvas-overlay-content\">
            {% if not isRoot %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-all-link.html.twig' %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/active-item-link.html.twig' with { item: active } %}

                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/back-link.html.twig' with { item: active } %}
            {% else %}
                {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/general-headline.html.twig' %}
            {% endif %}

            <ul class=\"list-unstyled navigation-offcanvas-list\">
                {% if not isRoot and page.navigation.active.type != \"folder\" %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/show-active-link.html.twig' with { item: active } %}
                {% endif %}

                {# @var item \\Shopware\\Core\\Content\\Category\\Tree\\TreeItem #}
                {% for item in children.tree %}
                    {% sw_include '@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig' with { item: item, activeId: activeId } %}
                {% endfor %}
            </ul>
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/layout/navigation/offcanvas/categories.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/categories.html.twig");
    }
}
