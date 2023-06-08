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

/* @Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig */
class __TwigTemplate_e20ef9a43ee9f1bf7c3e60a6ebb4cdd0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_text' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text'],
            'layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon' => [$this, 'block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig"));

        // line 1
        $context["isActive"] = (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == ($context["activeId"] ?? null));
        // line 2
        $context["hasChildren"] = (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 2), "visibleChildCount", [], "any", false, false, false, 2) > 0);
        // line 3
        $context["url"] = $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 3));
        // line 4
        $context["name"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 4), "translated", [], "any", false, false, false, 4), "name", [], "any", false, false, false, 4);
        // line 5
        echo "
<li class=\"navigation-offcanvas-list-item\">
    ";
        // line 7
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link', $context, $blocks);
        // line 29
        echo "</li>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link"));

        // line 8
        echo "        <a class=\"navigation-offcanvas-link nav-item nav-link";
        if (($context["isActive"] ?? null)) {
            echo " active";
        }
        if (($context["hasChildren"] ?? null)) {
            echo " js-navigation-offcanvas-link";
        }
        echo "\"
           href=\"";
        // line 9
        echo sw_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\"
            ";
        // line 10
        if (($context["hasChildren"] ?? null)) {
            // line 11
            echo "                data-href=\"";
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.menu.offcanvas", ["navigationId" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\"
            ";
        }
        // line 13
        echo "           itemprop=\"url\"
            ";
        // line 14
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(sw_get_attribute($this->env, $this->source, ($context["item"] ?? null), "category", [], "any", false, false, false, 14))) {
            echo "target=\"_blank\"";
        }
        // line 15
        echo "           title=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 16
        $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_text', $context, $blocks);
        // line 27
        echo "        </a>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_text"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_text"));

        // line 17
        echo "                <span itemprop=\"name\">";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</span>
                ";
        // line 18
        if (($context["hasChildren"] ?? null)) {
            // line 19
            echo "                    ";
            $this->displayBlock('layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon', $context, $blocks);
            // line 25
            echo "                ";
        }
        // line 26
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon"));

        // line 20
        echo "                        <span
                            class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            ";
        // line 22
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", 22);
        })())->display(twig_array_merge($context, ["pack" => "solid", "size" => "sm", "name" => "arrow-medium-right"]));
        // line 23
        echo "                        </span>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 23,  175 => 22,  171 => 20,  161 => 19,  151 => 26,  148 => 25,  145 => 19,  143 => 18,  138 => 17,  128 => 16,  117 => 27,  115 => 16,  110 => 15,  106 => 14,  103 => 13,  97 => 11,  95 => 10,  91 => 9,  81 => 8,  71 => 7,  60 => 29,  58 => 7,  54 => 5,  52 => 4,  50 => 3,  48 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set isActive = item.category.id == activeId %}
{% set hasChildren = item.category.visibleChildCount > 0 %}
{% set url = category_url(item.category) %}
{% set name = item.category.translated.name %}

<li class=\"navigation-offcanvas-list-item\">
    {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link %}
        <a class=\"navigation-offcanvas-link nav-item nav-link{% if isActive %} active{% endif %}{% if hasChildren %} js-navigation-offcanvas-link{% endif %}\"
           href=\"{{ url }}\"
            {% if hasChildren %}
                data-href=\"{{ path('frontend.menu.offcanvas', {'navigationId': item.category.id}) }}\"
            {% endif %}
           itemprop=\"url\"
            {% if category_linknewtab(item.category) %}target=\"_blank\"{% endif %}
           title=\"{{ name }}\">
            {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link_text %}
                <span itemprop=\"name\">{{ name }}</span>
                {% if hasChildren %}
                    {% block layout_navigation_offcanvas_navigation_categories_list_category_item_link_icon %}
                        <span
                            class=\"navigation-offcanvas-link-icon js-navigation-offcanvas-loading-icon\">
                            {% sw_icon 'arrow-medium-right' style { 'pack':'solid', 'size': 'sm' } %}
                        </span>
                    {% endblock %}
                {% endif %}
            {% endblock %}
        </a>
    {% endblock %}
</li>
", "@Storefront/storefront/layout/navigation/offcanvas/item-link.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/navigation/offcanvas/item-link.html.twig");
    }
}
