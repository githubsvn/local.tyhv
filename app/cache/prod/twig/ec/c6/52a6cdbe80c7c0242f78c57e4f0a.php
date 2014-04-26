<?php

/* SMFrontBundle:Default:counter.html.twig */
class __TwigTemplate_ecc652a6cdbe80c7c0242f78c57e4f0a extends Twig_Template
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
        echo "<div class=\"block access-block\">
      <h2 class=\"title-1\">Lượng truy cập</h2>
      <div class=\"access\">
            <p><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/icon-stat-1.png"), "html", null, true);
        echo "\" alt=\"\" /> <strong>Hôm nay</strong><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalToday"), "html", null, true);
        echo "</span></p>
            <p><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/icon-stat-2.png"), "html", null, true);
        echo "\" alt=\"\" /> <strong>Tháng này</strong><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalMonth"), "html", null, true);
        echo "</span></p>
            <p><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/icon-stat-3.png"), "html", null, true);
        echo "\" alt=\"\" /> <strong>Thang Truoc</strong><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalMonPre"), "html", null, true);
        echo "</span></p>
            <p><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/web/front/images/icon-stat-4.png"), "html", null, true);
        echo "\" alt=\"\" /> <strong>Tất cả</strong><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotal"), "html", null, true);
        echo "</span></p>
            <p>Hiện có ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getUserOnline"), "html", null, true);
        echo " khách trực tuyến</p>
      </div>
\t  <!--
      <table>
          <tr>
              <td>Onine user</td>
              <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getUserOnline"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total today</td>
              <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalToday"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total yesterday</td>
              <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalYesterday"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total this month</td>
              <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalMonth"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total pre month</td>
              <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotalMonPre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total</td>
              <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "getTotal"), "html", null, true);
        echo "</td>
          </tr>
      </table>
\t  -->
    </div>
\t";
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  71 => 22,  64 => 18,  61 => 13,  123 => 34,  120 => 33,  97 => 26,  93 => 25,  88 => 24,  82 => 22,  76 => 20,  73 => 19,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 7,  24 => 4,  21 => 2,  60 => 15,  37 => 8,  34 => 6,  22 => 2,  72 => 18,  56 => 12,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 10,  41 => 9,  28 => 3,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 43,  94 => 40,  92 => 34,  85 => 30,  75 => 28,  63 => 12,  57 => 14,  53 => 15,  48 => 8,  44 => 10,  40 => 7,  36 => 6,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 23,  62 => 16,  59 => 15,  54 => 10,  52 => 13,  43 => 10,  38 => 8,  35 => 7,  29 => 5,);
    }
}
