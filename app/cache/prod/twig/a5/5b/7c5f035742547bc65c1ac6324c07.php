<?php

/* SMFrontBundle:Default:register-get-product.html.twig */
class __TwigTemplate_a55b7c5f035742547bc65c1ac6324c07 extends Twig_Template
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
        echo "<h3 class=\"title-3\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Register to get product", array(), "SMFrontBundle"), "html", null, true);
        echo "</h3>
<form class=\"registration-product-frm\" id=\"registration-product-frm\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_send_email"), "html", null, true);
        echo "\" method=\"post\">
  <label for=\"email\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inputting a email that to recieve new and sale product", array(), "SMFrontBundle"), "html", null, true);
        echo ".</label>
  <div class=\"input-content\">
    <input type=\"text\" class=\"input-1\" id=\"email\" name=\"email\" />
    <button type=\"button\" name=\"send-btn\" id=\"send-btn\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send", array(), "SMFrontBundle"), "html", null, true);
        echo "</button>
  </div>
  <div id=\"notice-ajax\" style=\"display: none; float: inside;\"><img src=\"/web/front/images/loading.gif\" width=\"20\" height=\"20\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading", array(), "SMFrontBundle"), "html", null, true);
        echo "</div>
</form>";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:register-get-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  34 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }
}
