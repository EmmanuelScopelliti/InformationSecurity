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

/* @Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig */
class __TwigTemplate_9646a8b6dc749b80cb9d4458b8bd87d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_element_form_input' => [$this, 'block_cms_element_form_input'],
            'cms_element_form_input_label' => [$this, 'block_cms_element_form_input_label'],
            'cms_element_form_input_input' => [$this, 'block_cms_element_form_input_input'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig"));

        // line 1
        $this->displayBlock('cms_element_form_input', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_cms_element_form_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input"));

        // line 2
        echo "    <div class=\"form-group ";
        echo sw_escape_filter($this->env, ($context["additionalClass"] ?? null), "html", null, true);
        echo "\">
        ";
        // line 3
        $this->displayBlock('cms_element_form_input_label', $context, $blocks);
        // line 8
        echo "
        ";
        // line 9
        $this->displayBlock('cms_element_form_input_input', $context, $blocks);
        // line 24
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_cms_element_form_input_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_label"));

        // line 4
        echo "            <label class=\"form-label\" for=\"form-";
        echo sw_escape_filter($this->env, ($context["fieldName"] ?? null), "html", null, true);
        echo "\">";
        // line 5
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null)), "html", null, true);
        if (($context["required"] ?? null)) {
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        }
        // line 6
        echo "            </label>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_cms_element_form_input_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_element_form_input_input"));

        // line 10
        echo "            <input name=\"";
        echo sw_escape_filter($this->env, ($context["fieldName"] ?? null), "html", null, true);
        echo "\"
                   type=\"";
        // line 11
        (((array_key_exists("type", $context) &&  !(null === ($context["type"] ?? null)))) ? (print (sw_escape_filter($this->env, ($context["type"] ?? null), "html", null, true))) : (print ("text")));
        echo "\"
                   id=\"form-";
        // line 12
        echo sw_escape_filter($this->env, ($context["fieldName"] ?? null), "html", null, true);
        echo "\"
                   value=\"";
        // line 13
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["data"] ?? null), "get", [0 => ($context["fieldName"] ?? null)], "method", false, false, false, 13), "html", null, true);
        echo "\"
                   placeholder=\"";
        // line 14
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["placeholder"] ?? null)), "html", null, true);
        echo "\"
                   ";
        // line 15
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 16
        echo "                   class=\"form-control";
        if (sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => ("/" . ($context["fieldName"] ?? null))], "method", false, false, false, 16)) {
            echo " is-invalid";
        }
        echo "\"/>

            ";
        // line 18
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => ("/" . ($context["fieldName"] ?? null))], "method", false, false, false, 18))) {
            // line 19
            echo "                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", 19)->display(twig_array_merge($context, ["violationPath" => ("/" .             // line 20
($context["fieldName"] ?? null))]));
            // line 22
            echo "            ";
        }
        // line 23
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  170 => 23,  167 => 22,  165 => 20,  163 => 19,  161 => 18,  153 => 16,  149 => 15,  145 => 14,  141 => 13,  137 => 12,  133 => 11,  128 => 10,  118 => 9,  107 => 6,  102 => 5,  98 => 4,  88 => 3,  77 => 24,  75 => 9,  72 => 8,  70 => 3,  65 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_element_form_input %}
    <div class=\"form-group {{ additionalClass }}\">
        {% block cms_element_form_input_label %}
            <label class=\"form-label\" for=\"form-{{ fieldName }}\">
                {{- label|trans -}}{% if required %} {{- \"general.required\"|trans -}}{% endif %}
            </label>
        {% endblock %}

        {% block cms_element_form_input_input %}
            <input name=\"{{ fieldName }}\"
                   type=\"{{ type ?? 'text'}}\"
                   id=\"form-{{ fieldName }}\"
                   value=\"{{ data.get( fieldName ) }}\"
                   placeholder=\"{{ placeholder|trans }}\"
                   {% if required %}required=\"required\"{% endif %}
                   class=\"form-control{% if formViolations.getViolations( '/' ~ fieldName ) %} is-invalid{% endif %}\"/>

            {% if formViolations.getViolations( '/' ~ fieldName ) is not empty %}
                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                    violationPath: ('/' ~ fieldName)
                } %}
            {% endif %}
        {% endblock %}
    </div>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig");
    }
}
