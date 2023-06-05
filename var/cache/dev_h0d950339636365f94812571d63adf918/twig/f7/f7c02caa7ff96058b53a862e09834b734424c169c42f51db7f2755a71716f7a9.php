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

/* @zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_af5da9c99332ed395c69d25f7a8d1fa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'section_content_block_background_image' => [$this, 'block_section_content_block_background_image'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/section/cms-section-block-container.html.twig", "@zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_section_content_block_background_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_background_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_background_image"));

        // line 4
        echo "    ";
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 4)) {
            // line 5
            echo "        ";
            $context["attributes"] = ["class" => ("cms-block-background media-mode--" . sw_get_attribute($this->env, $this->source,             // line 6
($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 6))];
            // line 8
            echo "
        ";
            // line 10
            echo "        ";
            if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "zenitPlatformStratus.config.lazyloading")) {
                // line 11
                echo "            ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), ["loading" => "lazy"]);
                // line 12
                echo "        ";
            }
            // line 13
            echo "
        ";
            // line 14
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig", 14);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 15
($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 15), "name" => "cms-block-background"]));
            // line 17
            echo "    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_section_content_block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "section_content_block_container"));

        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        $context["top"] = ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 23))) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 23)) : ("auto"));
        // line 24
        echo "    ";
        $context["right"] = ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 24))) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 24)) : ("auto"));
        // line 25
        echo "    ";
        $context["bottom"] = ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 25))) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 25)) : ("auto"));
        // line 26
        echo "    ";
        $context["left"] = ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 26))) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 26)) : ("auto"));
        // line 27
        echo "
    ";
        // line 29
        echo "    ";
        if (((sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "type", [], "any", false, false, false, 29) === "product_detail") && (sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "locked", [], "any", false, false, false, 29) === true))) {
            // line 30
            echo "        ";
            if ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 30) === "0")) {
                // line 31
                echo "            ";
                $context["left"] = "auto";
                // line 32
                echo "        ";
            }
            // line 33
            echo "        ";
            if ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 33) === "0")) {
                // line 34
                echo "            ";
                $context["right"] = "auto";
                // line 35
                echo "        ";
            }
            // line 36
            echo "    ";
        }
        // line 37
        echo "
    ";
        // line 39
        echo "    ";
        if (((sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "type", [], "any", false, false, false, 39) === "product_list") && (sw_get_attribute($this->env, $this->source, ($context["cmsPage"] ?? null), "locked", [], "any", false, false, false, 39) === true))) {
            // line 40
            echo "        ";
            if ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 40) === "20px")) {
                // line 41
                echo "            ";
                $context["left"] = "auto";
                // line 42
                echo "        ";
            }
            // line 43
            echo "        ";
            if ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 43) === "20px")) {
                // line 44
                echo "            ";
                $context["right"] = "auto";
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 49
        echo "    ";
        // line 50
        echo "    <div class=\"cms-block-container\"
         style=\"";
        // line 51
        if ( !(($context["top"] ?? null) === "auto")) {
            echo "padding-top: ";
            echo sw_escape_filter($this->env, ($context["top"] ?? null), "html", null, true);
            echo ";";
        }
        if ( !(($context["right"] ?? null) === "auto")) {
            echo " padding-right: ";
            echo sw_escape_filter($this->env, ($context["right"] ?? null), "html", null, true);
            echo ";";
        }
        if ( !(($context["bottom"] ?? null) === "auto")) {
            echo " padding-bottom: ";
            echo sw_escape_filter($this->env, ($context["bottom"] ?? null), "html", null, true);
            echo ";";
        }
        if ( !(($context["left"] ?? null) === "auto")) {
            echo " padding-left: ";
            echo sw_escape_filter($this->env, ($context["left"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

        ";
        // line 53
        $this->displayBlock("section_content_block_row", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 53,  199 => 51,  196 => 50,  194 => 49,  191 => 47,  188 => 46,  185 => 45,  182 => 44,  179 => 43,  176 => 42,  173 => 41,  170 => 40,  167 => 39,  164 => 37,  161 => 36,  158 => 35,  155 => 34,  152 => 33,  149 => 32,  146 => 31,  143 => 30,  140 => 29,  137 => 27,  134 => 26,  131 => 25,  128 => 24,  125 => 23,  123 => 22,  121 => 21,  111 => 20,  100 => 17,  98 => 15,  91 => 14,  88 => 13,  85 => 12,  82 => 11,  79 => 10,  76 => 8,  74 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/section/cms-section-block-container.html.twig' %}

{% block section_content_block_background_image %}
    {% if block.backgroundMedia %}
        {% set attributes = {
            class: \"cms-block-background media-mode--\" ~ block.backgroundMediaMode
        } %}

        {# ... enables lazy loading for images #}
        {% if config('zenitPlatformStratus.config.lazyloading') %}
            {% set attributes = attributes|merge({ 'loading': 'lazy' }) %}
        {% endif %}

        {% sw_thumbnails 'cms-block-background' with {
            media: block.backgroundMedia
        } %}
    {% endif %}
{% endblock %}

{% block section_content_block_container %}
    {# ... add auto settings as fallback #}
    {# ... if null or auto, use value from the css stylesheet! #}
    {% set top = block.marginTop|length ? block.marginTop : 'auto' %}
    {% set right = block.marginRight|length ? block.marginRight : 'auto' %}
    {% set bottom = block.marginBottom|length ? block.marginBottom : 'auto' %}
    {% set left = block.marginLeft|length ? block.marginLeft : 'auto' %}

    {# ... set horizontal auto spacings for locked cms product_detail default page #}
    {% if cmsPage.type === 'product_detail' and cmsPage.locked === true %}
        {% if block.marginLeft === '0' %}
            {% set left = 'auto' %}
        {% endif %}
        {% if block.marginRight === '0' %}
            {% set right = 'auto' %}
        {% endif %}
    {% endif %}

    {# ... set horizontal auto spacings for locked cms product_list default page #}
    {% if cmsPage.type === 'product_list' and cmsPage.locked === true %}
        {% if block.marginLeft === '20px' %}
            {% set left = 'auto' %}
        {% endif %}
        {% if block.marginRight === '20px' %}
            {% set right = 'auto' %}
        {% endif %}
    {% endif %}

    {# ... split padding into separeted properties #}
    {# ... using padding instead of margins to prevent collapsing margins #}
    <div class=\"cms-block-container\"
         style=\"{% if top is not same as ('auto') %}padding-top: {{ top }};{% endif %}{% if right is not same as ('auto') %} padding-right: {{ right }};{% endif %}{% if bottom is not same as ('auto') %} padding-bottom: {{ bottom }};{% endif %}{% if left is not same as ('auto') %} padding-left: {{ left }};{% endif %}\">

        {{ block('section_content_block_row') }}
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/section/cms-section-block-container.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
