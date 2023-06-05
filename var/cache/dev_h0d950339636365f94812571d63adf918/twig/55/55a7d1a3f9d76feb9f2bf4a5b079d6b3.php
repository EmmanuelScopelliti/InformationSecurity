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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_957459a034c02521747ee5429c34138e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 6) || sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 6)) || sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 6))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            $context["status_color"] = ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 8)) ? ("red") : (((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 8)) ? ("yellow") : ("none"))));
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 10
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 10)) ? (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 10)) : ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 10) + sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 10)))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            echo "
        ";
            // line 13
            ob_start();
            // line 14
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 16
            echo ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 16)) ? ("red") : (""));
            echo "\">";
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 16)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 16), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 21
            echo ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 21)) ? ("yellow") : (""));
            echo "\">";
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", true, true, false, 21)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 21), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 26
            echo ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 26)) ? ("none") : (""));
            echo "\">";
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 26)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 26), 0)) : (0)), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 29
            echo "
        ";
            // line 30
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 35
        echo "    <span class=\"label label-status-";
        echo ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 35)) ? ("error") : (((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 35)) ? ("warning") : ("none"))));
        echo " ";
        echo ((twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "logs", [], "any", false, false, false, 35))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Icon/logger.svg");
        echo "</span>
        <strong>Logs</strong>
        ";
        // line 38
        if (((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 38) || sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 38)) || sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 38))) {
            // line 39
            echo "            <span class=\"count\">
                <span>";
            // line 40
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 40)) ? (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 40)) : ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 40) + sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countwarnings", [], "any", false, false, false, 40)))), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 43
        echo "    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 46
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 47
        echo "    <h2>Log Messages</h2>

    ";
        // line 49
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 49))) {
            // line 50
            echo "        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    ";
        } else {
            // line 54
            echo "        ";
            $context["has_error_logs"] = (twig_length_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->filter(twig_array_column(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 54), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("error" == ($context["type"] ?? null)); })) > 0);
            // line 55
            echo "        ";
            $context["has_deprecation_logs"] = (twig_length_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\SecurityExtension']->filter(twig_array_column(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 55), "type"), function ($__type__) use ($context, $macros) { $context["type"] = $__type__; return ("deprecation" == ($context["type"] ?? null)); })) > 0);
            // line 56
            echo "
        ";
            // line 57
            $context["filters"] = sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "filters", [], "any", false, false, false, 57);
            // line 58
            echo "        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <ul class=\"tab-navigation\">
                    <li class=\"";
            // line 61
            echo ((( !($context["has_error_logs"] ?? null) &&  !($context["has_deprecation_logs"] ?? null))) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 62
            echo ((( !($context["has_error_logs"] ?? null) &&  !($context["has_deprecation_logs"] ?? null))) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\">
                        <label for=\"filter-log-type-all\">All messages</label>
                    </li>

                    <li class=\"";
            // line 66
            echo ((($context["has_error_logs"] ?? null)) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 67
            echo ((($context["has_error_logs"] ?? null)) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\">
                        <label for=\"filter-log-type-error\">
                            Errors
                            <span class=\"badge status-";
            // line 70
            echo ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 70)) ? ("error") : (""));
            echo "\">";
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", true, true, false, 70)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "counterrors", [], "any", false, false, false, 70), 0)) : (0)), "html", null, true);
            echo "</span>
                        </label>
                    </li>

                    <li class=\"";
            // line 74
            echo ((( !($context["has_error_logs"] ?? null) && ($context["has_deprecation_logs"] ?? null))) ? ("active") : (""));
            echo "\">
                        <input ";
            // line 75
            echo ((( !($context["has_error_logs"] ?? null) && ($context["has_deprecation_logs"] ?? null))) ? ("checked") : (""));
            echo " type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\">
                        <label for=\"filter-log-type-deprecation\">
                            Deprecations
                            <span class=\"badge status-";
            // line 78
            echo ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 78)) ? ("warning") : (""));
            echo "\">";
            echo sw_escape_filter($this->env, ((sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", true, true, false, 78)) ? (_twig_default_filter(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "countdeprecations", [], "any", false, false, false, 78), 0)) : (0)), "html", null, true);
            echo "</span>
                        </label>
                    </li>
                </ul>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 86
            echo twig_include($this->env, $context, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Level (<span class=\"filter-active-num\">";
            // line 87
            echo sw_escape_filter($this->env, (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 87)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "priority", [], "any", false, false, false, 96));
            foreach ($context['_seq'] as $context["label"] => $context["value"]) {
                // line 97
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 98
                echo ((("debug" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-level-";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-level-";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-level-";
                // line 99
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo sw_escape_filter($this->env, $context["label"], "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">";
            // line 107
            echo twig_include($this->env, $context, "@WebProfiler/Icon/filter.svg");
            echo "</span>
                    Channel (<span class=\"filter-active-num\">";
            // line 108
            echo sw_escape_filter($this->env, (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, false, 108)) - 1), "html", null, true);
            echo "</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["filters"] ?? null), "channel", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 118
                echo "                        <div class=\"log-filter-option\">
                            <input ";
                // line 119
                echo ((("event" != $context["value"])) ? ("checked") : (""));
                echo " type=\"checkbox\" id=\"filter-log-channel-";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name=\"filter-log-channel-";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" value=\"";
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">
                            <label for=\"filter-log-channel-";
                // line 120
                echo sw_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo sw_escape_filter($this->env, twig_title_string_filter($this->env, $context["value"]), "html", null, true);
                echo "</label>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col width=\"140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "processedLogs", [], "any", false, false, false, 141));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 142
                echo "                    ";
                $context["css_class"] = ((("error" == sw_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 142))) ? ("error") : (((((sw_get_attribute($this->env, $this->source,                 // line 143
$context["log"], "priorityName", [], "any", false, false, false, 143) == "WARNING") || ("deprecation" == sw_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 143)))) ? ("warning") : (((("silenced" == sw_get_attribute($this->env, $this->source,                 // line 144
$context["log"], "type", [], "any", false, false, false, 144))) ? ("silenced") : (""))))));
                // line 146
                echo "                    <tr class=\"log-status-";
                echo sw_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                echo "\" data-type=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 146), "html", null, true);
                echo "\" data-priority=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "priority", [], "any", false, false, false, 146), "html", null, true);
                echo "\" data-channel=\"";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 146), "html", null, true);
                echo "\" style=\"";
                echo (((("event" == sw_get_attribute($this->env, $this->source, $context["log"], "channel", [], "any", false, false, false, 146)) || ("DEBUG" == sw_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 146)))) ? ("display: none") : (""));
                echo "\">
                        <td class=\"log-timestamp\">
                            <time title=\"";
                // line 148
                echo sw_escape_filter($this->env, twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 148), "r"), "html", null, true);
                echo "\" datetime=\"";
                echo sw_escape_filter($this->env, twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 148), "c"), "html", null, true);
                echo "\">
                                ";
                // line 149
                echo sw_escape_filter($this->env, twig_date_format_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "timestamp", [], "any", false, false, false, 149), "H:i:s.v"), "html", null, true);
                echo "
                            </time>

                            ";
                // line 152
                if ((twig_in_filter(sw_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 152), [0 => "error", 1 => "deprecation", 2 => "silenced"]) || ("WARNING" == sw_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 152)))) {
                    // line 153
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo sw_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 154
                    if ((("error" == sw_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 154)) || ("WARNING" == sw_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 154)))) {
                        // line 155
                        echo "                                        ";
                        echo sw_escape_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 155)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 157
                        echo "                                        ";
                        echo sw_escape_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "type", [], "any", false, false, false, 157)), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 159
                    echo "                                </span>
                            ";
                } else {
                    // line 161
                    echo "                                <span class=\"log-type-badge badge badge-";
                    echo sw_escape_filter($this->env, ($context["css_class"] ?? null), "html", null, true);
                    echo "\">
                                    ";
                    // line 162
                    echo sw_escape_filter($this->env, twig_lower_filter($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "priorityName", [], "any", false, false, false, 162)), "html", null, true);
                    echo "
                                </span>
                            ";
                }
                // line 165
                echo "                        </td>

                        <td class=\"font-normal\">
                            ";
                // line 168
                echo twig_call_macro($macros["helper"], "macro_render_log_message", ["debug", sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 168), $context["log"]], 168, $context, $this->getSourceContext());
                echo "
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>

        <script>Sfjs.initializeLogsTable();</script>
    ";
        }
        // line 181
        echo "
    ";
        // line 182
        $context["compilerLogTotal"] = 0;
        // line 183
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 183));
        foreach ($context['_seq'] as $context["_key"] => $context["logs"]) {
            // line 184
            echo "        ";
            $context["compilerLogTotal"] = (($context["compilerLogTotal"] ?? null) + twig_length_filter($this->env, $context["logs"]));
            // line 185
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "
    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">(";
        // line 189
        echo sw_escape_filter($this->env, ($context["compilerLogTotal"] ?? null), "html", null, true);
        echo ")</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        ";
        // line 193
        if (twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 193))) {
            // line 194
            echo "            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        ";
        } else {
            // line 198
            echo "            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "compilerLogs", [], "any", false, false, false, 207));
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
            foreach ($context['_seq'] as $context["class"] => $context["logs"]) {
                // line 208
                echo "                    <tr>
                        <td class=\"font-normal text-right\">";
                // line 209
                echo sw_escape_filter($this->env, twig_length_filter($this->env, $context["logs"]), "html", null, true);
                echo "</td>
                        <td class=\"font-normal\">
                            ";
                // line 211
                $context["context_id"] = ("context-compiler-" . sw_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 211));
                // line 212
                echo "
                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#";
                // line 213
                echo sw_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"";
                echo sw_escape_filter($this->env, $context["class"], "html", null, true);
                echo "\">";
                echo sw_escape_filter($this->env, $context["class"], "html", null, true);
                echo "</button>

                            <div id=\"";
                // line 215
                echo sw_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    ";
                // line 217
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["logs"]);
                foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                    // line 218
                    echo "                                        <li>";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, sw_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 218));
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                                </ul>
                            </div>
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['class'], $context['logs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                </tbody>
            </table>
        ";
        }
        // line 228
        echo "    </details>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 231
    public function macro_render_log_message($__category__ = null, $__log_index__ = null, $__log__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "category" => $__category__,
            "log_index" => $__log_index__,
            "log" => $__log__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_log_message"));

            // line 232
            echo "    ";
            $context["has_context"] = (sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", true, true, false, 232) &&  !twig_test_empty(sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 232)));
            // line 233
            echo "    ";
            $context["has_trace"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, true, false, 233), "exception", [], "any", false, true, false, 233), "trace", [], "any", true, true, false, 233);
            // line 234
            echo "
    ";
            // line 235
            if ( !($context["has_context"] ?? null)) {
                // line 236
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, false, 236));
                echo "
    ";
            } else {
                // line 238
                echo "        ";
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpLog($this->env, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "message", [], "any", false, false, false, 238), sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 238));
                echo "
    ";
            }
            // line 240
            echo "
    <div class=\"log-metadata\">
        ";
            // line 242
            if (sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, false, 242)) {
                // line 243
                echo "            <span class=\"badge\">";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "channel", [], "any", false, false, false, 243), "html", null, true);
                echo "</span>
        ";
            }
            // line 245
            echo "
        ";
            // line 246
            if ((sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", true, true, false, 246) && (sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, false, 246) > 1))) {
                // line 247
                echo "            <span class=\"log-num-occurrences\">";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "errorCount", [], "any", false, false, false, 247), "html", null, true);
                echo " times</span>
        ";
            }
            // line 249
            echo "
        ";
            // line 250
            if (($context["has_context"] ?? null)) {
                // line 251
                echo "            ";
                $context["context_id"] = ((("context-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 252
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo sw_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        ";
            }
            // line 254
            echo "
        ";
            // line 255
            if (($context["has_trace"] ?? null)) {
                // line 256
                echo "            ";
                $context["trace_id"] = ((("trace-" . ($context["category"] ?? null)) . "-") . ($context["log_index"] ?? null));
                // line 257
                echo "            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#";
                echo sw_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                echo "\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        ";
            }
            // line 259
            echo "
        ";
            // line 260
            if (($context["has_context"] ?? null)) {
                // line 261
                echo "            <div id=\"";
                echo sw_escape_filter($this->env, ($context["context_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 262
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 262), 1);
                echo "
            </div>
        ";
            }
            // line 265
            echo "
        ";
            // line 266
            if (($context["has_trace"] ?? null)) {
                // line 267
                echo "            <div id=\"";
                echo sw_escape_filter($this->env, ($context["trace_id"] ?? null), "html", null, true);
                echo "\" class=\"context sf-toggle-content sf-toggle-hidden\">
                ";
                // line 268
                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["log"] ?? null), "context", [], "any", false, false, false, 268), "exception", [], "any", false, false, false, 268), "trace", [], "any", false, false, false, 268), 1);
                echo "
            </div>
        ";
            }
            // line 271
            echo "    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  781 => 271,  775 => 268,  770 => 267,  768 => 266,  765 => 265,  759 => 262,  754 => 261,  752 => 260,  749 => 259,  743 => 257,  740 => 256,  738 => 255,  735 => 254,  729 => 252,  726 => 251,  724 => 250,  721 => 249,  715 => 247,  713 => 246,  710 => 245,  704 => 243,  702 => 242,  698 => 240,  692 => 238,  686 => 236,  684 => 235,  681 => 234,  678 => 233,  675 => 232,  654 => 231,  643 => 228,  638 => 225,  620 => 220,  611 => 218,  607 => 217,  602 => 215,  593 => 213,  590 => 212,  588 => 211,  583 => 209,  580 => 208,  563 => 207,  552 => 198,  546 => 194,  544 => 193,  537 => 189,  532 => 186,  526 => 185,  523 => 184,  518 => 183,  516 => 182,  513 => 181,  502 => 172,  484 => 168,  479 => 165,  473 => 162,  468 => 161,  464 => 159,  458 => 157,  452 => 155,  450 => 154,  445 => 153,  443 => 152,  437 => 149,  431 => 148,  417 => 146,  415 => 144,  414 => 143,  412 => 142,  395 => 141,  375 => 123,  364 => 120,  354 => 119,  351 => 118,  347 => 117,  335 => 108,  331 => 107,  324 => 102,  313 => 99,  303 => 98,  300 => 97,  296 => 96,  284 => 87,  280 => 86,  267 => 78,  261 => 75,  257 => 74,  248 => 70,  242 => 67,  238 => 66,  231 => 62,  227 => 61,  222 => 58,  220 => 57,  217 => 56,  214 => 55,  211 => 54,  205 => 50,  203 => 49,  199 => 47,  189 => 46,  178 => 43,  172 => 40,  169 => 39,  167 => 38,  162 => 36,  155 => 35,  145 => 34,  132 => 30,  129 => 29,  121 => 26,  111 => 21,  101 => 16,  97 => 14,  95 => 13,  92 => 12,  87 => 10,  82 => 9,  79 => 8,  76 => 7,  73 => 6,  63 => 5,  52 => 1,  50 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
        {% set icon %}
            {% set status_color = collector.counterrors ? 'red' : collector.countwarnings ? 'yellow' : 'none' %}
            {{ include('@WebProfiler/Icon/logger.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.counterrors ? 'red' }}\">{{ collector.counterrors|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Warnings</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countwarnings ? 'yellow' }}\">{{ collector.countwarnings|default(0) }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Deprecations</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countdeprecations ? 'none' }}\">{{ collector.countdeprecations|default(0) }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.counterrors ? 'error' : collector.countwarnings ? 'warning' : 'none' }} {{ collector.logs is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/logger.svg') }}</span>
        <strong>Logs</strong>
        {% if collector.counterrors or collector.countdeprecations or collector.countwarnings %}
            <span class=\"count\">
                <span>{{ collector.counterrors ?: (collector.countdeprecations + collector.countwarnings) }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Log Messages</h2>

    {% if collector.processedLogs is empty %}
        <div class=\"empty\">
            <p>No log messages available.</p>
        </div>
    {% else %}
        {% set has_error_logs = collector.processedLogs|column('type')|filter(type => 'error' == type)|length > 0 %}
        {% set has_deprecation_logs = collector.processedLogs|column('type')|filter(type => 'deprecation' == type)|length > 0 %}

        {% set filters = collector.filters %}
        <div class=\"log-filters\">
            <div id=\"log-filter-type\" class=\"log-filter\">
                <ul class=\"tab-navigation\">
                    <li class=\"{{ not has_error_logs and not has_deprecation_logs ? 'active' }}\">
                        <input {{ not has_error_logs and not has_deprecation_logs ? 'checked' }} type=\"radio\" id=\"filter-log-type-all\" name=\"filter-log-type\" value=\"all\">
                        <label for=\"filter-log-type-all\">All messages</label>
                    </li>

                    <li class=\"{{ has_error_logs ? 'active' }}\">
                        <input {{ has_error_logs ? 'checked' }} type=\"radio\" id=\"filter-log-type-error\" name=\"filter-log-type\" value=\"error\">
                        <label for=\"filter-log-type-error\">
                            Errors
                            <span class=\"badge status-{{ collector.counterrors ? 'error' }}\">{{ collector.counterrors|default(0) }}</span>
                        </label>
                    </li>

                    <li class=\"{{ not has_error_logs and has_deprecation_logs ? 'active' }}\">
                        <input {{ not has_error_logs and has_deprecation_logs ? 'checked' }} type=\"radio\" id=\"filter-log-type-deprecation\" name=\"filter-log-type\" value=\"deprecation\">
                        <label for=\"filter-log-type-deprecation\">
                            Deprecations
                            <span class=\"badge status-{{ collector.countdeprecations ? 'warning' }}\">{{ collector.countdeprecations|default(0) }}</span>
                        </label>
                    </li>
                </ul>
            </div>

            <details id=\"log-filter-priority\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">{{ include('@WebProfiler/Icon/filter.svg') }}</span>
                    Level (<span class=\"filter-active-num\">{{ filters.priority|length - 1 }}</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    {% for label, value in filters.priority %}
                        <div class=\"log-filter-option\">
                            <input {{ 'debug' != value ? 'checked' }} type=\"checkbox\" id=\"filter-log-level-{{ value }}\" name=\"filter-log-level-{{ value }}\" value=\"{{ value }}\">
                            <label for=\"filter-log-level-{{ value }}\">{{ label }}</label>
                        </div>
                    {% endfor %}
                </div>
            </details>

            <details id=\"log-filter-channel\" class=\"log-filter\">
                <summary>
                    <span class=\"icon\">{{ include('@WebProfiler/Icon/filter.svg') }}</span>
                    Channel (<span class=\"filter-active-num\">{{ filters.channel|length - 1 }}</span>)
                </summary>

                <div class=\"log-filter-content\">
                    <div class=\"filter-select-all-or-none\">
                        <button type=\"button\" class=\"btn btn-link select-all\">Select All</button>
                        <button type=\"button\" class=\"btn btn-link select-none\">Select None</button>
                    </div>

                    {% for value in filters.channel %}
                        <div class=\"log-filter-option\">
                            <input {{ 'event' != value ? 'checked' }} type=\"checkbox\" id=\"filter-log-channel-{{ value }}\" name=\"filter-log-channel-{{ value }}\" value=\"{{ value }}\">
                            <label for=\"filter-log-channel-{{ value }}\">{{ value|title }}</label>
                        </div>
                    {% endfor %}
                </div>
            </details>
        </div>

        <table class=\"logs\">
            <colgroup>
                <col width=\"140px\">
                <col>
            </colgroup>

            <thead>
                <tr>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
            </thead>

            <tbody>
                {% for log in collector.processedLogs %}
                    {% set css_class = 'error' == log.type ? 'error'
                        : (log.priorityName == 'WARNING' or 'deprecation' == log.type) ? 'warning'
                        : 'silenced' == log.type ? 'silenced'
                    %}
                    <tr class=\"log-status-{{ css_class }}\" data-type=\"{{ log.type }}\" data-priority=\"{{ log.priority }}\" data-channel=\"{{ log.channel }}\" style=\"{{ 'event' == log.channel or 'DEBUG' == log.priorityName ? 'display: none' }}\">
                        <td class=\"log-timestamp\">
                            <time title=\"{{ log.timestamp|date('r') }}\" datetime=\"{{ log.timestamp|date('c') }}\">
                                {{ log.timestamp|date('H:i:s.v') }}
                            </time>

                            {% if log.type in ['error', 'deprecation', 'silenced'] or 'WARNING' == log.priorityName %}
                                <span class=\"log-type-badge badge badge-{{ css_class }}\">
                                    {% if 'error' == log.type or 'WARNING' == log.priorityName %}
                                        {{ log.priorityName|lower }}
                                    {% else %}
                                        {{ log.type|lower }}
                                    {% endif %}
                                </span>
                            {% else %}
                                <span class=\"log-type-badge badge badge-{{ css_class }}\">
                                    {{ log.priorityName|lower }}
                                </span>
                            {% endif %}
                        </td>

                        <td class=\"font-normal\">
                            {{ helper.render_log_message('debug', loop.index, log) }}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>

        <div class=\"no-logs-message empty\">
            <p>There are no log messages.</p>
        </div>

        <script>Sfjs.initializeLogsTable();</script>
    {% endif %}

    {% set compilerLogTotal = 0 %}
    {% for logs in collector.compilerLogs %}
        {% set compilerLogTotal = compilerLogTotal + logs|length %}
    {% endfor %}

    <details class=\"container-compilation-logs\">
        <summary>
            <h4>Container Compilation Logs <span class=\"text-muted\">({{ compilerLogTotal }})</span></h4>
            <span class=\"text-muted\">Log messages generated during the compilation of the service container.</span>
        </summary>

        {% if collector.compilerLogs is empty %}
            <div class=\"empty\">
                <p>There are no compiler log messages.</p>
            </div>
        {% else %}
            <table class=\"container-logs\">
                <thead>
                <tr>
                    <th>Messages</th>
                    <th class=\"full-width\">Class</th>
                </tr>
                </thead>

                <tbody>
                {% for class, logs in collector.compilerLogs %}
                    <tr>
                        <td class=\"font-normal text-right\">{{ logs|length }}</td>
                        <td class=\"font-normal\">
                            {% set context_id = 'context-compiler-' ~ loop.index %}

                            <button type=\"button\" class=\"btn btn-link sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"{{ class }}\">{{ class }}</button>

                            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                                <ul class=\"break-long-words\">
                                    {% for log in logs %}
                                        <li>{{ profiler_dump_log(log.message) }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </details>
{% endblock %}

{% macro render_log_message(category, log_index, log) %}
    {% set has_context = log.context is defined and log.context is not empty %}
    {% set has_trace = log.context.exception.trace is defined %}

    {% if not has_context %}
        {{ profiler_dump_log(log.message) }}
    {% else %}
        {{ profiler_dump_log(log.message, log.context) }}
    {% endif %}

    <div class=\"log-metadata\">
        {% if log.channel %}
            <span class=\"badge\">{{ log.channel }}</span>
        {% endif %}

        {% if log.errorCount is defined and log.errorCount > 1 %}
            <span class=\"log-num-occurrences\">{{ log.errorCount }} times</span>
        {% endif %}

        {% if has_context %}
            {% set context_id = 'context-' ~ category ~ '-' ~ log_index %}
            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ context_id }}\" data-toggle-alt-content=\"Hide context\">Show context</button></span>
        {% endif %}

        {% if has_trace %}
            {% set trace_id = 'trace-' ~ category ~ '-' ~ log_index %}
            <span><button type=\"button\" class=\"btn btn-link text-small sf-toggle\" data-toggle-selector=\"#{{ trace_id }}\" data-toggle-alt-content=\"Hide trace\">Show trace</button></span>
        {% endif %}

        {% if has_context %}
            <div id=\"{{ context_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context, maxDepth=1) }}
            </div>
        {% endif %}

        {% if has_trace %}
            <div id=\"{{ trace_id }}\" class=\"context sf-toggle-content sf-toggle-hidden\">
                {{ profiler_dump(log.context.exception.trace, maxDepth=1) }}
            </div>
        {% endif %}
    </div>
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/var/www/html/InformationSecurity/vendor/symfony/web-profiler-bundle/Resources/views/Collector/logger.html.twig");
    }
}
