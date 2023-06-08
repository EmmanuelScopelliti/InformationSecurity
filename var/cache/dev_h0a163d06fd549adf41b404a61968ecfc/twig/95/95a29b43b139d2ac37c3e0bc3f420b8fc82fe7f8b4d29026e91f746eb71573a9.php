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

/* @Storefront/storefront/component/address/address.html.twig */
class __TwigTemplate_39ad2cdf5066d7d7b43ca5546a3688c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_address' => [$this, 'block_component_address'],
            'component_address_company' => [$this, 'block_component_address_company'],
            'component_address_company_name' => [$this, 'block_component_address_company_name'],
            'component_address_salutation' => [$this, 'block_component_address_salutation'],
            'component_address_title' => [$this, 'block_component_address_title'],
            'component_address_name' => [$this, 'block_component_address_name'],
            'component_address_street' => [$this, 'block_component_address_street'],
            'component_address_additional_address_line_1' => [$this, 'block_component_address_additional_address_line_1'],
            'component_address_additional_address_line_2' => [$this, 'block_component_address_additional_address_line_2'],
            'component_address_phone_number' => [$this, 'block_component_address_phone_number'],
            'component_address_zipcode_city' => [$this, 'block_component_address_zipcode_city'],
            'component_address_state' => [$this, 'block_component_address_state'],
            'component_address_country' => [$this, 'block_component_address_country'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/address/address.html.twig"));

        // line 1
        $this->displayBlock('component_address', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_component_address($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address"));

        // line 2
        echo "    <div class=\"address\">
        ";
        // line 3
        if ((($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("FEATURE_NEXT_15707") && ($context["showShippingWarning"] ?? null)) &&  !sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 3), "shippingAvailable", [], "any", false, false, false, 3))) {
            // line 4
            echo "            ";
            $this->loadTemplate("@Storefront/storefront/utilities/alert.html.twig", "@Storefront/storefront/component/address/address.html.twig", 4)->display(twig_array_merge($context, ["type" => "warning", "content" => $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("address.countryNoShippingAlert"))]));
            // line 8
            echo "        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 11
            echo "            ";
            $this->loadTemplate("@Framework/snippets/render.html.twig", "@Storefront/storefront/component/address/address.html.twig", 11)->display(twig_array_merge($context, ["format" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,             // line 12
($context["address"] ?? null), "country", [], "any", false, false, false, 12), "translated", [], "any", false, false, false, 12), "addressFormat", [], "any", false, false, false, 12), "address" =>             // line 13
($context["address"] ?? null)]));
            // line 14
            echo "<br/>
        ";
        } else {
            // line 16
            echo "            ";
            if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 16) || sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "vatId", [], "any", false, false, false, 16))) {
                // line 17
                echo "                ";
                $this->displayBlock('component_address_company', $context, $blocks);
                // line 27
                echo "            ";
            }
            // line 28
            echo "
            <p>
                ";
            // line 30
            if ((sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 30) && (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 30), "salutationKey", [], "any", false, false, false, 30) != "not_specified"))) {
                // line 31
                echo "                    ";
                $this->displayBlock('component_address_salutation', $context, $blocks);
                // line 34
                echo "                ";
            }
            // line 35
            echo "
                ";
            // line 36
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 36)) {
                // line 37
                echo "                    ";
                $this->displayBlock('component_address_title', $context, $blocks);
                // line 40
                echo "                ";
            }
            // line 41
            echo "
                ";
            // line 42
            $this->displayBlock('component_address_name', $context, $blocks);
            // line 45
            echo "
                ";
            // line 46
            $this->displayBlock('component_address_street', $context, $blocks);
            // line 49
            echo "
                ";
            // line 50
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 50)) {
                // line 51
                echo "                    ";
                $this->displayBlock('component_address_additional_address_line_1', $context, $blocks);
                // line 54
                echo "                ";
            }
            // line 55
            echo "
                ";
            // line 56
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 56)) {
                // line 57
                echo "                    ";
                $this->displayBlock('component_address_additional_address_line_2', $context, $blocks);
                // line 60
                echo "                ";
            }
            // line 61
            echo "
                ";
            // line 62
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 62)) {
                // line 63
                echo "                    ";
                $this->displayBlock('component_address_phone_number', $context, $blocks);
                // line 66
                echo "                ";
            }
            // line 67
            echo "
                ";
            // line 68
            $this->displayBlock('component_address_zipcode_city', $context, $blocks);
            // line 75
            echo "
                ";
            // line 76
            if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 76)) {
                // line 77
                echo "                    ";
                $this->displayBlock('component_address_state', $context, $blocks);
                // line 80
                echo "                ";
            }
            // line 81
            echo "
                ";
            // line 82
            $this->displayBlock('component_address_country', $context, $blocks);
            // line 85
            echo "            </p>
        ";
        }
        // line 87
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_component_address_company($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company"));

        // line 18
        echo "                    <p>
                        ";
        // line 19
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 19)) {
            // line 20
            echo "                            ";
            $this->displayBlock('component_address_company_name', $context, $blocks);
            // line 23
            echo "                            <br/>
                        ";
        }
        // line 25
        echo "                    </p>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_component_address_company_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_company_name"));

        // line 21
        echo "                                ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "company", [], "any", false, false, false, 21), "html", null, true);
        if (sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 21)) {
            echo " - ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "department", [], "any", false, false, false, 21), "html", null, true);
        }
        // line 22
        echo "                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_component_address_salutation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_salutation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_salutation"));

        // line 32
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "salutation", [], "any", false, false, false, 32), "translated", [], "any", false, false, false, 32), "displayName", [], "any", false, false, false, 32), "html", null, true);
        echo "
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_component_address_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_title"));

        // line 38
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "title", [], "any", false, false, false, 38), "html", null, true);
        echo "<br/>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_component_address_name($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_name"));

        // line 43
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstName", [], "any", false, false, false, 43), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastName", [], "any", false, false, false, 43), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_component_address_street($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_street"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_street"));

        // line 47
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "street", [], "any", false, false, false, 47), "html", null, true);
        echo "<br/>
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 51
    public function block_component_address_additional_address_line_1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_1"));

        // line 52
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine1", [], "any", false, false, false, 52), "html", null, true);
        echo "<br/>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 57
    public function block_component_address_additional_address_line_2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_2"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_additional_address_line_2"));

        // line 58
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "additionalAddressLine2", [], "any", false, false, false, 58), "html", null, true);
        echo "<br/>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 63
    public function block_component_address_phone_number($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_phone_number"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_phone_number"));

        // line 64
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "phoneNumber", [], "any", false, false, false, 64), "html", null, true);
        echo "<br/>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_component_address_zipcode_city($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_zipcode_city"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_zipcode_city"));

        // line 69
        echo "                    ";
        if ($this->extensions['Shopware\Storefront\Framework\Twig\Extension\ConfigExtension']->config($context, "core.address.showZipcodeInFrontOfCity")) {
            // line 70
            echo "                        ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 70), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 70), "html", null, true);
            echo "<br/>
                    ";
        } else {
            // line 72
            echo "                        ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "city", [], "any", false, false, false, 72), "html", null, true);
            echo " ";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "zipcode", [], "any", false, false, false, 72), "html", null, true);
            echo "<br/>
                    ";
        }
        // line 74
        echo "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_component_address_state($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_state"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_state"));

        // line 78
        echo "                        ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "countryState", [], "any", false, false, false, 78), "translated", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78), "html", null, true);
        echo "<br/>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 82
    public function block_component_address_country($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_country"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_address_country"));

        // line 83
        echo "                    ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["address"] ?? null), "country", [], "any", false, false, false, 83), "translated", [], "any", false, false, false, 83), "name", [], "any", false, false, false, 83), "html", null, true);
        echo "
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/address/address.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  506 => 83,  496 => 82,  483 => 78,  473 => 77,  463 => 74,  455 => 72,  447 => 70,  444 => 69,  434 => 68,  421 => 64,  411 => 63,  398 => 58,  388 => 57,  375 => 52,  365 => 51,  352 => 47,  342 => 46,  327 => 43,  317 => 42,  304 => 38,  294 => 37,  281 => 32,  271 => 31,  261 => 22,  254 => 21,  244 => 20,  233 => 25,  229 => 23,  226 => 20,  224 => 19,  221 => 18,  211 => 17,  200 => 87,  196 => 85,  194 => 82,  191 => 81,  188 => 80,  185 => 77,  183 => 76,  180 => 75,  178 => 68,  175 => 67,  172 => 66,  169 => 63,  167 => 62,  164 => 61,  161 => 60,  158 => 57,  156 => 56,  153 => 55,  150 => 54,  147 => 51,  145 => 50,  142 => 49,  140 => 46,  137 => 45,  135 => 42,  132 => 41,  129 => 40,  126 => 37,  124 => 36,  121 => 35,  118 => 34,  115 => 31,  113 => 30,  109 => 28,  106 => 27,  103 => 17,  100 => 16,  96 => 14,  94 => 13,  93 => 12,  91 => 11,  89 => 10,  86 => 9,  83 => 8,  80 => 4,  78 => 3,  75 => 2,  56 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_address %}
    <div class=\"address\">
        {% if feature('FEATURE_NEXT_15707') and showShippingWarning and not address.country.shippingAvailable %}
            {% sw_include '@Storefront/storefront/utilities/alert.html.twig' with {
                type: \"warning\",
                content: \"address.countryNoShippingAlert\"|trans|sw_sanitize
            } %}
        {% endif %}

        {% if feature('v6.5.0.0') %}
            {% sw_include '@Framework/snippets/render.html.twig' with {
                format: address.country.translated.addressFormat,
                address: address
            } %}<br/>
        {% else %}
            {% if address.company or address.vatId %}
                {% block component_address_company %}
                    <p>
                        {% if address.company %}
                            {% block component_address_company_name %}
                                {{ address.company }}{% if address.department %} - {{ address.department }}{% endif %}
                            {% endblock %}
                            <br/>
                        {% endif %}
                    </p>
                {% endblock %}
            {% endif %}

            <p>
                {% if address.salutation and address.salutation.salutationKey != 'not_specified' %}
                    {% block component_address_salutation %}
                        {{ address.salutation.translated.displayName }}
                    {% endblock %}
                {% endif %}

                {% if address.title %}
                    {% block component_address_title %}
                        {{ address.title }}<br/>
                    {% endblock %}
                {% endif %}

                {% block component_address_name %}
                    {{ address.firstName }} {{ address.lastName }}<br/>
                {% endblock %}

                {% block component_address_street %}
                    {{ address.street }}<br/>
                {% endblock %}

                {% if address.additionalAddressLine1 %}
                    {% block component_address_additional_address_line_1 %}
                        {{ address.additionalAddressLine1 }}<br/>
                    {% endblock %}
                {% endif %}

                {% if address.additionalAddressLine2 %}
                    {% block component_address_additional_address_line_2 %}
                        {{ address.additionalAddressLine2 }}<br/>
                    {% endblock %}
                {% endif %}

                {% if address.phoneNumber %}
                    {% block component_address_phone_number %}
                        {{ address.phoneNumber }}<br/>
                    {% endblock %}
                {% endif %}

                {% block component_address_zipcode_city %}
                    {% if config('core.address.showZipcodeInFrontOfCity') %}
                        {{ address.zipcode }} {{ address.city }}<br/>
                    {% else %}
                        {{ address.city }} {{ address.zipcode }}<br/>
                    {% endif %}
                {% endblock %}

                {% if address.countryState %}
                    {% block component_address_state %}
                        {{ address.countryState.translated.name }}<br/>
                    {% endblock %}
                {% endif %}

                {% block component_address_country %}
                    {{ address.country.translated.name }}
                {% endblock %}
            </p>
        {% endif %}
    </div>
{% endblock %}
", "@Storefront/storefront/component/address/address.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/address/address.html.twig");
    }
}
