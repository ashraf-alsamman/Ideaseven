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

/* D:\wamp64\www\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm */
class __TwigTemplate_b3de8dd7fd612ae799e4d13a2ee96d849241bd0fc4242f597f7c1953fef82a3e extends \Twig\Template
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
  <ul class=\"navbar-nav navbar-nav     flex-row  \">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
        ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "social", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 49
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 49) == 8)) {
                    echo "    
            <li class=\"nav-item \"> <a class=\"nav-link fa    ";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "icon", [], "any", false, false, false, 50), "html", null, true);
                    echo "  dark mx-2\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 50), "html", null, true);
                    echo "\"> <span class=\"sr-only\"> </span> </a></li>       
        ";
                }
                // line 52
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "  </ul>   
       
          <form class=\"form-inline mt-2 mt-md-0     col-lg-2  col-md-2  col-sm-5  col-xs-5 \"   >
             <button class=\"btn    request my-2 my-sm-0\" type=\"submit\">Request a Quote</button>
          </form>
        </div>
      </nav>
 
   <nav class=\" navbar navbar-expand-lg navbar-light bg-light  main_menu d-flex justify-content-between\">
 
    <button class=\" navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <i class=\"fa  fa-bars\"></i>
    </button>
 
    
";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 70
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 70) == 14)) {
                echo "    
     <img src=\"";
                // line 71
                echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, false, 71));
                echo "\" alt=\"...\" class=\"Responsive image main_logo\">
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
      <ul class=\"navbar-nav mr-auto\">
        
        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "menu", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 80
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 80) == 13)) {
                    echo "   

        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "link", [], "any", false, false, false, 82), "html", null, true);
                    echo "| \"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "caption", [], "any", false, false, false, 82), "html", null, true);
                    echo " </a> </li>
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
        // line 86
        echo "        
        
    

 
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
 
 
 
    ";
        // line 107
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 108
        echo "    
    
    
    <footer class=\"footer  footer_buttom mx-0\">
  <div class=\"row mx-0\">
  
 
    
    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "footer_buttom", [], "any", false, false, false, 117));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 118
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 118) == 11)) {
                    echo "    
    <div class=\"col-sm text-center\"> ";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "caption", [], "any", false, false, false, 119), "html", null, true);
                    echo " </div>
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
        // line 123
        echo "    
    
    <div class=\"col-sm text-center\"> 
    
";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo "    
";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "footer_right", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 129
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 129) == 12)) {
                    echo "   
";
                    // line 130
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "caption", [], "any", false, false, false, 130), "html", null, true);
                    echo "| 
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
        // line 134
        echo "     
    
    </div>
    
    
  </div>
</footer>

 


 




 

<script src=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\" ></script>
<script src=\"";
        // line 153
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ontawesome.js");
        echo "\" ></script>
<script src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.bundle.min.js");
        echo "\" ></script>
<script src=\"";
        // line 155
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/swiper.min.js");
        echo "\" ></script>
<script src=\"";
        // line 156
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/my_script.js");
        echo "\" ></script>
 
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 156,  333 => 155,  329 => 154,  325 => 153,  321 => 152,  301 => 134,  288 => 130,  284 => 129,  280 => 128,  274 => 127,  268 => 123,  255 => 119,  251 => 118,  247 => 117,  241 => 116,  231 => 108,  229 => 107,  206 => 86,  191 => 82,  186 => 80,  182 => 79,  176 => 78,  170 => 74,  161 => 71,  157 => 70,  151 => 69,  134 => 54,  128 => 53,  122 => 52,  115 => 50,  110 => 49,  106 => 48,  100 => 47,  76 => 26,  72 => 25,  68 => 24,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
  <ul class=\"navbar-nav navbar-nav     flex-row  \">
        {% for record in records %}    
        {% for row in record.social %}
        {% if record.id == 8 %}    
            <li class=\"nav-item \"> <a class=\"nav-link fa    {{ row.icon  }}  dark mx-2\" href=\"{{ row.link  }}\"> <span class=\"sr-only\"> </span> </a></li>       
        {% endif %}
        {% endfor %}
        {% endfor %}
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
 
    
{% for record in records %}    
{% if record.id == 14 %}    
     <img src=\"{{record.image|media}}\" alt=\"...\" class=\"Responsive image main_logo\">
{% endif %}
{% endfor %}

    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
      <ul class=\"navbar-nav mr-auto\">
        
        {% for record in records %}    
{% for row in record.menu %}
{% if record.id == 13 %}   

        <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{ row.link  }}| \"><div id=\"mask-top\"></div> <div id=\"mask-bottom\"></div>{{ row.caption  }} </a> </li>
 {% endif %}
{% endfor %}
{% endfor %}
        
        
    

 
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
 
 
 
    {% page %}
    
    
    
    <footer class=\"footer  footer_buttom mx-0\">
  <div class=\"row mx-0\">
  
 
    
    {% for record in records %}    
{% for row in record.footer_buttom %}
{% if record.id == 11 %}    
    <div class=\"col-sm text-center\"> {{ row.caption  }} </div>
{% endif %}
{% endfor %}
{% endfor %}
    
    
    <div class=\"col-sm text-center\"> 
    
{% for record in records %}    
{% for row in record.footer_right %}
{% if record.id == 12 %}   
{{ row.caption  }}| 
 {% endif %}
{% endfor %}
{% endfor %}
     
    
    </div>
    
    
  </div>
</footer>

 


 




 

<script src=\"{{ 'assets/js/jquery.min.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/ontawesome.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/bootstrap.bundle.min.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/swiper.min.js'|theme }}\" ></script>
<script src=\"{{ 'assets/js/my_script.js'|theme }}\" ></script>
 
    </body>
</html>", "D:\\wamp64\\www\\Ideaseven/themes/hambern-hambern-blank-bootstrap-4/layouts/default.htm", "");
    }
}
