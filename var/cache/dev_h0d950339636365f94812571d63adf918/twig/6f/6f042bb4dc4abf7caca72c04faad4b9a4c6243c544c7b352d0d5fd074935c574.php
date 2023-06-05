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

/* @Storefront/storefront/component/analytics.html.twig */
class __TwigTemplate_ddb17ec77165b55d8ab8d3fe94ec165b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_analytics' => [$this, 'block_component_head_analytics'],
            'component_head_analytics_gtag' => [$this, 'block_component_head_analytics_gtag'],
            'component_head_analytics_gtag_config' => [$this, 'block_component_head_analytics_gtag_config'],
            'component_head_analytics_tag_config' => [$this, 'block_component_head_analytics_tag_config'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/analytics.html.twig"));

        // line 1
        $this->displayBlock('component_head_analytics', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_head_analytics($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics"));

        // line 2
        echo "    ";
        $this->displayBlock('component_head_analytics_gtag', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_component_head_analytics_gtag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag"));

        // line 3
        echo "        ";
        if ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3) && sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 3), "analytics", [], "any", false, false, false, 3), "isActive", [], "method", false, false, false, 3))) {
            // line 4
            echo "            ";
            $context["trackingId"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 4), "analytics", [], "any", false, false, false, 4), "getTrackingId", [], "method", false, false, false, 4);
            // line 5
            echo "
            <script>
                ";
            // line 7
            $this->displayBlock('component_head_analytics_gtag_config', $context, $blocks);
            // line 23
            echo "            </script>

            ";
            // line 26
            echo "            ";
            if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
                // line 27
                echo "                <script id=\"sw-google-tag-manager-init\" type=\"javascript/blocked\">
                    ";
                // line 28
                $this->displayBlock('component_head_analytics_tag_config', $context, $blocks);
                // line 31
                echo "                </script>
            ";
            }
            // line 33
            echo "        ";
        }
        // line 34
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_component_head_analytics_gtag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag_config"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_gtag_config"));

        // line 8
        echo "                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id=";
        // line 9
        echo sw_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "'
                    window.controllerName = '";
        // line 10
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerName"] ?? null)), "html", null, true);
        echo "';
                    window.actionName = '";
        // line 11
        echo sw_escape_filter($this->env, twig_lower_filter($this->env, ($context["controllerAction"] ?? null)), "html", null, true);
        echo "';
                    window.trackOrders = '";
        // line 12
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 12), "analytics", [], "any", false, false, false, 12), "isTrackOrders", [], "method", false, false, false, 12), "html", null, true);
        echo "';
                    window.gtagTrackingId = '";
        // line 13
        echo sw_escape_filter($this->env, ($context["trackingId"] ?? null), "html", null, true);
        echo "';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '";
        // line 16
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "salesChannel", [], "any", false, false, false, 16), "analytics", [], "any", false, false, false, 16), "isAnonymizeIp", [], "method", false, false, false, 16), "html", null, true);
        echo "',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_component_head_analytics_tag_config($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_tag_config"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_head_analytics_tag_config"));

        // line 29
        echo "                        window.gtagCallback = function gtagCallbackFunction() {}
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/analytics.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  189 => 29,  179 => 28,  162 => 16,  156 => 13,  152 => 12,  148 => 11,  144 => 10,  140 => 9,  137 => 8,  127 => 7,  117 => 34,  114 => 33,  110 => 31,  108 => 28,  105 => 27,  102 => 26,  98 => 23,  96 => 7,  92 => 5,  89 => 4,  86 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_head_analytics %}
    {% block component_head_analytics_gtag %}
        {% if context.salesChannel.analytics and context.salesChannel.analytics.isActive() %}
            {% set trackingId = context.salesChannel.analytics.getTrackingId() %}

            <script>
                {% block component_head_analytics_gtag_config %}
                    window.gtagActive = true;
                    window.gtagURL = 'https://www.googletagmanager.com/gtag/js?id={{ trackingId }}'
                    window.controllerName = '{{ controllerName|lower }}';
                    window.actionName = '{{ controllerAction|lower }}';
                    window.trackOrders = '{{ context.salesChannel.analytics.isTrackOrders() }}';
                    window.gtagTrackingId = '{{ trackingId }}';
                    window.dataLayer = window.dataLayer || [];
                    window.gtagConfig = {
                        'anonymize_ip': '{{ context.salesChannel.analytics.isAnonymizeIp() }}',
                        'cookie_domain': 'none',
                        'cookie_prefix': '_swag_ga',
                    };

                    function gtag() { dataLayer.push(arguments); }
                {% endblock %}
            </script>

            {# @deprecated tag:v6.5.0 - the gtag callback and #sw-google-tag-manager-init will be removed without replacement, since the logic moved into the google analytics plugin #}
            {% if not feature('v6.5.0.0') %}
                <script id=\"sw-google-tag-manager-init\" type=\"javascript/blocked\">
                    {% block component_head_analytics_tag_config %}
                        window.gtagCallback = function gtagCallbackFunction() {}
                    {% endblock %}
                </script>
            {% endif %}
        {% endif %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/analytics.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/analytics.html.twig");
    }
}
