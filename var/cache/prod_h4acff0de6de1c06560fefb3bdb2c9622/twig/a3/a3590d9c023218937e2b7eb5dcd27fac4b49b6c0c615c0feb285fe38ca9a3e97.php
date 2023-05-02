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

/* @Storefront/storefront/page/content/index.html.twig */
class __TwigTemplate_c27a0d6f6e44de80dc331f0dd55d7b6b691417478337c300e313091929358f2e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'base_main_inner' => [$this, 'block_base_main_inner'],
            'page_content' => [$this, 'block_page_content'],
            'cms_breadcrumb' => [$this, 'block_cms_breadcrumb'],
            'cms_content' => [$this, 'block_cms_content'],
            'page_content_blocks' => [$this, 'block_page_content_blocks'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@Storefront/storefront/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Storefront/storefront/base.html.twig", "@Storefront/storefront/page/content/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_base_main_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"container-main\">
        ";
        // line 6
        $this->displayBlock('page_content', $context, $blocks);
        // line 33
        echo "    </div>
";
    }

    // line 6
    public function block_page_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $this->displayBlock('cms_breadcrumb', $context, $blocks);
        // line 15
        echo "
            ";
        // line 16
        $this->displayBlock('cms_content', $context, $blocks);
        // line 32
        echo "        ";
    }

    // line 7
    public function block_cms_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "                <div class=\"breadcrumb cms-breadcrumb container\">
                    ";
        // line 9
        $this->loadTemplate("@Storefront/storefront/layout/breadcrumb.html.twig", "@Storefront/storefront/page/content/index.html.twig", 9)->display(twig_to_array(["context" =>         // line 10
($context["context"] ?? null), "category" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source,         // line 11
($context["page"] ?? null), "header", [], "any", false, false, false, 11), "navigation", [], "any", false, false, false, 11), "active", [], "any", false, false, false, 11)]));
        // line 13
        echo "                </div>
            ";
    }

    // line 16
    public function block_cms_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                ";
        // line 18
        echo "                ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 19
            echo "                    ";
            $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 19), "cmsPage", [], "any", false, false, false, 19), "cssClass", [], "any", false, false, false, 19))));
            // line 20
            echo "                    ";
            $context["cmsPage"] = ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 20), "cmsPage", [], "any", false, false, false, 20)) : (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 20)));
            // line 21
            echo "                ";
        } else {
            // line 22
            echo "                    ";
            $context["cmsPageClasses"] = twig_trim_filter(("cms-page " . twig_striptags(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 22), "cssClass", [], "any", false, false, false, 22))));
            // line 23
            echo "                    ";
            $context["cmsPage"] = sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "cmsPage", [], "any", false, false, false, 23);
            // line 24
            echo "                ";
        }
        // line 25
        echo "                ";
        $context["landingPage"] = ((sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 25)) ? (sw_get_attribute($this->env, $this->source, ($context["page"] ?? null), "landingPage", [], "any", false, false, false, 25)) : ([]));
        // line 26
        echo "                <div class=\"";
        echo sw_escape_filter($this->env, ($context["cmsPageClasses"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 27
        $this->displayBlock('page_content_blocks', $context, $blocks);
        // line 30
        echo "                </div>
            ";
    }

    // line 27
    public function block_page_content_blocks($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "                        ";
        $this->loadTemplate("@Storefront/storefront/page/content/detail.html.twig", "@Storefront/storefront/page/content/index.html.twig", 28)->display(twig_array_merge($context, ["cmsPage" => ($context["cmsPage"] ?? null), "landingPage" => ($context["landingPage"] ?? null)]));
        // line 29
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/page/content/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 29,  142 => 28,  138 => 27,  133 => 30,  131 => 27,  126 => 26,  123 => 25,  120 => 24,  117 => 23,  114 => 22,  111 => 21,  108 => 20,  105 => 19,  102 => 18,  100 => 17,  96 => 16,  91 => 13,  89 => 11,  88 => 10,  87 => 9,  84 => 8,  80 => 7,  76 => 32,  74 => 16,  71 => 15,  68 => 7,  64 => 6,  59 => 33,  57 => 6,  54 => 5,  50 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/page/content/index.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/page/content/index.html.twig");
    }
}
