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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_32971a9357aeae25b274c441c684a302 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'cms_content' => [$this, 'block_cms_content'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@zenitPlatformStratus/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/content/index.html.twig"));

        $this->parent = $this->loadTemplate("@zenitPlatformStratus/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "base_main_inner"));

        // line 5
        echo "    <div class=\"container-main\">
        ";
        // line 6
        $this->displayBlock('page_content', $context, $blocks);
        // line 33
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "            ";
        $this->displayBlock('cms_breadcrumb', $context, $blocks);
        // line 15
        echo "
            ";
        // line 16
        $this->displayBlock('cms_content', $context, $blocks);
        // line 32
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_breadcrumb"));

        // line 8
        echo "                <div class=\"breadcrumb cms-breadcrumb container\">
                    ";
        // line 9
        $this->loadTemplate("@zenitPlatformStratus/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 9)->display(twig_to_array(["context" =>         // line 10
($context["context"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 11
($context["page"] ?? null), "header", [], "any", false, false, false, 11), "navigation", [], "any", false, false, false, 11), "active", [], "any", false, false, false, 11)]));
        // line 13
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_cms_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_content"));

        // line 17
        echo "                ";
        // line 18
        echo "                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 19
            echo "                    ";
            $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 19), "cmsPage", [], "any", false, false, false, 19), "cssClass", [], "any", false, false, false, 19))));
            // line 20
            echo "                    ";
            $context["cmsPage"] = ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20), "cmsPage", [], "any", false, false, false, 20)) : (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 20)));
            // line 21
            echo "                ";
        } else {
            // line 22
            echo "                    ";
            $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 22), "cssClass", [], "any", false, false, false, 22))));
            // line 23
            echo "                    ";
            $context["cmsPage"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 23);
            // line 24
            echo "                ";
        }
        // line 25
        echo "                ";
        $context["landingPage"] = ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 25)) ? (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 25)) : ([]));
        // line 26
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["cmsPageClasses"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 27
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 30
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_blocks"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_content_blocks"));

        // line 28
        echo "                        ";
        $this->loadTemplate("@zenitPlatformStratus/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 28)->display(twig_array_merge($context, ["cmsPage" => ($context["cmsPage"] ?? null), "landingPage" => ($context["landingPage"] ?? null)]));
        // line 29
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 29,  208 => 28,  198 => 27,  187 => 30,  185 => 27,  180 => 26,  177 => 25,  174 => 24,  171 => 23,  168 => 22,  165 => 21,  162 => 20,  159 => 19,  156 => 18,  154 => 17,  144 => 16,  133 => 13,  131 => 11,  130 => 10,  129 => 9,  126 => 8,  116 => 7,  106 => 32,  104 => 16,  101 => 15,  98 => 7,  88 => 6,  77 => 33,  75 => 6,  72 => 5,  62 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/base.html.twig' %}

{# @var page \\Shopware\\Storefront\\Page\\LandingPage\\LandingPage|\\Shopware\\Storefront\\Page\\CategoryPage\\CategoryPage #}
{% block base_main_inner %}
    <div class=\"container-main\">
        {% block page_content %}
            {% block cms_breadcrumb %}
                <div class=\"breadcrumb cms-breadcrumb container\">
                    {% sw_include '@Storefront/storefront/layout/breadcrumb.html.twig' with {
                        context: context,
                        category: page.header.navigation.active
                    } only %}
                </div>
            {% endblock %}

            {% block cms_content %}
                {# @deprecated tag:v6.5.0 - keep if branch - page.cmsPage will be removed. Use page.landingPage.cmsPage instead #}
                {% if feature('v6.5.0.0') %}
                    {% set cmsPageClasses = ('cms-page ' ~ page.landingPage.cmsPage.cssClass|striptags)|trim %}
                    {% set cmsPage = page.landingPage ? page.landingPage.cmsPage : page.cmsPage %}
                {% else %}
                    {% set cmsPageClasses = ('cms-page ' ~ page.cmsPage.cssClass|striptags)|trim %}
                    {% set cmsPage = page.cmsPage %}
                {% endif %}
                {% set landingPage = page.landingPage ? page.landingPage : {} %}
                <div class=\"{{ cmsPageClasses }}\">
                    {% block page_content_blocks %}
                        {% sw_include \"@Storefront/storefront/page/content/detail.html.twig\" with {'cmsPage': cmsPage, 'landingPage': landingPage} %}
                    {% endblock %}
                </div>
            {% endblock %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/page/content/index.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
