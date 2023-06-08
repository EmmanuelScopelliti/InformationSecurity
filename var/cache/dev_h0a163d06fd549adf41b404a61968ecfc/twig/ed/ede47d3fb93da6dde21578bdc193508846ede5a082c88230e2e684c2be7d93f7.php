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

/* @zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig */
class __TwigTemplate_fe95bc034dd2cdf04e36d9b011103315 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'cms_form_newsletter' => [$this, 'block_cms_form_newsletter'],
            'cms_form_newsletter_input_email' => [$this, 'block_cms_form_newsletter_input_email'],
            'cms_form_newsletter_submit' => [$this, 'block_cms_form_newsletter_submit'],
            'cms_form_newsletter_privacy' => [$this, 'block_cms_form_newsletter_privacy'],
            'cms_form_newsletter_additional_fields' => [$this, 'block_cms_form_newsletter_additional_fields'],
            'cms_form_newsletter_required_fields_info' => [$this, 'block_cms_form_newsletter_required_fields_info'],
            'cms_form_newsletter_hidden_fields' => [$this, 'block_cms_form_newsletter_hidden_fields'],
            'cms_form_newsletter_csrf' => [$this, 'block_cms_form_newsletter_csrf'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_cms_form_newsletter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter"));

        // line 4
        echo "    <div class=\"cms-block cms-block-form newsletter-block\">
        <div class=\"cms-element-form\">
            <div class=\"footer-newsletter-content\" data-newsletter-privacy=\"true\">
                ";
        // line 8
        echo "                <p class=\"newsletter-inner-text\">";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("zentheme.footer.newsletterContent"), "html", null, true);
        echo "</p>

                <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["action"] ?? null));
        echo "\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    <div class=\"form-content\">
                        <div class=\"form-row row\">
                            <div class=\"footer-newsletter-column-input-email input-group col\">
                                ";
        // line 18
        $this->displayBlock('cms_form_newsletter_input_email', $context, $blocks);
        // line 30
        echo "
                                ";
        // line 31
        $this->displayBlock('cms_form_newsletter_submit', $context, $blocks);
        // line 39
        echo "                            </div>
                            <div class=\"w-100\"></div>
                            ";
        // line 41
        $this->displayBlock('cms_form_newsletter_privacy', $context, $blocks);
        // line 48
        echo "                        </div>

                        ";
        // line 50
        $this->displayBlock('cms_form_newsletter_additional_fields', $context, $blocks);
        // line 51
        echo "
                        ";
        // line 52
        $this->loadTemplate("@Storefront/storefront/component/captcha/base.html.twig", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", 52)->display(twig_array_merge($context, ["additionalClass" => "col-md-12"]));
        // line 53
        echo "
                        ";
        // line 54
        $this->displayBlock('cms_form_newsletter_required_fields_info', $context, $blocks);
        // line 55
        echo "                    </div>

                    ";
        // line 57
        $this->displayBlock('cms_form_newsletter_hidden_fields', $context, $blocks);
        // line 67
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_cms_form_newsletter_input_email($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_email"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_input_email"));

        // line 19
        echo "                                    ";
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", 19)->display(twig_array_merge($context, ["fieldName" => "email", "type" => "email", "required" => true, "additionalClass" => "flex-fill mb-0", "label" => "newsletter.labelMail", "placeholder" => "newsletter.placeholderMail"]));
        // line 29
        echo "                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_cms_form_newsletter_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_submit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_submit"));

        // line 32
        echo "                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\"
                                                aria-label=\"";
        // line 34
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.formSubmit")), "html", null, true);
        echo "\">
                                            ";
        // line 35
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

            $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

            return $this->loadTemplate($includeTemplate ?? null, "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", 35);
        })())->display(twig_array_merge($context, ["name" => "arrow-head-right"]));
        // line 36
        echo "                                        </button>
                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_cms_form_newsletter_privacy($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_privacy"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_privacy"));

        // line 42
        echo "                                <div class=\"footer-column-newsletter-privacy col\">
                                    ";
        // line 43
        $this->loadTemplate("@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", 43)->display(twig_array_merge($context, ["_key" => "footer"]));
        // line 46
        echo "                                </div>
                            ";
        
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_cms_form_newsletter_required_fields_info($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_required_fields_info"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_required_fields_info"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_cms_form_newsletter_hidden_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_hidden_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_hidden_fields"));

        // line 58
        echo "                        <div class=\"form-hidden-fields\">
                            ";
        // line 59
        $this->displayBlock('cms_form_newsletter_csrf', $context, $blocks);
        // line 62
        echo "
                            <input type=\"hidden\" name=\"option\" value=\"";
        // line 63
        echo sw_escape_filter($this->env, twig_constant("Shopware\\Storefront\\Controller\\FormController::SUBSCRIBE"), "html", null, true);
        echo "\">
                            <input type=\"submit\" class=\"submit--hidden d-none\" />
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_cms_form_newsletter_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cms_form_newsletter_csrf"));

        // line 60
        echo "                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder(($context["action"] ?? null));
        echo "
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 60,  301 => 59,  287 => 63,  284 => 62,  282 => 59,  279 => 58,  269 => 57,  251 => 54,  233 => 50,  222 => 46,  220 => 43,  217 => 42,  207 => 41,  195 => 36,  187 => 35,  183 => 34,  179 => 32,  169 => 31,  159 => 29,  156 => 19,  146 => 18,  132 => 67,  130 => 57,  126 => 55,  124 => 54,  121 => 53,  119 => 52,  116 => 51,  114 => 50,  110 => 48,  108 => 41,  104 => 39,  102 => 31,  99 => 30,  97 => 18,  86 => 10,  80 => 8,  75 => 4,  65 => 3,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/element/cms-element-form/form-types/newsletter-form.html.twig' %}

{% block cms_form_newsletter %}
    <div class=\"cms-block cms-block-form newsletter-block\">
        <div class=\"cms-element-form\">
            <div class=\"footer-newsletter-content\" data-newsletter-privacy=\"true\">
                {# ... content will be overwritten by success message #}
                <p class=\"newsletter-inner-text\">{{ \"zentheme.footer.newsletterContent\"|trans }}</p>

                <form action=\"{{ path(action) }}\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    <div class=\"form-content\">
                        <div class=\"form-row row\">
                            <div class=\"footer-newsletter-column-input-email input-group col\">
                                {% block cms_form_newsletter_input_email %}
                                    {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-input.html.twig'
                                        with {
                                        fieldName: 'email',
                                        type: 'email',
                                        required: true,
                                        additionalClass: 'flex-fill mb-0',
                                        label: 'newsletter.labelMail',
                                        placeholder: 'newsletter.placeholderMail'
                                    }
                                    %}
                                {% endblock %}

                                {% block cms_form_newsletter_submit %}
                                    <div class=\"input-group-append\">
                                        <button type=\"submit\" class=\"btn btn-primary\"
                                                aria-label=\"{{ \"general.formSubmit\"|trans|striptags }}\">
                                            {% sw_icon 'arrow-head-right' %}
                                        </button>
                                    </div>
                                {% endblock %}
                            </div>
                            <div class=\"w-100\"></div>
                            {% block cms_form_newsletter_privacy %}
                                <div class=\"footer-column-newsletter-privacy col\">
                                    {% sw_include '@Storefront/storefront/element/cms-element-form/form-components/cms-element-form-privacy.html.twig' with {
                                        _key: 'footer'
                                    } %}
                                </div>
                            {% endblock %}
                        </div>

                        {% block cms_form_newsletter_additional_fields %}{% endblock %}

                        {% sw_include '@Storefront/storefront/component/captcha/base.html.twig' with { additionalClass : 'col-md-12'} %}

                        {% block cms_form_newsletter_required_fields_info %}{% endblock %}
                    </div>

                    {% block cms_form_newsletter_hidden_fields %}
                        <div class=\"form-hidden-fields\">
                            {% block cms_form_newsletter_csrf %}
                                {{ sw_csrf(action) }}
                            {% endblock %}

                            <input type=\"hidden\" name=\"option\" value=\"{{ constant('Shopware\\\\Storefront\\\\Controller\\\\FormController::SUBSCRIBE') }}\">
                            <input type=\"submit\" class=\"submit--hidden d-none\" />
                        </div>
                    {% endblock %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "@zenitPlatformStratus/storefront/component/footer/zen-footer-newsletter.html.twig", "/var/www/html/InformationSecurity/custom/plugins/zenitPlatformStratus/src/Resources/views/storefront/component/footer/zen-footer-newsletter.html.twig");
    }
}
