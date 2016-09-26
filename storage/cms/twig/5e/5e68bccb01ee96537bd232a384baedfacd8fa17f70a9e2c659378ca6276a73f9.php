<?php

/* /home/ubuntu/workspace/themes/jtherczeg-grill/pages/samples/single-post.htm */
class __TwigTemplate_c0cbb9c8c47f04ceaefcdf12826d0298ac74b9029d373189acd6919decd6e19e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"heading\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"heading-content\">
                    <h2>Single Product</h2>
                    <span>Home / <a href=\"";
        // line 7
        echo $this->env->getExtension('CMS')->pageFilter("samples/single-post");
        echo "\">Single Post</a></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div id=\"product-post\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"heading-section\">
                    <h2>Single Blog Post</h2>
                    <img src=\"";
        // line 20
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/under-heading.png");
        echo "\" alt=\"\" />
                </div>
            </div>
        </div>
        <div id=\"single-blog\" class=\"page-section first-section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"product-item col-md-12\">
                        <div class=\"row\">
                            <div class=\"col-md-8\">  
                                <div class=\"image\">
                                    <div class=\"image-post\">
                                        <img src=\"";
        // line 32
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/single-post.jpg");
        echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"product-content\">
                                    <div class=\"product-title\">
                                        <h3>SWEET BREAKFAST CAKE</h3>
                                         <span class=\"subtitle\">4 comments</span>
                                    </div>
                                    <p>Morbi consectetur velit et est placerat volutpat. Aliquam lacus libero, iaculis sit amet ornare eu, bibendum convallis. Curabitur vel erat imperdiet, ultrices dui et, mattis arcu. Donec nisi velit, dignissim mollis erat vehicula, iaculis eleifend sem. Mauris non ultrices ante, id porta odio. Pellentesque eget egestas lorem. <a href=\"#\">Nullam vitae</a> varius lorem, ac tristique justo. Cras placerat tempus pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, an inceptos himenaeos. Morbi et feugiat justo. <br><br>Maecenas et ante eu sem viverra faucibus eget nec est. Aenean non felis diam. Praesent malesuada, lectus vel elementum tincidunt, sapien dolor interdum lacus, vel suscipit enim augue vel purus. Ut in augue mass. Etiam a leo at eros vehicula mattis. Aenean nec fringilla neque <a href=\"#\">eget vulputate mi</a>. Aenean tincidunt elit sollicitudin libero hendrerit feugiat. Nunc purus leo, sollicitudin et vulputate vitae, auctor a lacus. Fusce aliquet erat quis nisi adipiscing, id eleifend quam venenatis. Integer non sem quis dui dignissim lacinia et a massa.</p>
                                </div>
                                <div class=\"divide-line\">
                                <img src=\"";
        // line 43
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/div-line.png");
        echo "\" alt=\"\" />
                                </div>
\t\t\t\t\t\t\t\t";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("single-post/comments"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 47
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("single-post/sidebar"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 48
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/jtherczeg-grill/pages/samples/single-post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 48,  84 => 47,  81 => 46,  77 => 45,  72 => 43,  58 => 32,  43 => 20,  27 => 7,  19 => 1,);
    }
}
/* <div id="heading">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <div class="heading-content">*/
/*                     <h2>Single Product</h2>*/
/*                     <span>Home / <a href="{{ 'samples/single-post'|page }}">Single Post</a></span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div id="product-post">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="heading-section">*/
/*                     <h2>Single Blog Post</h2>*/
/*                     <img src="{{ 'assets/images/under-heading.png'|theme }}" alt="" />*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div id="single-blog" class="page-section first-section">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="product-item col-md-12">*/
/*                         <div class="row">*/
/*                             <div class="col-md-8">  */
/*                                 <div class="image">*/
/*                                     <div class="image-post">*/
/*                                         <img src="{{ 'assets/images/single-post.jpg'|theme }}" alt="">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="product-content">*/
/*                                     <div class="product-title">*/
/*                                         <h3>SWEET BREAKFAST CAKE</h3>*/
/*                                          <span class="subtitle">4 comments</span>*/
/*                                     </div>*/
/*                                     <p>Morbi consectetur velit et est placerat volutpat. Aliquam lacus libero, iaculis sit amet ornare eu, bibendum convallis. Curabitur vel erat imperdiet, ultrices dui et, mattis arcu. Donec nisi velit, dignissim mollis erat vehicula, iaculis eleifend sem. Mauris non ultrices ante, id porta odio. Pellentesque eget egestas lorem. <a href="#">Nullam vitae</a> varius lorem, ac tristique justo. Cras placerat tempus pharetra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, an inceptos himenaeos. Morbi et feugiat justo. <br><br>Maecenas et ante eu sem viverra faucibus eget nec est. Aenean non felis diam. Praesent malesuada, lectus vel elementum tincidunt, sapien dolor interdum lacus, vel suscipit enim augue vel purus. Ut in augue mass. Etiam a leo at eros vehicula mattis. Aenean nec fringilla neque <a href="#">eget vulputate mi</a>. Aenean tincidunt elit sollicitudin libero hendrerit feugiat. Nunc purus leo, sollicitudin et vulputate vitae, auctor a lacus. Fusce aliquet erat quis nisi adipiscing, id eleifend quam venenatis. Integer non sem quis dui dignissim lacinia et a massa.</p>*/
/*                                 </div>*/
/*                                 <div class="divide-line">*/
/*                                 <img src="{{ 'assets/images/div-line.png'|theme }}" alt="" />*/
/*                                 </div>*/
/* 								{% partial "single-post/comments" %}*/
/* 								</div>*/
/* 							{% partial "single-post/sidebar" %}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>     */
/*     </div>*/
/* </div>*/
