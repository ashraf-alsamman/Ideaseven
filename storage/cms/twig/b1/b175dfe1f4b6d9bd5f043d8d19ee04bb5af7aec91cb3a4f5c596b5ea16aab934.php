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

/* D:\wamp64\www\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/inner.htm */
class __TwigTemplate_796d122947127fe315f21f8614b7bfb621ceab2af19397262e6d4be4f5937224 extends \Twig\Template
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
        // line 1
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<main role=\"main\">


 <!-- inner start -->
<div class=\"header_title fit_image\"                  style=\"background-image: url(";
        // line 12
        echo $this->extensions['System\Twig\Extension']->mediaFilter("-wall.png");
        echo ");\">
    <div class=\"category_title\">Services</div>
    <nav aria-label=\"breadcrumb\">
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"#\">Services</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">Inner Services</a></li>
      </ol>
    </nav> 
</div>



 
<!-- inner_page start -->
<div class=\"inner_page row\" >
  <div class=\"side_bar col-lg-4  col-md-4  col-sm-12  col-xs-12  \">
      <div class=\"side_bar_header\"><img src=\"images/logo1.png\" style=\"margin: 0px 9px 8px 0px;\"  width=\"15px\"/>Services</div>
 
      <ul class=\"navbar-nav navbar-nav \">
      
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "services", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 35
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 35) == 3)) {
                    echo "  
      <li class=\"nav-item  nav_item_acitve\"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"side_link  fa  fa-chevron-right\"> <strong>";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 36), "html", null, true);
                    echo "</strong></div>   </a></li>  

    
     
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</ul>
  </div>

  <!-- col-8 start -->
      


  <div class=\" col-lg-8  col-md-8  col-sm-12  col-xs-12 \">


";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 55
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 55) == 16)) {
                    echo "  


      <div class=\"block block1\">
        <p class=\"block_title\"> ";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_1_title", [], "any", false, false, false, 59), "html", null, true);
                    echo "</p>
        <img src=\"";
                    // line 60
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_1_image", [], "any", false, false, false, 60));
                    echo "\" width=\"100%\" />
        <p class=\"block_description\">";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_1_description", [], "any", false, false, false, 61), "html", null, true);
                    echo "</p>
    </div>  
     
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "


";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 72
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 72) == 16)) {
                    echo "  

    <div class=\"block block2 row\">
          <div class=\"col-7 pr-0\">
              <p class=\"block_title mt-4\">";
                    // line 76
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_2_title", [], "any", false, false, false, 76), "html", null, true);
                    echo "</p>
              <p class=\"block_description\">";
                    // line 77
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_2_description", [], "any", false, false, false, 77), "html", null, true);
                    echo "</p>
          </div>
    
          <div class=\"col-5\">
                           <img src=\"";
                    // line 81
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_2_image", [], "any", false, false, false, 81));
                    echo "\" width=\"100%\" />
          </div>
    </div>   
      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "


";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 92));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 93) == 16)) {
                    echo "  

    <div class=\"block block3 row\">
             
          <div class=\"col-5\">
                           <img src=\"";
                    // line 98
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_3_image", [], "any", false, false, false, 98));
                    echo "\" width=\"100%\" />
          </div>
          <div class=\"col-7 pr-0\">
              <p class=\"block_title mt-4\">";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_3_title", [], "any", false, false, false, 101), "html", null, true);
                    echo "</p>
              <p class=\"block_description\">";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_3_description", [], "any", false, false, false, 102), "html", null, true);
                    echo "</p>
          </div>

    </div>   
      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "


";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 115
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 115) == 16)) {
                    echo "  

    <div class=\"block block4\">
       <p class=\"block_title\">";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_4_title", [], "any", false, false, false, 118), "html", null, true);
                    echo "</p>
       <p class=\"block_description\">      ";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_4_description", [], "any", false, false, false, 119), "html", null, true);
                    echo "</p>
    </div>
      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "
 


    
      <ul class=\"block_list\">
       
";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 134
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 134) == 16)) {
                    echo "  
";
                    // line 135
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "block_list", [], "any", false, false, false, 135));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 136
                        echo " <li >";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 136), "html", null, true);
                        echo "   </li>
 
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 138
                    echo "      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "      </ul>

    <div class=\"block block5 row\">
    
    
    
";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 149));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 150
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 150) == 16)) {
                    echo "  
";
                    // line 151
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "block_many_3", [], "any", false, false, false, 151));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 152
                        echo "  
  
           <div class=\"col-lg-4  col-md-4  col-sm-12  col-xs-12\">
            <p class=\"block_sub_title\">";
                        // line 155
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 155), "html", null, true);
                        echo " </p><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["r"], "image", [], "any", false, false, false, 155));
                        echo " \" width=\"100%\" />
            <p class=\"block_description\">";
                        // line 156
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "descriptio", [], "any", false, false, false, 156), "html", null, true);
                        echo "  </p>
           </div>
  
  
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "    
    




    </div>
    <div class=\"block block5 row\">

";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 175
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 175) == 16)) {
                    echo "  
";
                    // line 176
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "block_many_4", [], "any", false, false, false, 176));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 177
                        echo "  
  
           <div class=\"col-lg-3  col-md-3  col-sm-12  col-xs-12\">
            <p class=\"block_sub_title\">";
                        // line 180
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 180), "html", null, true);
                        echo " </p><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["r"], "image", [], "any", false, false, false, 180));
                        echo " \" width=\"100%\" />
            <p class=\"block_description\">";
                        // line 181
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "descriptio", [], "any", false, false, false, 181), "html", null, true);
                        echo "  </p>
           </div>
  
  
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 185
                    echo "      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "    
  </div>

    <div class=\"block block7 \">
  
        <p class=\"block_title\">Title</p> 

        










 
 

  <ul id=\"accordion\" class=\"accordion\">
     
     
     ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 214
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "inner", [], "any", false, false, false, 214));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 215
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 215) == 16)) {
                    echo "  
";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "block_accordion", [], "any", false, false, false, 216));
                    foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                        // line 217
                        echo "  
 
  
        <li>
          <div class=\"link\"> ";
                        // line 221
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 221), "html", null, true);
                        echo "<i class=\"fa fa-chevron-down\"></i></div>
          <ul class=\"submenu\">
              <li> 
                 <p class=\"block_description\">";
                        // line 224
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "description", [], "any", false, false, false, 224), "html", null, true);
                        echo "</p>
              </li>
          </ul>
      </li>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 228
                    echo "      
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "     

 
 
  </ul>
 














        
    </div>

  </div>
  <!-- col-8 end -->



</div>
<!-- inner_page end -->



 <!-- inner end -->

 
</main>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/inner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 232,  540 => 228,  529 => 224,  523 => 221,  517 => 217,  513 => 216,  509 => 215,  505 => 214,  499 => 213,  473 => 189,  461 => 185,  450 => 181,  444 => 180,  439 => 177,  435 => 176,  431 => 175,  427 => 174,  421 => 173,  410 => 164,  398 => 160,  387 => 156,  381 => 155,  376 => 152,  372 => 151,  368 => 150,  364 => 149,  358 => 148,  350 => 142,  338 => 138,  328 => 136,  324 => 135,  320 => 134,  316 => 133,  310 => 132,  301 => 125,  286 => 119,  282 => 118,  276 => 115,  272 => 114,  266 => 113,  261 => 110,  244 => 102,  240 => 101,  234 => 98,  226 => 93,  222 => 92,  216 => 91,  211 => 88,  195 => 81,  188 => 77,  184 => 76,  177 => 72,  173 => 71,  167 => 70,  162 => 67,  147 => 61,  143 => 60,  139 => 59,  132 => 55,  128 => 54,  122 => 53,  110 => 43,  94 => 36,  90 => 35,  86 => 34,  80 => 33,  56 => 12,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<main role=\"main\">


 <!-- inner start -->
<div class=\"header_title fit_image\"                  style=\"background-image: url({{'-wall.png'|media}});\">
    <div class=\"category_title\">Services</div>
    <nav aria-label=\"breadcrumb\">
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
        <li class=\"breadcrumb-item\"><a href=\"#\">Services</a></li>
        <li class=\"breadcrumb-item active\" aria-current=\"page\"><a href=\"#\">Inner Services</a></li>
      </ol>
    </nav> 
</div>



 
<!-- inner_page start -->
<div class=\"inner_page row\" >
  <div class=\"side_bar col-lg-4  col-md-4  col-sm-12  col-xs-12  \">
      <div class=\"side_bar_header\"><img src=\"images/logo1.png\" style=\"margin: 0px 9px 8px 0px;\"  width=\"15px\"/>Services</div>
 
      <ul class=\"navbar-nav navbar-nav \">
      
{% for record in records %}    
{% for row in record.services %}
{% if record.id == 3 %}  
      <li class=\"nav-item  nav_item_acitve\"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"side_link  fa  fa-chevron-right\"> <strong>{{ row.title }}</strong></div>   </a></li>  

    
     
{% endif %}
{% endfor %}
{% endfor %}
</ul>
  </div>

  <!-- col-8 start -->
      


  <div class=\" col-lg-8  col-md-8  col-sm-12  col-xs-12 \">


{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  


      <div class=\"block block1\">
        <p class=\"block_title\"> {{ row.block_1_title }}</p>
        <img src=\"{{ row.block_1_image|media }}\" width=\"100%\" />
        <p class=\"block_description\">{{ row.block_1_description }}</p>
    </div>  
     
{% endif %}
{% endfor %}
{% endfor %}



{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  

    <div class=\"block block2 row\">
          <div class=\"col-7 pr-0\">
              <p class=\"block_title mt-4\">{{ row.block_2_title }}</p>
              <p class=\"block_description\">{{ row.block_2_description }}</p>
          </div>
    
          <div class=\"col-5\">
                           <img src=\"{{ row.block_2_image|media }}\" width=\"100%\" />
          </div>
    </div>   
      
{% endif %}
{% endfor %}
{% endfor %}



{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  

    <div class=\"block block3 row\">
             
          <div class=\"col-5\">
                           <img src=\"{{ row.block_3_image|media }}\" width=\"100%\" />
          </div>
          <div class=\"col-7 pr-0\">
              <p class=\"block_title mt-4\">{{ row.block_3_title }}</p>
              <p class=\"block_description\">{{ row.block_3_description }}</p>
          </div>

    </div>   
      
{% endif %}
{% endfor %}
{% endfor %}



{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  

    <div class=\"block block4\">
       <p class=\"block_title\">{{ row.block_4_title }}</p>
       <p class=\"block_description\">      {{ row.block_4_description }}</p>
    </div>
      
{% endif %}
{% endfor %}
{% endfor %}

 


    
      <ul class=\"block_list\">
       
{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  
{% for r in row.block_list %}
 <li >{{ r.title }}   </li>
 
{% endfor %}      
{% endif %}
{% endfor %}
{% endfor %}
      </ul>

    <div class=\"block block5 row\">
    
    
    
{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  
{% for r in row.block_many_3 %}
  
  
           <div class=\"col-lg-4  col-md-4  col-sm-12  col-xs-12\">
            <p class=\"block_sub_title\">{{ r.title }} </p><img src=\"{{ r.image|media }} \" width=\"100%\" />
            <p class=\"block_description\">{{ r.descriptio }}  </p>
           </div>
  
  
{% endfor %}      
{% endif %}
{% endfor %}
{% endfor %}
    
    




    </div>
    <div class=\"block block5 row\">

{% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  
{% for r in row.block_many_4 %}
  
  
           <div class=\"col-lg-3  col-md-3  col-sm-12  col-xs-12\">
            <p class=\"block_sub_title\">{{ r.title }} </p><img src=\"{{ r.image|media }} \" width=\"100%\" />
            <p class=\"block_description\">{{ r.descriptio }}  </p>
           </div>
  
  
{% endfor %}      
{% endif %}
{% endfor %}
{% endfor %}
    
  </div>

    <div class=\"block block7 \">
  
        <p class=\"block_title\">Title</p> 

        










 
 

  <ul id=\"accordion\" class=\"accordion\">
     
     
     {% for record in records %}    
{% for row in record.inner %}
{% if record.id == 16 %}  
{% for r in row.block_accordion %}
  
 
  
        <li>
          <div class=\"link\"> {{ r.title }}<i class=\"fa fa-chevron-down\"></i></div>
          <ul class=\"submenu\">
              <li> 
                 <p class=\"block_description\">{{ r.description }}</p>
              </li>
          </ul>
      </li>
{% endfor %}      
{% endif %}
{% endfor %}
{% endfor %}
     

 
 
  </ul>
 














        
    </div>

  </div>
  <!-- col-8 end -->



</div>
<!-- inner_page end -->



 <!-- inner end -->

 
</main>", "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/inner.htm", "");
    }
}
