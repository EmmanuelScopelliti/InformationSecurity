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

/* @Storefront/storefront/page/account/profile/index.html.twig */
class __TwigTemplate_36a4b76948b31957db6ce975db1dbc87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'page_account_main_content' => [$this, 'block_page_account_main_content'],
            'page_account_profile' => [$this, 'block_page_account_profile'],
            'page_account_profile_main' => [$this, 'block_page_account_profile_main'],
            'page_account_profile_personal_welcome' => [$this, 'block_page_account_profile_personal_welcome'],
            'page_account_profile_personal_welcome_headline' => [$this, 'block_page_account_profile_personal_welcome_headline'],
            'page_account_profile_personal_welcome_intro' => [$this, 'block_page_account_profile_personal_welcome_intro'],
            'page_account_profile_personal' => [$this, 'block_page_account_profile_personal'],
            'page_account_profile_personal_header' => [$this, 'block_page_account_profile_personal_header'],
            'page_account_profile_personal_form' => [$this, 'block_page_account_profile_personal_form'],
            'page_account_profile_personal_form_csrf' => [$this, 'block_page_account_profile_personal_form_csrf'],
            'page_account_profile_personal_fields' => [$this, 'block_page_account_profile_personal_fields'],
            'page_account_profile_personal_required' => [$this, 'block_page_account_profile_personal_required'],
            'page_account_profile_personal_action_buttons' => [$this, 'block_page_account_profile_personal_action_buttons'],
            'page_account_profile_personal_action_button_send' => [$this, 'block_page_account_profile_personal_action_button_send'],
            'page_account_profile_credentials' => [$this, 'block_page_account_profile_credentials'],
            'page_account_profile_credentials_header' => [$this, 'block_page_account_profile_credentials_header'],
            'page_account_profile_credentials_container' => [$this, 'block_page_account_profile_credentials_container'],
            'page_account_profile_credentials_current_mail' => [$this, 'block_page_account_profile_credentials_current_mail'],
            'page_account_profile_credentials_current_mail_label' => [$this, 'block_page_account_profile_credentials_current_mail_label'],
            'page_account_profile_credentials_change_mail' => [$this, 'block_page_account_profile_credentials_change_mail'],
            'page_account_profile_credentials_change_password' => [$this, 'block_page_account_profile_credentials_change_password'],
            'page_account_profile_mail_and_password' => [$this, 'block_page_account_profile_mail_and_password'],
            'page_account_profile_mail_collapse' => [$this, 'block_page_account_profile_mail_collapse'],
            'page_account_profile_mail_form' => [$this, 'block_page_account_profile_mail_form'],
            'page_account_profile_mail_form_csrf' => [$this, 'block_page_account_profile_mail_form_csrf'],
            'page_account_profile_mail_title' => [$this, 'block_page_account_profile_mail_title'],
            'page_account_profile_mail_container' => [$this, 'block_page_account_profile_mail_container'],
            'page_account_profile_mail' => [$this, 'block_page_account_profile_mail'],
            'page_account_profile_mail_label' => [$this, 'block_page_account_profile_mail_label'],
            'page_account_profile_mail_input' => [$this, 'block_page_account_profile_mail_input'],
            'page_account_profile_mail_input_error' => [$this, 'block_page_account_profile_mail_input_error'],
            'page_account_profile_mail_confirmation' => [$this, 'block_page_account_profile_mail_confirmation'],
            'page_account_profile_personal_mail_confirmation_label' => [$this, 'block_page_account_profile_personal_mail_confirmation_label'],
            'page_account_profile_mail_confirmation_input' => [$this, 'block_page_account_profile_mail_confirmation_input'],
            'page_account_profile_mail_confirmation_input_error' => [$this, 'block_page_account_profile_mail_confirmation_input_error'],
            'page_account_profile_mail_password' => [$this, 'block_page_account_profile_mail_password'],
            'page_account_profile_mail_password_label' => [$this, 'block_page_account_profile_mail_password_label'],
            'page_account_profile_mail_password_input' => [$this, 'block_page_account_profile_mail_password_input'],
            'page_account_profile_mail_password_input_error' => [$this, 'block_page_account_profile_mail_password_input_error'],
            'page_account_profile_mail_required' => [$this, 'block_page_account_profile_mail_required'],
            'page_account_profile_mail_action_buttons' => [$this, 'block_page_account_profile_mail_action_buttons'],
            'page_account_profile_mail_action_button_send' => [$this, 'block_page_account_profile_mail_action_button_send'],
            'page_account_profile_password' => [$this, 'block_page_account_profile_password'],
            'page_account_profile_password_form' => [$this, 'block_page_account_profile_password_form'],
            'page_account_profile_password_form_csrf' => [$this, 'block_page_account_profile_password_form_csrf'],
            'page_account_profile_password_title' => [$this, 'block_page_account_profile_password_title'],
            'page_account_profile_password_container' => [$this, 'block_page_account_profile_password_container'],
            'page_account_profile_new_password' => [$this, 'block_page_account_profile_new_password'],
            'page_account_profile_new_password_label' => [$this, 'block_page_account_profile_new_password_label'],
            'page_account_profile_new_password_input' => [$this, 'block_page_account_profile_new_password_input'],
            'page_account_profile_new_password_input_error' => [$this, 'block_page_account_profile_new_password_input_error'],
            'page_account_profile_new_password_confirmation' => [$this, 'block_page_account_profile_new_password_confirmation'],
            'page_account_profile_new_password_confirmation_label' => [$this, 'block_page_account_profile_new_password_confirmation_label'],
            'page_account_profile_new_password_confirmation_input' => [$this, 'block_page_account_profile_new_password_confirmation_input'],
            'page_account_profile_new_password_confirmation_error' => [$this, 'block_page_account_profile_new_password_confirmation_error'],
            'page_account_profile_current_password' => [$this, 'block_page_account_profile_current_password'],
            'page_account_profile_current_password_label' => [$this, 'block_page_account_profile_current_password_label'],
            'page_account_profile_current_password_input' => [$this, 'block_page_account_profile_current_password_input'],
            'page_account_profile_current_password_input_error' => [$this, 'block_page_account_profile_current_password_input_error'],
            'page_account_profile_password_required' => [$this, 'block_page_account_profile_password_required'],
            'page_account_profile_password_action_buttons' => [$this, 'block_page_account_profile_password_action_buttons'],
            'page_account_profile_password_action_button_send' => [$this, 'block_page_account_profile_password_action_button_send'],
            'page_account_profile_delete_account' => [$this, 'block_page_account_profile_delete_account'],
            'page_account_delete_account_confirm_modal' => [$this, 'block_page_account_delete_account_confirm_modal'],
            'page_account_delete_account_confirm_modal_content' => [$this, 'block_page_account_delete_account_confirm_modal_content'],
            'page_account_delete_account_confirm_modal_header' => [$this, 'block_page_account_delete_account_confirm_modal_header'],
            'page_account_delete_account_confirm_modal_header_title' => [$this, 'block_page_account_delete_account_confirm_modal_header_title'],
            'page_account_delete_account_confirm_modal_header_close_button' => [$this, 'block_page_account_delete_account_confirm_modal_header_close_button'],
            'page_account_delete_account_confirm_modal_body' => [$this, 'block_page_account_delete_account_confirm_modal_body'],
            'page_account_delete_account_confirm_modal_form' => [$this, 'block_page_account_delete_account_confirm_modal_form'],
            'page_account_delete_account_confirm_form_csrf' => [$this, 'block_page_account_delete_account_confirm_form_csrf'],
            'page_account_delete_account_confirm_alert' => [$this, 'block_page_account_delete_account_confirm_alert'],
            'page_account_delete_account_confirm_text' => [$this, 'block_page_account_delete_account_confirm_text'],
            'page_account_delete_account_confirm_button' => [$this, 'block_page_account_delete_account_confirm_button'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/page/account/_page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/profile/index.html.twig"));

        $this->parent = $this->loadTemplate("@Storefront/storefront/page/account/_page.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_page_account_main_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_main_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_main_content"));

        // line 4
        echo "    ";
        $this->displayBlock('page_account_profile', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_page_account_profile($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile"));

        // line 5
        echo "        <div class=\"account-profile\">
            ";
        // line 6
        $this->displayBlock('page_account_profile_main', $context, $blocks);
        // line 505
        echo "        </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_page_account_profile_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_main"));

        // line 7
        echo "                ";
        $this->displayBlock('page_account_profile_personal_welcome', $context, $blocks);
        // line 18
        echo "
                ";
        // line 19
        $this->displayBlock('page_account_profile_personal', $context, $blocks);
        // line 71
        echo "
                ";
        // line 72
        $this->displayBlock('page_account_profile_credentials', $context, $blocks);
        // line 122
        echo "
                ";
        // line 123
        $this->displayBlock('page_account_profile_mail_and_password', $context, $blocks);
        // line 416
        echo "
                ";
        // line 417
        $this->displayBlock('page_account_profile_delete_account', $context, $blocks);
        // line 426
        echo "
                ";
        // line 427
        $this->displayBlock('page_account_delete_account_confirm_modal', $context, $blocks);
        // line 504
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_page_account_profile_personal_welcome($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome"));

        // line 8
        echo "                    <div class=\"account-welcome\">
                        ";
        // line 9
        $this->displayBlock('page_account_profile_personal_welcome_headline', $context, $blocks);
        // line 12
        echo "
                        ";
        // line 13
        $this->displayBlock('page_account_profile_personal_welcome_intro', $context, $blocks);
        // line 16
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_page_account_profile_personal_welcome_headline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome_headline"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome_headline"));

        // line 10
        echo "                            <h1>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileTitle"));
        echo "</h1>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_page_account_profile_personal_welcome_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome_intro"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_welcome_intro"));

        // line 14
        echo "                            <p>";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileText"));
        echo "</p>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_page_account_profile_personal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal"));

        // line 20
        echo "                    <div class=\"card account-profile-personal\">
                        <div class=\"card-body\">
                            ";
        // line 22
        $this->displayBlock('page_account_profile_personal_header', $context, $blocks);
        // line 27
        echo "
                            ";
        // line 28
        $this->displayBlock('page_account_profile_personal_form', $context, $blocks);
        // line 68
        echo "                        </div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 22
    public function block_page_account_profile_personal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_header"));

        // line 23
        echo "                                <div class=\"card-title\">
                                    ";
        // line 24
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePersonalTitle"));
        echo "
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_page_account_profile_personal_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_form"));

        // line 29
        echo "                                <form id=\"profilePersonalForm\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\"
                                      action=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.save");
        echo "\"
                                      data-form-validation=\"true\">

                                    ";
        // line 36
        echo "                                    ";
        $this->displayBlock('page_account_profile_personal_form_csrf', $context, $blocks);
        // line 39
        echo "
                                    ";
        // line 40
        $this->displayBlock('page_account_profile_personal_fields', $context, $blocks);
        // line 48
        echo "
                                    ";
        // line 49
        $this->displayBlock('page_account_profile_personal_required', $context, $blocks);
        // line 54
        echo "
                                    ";
        // line 55
        $this->displayBlock('page_account_profile_personal_action_buttons', $context, $blocks);
        // line 66
        echo "                                </form>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_page_account_profile_personal_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_form_csrf"));

        // line 37
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.save");
        echo "
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 40
    public function block_page_account_profile_personal_fields($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_fields"));

        // line 41
        echo "                                        ";
        $this->loadTemplate("@Storefront/storefront/page/account/profile/personal.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 41)->display(twig_array_merge($context, ["showBirthdayField" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.showBirthdayField"), "showVatIdField" => true, "data" => sw_get_attribute($this->env, $this->source,         // line 44
($context["context"] ?? null), "customer", [], "any", false, false, false, 44), "onlyCompanyRegistration" => (((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 45
($context["context"] ?? null), "currentCustomerGroup", [], "any", false, true, false, 45), "translated", [], "any", false, true, false, 45), "registrationOnlyCompanyRegistration", [], "any", true, true, false, 45) &&  !(null === sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currentCustomerGroup", [], "any", false, true, false, 45), "translated", [], "any", false, true, false, 45), "registrationOnlyCompanyRegistration", [], "any", false, false, false, 45)))) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "currentCustomerGroup", [], "any", false, true, false, 45), "translated", [], "any", false, true, false, 45), "registrationOnlyCompanyRegistration", [], "any", false, false, false, 45)) : (false))]));
        // line 47
        echo "                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_page_account_profile_personal_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_required"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_required"));

        // line 50
        echo "                                        <p class=\"account-profile-required-info required-fields\">
                                            ";
        // line 51
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                        </p>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_page_account_profile_personal_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_action_buttons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_action_buttons"));

        // line 56
        echo "                                        <div class=\"card-actions\">
                                            ";
        // line 57
        $this->displayBlock('page_account_profile_personal_action_button_send', $context, $blocks);
        // line 64
        echo "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_page_account_profile_personal_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_action_button_send"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_action_button_send"));

        // line 58
        echo "                                                <button type=\"submit\"
                                                        class=\"profile-form-submit btn btn-light btn-sm\"
                                                        title=\"";
        // line 60
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                    ";
        // line 61
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                </button>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_page_account_profile_credentials($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials"));

        // line 73
        echo "                    <div class=\"card account-profile-credentials\">
                        <div class=\"card-body\">
                            ";
        // line 75
        $this->displayBlock('page_account_profile_credentials_header', $context, $blocks);
        // line 80
        echo "
                            ";
        // line 81
        $this->displayBlock('page_account_profile_credentials_container', $context, $blocks);
        // line 119
        echo "                        </div>
                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_page_account_profile_credentials_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_header"));

        // line 76
        echo "                                <div class=\"card-title\">
                                    ";
        // line 77
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileCredentialsTitle"));
        echo "
                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_page_account_profile_credentials_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_container"));

        // line 82
        echo "                                <div class=\"row align-items-center\">
                                    ";
        // line 83
        $this->displayBlock('page_account_profile_credentials_current_mail', $context, $blocks);
        // line 91
        echo "
                                    ";
        // line 92
        $this->displayBlock('page_account_profile_credentials_change_mail', $context, $blocks);
        // line 104
        echo "
                                    ";
        // line 105
        $this->displayBlock('page_account_profile_credentials_change_password', $context, $blocks);
        // line 117
        echo "                                </div>
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_page_account_profile_credentials_current_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_current_mail"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_current_mail"));

        // line 84
        echo "                                        <div class=\"col-12 col-md-6\">
                                            ";
        // line 85
        $this->displayBlock('page_account_profile_credentials_current_mail_label', $context, $blocks);
        // line 89
        echo "                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_page_account_profile_credentials_current_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_current_mail_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_current_mail_label"));

        // line 86
        echo "                                                <span class=\"account-profile-mail-label\">";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileCurrentMail"));
        echo "</span>
                                                <span class=\"account-profile-mail\">";
        // line 87
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["context"] ?? null), "customer", [], "any", false, false, false, 87), "email", [], "any", false, false, false, 87), "html", null, true);
        echo "</span>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_page_account_profile_credentials_change_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_change_mail"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_change_mail"));

        // line 93
        echo "                                        <div class=\"col-12 col-sm-6 col-md-3 mt-2 mt-md-0\">
                                            <a class=\"account-profile-change";
        // line 94
        if ( !($context["emailFormViolation"] ?? null)) {
            echo " collapsed";
        }
        echo "\"
                                               ";
        // line 95
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                               href=\"#profile-email-form\"
                                               role=\"button\"
                                               aria-expanded=\"";
        // line 98
        if (($context["emailFormViolation"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                                               aria-controls=\"profile-email-form\">
                                                ";
        // line 100
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileChangeEmail"));
        echo "
                                            </a>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 105
    public function block_page_account_profile_credentials_change_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_change_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_credentials_change_password"));

        // line 106
        echo "                                        <div class=\"col-12 col-sm-6 col-md-3 mt-2 mt-md-0\">
                                            <a class=\"account-profile-change";
        // line 107
        if ( !($context["passwordFormViolation"] ?? null)) {
            echo " collapsed";
        }
        echo "\"
                                               ";
        // line 108
        echo sw_escape_filter($this->env, ($context["dataBsToggleAttr"] ?? null), "html", null, true);
        echo "=\"collapse\"
                                               href=\"#profile-password-form\"
                                               role=\"button\"
                                               aria-expanded=\"";
        // line 111
        if (($context["passwordFormViolation"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
                                               aria-controls=\"profile-password-form\">
                                                ";
        // line 113
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileChangePassword"));
        echo "
                                            </a>
                                        </div>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_page_account_profile_mail_and_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_and_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_and_password"));

        // line 124
        echo "                    <div class=\"profile-content accordion\">
                        ";
        // line 125
        $this->displayBlock('page_account_profile_mail_collapse', $context, $blocks);
        // line 267
        echo "
                        ";
        // line 268
        $this->displayBlock('page_account_profile_password', $context, $blocks);
        // line 414
        echo "                    </div>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 125
    public function block_page_account_profile_mail_collapse($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_collapse"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_collapse"));

        // line 126
        echo "                            <div class=\"collapse";
        if ((($context["emailFormViolation"] ?? null) && ($context["formViolations"] ?? null))) {
            echo " show";
        }
        echo "\" id=\"profile-email-form\" data-parent=\".profile-content\">
                                <div class=\"card account-email\">
                                    ";
        // line 128
        $this->displayBlock('page_account_profile_mail_form', $context, $blocks);
        // line 264
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 128
    public function block_page_account_profile_mail_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_form"));

        // line 129
        echo "                                        <form id=\"profileMailForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              action=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.email.save");
        echo "\"
                                              data-form-csrf-handler=\"true\"
                                              data-form-validation=\"true\">

                                            ";
        // line 137
        echo "                                            ";
        $this->displayBlock('page_account_profile_mail_form_csrf', $context, $blocks);
        // line 140
        echo "
                                            ";
        // line 141
        $this->displayBlock('page_account_profile_mail_title', $context, $blocks);
        // line 146
        echo "
                                            ";
        // line 147
        $this->displayBlock('page_account_profile_mail_container', $context, $blocks);
        // line 213
        echo "
                                            ";
        // line 214
        $this->displayBlock('page_account_profile_mail_password', $context, $blocks);
        // line 244
        echo "
                                            ";
        // line 245
        $this->displayBlock('page_account_profile_mail_required', $context, $blocks);
        // line 250
        echo "
                                            ";
        // line 251
        $this->displayBlock('page_account_profile_mail_action_buttons', $context, $blocks);
        // line 262
        echo "                                        </form>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_page_account_profile_mail_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_form_csrf"));

        // line 138
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.email.save");
        echo "
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 141
    public function block_page_account_profile_mail_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_title"));

        // line 142
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 143
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileMailTitle"));
        echo "
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 147
    public function block_page_account_profile_mail_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_container"));

        // line 148
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    ";
        // line 149
        $this->displayBlock('page_account_profile_mail', $context, $blocks);
        // line 178
        echo "
                                                    ";
        // line 179
        $this->displayBlock('page_account_profile_mail_confirmation', $context, $blocks);
        // line 209
        echo "                                                </div>

                                                <p class=\"text-muted\">";
        // line 211
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileConfirmPassword"));
        echo "</p>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 149
    public function block_page_account_profile_mail($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail"));

        // line 150
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 151
        $this->displayBlock('page_account_profile_mail_label', $context, $blocks);
        // line 157
        echo "
                                                            ";
        // line 158
        $this->displayBlock('page_account_profile_mail_input', $context, $blocks);
        // line 168
        echo "
                                                            ";
        // line 169
        $this->displayBlock('page_account_profile_mail_input_error', $context, $blocks);
        // line 176
        echo "                                                        </div>
                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 151
    public function block_page_account_profile_mail_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_label"));

        // line 152
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"personalMail\">
                                                                    ";
        // line 154
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 158
    public function block_page_account_profile_mail_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_input"));

        // line 159
        echo "                                                                <input type=\"email\"
                                                                       class=\"form-control";
        // line 160
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 160))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMail\"
                                                                       placeholder=\"";
        // line 163
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailPlaceholder")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"email[email]\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       required=\"required\">
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 169
    public function block_page_account_profile_mail_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_input_error"));

        // line 170
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 170))) {
            // line 171
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 171)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 174
            echo "                                                                ";
        }
        // line 175
        echo "                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 179
    public function block_page_account_profile_mail_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation"));

        // line 180
        echo "                                                        <div class=\"form-group col\">
                                                            ";
        // line 181
        $this->displayBlock('page_account_profile_personal_mail_confirmation_label', $context, $blocks);
        // line 187
        echo "
                                                            ";
        // line 188
        $this->displayBlock('page_account_profile_mail_confirmation_input', $context, $blocks);
        // line 199
        echo "
                                                            ";
        // line 200
        $this->displayBlock('page_account_profile_mail_confirmation_input_error', $context, $blocks);
        // line 207
        echo "                                                        </div>
                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 181
    public function block_page_account_profile_personal_mail_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_mail_confirmation_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_personal_mail_confirmation_label"));

        // line 182
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"personalMailConfirmation\">
                                                                    ";
        // line 184
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 188
    public function block_page_account_profile_mail_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation_input"));

        // line 189
        echo "                                                                <input type=\"email\"
                                                                       class=\"form-control";
        // line 190
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 190))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMailConfirmation\"
                                                                       placeholder=\"";
        // line 193
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationPlaceholder")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"email[emailConfirmation]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       data-form-validation-equal-message=\"";
        // line 197
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalMailConfirmationInvalidMessage")), "html", null, true);
        echo "\">
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 200
    public function block_page_account_profile_mail_confirmation_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_confirmation_input_error"));

        // line 201
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/email"], "method", false, false, false, 201))) {
            // line 202
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 202)->display(twig_array_merge($context, ["violationPath" => "/email"]));
            // line 205
            echo "                                                                ";
        }
        // line 206
        echo "                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 214
    public function block_page_account_profile_mail_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password"));

        // line 215
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    <div class=\"form-group col-6\">
                                                        ";
        // line 217
        $this->displayBlock('page_account_profile_mail_password_label', $context, $blocks);
        // line 223
        echo "
                                                        ";
        // line 224
        $this->displayBlock('page_account_profile_mail_password_input', $context, $blocks);
        // line 233
        echo "
                                                        ";
        // line 234
        $this->displayBlock('page_account_profile_mail_password_input_error', $context, $blocks);
        // line 241
        echo "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 217
    public function block_page_account_profile_mail_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_label"));

        // line 218
        echo "                                                            <label class=\"form-label\"
                                                                   for=\"personalMailPasswordCurrent\">
                                                                ";
        // line 220
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                            </label>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 224
    public function block_page_account_profile_mail_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_input"));

        // line 225
        echo "                                                            <input type=\"password\"
                                                                   class=\"form-control";
        // line 226
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 226)) && ($context["emailFormViolation"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"personalMailPasswordCurrent\"
                                                                   placeholder=\"";
        // line 229
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                   name=\"email[password]\"
                                                                   required=\"required\">
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_page_account_profile_mail_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_password_input_error"));

        // line 235
        echo "                                                            ";
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 235)) && ($context["emailFormViolation"] ?? null))) {
            // line 236
            echo "                                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 236)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 239
            echo "                                                            ";
        }
        // line 240
        echo "                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 245
    public function block_page_account_profile_mail_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_required"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_required"));

        // line 246
        echo "                                                <p class=\"account-profile-required-info required-fields\">
                                                    ";
        // line 247
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                                </p>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 251
    public function block_page_account_profile_mail_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_action_buttons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_action_buttons"));

        // line 252
        echo "                                                <div class=\"card-actions\">
                                                    ";
        // line 253
        $this->displayBlock('page_account_profile_mail_action_button_send', $context, $blocks);
        // line 260
        echo "                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 253
    public function block_page_account_profile_mail_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_action_button_send"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_mail_action_button_send"));

        // line 254
        echo "                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"";
        // line 256
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                            ";
        // line 257
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                        </button>
                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 268
    public function block_page_account_profile_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password"));

        // line 269
        echo "                            <div class=\"collapse";
        if ((($context["passwordFormViolation"] ?? null) && ($context["formViolations"] ?? null))) {
            echo " show";
        }
        echo "\" id=\"profile-password-form\" data-parent=\".profile-content\">
                                <div class=\"card account-password\">
                                    ";
        // line 271
        $this->displayBlock('page_account_profile_password_form', $context, $blocks);
        // line 411
        echo "                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 271
    public function block_page_account_profile_password_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_form"));

        // line 272
        echo "                                        <form id=\"profilePasswordForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              data-form-csrf-handler=\"true\"
                                              action=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.password.save");
        echo "\"
                                              data-form-validation=\"true\">

                                            ";
        // line 280
        echo "                                            ";
        $this->displayBlock('page_account_profile_password_form_csrf', $context, $blocks);
        // line 283
        echo "
                                            ";
        // line 284
        $this->displayBlock('page_account_profile_password_title', $context, $blocks);
        // line 289
        echo "
                                            ";
        // line 290
        $this->displayBlock('page_account_profile_password_container', $context, $blocks);
        // line 360
        echo "
                                            ";
        // line 361
        $this->displayBlock('page_account_profile_current_password', $context, $blocks);
        // line 391
        echo "
                                            ";
        // line 392
        $this->displayBlock('page_account_profile_password_required', $context, $blocks);
        // line 397
        echo "
                                            ";
        // line 398
        $this->displayBlock('page_account_profile_password_action_buttons', $context, $blocks);
        // line 409
        echo "                                        </form>
                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 280
    public function block_page_account_profile_password_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_form_csrf"));

        // line 281
        echo "                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.password.save");
        echo "
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 284
    public function block_page_account_profile_password_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_title"));

        // line 285
        echo "                                                <div class=\"card-title\">
                                                    ";
        // line 286
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordTitle"));
        echo "
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 290
    public function block_page_account_profile_password_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_container"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_container"));

        // line 291
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    ";
        // line 292
        $this->displayBlock('page_account_profile_new_password', $context, $blocks);
        // line 325
        echo "
                                                    ";
        // line 326
        $this->displayBlock('page_account_profile_new_password_confirmation', $context, $blocks);
        // line 356
        echo "                                                </div>

                                                <p class=\"text-muted\">";
        // line 358
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileConfirmPassword"));
        echo "</p>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 292
    public function block_page_account_profile_new_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password"));

        // line 293
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 294
        $this->displayBlock('page_account_profile_new_password_label', $context, $blocks);
        // line 300
        echo "
                                                            ";
        // line 301
        $this->displayBlock('page_account_profile_new_password_input', $context, $blocks);
        // line 315
        echo "
                                                            ";
        // line 316
        $this->displayBlock('page_account_profile_new_password_input_error', $context, $blocks);
        // line 323
        echo "                                                        </div>
                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 294
    public function block_page_account_profile_new_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_label"));

        // line 295
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"newPassword\">
                                                                    ";
        // line 297
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCreateNew"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 301
    public function block_page_account_profile_new_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_input"));

        // line 302
        echo "                                                                <input type=\"password\"
                                                                       class=\"form-control";
        // line 303
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 303))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"newPassword\"
                                                                       placeholder=\"";
        // line 306
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCreateNew")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"password[newPassword]\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-length=\"";
        // line 309
        echo sw_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength"), "html", null, true);
        echo "\"
                                                                       data-form-validation-length-message=\" ";
        // line 310
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordDescription", ["%minLength%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.passwordMinLength")]));
        // line 312
        echo "\"
                                                                       required=\"required\">
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 316
    public function block_page_account_profile_new_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_input_error"));

        // line 317
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 317))) {
            // line 318
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 318)->display(twig_array_merge($context, ["violationPath" => "/newPassword"]));
            // line 321
            echo "                                                                ";
        }
        // line 322
        echo "                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 326
    public function block_page_account_profile_new_password_confirmation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation"));

        // line 327
        echo "                                                        <div class=\"col form-group\">
                                                            ";
        // line 328
        $this->displayBlock('page_account_profile_new_password_confirmation_label', $context, $blocks);
        // line 334
        echo "
                                                            ";
        // line 335
        $this->displayBlock('page_account_profile_new_password_confirmation_input', $context, $blocks);
        // line 346
        echo "
                                                            ";
        // line 347
        $this->displayBlock('page_account_profile_new_password_confirmation_error', $context, $blocks);
        // line 354
        echo "                                                        </div>
                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 328
    public function block_page_account_profile_new_password_confirmation_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_label"));

        // line 329
        echo "                                                                <label class=\"form-label\"
                                                                       for=\"passwordConfirmation\">
                                                                    ";
        // line 331
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                                </label>
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 335
    public function block_page_account_profile_new_password_confirmation_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_input"));

        // line 336
        echo "                                                                <input type=\"password\"
                                                                       class=\"form-control";
        // line 337
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 337))) {
            echo " is-invalid";
        }
        echo "\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"passwordConfirmation\"
                                                                       placeholder=\"";
        // line 340
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationLabel")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                       name=\"password[newPasswordConfirm]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-equal-message=\"";
        // line 344
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.personalPasswordConfirmationInvalidMessage")), "html", null, true);
        echo "\">
                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 347
    public function block_page_account_profile_new_password_confirmation_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_new_password_confirmation_error"));

        // line 348
        echo "                                                                ";
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/newPassword"], "method", false, false, false, 348))) {
            // line 349
            echo "                                                                    ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 349)->display(twig_array_merge($context, ["violationPath" => "/newPassword"]));
            // line 352
            echo "                                                                ";
        }
        // line 353
        echo "                                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 361
    public function block_page_account_profile_current_password($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password"));

        // line 362
        echo "                                                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formRowClass"] ?? null), "html", null, true);
        echo "\">
                                                    <div class=\"col-6 form-group\">
                                                        ";
        // line 364
        $this->displayBlock('page_account_profile_current_password_label', $context, $blocks);
        // line 370
        echo "
                                                        ";
        // line 371
        $this->displayBlock('page_account_profile_current_password_input', $context, $blocks);
        // line 380
        echo "
                                                        ";
        // line 381
        $this->displayBlock('page_account_profile_current_password_input_error', $context, $blocks);
        // line 388
        echo "                                                    </div>
                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 364
    public function block_page_account_profile_current_password_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_label"));

        // line 365
        echo "                                                            <label class=\"form-label\"
                                                                   for=\"password\">
                                                                ";
        // line 367
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent"));
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required"));
        echo "
                                                            </label>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 371
    public function block_page_account_profile_current_password_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_input"));

        // line 372
        echo "                                                            <input type=\"password\"
                                                                   class=\"form-control";
        // line 373
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 373)) && ($context["passwordFormViolation"] ?? null))) {
            echo " is-invalid";
        }
        echo "\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"password\"
                                                                   placeholder=\"";
        // line 376
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profilePasswordCurrent")), "html", null, true);
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.required")), "html", null, true);
        echo "\"
                                                                   name=\"password[password]\"
                                                                   required=\"required\">
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 381
    public function block_page_account_profile_current_password_input_error($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_input_error"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_current_password_input_error"));

        // line 382
        echo "                                                            ";
        if (( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["formViolations"] ?? null), "getViolations", [0 => "/password"], "method", false, false, false, 382)) && ($context["passwordFormViolation"] ?? null))) {
            // line 383
            echo "                                                                ";
            $this->loadTemplate("@Storefront/storefront/utilities/form-violation.html.twig", "@Storefront/storefront/page/account/profile/index.html.twig", 383)->display(twig_array_merge($context, ["violationPath" => "/password"]));
            // line 386
            echo "                                                            ";
        }
        // line 387
        echo "                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 392
    public function block_page_account_profile_password_required($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_required"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_required"));

        // line 393
        echo "                                                <p class=\"account-profile-required-info required-fields\">
                                                    ";
        // line 394
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.requiredFields"));
        echo "
                                                </p>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 398
    public function block_page_account_profile_password_action_buttons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_action_buttons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_action_buttons"));

        // line 399
        echo "                                                <div class=\"card-actions\">
                                                    ";
        // line 400
        $this->displayBlock('page_account_profile_password_action_button_send', $context, $blocks);
        // line 407
        echo "                                                </div>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 400
    public function block_page_account_profile_password_action_button_send($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_action_button_send"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_password_action_button_send"));

        // line 401
        echo "                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"";
        // line 403
        echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges")), "html", null, true);
        echo "\">
                                                            ";
        // line 404
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileSaveChanges"));
        echo "
                                                        </button>
                                                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 417
    public function block_page_account_profile_delete_account($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_delete_account"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_profile_delete_account"));

        // line 418
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.allowCustomerDeletion")) {
            // line 419
            echo "                        <div class=\"account-deleting py-4\">
                            ";
            // line 420
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDelete", ["%target%" => "#confirmDeleteAccountModal"]);
            // line 422
            echo "
                        </div>
                    ";
        }
        // line 425
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 427
    public function block_page_account_delete_account_confirm_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal"));

        // line 428
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.loginRegistration.allowCustomerDeletion")) {
            // line 429
            echo "                        <div class=\"modal fade confirm-delete-account-modal\"
                             id=\"confirmDeleteAccountModal\"
                             tabindex=\"1\"
                             role=\"dialog\">
                            <div class=\"modal-dialog modal-dialog-centered\"
                                 role=\"document\">

                                ";
            // line 436
            $this->displayBlock('page_account_delete_account_confirm_modal_content', $context, $blocks);
            // line 500
            echo "                            </div>
                        </div>
                    ";
        }
        // line 503
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 436
    public function block_page_account_delete_account_confirm_modal_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_content"));

        // line 437
        echo "                                    <div class=\"modal-content\">

                                        ";
        // line 439
        $this->displayBlock('page_account_delete_account_confirm_modal_header', $context, $blocks);
        // line 464
        echo "
                                        ";
        // line 465
        $this->displayBlock('page_account_delete_account_confirm_modal_body', $context, $blocks);
        // line 498
        echo "                                    </div>
                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 439
    public function block_page_account_delete_account_confirm_modal_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header"));

        // line 440
        echo "                                            <div class=\"modal-header\">

                                                ";
        // line 442
        $this->displayBlock('page_account_delete_account_confirm_modal_header_title', $context, $blocks);
        // line 447
        echo "
                                                ";
        // line 448
        $this->displayBlock('page_account_delete_account_confirm_modal_header_close_button', $context, $blocks);
        // line 462
        echo "                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 442
    public function block_page_account_delete_account_confirm_modal_header_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header_title"));

        // line 443
        echo "                                                    <div class=\"modal-title h3\">
                                                        ";
        // line 444
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteModalTitle"));
        echo "
                                                    </div>
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 448
    public function block_page_account_delete_account_confirm_modal_header_close_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header_close_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_header_close_button"));

        // line 449
        echo "                                                    <button
                                                        type=\"button\"
                                                        class=\"";
        // line 451
        echo sw_escape_filter($this->env, ($context["modalCloseBtnClass"] ?? null), "html", null, true);
        echo " close\"
                                                        ";
        // line 452
        echo sw_escape_filter($this->env, ($context["dataBsDismissAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                                                        aria-label=\"Close\">
                                                        ";
        // line 455
        echo "                                                        ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 456
            echo "                                                            <span aria-hidden=\"true\">
                                                                ";
            // line 457
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/page/account/profile/index.html.twig", 457);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
            // line 458
            echo "                                                            </span>
                                                        ";
        }
        // line 460
        echo "                                                    </button>
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 465
    public function block_page_account_delete_account_confirm_modal_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_body"));

        // line 466
        echo "                                            <div class=\"modal-body\">

                                                ";
        // line 468
        $this->displayBlock('page_account_delete_account_confirm_modal_form', $context, $blocks);
        // line 496
        echo "                                            </div>
                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 468
    public function block_page_account_delete_account_confirm_modal_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_modal_form"));

        // line 469
        echo "                                                    <form method=\"post\"
                                                          data-form-csrf-handler=\"true\"
                                                          action=\"";
        // line 471
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.profile.delete");
        echo "\"
                                                          data-form-submit-loader=\"true\">

                                                        ";
        // line 475
        echo "                                                        ";
        $this->displayBlock('page_account_delete_account_confirm_form_csrf', $context, $blocks);
        // line 478
        echo "
                                                        ";
        // line 479
        $this->displayBlock('page_account_delete_account_confirm_alert', $context, $blocks);
        // line 482
        echo "
                                                        ";
        // line 483
        $this->displayBlock('page_account_delete_account_confirm_text', $context, $blocks);
        // line 486
        echo "
                                                        ";
        // line 487
        $this->displayBlock('page_account_delete_account_confirm_button', $context, $blocks);
        // line 494
        echo "                                                    </form>
                                                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 475
    public function block_page_account_delete_account_confirm_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_form_csrf"));

        // line 476
        echo "                                                            ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.profile.delete");
        echo "
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 479
    public function block_page_account_delete_account_confirm_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_alert"));

        // line 480
        echo "                                                            ";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteAlert"));
        echo "
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 483
    public function block_page_account_delete_account_confirm_text($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_text"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_text"));

        // line 484
        echo "                                                            <h6 class=\"py-2\">";
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteConfirm"));
        echo "</h6>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 487
    public function block_page_account_delete_account_confirm_button($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_button"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_delete_account_confirm_button"));

        // line 488
        echo "                                                            <div class=\"text-right\">
                                                                <button class=\"btn btn-outline-danger\" type=\"submit\">
                                                                    ";
        // line 490
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.profileDeleteButton"));
        echo "
                                                                </button>
                                                            </div>
                                                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2519 => 490,  2515 => 488,  2505 => 487,  2492 => 484,  2482 => 483,  2469 => 480,  2459 => 479,  2446 => 476,  2436 => 475,  2425 => 494,  2423 => 487,  2420 => 486,  2418 => 483,  2415 => 482,  2413 => 479,  2410 => 478,  2407 => 475,  2401 => 471,  2397 => 469,  2387 => 468,  2376 => 496,  2374 => 468,  2370 => 466,  2360 => 465,  2349 => 460,  2345 => 458,  2337 => 457,  2334 => 456,  2331 => 455,  2326 => 452,  2322 => 451,  2318 => 449,  2308 => 448,  2295 => 444,  2292 => 443,  2282 => 442,  2271 => 462,  2269 => 448,  2266 => 447,  2264 => 442,  2260 => 440,  2250 => 439,  2239 => 498,  2237 => 465,  2234 => 464,  2232 => 439,  2228 => 437,  2218 => 436,  2208 => 503,  2203 => 500,  2201 => 436,  2192 => 429,  2189 => 428,  2179 => 427,  2169 => 425,  2164 => 422,  2162 => 420,  2159 => 419,  2156 => 418,  2146 => 417,  2133 => 404,  2129 => 403,  2125 => 401,  2115 => 400,  2104 => 407,  2102 => 400,  2099 => 399,  2089 => 398,  2076 => 394,  2073 => 393,  2063 => 392,  2053 => 387,  2050 => 386,  2047 => 383,  2044 => 382,  2034 => 381,  2019 => 376,  2011 => 373,  2008 => 372,  1998 => 371,  1984 => 367,  1980 => 365,  1970 => 364,  1958 => 388,  1956 => 381,  1953 => 380,  1951 => 371,  1948 => 370,  1946 => 364,  1940 => 362,  1930 => 361,  1920 => 353,  1917 => 352,  1914 => 349,  1911 => 348,  1901 => 347,  1889 => 344,  1881 => 340,  1873 => 337,  1870 => 336,  1860 => 335,  1846 => 331,  1842 => 329,  1832 => 328,  1821 => 354,  1819 => 347,  1816 => 346,  1814 => 335,  1811 => 334,  1809 => 328,  1806 => 327,  1796 => 326,  1786 => 322,  1783 => 321,  1780 => 318,  1777 => 317,  1767 => 316,  1755 => 312,  1753 => 310,  1749 => 309,  1742 => 306,  1734 => 303,  1731 => 302,  1721 => 301,  1707 => 297,  1703 => 295,  1693 => 294,  1682 => 323,  1680 => 316,  1677 => 315,  1675 => 301,  1672 => 300,  1670 => 294,  1667 => 293,  1657 => 292,  1645 => 358,  1641 => 356,  1639 => 326,  1636 => 325,  1634 => 292,  1629 => 291,  1619 => 290,  1606 => 286,  1603 => 285,  1593 => 284,  1580 => 281,  1570 => 280,  1559 => 409,  1557 => 398,  1554 => 397,  1552 => 392,  1549 => 391,  1547 => 361,  1544 => 360,  1542 => 290,  1539 => 289,  1537 => 284,  1534 => 283,  1531 => 280,  1525 => 276,  1519 => 272,  1509 => 271,  1497 => 411,  1495 => 271,  1487 => 269,  1477 => 268,  1464 => 257,  1460 => 256,  1456 => 254,  1446 => 253,  1435 => 260,  1433 => 253,  1430 => 252,  1420 => 251,  1407 => 247,  1404 => 246,  1394 => 245,  1384 => 240,  1381 => 239,  1378 => 236,  1375 => 235,  1365 => 234,  1350 => 229,  1342 => 226,  1339 => 225,  1329 => 224,  1315 => 220,  1311 => 218,  1301 => 217,  1289 => 241,  1287 => 234,  1284 => 233,  1282 => 224,  1279 => 223,  1277 => 217,  1271 => 215,  1261 => 214,  1251 => 206,  1248 => 205,  1245 => 202,  1242 => 201,  1232 => 200,  1220 => 197,  1212 => 193,  1204 => 190,  1201 => 189,  1191 => 188,  1177 => 184,  1173 => 182,  1163 => 181,  1152 => 207,  1150 => 200,  1147 => 199,  1145 => 188,  1142 => 187,  1140 => 181,  1137 => 180,  1127 => 179,  1117 => 175,  1114 => 174,  1111 => 171,  1108 => 170,  1098 => 169,  1082 => 163,  1074 => 160,  1071 => 159,  1061 => 158,  1047 => 154,  1043 => 152,  1033 => 151,  1022 => 176,  1020 => 169,  1017 => 168,  1015 => 158,  1012 => 157,  1010 => 151,  1007 => 150,  997 => 149,  985 => 211,  981 => 209,  979 => 179,  976 => 178,  974 => 149,  969 => 148,  959 => 147,  946 => 143,  943 => 142,  933 => 141,  920 => 138,  910 => 137,  899 => 262,  897 => 251,  894 => 250,  892 => 245,  889 => 244,  887 => 214,  884 => 213,  882 => 147,  879 => 146,  877 => 141,  874 => 140,  871 => 137,  864 => 132,  859 => 129,  849 => 128,  837 => 264,  835 => 128,  827 => 126,  817 => 125,  806 => 414,  804 => 268,  801 => 267,  799 => 125,  796 => 124,  786 => 123,  772 => 113,  763 => 111,  757 => 108,  751 => 107,  748 => 106,  738 => 105,  724 => 100,  715 => 98,  709 => 95,  703 => 94,  700 => 93,  690 => 92,  678 => 87,  673 => 86,  663 => 85,  652 => 89,  650 => 85,  647 => 84,  637 => 83,  626 => 117,  624 => 105,  621 => 104,  619 => 92,  616 => 91,  614 => 83,  611 => 82,  601 => 81,  588 => 77,  585 => 76,  575 => 75,  563 => 119,  561 => 81,  558 => 80,  556 => 75,  552 => 73,  542 => 72,  529 => 61,  525 => 60,  521 => 58,  511 => 57,  500 => 64,  498 => 57,  495 => 56,  485 => 55,  472 => 51,  469 => 50,  459 => 49,  449 => 47,  447 => 45,  446 => 44,  444 => 41,  434 => 40,  421 => 37,  411 => 36,  400 => 66,  398 => 55,  395 => 54,  393 => 49,  390 => 48,  388 => 40,  385 => 39,  382 => 36,  376 => 32,  371 => 29,  361 => 28,  348 => 24,  345 => 23,  335 => 22,  323 => 68,  321 => 28,  318 => 27,  316 => 22,  312 => 20,  302 => 19,  289 => 14,  279 => 13,  266 => 10,  256 => 9,  245 => 16,  243 => 13,  240 => 12,  238 => 9,  235 => 8,  225 => 7,  215 => 504,  213 => 427,  210 => 426,  208 => 417,  205 => 416,  203 => 123,  200 => 122,  198 => 72,  195 => 71,  193 => 19,  190 => 18,  187 => 7,  177 => 6,  166 => 505,  164 => 6,  161 => 5,  141 => 4,  131 => 3,  108 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% sw_extends '@Storefront/storefront/page/account/_page.html.twig' %}

{% block page_account_main_content %}
    {% block page_account_profile %}
        <div class=\"account-profile\">
            {% block page_account_profile_main %}
                {% block page_account_profile_personal_welcome %}
                    <div class=\"account-welcome\">
                        {% block page_account_profile_personal_welcome_headline %}
                            <h1>{{ \"account.profileTitle\"|trans|sw_sanitize }}</h1>
                        {% endblock %}

                        {% block page_account_profile_personal_welcome_intro %}
                            <p>{{ \"account.profileText\"|trans|sw_sanitize }}</p>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_account_profile_personal %}
                    <div class=\"card account-profile-personal\">
                        <div class=\"card-body\">
                            {% block page_account_profile_personal_header %}
                                <div class=\"card-title\">
                                    {{ \"account.profilePersonalTitle\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_profile_personal_form %}
                                <form id=\"profilePersonalForm\"
                                      method=\"post\"
                                      data-form-csrf-handler=\"true\"
                                      action=\"{{ path('frontend.account.profile.save') }}\"
                                      data-form-validation=\"true\">

                                    {# @deprecated tag:v6.5.0 - Block page_account_profile_personal_form_csrf will be removed. #}
                                    {% block page_account_profile_personal_form_csrf %}
                                        {{ sw_csrf('frontend.account.profile.save') }}
                                    {% endblock %}

                                    {% block page_account_profile_personal_fields %}
                                        {% sw_include '@Storefront/storefront/page/account/profile/personal.html.twig' with {
                                            'showBirthdayField': config('core.loginRegistration.showBirthdayField'),
                                            'showVatIdField': true,
                                            'data': context.customer,
                                            'onlyCompanyRegistration': context.currentCustomerGroup.translated.registrationOnlyCompanyRegistration ?? false
                                        } %}
                                    {% endblock %}

                                    {% block page_account_profile_personal_required %}
                                        <p class=\"account-profile-required-info required-fields\">
                                            {{ \"general.requiredFields\"|trans|sw_sanitize }}
                                        </p>
                                    {% endblock %}

                                    {% block page_account_profile_personal_action_buttons %}
                                        <div class=\"card-actions\">
                                            {% block page_account_profile_personal_action_button_send %}
                                                <button type=\"submit\"
                                                        class=\"profile-form-submit btn btn-light btn-sm\"
                                                        title=\"{{ \"account.profileSaveChanges\"|trans|striptags }}\">
                                                    {{ \"account.profileSaveChanges\"|trans|sw_sanitize }}
                                                </button>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}
                                </form>
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}

                {% block page_account_profile_credentials %}
                    <div class=\"card account-profile-credentials\">
                        <div class=\"card-body\">
                            {% block page_account_profile_credentials_header %}
                                <div class=\"card-title\">
                                    {{ \"account.profileCredentialsTitle\"|trans|sw_sanitize }}
                                </div>
                            {% endblock %}

                            {% block page_account_profile_credentials_container %}
                                <div class=\"row align-items-center\">
                                    {% block page_account_profile_credentials_current_mail %}
                                        <div class=\"col-12 col-md-6\">
                                            {% block page_account_profile_credentials_current_mail_label %}
                                                <span class=\"account-profile-mail-label\">{{ \"account.profileCurrentMail\"|trans|sw_sanitize }}</span>
                                                <span class=\"account-profile-mail\">{{ context.customer.email }}</span>
                                            {% endblock %}
                                        </div>
                                    {% endblock %}

                                    {% block page_account_profile_credentials_change_mail %}
                                        <div class=\"col-12 col-sm-6 col-md-3 mt-2 mt-md-0\">
                                            <a class=\"account-profile-change{% if not emailFormViolation %} collapsed{% endif %}\"
                                               {{ dataBsToggleAttr }}=\"collapse\"
                                               href=\"#profile-email-form\"
                                               role=\"button\"
                                               aria-expanded=\"{% if emailFormViolation %}true{% else %}false{% endif %}\"
                                               aria-controls=\"profile-email-form\">
                                                {{ \"account.profileChangeEmail\"|trans|sw_sanitize }}
                                            </a>
                                        </div>
                                    {% endblock %}

                                    {% block page_account_profile_credentials_change_password %}
                                        <div class=\"col-12 col-sm-6 col-md-3 mt-2 mt-md-0\">
                                            <a class=\"account-profile-change{% if not passwordFormViolation %} collapsed{% endif %}\"
                                               {{ dataBsToggleAttr }}=\"collapse\"
                                               href=\"#profile-password-form\"
                                               role=\"button\"
                                               aria-expanded=\"{% if passwordFormViolation %}true{% else %}false{% endif %}\"
                                               aria-controls=\"profile-password-form\">
                                                {{ \"account.profileChangePassword\"|trans|sw_sanitize }}
                                            </a>
                                        </div>
                                    {% endblock %}
                                </div>
                            {% endblock %}
                        </div>
                    </div>
                {% endblock %}

                {% block page_account_profile_mail_and_password %}
                    <div class=\"profile-content accordion\">
                        {% block page_account_profile_mail_collapse %}
                            <div class=\"collapse{% if emailFormViolation and formViolations %} show{% endif %}\" id=\"profile-email-form\" data-parent=\".profile-content\">
                                <div class=\"card account-email\">
                                    {% block page_account_profile_mail_form %}
                                        <form id=\"profileMailForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              action=\"{{ path('frontend.account.profile.email.save') }}\"
                                              data-form-csrf-handler=\"true\"
                                              data-form-validation=\"true\">

                                            {# @deprecated tag:v6.5.0 - Block page_account_profile_mail_form_csrf will be removed. #}
                                            {% block page_account_profile_mail_form_csrf %}
                                                {{ sw_csrf('frontend.account.profile.email.save') }}
                                            {% endblock %}

                                            {% block page_account_profile_mail_title %}
                                                <div class=\"card-title\">
                                                    {{ \"account.profileMailTitle\"|trans|sw_sanitize }}
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_mail_container %}
                                                <div class=\"{{ formRowClass }}\">
                                                    {% block page_account_profile_mail %}
                                                        <div class=\"col form-group\">
                                                            {% block page_account_profile_mail_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"personalMail\">
                                                                    {{ \"account.personalMailLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_input %}
                                                                <input type=\"email\"
                                                                       class=\"form-control{% if formViolations.getViolations('/email') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMail\"
                                                                       placeholder=\"{{ \"account.personalMailPlaceholder\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"email[email]\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       required=\"required\">
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_input_error %}
                                                                {% if formViolations.getViolations('/email') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/email'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}

                                                    {% block page_account_profile_mail_confirmation %}
                                                        <div class=\"form-group col\">
                                                            {% block page_account_profile_personal_mail_confirmation_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"personalMailConfirmation\">
                                                                    {{ \"account.personalMailConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_confirmation_input %}
                                                                <input type=\"email\"
                                                                       class=\"form-control{% if formViolations.getViolations('/email') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"section-personal email\"
                                                                       id=\"personalMailConfirmation\"
                                                                       placeholder=\"{{ \"account.personalMailConfirmationPlaceholder\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"email[emailConfirmation]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"personalMail\"
                                                                       data-form-validation-equal-message=\"{{ \"account.personalMailConfirmationInvalidMessage\"|trans|striptags }}\">
                                                            {% endblock %}

                                                            {% block page_account_profile_mail_confirmation_input_error %}
                                                                {% if formViolations.getViolations('/email') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/email'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}
                                                </div>

                                                <p class=\"text-muted\">{{ \"account.profileConfirmPassword\"|trans|sw_sanitize }}</p>
                                            {% endblock %}

                                            {% block page_account_profile_mail_password %}
                                                <div class=\"{{ formRowClass }}\">
                                                    <div class=\"form-group col-6\">
                                                        {% block page_account_profile_mail_password_label %}
                                                            <label class=\"form-label\"
                                                                   for=\"personalMailPasswordCurrent\">
                                                                {{ \"account.personalPasswordLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                            </label>
                                                        {% endblock %}

                                                        {% block page_account_profile_mail_password_input %}
                                                            <input type=\"password\"
                                                                   class=\"form-control{% if formViolations.getViolations('/password') is not empty and emailFormViolation %} is-invalid{% endif %}\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"personalMailPasswordCurrent\"
                                                                   placeholder=\"{{ \"account.profilePasswordCurrent\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                   name=\"email[password]\"
                                                                   required=\"required\">
                                                        {% endblock %}

                                                        {% block page_account_profile_mail_password_input_error %}
                                                            {% if formViolations.getViolations('/password') is not empty and emailFormViolation %}
                                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                    violationPath: '/password'
                                                                } %}
                                                            {% endif %}
                                                        {% endblock %}
                                                    </div>
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_mail_required %}
                                                <p class=\"account-profile-required-info required-fields\">
                                                    {{ \"general.requiredFields\"|trans|sw_sanitize }}
                                                </p>
                                            {% endblock %}

                                            {% block page_account_profile_mail_action_buttons %}
                                                <div class=\"card-actions\">
                                                    {% block page_account_profile_mail_action_button_send %}
                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"{{ \"account.profileSaveChanges\"|trans|striptags }}\">
                                                            {{ \"account.profileSaveChanges\"|trans|sw_sanitize }}
                                                        </button>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}

                        {% block page_account_profile_password %}
                            <div class=\"collapse{% if passwordFormViolation and formViolations %} show{% endif %}\" id=\"profile-password-form\" data-parent=\".profile-content\">
                                <div class=\"card account-password\">
                                    {% block page_account_profile_password_form %}
                                        <form id=\"profilePasswordForm\"
                                              class=\"card-body\"
                                              method=\"post\"
                                              data-form-csrf-handler=\"true\"
                                              action=\"{{ path('frontend.account.profile.password.save') }}\"
                                              data-form-validation=\"true\">

                                            {# @deprecated tag:v6.5.0 - Block page_account_profile_password_form_csrf will be removed. #}
                                            {% block page_account_profile_password_form_csrf %}
                                                {{ sw_csrf('frontend.account.profile.password.save') }}
                                            {% endblock %}

                                            {% block page_account_profile_password_title %}
                                                <div class=\"card-title\">
                                                    {{ \"account.profilePasswordTitle\"|trans|sw_sanitize }}
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_password_container %}
                                                <div class=\"{{ formRowClass }}\">
                                                    {% block page_account_profile_new_password %}
                                                        <div class=\"col form-group\">
                                                            {% block page_account_profile_new_password_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"newPassword\">
                                                                    {{ \"account.profilePasswordCreateNew\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_input %}
                                                                <input type=\"password\"
                                                                       class=\"form-control{% if formViolations.getViolations('/newPassword') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"newPassword\"
                                                                       placeholder=\"{{ \"account.profilePasswordCreateNew\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"password[newPassword]\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-length=\"{{ config('core.loginRegistration.passwordMinLength') }}\"
                                                                       data-form-validation-length-message=\" {{ \"account.personalPasswordDescription\"|trans({
                                                                           '%minLength%': config('core.loginRegistration.passwordMinLength')
                                                                       })|sw_sanitize }}\"
                                                                       required=\"required\">
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_input_error %}
                                                                {% if formViolations.getViolations('/newPassword') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/newPassword'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}

                                                    {% block page_account_profile_new_password_confirmation %}
                                                        <div class=\"col form-group\">
                                                            {% block page_account_profile_new_password_confirmation_label %}
                                                                <label class=\"form-label\"
                                                                       for=\"passwordConfirmation\">
                                                                    {{ \"account.personalPasswordConfirmationLabel\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                                </label>
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_confirmation_input %}
                                                                <input type=\"password\"
                                                                       class=\"form-control{% if formViolations.getViolations('/newPassword') is not empty %} is-invalid{% endif %}\"
                                                                       autocomplete=\"new-password\"
                                                                       id=\"passwordConfirmation\"
                                                                       placeholder=\"{{ \"account.personalPasswordConfirmationLabel\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                       name=\"password[newPasswordConfirm]\"
                                                                       required=\"required\"
                                                                       data-form-validation-equal=\"newPassword\"
                                                                       data-form-validation-equal-message=\"{{ \"account.personalPasswordConfirmationInvalidMessage\"|trans|striptags }}\">
                                                            {% endblock %}

                                                            {% block page_account_profile_new_password_confirmation_error %}
                                                                {% if formViolations.getViolations('/newPassword') is not empty %}
                                                                    {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                        violationPath: '/newPassword'
                                                                    } %}
                                                                {% endif %}
                                                            {% endblock %}
                                                        </div>
                                                    {% endblock %}
                                                </div>

                                                <p class=\"text-muted\">{{ \"account.profileConfirmPassword\"|trans|sw_sanitize }}</p>
                                            {% endblock %}

                                            {% block page_account_profile_current_password %}
                                                <div class=\"{{ formRowClass }}\">
                                                    <div class=\"col-6 form-group\">
                                                        {% block page_account_profile_current_password_label %}
                                                            <label class=\"form-label\"
                                                                   for=\"password\">
                                                                {{ \"account.profilePasswordCurrent\"|trans|sw_sanitize }}{{ \"general.required\"|trans|sw_sanitize }}
                                                            </label>
                                                        {% endblock %}

                                                        {% block page_account_profile_current_password_input %}
                                                            <input type=\"password\"
                                                                   class=\"form-control{% if formViolations.getViolations('/password') is not empty and passwordFormViolation %} is-invalid{% endif %}\"
                                                                   autocomplete=\"new-password\"
                                                                   id=\"password\"
                                                                   placeholder=\"{{ \"account.profilePasswordCurrent\"|trans|striptags }}{{ \"general.required\"|trans|striptags }}\"
                                                                   name=\"password[password]\"
                                                                   required=\"required\">
                                                        {% endblock %}

                                                        {% block page_account_profile_current_password_input_error %}
                                                            {% if formViolations.getViolations('/password') is not empty and passwordFormViolation %}
                                                                {% sw_include '@Storefront/storefront/utilities/form-violation.html.twig' with {
                                                                    violationPath: '/password'
                                                                } %}
                                                            {% endif %}
                                                        {% endblock %}
                                                    </div>
                                                </div>
                                            {% endblock %}

                                            {% block page_account_profile_password_required %}
                                                <p class=\"account-profile-required-info required-fields\">
                                                    {{ \"general.requiredFields\"|trans|sw_sanitize }}
                                                </p>
                                            {% endblock %}

                                            {% block page_account_profile_password_action_buttons %}
                                                <div class=\"card-actions\">
                                                    {% block page_account_profile_password_action_button_send %}
                                                        <button type=\"submit\"
                                                                class=\"profile-form-submit btn btn-light btn-sm\"
                                                                title=\"{{ \"account.profileSaveChanges\"|trans|striptags }}\">
                                                            {{ \"account.profileSaveChanges\"|trans|sw_sanitize }}
                                                        </button>
                                                    {% endblock %}
                                                </div>
                                            {% endblock %}
                                        </form>
                                    {% endblock %}
                                </div>
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block page_account_profile_delete_account %}
                    {% if config('core.loginRegistration.allowCustomerDeletion') %}
                        <div class=\"account-deleting py-4\">
                            {{ 'account.profileDelete'|trans({
                                '%target%': '#confirmDeleteAccountModal'
                            })|raw }}
                        </div>
                    {% endif %}
                {% endblock %}

                {% block page_account_delete_account_confirm_modal %}
                    {% if config('core.loginRegistration.allowCustomerDeletion') %}
                        <div class=\"modal fade confirm-delete-account-modal\"
                             id=\"confirmDeleteAccountModal\"
                             tabindex=\"1\"
                             role=\"dialog\">
                            <div class=\"modal-dialog modal-dialog-centered\"
                                 role=\"document\">

                                {% block page_account_delete_account_confirm_modal_content %}
                                    <div class=\"modal-content\">

                                        {% block page_account_delete_account_confirm_modal_header %}
                                            <div class=\"modal-header\">

                                                {% block page_account_delete_account_confirm_modal_header_title %}
                                                    <div class=\"modal-title h3\">
                                                        {{ \"account.profileDeleteModalTitle\"|trans|sw_sanitize }}
                                                    </div>
                                                {% endblock %}

                                                {% block page_account_delete_account_confirm_modal_header_close_button %}
                                                    <button
                                                        type=\"button\"
                                                        class=\"{{ modalCloseBtnClass }} close\"
                                                        {{ dataBsDismissAttr }}=\"modal\"
                                                        aria-label=\"Close\">
                                                        {# @deprecated tag:v6.5.0 - Bootstrap v5 creates \"x\" symbol automatically via SVG background #}
                                                        {% if not feature('v6.5.0.0') %}
                                                            <span aria-hidden=\"true\">
                                                                {% sw_icon 'x' style { 'size': 'sm' } %}
                                                            </span>
                                                        {% endif %}
                                                    </button>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block page_account_delete_account_confirm_modal_body %}
                                            <div class=\"modal-body\">

                                                {% block page_account_delete_account_confirm_modal_form %}
                                                    <form method=\"post\"
                                                          data-form-csrf-handler=\"true\"
                                                          action=\"{{ path('frontend.account.profile.delete') }}\"
                                                          data-form-submit-loader=\"true\">

                                                        {# @deprecated tag:v6.5.0 - Block page_account_delete_account_confirm_form_csrf will be removed. #}
                                                        {% block page_account_delete_account_confirm_form_csrf %}
                                                            {{ sw_csrf('frontend.account.profile.delete') }}
                                                        {% endblock %}

                                                        {% block page_account_delete_account_confirm_alert %}
                                                            {{ \"account.profileDeleteAlert\"|trans|sw_sanitize }}
                                                        {% endblock %}

                                                        {% block page_account_delete_account_confirm_text %}
                                                            <h6 class=\"py-2\">{{ \"account.profileDeleteConfirm\"|trans|sw_sanitize }}</h6>
                                                        {% endblock %}

                                                        {% block page_account_delete_account_confirm_button %}
                                                            <div class=\"text-right\">
                                                                <button class=\"btn btn-outline-danger\" type=\"submit\">
                                                                    {{ \"account.profileDeleteButton\"|trans|sw_sanitize }}
                                                                </button>
                                                            </div>
                                                        {% endblock %}
                                                    </form>
                                                {% endblock %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        </div>
                    {% endif %}
                {% endblock %}
            {% endblock %}
        </div>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/profile/index.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/profile/index.html.twig");
    }
}
