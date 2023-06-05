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

/* @Storefront/storefront/section/cms-section-block-container.html.twig */
class __TwigTemplate_681c357b3dedcfb07e5a2b4b73e48fc6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'section_content_block' => [$this, 'block_section_content_block'],
            'section_content_block_background_image' => [$this, 'block_section_content_block_background_image'],
            'section_content_block_container' => [$this, 'block_section_content_block_container'],
            'section_content_block_row' => [$this, 'block_section_content_block_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('section_content_block', $context, $blocks);
    }

    public function block_section_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
    ";
        // line 3
        $context["top"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginTop", [], "any", false, false, false, 3)) : (0));
        // line 4
        echo "    ";
        $context["right"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginRight", [], "any", false, false, false, 4)) : (0));
        // line 5
        echo "    ";
        $context["bottom"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginBottom", [], "any", false, false, false, 5)) : (0));
        // line 6
        echo "    ";
        $context["left"] = ((sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) ? (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "marginLeft", [], "any", false, false, false, 6)) : (0));
        // line 7
        echo "
    ";
        // line 8
        if ((((($context["top"] ?? null) || ($context["right"] ?? null)) || ($context["bottom"] ?? null)) || ($context["left"] ?? null))) {
            // line 9
            echo "        ";
            $context["padding"] = ((((((($context["top"] ?? null) . " ") . ($context["right"] ?? null)) . " ") . ($context["bottom"] ?? null)) . " ") . ($context["left"] ?? null));
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        $context["blockBgColor"] = sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundColor", [], "any", false, false, false, 12);
        // line 13
        echo "
    ";
        // line 14
        $context["blockClasses"] = [0 => sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "cssClass", [], "any", false, false, false, 14), 1 => ("pos-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "position", [], "any", false, false, false, 14)), 2 => ("cms-block-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 14))];
        // line 15
        echo "
    ";
        // line 16
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 16)) {
            // line 17
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-image"], ($context["blockClasses"] ?? null));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (($context["blockBgColor"] ?? null)) {
            // line 21
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "bg-color"], ($context["blockClasses"] ?? null));
            // line 22
            echo "    ";
        }
        // line 23
        echo "
    ";
        // line 24
        $context["columns"] = 3;
        // line 25
        echo "    ";
        $context["isInSidebar"] = (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "sectionPosition", [], "any", false, false, false, 25) == "sidebar");
        // line 26
        echo "    ";
        $context["sidebarClasses"] = "";
        // line 27
        echo "
    ";
        // line 28
        if ((($context["isInSidebar"] ?? null) == true)) {
            // line 29
            echo "        ";
            $context["sidebarClasses"] = "has--sidebar";
            // line 30
            echo "    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if ((null === sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "visibility", [], "any", false, false, false, 32))) {
            // line 33
            echo "        ";
            $context["visibility"] = ["mobile" => true, "tablet" => true, "desktop" => true];
            // line 38
            echo "    ";
        } else {
            // line 39
            echo "        ";
            $context["visibility"] = sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "visibility", [], "any", false, false, false, 39);
            // line 40
            echo "    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "mobile", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "hidden-mobile"], ($context["blockClasses"] ?? null));
            // line 44
            echo "    ";
        }
        // line 45
        echo "    ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "tablet", [], "any", false, false, false, 45)) {
            // line 46
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "hidden-tablet"], ($context["blockClasses"] ?? null));
            // line 47
            echo "    ";
        }
        // line 48
        echo "    ";
        if ( !sw_get_attribute($this->env, $this->source, ($context["visibility"] ?? null), "desktop", [], "any", false, false, false, 48)) {
            // line 49
            echo "        ";
            $context["blockClasses"] = twig_array_merge([0 => "hidden-desktop"], ($context["blockClasses"] ?? null));
            // line 50
            echo "    ";
        }
        // line 51
        echo "
    <div class=\"cms-block ";
        // line 52
        echo sw_escape_filter($this->env, twig_join_filter(($context["blockClasses"] ?? null), " "), "html", null, true);
        echo "\"
         style=\"";
        // line 53
        if (($context["blockBgColor"] ?? null)) {
            echo " background-color: ";
            echo sw_escape_filter($this->env, ($context["blockBgColor"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">
        ";
        // line 54
        $this->displayBlock('section_content_block_background_image', $context, $blocks);
        // line 64
        echo "
        ";
        // line 65
        $this->displayBlock('section_content_block_container', $context, $blocks);
        // line 76
        echo "    </div>
";
    }

    // line 54
    public function block_section_content_block_background_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 55
        echo "            ";
        if (sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 55)) {
            // line 56
            echo "                ";
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/thumbnail.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 56);
            })())->display(twig_array_merge($context, ["media" => sw_get_attribute($this->env, $this->source,             // line 57
($context["block"] ?? null), "backgroundMedia", [], "any", false, false, false, 57), "attributes" => ["class" => ("cms-block-background media-mode--" . sw_get_attribute($this->env, $this->source,             // line 59
($context["block"] ?? null), "backgroundMediaMode", [], "any", false, false, false, 59))], "name" => "cms-block-background"]));
            // line 62
            echo "            ";
        }
        // line 63
        echo "        ";
    }

    // line 65
    public function block_section_content_block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "            <div class=\"cms-block-container\"
                 style=\"";
        // line 67
        if (($context["padding"] ?? null)) {
            echo "padding: ";
            echo sw_escape_filter($this->env, ($context["padding"] ?? null), "html", null, true);
            echo ";";
        }
        echo "\">

                ";
        // line 69
        $this->displayBlock('section_content_block_row', $context, $blocks);
        // line 74
        echo "            </div>
        ";
    }

    // line 69
    public function block_section_content_block_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 70
        echo "                    <div class=\"cms-block-container-row row cms-row ";
        echo sw_escape_filter($this->env, ($context["sidebarClasses"] ?? null), "html", null, true);
        echo "\">
                        ";
        // line 71
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/block/cms-block-" . sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 71)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/section/cms-section-block-container.html.twig", 71);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 72
        echo "                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/section/cms-section-block-container.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 72,  257 => 71,  252 => 70,  248 => 69,  243 => 74,  241 => 69,  232 => 67,  229 => 66,  225 => 65,  221 => 63,  218 => 62,  216 => 59,  215 => 57,  207 => 56,  204 => 55,  200 => 54,  195 => 76,  193 => 65,  190 => 64,  188 => 54,  180 => 53,  176 => 52,  173 => 51,  170 => 50,  167 => 49,  164 => 48,  161 => 47,  158 => 46,  155 => 45,  152 => 44,  149 => 43,  147 => 42,  144 => 41,  141 => 40,  138 => 39,  135 => 38,  132 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  119 => 28,  116 => 27,  113 => 26,  110 => 25,  108 => 24,  105 => 23,  102 => 22,  99 => 21,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  86 => 16,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  51 => 3,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/section/cms-section-block-container.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/section/cms-section-block-container.html.twig");
    }
}
