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

/* @Administration/administration/index.html.twig */
class __TwigTemplate_343f883b494f080d40f6c00780016abf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'administration_favicons' => [$this, 'block_administration_favicons'],
            'administration_templates' => [$this, 'block_administration_templates'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Administration/administration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Administration/administration/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
        Shopware Administration (c) shopware AG
    </title>

    ";
        // line 10
        $this->displayBlock('administration_favicons', $context, $blocks);
        // line 21
        echo "
    <script nonce=\"";
        // line 22
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" type=\"text/javascript\">
        window._features_ = ";
        // line 23
        echo $this->env->getFilter('json_encode')->getCallable()(($context["features"] ?? null));
        echo ";
    </script>

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/vendors-node.css", "@Administration"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/css/app.css", "@Administration"), "html", null, true);
        echo "\">

</head>
<body>

<div id=\"app\"></div>

";
        // line 34
        $this->displayBlock('administration_templates', $context, $blocks);
        // line 35
        echo "
<script nonce=\"";
        // line 36
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/runtime.js", "@Administration"), "html", null, true);
        echo "\"></script>
<script nonce=\"";
        // line 37
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/vendors-node.js", "@Administration"), "html", null, true);
        echo "\"></script>
<script nonce=\"";
        // line 38
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/commons.js", "@Administration"), "html", null, true);
        echo "\"></script>
<script nonce=\"";
        // line 39
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\" src=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/js/app.js", "@Administration"), "html", null, true);
        echo "\"></script>

<script nonce=\"";
        // line 41
        echo sw_escape_filter($this->env, ($context["cspNonce"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 65
        echo "    Shopware.Application.start({
        apiContext: {
            host: '";
        // line 67
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "host", [], "any", false, false, false, 67), "html", null, true);
        echo "',
            port: ";
        // line 68
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 68), "port", [], "any", false, false, false, 68), "html", null, true);
        echo ",
            scheme: '";
        // line 69
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 69), "scheme", [], "any", false, false, false, 69), "html", null, true);
        echo "',
            schemeAndHttpHost: '";
        // line 70
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 70), "schemeAndHttpHost", [], "any", false, false, false, 70), "html", null, true);
        echo "',
            uri: '";
        // line 71
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 71), "uri", [], "any", false, false, false, 71), "html", null, true);
        echo "',
            basePath: '";
        // line 72
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 72), "basePath", [], "any", false, false, false, 72), "html", null, true);
        echo "',
            pathInfo: '";
        // line 73
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 73), "pathInfo", [], "any", false, false, false, 73), "html", null, true);
        echo "',
            liveVersionId: '";
        // line 74
        echo sw_escape_filter($this->env, ($context["liveVersionId"] ?? null), "html", null, true);
        echo "',
            systemLanguageId: '";
        // line 75
        echo sw_escape_filter($this->env, ($context["systemLanguageId"] ?? null), "html", null, true);
        echo "',
            apiVersion: ";
        // line 76
        echo sw_escape_filter($this->env, ($context["apiVersion"] ?? null), "html", null, true);
        echo ",
            assetPath: '";
        // line 77
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "asset"), "html", null, true);
        echo "'
        },
        appContext: {
            features: window._features_,
            firstRunWizard: ";
        // line 81
        echo ((($context["firstRunWizard"] ?? null)) ? ("true") : ("false"));
        echo ",
            systemCurrencyId: '";
        // line 82
        echo sw_escape_filter($this->env, ($context["systemCurrencyId"] ?? null), "html", null, true);
        echo "',
            systemCurrencyISOCode: '";
        // line 83
        echo sw_escape_filter($this->env, ($context["systemCurrencyISOCode"] ?? null), "html", null, true);
        echo "',
            disableExtensions: ";
        // line 84
        echo ((($context["disableExtensions"] ?? null)) ? ("true") : ("false"));
        echo ",
            adminEsEnable: ";
        // line 85
        echo ((($context["adminEsEnable"] ?? null)) ? ("true") : ("false"));
        echo "
        }
    });
</script>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_administration_favicons($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_favicons"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_favicons"));

        // line 11
        echo "        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/apple-touch-icon.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 12
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-16x16.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 13
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/favicon-32x32.png", "@Administration"), "html", null, true);
        echo "\" id=\"dynamic-favicon\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"";
        // line 14
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-192x192.png", "@Administration"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\" href=\"";
        // line 15
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/android-chrome-256x256.png", "@Administration"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileImage\" content=\"";
        // line 16
        echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("static/img/favicon/mstile-150x150.png", "@Administration"), "html", null, true);
        echo "\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">
        <meta name=\"referrer\" content=\"always\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_administration_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_templates"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "administration_templates"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Administration/administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 34,  235 => 16,  231 => 15,  227 => 14,  223 => 13,  219 => 12,  214 => 11,  204 => 10,  186 => 85,  182 => 84,  178 => 83,  174 => 82,  170 => 81,  163 => 77,  159 => 76,  155 => 75,  151 => 74,  147 => 73,  143 => 72,  139 => 71,  135 => 70,  131 => 69,  127 => 68,  123 => 67,  119 => 65,  115 => 41,  108 => 39,  102 => 38,  96 => 37,  90 => 36,  87 => 35,  85 => 34,  75 => 27,  71 => 26,  65 => 23,  61 => 22,  58 => 21,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>
        Shopware Administration (c) shopware AG
    </title>

    {% block administration_favicons %}
        <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('static/img/favicon/apple-touch-icon.png', '@Administration') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"{{ asset('static/img/favicon/favicon-16x16.png', '@Administration') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ asset('static/img/favicon/favicon-32x32.png', '@Administration') }}\" id=\"dynamic-favicon\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"192x192\" href=\"{{ asset('static/img/favicon/android-chrome-192x192.png', '@Administration') }}\">
        <link rel=\"icon\" type=\"image/png\" sizes=\"256x256\" href=\"{{ asset('static/img/favicon/android-chrome-256x256.png', '@Administration') }}\">
        <meta name=\"msapplication-TileImage\" content=\"{{ asset('static/img/favicon/mstile-150x150.png', '@Administration') }}\">
        <meta name=\"msapplication-TileColor\" content=\"#189eff\">
        <meta name=\"theme-color\" content=\"#189eff\">
        <meta name=\"referrer\" content=\"always\">
    {% endblock %}

    <script nonce=\"{{ cspNonce }}\" type=\"text/javascript\">
        window._features_ = {{ features|json_encode|raw }};
    </script>

    <link rel=\"stylesheet\" href=\"{{ asset('static/css/vendors-node.css', '@Administration') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('static/css/app.css', '@Administration') }}\">

</head>
<body>

<div id=\"app\"></div>

{% block administration_templates %}{% endblock %}

<script nonce=\"{{ cspNonce }}\" src=\"{{ asset('static/js/runtime.js', '@Administration') }}\"></script>
<script nonce=\"{{ cspNonce }}\" src=\"{{ asset('static/js/vendors-node.js', '@Administration') }}\"></script>
<script nonce=\"{{ cspNonce }}\" src=\"{{ asset('static/js/commons.js', '@Administration') }}\"></script>
<script nonce=\"{{ cspNonce }}\" src=\"{{ asset('static/js/app.js', '@Administration') }}\"></script>

<script nonce=\"{{ cspNonce }}\">
    {#
        root-level domain configuration

        host:               shopware.next
        port:               80
        scheme:             http
        schemeAndHttpHost:  http://shopware.next
        uri:                http://shopware.next/admin
        basePath:
        pathInfo:           /admin

        -----------------------------------------------

        sub-folder domain configuration

        host:               localhost
        port:               80
        scheme:             http
        schemeAndHttpHost:  http://localhost
        uri:                http://localhost/next/web/admin
        basePath:           /next/web
        pathInfo:           /admin
    #}
    Shopware.Application.start({
        apiContext: {
            host: '{{ app.request.host }}',
            port: {{ app.request.port }},
            scheme: '{{ app.request.scheme }}',
            schemeAndHttpHost: '{{ app.request.schemeAndHttpHost }}',
            uri: '{{ app.request.uri }}',
            basePath: '{{ app.request.basePath }}',
            pathInfo: '{{ app.request.pathInfo }}',
            liveVersionId: '{{ liveVersionId }}',
            systemLanguageId: '{{ systemLanguageId }}',
            apiVersion: {{ apiVersion }},
            assetPath: '{{ asset('', 'asset') }}'
        },
        appContext: {
            features: window._features_,
            firstRunWizard: {{ firstRunWizard ? 'true' : 'false' }},
            systemCurrencyId: '{{ systemCurrencyId }}',
            systemCurrencyISOCode: '{{ systemCurrencyISOCode }}',
            disableExtensions: {{ disableExtensions ? 'true' : 'false' }},
            adminEsEnable: {{ adminEsEnable ? 'true' : 'false' }}
        }
    });
</script>

</body>
</html>
", "@Administration/administration/index.html.twig", "/var/www/html/InformationSecurity/vendor/shopware/administration/Resources/views/administration/index.html.twig");
    }
}
