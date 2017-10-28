<?php

/* modular/features.html.twig */
class __TwigTemplate_9269b6b3bdc64367896eaae5a57fe62cfc2b26f216826fae6a8f0edcfc8213f1 extends Twig_Template
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
        echo "<div class=\"modular-row features ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "
    <div class=\"feature-items\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 5
            echo "           <div class=\"feature\">
            ";
            // line 6
            if ($this->getAttribute($context["feature"], "icon", array())) {
                // line 7
                echo "            <i class=\"fa fa-fw fa-";
                echo $this->getAttribute($context["feature"], "icon", array());
                echo "\"></i>
            <div class=\"feature-content icon-offset\">
            ";
            } else {
                // line 10
                echo "            <div class=\"feature-content\">
            ";
            }
            // line 12
            echo "            ";
            if ($this->getAttribute($context["feature"], "header", array())) {
                // line 13
                echo "            <h4>";
                echo $this->getAttribute($context["feature"], "header", array());
                echo "</h4>
            ";
            }
            // line 15
            echo "            ";
            if ($this->getAttribute($context["feature"], "text", array())) {
                // line 16
                echo "            <p>";
                echo $this->getAttribute($context["feature"], "text", array());
                echo "</p>
            ";
            }
            // line 18
            echo "            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 21,  67 => 18,  61 => 16,  58 => 15,  52 => 13,  49 => 12,  45 => 10,  38 => 7,  36 => 6,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row features {{ page.header.class}}\">
    {{ content }}
    <div class=\"feature-items\">
    {% for feature in page.header.features %}
           <div class=\"feature\">
            {% if feature.icon %}
            <i class=\"fa fa-fw fa-{{ feature.icon }}\"></i>
            <div class=\"feature-content icon-offset\">
            {% else %}
            <div class=\"feature-content\">
            {% endif %}
            {% if feature.header %}
            <h4>{{ feature.header }}</h4>
            {% endif %}
            {% if feature.text %}
            <p>{{ feature.text }}</p>
            {% endif %}
            </div>
        </div>
    {% endfor %}
    </div>
</div>
", "modular/features.html.twig", "/var/www/user/themes/antimatter/templates/modular/features.html.twig");
    }
}
