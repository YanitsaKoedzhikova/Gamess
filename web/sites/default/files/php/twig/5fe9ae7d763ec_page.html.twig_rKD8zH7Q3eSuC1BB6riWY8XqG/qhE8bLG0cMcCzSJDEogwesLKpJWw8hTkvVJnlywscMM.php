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

/* themes/contrib/yg_property_one/templates/layout/page.html.twig */
class __TwigTemplate_60fb927a1e0d1f0ab399a0f5af6d033218b9f3744df62ab8a365a2172909ee82 extends \Twig\Template
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
        // line 1
        echo " <div class=\"nav-menu fixed-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <nav class=\"navbar navbar-dark navbar-expand-lg\">
                    ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-controls=\"navbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"> <span class=\"navbar-toggler-icon\"></span> </button>
                    ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
                </nav>
            </div>
        </div>
    </div>
</div>

";
        // line 15
        $context["url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("<current>");
        // line 16
        if (twig_in_filter("user", $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["url"] ?? null))))) {
            echo "  
    <header id=\"home\" style=\"background-image: url(";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_image"] ?? null), 17, $this->source), "html", null, true);
            echo ");\">
        <div class=\"container h-100\">
            <div class=\"row h-100\">               
                <div class=\"col-md-8 mx-auto text-center slider-content wow slideInUp\">                   
                    <h1 class=\"\">";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["page"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["#title"] ?? null) : null), 21, $this->source), "html", null, true);
            echo "</h1>
                </div>
            </div>
        </div>
    </header>
";
        }
        // line 27
        echo "
";
        // line 28
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "

<footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-4 widget wow fadeInUp\" data-wow-delay=\"0.3s\">
                    ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"col-12 col-lg-3 widget wow fadeInUp\" data-wow-delay=\"0.6s\">
                    <h3>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_title"] ?? null), 37, $this->source), "html", null, true);
        echo "</h3>
                    <a href=\"mailto:";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 38, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 38, $this->source), "html", null, true);
        echo "</a>
                </div>
                <div class=\"col-12 col-lg-3 widget wow fadeInUp\" data-wow-delay=\"0.9s\">
                    <h3>";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["call_title"] ?? null), 41, $this->source), "html", null, true);
        echo "</h3>
                    <p>";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["phone_no"] ?? null), 42, $this->source), "html", null, true);
        echo "</p>
                </div>                
                <div class=\"col-12 col-lg-2 widget wow fadeInUp\" data-wow-delay=\"1.2s\">
                    <h3>";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["follow_us_title"] ?? null), 45, $this->source), "html", null, true);
        echo "</h3>
                    <ul class=\"nav nav-social list-inline text-center\">
                        <li class=\"list-inline-item\">
                            <a class=\"nav-link pl-1 pr-1\" href=\"";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 48, $this->source), "html", null, true);
        echo "\">
                                <i class=\"fab fa-facebook-f\"></i>
                            </a>
                        </li>                        
                        <li class=\"list-inline-item\">
                            <a class=\"nav-link pl-1 pr-1\" href=\"";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter"] ?? null), 53, $this->source), "html", null, true);
        echo "\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                        </li>
                        <li class=\"list-inline-item\">
                            <a class=\"nav-link pl-1 pr-1\" href=\"";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram"] ?? null), 58, $this->source), "html", null, true);
        echo "\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </li>
                    </ul>
                </div>                
            </div>
            <div class=\"row text-center\">
                <div class=\"col-12 col-lg-12 copyrights\">
                    <p><small>© 2018. <a href=\"#\">YG Property One</a>. All Rights Reserved.<br />Theme By<a href=\"https://www.drupaldevelopersstudio.com/\" target=\"_blank\"> Drupal Developers Studio</a>, A Division of <a href=\"http://www.youngglobes.com\" target=\"_blank\">Young Globes</a></small></p>
                </div>
            </div>
        </div>
    </footer>";
    }

    public function getTemplateName()
    {
        return "themes/contrib/yg_property_one/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 58,  137 => 53,  129 => 48,  123 => 45,  117 => 42,  113 => 41,  105 => 38,  101 => 37,  95 => 34,  86 => 28,  83 => 27,  74 => 21,  67 => 17,  63 => 16,  61 => 15,  51 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/yg_property_one/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\Gamess\\web\\themes\\contrib\\yg_property_one\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 15, "if" => 16);
        static $filters = array("escape" => 6, "render" => 16);
        static $functions = array("url" => 15);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render'],
                ['url']
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
