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

/* @zenitPlatformStratus/storefront/element/cms-element-image.html.twig */
class __TwigTemplate_84bb35c589bfb2a20a71797ff5dd553c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'element_image_media' => [$this, 'block_element_image_media'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/element/cms-element-image.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/element/cms-element-image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/element/cms-element-image.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/element/cms-element-image.html.twig", "@zenitPlatformStratus/storefront/element/cms-element-image.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_element_image_media($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_media"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "element_image_media"));

        // line 4
        echo "    ";
        $context["attributes"] = ["class" => "cms-image", "alt" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 6
($context["element"] ?? null), "data", [], "any", false, false, false, 6), "media", [], "any", false, false, false, 6), "translated", [], "any", false, false, false, 6), "alt", [], "any", false, false, false, 6)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 6), "media", [], "any", false, false, false, 6), "translated", [], "any", false, false, false, 6), "alt", [], "any", false, false, false, 6)) : ("")), "title" => ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 7
($context["element"] ?? null), "data", [], "any", false, false, false, 7), "media", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "data", [], "any", false, false, false, 7), "media", [], "any", false, false, false, 7), "translated", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7)) : (""))];
        // line 9
        echo "
    ";
        // line 10
        if (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 10), "config", [], "any", false, false, false, 10), "displayMode", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10) == "cover") || (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 10), "config", [], "any", false, false, false, 10), "displayMode", [], "any", false, false, false, 10), "value", [], "any", false, false, false, 10) == "contain"))) {
            // line 11
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["data-object-fit" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "translated", [], "any", false, false, false, 11), "config", [], "any", false, false, false, 11), "displayMode", [], "any", false, false, false, 11), "value", [], "any", false, false, false, 11)]);
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.lazyloading")) {
            // line 16
            echo "        ";
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["loading" => "lazy"]);
            // line 17
            echo "    ";
        }
        // line 18
        echo "
    ";
        // line 19
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/element/cms-element-image.html.twig", 19);
        })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 20
($context["element"] ?? null), "data", [], "any", false, false, false, 20), "media", [], "any", false, false, false, 20), "name" => "cms-image-thumbnails"]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/element/cms-element-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  99 => 19,  96 => 18,  93 => 17,  90 => 16,  87 => 15,  84 => 13,  81 => 12,  78 => 11,  76 => 10,  73 => 9,  71 => 7,  70 => 6,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/element/cms-element-image.html.twig' %}

{% block element_image_media %}
    {% set attributes = {
        'class': 'cms-image',
        'alt': (element.data.media.translated.alt ?: ''),
        'title': (element.data.media.translated.title ?: '')
    } %}

    {% if element.translated.config.displayMode.value == 'cover' or element.translated.config.displayMode.value == 'contain' %}
        {% set attributes = attributes|merge({ 'data-object-fit': element.translated.config.displayMode.value }) %}
    {% endif %}

    {# ... enables lazy loading for images #}
    {% if config('zenitPlatformStratus.config.lazyloading') %}
        {% set attributes = attributes|merge({ 'loading': 'lazy' }) %}
    {% endif %}

    {% sw_thumbnails 'cms-image-thumbnails' with {
        media: element.data.media
    } %}
{% endblock %}
", "@zenitPlatformStratus/storefront/element/cms-element-image.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/element/cms-element-image.html.twig");
    }
}
