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

/* @zenitPlatformStratus/storefront/component/zen-login-register.html.twig */
class __TwigTemplate_868083ebb3ec8f58ce123a52c9a7cd54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'zen_component_login_register' => [$this, 'block_zen_component_login_register'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/zen-login-register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/zen-login-register.html.twig"));

        // line 1
        $this->displayBlock('zen_component_login_register', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_zen_component_login_register($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_component_login_register"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zen_component_login_register"));

        // line 2
        echo "    ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 2)) {
            // line 3
            echo "        <div class=\"top-bar-nav-item top-bar-login-register\">
            <span class=\"top-bar-login\">
                <a href=\"";
            // line 5
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
            echo "\"
                   title=\"";
            // line 6
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit")), "html", null, true);
            echo "\"
                   class=\"top-bar-login-item\">
                    ";
            // line 8
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
            echo "
                </a>
            </span>
            <span>";
            // line 11
            echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegister"));
            echo "</span>
            <span class=\"top-bar-register\">
                <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login.page");
            echo "\"
                   title=\"";
            // line 14
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
            echo "\"
                   class=\"top-bar-register-item\">
                    ";
            // line 16
            echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.orRegisterLink")), "html", null, true);
            echo "
                </a>
            </span>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/component/zen-login-register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  94 => 14,  90 => 13,  85 => 11,  79 => 8,  74 => 6,  70 => 5,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block zen_component_login_register %}
    {% if not context.customer %}
        <div class=\"top-bar-nav-item top-bar-login-register\">
            <span class=\"top-bar-login\">
                <a href=\"{{ path('frontend.account.login.page') }}\"
                   title=\"{{ \"account.loginSubmit\"|trans|striptags }}\"
                   class=\"top-bar-login-item\">
                    {{ \"account.loginSubmit\"|trans|sw_sanitize }}
                </a>
            </span>
            <span>{{ \"account.orRegister\"|trans|sw_sanitize }}</span>
            <span class=\"top-bar-register\">
                <a href=\"{{ path('frontend.account.login.page') }}\"
                   title=\"{{ \"account.orRegisterLink\"|trans|striptags }}\"
                   class=\"top-bar-register-item\">
                    {{ \"account.orRegisterLink\"|trans|striptags }}
                </a>
            </span>
        </div>
    {% endif %}
{% endblock %}
", "@zenitPlatformStratus/storefront/component/zen-login-register.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/component/zen-login-register.html.twig");
    }
}
