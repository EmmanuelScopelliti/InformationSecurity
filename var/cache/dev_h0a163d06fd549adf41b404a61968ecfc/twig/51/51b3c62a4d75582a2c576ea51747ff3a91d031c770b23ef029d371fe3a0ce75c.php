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

/* @Storefront/storefront/component/pseudo-modal.html.twig */
class __TwigTemplate_da69abda98c742b15f6931d76bd84bb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_detail_zoom_modal_close_button_content' => [$this, 'block_product_detail_zoom_modal_close_button_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pseudo-modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/pseudo-modal.html.twig"));

        // line 1
        echo "<div class=\"js-pseudo-modal-template\">
    <div class=\"modal fade\"
         tabindex=\"-1\"
         role=\"dialog\">
        <div class=\"modal-dialog\"
             role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header only-close\">
                    ";
        // line 10
        echo "                    ";
        if ($this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("V6_5_0_0")) {
            // line 11
            echo "                        <div class=\"modal-title js-pseudo-modal-template-title-element h5\"></div>
                    ";
        } else {
            // line 13
            echo "                        <h5 class=\"modal-title js-pseudo-modal-template-title-element\"></h5>
                    ";
        }
        // line 15
        echo "
                    <button type=\"button\"
                            class=\"";
        // line 17
        echo sw_escape_filter($this->env, ($context["modalCloseBtnClass"] ?? null), "html", null, true);
        echo " close\"
                            ";
        // line 18
        echo sw_escape_filter($this->env, ($context["dataBsDismissAttr"] ?? null), "html", null, true);
        echo "=\"modal\"
                            aria-label=\"Close\">
                        ";
        // line 20
        $this->displayBlock('product_detail_zoom_modal_close_button_content', $context, $blocks);
        // line 28
        echo "                    </button>
                </div>
                <div class=\"modal-body js-pseudo-modal-template-content-element\">
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 20
    public function block_product_detail_zoom_modal_close_button_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_detail_zoom_modal_close_button_content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_detail_zoom_modal_close_button_content"));

        // line 21
        echo "                            ";
        // line 22
        echo "                            ";
        if ( !$this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\FeatureFlagExtension']->feature("v6.5.0.0")) {
            // line 23
            echo "                                <span aria-hidden=\"true\">
                                    ";
            // line 24
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find("@Storefront/storefront/utilities/icon.html.twig");

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/pseudo-modal.html.twig", 24);
            })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
            // line 25
            echo "                                </span>
                            ";
        }
        // line 27
        echo "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/pseudo-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 27,  124 => 25,  116 => 24,  113 => 23,  110 => 22,  108 => 21,  98 => 20,  80 => 28,  78 => 20,  73 => 18,  69 => 17,  65 => 15,  61 => 13,  57 => 11,  54 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"js-pseudo-modal-template\">
    <div class=\"modal fade\"
         tabindex=\"-1\"
         role=\"dialog\">
        <div class=\"modal-dialog\"
             role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header only-close\">
                    {# @deprecated tag:v6.5.0 - h5 will be changed to div because it causes incorrect semantics on all pages which include pseudo-modal.html.twig #}
                    {% if feature('V6_5_0_0') %}
                        <div class=\"modal-title js-pseudo-modal-template-title-element h5\"></div>
                    {% else %}
                        <h5 class=\"modal-title js-pseudo-modal-template-title-element\"></h5>
                    {% endif %}

                    <button type=\"button\"
                            class=\"{{ modalCloseBtnClass }} close\"
                            {{ dataBsDismissAttr }}=\"modal\"
                            aria-label=\"Close\">
                        {% block product_detail_zoom_modal_close_button_content %}
                            {# @deprecated tag:v6.5.0 - Bootstrap v5 creates \"x\" symbol automatically via SVG background #}
                            {% if not feature('v6.5.0.0') %}
                                <span aria-hidden=\"true\">
                                    {% sw_icon 'x' style { 'size': 'sm' } %}
                                </span>
                            {% endif %}
                        {% endblock %}
                    </button>
                </div>
                <div class=\"modal-body js-pseudo-modal-template-content-element\">
                </div>
            </div>
        </div>
    </div>
</div>
", "@Storefront/storefront/component/pseudo-modal.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/storefront/Resources/views/storefront/component/pseudo-modal.html.twig");
    }
}
