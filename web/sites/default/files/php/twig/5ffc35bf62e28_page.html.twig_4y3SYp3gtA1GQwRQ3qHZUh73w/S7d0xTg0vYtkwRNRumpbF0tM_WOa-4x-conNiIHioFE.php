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

/* themes/contrib/car_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_86858f76ab029d98a4314db2ca5bccb79f1acb81ddf2027e84e94c6ed77b5a63 extends \Twig\Template
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
        // line 60
        echo "
<div class=\"header\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Header -->

      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <i class=\"fas fa-bars\"></i>
        </button>
        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 71)) {
            // line 72
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 74
        echo "      </div>

      <!-- End: Header -->

      ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 78) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 78))) {
            // line 79
            echo "        <div class=\"col-md-9\">

          ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 81)) {
                // line 82
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "
          ";
            }
            // line 84
            echo "
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
            echo "
          
        </div>
      ";
        }
        // line 89
        echo "
      </div>

    </div>
  </div>
</div>


";
        // line 97
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 98
            echo "  <div class=\"flexslider\">
    <ul class=\"slides\">
      ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 101
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"], 101, $this->source));
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "    </ul>
  </div>
";
        }
        // line 106
        echo "

<!-- Start: Top widget -->

";
        // line 110
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 110) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 110)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 110))) {
            // line 111
            echo "  <div class=\"topwidget\" id=\"topwidget\">
    <div class=\"container\">
        <div class=\"row clearfix\">

          <!-- Start: Top widget first -->          
          ";
            // line 116
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 116)) {
                // line 117
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 117, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_first", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 118
            echo "          
          <!-- End: Top widget first --> 

          <!-- Start: Top widget second -->          
          ";
            // line 122
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 122)) {
                // line 123
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 123, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_second", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 124
            echo "          
          <!-- End: Top widget second --> 
          
          <!-- Start: Top widget third -->         
          ";
            // line 128
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 128)) {
                // line 129
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null), 129, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topwidget_third", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 130
            echo "          
          <!-- End: Top widget third -->

        </div>
    </div>
  </div>
";
        }
        // line 137
        echo "
<!--End: Top widget -->

    
<!--Start: Highlighted -->

";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 143)) {
            // line 144
            echo "  <div class=\"highlighted\">
    <div class=\"container\">
      ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
    </div>
  </div>
";
        }
        // line 150
        echo "
<!--End: Highlighted -->

<!--Start: Title -->

";
        // line 155
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 155) &&  !($context["is_front"] ?? null))) {
            // line 156
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        ";
            // line 159
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 164
        echo "
<!--End: Title -->

<div class=\"main-content\">
  <div class=\"container\">
    <div class=\"\">

      <!--Start: Breadcrumb -->

      ";
        // line 173
        if ( !($context["is_front"] ?? null)) {
            // line 174
            echo "        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 178
        echo "
      <!--End: Breadcrumb -->

      <div class=\"row layout\">

        <!--- Start: Left SideBar -->
        ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 184)) {
            // line 185
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null), 185, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 187
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 187), 187, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 191
        echo "        <!-- End Left SideBar -->

        <!--- Start Content -->
        ";
        // line 194
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 194)) {
            // line 195
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null), 195, $this->source), "html", null, true);
            echo ">
            <div class=\"content_layout\">
              ";
            // line 197
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
            echo "
            </div>              
          </div>
        ";
        }
        // line 201
        echo "        <!-- End: Content -->

        <!-- Start: Right SideBar -->
        ";
        // line 204
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 204)) {
            // line 205
            echo "          <div class=";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null), 205, $this->source), "html", null, true);
            echo ">
            <div class=\"sidebar\">
              ";
            // line 207
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 207), 207, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 211
        echo "        <!-- End: Right SideBar -->
        
      </div>
    
    </div>
  </div>
</div>

<!-- End: Main content -->


<!-- Start: Features -->

";
        // line 224
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 224) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 224)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 224))) {
            // line 225
            echo "
  <div class=\"features\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Features First -->
        ";
            // line 231
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 231)) {
                // line 232
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_first_class"] ?? null), 232, $this->source), "html", null, true);
                echo ">
            ";
                // line 233
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_first", [], "any", false, false, true, 233), 233, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 236
            echo "        <!-- End: Features First -->

        <!-- Start :Features Second -->
        ";
            // line 239
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 239)) {
                // line 240
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 240, $this->source), "html", null, true);
                echo ">
            ";
                // line 241
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_second", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 244
            echo "        <!-- End: Features Second -->

        <!-- Start: Features third -->
        ";
            // line 247
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 247)) {
                // line 248
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["features_class"] ?? null), 248, $this->source), "html", null, true);
                echo ">
            ";
                // line 249
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "features_third", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 252
            echo "        <!-- End: Features Third -->

      </div>
    </div>
  </div>

";
        }
        // line 259
        echo "
<!--End: Features -->


<!-- Start: Services -->

";
        // line 265
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 265)) {
            // line 266
            echo "
  <div class=\"services\" id=\"services\">
    <div class=\"container\">
      ";
            // line 269
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "services", [], "any", false, false, true, 269), 269, $this->source), "html", null, true);
            echo "
    </div>
  </div>

";
        }
        // line 274
        echo "
<!--End: Services -->


<!-- Start: Bottom widgets -->

";
        // line 280
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 280) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 280)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 280)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 280))) {
            // line 281
            echo "
  <div class=\"bottom-widget\" id=\"bottom-widget\">    
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 287
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 287)) {
                // line 288
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 288, $this->source), "html", null, true);
                echo ">
            ";
                // line 289
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_first", [], "any", false, false, true, 289), 289, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 291
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 295
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 295)) {
                // line 296
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 296, $this->source), "html", null, true);
                echo ">
            ";
                // line 297
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_second", [], "any", false, false, true, 297), 297, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 299
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 303
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 303)) {
                // line 304
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 304, $this->source), "html", null, true);
                echo ">
            ";
                // line 305
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_third", [], "any", false, false, true, 305), 305, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 307
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 311
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 311)) {
                // line 312
                echo "          <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null), 312, $this->source), "html", null, true);
                echo ">
            ";
                // line 313
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "bottom_forth", [], "any", false, false, true, 313), 313, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 316
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>

";
        }
        // line 323
        echo "
<!--End: Bottom widgets -->



<!-- Start: Footer widgets -->

";
        // line 330
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 330) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 330)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 330))) {
            // line 331
            echo "
  <div class=\"footer\" id=\"footer\">
    <div class=\"container\">
      <div class=\"parallax-region wow- bounceInUp\">  
        <div class=\"row\">

          <!-- Start: Footer First -->
          ";
            // line 338
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 338)) {
                // line 339
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 339, $this->source), "html", null, true);
                echo ">
              ";
                // line 340
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 340), 340, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 343
            echo "          <!-- End: Footer First -->

          <!-- Start :Footer Second -->
          ";
            // line 346
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 346)) {
                // line 347
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 347, $this->source), "html", null, true);
                echo ">
              ";
                // line 348
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 348), 348, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 351
            echo "          <!-- End: Footer Second -->

          <!-- Start: Footer third -->
          ";
            // line 354
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 354)) {
                // line 355
                echo "            <div class = ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null), 355, $this->source), "html", null, true);
                echo ">
              ";
                // line 356
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 356), 356, $this->source), "html", null, true);
                echo "
            </div>
          ";
            }
            // line 359
            echo "          <!-- End: Footer Third -->

        </div>
      </div>
    </div>
  </div>

";
        }
        // line 367
        echo "
<!--End: Footer widgets -->

<!-- Start: Copyright -->

<div class=\"copyright\">

    <div class=\"container\">

      <div class=\"row\">

        <div class=\"col-md-5 copyright-wrap\">
          <p>Copyright © ";
        // line 379
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
        </div>

        <div class=\"col-md-7 social-media-wrap\">
          ";
        // line 383
        if (($context["show_social_icon"] ?? null)) {
            // line 384
            echo "            <p class=\"social-media\">
              ";
            // line 385
            if (($context["facebook_url"] ?? null)) {
                // line 386
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 386, $this->source), "html", null, true);
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fab fa-facebook-f\"></i></a>
              ";
            }
            // line 388
            echo "              ";
            if (($context["google_plus_url"] ?? null)) {
                // line 389
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null), 389, $this->source), "html", null, true);
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fab fa-google-plus-g\"></i></a>
              ";
            }
            // line 391
            echo "              ";
            if (($context["twitter_url"] ?? null)) {
                // line 392
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 392, $this->source), "html", null, true);
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fab fa-twitter\"></i></a>
              ";
            }
            // line 394
            echo "              ";
            if (($context["linkedin_url"] ?? null)) {
                // line 395
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 395, $this->source), "html", null, true);
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
              ";
            }
            // line 397
            echo "              ";
            if (($context["pinterest_url"] ?? null)) {
                // line 398
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null), 398, $this->source), "html", null, true);
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fab fa-pinterest-p\"></i></a>
              ";
            }
            // line 400
            echo "              ";
            if (($context["rss_url"] ?? null)) {
                // line 401
                echo "                <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null), 401, $this->source), "html", null, true);
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
            }
            // line 403
            echo "            </p>
          ";
        }
        // line 405
        echo "
          ";
        // line 406
        if (($context["show_credit_link"] ?? null)) {
            // line 407
            echo "            <p class=\"credit-link\">Designed By <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
          ";
        }
        // line 409
        echo "
        </div>
        
      </div>
      
  </div>

</div>

<!-- End: Copyright -->





";
    }

    public function getTemplateName()
    {
        return "themes/contrib/car_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  692 => 409,  688 => 407,  686 => 406,  683 => 405,  679 => 403,  673 => 401,  670 => 400,  664 => 398,  661 => 397,  655 => 395,  652 => 394,  646 => 392,  643 => 391,  637 => 389,  634 => 388,  628 => 386,  626 => 385,  623 => 384,  621 => 383,  614 => 379,  600 => 367,  590 => 359,  584 => 356,  579 => 355,  577 => 354,  572 => 351,  566 => 348,  561 => 347,  559 => 346,  554 => 343,  548 => 340,  543 => 339,  541 => 338,  532 => 331,  530 => 330,  521 => 323,  512 => 316,  506 => 313,  501 => 312,  499 => 311,  493 => 307,  487 => 305,  482 => 304,  480 => 303,  474 => 299,  468 => 297,  463 => 296,  461 => 295,  455 => 291,  449 => 289,  444 => 288,  442 => 287,  434 => 281,  432 => 280,  424 => 274,  416 => 269,  411 => 266,  409 => 265,  401 => 259,  392 => 252,  386 => 249,  381 => 248,  379 => 247,  374 => 244,  368 => 241,  363 => 240,  361 => 239,  356 => 236,  350 => 233,  345 => 232,  343 => 231,  335 => 225,  333 => 224,  318 => 211,  311 => 207,  305 => 205,  303 => 204,  298 => 201,  291 => 197,  285 => 195,  283 => 194,  278 => 191,  271 => 187,  265 => 185,  263 => 184,  255 => 178,  249 => 175,  246 => 174,  244 => 173,  233 => 164,  225 => 159,  220 => 156,  218 => 155,  211 => 150,  204 => 146,  200 => 144,  198 => 143,  190 => 137,  181 => 130,  173 => 129,  171 => 128,  165 => 124,  157 => 123,  155 => 122,  149 => 118,  141 => 117,  139 => 116,  132 => 111,  130 => 110,  124 => 106,  119 => 103,  110 => 101,  106 => 100,  102 => 98,  100 => 97,  90 => 89,  83 => 85,  80 => 84,  74 => 82,  72 => 81,  68 => 79,  66 => 78,  60 => 74,  54 => 72,  52 => 71,  39 => 60,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/car_zymphonies_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\Gamess\\web\\themes\\contrib\\car_zymphonies_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 71, "for" => 100);
        static $filters = array("escape" => 72, "raw" => 101, "date" => 379);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
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
