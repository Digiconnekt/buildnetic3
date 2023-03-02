<?php

use Twig\Environment;
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

/* ajaxMacros.twig */
class __TwigTemplate_3680677d5c3101a25d80bce4f859f09d extends Template
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
        // line 4
        echo "
";
        // line 15
        echo "
";
    }

    // line 1
    public function macro_errorDiv($__id__ = "ajaxError", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "    <div id=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" style=\"display:none\"></div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 5
    public function macro_loadingDiv($__id__ = "ajaxLoadingDiv", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 6
            echo "<div id=\"";
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })()), "html", null, true);
            echo "\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            echo "\" />";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_LoadingData"), "html", null, true);
            echo "
    </div>
    <div class=\"loadingSegment\">
        ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("SegmentEditor_LoadingSegmentedDataMayTakeSomeTime"), "html", null, true);
            echo "
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 16
    public function macro_requestErrorDiv($__contactEmail__ = null, $__areAdsForProfessionalServicesEnabled__ = false, $__currentModule__ = "", $__showMoreHelp__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "contactEmail" => $__contactEmail__,
            "areAdsForProfessionalServicesEnabled" => $__areAdsForProfessionalServicesEnabled__,
            "currentModule" => $__currentModule__,
            "showMoreHelp" => $__showMoreHelp__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 17
            echo "    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">

            ";
            // line 20
            if ((array_key_exists("contactEmail", $context) && (isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 20, $this->source); })()))) {
                // line 21
                echo "                ";
                echo $this->env->getFilter('translate')->getCallable()("General_ErrorRequest", (("<a href=\"mailto:" . \Piwik\piwik_escape_filter($this->env, (isset($context["contactEmail"]) || array_key_exists("contactEmail", $context) ? $context["contactEmail"] : (function () { throw new RuntimeError('Variable "contactEmail" does not exist.', 21, $this->source); })()), "url")) . "\">"), "</a>");
                echo "
            ";
            } else {
                // line 23
                echo "                ";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_ErrorRequest", "", ""), "html", null, true);
                echo "
            ";
            }
            // line 25
            echo "
            <br /><br />
            ";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_NeedMoreHelp"), "html", null, true);
            echo "

            ";
            // line 29
            if ((isset($context["showMoreHelp"]) || array_key_exists("showMoreHelp", $context) ? $context["showMoreHelp"] : (function () { throw new RuntimeError('Variable "showMoreHelp" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/faq/troubleshooting/faq_19489/\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("General_Faq"), "html", null, true);
                echo "</a> –
            ";
            }
            // line 32
            echo "            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://forum.matomo.org/\">";
            echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_CommunityHelp"), "html", null, true);
            echo "</a>";
            // line 34
            if ((isset($context["areAdsForProfessionalServicesEnabled"]) || array_key_exists("areAdsForProfessionalServicesEnabled", $context) ? $context["areAdsForProfessionalServicesEnabled"] : (function () { throw new RuntimeError('Variable "areAdsForProfessionalServicesEnabled" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "                –
                ";
                // line 36
                $context["supportUrl"] = (("https://matomo.org/support-plans/?pk_campaign=Help&pk_medium=AjaxError&pk_content=" . (isset($context["currentModule"]) || array_key_exists("currentModule", $context) ? $context["currentModule"] : (function () { throw new RuntimeError('Variable "currentModule" does not exist.', 36, $this->source); })())) . "&pk_source=Matomo_App");
                // line 37
                echo "                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["supportUrl"]) || array_key_exists("supportUrl", $context) ? $context["supportUrl"] : (function () { throw new RuntimeError('Variable "supportUrl" does not exist.', 37, $this->source); })()), "html_attr");
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->env->getFilter('translate')->getCallable()("Feedback_ProfessionalHelp"), "html", null, true);
                echo "</a>";
            }
            // line 38
            echo ".
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "ajaxMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 38,  173 => 37,  171 => 36,  168 => 35,  166 => 34,  162 => 32,  156 => 30,  154 => 29,  149 => 27,  145 => 25,  139 => 23,  133 => 21,  131 => 20,  126 => 17,  110 => 16,  97 => 11,  89 => 8,  83 => 6,  70 => 5,  58 => 2,  45 => 1,  40 => 15,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro errorDiv(id='ajaxError') %}
    <div id=\"{{ id }}\" style=\"display:none\"></div>
{% endmacro %}

{% macro loadingDiv(id='ajaxLoadingDiv') %}
<div id=\"{{ id }}\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"{{ 'General_LoadingData'|translate }}\" />{{ 'General_LoadingData'|translate }}
    </div>
    <div class=\"loadingSegment\">
        {{ 'SegmentEditor_LoadingSegmentedDataMayTakeSomeTime'|translate }}
    </div>
</div>
{% endmacro %}

{% macro requestErrorDiv(contactEmail, areAdsForProfessionalServicesEnabled = false, currentModule = '', showMoreHelp = false) %}
    <div id=\"loadingError\">
        <div class=\"alert alert-danger\">

            {% if contactEmail is defined and contactEmail %}
                {{ 'General_ErrorRequest'|translate('<a href=\"mailto:' ~ contactEmail|e('url') ~ '\">', '</a>')|raw }}
            {% else %}
                {{ 'General_ErrorRequest'|translate('', '') }}
            {% endif %}

            <br /><br />
            {{ 'General_NeedMoreHelp'|translate }}

            {% if showMoreHelp %}
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://matomo.org/faq/troubleshooting/faq_19489/\">{{ 'General_Faq'|translate }}</a> –
            {% endif %}
            <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"https://forum.matomo.org/\">{{ 'Feedback_CommunityHelp'|translate }}</a>

            {%- if areAdsForProfessionalServicesEnabled %}
                –
                {% set supportUrl = 'https://matomo.org/support-plans/?pk_campaign=Help&pk_medium=AjaxError&pk_content=' ~ currentModule ~ '&pk_source=Matomo_App' %}
                <a rel=\"noreferrer noopener\" target=\"_blank\" href=\"{{ supportUrl|e('html_attr') }}\">{{ 'Feedback_ProfessionalHelp'|translate }}</a>
            {%- endif %}.
        </div>
    </div>
{% endmacro %}
", "ajaxMacros.twig", "/home/u657051008/domains/buildnetic.com/public_html/wp-content/plugins/matomo/app/plugins/Morpheus/templates/ajaxMacros.twig");
    }
}
