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

/* 647fa2d564ddeccd8e6ad9dac1e12dc1 */
class __TwigTemplate_9ad6133d86b1db78f90ae12e975393aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), "salutation", [], "any", false, false, false, 1), "translated", [], "any", false, false, false, 1), "letterName", [], "any", false, false, false, 1);
        echo " ";
        echo sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), "firstName", [], "any", false, false, false, 1);
        echo " ";
        echo sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 1, $this->source); })()), "lastName", [], "any", false, false, false, 1);
        echo ",

                thank you for your signing up with our Shop.
                You will gain access via the email address ";
        // line 4
        echo sw_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 4, $this->source); })()), "email", [], "any", false, false, false, 4);
        echo " and the password you have chosen.
                You can change your password anytime.
        ";
    }

    public function getTemplateName()
    {
        return "647fa2d564ddeccd8e6ad9dac1e12dc1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "647fa2d564ddeccd8e6ad9dac1e12dc1", "");
    }
}
