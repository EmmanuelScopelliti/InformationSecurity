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

/* @zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig */
class __TwigTemplate_5f55021d7a319839c0c2a0ec293f2907 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'layout_navigation_flyout_bar' => [$this, 'block_layout_navigation_flyout_bar'],
            'layout_navigation_flyout_categories' => [$this, 'block_layout_navigation_flyout_categories'],
            'layout_navigation_flyout_teaser' => [$this, 'block_layout_navigation_flyout_teaser'],
            'layout_navigation_flyout_teaser_image' => [$this, 'block_layout_navigation_flyout_teaser_image'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/navigation/flyout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/navigation/flyout.html.twig", "@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_layout_navigation_flyout_bar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_bar"));

        // line 4
        echo "    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-flyout-navigation-header")) {
            // line 5
            echo "        ";
            $this->displayParentBlock("layout_navigation_flyout_bar", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_layout_navigation_flyout_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_categories"));

        // line 10
        echo "    <div class=\"";
        if ((sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 10) && $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-flyout-navigation-teaser"))) {
            echo "col-8 col-xl-9";
        } else {
            echo "col";
        }
        echo "\">
        <div class=\"navigation-flyout-categories\">
            ";
        // line 12
        $this->displayBlock("layout_navigation_flyout_categories_recoursion", $context, $blocks);
        echo "
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_layout_navigation_flyout_teaser($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser"));

        // line 18
        echo "    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-flyout-navigation-teaser")) {
            // line 19
            echo "        ";
            $this->displayParentBlock("layout_navigation_flyout_teaser", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 23
    public function block_layout_navigation_flyout_teaser_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_navigation_flyout_teaser_image"));

        // line 24
        echo "    ";
        $context["attributes"] = ["class" => "navigation-flyout-teaser-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 26
($context["category"] ?? null), "media", [], "any", false, false, false, 26), "translated", [], "any", false, false, false, 26), "alt", [], "any", false, false, false, 26)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 26), "translated", [], "any", false, false, false, 26), "alt", [], "any", false, false, false, 26)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 27
($context["category"] ?? null), "media", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["category"] ?? null), "media", [], "any", false, false, false, 27), "translated", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27)) : ("")), "data-object-fit" => "cover"];
        // line 30
        echo "
    ";
        // line 32
        echo "    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.lazyloading")) {
            // line 33
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["loading" => "lazy"]);
            // line 34
            echo "    ";
        }
        // line 35
        echo "
    <a class=\"navigation-flyout-teaser-image-container\"
       href=\"";
        // line 37
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->getCategoryUrl($context, ($context["category"] ?? null));
        echo "\"
       ";
        // line 38
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\CategoryUrlExtension']->isLinkNewTab(($context["category"] ?? null))) {
            echo "target=\"_blank\"";
        }
        // line 39
        echo "       title=\"";
        echo sw_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 40
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig", 40);
        })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,         // line 41
($context["category"] ?? null), "media", [], "any", false, false, false, 41), "sizes" => ["default" => "310px"], "name" => "navigation-flyout-teaser-image-thumbnails"]));
        // line 46
        echo "    </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 46,  200 => 41,  193 => 40,  188 => 39,  184 => 38,  180 => 37,  176 => 35,  173 => 34,  170 => 33,  167 => 32,  164 => 30,  162 => 27,  161 => 26,  159 => 24,  149 => 23,  135 => 19,  132 => 18,  122 => 17,  108 => 12,  98 => 10,  88 => 9,  74 => 5,  71 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/navigation/flyout.html.twig' %}

{% block layout_navigation_flyout_bar %}
    {% if theme_config('zen-flyout-navigation-header') %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block layout_navigation_flyout_categories %}
    <div class=\"{% if category.media and theme_config('zen-flyout-navigation-teaser') %}col-8 col-xl-9{% else %}col{% endif %}\">
        <div class=\"navigation-flyout-categories\">
            {{ block('layout_navigation_flyout_categories_recoursion') }}
        </div>
    </div>
{% endblock %}

{% block layout_navigation_flyout_teaser %}
    {% if theme_config('zen-flyout-navigation-teaser') %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block layout_navigation_flyout_teaser_image %}
    {% set attributes = {
        'class': 'navigation-flyout-teaser-image',
        'alt': (category.media.translated.alt ?: ''),
        'title': (category.media.translated.title ?: ''),
        'data-object-fit': 'cover'
    } %}

    {# ... enables lazy loading for images #}
    {% if config('zenitPlatformStratus.config.lazyloading') %}
        {% set attributes = attributes|merge({ 'loading': 'lazy' }) %}
    {% endif %}

    <a class=\"navigation-flyout-teaser-image-container\"
       href=\"{{ category_url(category) }}\"
       {% if category_linknewtab(category) %}target=\"_blank\"{% endif %}
       title=\"{{ name }}\">
        {% sw_thumbnails 'navigation-flyout-teaser-image-thumbnails' with {
            media: category.media,
            sizes: {
                'default': '310px'
            }
        } %}
    </a>
{% endblock %}
", "@zenitPlatformStratus/storefront/layout/navigation/flyout.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/navigation/flyout.html.twig");
    }
}
