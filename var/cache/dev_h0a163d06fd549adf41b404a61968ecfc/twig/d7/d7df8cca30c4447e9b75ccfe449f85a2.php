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

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_35d40d82839df8472c2b99529da945b9 extends Template
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
            'panelContent' => [$this, 'block_panelContent'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
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
        $context["has_time_events"] = (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 6)) > 0);
        // line 7
        echo "    ";
        $context["total_time"] = ((($context["has_time_events"] ?? null)) ? (twig_sprintf("%.0f", sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 7))) : ("n/a"));
        // line 8
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 8))) ? (twig_sprintf("%.0f", sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 8))) : ("n/a"));
        // line 9
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? null) && (sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 9) > 1000))) ? ("yellow") : (""));
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 13
        echo sw_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 20
        echo sw_escape_filter($this->env, ($context["total_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 24
        echo sw_escape_filter($this->env, ($context["initialization_time"] ?? null), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => ($context["profiler_url"] ?? null), "status" => ($context["status_color"] ?? null)]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 33
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 39
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 39)) > 0);
        // line 40
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 44
        echo sw_escape_filter($this->env, twig_sprintf("%.0f", sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "duration", [], "any", false, false, false, 44)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 49
        echo sw_escape_filter($this->env, twig_sprintf("%.0f", sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "inittime", [], "any", false, false, false, 49)), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 53
        if (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 53), "memory", [], "any", false, false, false, 53)) {
            // line 54
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 55
            echo sw_escape_filter($this->env, twig_sprintf("%.2f", ((sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "collectors", [], "any", false, false, false, 55), "memory", [], "any", false, false, false, 55), "memory", [], "any", false, false, false, 55) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 59
        echo "
        ";
        // line 60
        if ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 60)) > 0)) {
            // line 61
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 64
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 64)), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 65
            echo (((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 65)) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 68
            if (($context["has_time_events"] ?? null)) {
                // line 69
                echo "                ";
                $context["subrequests_time"] = 0;
                // line 70
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 70));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 71
                    echo "                    ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? null) + sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, false, 71), "events", [], "any", false, false, false, 71), "__section__", [], "any", false, false, false, 71), "duration", [], "any", false, false, false, 71));
                    // line 72
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "            ";
            } else {
                // line 74
                echo "                ";
                $context["subrequests_time"] = "n/a";
                // line 75
                echo "            ";
            }
            // line 76
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo sw_escape_filter($this->env, ($context["subrequests_time"] ?? null), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 79
            echo (((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 79)) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 82
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 86
        if ( !sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "isStopwatchInstalled", [], "method", false, false, false, 86)) {
            // line 87
            echo "        <div class=\"empty\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    ";
        } elseif (twig_test_empty(sw_get_attribute($this->env, $this->source,         // line 90
($context["collector"] ?? null), "events", [], "any", false, false, false, 90))) {
            // line 91
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 95
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_panelContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panelContent"));

        // line 100
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 107
        if (sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 107)) {
            // line 108
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 109
            echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "getcollector", [0 => "request"], "method", false, false, false, 109), "requestattributes", [], "any", false, false, false, 109), "get", [0 => "_controller"], "method", false, false, false, 109));
            echo "
            <small>
                ";
            // line 111
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 111), "__section__", [], "any", false, false, false, 111), "duration", [], "any", false, false, false, 111), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 112
            echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "parent", [], "any", false, false, false, 112), "token", [], "any", false, false, false, 112), "panel" => "time"]), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, sw_get_attribute($this->env, $this->source,         // line 115
($context["profile"] ?? null), "children", [], "any", false, false, false, 115)) > 0)) {
            // line 116
            echo "        <h3>
            Main Request <small>";
            // line 117
            echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 117), "__section__", [], "any", false, false, false, 117), "duration", [], "any", false, false, false, 117), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 120
        echo "
    ";
        // line 121
        echo twig_call_macro($macros["helper"], "macro_display_timeline", [($context["token"] ?? null), sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 121), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 121), "__section__", [], "any", false, false, false, 121), "origin", [], "any", false, false, false, 121)], 121, $context, $this->getSourceContext());
        echo "

    ";
        // line 123
        if (twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 123))) {
            // line 124
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 126
            echo sw_escape_filter($this->env, twig_length_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 126)), "html", null, true);
            echo ")</small></h3>

        ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "children", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo "            ";
                $context["events"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "time"], "method", false, false, false, 129), "events", [], "any", false, false, false, 129);
                // line 130
                echo "            <h4>
                <a href=\"";
                // line 131
                echo sw_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => sw_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 131), "panel" => "time"]), "html", null, true);
                echo "\">";
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method", false, false, false, 131), "identifier", [], "any", false, false, false, 131), "html", null, true);
                echo "</a>
                <small>";
                // line 132
                echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 132), "duration", [], "any", false, false, false, 132), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 135
                echo twig_call_macro($macros["helper"], "macro_display_timeline", [sw_get_attribute($this->env, $this->source, $context["child"], "token", [], "any", false, false, false, 135), ($context["events"] ?? null), sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "events", [], "any", false, false, false, 135), "__section__", [], "any", false, false, false, 135), "origin", [], "any", false, false, false, 135)], 135, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "    ";
        }
        // line 138
        echo "
<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
";
        // line 147
        $this->loadTemplate("@WebProfiler/Collector/time.css.twig", "@WebProfiler/Collector/time.html.twig", 147)->display($context);
        // line 148
        echo "</style>
<script>
";
        // line 150
        $this->loadTemplate("@WebProfiler/Collector/time.js", "@WebProfiler/Collector/time.html.twig", 150)->display($context);
        // line 151
        echo "</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 154
    public function macro_dump_request_data($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 156
            $macros["__internal_parse_0"] = $this;
            // line 157
            echo "{
    id: \"";
            // line 158
            echo sw_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "\",
    left: ";
            // line 159
            echo sw_escape_filter($this->env, twig_sprintf("%F", (sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 159), "origin", [], "any", false, false, false, 159) - ($context["origin"] ?? null))), "js", null, true);
            echo ",
    end: \"";
            // line 160
            echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["events"] ?? null), "__section__", [], "any", false, false, false, 160), "endtime", [], "any", false, false, false, 160)), "js", null, true);
            echo "\",
    events: [ ";
            // line 161
            echo twig_call_macro($macros["__internal_parse_0"], "macro_dump_events", [($context["events"] ?? null)], 161, $context, $this->getSourceContext());
            echo " ],
}
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 166
    public function macro_dump_events($__events__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "events" => $__events__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 168
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 169
                if (("__section__" != $context["name"])) {
                    // line 170
                    echo "{
    name: \"";
                    // line 171
                    echo sw_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
    category: \"";
                    // line 172
                    echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, $context["event"], "category", [], "any", false, false, false, 172), "js", null, true);
                    echo "\",
    origin: ";
                    // line 173
                    echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["event"], "origin", [], "any", false, false, false, 173)), "js", null, true);
                    echo ",
    starttime: ";
                    // line 174
                    echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["event"], "starttime", [], "any", false, false, false, 174)), "js", null, true);
                    echo ",
    endtime: ";
                    // line 175
                    echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["event"], "endtime", [], "any", false, false, false, 175)), "js", null, true);
                    echo ",
    duration: ";
                    // line 176
                    echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["event"], "duration", [], "any", false, false, false, 176)), "js", null, true);
                    echo ",
    memory: ";
                    // line 177
                    echo sw_escape_filter($this->env, twig_sprintf("%.1F", ((sw_get_attribute($this->env, $this->source, $context["event"], "memory", [], "any", false, false, false, 177) / 1024) / 1024)), "js", null, true);
                    echo ",
    elements: {},
    periods: [";
                    // line 180
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(sw_get_attribute($this->env, $this->source, $context["event"], "periods", [], "any", false, false, false, 180));
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 181
                        echo "{
            start: ";
                        // line 182
                        echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["period"], "starttime", [], "any", false, false, false, 182)), "js", null, true);
                        echo ",
            end: ";
                        // line 183
                        echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["period"], "endtime", [], "any", false, false, false, 183)), "js", null, true);
                        echo ",
            duration: ";
                        // line 184
                        echo sw_escape_filter($this->env, twig_sprintf("%F", sw_get_attribute($this->env, $this->source, $context["period"], "duration", [], "any", false, false, false, 184)), "js", null, true);
                        echo ",
            elements: {}
        },";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 188
                    echo "],
},
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 195
    public function macro_display_timeline($__token__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "token" => $__token__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 196
            $macros["helper"] = $this;
            // line 197
            echo "    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-";
            // line 198
            echo sw_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"legends\"></div>
        <svg id=\"timeline-";
            // line 199
            echo sw_escape_filter($this->env, ($context["token"] ?? null), "html", null, true);
            echo "\" class=\"timeline-graph\"></svg>
        <script>";
            // line 201
            echo "            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-";
            // line 206
            echo sw_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "')),
                    new Legend(document.getElementById('legend-";
            // line 207
            echo sw_escape_filter($this->env, ($context["token"] ?? null), "js", null, true);
            echo "'), theme),
                    document.getElementById('threshold'),
                    ";
            // line 209
            echo twig_call_macro($macros["helper"], "macro_dump_request_data", [($context["token"] ?? null), ($context["events"] ?? null), ($context["origin"] ?? null)], 209, $context, $this->getSourceContext());
            echo "
                );
            });
        ";
            // line 212
            echo "</script>
    </div>
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
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 212,  650 => 209,  645 => 207,  641 => 206,  634 => 201,  630 => 199,  626 => 198,  623 => 197,  621 => 196,  600 => 195,  578 => 188,  569 => 184,  565 => 183,  561 => 182,  558 => 181,  554 => 180,  549 => 177,  545 => 176,  541 => 175,  537 => 174,  533 => 173,  529 => 172,  525 => 171,  522 => 170,  520 => 169,  516 => 168,  497 => 166,  479 => 161,  475 => 160,  471 => 159,  467 => 158,  464 => 157,  462 => 156,  441 => 154,  430 => 151,  428 => 150,  424 => 148,  422 => 147,  411 => 138,  408 => 137,  400 => 135,  394 => 132,  388 => 131,  385 => 130,  382 => 129,  378 => 128,  373 => 126,  369 => 124,  367 => 123,  362 => 121,  359 => 120,  353 => 117,  350 => 116,  348 => 115,  342 => 112,  338 => 111,  333 => 109,  330 => 108,  328 => 107,  319 => 100,  309 => 99,  295 => 95,  289 => 91,  287 => 90,  282 => 87,  280 => 86,  274 => 82,  268 => 79,  264 => 78,  260 => 76,  257 => 75,  254 => 74,  251 => 73,  245 => 72,  242 => 71,  237 => 70,  234 => 69,  232 => 68,  226 => 65,  222 => 64,  217 => 61,  215 => 60,  212 => 59,  205 => 55,  202 => 54,  200 => 53,  193 => 49,  185 => 44,  179 => 40,  176 => 39,  166 => 38,  152 => 33,  149 => 32,  139 => 31,  127 => 28,  124 => 27,  118 => 24,  111 => 20,  107 => 18,  105 => 17,  102 => 16,  96 => 13,  91 => 12,  89 => 11,  86 => 10,  83 => 9,  80 => 8,  77 => 7,  74 => 6,  64 => 5,  53 => 1,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% set has_time_events = collector.events|length > 0 %}
    {% set total_time = has_time_events ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = has_time_events and collector.duration > 1000 ? 'yellow' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set has_time_events = collector.events|length > 0 %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MiB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% if has_time_events %}
                {% set subrequests_time = 0 %}
                {% for child in profile.children %}
                    {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
                {% endfor %}
            {% else %}
                {% set subrequests_time = 'n/a' %}
            {% endif %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if not collector.isStopwatchInstalled() %}
        <div class=\"empty\">
            <p>The Stopwatch component is not installed. If you want to see timing events, run: <code>composer require symfony/stopwatch</code>.</p>
        </div>
    {% elseif collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Check that symfony/stopwatch is installed and debugging enabled in the kernel.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" name=\"threshold\" id=\"threshold\" value=\"1\" min=\"0\" placeholder=\"1.1\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3 class=\"dump-inline\">
            Sub-Request {{ profiler_dump(profile.getcollector('request').requestattributes.get('_controller')) }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline(token, collector.events, collector.events.__section__.origin) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline(child.token, events, collector.events.__section__.origin) }}
        {% endfor %}
    {% endif %}

<svg id=\"timeline-template\" width=\"0\" height=\"0\">
  <defs>
    <pattern id=\"subrequest\" class=\"timeline-subrequest-pattern\" patternUnits=\"userSpaceOnUse\" width=\"20\" height=\"20\" viewBox=\"0 0 40 40\">
        <path d=\"M0 40L40 0H20L0 20M40 40V20L20 40\"/>
    </pattern>
  </defs>
</svg>
<style type=\"text/css\">
{% include '@WebProfiler/Collector/time.css.twig' %}
</style>
<script>
{% include '@WebProfiler/Collector/time.js' %}
</script>
{% endblock %}

{% macro dump_request_data(token, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
{
    id: \"{{ token }}\",
    left: {{ \"%F\"|format(events.__section__.origin - origin) }},
    end: \"{{ '%F'|format(events.__section__.endtime) }}\",
    events: [ {{ dump_events(events) }} ],
}
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
{
    name: \"{{ name }}\",
    category: \"{{ event.category }}\",
    origin: {{ \"%F\"|format(event.origin) }},
    starttime: {{ \"%F\"|format(event.starttime) }},
    endtime: {{ \"%F\"|format(event.endtime) }},
    duration: {{ \"%F\"|format(event.duration) }},
    memory: {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
    elements: {},
    periods: [
        {%- for period in event.periods -%}
        {
            start: {{ \"%F\"|format(period.starttime) }},
            end: {{ \"%F\"|format(period.endtime) }},
            duration: {{ \"%F\"|format(period.duration) }},
            elements: {}
        },
        {%- endfor -%}
    ],
},
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(token, events, origin) %}
{% import _self as helper %}
    <div class=\"sf-profiler-timeline\">
        <div id=\"legend-{{ token }}\" class=\"legends\"></div>
        <svg id=\"timeline-{{ token }}\" class=\"timeline-graph\"></svg>
        <script>{% autoescape 'js' %}
            window.addEventListener('load', function onLoad() {
                const theme = new Theme();

                new TimelineEngine(
                    theme,
                    new SvgRenderer(document.getElementById('timeline-{{ token }}')),
                    new Legend(document.getElementById('legend-{{ token }}'), theme),
                    document.getElementById('threshold'),
                    {{ helper.dump_request_data(token, events, origin) }}
                );
            });
        {% endautoescape %}</script>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/time.html.twig", "/var/www/html/InformationSecurity/vendor/symfony/web-profiler-bundle/Resources/views/Collector/time.html.twig");
    }
}
