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

/* @Storefront/storefront/component/account/login.html.twig */
class __TwigTemplate_48d200305812af7e14bf72eb06b82992 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_account_login' => [$this, 'block_component_account_login'],
            'component_account_login_header' => [$this, 'block_component_account_login_header'],
            'component_account_login_form' => [$this, 'block_component_account_login_form'],
            'component_account_login_form_csrf' => [$this, 'block_component_account_login_form_csrf'],
            'component_account_login_form_redirect' => [$this, 'block_component_account_login_form_redirect'],
            'component_account_login_form_description' => [$this, 'block_component_account_login_form_description'],
            'component_account_login_form_error' => [$this, 'block_component_account_login_form_error'],
            'component_account_login_form_fields' => [$this, 'block_component_account_login_form_fields'],
            'component_account_login_form_mail' => [$this, 'block_component_account_login_form_mail'],
            'component_account_login_form_mail_label' => [$this, 'block_component_account_login_form_mail_label'],
            'component_account_login_form_mail_input' => [$this, 'block_component_account_login_form_mail_input'],
            'component_account_login_form_password' => [$this, 'block_component_account_login_form_password'],
            'component_account_login_form_password_label' => [$this, 'block_component_account_login_form_password_label'],
            'component_account_login_form_password_input' => [$this, 'block_component_account_login_form_password_input'],
            'component_account_login_password_recover' => [$this, 'block_component_account_login_password_recover'],
            'component_account_login_password_recover_link' => [$this, 'block_component_account_login_password_recover_link'],
            'component_account_login_submit' => [$this, 'block_component_account_login_submit'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/account/login.html.twig"));

        // line 1
        $this->displayBlock('component_account_login', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_account_login($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login"));

        // line 2
        echo "    <div class=\"card login-card\">
        <div class=\"card-body\">
            ";
        // line 4
        $this->displayBlock('component_account_login_header', $context, $blocks);
        // line 11
        echo "
            ";
        // line 12
        $this->displayBlock('component_account_login_form', $context, $blocks);
        // line 124
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_component_account_login_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_header"));

        // line 5
        echo "                ";
        if (($context["cardTitle"] ?? null)) {
            // line 6
            echo "                    <div class=\"card-title\">
                        ";
            // line 7
            echo sw_escape_filter($this->env, ($context["cardTitle"] ?? null), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_component_account_login_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form"));

        // line 13
        echo "                <form class=\"login-form\"
                      action=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.login");
        echo "\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    ";
        // line 20
        echo "                    ";
        $this->displayBlock('component_account_login_form_csrf', $context, $blocks);
        // line 23
        echo "
                    ";
        // line 24
        $this->displayBlock('component_account_login_form_redirect', $context, $blocks);
        // line 33
        echo "
                    ";
        // line 34
        $this->displayBlock('component_account_login_form_description', $context, $blocks);
        // line 39
        echo "
                    ";
        // line 40
        $this->displayBlock('component_account_login_form_error', $context, $blocks);
        // line 60
        echo "
                    ";
        // line 61
        $this->displayBlock('component_account_login_form_fields', $context, $blocks);
        // line 103
        echo "
                    ";
        // line 104
        $this->displayBlock('component_account_login_password_recover', $context, $blocks);
        // line 113
        echo "
                    ";
        // line 114
        $this->displayBlock('component_account_login_submit', $context, $blocks);
        // line 122
        echo "                </form>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_component_account_login_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_csrf"));

        // line 21
        echo "                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.login");
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_component_account_login_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_redirect"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_redirect"));

        // line 25
        echo "                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"";
        // line 27
        echo sw_escape_filter($this->env, ($context["redirectTo"] ?? null), "html", null, true);
        echo "\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"";
        // line 31
        echo sw_escape_filter($this->env, ($context["redirectParameters"] ?? null), "html", null, true);
        echo "\">
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_component_account_login_form_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_description"));

        // line 35
        echo "                        <p class=\"login-form-description\">
                            ";
        // line 36
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginFormDescription"));
        echo "
                        </p>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_component_account_login_form_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_error"));

        // line 41
        echo "                        ";
        if (($context["loginError"] ?? null)) {
            // line 42
            echo "                            ";
            if ((($context["errorSnippet"] ?? null) != null)) {
                // line 43
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 43)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                // line 45
($context["errorSnippet"] ?? null)))]));
                // line 47
                echo "                            ";
            } elseif ((($context["waitTime"] ?? null) != null)) {
                // line 48
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 48)->display(twig_array_merge($context, ["type" => "info", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginThrottled", ["%seconds%" =>                 // line 50
($context["waitTime"] ?? null)]))]));
                // line 52
                echo "                            ";
            } else {
                // line 53
                echo "                                ";
                $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/account/login.html.twig", 53)->display(twig_array_merge($context, ["type" => "danger", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginBadCredentials"))]));
                // line 57
                echo "                            ";
            }
            // line 58
            echo "                        ";
        }
        // line 59
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_component_account_login_form_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_fields"));

        // line 62
        echo "                        <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                            ";
        // line 63
        $this->displayBlock('component_account_login_form_mail', $context, $blocks);
        // line 82
        echo "
                            ";
        // line 83
        $this->displayBlock('component_account_login_form_password', $context, $blocks);
        // line 101
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_component_account_login_form_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail"));

        // line 64
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 65
        $this->displayBlock('component_account_login_form_mail_label', $context, $blocks);
        // line 71
        echo "
                                    ";
        // line 72
        $this->displayBlock('component_account_login_form_mail_input', $context, $blocks);
        // line 80
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 65
    public function block_component_account_login_form_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail_label"));

        // line 66
        echo "                                        <label class=\"form-label\"
                                               for=\"loginMail\">
                                            ";
        // line 68
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailLabel"));
        echo "
                                        </label>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_component_account_login_form_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_mail_input"));

        // line 73
        echo "                                        <input type=\"email\"
                                               class=\"form-control";
        // line 74
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginMail\"
                                               placeholder=\"";
        // line 76
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginMailPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"username\"
                                               required=\"required\">
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_component_account_login_form_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password"));

        // line 84
        echo "                                <div class=\"form-group col-md-6\">
                                    ";
        // line 85
        $this->displayBlock('component_account_login_form_password_label', $context, $blocks);
        // line 91
        echo "                                    ";
        $this->displayBlock('component_account_login_form_password_input', $context, $blocks);
        // line 99
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_component_account_login_form_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password_label"));

        // line 86
        echo "                                        <label class=\"form-label\"
                                               for=\"loginPassword\">
                                            ";
        // line 88
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordLabel"));
        echo "
                                        </label>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_component_account_login_form_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_form_password_input"));

        // line 92
        echo "                                        <input type=\"password\"
                                               class=\"form-control";
        // line 93
        if (($context["loginError"] ?? null)) {
            echo " is-invalid";
        }
        echo "\"
                                               id=\"loginPassword\"
                                               placeholder=\"";
        // line 95
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordPlaceholder")), "html", null, true);
        echo "\"
                                               name=\"password\"
                                               required=\"required\">
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 104
    public function block_component_account_login_password_recover($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_password_recover"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_password_recover"));

        // line 105
        echo "                        <div class=\"login-password-recover\">
                            ";
        // line 106
        $this->displayBlock('component_account_login_password_recover_link', $context, $blocks);
        // line 111
        echo "                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 106
    public function block_component_account_login_password_recover_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_password_recover_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_password_recover_link"));

        // line 107
        echo "                                <a href=\"";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.account.recover.page");
        echo "\">
                                    ";
        // line 108
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginPasswordRecover"), "html", null, true);
        echo "
                                </a>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 114
    public function block_component_account_login_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_submit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_account_login_submit"));

        // line 115
        echo "                        <div class=\"login-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary\">
                                ";
        // line 118
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.loginSubmit"));
        echo "
                            </button>
                        </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/account/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  614 => 118,  609 => 115,  599 => 114,  586 => 108,  581 => 107,  571 => 106,  560 => 111,  558 => 106,  555 => 105,  545 => 104,  531 => 95,  524 => 93,  521 => 92,  511 => 91,  498 => 88,  494 => 86,  484 => 85,  473 => 99,  470 => 91,  468 => 85,  465 => 84,  455 => 83,  441 => 76,  434 => 74,  431 => 73,  421 => 72,  408 => 68,  404 => 66,  394 => 65,  383 => 80,  381 => 72,  378 => 71,  376 => 65,  373 => 64,  363 => 63,  352 => 101,  350 => 83,  347 => 82,  345 => 63,  340 => 62,  330 => 61,  320 => 59,  317 => 58,  314 => 57,  311 => 53,  308 => 52,  306 => 50,  304 => 48,  301 => 47,  299 => 45,  297 => 43,  294 => 42,  291 => 41,  281 => 40,  268 => 36,  265 => 35,  255 => 34,  243 => 31,  236 => 27,  232 => 25,  222 => 24,  209 => 21,  199 => 20,  188 => 122,  186 => 114,  183 => 113,  181 => 104,  178 => 103,  176 => 61,  173 => 60,  171 => 40,  168 => 39,  166 => 34,  163 => 33,  161 => 24,  158 => 23,  155 => 20,  147 => 14,  144 => 13,  134 => 12,  124 => 10,  118 => 7,  115 => 6,  112 => 5,  102 => 4,  90 => 124,  88 => 12,  85 => 11,  83 => 4,  79 => 2,  60 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_account_login %}
    <div class=\"card login-card\">
        <div class=\"card-body\">
            {% block component_account_login_header %}
                {% if cardTitle %}
                    <div class=\"card-title\">
                        {{ cardTitle }}
                    </div>
                {% endif %}
            {% endblock %}

            {% block component_account_login_form %}
                <form class=\"login-form\"
                      action=\"{{ path('frontend.account.login') }}\"
                      method=\"post\"
                      data-form-csrf-handler=\"true\"
                      data-form-validation=\"true\">

                    {# @deprecated tag:v6.5.0 - Block component_account_login_form_csrf will be removed. #}
                    {% block component_account_login_form_csrf %}
                        {{ sw_csrf('frontend.account.login') }}
                    {% endblock %}

                    {% block component_account_login_form_redirect %}
                        <input type=\"hidden\"
                               name=\"redirectTo\"
                               value=\"{{ redirectTo }}\">

                        <input type=\"hidden\"
                               name=\"redirectParameters\"
                               value=\"{{ redirectParameters }}\">
                    {% endblock %}

                    {% block component_account_login_form_description %}
                        <p class=\"login-form-description\">
                            {{ \"account.loginFormDescription\"|trans|sw_sanitize }}
                        </p>
                    {% endblock %}

                    {% block component_account_login_form_error %}
                        {% if loginError %}
                            {% if errorSnippet != null %}
                                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                    type: \"danger\",
                                    content: errorSnippet|trans|sw_sanitize
                                } %}
                            {% elseif waitTime != null %}
                                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                    type: \"info\",
                                    content: \"account.loginThrottled\"|trans({\"%seconds%\": waitTime})|sw_sanitize
                                } %}
                            {% else %}
                                {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                                    type: \"danger\",
                                    content: \"account.loginBadCredentials\"|trans|sw_sanitize
                                } %}
                            {% endif %}
                        {% endif %}
                    {% endblock %}

                    {% block component_account_login_form_fields %}
                        <div class=\"{{ formRowClass }}\">
                            {% block component_account_login_form_mail %}
                                <div class=\"form-group col-md-6\">
                                    {% block component_account_login_form_mail_label %}
                                        <label class=\"form-label\"
                                               for=\"loginMail\">
                                            {{ \"account.loginMailLabel\"|trans|sw_sanitize }}
                                        </label>
                                    {% endblock %}

                                    {% block component_account_login_form_mail_input %}
                                        <input type=\"email\"
                                               class=\"form-control{% if loginError %} is-invalid{% endif %}\"
                                               id=\"loginMail\"
                                               placeholder=\"{{ \"account.loginMailPlaceholder\"|trans|striptags }}\"
                                               name=\"username\"
                                               required=\"required\">
                                    {% endblock %}
                                </div>
                            {% endblock %}

                            {% block component_account_login_form_password %}
                                <div class=\"form-group col-md-6\">
                                    {% block component_account_login_form_password_label %}
                                        <label class=\"form-label\"
                                               for=\"loginPassword\">
                                            {{ \"account.loginPasswordLabel\"|trans|sw_sanitize }}
                                        </label>
                                    {% endblock %}
                                    {% block component_account_login_form_password_input %}
                                        <input type=\"password\"
                                               class=\"form-control{% if loginError %} is-invalid{% endif %}\"
                                               id=\"loginPassword\"
                                               placeholder=\"{{ \"account.loginPasswordPlaceholder\"|trans|striptags }}\"
                                               name=\"password\"
                                               required=\"required\">
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_login_password_recover %}
                        <div class=\"login-password-recover\">
                            {% block component_account_login_password_recover_link %}
                                <a href=\"{{ seoUrl('frontend.account.recover.page') }}\">
                                    {{ 'account.loginPasswordRecover'|trans }}
                                </a>
                            {% endblock %}
                        </div>
                    {% endblock %}

                    {% block component_account_login_submit %}
                        <div class=\"login-submit\">
                            <button type=\"submit\"
                                    class=\"btn btn-primary\">
                                {{ \"account.loginSubmit\"|trans|sw_sanitize }}
                            </button>
                        </div>
                    {% endblock %}
                </form>
            {% endblock %}
        </div>
    </div>
{% endblock %}
", "@Storefront/storefront/component/account/login.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/account/login.html.twig");
    }
}
