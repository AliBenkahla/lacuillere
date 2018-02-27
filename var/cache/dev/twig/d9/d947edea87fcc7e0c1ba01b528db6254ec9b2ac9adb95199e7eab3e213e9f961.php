<?php

/* homepage/index.html.twig */
class __TwigTemplate_6dce38b702aa2f27c638d2e1df0aeca127bd0683ff1b730b132143d17d4155ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc24640227afceadffe3da89d93aafb254b6c0d79b511297f13cd051df9d294b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc24640227afceadffe3da89d93aafb254b6c0d79b511297f13cd051df9d294b->enter($__internal_dc24640227afceadffe3da89d93aafb254b6c0d79b511297f13cd051df9d294b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $__internal_c180394cf5abf5cf34ce7d3a1948dfd4a0fe7dfdf3ca4b36e571549e571afaec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c180394cf5abf5cf34ce7d3a1948dfd4a0fe7dfdf3ca4b36e571549e571afaec->enter($__internal_c180394cf5abf5cf34ce7d3a1948dfd4a0fe7dfdf3ca4b36e571549e571afaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc24640227afceadffe3da89d93aafb254b6c0d79b511297f13cd051df9d294b->leave($__internal_dc24640227afceadffe3da89d93aafb254b6c0d79b511297f13cd051df9d294b_prof);

        
        $__internal_c180394cf5abf5cf34ce7d3a1948dfd4a0fe7dfdf3ca4b36e571549e571afaec->leave($__internal_c180394cf5abf5cf34ce7d3a1948dfd4a0fe7dfdf3ca4b36e571549e571afaec_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_702a7ca75b6e6207871b7f7ddf7614734089b0414f13983e06913904744c9089 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702a7ca75b6e6207871b7f7ddf7614734089b0414f13983e06913904744c9089->enter($__internal_702a7ca75b6e6207871b7f7ddf7614734089b0414f13983e06913904744c9089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6423b1ea00d3ea30e3f2e31b55473712e8cb894c8262792d8f4d74804ce61f92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6423b1ea00d3ea30e3f2e31b55473712e8cb894c8262792d8f4d74804ce61f92->enter($__internal_6423b1ea00d3ea30e3f2e31b55473712e8cb894c8262792d8f4d74804ce61f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "   <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/searchResultsDatalist.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6423b1ea00d3ea30e3f2e31b55473712e8cb894c8262792d8f4d74804ce61f92->leave($__internal_6423b1ea00d3ea30e3f2e31b55473712e8cb894c8262792d8f4d74804ce61f92_prof);

        
        $__internal_702a7ca75b6e6207871b7f7ddf7614734089b0414f13983e06913904744c9089->leave($__internal_702a7ca75b6e6207871b7f7ddf7614734089b0414f13983e06913904744c9089_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c3f8da48b9eb2584a381da03eeb3edbb265e1b561fe78b4ccd84a4637c33fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3f8da48b9eb2584a381da03eeb3edbb265e1b561fe78b4ccd84a4637c33fa7->enter($__internal_3c3f8da48b9eb2584a381da03eeb3edbb265e1b561fe78b4ccd84a4637c33fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de36368bf03b30a73289e2873be593f62184d641ca8f10feba80bdddddf371b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de36368bf03b30a73289e2873be593f62184d641ca8f10feba80bdddddf371b5->enter($__internal_de36368bf03b30a73289e2873be593f62184d641ca8f10feba80bdddddf371b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<main>
    <div class=\"hp\">
        <h1>Les meilleurs restaurants halal de Paris et ses environs</h1>
        <form method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("searchbyregion.index");
        echo "\">
            <select name=\"search\">
                <option>Ou souhaitez vous manger ?</option>
               <option>Paris</option>
               <option value=\"91\">Essonne - 91</option>
               <option value=\"92\">Hauts de Seine - 92</option>
               <option value=\"93\">Seine Saint Denis - 93</option>
               <option value=\"94\">Val de Marne - 94</option>
               <option value=\"95\">Val d'Oise - 95</option>
               <option value=\"78\">Yvelines - 78</option>
            </select>
            <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\"/>
        </form>
    </div>




</main>
";
        
        $__internal_de36368bf03b30a73289e2873be593f62184d641ca8f10feba80bdddddf371b5->leave($__internal_de36368bf03b30a73289e2873be593f62184d641ca8f10feba80bdddddf371b5_prof);

        
        $__internal_3c3f8da48b9eb2584a381da03eeb3edbb265e1b561fe78b4ccd84a4637c33fa7->leave($__internal_3c3f8da48b9eb2584a381da03eeb3edbb265e1b561fe78b4ccd84a4637c33fa7_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block javascripts %}
   <script src=\"{{ asset('js/searchResultsDatalist.js') }}\"></script>
{% endblock %}

{% block body %}
<main>
    <div class=\"hp\">
        <h1>Les meilleurs restaurants halal de Paris et ses environs</h1>
        <form method=\"post\" action=\"{{ url('searchbyregion.index')}}\">
            <select name=\"search\">
                <option>Ou souhaitez vous manger ?</option>
               <option>Paris</option>
               <option value=\"91\">Essonne - 91</option>
               <option value=\"92\">Hauts de Seine - 92</option>
               <option value=\"93\">Seine Saint Denis - 93</option>
               <option value=\"94\">Val de Marne - 94</option>
               <option value=\"95\">Val d'Oise - 95</option>
               <option value=\"78\">Yvelines - 78</option>
            </select>
            <input type=\"submit\" value=\"Valider\" class=\"btn btn-primary\"/>
        </form>
    </div>




</main>
{% endblock %}
", "homepage/index.html.twig", "/Applications/MAMP/htdocs/lacuillere2/app/Resources/views/homepage/index.html.twig");
    }
}
