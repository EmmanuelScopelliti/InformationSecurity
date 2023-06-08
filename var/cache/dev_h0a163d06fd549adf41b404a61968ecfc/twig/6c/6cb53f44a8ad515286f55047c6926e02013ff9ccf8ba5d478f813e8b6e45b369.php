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

/* @Storefront/storefront/component/captcha/honeypot.html.twig */
class __TwigTemplate_c5fcc3afe1f52ae1fddd3272c0b7e948 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_captcha_honeypot' => [$this, 'block_component_captcha_honeypot'],
            'component_captcha_honeypot_input' => [$this, 'block_component_captcha_honeypot_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/captcha/honeypot.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/captcha/honeypot.html.twig"));

        // line 1
        $this->displayBlock('component_captcha_honeypot', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_captcha_honeypot($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_honeypot"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_honeypot"));

        // line 2
        echo "    <div class=\"";
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Framework\\Captcha\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER"), "html", null, true);
        echo "\">
        ";
        // line 3
        $this->displayBlock('component_captcha_honeypot_input', $context, $blocks);
        // line 15
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_component_captcha_honeypot_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_honeypot_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_captcha_honeypot_input"));

        // line 4
        echo "            <input type=\"text\"
                   name=\"";
        // line 5
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Framework\\Captcha\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER"), "html", null, true);
        echo "\"
                   class=\"d-none\"
                   value=\"\"
                   tabindex=\"-1\"
                   autocapitalize=\"off\"
                   spellcheck=\"false\"
                   autocorrect=\"off\"
                   autocomplete=\"off\"
            >
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/captcha/honeypot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 5,  92 => 4,  82 => 3,  71 => 15,  69 => 3,  64 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_captcha_honeypot %}
    <div class=\"{{ constant('Shopware\\\\Storefront\\\\Framework\\\\Captcha\\\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER') }}\">
        {% block component_captcha_honeypot_input %}
            <input type=\"text\"
                   name=\"{{ constant('Shopware\\\\Storefront\\\\Framework\\\\Captcha\\\\HoneypotCaptcha::CAPTCHA_REQUEST_PARAMETER') }}\"
                   class=\"d-none\"
                   value=\"\"
                   tabindex=\"-1\"
                   autocapitalize=\"off\"
                   spellcheck=\"false\"
                   autocorrect=\"off\"
                   autocomplete=\"off\"
            >
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/captcha/honeypot.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/captcha/honeypot.html.twig");
    }
}
