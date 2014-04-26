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
        if ((twig_length_filter($this->env, (isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) > 0)) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["ent"]) {
                // line 6
                echo "                ";
                $context["itemType"] = $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "itemtypes", array(), "array");
                // line 7
                echo "                ";
                $context["items"] = $this->getAttribute((isset($context["ent"]) ? $context["ent"] : $this->getContext($context, "ent")), "items", array(), "array");
                // line 8
                echo "                <table style=\"width: 209px;\">
                    <caption>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["itemType"]) ? $context["itemType"] : $this->getContext($context, "itemType")), "name"), "html", null, true);
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
                if ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) > 0)) {
                    // line 16
                    echo "                        ";
                    $context["i"] = 0;
                    // line 17
                    echo "                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 18
                        echo "                            ";
                        $context["class"] = "style-1";
                        // line 19
                        echo "                            ";
                        $context["c"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) % 2);
                        // line 20
                        echo "                            ";
                        $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                        // line 21
                        echo "                            ";
                        if (((isset($context["c"]) ? $context["c"] : $this->getContext($context, "c")) == 0)) {
                            // line 22
                            echo "                                ";
                            $context["class"] = "";
                            // line 23
                            echo "                            ";
                        }
                        // line 24
                        echo "                            <tr class=\"";
                        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                        echo "\">
                                <td>";
                        // line 25
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 26
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price"), "html", null, true);
                        echo "</td>
                                <td>";
                        // line 27
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "oldprice"), "html", null, true);
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
        return array (  123 => 34,  120 => 33,  97 => 26,  93 => 25,  88 => 24,  82 => 22,  76 => 20,  73 => 19,  70 => 18,  65 => 17,  55 => 13,  51 => 12,  42 => 9,  24 => 3,  21 => 2,  60 => 15,  37 => 7,  34 => 6,  22 => 2,  72 => 18,  56 => 13,  47 => 11,  33 => 6,  30 => 5,  25 => 4,  66 => 22,  58 => 17,  50 => 12,  41 => 9,  28 => 5,  26 => 4,  19 => 1,  39 => 8,  27 => 4,  23 => 3,  232 => 64,  224 => 108,  220 => 107,  216 => 106,  212 => 105,  206 => 102,  202 => 101,  198 => 100,  194 => 99,  188 => 96,  182 => 93,  179 => 92,  177 => 91,  172 => 88,  166 => 85,  156 => 78,  154 => 77,  149 => 74,  140 => 69,  134 => 65,  132 => 64,  122 => 57,  116 => 53,  114 => 52,  109 => 49,  107 => 48,  101 => 27,  99 => 43,  94 => 40,  92 => 39,  85 => 23,  75 => 28,  63 => 12,  57 => 16,  53 => 15,  48 => 13,  44 => 10,  40 => 8,  36 => 7,  31 => 4,  20 => 1,  199 => 62,  191 => 58,  185 => 57,  175 => 55,  173 => 54,  170 => 87,  167 => 52,  164 => 84,  161 => 50,  158 => 49,  155 => 48,  150 => 47,  147 => 73,  144 => 45,  142 => 70,  138 => 43,  129 => 41,  126 => 40,  124 => 58,  119 => 36,  113 => 31,  110 => 30,  100 => 29,  95 => 26,  87 => 36,  79 => 21,  77 => 29,  68 => 23,  62 => 16,  59 => 15,  54 => 10,  52 => 13,  43 => 7,  38 => 8,  35 => 7,  29 => 5,);
    }
}
