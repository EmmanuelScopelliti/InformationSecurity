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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_e8d3c9aec9c6923454638f2ab7db49ce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $macros["helper"] = $this;
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_call_macro($macros["helper"], "macro_set_handler", [sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 6)], 6, $context, $this->getSourceContext());
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 9)) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_set_handler", [sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "controller", [], "any", false, false, false, 11), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "route", [], "any", false, false, false, 11), ((("GET" != sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "method", [], "any", false, false, false, 11))) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 11), "method", [], "any", false, false, false, 11)) : (""))], 11, $context, $this->getSourceContext());
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 15)) {
            // line 16
            echo "        ";
            $context["forward_profile"] = sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "childByToken", [0 => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 16)], "method", false, false, false, 16);
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            echo twig_call_macro($macros["helper"], "macro_set_handler", [((($context["forward_profile"] ?? null)) ? (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["forward_profile"] ?? null), "collector", [0 => "request"], "method", false, false, false, 18), "controller", [], "any", false, false, false, 18)) : ("n/a"))], 18, $context, $this->getSourceContext());
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["request_status_code_color"] = (((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 22) >= 400)) ? ("red") : ((((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 22) >= 300)) ? ("yellow") : ("green"))));
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo sw_escape_filter($this->env, ($context["request_status_code_color"] ?? null), "html", null, true);
        echo "\">";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 25), "html", null, true);
        echo "</span>
        ";
        // line 26
        if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 26)) {
            // line 27
            echo "            ";
            if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 27)) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 28
            echo "            ";
            if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 28)) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 29
            echo "            <span class=\"sf-toolbar-label\">";
            ((("GET" != sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 29))) ? (print (sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 29), "html", null, true))) : (print ("")));
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 30
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 30), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        ob_start();
        // line 35
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 38
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statuscode", [], "any", false, false, false, 38), "html", null, true);
        echo " ";
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statustext", [], "any", false, false, false, 38), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 41
        if (("GET" != sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 41))) {
            // line 42
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 44
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "method", [], "any", false, false, false, 44), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 47
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 50
        echo sw_escape_filter($this->env, ($context["request_handler"] ?? null), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 55
        echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true, false, 55)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", false, false, false, 55), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 60
        if (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 60))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>";
        // line 65
        if (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 65)) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 69
        if (array_key_exists("redirect_handler", $context)) {
            // line 70
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 73
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 73), "status_code", [], "any", false, false, false, 73), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 77
            echo sw_escape_filter($this->env, ($context["redirect_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 78
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 78), "token", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "redirect", [], "any", false, false, false, 78), "token", [], "any", false, false, false, 78), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 83
        echo "
        ";
        // line 84
        if (array_key_exists("forward_handler", $context)) {
            // line 85
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 89
            echo sw_escape_filter($this->env, ($context["forward_handler"] ?? null), "html", null, true);
            echo "
                        (<a href=\"";
            // line 90
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\">";
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "forwardtoken", [], "any", false, false, false, 90), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 95
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 96
        echo "
    ";
        // line 97
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null)]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 101
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 102
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 108
        echo "    ";
        $macros["helper"] = $this;
        // line 109
        echo "
    <h2>
        ";
        // line 111
        echo twig_call_macro($macros["helper"], "macro_set_handler", [sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "controller", [], "any", false, false, false, 111)], 111, $context, $this->getSourceContext());
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 121
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 121), "all", [], "any", false, false, false, 121))) {
            // line 122
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 126
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestquery", [], "any", false, false, false, 126), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 128
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 131
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 131), "all", [], "any", false, false, false, 131))) {
            // line 132
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 136
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestrequest", [], "any", false, false, false, 136), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 138
        echo "
                <h4>Uploaded Files</h4>

                ";
        // line 141
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 141))) {
            // line 142
            echo "                    <div class=\"empty\">
                        <p>No files were uploaded</p>
                    </div>
                ";
        } else {
            // line 146
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestfiles", [], "any", false, false, false, 146), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 148
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 151
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 151), "all", [], "any", false, false, false, 151))) {
            // line 152
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 156
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestattributes", [], "any", false, false, false, 156)], false);
            echo "
                ";
        }
        // line 158
        echo "
                <h3>Request Headers</h3>
                ";
        // line 160
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestheaders", [], "any", false, false, false, 160), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 164
        if ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 164) == false)) {
            // line 165
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (sw_get_attribute($this->env, $this->source,         // line 168
($context["collector"] ?? null), "content", [], "any", false, false, false, 168)) {
            // line 169
            echo "                    <div class=\"sf-tabs\">
                        ";
            // line 170
            $context["prettyJson"] = ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isJsonRequest", [], "any", false, false, false, 170)) ? (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "prettyJson", [], "any", false, false, false, 170)) : (null));
            // line 171
            echo "                        ";
            if ( !(null === ($context["prettyJson"] ?? null))) {
                // line 172
                echo "                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">";
                // line 176
                echo sw_escape_filter($this->env, ($context["prettyJson"] ?? null), "html", null, true);
                echo "</pre>
                                </div>
                            </div>
                        </div>
                        ";
            }
            // line 181
            echo "
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">";
            // line 186
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "content", [], "any", false, false, false, 186), "html", null, true);
            echo "</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 192
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 196
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 205
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responseheaders", [], "any", false, false, false, 205), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 209
        echo (((twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 209), "all", [], "any", false, false, false, 209)) && twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 209), "all", [], "any", false, false, false, 209)))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 215
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 215), "all", [], "any", false, false, false, 215))) {
            // line 216
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 220
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestcookies", [], "any", false, false, false, 220)], false);
            echo "
                ";
        }
        // line 222
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 225
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 225), "all", [], "any", false, false, false, 225))) {
            // line 226
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 230
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "responsecookies", [], "any", false, false, false, 230)], true);
            echo "
                ";
        }
        // line 232
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 235
        echo ((twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 235))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session";
        // line 236
        if ( !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 236))) {
            echo " <span class=\"badge\">";
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 236)), "html", null, true);
            echo "</span>";
        }
        echo "</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 241
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 241))) {
            // line 242
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 246
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionmetadata", [], "any", false, false, false, 246)], false);
            echo "
                ";
        }
        // line 248
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 251
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 251))) {
            // line 252
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 256
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionattributes", [], "any", false, false, false, 256), "labels" => [0 => "Attribute", 1 => "Value"]], false);
            echo "
                ";
        }
        // line 258
        echo "
                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 263
        echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 263)), "html", null, true);
        echo "</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">";
        // line 268
        echo twig_include($this->env, $context, (("@WebProfiler/Icon/" . ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "statelesscheck", [], "any", false, false, false, 268)) ? ("yes") : ("no"))) . ".svg"));
        echo "</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                ";
        // line 273
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 273))) {
            // line 274
            echo "                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                ";
        } else {
            // line 278
            echo "                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
            // line 286
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "sessionusages", [], "any", false, false, false, 286));
            foreach ($context['_seq'] as $context["key"] => $context["usage"]) {
                // line 287
                echo "                            <tr>
                                <td class=\"font-normal\">";
                // line 289
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(sw_get_attribute($this->env, $this->source, $context["usage"], "file", [], "any", false, false, false, 289), sw_get_attribute($this->env, $this->source, $context["usage"], "line", [], "any", false, false, false, 289));
                // line 290
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo sw_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 290), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 290), "html", null, true);
                    echo "\">";
                }
                // line 291
                echo "                                        ";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["usage"], "name", [], "any", false, false, false, 291), "html", null, true);
                // line 292
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
                // line 293
                echo "                                    <div class=\"text-small font-normal\">
                                        ";
                // line 294
                $context["usage_id"] = ("session-usage-trace-" . $context["key"]);
                // line 295
                echo "                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo sw_escape_filter($this->env, ($context["usage_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"";
                // line 297
                echo sw_escape_filter($this->env, ($context["usage_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        ";
                // line 298
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, sw_get_attribute($this->env, $this->source, $context["usage"], "trace", [], "any", false, false, false, 298), 2);
                echo "
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['usage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            echo "                        </tbody>
                    </table>
                ";
        }
        // line 306
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 309
        echo ((twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 309))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 315
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 315))) {
            // line 316
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 320
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "flashes", [], "any", false, false, false, 320)], false);
            echo "
                ";
        }
        // line 322
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 330
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 330)], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 333
        $context["requestserver"] = [];
        // line 334
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "requestserver", [], "any", false, false, false, 334), function ($_____, $__key__) use ($context, $macros) { $context["_"] = $_____; $context["key"] = $__key__; return !twig_in_filter($context["key"], sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "dotenvvars", [], "any", false, false, false, 334), "keys", [], "any", false, false, false, 334)); }));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 335
            echo "                    ";
            $context["requestserver"] = twig_array_merge(($context["requestserver"] ?? null), [$context["key"] => $context["value"]]);
            // line 336
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => ($context["requestserver"] ?? null)], false);
        echo "
            </div>
        </div>

        ";
        // line 341
        if (sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 341)) {
            // line 342
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 347
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 347), "token", [], "any", false, false, false, 347)]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 348
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 348), "token", [], "any", false, false, false, 348), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 351
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 351), "getcollector", [0 => "request"], "method", false, false, false, 351), "requestattributes", [], "any", false, false, false, 351)], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 355
        echo "
        ";
        // line 356
        if (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 356))) {
            // line 357
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 358
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 358)), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 361
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 361));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 362
                echo "                    <h3>
                        ";
                // line 363
                echo twig_call_macro($macros["helper"], "macro_set_handler", [sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 363), "controller", [], "any", false, false, false, 363)], 363, $context, $this->getSourceContext());
                echo "
                        <small>(token = <a href=\"";
                // line 364
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => sw_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 364)]), "html", null, true);
                echo "\">";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 364), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 367
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 367), "requestattributes", [], "any", false, false, false, 367)], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "            </div>
        </div>
        ";
        }
        // line 372
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 375
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 376
            echo "    ";
            if (sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true, false, 376)) {
                // line 377
                if (((array_key_exists("method", $context)) ? (_twig_default_filter(($context["method"] ?? null), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo sw_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
                    echo "</span>";
                }
                // line 378
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "file", [], "any", false, false, false, 378), sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "line", [], "any", false, false, false, 378));
                // line 379
                if (($context["link"] ?? null)) {
                    echo "<a href=\"";
                    echo sw_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 379), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 379), "html", null, true);
                    echo "\">";
                }
                // line 381
                if (((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), false)) : (false))) {
                    // line 382
                    echo "@";
                    echo sw_escape_filter($this->env, ($context["route"] ?? null), "html", null, true);
                } else {
                    // line 384
                    echo sw_escape_filter($this->env, twig_striptags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", false, false, false, 384))), "html", null, true);
                    // line 385
                    ((sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 385)) ? (print (sw_escape_filter($this->env, (" :: " . sw_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "method", [], "any", false, false, false, 385)), "html", null, true))) : (print ("")));
                }
                // line 388
                if (($context["link"] ?? null)) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 390
                echo "<span>";
                echo sw_escape_filter($this->env, ((array_key_exists("route", $context)) ? (_twig_default_filter(($context["route"] ?? null), ($context["controller"] ?? null))) : (($context["controller"] ?? null))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  926 => 390,  919 => 388,  916 => 385,  914 => 384,  910 => 382,  908 => 381,  896 => 379,  894 => 378,  888 => 377,  885 => 376,  864 => 375,  853 => 372,  848 => 369,  840 => 367,  832 => 364,  828 => 363,  825 => 362,  821 => 361,  815 => 358,  812 => 357,  810 => 356,  807 => 355,  800 => 351,  794 => 348,  790 => 347,  783 => 342,  781 => 341,  773 => 337,  767 => 336,  764 => 335,  759 => 334,  757 => 333,  751 => 330,  741 => 322,  735 => 320,  729 => 316,  727 => 315,  718 => 309,  713 => 306,  708 => 303,  697 => 298,  693 => 297,  687 => 295,  685 => 294,  682 => 293,  676 => 292,  673 => 291,  661 => 290,  659 => 289,  656 => 287,  652 => 286,  642 => 278,  636 => 274,  634 => 273,  626 => 268,  618 => 263,  611 => 258,  605 => 256,  599 => 252,  597 => 251,  592 => 248,  586 => 246,  580 => 242,  578 => 241,  566 => 236,  562 => 235,  557 => 232,  551 => 230,  545 => 226,  543 => 225,  538 => 222,  532 => 220,  526 => 216,  524 => 215,  515 => 209,  508 => 205,  497 => 196,  491 => 192,  482 => 186,  475 => 181,  467 => 176,  461 => 172,  458 => 171,  456 => 170,  453 => 169,  451 => 168,  446 => 165,  444 => 164,  437 => 160,  433 => 158,  427 => 156,  421 => 152,  419 => 151,  414 => 148,  408 => 146,  402 => 142,  400 => 141,  395 => 138,  389 => 136,  383 => 132,  381 => 131,  376 => 128,  370 => 126,  364 => 122,  362 => 121,  349 => 111,  345 => 109,  342 => 108,  332 => 107,  318 => 102,  315 => 101,  305 => 100,  293 => 97,  290 => 96,  287 => 95,  277 => 90,  273 => 89,  267 => 85,  265 => 84,  262 => 83,  252 => 78,  248 => 77,  241 => 73,  236 => 70,  234 => 69,  223 => 65,  211 => 60,  203 => 55,  195 => 50,  190 => 47,  185 => 44,  181 => 42,  179 => 41,  171 => 38,  166 => 35,  164 => 34,  161 => 33,  158 => 32,  153 => 30,  148 => 29,  143 => 28,  138 => 27,  136 => 26,  129 => 25,  127 => 24,  124 => 23,  122 => 22,  119 => 21,  116 => 20,  110 => 18,  107 => 17,  104 => 16,  102 => 15,  99 => 14,  96 => 13,  90 => 11,  87 => 10,  85 => 9,  82 => 8,  76 => 6,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% import _self as helper %}
    {% set request_handler %}
        {{ helper.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ helper.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forwardtoken %}
        {% set forward_profile = profile.childByToken(collector.forwardtoken) %}
        {% set forward_handler %}
            {{ helper.set_handler(forward_profile ? forward_profile.collector('request').controller : 'n/a') }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}{{ include('@WebProfiler/Icon/redirect.svg') }}{% endif %}
            {% if collector.forwardtoken %}{{ include('@WebProfiler/Icon/forward.svg') }}{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('n/a') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Stateless Check</b>
                <span>{% if collector.statelesscheck %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forwardtoken }) }}\">{{ collector.forwardtoken }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>
        {{ helper.set_handler(collector.controller) }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                {% if collector.requestquery.all is empty %}
                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>POST Parameters</h3>

                {% if collector.requestrequest.all is empty %}
                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h4>Uploaded Files</h4>

                {% if collector.requestfiles is empty %}
                    <div class=\"empty\">
                        <p>No files were uploaded</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestfiles, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"sf-tabs\">
                        {% set prettyJson = collector.isJsonRequest ? collector.prettyJson : null %}
                        {% if prettyJson is not null %}
                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Pretty</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\" style=\"max-height: 500px; overflow-y: auto;\">
                                    <pre class=\"break-long-words\">{{ prettyJson }}</pre>
                                </div>
                            </div>
                        </div>
                        {% endif %}

                        <div class=\"tab\">
                            <h3 class=\"tab-title\">Raw</h3>
                            <div class=\"tab-content\">
                                <div class=\"card\">
                                    <pre class=\"break-long-words\">{{ collector.content }}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session{% if collector.sessionusages is not empty %} <span class=\"badge\">{{ collector.sessionusages|length }}</span>{% endif %}</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}

                <h3>Session Usage</h3>

                <div class=\"metrics\">
                    <div class=\"metric\">
                        <span class=\"value\">{{ collector.sessionusages|length }}</span>
                        <span class=\"label\">Usages</span>
                    </div>

                    <div class=\"metric\">
                        <span class=\"value\">{{ include('@WebProfiler/Icon/' ~ (collector.statelesscheck ? 'yes' : 'no') ~ '.svg') }}</span>
                        <span class=\"label\">Stateless check enabled</span>
                    </div>
                </div>

                {% if collector.sessionusages is empty %}
                    <div class=\"empty\">
                        <p>Session not used.</p>
                    </div>
                {% else %}
                    <table class=\"session_usages\">
                        <thead>
                        <tr>
                            <th class=\"full-width\">Usage</th>
                        </tr>
                        </thead>

                        <tbody>
                        {% for key, usage in collector.sessionusages %}
                            <tr>
                                <td class=\"font-normal\">
                                    {%- set link = usage.file|file_link(usage.line) %}
                                    {%- if link %}<a href=\"{{ link }}\" title=\"{{ usage.name }}\">{% else %}<span title=\"{{ usage.name }}\">{% endif %}
                                        {{ usage.name }}
                                    {%- if link %}</a>{% else %}</span>{% endif %}
                                    <div class=\"text-small font-normal\">
                                        {% set usage_id = 'session-usage-trace-' ~ key %}
                                        <a class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ usage_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</a>
                                    </div>
                                    <div id=\"{{ usage_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                        {{ profiler_dump(usage.trace, maxDepth=2) }}
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Server Parameters</h3>
            <div class=\"tab-content\">
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.dotenvvars }, with_context = false) }}

                <h4>Defined as regular env variables</h4>
                {% set requestserver = [] %}
                {% for key, value in collector.requestserver|filter((_, key) => key not in collector.dotenvvars.keys) %}
                    {% set requestserver = requestserver|merge({(key): value}) %}
                {% endfor %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: requestserver }, with_context = false) }}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        {{ helper.set_handler(child.getcollector('request').controller) }}
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.class }}\">{% else %}<span title=\"{{ controller.class }}\">{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "/var/www/html/InformationSecurity/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
