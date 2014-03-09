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
      <img src=\"/web/front/images/img-access.png\" alt=\"\" />
\t  <!--
      <table>
          <tr>
              <td>Onine user</td>
              <td>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "counter"), "getUserOnline"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total today</td>
              <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "counter"), "getTotalToday"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total yesterday</td>
              <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "counter"), "getTotalYesterday"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total this month</td>
              <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "counter"), "getTotalMonth"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total pre month</td>
              <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "counter"), "getTotalMonPre"), "html", null, true);
        echo "</td>
          </tr>
          <tr>
              <td>Total</td>
              <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "counter"), "getTotal"), "html", null, true);
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
        return array (  63 => 28,  56 => 24,  49 => 20,  42 => 16,  35 => 12,  28 => 8,  19 => 1,);
    }
}
