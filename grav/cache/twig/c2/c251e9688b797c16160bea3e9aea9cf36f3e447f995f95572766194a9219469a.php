<?php

/* modular/gallery.html.twig */
class __TwigTemplate_0b5b03519b174b4c823ea0e60f341b774e763b8e42fa1f9b34d89dbebf7bbc00 extends Twig_Template
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
        echo "<div class=\"modular-row gallery-container ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
\t";
        // line 2
        echo $this->env->getExtension('UniteGalleryTwigExtension')->uniteGallery($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()), (("{\"gallery_theme\":\"" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
($context["page"] ?? null), "header", array()), "unitegallery", array()), "gallery_theme", array())) . "\"}"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
($context["page"] ?? null), "header", array()), "unitegallery", array()), "gallery_id", array()));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "modular/gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  25 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"modular-row gallery-container {{ page.header.class }}\">
\t{{ unite_gallery(page.media.images, 
        '{\"gallery_theme\":\"' ~ page.header.unitegallery.gallery_theme ~ '\"}',
        page.header.unitegallery.gallery_id) }}
</div>", "modular/gallery.html.twig", "/var/www/user/themes/antimatter/templates/modular/gallery.html.twig");
    }
}
