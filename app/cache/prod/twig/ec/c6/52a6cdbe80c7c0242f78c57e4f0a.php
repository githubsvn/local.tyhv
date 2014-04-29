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
        return array (  92 => 34,  78 => 26,  71 => 22,  64 => 18,  43 => 10,  61 => 13,  120 => 33,  113 => 31,  101 => 27,  97 => 26,  82 => 22,  79 => 21,  76 => 20,  70 => 16,  65 => 17,  55 => 13,  51 => 12,  42 => 7,  24 => 4,  21 => 2,  37 => 8,  72 => 18,  62 => 16,  56 => 12,  50 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  25 => 4,  87 => 30,  85 => 30,  73 => 19,  69 => 22,  60 => 15,  54 => 10,  47 => 11,  45 => 11,  38 => 8,  34 => 6,  26 => 4,  22 => 2,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  257 => 71,  249 => 127,  245 => 126,  241 => 125,  237 => 124,  231 => 121,  227 => 120,  223 => 119,  219 => 118,  213 => 115,  207 => 112,  203 => 110,  201 => 109,  194 => 104,  192 => 103,  188 => 101,  186 => 100,  176 => 92,  174 => 91,  169 => 88,  167 => 87,  162 => 84,  160 => 83,  151 => 76,  149 => 75,  144 => 72,  142 => 71,  136 => 67,  134 => 66,  125 => 59,  123 => 34,  117 => 54,  115 => 53,  110 => 30,  108 => 49,  102 => 45,  100 => 44,  95 => 41,  93 => 25,  88 => 24,  86 => 36,  77 => 24,  75 => 28,  63 => 12,  57 => 14,  53 => 15,  48 => 8,  44 => 10,  40 => 7,  36 => 6,  29 => 5,  20 => 1,  31 => 4,  28 => 3,);
    }
}
