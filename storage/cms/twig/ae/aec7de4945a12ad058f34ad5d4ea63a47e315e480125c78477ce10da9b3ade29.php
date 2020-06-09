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

/* D:\wamp64\www\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm */
class __TwigTemplate_d704bd351c3b2196c2885718c7cf373fac9d435d153dfd2c1f64d7d1d6b841d5 extends \Twig\Template
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

       <div class=\"swiper-container swiper5  \">
        <div class=\"swiper-wrapper\">
  <!-- //////////// -->
 
 ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "solutions", [], "any", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 16
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 16) == 2)) {
                    echo "                
                    


      <div class=\"swiper-slide  slide5\">  <!--  carousel-item start -->
        <img src=\"";
                    // line 21
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, false, 21));
                    echo "\"  width=\"100%\" height=\"100%\"/>
         <div class=\"container\">

          <div class=\"carousel-caption text-left\">
            <div class=\"get_solution\">
            <h1>";
                    // line 26
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 26);
                    echo "  </h1> 
            <div class=\"descriptive_text\">";
                    // line 27
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 27), "html", null, true);
                    echo " </div>
            <p><a class=\"btn btn-lg request_a_quote my-10\"    href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "request_a_quote", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" role=\"button\">Request a Quote</a></p>  
            </div>
            




            <div class=\"white_box container row\"><!-- White box start -->

              <div class=\"inner_white_box col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                      <div class=\"logo_in_a_circle\"><img src=\"";
                    // line 38
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_1_image", [], "any", false, false, false, 38));
                    echo "\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                      <div class=\"white_box_title\"> ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_1_title", [], "any", false, false, false, 39), "html", null, true);
                    echo "\" </div>
                      <div class=\"white_box_description\">";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_1_description", [], "any", false, false, false, 40), "html", null, true);
                    echo " </div>
                       <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_1_link", [], "any", false, false, false, 41), "html", null, true);
                    echo " \" role=\"button\">Explorer</a>  
              </div><!-- inner_white_box end -->

              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"";
                    // line 45
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_2_image", [], "any", false, false, false, 45));
                    echo "\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> ";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_2_title", [], "any", false, false, false, 46), "html", null, true);
                    echo " </div>
                <div class=\"white_box_description\">";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_2_description", [], "any", false, false, false, 47), "html", null, true);
                    echo "  </div>
              </div><!-- inner_white_box end -->
              
              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"";
                    // line 51
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_3_image", [], "any", false, false, false, 51));
                    echo "\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> ";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_3_title", [], "any", false, false, false, 52), "html", null, true);
                    echo " </div>
                <div class=\"white_box_description\">";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_3_description", [], "any", false, false, false, 53), "html", null, true);
                    echo "  </div>
              </div><!-- inner_white_box end -->
              
              <div class=\"inner_white_box col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                      <div class=\"logo_in_a_circle\"><img src=\"";
                    // line 57
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "block_4_image", [], "any", false, false, false, 57));
                    echo "\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                      <div class=\"white_box_title\"> ";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_4_title", [], "any", false, false, false, 58), "html", null, true);
                    echo "\" </div>
                      <div class=\"white_box_description\">";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_4_description", [], "any", false, false, false, 59), "html", null, true);
                    echo " </div>
                       <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "block_4_link", [], "any", false, false, false, 60), "html", null, true);
                    echo " \" role=\"button\">Explorer</a>  
              </div><!-- inner_white_box end -->       
           </div><!-- White box end -->



<div class=\"footer_white_box row\">";
                    // line 66
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "footer", [], "any", false, false, false, 66);
                    echo "</div>





          </div>
      
        </div>







 







      </div>   <!--  carousel-item end -->
      
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
        // line 95
        echo "<!--  ////////////// -->
 
    </div>
     <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

 
<div class=\"section_header   \">
";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 115
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 115) == 15)) {
                echo "    
   <div class=\"section_logo\"><img src=\"";
                // line 116
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 116));
                echo "\" width=\"145\" height=\"30\"/></div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "
 ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
 ";
            // line 121
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 121) == 3)) {
                echo "    

  <div class=\"section_title\"> ";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 123), "html", null, true);
                echo "</div>
  <div class=\"section_description\">";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 124);
                echo " </div>
</div> 
      
 ";
            }
            // line 128
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
  <!-- Services start -->
  <div class=\"swiper-container swiper\">
    <div class=\"swiper-wrapper\">
    
";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "services", [], "any", false, false, false, 135));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 136
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 136) == 3)) {
                    echo "    
      <div class=\"swiper-slide\" style=\"height: 416.5px; background-image: url(";
                    // line 137
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "bg_image", [], "any", false, false, false, 137));
                    echo ");\">
          <div class=\"service\" >
            <div class=\"service_icon\" ><img  src=\"";
                    // line 139
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 139));
                    echo "\" /></div>
            <div class=\"service_title\" >";
                    // line 140
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 140), "html", null, true);
                    echo "</div>
            <div class=\"service_description\" >";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 141);
                    echo "</div>
            <a class=\"service_link\" href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 142), "html", null, true);
                    echo "\">Learn More</a>
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
        // line 149
        echo " 
    </div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
  <!-- Services end -->


<!-- Products start -->
<div class=\"products\"> 


<div class=\"section_header\" style=\"background-color: transparent;\">
";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 163
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 163) == 15)) {
                echo "    
   <div class=\"section_logo\"><img src=\"";
                // line 164
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 164));
                echo "\" width=\"145\" height=\"30\"/></div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "

";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 170) == 4)) {
                echo "    
  <div class=\"section_title\">";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 171), "html", null, true);
                echo "</div>
  <div class=\"section_description\">";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 172);
                echo "</div> 
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
</div> 



<div  class=\"swiper_con\">
<div class=\"swiper-container  swiper2 \">
  <div class=\"swiper-wrapper\">
   
   
   


 ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 189
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "products", [], "any", false, false, false, 189));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 190
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 190) == 4)) {
                    echo "                
                    
     <div class=\"swiper-slide slide2\">
                      <div class=\"col-md-6 fit-image products_image\" style=\" background-image: url(";
                    // line 193
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, false, 193));
                    echo ");\">   </div>
        <div class=\"col-md-6 product_";
                    // line 194
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "style", [], "any", false, false, false, 194), "html", null, true);
                    echo "\"    > 
            <div class=\"product_title\">";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 195), "html", null, true);
                    echo "  </div> 
            <div class=\"product_description\">";
                    // line 196
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 196);
                    echo "</div>
            <button class=\"btn\" type=\"submit\">Read More</button>
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
        // line 203
        echo " 
  </div>

 
</div>

<div class=\"swiper-button-prev  my_prev\"></div>
<div class=\"swiper-button-next   my_next\"></div>
</div>






</div> <!-- Products end -->




 


<!-- news start -->
<div class=\"news\"> <div class=\"news_con\"> 

<div class=\"news_header \"><!-- news header --> 
  <div class=\"section_header  \" style=\"background-color: transparent;\">
";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 232
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 232) == 15)) {
                echo "    
   <div class=\"section_logo\"><img src=\"";
                // line 233
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 233));
                echo "\" width=\"145\" height=\"30\"/></div>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        echo "
";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 238
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 238) == 1)) {
                echo "    
  <div class=\"section_title\">";
                // line 239
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 239), "html", null, true);
                echo "</div>
  <div class=\"section_description\">";
                // line 240
                echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 240);
                echo "</div> 
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        echo "
  </div> 
  <div   style=\"margin-top: -85px;\">       <button class=\"col-md-2 offset-md-10 btn view_all\"  type=\"submit\">View All</button></div>
</div><!-- news_header end -->

 
<div class=\"swiper-container latest_news-container\">
<div class=\" latest_news  swiper-wrapper   \">
 
 
 
";
        // line 254
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "news", [], "any", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 256
                echo "
";
                // line 257
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 257) == 1)) {
                    echo "                
                                
            <div class=\"  swiper-slide latest_news_block\">
            
                <div class=\"latest_news_image\" style=\"background-image: url(";
                    // line 261
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "mediafinder1", [], "any", false, false, false, 261));
                    echo ");  \"></div>
                <div class=\"latest_news_title\"> ";
                    // line 262
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 262), "html", null, true);
                    echo "</div>
                <ul class=\"about_news\"><li>";
                    // line 263
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 263), "html", null, true);
                    echo "</li><li>By ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "author", [], "any", false, false, false, 263), "html", null, true);
                    echo " </li></ul>
                <div class=\"latest_news_description\">";
                    // line 264
                    echo twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 264);
                    echo " </div>
                <button class=\"btn btn_read_more\" type=\"submit\">Read More</button>
              </div>
";
                }
                // line 268
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo " 
 


</div>
</div>
</div></div>
<!-- news end -->




<nav  class=\"navbar navbar-expand-md\" style=\"background-color: #f9f9f9;\">
   <div class=\"collapse navbar-collapse d-flex justify-content-end px-5 m-auto\" id=\"navbarCollapse\">
 
  <ul class=\"navbar-nav navbar-nav  flex-row m-auto \">
        ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
        ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "social", [], "any", false, false, false, 287));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 288
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 288) == 8)) {
                    echo "    
            <li class=\"nav-item \"> <a class=\"nav-link fa    ";
                    // line 289
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 289), "html", null, true);
                    echo "  dark mx-2\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 289), "html", null, true);
                    echo "> <span class=\"sr-only\"> </span> </a></li>       
        ";
                }
                // line 291
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        echo "  </ul>            
  </div>
</nav>



<div class=\"partners\">


 ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
 ";
            // line 303
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 303) == 5)) {
                echo "    
 
  <div class=\"partners_title\">  ";
                // line 305
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 305), "html", null, true);
                echo "</div>

 ";
            }
            // line 308
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "



<!-- partners start -->
<div class=\"swiper-container partners_container\">
  <div class=\"swiper-wrapper\">
 
 ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "partners", [], "any", false, false, false, 318));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 319
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 319) == 5)) {
                    echo "                
                    
     <div class=\"swiper-slide  partners_slide\"  style=\" height: 212px; background-image: url(";
                    // line 321
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, false, 321));
                    echo ");\"></div>

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
        // line 326
        echo "   
    
  </div>
 
</div>
<!-- partners end -->




<button class=\"btn partners_read_more\" type=\"submit\">Read More</button>
 
</div>



<!-- subscription start -->
 ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
 ";
            // line 344
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 344) == 6)) {
                echo "    
 



<div class=\"subscription\"    style=\"background-image: url(";
                // line 349
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "bg_image", [], "any", false, false, false, 349));
                echo ");\">
    <div class=\"section_logo\"><img src=\"";
                // line 350
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 350));
                echo "\" width=\"145\" height=\"30\"></div>
    <div class=\"subscription_title\">";
                // line 351
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 351), "html", null, true);
                echo "</div>
    <div class=\"subscription_description\">";
                // line 352
                echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 352);
                echo "</div>


    <div class=\"buttonInside\">
                  <input placeholder=\"Enter your email address\">
                  <button id=\"erase \" class=\"btn\">subscribe</button>
     </div>


</div>
      
 ";
            }
            // line 364
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "

<!-- subscription end -->

 


<div   class=\"footer row mx-0\">
  <div class=\" col-3\">
    ";
        // line 374
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 375
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 375) == 14)) {
                echo "    
          <div class=\"footer_contact_us_logo\"><img src=\"";
                // line 376
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 376));
                echo "\" width=\"130px\"></div>

";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "    
";
        // line 381
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 382
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 382) == 7)) {
                echo "    
    <div class=\"footer_contact_us_address mt-3\">";
                // line 383
                echo twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, false, 383);
                echo "</div>    
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 386
        echo "    

   
  <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9  flex-row \">
        ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
        ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "social", [], "any", false, false, false, 391));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 392
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 392) == 8)) {
                    echo "    
            <li class=\"nav-item \"> <a class=\"nav-link fa    ";
                    // line 393
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 393), "html", null, true);
                    echo "  dark mx-2\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 393), "html", null, true);
                    echo "> <span class=\"sr-only\"> </span> </a></li>       
        ";
                }
                // line 395
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 397
        echo "  </ul>
  
   </div>


<div class=\"footer_item col-2\">
<div class=\"footer_item_title\">Quick Links</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav     \">
";
        // line 406
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "quick_links", [], "any", false, false, false, 407));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 408
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 408) == 9)) {
                    echo "    
<li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\" ";
                    // line 409
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 409), "html", null, true);
                    echo " \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "caption", [], "any", false, false, false, 409), "html", null, true);
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
        // line 413
        echo "</ul>
</div>
</div>


<div class=\"footer_item col-2\">
<div class=\"footer_item_title\">Quick Links</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav      \">
";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 423
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "products", [], "any", false, false, false, 423));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 424
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 424) == 4)) {
                    echo "    
<li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\" ";
                    // line 425
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 425), "html", null, true);
                    echo " \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 425), "html", null, true);
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
        // line 429
        echo "</ul>
</div>
</div>

<div class=\"footer_item col-2\">
<div class=\"footer_item_title\">Quick Links</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav    \">
";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 438
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "services", [], "any", false, false, false, 438));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 439
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 439) == 3)) {
                    echo "    
<li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\" ";
                    // line 440
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 440), "html", null, true);
                    echo " \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 440), "html", null, true);
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
        // line 444
        echo "</ul>
</div>
</div>



<div class=\"footer_item col-3 \">
<div class=\"footer_item_title\">Latest posts from our blogs</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav    \">
";
        // line 454
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "posts", [], "any", false, false, false, 455));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 456
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 456) == 10)) {
                    echo "    
<li class=\"nav-item \"  style=\"border-bottom: 1px solid #c4c4c4;\"> <a class=\"nav-link dark mx-2  flex-row\" href=\" ";
                    // line 457
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 457), "html", null, true);
                    echo " \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 457), "html", null, true);
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
        // line 461
        echo "</ul>
</div>
</div>






</div>









</main>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1034 => 461,  1019 => 457,  1015 => 456,  1011 => 455,  1005 => 454,  993 => 444,  978 => 440,  974 => 439,  970 => 438,  964 => 437,  954 => 429,  939 => 425,  935 => 424,  931 => 423,  925 => 422,  914 => 413,  899 => 409,  895 => 408,  891 => 407,  885 => 406,  874 => 397,  868 => 396,  862 => 395,  855 => 393,  850 => 392,  846 => 391,  840 => 390,  834 => 386,  825 => 383,  821 => 382,  815 => 381,  812 => 380,  802 => 376,  798 => 375,  792 => 374,  781 => 365,  775 => 364,  760 => 352,  756 => 351,  752 => 350,  748 => 349,  740 => 344,  734 => 343,  715 => 326,  701 => 321,  696 => 319,  692 => 318,  688 => 317,  678 => 309,  672 => 308,  666 => 305,  661 => 303,  655 => 302,  644 => 293,  638 => 292,  632 => 291,  625 => 289,  620 => 288,  616 => 287,  610 => 286,  592 => 270,  581 => 268,  574 => 264,  568 => 263,  564 => 262,  560 => 261,  553 => 257,  550 => 256,  546 => 255,  542 => 254,  529 => 243,  520 => 240,  516 => 239,  512 => 238,  506 => 237,  503 => 236,  494 => 233,  490 => 232,  484 => 231,  454 => 203,  438 => 196,  434 => 195,  430 => 194,  426 => 193,  420 => 190,  416 => 189,  412 => 188,  397 => 175,  388 => 172,  384 => 171,  380 => 170,  374 => 169,  370 => 167,  361 => 164,  357 => 163,  351 => 162,  336 => 149,  320 => 142,  316 => 141,  312 => 140,  308 => 139,  303 => 137,  299 => 136,  295 => 135,  289 => 134,  282 => 129,  276 => 128,  269 => 124,  265 => 123,  260 => 121,  254 => 120,  251 => 119,  242 => 116,  238 => 115,  232 => 114,  211 => 95,  173 => 66,  164 => 60,  160 => 59,  156 => 58,  152 => 57,  145 => 53,  141 => 52,  137 => 51,  130 => 47,  126 => 46,  122 => 45,  115 => 41,  111 => 40,  107 => 39,  103 => 38,  90 => 28,  86 => 27,  82 => 26,  74 => 21,  66 => 16,  62 => 15,  58 => 14,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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

       <div class=\"swiper-container swiper5  \">
        <div class=\"swiper-wrapper\">
  <!-- //////////// -->
 
 {% for record in records %}
{% for row in record.solutions %}
{% if record.id == 2 %}                
                    


      <div class=\"swiper-slide  slide5\">  <!--  carousel-item start -->
        <img src=\"{{row.bg_image |media}}\"  width=\"100%\" height=\"100%\"/>
         <div class=\"container\">

          <div class=\"carousel-caption text-left\">
            <div class=\"get_solution\">
            <h1>{{ row.title|raw  }}  </h1> 
            <div class=\"descriptive_text\">{{ row.description }} </div>
            <p><a class=\"btn btn-lg request_a_quote my-10\"    href=\"{{ row.request_a_quote }}\" role=\"button\">Request a Quote</a></p>  
            </div>
            




            <div class=\"white_box container row\"><!-- White box start -->

              <div class=\"inner_white_box col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                      <div class=\"logo_in_a_circle\"><img src=\"{{row.block_1_image |media}}\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                      <div class=\"white_box_title\"> {{ row.block_1_title }}\" </div>
                      <div class=\"white_box_description\">{{ row.block_1_description }} </div>
                       <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"{{ row.block_1_link }} \" role=\"button\">Explorer</a>  
              </div><!-- inner_white_box end -->

              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"{{row.block_2_image |media}}\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> {{ row.block_2_title }} </div>
                <div class=\"white_box_description\">{{ row.block_2_description }}  </div>
              </div><!-- inner_white_box end -->
              
              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"{{row.block_3_image |media}}\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> {{ row.block_3_title }} </div>
                <div class=\"white_box_description\">{{ row.block_3_description }}  </div>
              </div><!-- inner_white_box end -->
              
              <div class=\"inner_white_box col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                      <div class=\"logo_in_a_circle\"><img src=\"{{row.block_4_image |media}}\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                      <div class=\"white_box_title\"> {{ row.block_4_title }}\" </div>
                      <div class=\"white_box_description\">{{ row.block_4_description }} </div>
                       <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"{{ row.block_4_link }} \" role=\"button\">Explorer</a>  
              </div><!-- inner_white_box end -->       
           </div><!-- White box end -->



<div class=\"footer_white_box row\">{{ row.footer|raw }}</div>





          </div>
      
        </div>







 







      </div>   <!--  carousel-item end -->
      
{% endif %}
{% endfor %}
{% endfor %}
<!--  ////////////// -->
 
    </div>
     <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

 
<div class=\"section_header   \">
{% for record in records %}    
{% if record.id == 15 %}    
   <div class=\"section_logo\"><img src=\"{{ record.image|media}}\" width=\"145\" height=\"30\"/></div>
{% endif %}
{% endfor %}

 {% for record in records %}    
 {% if record.id == 3 %}    

  <div class=\"section_title\"> {{ record.title }}</div>
  <div class=\"section_description\">{{ record.description|raw }} </div>
</div> 
      
 {% endif %}
 {% endfor %}

  <!-- Services start -->
  <div class=\"swiper-container swiper\">
    <div class=\"swiper-wrapper\">
    
{% for record in records %}    
{% for row in record.services %}
{% if record.id == 3 %}    
      <div class=\"swiper-slide\" style=\"height: 416.5px; background-image: url({{row.bg_image |media}});\">
          <div class=\"service\" >
            <div class=\"service_icon\" ><img  src=\"{{row.icon |media}}\" /></div>
            <div class=\"service_title\" >{{row.title }}</div>
            <div class=\"service_description\" >{{row.description|raw }}</div>
            <a class=\"service_link\" href=\"{{row.link }}\">Learn More</a>
          </div>
      </div>
      
 {% endif %}
{% endfor %}
{% endfor %}
 
    </div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
  <!-- Services end -->


<!-- Products start -->
<div class=\"products\"> 


<div class=\"section_header\" style=\"background-color: transparent;\">
{% for record in records %}    
{% if record.id == 15 %}    
   <div class=\"section_logo\"><img src=\"{{ record.image|media}}\" width=\"145\" height=\"30\"/></div>
{% endif %}
{% endfor %}


{% for record in records %}    
{% if record.id == 4 %}    
  <div class=\"section_title\">{{ record.title}}</div>
  <div class=\"section_description\">{{ record.description|raw}}</div> 
{% endif %}
{% endfor %}

</div> 



<div  class=\"swiper_con\">
<div class=\"swiper-container  swiper2 \">
  <div class=\"swiper-wrapper\">
   
   
   


 {% for record in records %}
{% for row in record.products %}
{% if record.id == 4 %}                
                    
     <div class=\"swiper-slide slide2\">
                      <div class=\"col-md-6 fit-image products_image\" style=\" background-image: url({{row.image |media}});\">   </div>
        <div class=\"col-md-6 product_{{ row.style }}\"    > 
            <div class=\"product_title\">{{ row.title }}  </div> 
            <div class=\"product_description\">{{ row.description|raw }}</div>
            <button class=\"btn\" type=\"submit\">Read More</button>
        </div>
    </div>
{% endif %}
{% endfor %}
{% endfor %}
 
  </div>

 
</div>

<div class=\"swiper-button-prev  my_prev\"></div>
<div class=\"swiper-button-next   my_next\"></div>
</div>






</div> <!-- Products end -->




 


<!-- news start -->
<div class=\"news\"> <div class=\"news_con\"> 

<div class=\"news_header \"><!-- news header --> 
  <div class=\"section_header  \" style=\"background-color: transparent;\">
{% for record in records %}    
{% if record.id == 15 %}    
   <div class=\"section_logo\"><img src=\"{{ record.image|media}}\" width=\"145\" height=\"30\"/></div>
{% endif %}
{% endfor %}

{% for record in records %}    
{% if record.id == 1 %}    
  <div class=\"section_title\">{{ record.title}}</div>
  <div class=\"section_description\">{{ record.description|raw}}</div> 
{% endif %}
{% endfor %}

  </div> 
  <div   style=\"margin-top: -85px;\">       <button class=\"col-md-2 offset-md-10 btn view_all\"  type=\"submit\">View All</button></div>
</div><!-- news_header end -->

 
<div class=\"swiper-container latest_news-container\">
<div class=\" latest_news  swiper-wrapper   \">
 
 
 
{% for record in records %}
{% for row in record.news %}

{% if record.id == 1 %}                
                                
            <div class=\"  swiper-slide latest_news_block\">
            
                <div class=\"latest_news_image\" style=\"background-image: url({{row.mediafinder1 |media}});  \"></div>
                <div class=\"latest_news_title\"> {{ row.title }}</div>
                <ul class=\"about_news\"><li>{{ row.category }}</li><li>By {{ row.author }} </li></ul>
                <div class=\"latest_news_description\">{{ row.description|raw }} </div>
                <button class=\"btn btn_read_more\" type=\"submit\">Read More</button>
              </div>
{% endif %}

{% endfor %}
{% endfor %} 
 


</div>
</div>
</div></div>
<!-- news end -->




<nav  class=\"navbar navbar-expand-md\" style=\"background-color: #f9f9f9;\">
   <div class=\"collapse navbar-collapse d-flex justify-content-end px-5 m-auto\" id=\"navbarCollapse\">
 
  <ul class=\"navbar-nav navbar-nav  flex-row m-auto \">
        {% for record in records %}    
        {% for row in record.social %}
        {% if record.id == 8 %}    
            <li class=\"nav-item \"> <a class=\"nav-link fa    {{ row.icon  }}  dark mx-2\" href=\"{{ row.link  }}> <span class=\"sr-only\"> </span> </a></li>       
        {% endif %}
        {% endfor %}
        {% endfor %}
  </ul>            
  </div>
</nav>



<div class=\"partners\">


 {% for record in records %}    
 {% if record.id == 5 %}    
 
  <div class=\"partners_title\">  {{ record.title  }}</div>

 {% endif %}
 {% endfor %}




<!-- partners start -->
<div class=\"swiper-container partners_container\">
  <div class=\"swiper-wrapper\">
 
 {% for record in records %}
{% for row in record.partners %}
{% if record.id == 5 %}                
                    
     <div class=\"swiper-slide  partners_slide\"  style=\" height: 212px; background-image: url({{row.image |media}});\"></div>

{% endif %}
{% endfor %}
{% endfor %}
   
    
  </div>
 
</div>
<!-- partners end -->




<button class=\"btn partners_read_more\" type=\"submit\">Read More</button>
 
</div>



<!-- subscription start -->
 {% for record in records %}    
 {% if record.id == 6 %}    
 



<div class=\"subscription\"    style=\"background-image: url({{ record.bg_image|media  }});\">
    <div class=\"section_logo\"><img src=\"{{ record.image|media  }}\" width=\"145\" height=\"30\"></div>
    <div class=\"subscription_title\">{{ record.title  }}</div>
    <div class=\"subscription_description\">{{ record.description|raw  }}</div>


    <div class=\"buttonInside\">
                  <input placeholder=\"Enter your email address\">
                  <button id=\"erase \" class=\"btn\">subscribe</button>
     </div>


</div>
      
 {% endif %}
 {% endfor %}


<!-- subscription end -->

 


<div   class=\"footer row mx-0\">
  <div class=\" col-3\">
    {% for record in records %}    
{% if record.id == 14 %}    
          <div class=\"footer_contact_us_logo\"><img src=\"{{ record.image|media}}\" width=\"130px\"></div>

{% endif %}
{% endfor %}
    
{% for record in records %}    
{% if record.id == 7 %}    
    <div class=\"footer_contact_us_address mt-3\">{{ record.description|raw }}</div>    
{% endif %}
{% endfor %}
    

   
  <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9  flex-row \">
        {% for record in records %}    
        {% for row in record.social %}
        {% if record.id == 8 %}    
            <li class=\"nav-item \"> <a class=\"nav-link fa    {{ row.icon  }}  dark mx-2\" href=\"{{ row.link  }}> <span class=\"sr-only\"> </span> </a></li>       
        {% endif %}
        {% endfor %}
        {% endfor %}
  </ul>
  
   </div>


<div class=\"footer_item col-2\">
<div class=\"footer_item_title\">Quick Links</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav     \">
{% for record in records %}    
{% for row in record.quick_links %}
{% if record.id == 9 %}    
<li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\" {{ row.link  }} \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> {{ row.caption  }}</strong></div>   </a></li>  
{% endif %}
{% endfor %}
{% endfor %}
</ul>
</div>
</div>


<div class=\"footer_item col-2\">
<div class=\"footer_item_title\">Quick Links</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav      \">
{% for record in records %}    
{% for row in record.products %}
{% if record.id == 4 %}    
<li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\" {{ row.link  }} \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> {{ row.title  }}</strong></div>   </a></li>  
{% endif %}
{% endfor %}
{% endfor %}
</ul>
</div>
</div>

<div class=\"footer_item col-2\">
<div class=\"footer_item_title\">Quick Links</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav    \">
{% for record in records %}    
{% for row in record.services %}
{% if record.id == 3 %}    
<li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\" {{ row.link  }} \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> {{ row.title  }}</strong></div>   </a></li>  
{% endif %}
{% endfor %}
{% endfor %}
</ul>
</div>
</div>



<div class=\"footer_item col-3 \">
<div class=\"footer_item_title\">Latest posts from our blogs</div>
<div class=\"footer_item_data\">
<ul class=\"navbar-nav navbar-nav    \">
{% for record in records %}    
{% for row in record.posts %}
{% if record.id == 10 %}    
<li class=\"nav-item \"  style=\"border-bottom: 1px solid #c4c4c4;\"> <a class=\"nav-link dark mx-2  flex-row\" href=\" {{ row.link  }} \"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong> {{ row.title  }}</strong></div>   </a></li>  
{% endif %}
{% endfor %}
{% endfor %}
</ul>
</div>
</div>






</div>









</main>", "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
