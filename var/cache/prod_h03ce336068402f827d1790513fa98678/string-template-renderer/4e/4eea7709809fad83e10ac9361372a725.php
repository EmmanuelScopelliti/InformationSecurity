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

/* 4ea840024358154049aaaafe5b7c48ec */
class __TwigTemplate_eac4e6c5f72e2a39c8a37906e4eb84a9 extends Template
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
        echo "Your sign-up with ";
        echo sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, (isset($context["salesChannel"]) || array_key_exists("salesChannel", $context) ? $context["salesChannel"] : (function () { throw new RuntimeError('Variable "salesChannel" does not exist.', 1, $this->source); })()), "translated", [], "any", false, false, false, 1), "name", [], "any", false, false, false, 1);
    }

    public function getTemplateName()
    {
        return "4ea840024358154049aaaafe5b7c48ec";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "4ea840024358154049aaaafe5b7c48ec", "");
    }
}
