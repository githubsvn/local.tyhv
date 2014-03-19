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
        return array (  43 => 10,  61 => 13,  120 => 33,  113 => 31,  101 => 27,  97 => 26,  85 => 23,  82 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 8,  24 => 2,  21 => 2,  60 => 15,  37 => 8,  34 => 6,  22 => 2,  72 => 18,  62 => 16,  56 => 12,  47 => 11,  38 => 8,  33 => 6,  30 => 5,  25 => 4,  68 => 23,  66 => 22,  58 => 17,  54 => 10,  50 => 10,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 34,  117 => 54,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 36,  77 => 29,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  29 => 5,  20 => 1,  31 => 4,  28 => 3,);
    }
}
