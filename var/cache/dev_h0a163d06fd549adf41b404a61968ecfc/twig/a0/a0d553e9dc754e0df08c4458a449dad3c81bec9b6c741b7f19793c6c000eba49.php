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

/* @zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig */
class __TwigTemplate_11940bb286a8daddae71a06935899675 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'zen_layout_footer_logo_inner' => [$this, 'block_zen_layout_footer_logo_inner'],
            'zen_layout_footer_logo_image' => [$this, 'block_zen_layout_footer_logo_image'],
            'zen_layout_footer_logo_image_tablet' => [$this, 'block_zen_layout_footer_logo_image_tablet'],
            'zen_layout_footer_logo_image_mobile' => [$this, 'block_zen_layout_footer_logo_image_mobile'],
            'zen_layout_footer_logo_image_default' => [$this, 'block_zen_layout_footer_logo_image_default'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig"));

        // line 1
        $this->displayBlock('zen_layout_footer_logo_inner', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_zen_layout_footer_logo_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_inner"));

        // line 2
        echo "    <div class=\"footer-logo-main\">
        ";
        // line 3
        $this->displayBlock('zen_layout_footer_logo_image', $context, $blocks);
        // line 28
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_zen_layout_footer_logo_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image"));

        // line 4
        echo "            <picture class=\"footer-logo-picture\">
                ";
        // line 5
        $this->displayBlock('zen_layout_footer_logo_image_tablet', $context, $blocks);
        // line 11
        echo "
                ";
        // line 12
        $this->displayBlock('zen_layout_footer_logo_image_mobile', $context, $blocks);
        // line 18
        echo "
                ";
        // line 19
        $this->displayBlock('zen_layout_footer_logo_image_default', $context, $blocks);
        // line 26
        echo "            </picture>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_zen_layout_footer_logo_image_tablet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image_tablet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image_tablet"));

        // line 6
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-footer-tablet")) {
            // line 7
            echo "                        <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-footer-tablet")), "html", null, true);
            echo "\"
                                media=\"(min-width: ";
            // line 8
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md"), "html", null, true);
            echo "px) and (max-width: ";
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.lg") - 1), "html", null, true);
            echo "px)\">
                    ";
        }
        // line 10
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_zen_layout_footer_logo_image_mobile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image_mobile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image_mobile"));

        // line 13
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-footer-mobile")) {
            // line 14
            echo "                        <source srcset=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-footer-mobile")), "html", null, true);
            echo "\"
                                media=\"(max-width: ";
            // line 15
            echo sw_escape_filter($this->env, ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "breakpoint.md") - 1), "html", null, true);
            echo "px)\">
                    ";
        }
        // line 17
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_zen_layout_footer_logo_image_default($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image_default"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_layout_footer_logo_image_default"));

        // line 20
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-footer-desktop")) {
            // line 21
            echo "                        <img src=\"";
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->theme($context, "zen-logo-footer-desktop")), "html", null, true);
            echo "\"
                             alt=\"";
            // line 22
            echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName"), "html", null, true);
            echo "\"
                             class=\"img-fluid footer-logo-main-img\"/>
                    ";
        }
        // line 25
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  211 => 25,  205 => 22,  200 => 21,  197 => 20,  187 => 19,  177 => 17,  172 => 15,  167 => 14,  164 => 13,  154 => 12,  144 => 10,  137 => 8,  132 => 7,  129 => 6,  119 => 5,  108 => 26,  106 => 19,  103 => 18,  101 => 12,  98 => 11,  96 => 5,  93 => 4,  83 => 3,  72 => 28,  70 => 3,  67 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block zen_layout_footer_logo_inner %}
    <div class=\"footer-logo-main\">
        {% block zen_layout_footer_logo_image %}
            <picture class=\"footer-logo-picture\">
                {% block zen_layout_footer_logo_image_tablet %}
                    {% if theme_config('zen-logo-footer-tablet') %}
                        <source srcset=\"{{ theme_config('zen-logo-footer-tablet') |sw_encode_url }}\"
                                media=\"(min-width: {{ theme_config('breakpoint.md') }}px) and (max-width: {{ theme_config('breakpoint.lg') - 1 }}px)\">
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_logo_image_mobile %}
                    {% if theme_config('zen-logo-footer-mobile') %}
                        <source srcset=\"{{ theme_config('zen-logo-footer-mobile') |sw_encode_url }}\"
                                media=\"(max-width: {{ theme_config('breakpoint.md') - 1 }}px)\">
                    {% endif %}
                {% endblock %}

                {% block zen_layout_footer_logo_image_default %}
                    {% if theme_config('zen-logo-footer-desktop') %}
                        <img src=\"{{ theme_config('zen-logo-footer-desktop') |sw_encode_url }}\"
                             alt=\"{{ config('core.basicInformation.shopName') }}\"
                             class=\"img-fluid footer-logo-main-img\"/>
                    {% endif %}
                {% endblock %}
            </picture>
        {% endblock %}
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/component/footer/zen-footer-logo.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/component/footer/zen-footer-logo.html.twig");
    }
}
