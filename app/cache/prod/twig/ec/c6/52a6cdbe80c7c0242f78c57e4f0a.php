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
        return array (  92 => 34,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  57 => 14,  48 => 8,  42 => 7,  36 => 6,  30 => 5,  24 => 4,  19 => 1,);
    }
}
