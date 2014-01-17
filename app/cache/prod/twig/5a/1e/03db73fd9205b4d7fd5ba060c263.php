<?php

/* SMFrontBundle:Default:prices-market.html.twig */
class __TwigTemplate_5a1e03db73fd9205b4d7fd5ba060c263 extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getContext($context, "entities")) > 0)) {
            // line 2
            echo "    <div class=\"price-block\">
        <h2 class=\"title-1\">";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Market price", array(), "SMFrontBundle"), "html", null, true);
            echo "</h2>
        <div class=\"price-content\">
            ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 6
                echo "                ";
                $context["itemType"] = $this->getAttribute($this->getContext($context, "ent"), "itemtypes", array(), "array");
                // line 7
                echo "                ";
                $context["items"] = $this->getAttribute($this->getContext($context, "ent"), "items", array(), "array");
                // line 8
                echo "                <table style=\"width: 209px;\">
                    <caption>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "itemType"), "name"), "html", null, true);
                echo " </caption>
                    <tr>
                        <th>";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Item", array(), "SMFrontBundle"), "html", null, true);
                echo "</th>
                        <th>";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Old price", array(), "SMFrontBundle"), "html", null, true);
                echo "</th>
                        <th>";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("New price", array(), "SMFrontBundle"), "html", null, true);
                echo "</th>
                    </tr>
                    ";
                // line 15
                if ((twig_length_filter($this->env, $this->getContext($context, "items")) > 0)) {
                    // line 16
                    echo "                        ";
                    $context["i"] = 0;
                    // line 17
                    echo "                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 18
                        echo "                            ";
                        $context["class"] = "style-1";
                        // line 19
                        echo "                            ";
                        $context["c"] = ($this->getContext($context, "i") % 2);
                        // line 20
                        echo "                            ";
                        $context["i"] = ($this->getContext($context, "i") + 1);
                        // line 21
                        echo "                            ";
                        if (($this->getContext($context, "c") == 0)) {
                            // line 22
                            echo "                                ";
                            $context["class"] = "";
                            // line 23
                            echo "                            ";
                        }
                        // line 24
                        echo "                            <tr class=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "class"), "html", null, true);
                        echo "\">
                                <td>";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "price"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "oldprice"), "html", null, true);
                        echo "</td>
                            </tr>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    echo "                    ";
                }
                // line 31
                echo "                </table>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ent'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </div>
        <a class=\"readmore\" title=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sm_front_item_view_all"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View more", array(), "SMFrontBundle"), "html", null, true);
            echo "</a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "SMFrontBundle:Default:prices-market.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 34,  120 => 33,  113 => 31,  110 => 30,  101 => 27,  97 => 26,  88 => 24,  85 => 23,  79 => 21,  76 => 20,  73 => 19,  65 => 17,  42 => 9,  36 => 7,  24 => 3,  21 => 2,  63 => 12,  40 => 8,  37 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 2,  72 => 18,  62 => 16,  56 => 13,  44 => 10,  38 => 8,  33 => 6,  25 => 4,  23 => 3,  68 => 23,  66 => 22,  58 => 17,  54 => 10,  50 => 12,  41 => 9,  35 => 7,  26 => 4,  19 => 1,  251 => 77,  243 => 129,  239 => 128,  233 => 125,  229 => 124,  225 => 123,  221 => 122,  215 => 119,  209 => 116,  201 => 110,  199 => 109,  195 => 107,  193 => 106,  183 => 98,  181 => 97,  176 => 94,  174 => 93,  169 => 90,  167 => 89,  158 => 82,  156 => 81,  151 => 78,  149 => 77,  143 => 73,  141 => 72,  132 => 65,  130 => 64,  124 => 60,  122 => 59,  117 => 56,  115 => 55,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  95 => 43,  93 => 25,  84 => 35,  82 => 22,  70 => 18,  64 => 22,  60 => 15,  55 => 13,  51 => 12,  47 => 11,  43 => 16,  39 => 8,  30 => 5,  20 => 1,  31 => 3,  28 => 5,);
    }
}
