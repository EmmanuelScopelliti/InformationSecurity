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

/* @Storefront/storefront/component/feature.html.twig */
class __TwigTemplate_bd6b18392909f4fd3d5c664ba4d23af2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_head_feature' => [$this, 'block_component_head_feature'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_head_feature', $context, $blocks);
    }

    public function block_component_head_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <script>
        window.features = ";
        // line 3
        echo $this->env->getFilter('json_encode')->getCallable()($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->getAll());
        echo ";
    </script>
";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/feature.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/feature.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/feature.html.twig");
    }
}
