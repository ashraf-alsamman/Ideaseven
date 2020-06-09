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
class __TwigTemplate_859fd4f28347de2e4d102105d02595e54a10911d5b97ea755579946c75a540bb extends \Twig\Template
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
 
 
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Ashraf Alsamman\">
    <meta name=\"generator\" content=\"Jekyll v4.0.1\">
    <title> </title>


    <!-- Bootstrap core CSS -->
 

<link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/swiper.min.css");
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/mycss.css");
        echo "\" rel=\"stylesheet\">
 
  
                                <link href=  \"https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css \" rel=\"stylesheet\">
                                <link href=\" https://use.fontawesome.com/releases/v4.7.0/fonts/fontawesome-webfont.woff2 \" rel=\"stylesheet\">
                                <link href=\" https://use.fontawesome.com/718c33fc74.css \" rel=\"stylesheet\">
 

 
  
 
    <!-- Custom styles for this template -->
  </head>
  <body class=\"   \">

    <header>
<ul class=\"record-list\">


      <nav class=\"navbar   nav_top   \">
 
        <div class=\"collapse navbar-collapse d-flex justify-content-end px-5\" id=\"navbarCollapse\">
          <ul class=\"navbar-nav navbar-nav     flex-row \">
            <li class=\"nav-item \">
               <a class=\"nav-link fa  fa-twitter dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>

             <li class=\"nav-item\">
               <a class=\"nav-link fa fa-facebook dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>        
            
              <li class=\"nav-item\">
               <a class=\"nav-link fa fa-linkedin dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>              
  
             <li class=\"nav-item\">
               <a class=\"nav-link fa fa-youtube-play dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>           

             <li class=\"nav-item\">
               <a class=\"nav-link fa fa-instagram dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>   
          </ul>
          <form class=\"form-inline mt-2 mt-md-0     col-lg-2  col-md-2  col-sm-5  col-xs-5 \"   >
             <button class=\"btn    request my-2 my-sm-0\" type=\"submit\">Request a Quote</button>
          </form>
        </div>
      </nav>
 
   <nav class=\" navbar navbar-expand-lg navbar-light bg-light  main_menu d-flex justify-content-between\">
 
    <button class=\" navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"fa  fa-bars\"></i>
    </button>
 
     <img src=\"images/logo_with_text.png\" alt=\"...\" class=\"Responsive image main_logo\">

    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active dark\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Home <span class=\"sr-only\">(current)</span></a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Company Profile</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Products</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Services</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Using Intergaz</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Safety</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>News</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Contact US</a> </li>

 
        <li class=\"nav-item\" id=\"search\">   
       <input type=\"text\" placeholder=\"Search\" class=\"search_input\">
       <div class=\"search_btn\">
         <i class=\"fa fa-search dark\" aria-hidden=\"true\"></i>
       </div>

      </li>
 
      </ul>
 
    </div>
  </nav>
</header>

<main role=\"main\">

       <div class=\"swiper-container swiper5  \">
        <div class=\"swiper-wrapper\">
 
      <div class=\"swiper-slide  slide5\">  <!--  carousel-item start -->
        <img src=\"images/-wall.png\"  width=\"100%\" height=\"100%\"/>
         <div class=\"container\">

          <div class=\"carousel-caption text-left\">
            <div class=\"get_solution\">
            <h1>Your Solution To <br /> Gas Energy.</h1> 
            <div class=\"descriptive_text\">Inergaz Ltd is one of the leading companies in the importing,strong,<br />
              bottling and destribution of Lequefied Pertoleum Gas (LPG) in Cyprus.bottling  </div>
            <p><a class=\"btn btn-lg request_a_quote my-10\"    href=\"#\" role=\"button\">Request a Quote</a></p>  
            </div>
            




            <div class=\"white_box container row\"><!-- White box start -->

              <div class=\"inner_white_box col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                      <div class=\"logo_in_a_circle\"><img src=\"images/logo1.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                      <div class=\"white_box_title\"> Wellcome </div>
                      <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
                       <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"#\" role=\"button\">Explorer</a>  
              </div><!-- inner_white_box end -->

              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"images/icon2.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> LPG Equipement </div>
                <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
              </div><!-- inner_white_box end -->
              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"images/icon2.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> LPG Equipement </div>
                <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
              </div><!-- inner_white_box end -->
              
              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                <div class=\"logo_in_a_circle\"><img src=\"images/logo1.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                <div class=\"white_box_title\"> Wellcome </div>
                <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
                 <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"#\" role=\"button\">Explorer</a>   
        </div><!-- inner_white_box end -->         
           </div><!-- White box end -->



<div class=\"footer_white_box row\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>





          </div>
      
        </div>







 







      </div>   <!--  carousel-item end -->
 
 
    </div>
 
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<div class=\"section_header   \">
  <div class=\"section_logo\"><img src=\"images/image8.jpg\" width=\"145\" height=\"30\"/></div>
  <div class=\"section_title\">Our Services</div>
  <div class=\"section_description\">we serve a vairety of purposes</div>
</div> 


  <!-- Services start -->
  <div class=\"swiper-container swiper\">
    <div class=\"swiper-wrapper\">
      <div class=\"swiper-slide\" style=\" background-image: url(images/image2.png);\">
          <div class=\"service\" >
            <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
            <div class=\"service_title\" >For Home</div>
            <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
            <a class=\"service_link\" >Learn More</a>
          </div>
      </div>
      <div class=\"swiper-slide\" style=\" background-image: url(images/image3.png);\">
        <div class=\"service\" >
              <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
              <div class=\"service_title\" >For Home</div>
              <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
              <a class=\"service_link\" >Learn More</a>
        </div>
    </div>
    <div class=\"swiper-slide\" style=\" background-image: url(images/image2.png);\">
      <div class=\"service\" >
        <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
        <div class=\"service_title\" >For Home</div>
        <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <a class=\"service_link\" >Learn More</a>
      </div>
  </div>
  <div class=\"swiper-slide\" style=\" background-image: url(images/image2.png);\">
    <div class=\"service\" >
      <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
      <div class=\"service_title\" >For Home</div>
      <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
      <a class=\"service_link\" >Learn More</a>
    </div>
</div>
    </div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
  <!-- Services end -->


<!-- Products start -->
<div class=\"products\"> 


<div class=\"section_header\" style=\"background-color: transparent;\">
  <div class=\"section_logo\"><img src=\"images/image7.png\" width=\"145\" height=\"30\"/></div>
  <div class=\"section_title\">Our Products</div>
  <div class=\"section_description\">high quality products for high quality customers</div>
</div> 



<div  class=\"swiper_con\">
<div class=\"swiper-container  swiper2 \">
  <div class=\"swiper-wrapper\">
   
    <div class=\"swiper-slide slide2\">
        <div class=\"col-md-6 fit-image products_image\" style=\" background-image: url(images/image11.png);\">   </div>
        <div class=\"col-md-6 product_blue   product_details\" > 
            <div class=\"product_title\">Steel Cylinders</div> 
            <div class=\"product_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</div>
            <button class=\"btn\" type=\"submit\">Read More</button>
        </div>
    </div>

    <div class=\"swiper-slide slide2\">
      <div class=\"col-md-6 fit-image products_image\" style=\" background-image: url(images/image11.png);\">   </div>
      <div class=\"col-md-6 product_red   product_details\" > 
          <div class=\"product_title\">Steel Cylinders</div> 
          <div class=\"product_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</div>
          <button class=\"btn\" type=\"submit\">Read More</button>
      </div>
  </div>
 
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
    <div class=\"section_logo\"><img src=\"images/image7.png\" width=\"145\" height=\"30\"/></div>
    <div class=\"section_title\">Latest News</div>
    <div class=\"section_description\">education is the key</div>
  </div> 
  <div   style=\"margin-top: -85px;\">       <button class=\"col-md-2 offset-md-10 btn view_all\"  type=\"submit\">View All</button></div>
</div><!-- news_header end -->

 
<div class=\"swiper-container latest_news-container\">
<div class=\" latest_news  swiper-wrapper   \">
 
 
 
";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "news", [], "any", false, false, false, 318));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 319
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 319) == 1)) {
                    echo "                
                    
<div class=\"  swiper-slide latest_news_block\">

    <div class=\"latest_news_image\" style=\"background-image: url(";
                    // line 323
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["row"], "mediafinder1", [], "any", false, false, false, 323));
                    echo ");  \"></div>
    <div class=\"latest_news_title\"> ";
                    // line 324
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "title", [], "any", false, false, false, 324), "html", null, true);
                    echo "</div>
    <ul class=\"about_news\"><li>";
                    // line 325
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "category", [], "any", false, false, false, 325), "html", null, true);
                    echo "</li><li>By ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "author", [], "any", false, false, false, 325), "html", null, true);
                    echo " </li></ul>
    <div class=\"latest_news_description\">";
                    // line 326
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "description", [], "any", false, false, false, 326), "html", null, true);
                    echo " </div>
    <button class=\"btn btn_read_more\" type=\"submit\">Read More</button>
  </div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "                     
                    
                
    

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo " 
 


</div>
</div>
</div></div>
<!-- news end -->




<nav  class=\"navbar navbar-expand-md\" style=\"background-color: #f9f9f9;\">
   <div class=\"collapse navbar-collapse d-flex justify-content-end px-5 m-auto\" id=\"navbarCollapse\">
    <ul class=\"navbar-nav navbar-nav  flex-row m-auto\">
      <li class=\"nav-item \">
         <a class=\"nav-link fa  fa-twitter dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>

       <li class=\"nav-item\">
         <a class=\"nav-link fa fa-facebook dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>        
      
        <li class=\"nav-item\">
         <a class=\"nav-link fa fa-linkedin dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>              

       <li class=\"nav-item\">
         <a class=\"nav-link fa fa-youtube-play dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>           
    </ul>
  </div>
</nav>



<div class=\"partners\">
  <div class=\"partners_title\">partners</div>







<!-- Services start -->
<div class=\"swiper-container partners_container\">
  <div class=\"swiper-wrapper\">
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
  </div>
 
</div>
<!-- Services end -->




<button class=\"btn partners_read_more\" type=\"submit\">Read More</button>
 
</div>



<!-- subscription start -->
<div class=\"subscription\"    style=\"background-image: url(images/image90.png);\">
    <div class=\"section_logo\"><img src=\"images/image7.png\" width=\"145\" height=\"30\"></div>
    <div class=\"subscription_title\">Subscribe to our Newsletter</div>
    <div class=\"subscription_description\">got to know fitst our <strong>flaming hot </strong> news</div>


    <div class=\"buttonInside\">
                  <input placeholder=\"Enter your email address\">
                  <button id=\"erase \" class=\"btn\">subscribe</button>
     </div>


</div>
<!-- subscription end -->

 


<div   class=\"footer row mx-0\">
  <div class=\"footer_contact_us\">
    <div class=\"footer_contact_us_logo\"><img src=\"images/logo_with_text.png\" width=\"130px\"></div>
    <div class=\"footer_contact_us_address mt-3\">Larnaca-Dekeleia Road,<br>P.O BOX 40365 ,<br> 6303 Larnaca, Cyprus</div>
    
    <div class=\"mt-3\">
      <div class=\"footer_contact_us_row\">T:7777 0606</div>
      <div class=\"footer_contact_us_row\">T:+357 24 821 666</div>
      <div class=\"footer_contact_us_row\">E:info@intergaz.com.cy</div>
    </div>
         <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9  flex-row \">
            <li class=\"nav-item \"> <a class=\"nav-link fa  fa-twitter dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-facebook dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-linkedin dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-youtube-play dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-instagram dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
         </ul>
   </div>


<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>

<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>

<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>


<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>






</div>









</main>

<footer class=\"footer  footer_buttom mx-0\">
  <div class=\"row mx-0\">
    <div class=\"col-sm text-center\">@2020 Intergaz Ltd.All right reserved</div>
    <div class=\"col-sm text-center\"> Design by ideaseven</div>
    <div class=\"col-sm text-center\">  Terms & Conditions | Privacy Policy | Cooking Policy    </div>
  </div>
</footer>

 


 




 

<script src=\"";
        // line 549
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\" ></script>
<script src=\"";
        // line 550
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ontawesome.js");
        echo "\" ></script>
<script src=\"";
        // line 551
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\" ></script>
<script src=\"";
        // line 552
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper.min.js");
        echo "\" ></script>
 
<script>

     \$(\".search_input\").hide( );
  \$(\".search_btn\").click(function(){
       \$(\".search_input\").show( );
      \$(\".search_input\").toggleClass(\"active\").focus;
      \$(this).toggleClass(\"animate\");
      \$(\".search_input\").val(\"\");
});

 

function pc (){
var swiper = new Swiper('.swiper', {  slidesPerView: 3,  spaceBetween: 0,
      pagination: { el: '.swiper-pagination', clickable: true, }, });

var swiper3 = new Swiper('.partners_container', { slidesPerView: 5, spaceBetween:10, });
 
var swiper2 = new Swiper('.swiper2', { slidesPerView: 2, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper4 = new Swiper('.latest_news-container', { slidesPerView: 2, spaceBetween: 30, slidesPerGroup: 2,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper5 = new Swiper('.swiper5', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.carousel-control-next', prevEl: '.carousel-control-prev', }, });      
      
}
function mobile (){
  var swiper = new Swiper('.swiper', {  slidesPerView: 1,  spaceBetween: 0,
      pagination: { el: '.swiper-pagination', clickable: true, }, });

var swiper3 = new Swiper('.partners_container', { slidesPerView: 5, spaceBetween:10, });
 
var swiper2 = new Swiper('.swiper2', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper4 = new Swiper('.latest_news-container', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper5 = new Swiper('.swiper5', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.carousel-control-next', prevEl: '.carousel-control-prev', }, });    
}



function getResponsive(x) {
  if (x.matches) { // If media query matches
        mobile ();
}else{
  pc () ;
}

}

var x = window.matchMedia(\"(max-width: 780px)\")
getResponsive(x) // Call listener function at run time
x.addListener(getResponsive) // Attach listener function on state changes


 

var x = window.matchMedia(\"(max-width: 780px)\")
getResponsive(x) // Call listener function at run time
x.addListener(getResponsive) // Attach listener function on state changes

  

</script>
    </body>
</html>";
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
        return array (  648 => 552,  644 => 551,  640 => 550,  636 => 549,  421 => 336,  410 => 331,  399 => 326,  393 => 325,  389 => 324,  385 => 323,  378 => 319,  374 => 318,  370 => 317,  76 => 26,  72 => 25,  68 => 24,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

 
 
<!doctype html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Ashraf Alsamman\">
    <meta name=\"generator\" content=\"Jekyll v4.0.1\">
    <title> </title>


    <!-- Bootstrap core CSS -->
 

<link href=\"{{ 'assets/css/bootstrap.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/swiper.min.css'|theme }}\" rel=\"stylesheet\">
<link href=\"{{ 'assets/css/mycss.css'|theme }}\" rel=\"stylesheet\">
 
  
                                <link href=  \"https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css \" rel=\"stylesheet\">
                                <link href=\" https://use.fontawesome.com/releases/v4.7.0/fonts/fontawesome-webfont.woff2 \" rel=\"stylesheet\">
                                <link href=\" https://use.fontawesome.com/718c33fc74.css \" rel=\"stylesheet\">
 

 
  
 
    <!-- Custom styles for this template -->
  </head>
  <body class=\"   \">

    <header>
<ul class=\"record-list\">


      <nav class=\"navbar   nav_top   \">
 
        <div class=\"collapse navbar-collapse d-flex justify-content-end px-5\" id=\"navbarCollapse\">
          <ul class=\"navbar-nav navbar-nav     flex-row \">
            <li class=\"nav-item \">
               <a class=\"nav-link fa  fa-twitter dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>

             <li class=\"nav-item\">
               <a class=\"nav-link fa fa-facebook dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>        
            
              <li class=\"nav-item\">
               <a class=\"nav-link fa fa-linkedin dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>              
  
             <li class=\"nav-item\">
               <a class=\"nav-link fa fa-youtube-play dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>           

             <li class=\"nav-item\">
               <a class=\"nav-link fa fa-instagram dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
            </li>   
          </ul>
          <form class=\"form-inline mt-2 mt-md-0     col-lg-2  col-md-2  col-sm-5  col-xs-5 \"   >
             <button class=\"btn    request my-2 my-sm-0\" type=\"submit\">Request a Quote</button>
          </form>
        </div>
      </nav>
 
   <nav class=\" navbar navbar-expand-lg navbar-light bg-light  main_menu d-flex justify-content-between\">
 
    <button class=\" navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"fa  fa-bars\"></i>
    </button>
 
     <img src=\"images/logo_with_text.png\" alt=\"...\" class=\"Responsive image main_logo\">

    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
      <ul class=\"navbar-nav mr-auto\">
        <li class=\"nav-item active dark\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Home <span class=\"sr-only\">(current)</span></a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Company Profile</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Products</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Services</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Using Intergaz</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Safety</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>News</a> </li>
        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"#\"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>Contact US</a> </li>

 
        <li class=\"nav-item\" id=\"search\">   
       <input type=\"text\" placeholder=\"Search\" class=\"search_input\">
       <div class=\"search_btn\">
         <i class=\"fa fa-search dark\" aria-hidden=\"true\"></i>
       </div>

      </li>
 
      </ul>
 
    </div>
  </nav>
</header>

<main role=\"main\">

       <div class=\"swiper-container swiper5  \">
        <div class=\"swiper-wrapper\">
 
      <div class=\"swiper-slide  slide5\">  <!--  carousel-item start -->
        <img src=\"images/-wall.png\"  width=\"100%\" height=\"100%\"/>
         <div class=\"container\">

          <div class=\"carousel-caption text-left\">
            <div class=\"get_solution\">
            <h1>Your Solution To <br /> Gas Energy.</h1> 
            <div class=\"descriptive_text\">Inergaz Ltd is one of the leading companies in the importing,strong,<br />
              bottling and destribution of Lequefied Pertoleum Gas (LPG) in Cyprus.bottling  </div>
            <p><a class=\"btn btn-lg request_a_quote my-10\"    href=\"#\" role=\"button\">Request a Quote</a></p>  
            </div>
            




            <div class=\"white_box container row\"><!-- White box start -->

              <div class=\"inner_white_box col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                      <div class=\"logo_in_a_circle\"><img src=\"images/logo1.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                      <div class=\"white_box_title\"> Wellcome </div>
                      <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
                       <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"#\" role=\"button\">Explorer</a>  
              </div><!-- inner_white_box end -->

              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"images/icon2.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> LPG Equipement </div>
                <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
              </div><!-- inner_white_box end -->
              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12 \"><!-- inner_white_boxstart -->
                <div class=  \" justify-content-center\"><img src=\"images/icon2.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\">  <div  class=\"logo_with_bottom_border\">qq</div></div>
                <div class=\"white_box_title\"> LPG Equipement </div>
                <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
              </div><!-- inner_white_box end -->
              
              <div class=\"inner_white_box  col-lg-3 col-md-3 col-sm-12 col-xs-12  \"><!-- inner_white_boxstart -->
                <div class=\"logo_in_a_circle\"><img src=\"images/logo1.png\" alt=\"...\"   width=\"40px\"  class=\"Responsive image logo_with_text\"></div>
                <div class=\"white_box_title\"> Wellcome </div>
                <div class=\"white_box_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been  </div>
                 <a class=\"btn btn-lg btn-primary btn_explorer\" href=\"#\" role=\"button\">Explorer</a>   
        </div><!-- inner_white_box end -->         
           </div><!-- White box end -->



<div class=\"footer_white_box row\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</div>





          </div>
      
        </div>







 







      </div>   <!--  carousel-item end -->
 
 
    </div>
 
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<div class=\"section_header   \">
  <div class=\"section_logo\"><img src=\"images/image8.jpg\" width=\"145\" height=\"30\"/></div>
  <div class=\"section_title\">Our Services</div>
  <div class=\"section_description\">we serve a vairety of purposes</div>
</div> 


  <!-- Services start -->
  <div class=\"swiper-container swiper\">
    <div class=\"swiper-wrapper\">
      <div class=\"swiper-slide\" style=\" background-image: url(images/image2.png);\">
          <div class=\"service\" >
            <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
            <div class=\"service_title\" >For Home</div>
            <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
            <a class=\"service_link\" >Learn More</a>
          </div>
      </div>
      <div class=\"swiper-slide\" style=\" background-image: url(images/image3.png);\">
        <div class=\"service\" >
              <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
              <div class=\"service_title\" >For Home</div>
              <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
              <a class=\"service_link\" >Learn More</a>
        </div>
    </div>
    <div class=\"swiper-slide\" style=\" background-image: url(images/image2.png);\">
      <div class=\"service\" >
        <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
        <div class=\"service_title\" >For Home</div>
        <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
        <a class=\"service_link\" >Learn More</a>
      </div>
  </div>
  <div class=\"swiper-slide\" style=\" background-image: url(images/image2.png);\">
    <div class=\"service\" >
      <div class=\"service_icon\" ><img  src=\"images/icon5.svg\" /></div>
      <div class=\"service_title\" >For Home</div>
      <div class=\"service_description\" >Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</div>
      <a class=\"service_link\" >Learn More</a>
    </div>
</div>
    </div>
    <!-- Add Pagination -->
    <div class=\"swiper-pagination\"></div>
  </div>
  <!-- Services end -->


<!-- Products start -->
<div class=\"products\"> 


<div class=\"section_header\" style=\"background-color: transparent;\">
  <div class=\"section_logo\"><img src=\"images/image7.png\" width=\"145\" height=\"30\"/></div>
  <div class=\"section_title\">Our Products</div>
  <div class=\"section_description\">high quality products for high quality customers</div>
</div> 



<div  class=\"swiper_con\">
<div class=\"swiper-container  swiper2 \">
  <div class=\"swiper-wrapper\">
   
    <div class=\"swiper-slide slide2\">
        <div class=\"col-md-6 fit-image products_image\" style=\" background-image: url(images/image11.png);\">   </div>
        <div class=\"col-md-6 product_blue   product_details\" > 
            <div class=\"product_title\">Steel Cylinders</div> 
            <div class=\"product_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</div>
            <button class=\"btn\" type=\"submit\">Read More</button>
        </div>
    </div>

    <div class=\"swiper-slide slide2\">
      <div class=\"col-md-6 fit-image products_image\" style=\" background-image: url(images/image11.png);\">   </div>
      <div class=\"col-md-6 product_red   product_details\" > 
          <div class=\"product_title\">Steel Cylinders</div> 
          <div class=\"product_description\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</div>
          <button class=\"btn\" type=\"submit\">Read More</button>
      </div>
  </div>
 
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
    <div class=\"section_logo\"><img src=\"images/image7.png\" width=\"145\" height=\"30\"/></div>
    <div class=\"section_title\">Latest News</div>
    <div class=\"section_description\">education is the key</div>
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
    <div class=\"latest_news_description\">{{ row.description }} </div>
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
    <ul class=\"navbar-nav navbar-nav  flex-row m-auto\">
      <li class=\"nav-item \">
         <a class=\"nav-link fa  fa-twitter dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>

       <li class=\"nav-item\">
         <a class=\"nav-link fa fa-facebook dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>        
      
        <li class=\"nav-item\">
         <a class=\"nav-link fa fa-linkedin dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>              

       <li class=\"nav-item\">
         <a class=\"nav-link fa fa-youtube-play dark mx-1\" href=\"#\"> <span class=\"sr-only\"> </span></a>
      </li>           
    </ul>
  </div>
</nav>



<div class=\"partners\">
  <div class=\"partners_title\">partners</div>







<!-- Services start -->
<div class=\"swiper-container partners_container\">
  <div class=\"swiper-wrapper\">
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
    <div class=\"swiper-slide  partners_slide\"  style=\" background-image: url(images/image2.png);\"></div>
  </div>
 
</div>
<!-- Services end -->




<button class=\"btn partners_read_more\" type=\"submit\">Read More</button>
 
</div>



<!-- subscription start -->
<div class=\"subscription\"    style=\"background-image: url(images/image90.png);\">
    <div class=\"section_logo\"><img src=\"images/image7.png\" width=\"145\" height=\"30\"></div>
    <div class=\"subscription_title\">Subscribe to our Newsletter</div>
    <div class=\"subscription_description\">got to know fitst our <strong>flaming hot </strong> news</div>


    <div class=\"buttonInside\">
                  <input placeholder=\"Enter your email address\">
                  <button id=\"erase \" class=\"btn\">subscribe</button>
     </div>


</div>
<!-- subscription end -->

 


<div   class=\"footer row mx-0\">
  <div class=\"footer_contact_us\">
    <div class=\"footer_contact_us_logo\"><img src=\"images/logo_with_text.png\" width=\"130px\"></div>
    <div class=\"footer_contact_us_address mt-3\">Larnaca-Dekeleia Road,<br>P.O BOX 40365 ,<br> 6303 Larnaca, Cyprus</div>
    
    <div class=\"mt-3\">
      <div class=\"footer_contact_us_row\">T:7777 0606</div>
      <div class=\"footer_contact_us_row\">T:+357 24 821 666</div>
      <div class=\"footer_contact_us_row\">E:info@intergaz.com.cy</div>
    </div>
         <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9  flex-row \">
            <li class=\"nav-item \"> <a class=\"nav-link fa  fa-twitter dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-facebook dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-linkedin dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-youtube-play dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
            <li class=\"nav-item\"> <a class=\"nav-link fa fa-instagram dark mx-2\" href=\"#\"> <span class=\"sr-only\"> </span></a></li>  
         </ul>
   </div>


<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>

<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>

<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>


<div class=\"footer_item col\">
  <div class=\"footer_item_title\">Quick Links</div>
  <div class=\"footer_item_data\">
    <ul class=\"navbar-nav navbar-nav col-lg-2  col-md-2  col-sm-9  col-xs-9    \">

      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Home</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Company Profile</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Products</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Services</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Using intergaz</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Safety</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>News</strong></div>   </a></li>  
      <li class=\"nav-item \"> <a class=\"nav-link dark mx-2  flex-row\" href=\"#\"><div class=\"footer_link  fa  fa-chevron-right\">&nbsp;&nbsp;<strong>Contacts US</strong></div>   </a></li>   
   </ul>
  </div>
</div>






</div>









</main>

<footer class=\"footer  footer_buttom mx-0\">
  <div class=\"row mx-0\">
    <div class=\"col-sm text-center\">@2020 Intergaz Ltd.All right reserved</div>
    <div class=\"col-sm text-center\"> Design by ideaseven</div>
    <div class=\"col-sm text-center\">  Terms & Conditions | Privacy Policy | Cooking Policy    </div>
  </div>
</footer>

 


 




 

<script src=\"{{ 'assets/js/jquery.min.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/ontawesome.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/bootstrap.bundle.min.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/swiper.min.js'|theme }}\" ></script>
 
<script>

     \$(\".search_input\").hide( );
  \$(\".search_btn\").click(function(){
       \$(\".search_input\").show( );
      \$(\".search_input\").toggleClass(\"active\").focus;
      \$(this).toggleClass(\"animate\");
      \$(\".search_input\").val(\"\");
});

 

function pc (){
var swiper = new Swiper('.swiper', {  slidesPerView: 3,  spaceBetween: 0,
      pagination: { el: '.swiper-pagination', clickable: true, }, });

var swiper3 = new Swiper('.partners_container', { slidesPerView: 5, spaceBetween:10, });
 
var swiper2 = new Swiper('.swiper2', { slidesPerView: 2, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper4 = new Swiper('.latest_news-container', { slidesPerView: 2, spaceBetween: 30, slidesPerGroup: 2,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper5 = new Swiper('.swiper5', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.carousel-control-next', prevEl: '.carousel-control-prev', }, });      
      
}
function mobile (){
  var swiper = new Swiper('.swiper', {  slidesPerView: 1,  spaceBetween: 0,
      pagination: { el: '.swiper-pagination', clickable: true, }, });

var swiper3 = new Swiper('.partners_container', { slidesPerView: 5, spaceBetween:10, });
 
var swiper2 = new Swiper('.swiper2', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper4 = new Swiper('.latest_news-container', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev', }, });

var swiper5 = new Swiper('.swiper5', { slidesPerView: 1, spaceBetween: 30, slidesPerGroup: 1,
      navigation: { nextEl: '.carousel-control-next', prevEl: '.carousel-control-prev', }, });    
}



function getResponsive(x) {
  if (x.matches) { // If media query matches
        mobile ();
}else{
  pc () ;
}

}

var x = window.matchMedia(\"(max-width: 780px)\")
getResponsive(x) // Call listener function at run time
x.addListener(getResponsive) // Attach listener function on state changes


 

var x = window.matchMedia(\"(max-width: 780px)\")
getResponsive(x) // Call listener function at run time
x.addListener(getResponsive) // Attach listener function on state changes

  

</script>
    </body>
</html>", "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/pages/home.htm", "");
    }
}
