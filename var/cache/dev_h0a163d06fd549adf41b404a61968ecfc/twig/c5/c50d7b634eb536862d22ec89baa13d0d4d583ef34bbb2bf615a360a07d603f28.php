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

/* @Storefront/storefront/page/account/newsletter.html.twig */
class __TwigTemplate_cf05b578f0e6ed0789611566d18babc0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'page_account_overview_newsletter_content_inner' => [$this, 'block_page_account_overview_newsletter_content_inner'],
            'page_account_overview_newsletter_content_success' => [$this, 'block_page_account_overview_newsletter_content_success'],
            'page_account_overview_newsletter_content_form' => [$this, 'block_page_account_overview_newsletter_content_form'],
            'page_account_overview_newsletter_content_form_csrf' => [$this, 'block_page_account_overview_newsletter_content_form_csrf'],
            'page_account_overview_newsletter_content_form_check_control' => [$this, 'block_page_account_overview_newsletter_content_form_check_control'],
            'page_account_overview_newsletter_content_form_input' => [$this, 'block_page_account_overview_newsletter_content_form_input'],
            'page_account_overview_newsletter_content_form_label' => [$this, 'block_page_account_overview_newsletter_content_form_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/newsletter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/page/account/newsletter.html.twig"));

        // line 1
        $this->displayBlock('page_account_overview_newsletter_content_inner', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_page_account_overview_newsletter_content_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_inner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_inner"));

        // line 2
        echo "
    ";
        // line 3
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001")) {
            // line 4
            echo "        ";
            // line 5
            echo "        ";
            $context["success"] = sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "success", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["messages"] = sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "messages", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["customer"] = sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "customer", [], "any", false, false, false, 7);
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('page_account_overview_newsletter_content_success', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $context["formAutoSubmitOptions"] = ["useAjax" => true, "ajaxContainerSelector" => ".js-newsletter-wrapper"];
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('page_account_overview_newsletter_content_form', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_page_account_overview_newsletter_content_success($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_success"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_success"));

        // line 11
        echo "        ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001")) {
            // line 12
            echo "            ";
            if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "messages", [], "any", false, false, false, 12)) > 0)) {
                // line 13
                echo "                <div class=\"newsletter-alerts\">
                    ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "messages", [], "any", false, false, false, 14));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 15
                    echo "                        ";
                    $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/newsletter.html.twig", 15)->display(twig_array_merge($context, ["type" => sw_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 15), "content" => sw_get_attribute($this->env, $this->source, $context["message"], "text", [], "any", false, false, false, 15)]));
                    // line 16
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "                </div>
            ";
            }
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "            ";
            if ( !(null === ($context["success"] ?? null))) {
                // line 21
                echo "                <div class=\"newsletter-alerts\">
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "                        ";
                    $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/page/account/newsletter.html.twig", 23)->display(twig_array_merge($context, ["type" => sw_get_attribute($this->env, $this->source, $context["message"], "type", [], "any", false, false, false, 23), "content" => sw_get_attribute($this->env, $this->source, $context["message"], "text", [], "any", false, false, false, 23)]));
                    // line 24
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                </div>
            ";
            }
            // line 27
            echo "        ";
        }
        // line 28
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 36
    public function block_page_account_overview_newsletter_content_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form"));

        // line 37
        echo "        <form name=\"newsletterRegister\"
              method=\"post\"
              action=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.account.newsletter");
        echo "\"
              data-form-auto-submit=\"true\"
              data-form-auto-submit-options='";
        // line 41
        echo sw_escape_filter($this->env, $this->env->getFilter('json_encode')->getCallable()(($context["formAutoSubmitOptions"] ?? null)), "html", null, true);
        echo "'>

            ";
        // line 44
        echo "            ";
        $this->displayBlock('page_account_overview_newsletter_content_form_csrf', $context, $blocks);
        // line 47
        echo "
            ";
        // line 48
        $this->displayBlock('page_account_overview_newsletter_content_form_check_control', $context, $blocks);
        // line 80
        echo "        </form>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_page_account_overview_newsletter_content_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_csrf"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_csrf"));

        // line 45
        echo "                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.account.newsletter");
        echo "
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_page_account_overview_newsletter_content_form_check_control($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_check_control"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_check_control"));

        // line 49
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckboxWrapperClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 50
        $this->displayBlock('page_account_overview_newsletter_content_form_input', $context, $blocks);
        // line 71
        echo "
                    ";
        // line 72
        $this->displayBlock('page_account_overview_newsletter_content_form_label', $context, $blocks);
        // line 78
        echo "                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 50
    public function block_page_account_overview_newsletter_content_form_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_input"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_input"));

        // line 51
        echo "                        ";
        $context["subscribe"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::OPTION_SUBSCRIBE");
        // line 52
        echo "                        ";
        $context["direct"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::OPTION_DIRECT");
        // line 53
        echo "                        ";
        $context["statusDirect"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::STATUS_DIRECT");
        // line 54
        echo "                        ";
        $context["statusOptIn"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::STATUS_OPT_IN");
        // line 55
        echo "                        ";
        $context["statusNotSet"] = twig_constant("Shopware\\Core\\Content\\Newsletter\\SalesChannel\\NewsletterSubscribeRoute::STATUS_NOT_SET");
        // line 56
        echo "                        ";
        $context["status"] = false;
        // line 57
        echo "                        ";
        if ((((sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterStatus", [], "any", false, false, false, 57) == ($context["statusDirect"] ?? null)) || (sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterStatus", [], "any", false, false, false, 57) == ($context["statusOptIn"] ?? null))) || (sw_get_attribute($this->env, $this->source, ($context["newsletterAccountPagelet"] ?? null), "newsletterStatus", [], "any", false, false, false, 57) == ($context["statusNotSet"] ?? null)))) {
            // line 58
            echo "                            ";
            $context["status"] = true;
            // line 59
            echo "                        ";
        }
        // line 60
        echo "                        ";
        if (($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_14001") == false)) {
            // line 61
            echo "                            ";
            $context["status"] = sw_get_attribute($this->env, $this->source, ($context["customer"] ?? null), "newsletter", [], "any", false, false, false, 61);
            // line 62
            echo "                        ";
        }
        // line 63
        echo "                        <input type=\"checkbox\"
                               class=\"";
        // line 64
        echo sw_escape_filter($this->env, ($context["formCheckInputClass"] ?? null), "html", null, true);
        echo "\"
                               id=\"newsletterRegister\"
                               name=\"option\"
                               autocomplete=\"off\"
                               value=\"subscribe\"
                               ";
        // line 69
        if (($context["status"] ?? null)) {
            echo "checked=\"checked\"";
        }
        echo ">
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 72
    public function block_page_account_overview_newsletter_content_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_account_overview_newsletter_content_form_label"));

        // line 73
        echo "                        <label class=\"";
        echo sw_escape_filter($this->env, ($context["formCheckLabelClass"] ?? null), "html", null, true);
        echo " custom-control-label\"
                               for=\"newsletterRegister\">
                            ";
        // line 75
        echo $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("account.newsletterSettings", ["%shopname%" => $this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.basicInformation.shopName")]));
        echo "
                        </label>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/account/newsletter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  415 => 75,  409 => 73,  399 => 72,  385 => 69,  377 => 64,  374 => 63,  371 => 62,  368 => 61,  365 => 60,  362 => 59,  359 => 58,  356 => 57,  353 => 56,  350 => 55,  347 => 54,  344 => 53,  341 => 52,  338 => 51,  328 => 50,  317 => 78,  315 => 72,  312 => 71,  310 => 50,  305 => 49,  295 => 48,  282 => 45,  272 => 44,  261 => 80,  259 => 48,  256 => 47,  253 => 44,  248 => 41,  243 => 39,  239 => 37,  229 => 36,  218 => 28,  215 => 27,  211 => 25,  197 => 24,  194 => 23,  177 => 22,  174 => 21,  171 => 20,  168 => 19,  164 => 17,  150 => 16,  147 => 15,  130 => 14,  127 => 13,  124 => 12,  121 => 11,  111 => 10,  101 => 36,  98 => 35,  96 => 31,  93 => 30,  91 => 10,  88 => 9,  85 => 8,  82 => 7,  79 => 6,  76 => 5,  74 => 4,  72 => 3,  69 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block page_account_overview_newsletter_content_inner %}

    {% if feature('FEATURE_NEXT_14001') %}
        {# @deprecated tag:v6.5.0 - variables success, messages and customer will be removed and found as properties of newsletterAccountPagelet #}
        {% set success = newsletterAccountPagelet.success %}
        {% set messages = newsletterAccountPagelet.messages %}
        {% set customer = newsletterAccountPagelet.customer %}
    {% endif %}

    {% block page_account_overview_newsletter_content_success %}
        {% if feature('FEATURE_NEXT_14001') %}
            {% if newsletterAccountPagelet.messages|length > 0 %}
                <div class=\"newsletter-alerts\">
                    {% for message in newsletterAccountPagelet.messages %}
                        {% sw_include \"@Storefront/storefront/utilities/alert.html.twig\" with { 'type': message.type, 'content': message.text} %}
                    {% endfor %}
                </div>
            {% endif %}
        {% else %}
            {% if success is not null %}
                <div class=\"newsletter-alerts\">
                    {% for message in messages %}
                        {% sw_include \"@Storefront/storefront/utilities/alert.html.twig\" with { 'type': message.type, 'content': message.text} %}
                    {% endfor %}
                </div>
            {% endif %}
        {% endif %}

    {% endblock %}

    {% set formAutoSubmitOptions = {
        useAjax: true,
        ajaxContainerSelector: '.js-newsletter-wrapper'
    } %}

    {% block page_account_overview_newsletter_content_form %}
        <form name=\"newsletterRegister\"
              method=\"post\"
              action=\"{{ path(\"frontend.account.newsletter\") }}\"
              data-form-auto-submit=\"true\"
              data-form-auto-submit-options='{{ formAutoSubmitOptions|json_encode }}'>

            {# @deprecated tag:v6.5.0 - Block page_account_overview_newsletter_content_form_csrf will be removed. #}
            {% block page_account_overview_newsletter_content_form_csrf %}
                {{ sw_csrf('frontend.account.newsletter') }}
            {% endblock %}

            {% block page_account_overview_newsletter_content_form_check_control %}
                <div class=\"{{ formCheckboxWrapperClass }}\">
                    {% block page_account_overview_newsletter_content_form_input %}
                        {% set subscribe = constant('Shopware\\\\Core\\\\Content\\\\Newsletter\\\\SalesChannel\\\\NewsletterSubscribeRoute::OPTION_SUBSCRIBE') %}
                        {% set direct = constant('Shopware\\\\Core\\\\Content\\\\Newsletter\\\\SalesChannel\\\\NewsletterSubscribeRoute::OPTION_DIRECT') %}
                        {% set statusDirect = constant('Shopware\\\\Core\\\\Content\\\\Newsletter\\\\SalesChannel\\\\NewsletterSubscribeRoute::STATUS_DIRECT') %}
                        {% set statusOptIn = constant('Shopware\\\\Core\\\\Content\\\\Newsletter\\\\SalesChannel\\\\NewsletterSubscribeRoute::STATUS_OPT_IN') %}
                        {% set statusNotSet = constant('Shopware\\\\Core\\\\Content\\\\Newsletter\\\\SalesChannel\\\\NewsletterSubscribeRoute::STATUS_NOT_SET') %}
                        {% set status = false %}
                        {% if newsletterAccountPagelet.newsletterStatus == statusDirect or newsletterAccountPagelet.newsletterStatus == statusOptIn or newsletterAccountPagelet.newsletterStatus == statusNotSet %}
                            {% set status = true %}
                        {% endif %}
                        {% if feature('FEATURE_NEXT_14001') == false %}
                            {% set status = customer.newsletter %}
                        {% endif %}
                        <input type=\"checkbox\"
                               class=\"{{ formCheckInputClass }}\"
                               id=\"newsletterRegister\"
                               name=\"option\"
                               autocomplete=\"off\"
                               value=\"subscribe\"
                               {% if status %}checked=\"checked\"{% endif %}>
                    {% endblock %}

                    {% block page_account_overview_newsletter_content_form_label %}
                        <label class=\"{{ formCheckLabelClass }} custom-control-label\"
                               for=\"newsletterRegister\">
                            {{ \"account.newsletterSettings\"|trans({'%shopname%': config('core.basicInformation.shopName')})|sw_sanitize }}
                        </label>
                    {% endblock %}
                </div>
            {% endblock %}
        </form>
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/page/account/newsletter.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/account/newsletter.html.twig");
    }
}
