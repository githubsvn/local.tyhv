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
        return array (  61 => 13,  123 => 34,  120 => 33,  97 => 26,  93 => 25,  88 => 24,  82 => 22,  76 => 20,  73 => 19,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 8,  24 => 2,  21 => 2,  60 => 15,  37 => 8,  34 => 6,  22 => 2,  72 => 18,  56 => 12,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 10,  41 => 9,  28 => 3,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 43,  94 => 40,  92 => 39,  85 => 23,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 7,  36 => 7,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 23,  62 => 16,  59 => 15,  54 => 10,  52 => 13,  43 => 10,  38 => 8,  35 => 7,  29 => 5,);
    }
}
