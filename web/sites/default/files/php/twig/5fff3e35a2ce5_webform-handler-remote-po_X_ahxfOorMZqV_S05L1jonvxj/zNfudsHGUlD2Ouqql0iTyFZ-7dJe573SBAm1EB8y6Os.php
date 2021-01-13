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

/* modules/contrib/webform/templates/webform-handler-remote-post-summary.html.twig */
class __TwigTemplate_975ca6d832e86c7718b71ca4a5e7a0d689766d8d502ff5c006d8d155664a4cad extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "debug", [], "any", false, false, true, 13)) {
            echo "<strong class=\"color-error\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Debugging is enabled"));
            echo "</strong><br />";
        }
        // line 14
        echo "<b>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Completed URL:"));
        echo "</b> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "completed_url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo "<br />
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "updated_url", [], "any", false, false, true, 15)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Updated URL:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "updated_url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "deleted_url", [], "any", false, false, true, 16)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Deleted URL:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "deleted_url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "draft_url", [], "any", false, false, true, 17)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Draft URL:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "draft_url", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "converted_url", [], "any", false, false, true, 18)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Converted URL:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "converted_url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "error_url", [], "any", false, false, true, 19)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Error URL:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "error_url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 20
        echo "<b>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Method:"));
        echo "</b> ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "method", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "<br />
";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "method", [], "any", false, false, true, 21) == "POST")) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Post type:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "type", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "<br />";
        }
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "cast", [], "any", false, false, true, 22)) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Type casting:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar("Enabled");
            echo "<br />";
        }
        // line 23
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "message", [], "any", false, false, true, 23) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "messages", [], "any", false, false, true, 23))) {
            echo "<b>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Response message:"));
            echo "</b> ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Yes"));
            echo "<br/>";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-handler-remote-post-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 23,  107 => 22,  99 => 21,  92 => 20,  84 => 19,  76 => 18,  68 => 17,  60 => 16,  52 => 15,  45 => 14,  39 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-handler-remote-post-summary.html.twig", "C:\\xampp\\htdocs\\Gamess\\web\\modules\\contrib\\webform\\templates\\webform-handler-remote-post-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("t" => 13, "escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
