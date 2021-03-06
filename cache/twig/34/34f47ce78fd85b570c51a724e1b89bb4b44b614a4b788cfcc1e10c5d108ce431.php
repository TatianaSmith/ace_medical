<?php

/* partials/navigation.html.twig */
class __TwigTemplate_6e4a590833d2ebc8a734a458072e44a5e4bc95cdee480ed9b2f19a43122659eb extends Twig_Template
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
        // line 22
        echo "
<ul ";
        // line 23
        echo (((isset($context["tree"]) ? $context["tree"] : null)) ? ("class=\"tree\"") : (""));
        echo ">
    ";
        // line 24
        echo $this->getAttribute($this, "nav_loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
</ul>

";
    }

    // line 1
    public function getnav_loop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["active_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("active") : (""));
                // line 4
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 5
                    echo "            <li>
                <a href=\"";
                    // line 6
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    echo (isset($context["active_page"]) ? $context["active_page"] : null);
                    echo "\">
                    ";
                    // line 7
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <ul>
                    ";
                    // line 10
                    echo $this->getAttribute($this, "nav_loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 14
                    echo "            <li>
                <a href=\"";
                    // line 15
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\" class=\"";
                    echo (isset($context["active_page"]) ? $context["active_page"] : null);
                    echo "\">
                    ";
                    // line 16
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 20,  88 => 16,  82 => 15,  79 => 14,  72 => 10,  66 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  46 => 2,  34 => 1,  26 => 24,  22 => 23,  19 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro nav_loop(page) %}
    {% for p in page.children.visible %}
        {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
        {% if p.children.visible.count > 0 %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.nav_loop(p) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul {{ tree ? 'class=\"tree\"' : '' }}>
    {{ _self.nav_loop(pages) }}
</ul>

", "partials/navigation.html.twig", "/Users/Tatiana/projects/ace_medical/user/themes/quark/templates/partials/navigation.html.twig");
    }
}
