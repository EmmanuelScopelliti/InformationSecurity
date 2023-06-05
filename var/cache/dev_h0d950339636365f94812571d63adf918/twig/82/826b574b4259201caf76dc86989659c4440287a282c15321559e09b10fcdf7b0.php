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

/* @zenitPlatformStratus/storefront/layout/cookie/cookie-permission.html.twig */
class __TwigTemplate_18f8f824ded4b042fceac3edb3b9f518 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/layout/cookie/cookie-permission.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/cookie/cookie-permission.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/layout/cookie/cookie-permission.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "@zenitPlatformStratus/storefront/layout/cookie/cookie-permission.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/layout/cookie/cookie-permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/layout/cookie/cookie-permission.html.twig' %}

{# ... Legally compliant Cookie Consent Tool
    The Telecommunications Telemedia Data Protection Act (TTDPA, or TTDSG in German) is intended to prevent this.
#}
{#{% block layout_cookie_permission_inner_button_deny %}#}
{#    <span class=\"cookie-permission-button js-cookie-permission-button\">#}
{#        <button#}
{#            type=\"submit\"#}
{#            class=\"btn {{ acceptAllCookies ? 'btn-link' : 'btn-secondary' }}\">#}
{#            {{ \"cookie.deny\"|trans|sw_sanitize }}#}
{#        </button>#}
{#    </span>#}
{#{% endblock %}#}
", "@zenitPlatformStratus/storefront/layout/cookie/cookie-permission.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/layout/cookie/cookie-permission.html.twig");
    }
}
