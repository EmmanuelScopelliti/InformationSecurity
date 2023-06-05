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

/* @Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig */
class __TwigTemplate_2ede8f8c19ac36dc29d3430f10583bce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_form_privacy_opt_in' => [$this, 'block_cms_form_privacy_opt_in'],
            'cms_form_privacy_opt_in_title' => [$this, 'block_cms_form_privacy_opt_in_title'],
            'cms_form_privacy_opt_in_input' => [$this, 'block_cms_form_privacy_opt_in_input'],
            'cms_form_privacy_opt_in_label' => [$this, 'block_cms_form_privacy_opt_in_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig"));

        // line 1
        $this->displayBlock('cms_form_privacy_opt_in', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_cms_form_privacy_opt_in($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in"));

        // line 2
        echo "    ";
        $context["identifierTemplate"] = "form-privacy-opt-in-%s";
        // line 3
        echo "    ";
        if ( !array_key_exists("requiresTermsOfService", $context)) {
            // line 4
            echo "        ";
            $context["requiresTermsOfService"] = true;
            // line 5
            echo "    ";
        }
        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('cms_form_privacy_opt_in_title', $context, $blocks);
        // line 10
        echo "
    <div class=\"form-text privacy-notice ";
        // line 11
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 12
        $this->displayBlock('cms_form_privacy_opt_in_input', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('cms_form_privacy_opt_in_label', $context, $blocks);
        // line 36
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_cms_form_privacy_opt_in_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_title"));

        // line 8
        echo "        <div>";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyTitle"), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        echo "</div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_cms_form_privacy_opt_in_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_input"));

        // line 13
        echo "            <input name=\"privacy\"
                   type=\"checkbox\"
                   class=\"";
        // line 15
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo "\"
                   id=\"";
        // line 16
        echo sw_escape_filter($this->env, twig_sprintf(($context["identifierTemplate"] ?? null), ($context["_key"] ?? null)), "html", null, true);
        echo "\"
                   required>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_cms_form_privacy_opt_in_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_privacy_opt_in_label"));

        // line 21
        echo "            <label for=\"";
        echo sw_escape_filter($this->env, twig_sprintf(($context["identifierTemplate"] ?? null), ($context["_key"] ?? null)), "html", null, true);
        echo "\" class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckLabelClass"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 22
        if ((($context["requiresTermsOfService"] ?? null) == true)) {
            // line 23
            echo "                    ";
            // line 24
            echo "                    ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.privacyNotice", ["%url%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")]), "%privacyUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")]), "%tosUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.tosPage")])]);
            // line 28
            echo "
                ";
        } else {
            // line 30
            echo "                    ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact.privacyNotice", ["%privacyUrl%" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.cms.page", ["id" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.privacyPage")])]);
            // line 32
            echo "
                ";
        }
        // line 34
        echo "            </label>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 34,  195 => 32,  192 => 30,  188 => 28,  185 => 24,  183 => 23,  181 => 22,  174 => 21,  164 => 20,  151 => 16,  147 => 15,  143 => 13,  133 => 12,  118 => 8,  108 => 7,  97 => 36,  95 => 20,  92 => 19,  90 => 12,  86 => 11,  83 => 10,  81 => 7,  78 => 6,  75 => 5,  72 => 4,  69 => 3,  66 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_form_privacy_opt_in %}
    {% set identifierTemplate = 'form-privacy-opt-in-%s' %}
    {% if requiresTermsOfService is not defined %}
        {% set requiresTermsOfService = true %}
    {% endif %}

    {% block cms_form_privacy_opt_in_title %}
        <div>{{ \"general.privacyTitle\"|trans }} {{ \"general.required\"|trans }}</div>
    {% endblock %}

    <div class=\"form-text privacy-notice {{ formCheckboxWrapperClass }}\">
        {% block cms_form_privacy_opt_in_input %}
            <input name=\"privacy\"
                   type=\"checkbox\"
                   class=\"{{ formCheckInputClass }}\"
                   id=\"{{ identifierTemplate|format(_key) }}\"
                   required>
        {% endblock %}

        {% block cms_form_privacy_opt_in_label %}
            <label for=\"{{ identifierTemplate|format(_key) }}\" class=\"{{ formCheckLabelClass }}\">
                {% if requiresTermsOfService == true %}
                    {# @deprecated tag:v6.5.0 - Translation parameter %url% will be removed, use %privacyUrl% and %tosUrl% instead #}
                    {{ \"general.privacyNotice\"|trans({
                        '%url%': path('frontend.cms.page', { id: config('core.basicInformation.privacyPage') }),
                        '%privacyUrl%': path('frontend.cms.page', { id: config('core.basicInformation.privacyPage') }),
                        '%tosUrl%': path('frontend.cms.page', { id: config('core.basicInformation.tosPage')} )
                    })|raw }}
                {% else %}
                    {{ \"contact.privacyNotice\"|trans({
                        '%privacyUrl%': path('frontend.cms.page', { id: config('core.basicInformation.privacyPage') })
                    })|raw }}
                {% endif %}
            </label>
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig");
    }
}
