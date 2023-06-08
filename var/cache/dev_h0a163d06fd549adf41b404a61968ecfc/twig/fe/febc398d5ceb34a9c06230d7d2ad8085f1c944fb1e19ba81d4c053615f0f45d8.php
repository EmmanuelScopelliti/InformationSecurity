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

/* @Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig */
class __TwigTemplate_c8c9ec517bf5ffc47fcac0c30414acd2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'cms_form_newsletter' => [$this, 'block_cms_form_newsletter'],
            'cms_form_newsletter_select_action' => [$this, 'block_cms_form_newsletter_select_action'],
            'cms_form_newsletter_input_email' => [$this, 'block_cms_form_newsletter_input_email'],
            'cms_form_newsletter_additional_fields' => [$this, 'block_cms_form_newsletter_additional_fields'],
            'cms_form_newsletter_select_salutation' => [$this, 'block_cms_form_newsletter_select_salutation'],
            'cms_form_newsletter_input_first_name' => [$this, 'block_cms_form_newsletter_input_first_name'],
            'cms_form_newsletter_input_last_name' => [$this, 'block_cms_form_newsletter_input_last_name'],
            'cms_form_newsletter_captcha' => [$this, 'block_cms_form_newsletter_captcha'],
            'cms_form_newsletter_privacy' => [$this, 'block_cms_form_newsletter_privacy'],
            'cms_form_newsletter_required_fields_info' => [$this, 'block_cms_form_newsletter_required_fields_info'],
            'cms_form_newsletter_submit' => [$this, 'block_cms_form_newsletter_submit'],
            'cms_form_newsletter_hidden_fields' => [$this, 'block_cms_form_newsletter_hidden_fields'],
            'cms_form_newsletter_csrf' => [$this, 'block_cms_form_newsletter_csrf'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig"));

        // line 1
        $this->displayBlock('cms_form_newsletter', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_cms_form_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter"));

        // line 2
        echo "    <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["action"] ?? null));
        echo "\"
          method=\"post\"
          data-form-csrf-handler=\"true\"
          data-form-validation=\"true\">

        <div class=\"form-content\">
        <div class=\"";
        // line 8
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 9
        $this->displayBlock('cms_form_newsletter_select_action', $context, $blocks);
        // line 33
        echo "        </div>

        <div class=\"";
        // line 35
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 36
        $this->displayBlock('cms_form_newsletter_input_email', $context, $blocks);
        // line 48
        echo "        </div>

        ";
        // line 50
        $this->displayBlock('cms_form_newsletter_additional_fields', $context, $blocks);
        // line 83
        echo "
        ";
        // line 84
        $this->displayBlock('cms_form_newsletter_captcha', $context, $blocks);
        // line 87
        echo "
        ";
        // line 88
        $this->displayBlock('cms_form_newsletter_privacy', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('cms_form_newsletter_required_fields_info', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('cms_form_newsletter_submit', $context, $blocks);
        // line 99
        echo "        </div>

        ";
        // line 101
        $this->displayBlock('cms_form_newsletter_hidden_fields', $context, $blocks);
        // line 111
        echo "    </form>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_cms_form_newsletter_select_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_action"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_action"));

        // line 10
        echo "                <div class=\"form-group col-12\">
                    <label class=\"form-label\" for=\"newsletterAction\">
                        ";
        // line 12
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.labelActionSelect"), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"), "html", null, true);
        echo "
                    </label>

                    <select name=\"option\"
                            id=\"newsletterAction\"
                            required=\"required\"
                            class=\"";
        // line 18
        echo sw_escape_filter($this->env, ($context["formSelectClass"] ?? null), "html", null, true);
        echo "\"
                            data-form-field-toggle=\"true\"
                            data-form-field-toggle-target=\".js-field-toggle-newsletter-additional\"
                            data-form-field-toggle-value=\"subscribe\">
                        <option selected=\"selected\"
                                value=\"";
        // line 23
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Controller\\FormController::SUBSCRIBE"), "html", null, true);
        echo "\">
                            ";
        // line 24
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.subscribeOption"), "html", null, true);
        echo "
                        </option>

                        <option value=\"";
        // line 27
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Controller\\FormController::UNSUBSCRIBE"), "html", null, true);
        echo "\">
                            ";
        // line 28
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("newsletter.unsubscribeOption"), "html", null, true);
        echo "
                        </option>
                    </select>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_cms_form_newsletter_input_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_email"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_email"));

        // line 37
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 37)->display(twig_array_merge($context, ["fieldName" => "email", "type" => "email", "required" => true, "additionalClass" => "col-12", "label" => "newsletter.labelMail", "placeholder" => "newsletter.placeholderMail"]));
        // line 47
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_cms_form_newsletter_additional_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_additional_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_additional_fields"));

        // line 51
        echo "            <div class=\"js-field-toggle-newsletter-additional d-none\">
                <div class=\"";
        // line 52
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 53
        $this->displayBlock('cms_form_newsletter_select_salutation', $context, $blocks);
        // line 58
        echo "
                    ";
        // line 59
        $this->displayBlock('cms_form_newsletter_input_first_name', $context, $blocks);
        // line 69
        echo "
                    ";
        // line 70
        $this->displayBlock('cms_form_newsletter_input_last_name', $context, $blocks);
        // line 80
        echo "                </div>
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_cms_form_newsletter_select_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_salutation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_select_salutation"));

        // line 54
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 54)->display(twig_array_merge($context, ["additionalClass" => "col-md-4"]));
        // line 57
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_cms_form_newsletter_input_first_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_first_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_first_name"));

        // line 60
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 60)->display(twig_array_merge($context, ["fieldName" => "firstName", "additionalClass" => "col-md-4", "label" => "newsletter.labelFirstName", "placeholder" => "newsletter.placeholderFirstName"]));
        // line 68
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_cms_form_newsletter_input_last_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_last_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_last_name"));

        // line 71
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 71)->display(twig_array_merge($context, ["fieldName" => "lastName", "additionalClass" => "col-md-4", "label" => "newsletter.labelLastName", "placeholder" => "newsletter.placeholderLastName"]));
        // line 79
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_cms_form_newsletter_captcha($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_captcha"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_captcha"));

        // line 85
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 85)->display(twig_array_merge($context, ["additionalClass" => "col-md-4"]));
        // line 86
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_cms_form_newsletter_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_privacy"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_privacy"));

        // line 89
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 89)->display($context);
        // line 90
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_cms_form_newsletter_required_fields_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_required_fields_info"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_required_fields_info"));

        // line 93
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-info-required.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 93)->display($context);
        // line 94
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 96
    public function block_cms_form_newsletter_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_submit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_submit"));

        // line 97
        echo "            ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-submit.html.twig", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", 97)->display($context);
        // line 98
        echo "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_cms_form_newsletter_hidden_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_hidden_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_hidden_fields"));

        // line 102
        echo "            <div class=\"form-hidden-fields\">
                ";
        // line 104
        echo "                ";
        $this->displayBlock('cms_form_newsletter_csrf', $context, $blocks);
        // line 107
        echo "
                <input type=\"submit\" class=\"submit--hidden d-none\" />
            </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_cms_form_newsletter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_csrf"));

        // line 105
        echo "                    ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder(($context["action"] ?? null));
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  470 => 105,  460 => 104,  447 => 107,  444 => 104,  441 => 102,  431 => 101,  421 => 98,  418 => 97,  408 => 96,  398 => 94,  395 => 93,  385 => 92,  375 => 90,  372 => 89,  362 => 88,  352 => 86,  349 => 85,  339 => 84,  329 => 79,  326 => 71,  316 => 70,  306 => 68,  303 => 60,  293 => 59,  283 => 57,  280 => 54,  270 => 53,  258 => 80,  256 => 70,  253 => 69,  251 => 59,  248 => 58,  246 => 53,  242 => 52,  239 => 51,  229 => 50,  219 => 47,  216 => 37,  206 => 36,  191 => 28,  187 => 27,  181 => 24,  177 => 23,  169 => 18,  158 => 12,  154 => 10,  144 => 9,  133 => 111,  131 => 101,  127 => 99,  125 => 96,  122 => 95,  120 => 92,  117 => 91,  115 => 88,  112 => 87,  110 => 84,  107 => 83,  105 => 50,  101 => 48,  99 => 36,  95 => 35,  91 => 33,  89 => 9,  85 => 8,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block cms_form_newsletter %}
    <form action=\"{{ path(action) }}\"
          method=\"post\"
          data-form-csrf-handler=\"true\"
          data-form-validation=\"true\">

        <div class=\"form-content\">
        <div class=\"{{ formRowClass }}\">
            {% block cms_form_newsletter_select_action %}
                <div class=\"form-group col-12\">
                    <label class=\"form-label\" for=\"newsletterAction\">
                        {{ \"newsletter.labelActionSelect\"|trans }} {{ \"general.required\"|trans }}
                    </label>

                    <select name=\"option\"
                            id=\"newsletterAction\"
                            required=\"required\"
                            class=\"{{ formSelectClass }}\"
                            data-form-field-toggle=\"true\"
                            data-form-field-toggle-target=\".js-field-toggle-newsletter-additional\"
                            data-form-field-toggle-value=\"subscribe\">
                        <option selected=\"selected\"
                                value=\"{{ constant('Shopware\\\\Storefront\\\\Controller\\\\FormController::SUBSCRIBE') }}\">
                            {{ \"newsletter.subscribeOption\"|trans }}
                        </option>

                        <option value=\"{{ constant('Shopware\\\\Storefront\\\\Controller\\\\FormController::UNSUBSCRIBE') }}\">
                            {{ \"newsletter.unsubscribeOption\"|trans }}
                        </option>
                    </select>
                </div>
            {% endblock %}
        </div>

        <div class=\"{{ formRowClass }}\">
            {% block cms_form_newsletter_input_email %}
                {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                    with {
                    fieldName: 'email',
                    type: 'email',
                    required: true,
                    additionalClass: 'col-12',
                    label: 'newsletter.labelMail',
                    placeholder: 'newsletter.placeholderMail'
                }
                %}
            {% endblock %}
        </div>

        {% block cms_form_newsletter_additional_fields %}
            <div class=\"js-field-toggle-newsletter-additional d-none\">
                <div class=\"{{ formRowClass }}\">
                    {% block cms_form_newsletter_select_salutation %}
                        {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-select-salutation.html.twig'
                            with { additionalClass: 'col-md-4' }
                        %}
                    {% endblock %}

                    {% block cms_form_newsletter_input_first_name %}
                        {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                            with {
                            fieldName: 'firstName',
                            additionalClass: 'col-md-4',
                            label: 'newsletter.labelFirstName',
                            placeholder: 'newsletter.placeholderFirstName'
                        }
                        %}
                    {% endblock %}

                    {% block cms_form_newsletter_input_last_name %}
                        {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                            with {
                            fieldName: 'lastName',
                            additionalClass: 'col-md-4',
                            label: 'newsletter.labelLastName',
                            placeholder: 'newsletter.placeholderLastName'
                        }
                        %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}

        {% block cms_form_newsletter_captcha %}
            {% sw_include '@Storefront/storefront/component/captcha/base.html.twig' with { additionalClass : 'col-md-4'} %}
        {% endblock %}

        {% block cms_form_newsletter_privacy %}
            {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig' %}
        {% endblock %}

        {% block cms_form_newsletter_required_fields_info %}
            {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-info-required.html.twig' %}
        {% endblock %}

        {% block cms_form_newsletter_submit %}
            {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-submit.html.twig' %}
        {% endblock %}
        </div>

        {% block cms_form_newsletter_hidden_fields %}
            <div class=\"form-hidden-fields\">
                {# @deprecated tag:v6.5.0 - Block cms_form_newsletter_csrf will be removed. #}
                {% block cms_form_newsletter_csrf %}
                    {{ sw_csrf(action) }}
                {% endblock %}

                <input type=\"submit\" class=\"submit--hidden d-none\" />
            </div>
        {% endblock %}
    </form>
{% endblock %}
", "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/element/cms-element-form/form-types/newsletter-form.html.twig");
    }
}
