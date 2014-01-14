<?php

/* SMFrontBundle:Default:header.html.twig */
class __TwigTemplate_7542d0e20d0145905d2bec9085ccaf28 extends Twig_Template
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
        echo "<h1 class=\"logo\"><a href=\"/\" title=\"Logo\"><img src=\"/web/front/images/logo-toi-yeu-hang-viet.png\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Toi Yeu Hang Viet", array(), "SMFrontBundle"), "html", null, true);
        echo "\" /></a></h1>
<a href=\"#\" title=\"Vietnam Airlines\"><img src=\"/web/front/images/advertise-vietnam-airlines.png\" alt=\"Vietnam Airlines\" /></a>
<!-- BEGIN TOP MENU -->
    ";
        // line 4
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:topMenu", array(), array());
        // line 5
        echo "<!-- END TOP MENU -->
    
<div class=\"controls-block\">
  <div class=\"inner\">
    <ul class=\"tel-block\">
      <li><img src=\"/web/front/images/img-phone.png\" alt=\"\" />";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Hot line", array(), "SMFrontBundle"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "hotLine"), "html", null, true);
        echo "</strong></li>
      <li><img src=\"/web/front/images/img-phone.png\" alt=\"\" />";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Advertisement", array(), "SMFrontBundle"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "advNumber"), "html", null, true);
        echo "</strong></li>
    </ul><!-- end tel-block -->

    <!-- BEGIN FORM SEARCH-->
    <form id=\"search-form\" class=\"search-frm\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_search_product"), "html", null, true);
        echo "\" method=\"post\">
      <input type=\"text\" id=\"product_name_top\" name=\"product_name\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\"/>
      <button type=\"submit\" id=\"search-btn\" name=\"search-btn\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search", array(), "SMFrontBundle"), "html", null, true);
        echo "</button>
    </form>
    <!-- END FORM SEARCH-->

    <!-- BEGIN LANGUAGE -->
    ";
        // line 22
        echo $this->env->getExtension('actions')->renderAction("SMFrontBundle:Default:language", array(), array());
        // line 23
        echo "    <!-- END LANGUAGE -->

  </div>
</div><!-- end controls-block -->";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  66 => 22,  58 => 17,  54 => 16,  50 => 15,  41 => 11,  35 => 10,  28 => 5,  26 => 4,  19 => 1,);
    }
}
