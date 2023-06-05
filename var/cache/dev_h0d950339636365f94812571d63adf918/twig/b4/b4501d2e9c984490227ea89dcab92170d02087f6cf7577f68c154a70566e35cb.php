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

/* @Storefront/storefront/layout/cookie/cookie-permission.html.twig */
class __TwigTemplate_83acbae3153c1d3ad6c1fe28b9eca42c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout_cookie_permission_inner' => [$this, 'block_layout_cookie_permission_inner'],
            'layout_cookie_permission_inner_content' => [$this, 'block_layout_cookie_permission_inner_content'],
            'layout_cookie_permission_inner_button' => [$this, 'block_layout_cookie_permission_inner_button'],
            'layout_cookie_permission_inner_button_deny' => [$this, 'block_layout_cookie_permission_inner_button_deny'],
            'layout_cookie_permission_inner_button_configuration' => [$this, 'block_layout_cookie_permission_inner_button_configuration'],
            'layout_cookie_permission_inner_button_accept_all' => [$this, 'block_layout_cookie_permission_inner_button_accept_all'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig"));

        // line 1
        $context["useDefaultCookieConsent"] = ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.useDefaultCookieConsent") == true);
        // line 2
        if (($context["useDefaultCookieConsent"] ?? null)) {
            // line 3
            echo "    ";
            $this->displayBlock('layout_cookie_permission_inner', $context, $blocks);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_layout_cookie_permission_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner"));

        // line 4
        echo "        ";
        $context["acceptAllCookies"] = $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.acceptAllCookies");
        // line 5
        echo "        <div
            class=\"cookie-permission-container\"
            data-cookie-permission=\"true\">
            <div class=\"container\">
                <div class=\"row align-items-center\">

                    ";
        // line 11
        $this->displayBlock('layout_cookie_permission_inner_content', $context, $blocks);
        // line 18
        echo "
                    ";
        // line 19
        $this->displayBlock('layout_cookie_permission_inner_button', $context, $blocks);
        // line 54
        echo "                </div>
            </div>
        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_layout_cookie_permission_inner_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_content"));

        // line 12
        echo "                        <div class=\"col cookie-permission-content\">
                            ";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.message", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")])]);
        // line 15
        echo "
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_layout_cookie_permission_inner_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button"));

        // line 20
        echo "                        <div class=\"col-12 col-md-auto d-flex justify-content-center flex-wrap cookie-permission-actions ";
        echo sw_escape_filter($this->env, ($context["paddingEndClass"] ?? null), "html", null, true);
        echo "-2\">
                            ";
        // line 21
        $this->displayBlock('layout_cookie_permission_inner_button_deny', $context, $blocks);
        // line 30
        echo "
                            ";
        // line 31
        $this->displayBlock('layout_cookie_permission_inner_button_configuration', $context, $blocks);
        // line 40
        echo "
                            ";
        // line 41
        if (($context["acceptAllCookies"] ?? null)) {
            // line 42
            echo "                                ";
            $this->displayBlock('layout_cookie_permission_inner_button_accept_all', $context, $blocks);
            // line 51
            echo "                            ";
        }
        // line 52
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_layout_cookie_permission_inner_button_deny($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_deny"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_deny"));

        // line 22
        echo "                                <span class=\"cookie-permission-button js-cookie-permission-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 26
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.deny"));
        echo "
                                    </button>
                                </span>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_layout_cookie_permission_inner_button_configuration($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_configuration"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_configuration"));

        // line 32
        echo "                                <span class=\"js-cookie-configuration-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        ";
        // line 36
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.configure"));
        echo "
                                    </button>
                                </span>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_layout_cookie_permission_inner_button_accept_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_accept_all"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_cookie_permission_inner_button_accept_all"));

        // line 43
        echo "                                    <span class=\"js-cookie-accept-all-button\">
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-primary\">
                                            ";
        // line 47
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cookie.acceptAll"));
        echo "
                                        </button>
                                    </span>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/layout/cookie/cookie-permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 47,  246 => 43,  236 => 42,  222 => 36,  216 => 32,  206 => 31,  192 => 26,  186 => 22,  176 => 21,  165 => 52,  162 => 51,  159 => 42,  157 => 41,  154 => 40,  152 => 31,  149 => 30,  147 => 21,  142 => 20,  132 => 19,  120 => 15,  118 => 13,  115 => 12,  105 => 11,  92 => 54,  90 => 19,  87 => 18,  85 => 11,  77 => 5,  74 => 4,  53 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set useDefaultCookieConsent = config('core.basicInformation.useDefaultCookieConsent') == true %}
{% if useDefaultCookieConsent %}
    {% block layout_cookie_permission_inner %}
        {% set acceptAllCookies = config('core.basicInformation.acceptAllCookies') %}
        <div
            class=\"cookie-permission-container\"
            data-cookie-permission=\"true\">
            <div class=\"container\">
                <div class=\"row align-items-center\">

                    {% block layout_cookie_permission_inner_content %}
                        <div class=\"col cookie-permission-content\">
                            {{ \"cookie.message\"|trans({
                                '%url%': path('frontend.cms.page', { id: config('core.basicInformation.privacyPage') })
                            })|raw }}
                        </div>
                    {% endblock %}

                    {% block layout_cookie_permission_inner_button %}
                        <div class=\"col-12 col-md-auto d-flex justify-content-center flex-wrap cookie-permission-actions {{ paddingEndClass }}-2\">
                            {% block layout_cookie_permission_inner_button_deny %}
                                <span class=\"cookie-permission-button js-cookie-permission-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        {{ \"cookie.deny\"|trans|sw_sanitize }}
                                    </button>
                                </span>
                            {% endblock %}

                            {% block layout_cookie_permission_inner_button_configuration %}
                                <span class=\"js-cookie-configuration-button\">
                                    <button
                                        type=\"submit\"
                                        class=\"btn btn-primary\">
                                        {{ \"cookie.configure\"|trans|sw_sanitize }}
                                    </button>
                                </span>
                            {% endblock %}

                            {% if acceptAllCookies %}
                                {% block layout_cookie_permission_inner_button_accept_all %}
                                    <span class=\"js-cookie-accept-all-button\">
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-primary\">
                                            {{ \"cookie.acceptAll\"|trans|sw_sanitize }}
                                        </button>
                                    </span>
                                {% endblock %}
                            {% endif %}
                        </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    {% endblock %}
{% endif %}
", "@Storefront/storefront/layout/cookie/cookie-permission.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/layout/cookie/cookie-permission.html.twig");
    }
}
