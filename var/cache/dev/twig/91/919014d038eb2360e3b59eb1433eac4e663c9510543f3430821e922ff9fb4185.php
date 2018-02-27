<?php

/* searchbyfilter/index.html.twig */
class __TwigTemplate_c922f40f5109a8aea8c751bbf7d3ac3f795d738e2d92b2d79b46e42485ed4e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "searchbyfilter/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1b052f074d8008de335ea68f328662fa818887b88d666884b70d773f6f96b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b052f074d8008de335ea68f328662fa818887b88d666884b70d773f6f96b42->enter($__internal_b1b052f074d8008de335ea68f328662fa818887b88d666884b70d773f6f96b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "searchbyfilter/index.html.twig"));

        $__internal_0a8803482b76899726bd923d3e006e0824ae61e07190ccfb95067d84fda9face = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8803482b76899726bd923d3e006e0824ae61e07190ccfb95067d84fda9face->enter($__internal_0a8803482b76899726bd923d3e006e0824ae61e07190ccfb95067d84fda9face_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "searchbyfilter/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b052f074d8008de335ea68f328662fa818887b88d666884b70d773f6f96b42->leave($__internal_b1b052f074d8008de335ea68f328662fa818887b88d666884b70d773f6f96b42_prof);

        
        $__internal_0a8803482b76899726bd923d3e006e0824ae61e07190ccfb95067d84fda9face->leave($__internal_0a8803482b76899726bd923d3e006e0824ae61e07190ccfb95067d84fda9face_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05d0acb70fd1bf30012ff7bcc6dda89bccf06e1dc85076c7e5c85cf7d6e5df97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d0acb70fd1bf30012ff7bcc6dda89bccf06e1dc85076c7e5c85cf7d6e5df97->enter($__internal_05d0acb70fd1bf30012ff7bcc6dda89bccf06e1dc85076c7e5c85cf7d6e5df97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_896b19a56ce7e638bbc11dc4f91103b7804643f53579af6779ef2bdde3be1394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_896b19a56ce7e638bbc11dc4f91103b7804643f53579af6779ef2bdde3be1394->enter($__internal_896b19a56ce7e638bbc11dc4f91103b7804643f53579af6779ef2bdde3be1394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<main class=\"searchbyregion container\">


    <aside>

        ";
        // line 11
        if (((isset($context["searchkey"]) ? $context["searchkey"] : $this->getContext($context, "searchkey")) == "Paris")) {
            // line 12
            echo "            <p>Restaurants situé à ";
            echo twig_escape_filter($this->env, (isset($context["searchkey"]) ? $context["searchkey"] : $this->getContext($context, "searchkey")), "html", null, true);
            echo "</p>
        ";
        } else {
            // line 14
            echo "            <p>Restaurants dans le ";
            echo twig_escape_filter($this->env, (isset($context["searchkey"]) ? $context["searchkey"] : $this->getContext($context, "searchkey")), "html", null, true);
            echo "</p>
        ";
        }
        // line 16
        echo "
        <form method=\"post\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("searchbyfilter.index");
        echo "\"><!--method=\"post\" permet d'effacer les demandes dans l'url-->
            <fieldset>
                <legend>Affiner la recherche</legend>
                <select name=\"filter-price-note\">
                    <option>Tri par:</option>
                    <option>Prix</option>
                    <option>Note</option>
                </select>
            </fieldset>

            <fieldset>

                <div class=\"typenourriture\">
                    <label>Français</label>
                    <input name=\"fr\" value=\"Français\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Italien</label>
                    <input name=\"it\" value=\"Italien\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger US</label>
                    <input name=\"brgUS\" value=\"Burger US\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger Chic</label>
                    <input name=\"brgChic\" value=\"Burger chic\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Indien</label>
                    <input name=\"Ind\" value=\"Indien\" type=\"checkbox\">
                </div>

            </fieldset>
            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"><!--bouton envoyer-->
        </form>
    </aside>


    <section>
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filterresults"]) ? $context["filterresults"] : $this->getContext($context, "filterresults")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 62
            echo "            <div>
                <p><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search.index", array("slugRestaurant" => $this->getAttribute($context["result"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "name", array()), "html", null, true);
            echo "</a></p>
                <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("img/restaurant/" . $this->getAttribute($context["result"], "photo", array()))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                <p>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "region", array()), "html", null, true);
            echo "</p>
                <p class=\"note\">Note moyenne : ";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["result"], "avgRate", array()), 1), "html", null, true);
            echo " /5</p>
                <p>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "mainFood", array()), "html", null, true);
            echo "</p>
                <p>Prix moyen: ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "averagePrice", array()), "html", null, true);
            echo " euros </p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </section>

</main>

";
        
        $__internal_896b19a56ce7e638bbc11dc4f91103b7804643f53579af6779ef2bdde3be1394->leave($__internal_896b19a56ce7e638bbc11dc4f91103b7804643f53579af6779ef2bdde3be1394_prof);

        
        $__internal_05d0acb70fd1bf30012ff7bcc6dda89bccf06e1dc85076c7e5c85cf7d6e5df97->leave($__internal_05d0acb70fd1bf30012ff7bcc6dda89bccf06e1dc85076c7e5c85cf7d6e5df97_prof);

    }

    public function getTemplateName()
    {
        return "searchbyfilter/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 71,  151 => 68,  147 => 67,  143 => 66,  139 => 65,  135 => 64,  129 => 63,  126 => 62,  122 => 61,  75 => 17,  72 => 16,  66 => 14,  60 => 12,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}


<main class=\"searchbyregion container\">


    <aside>

        {%  if   searchkey   == 'Paris'   %}
            <p>Restaurants situé à {{ searchkey }}</p>
        {% else %}
            <p>Restaurants dans le {{ searchkey }}</p>
        {% endif %}

        <form method=\"post\" action=\"{{ url('searchbyfilter.index')}}\"><!--method=\"post\" permet d'effacer les demandes dans l'url-->
            <fieldset>
                <legend>Affiner la recherche</legend>
                <select name=\"filter-price-note\">
                    <option>Tri par:</option>
                    <option>Prix</option>
                    <option>Note</option>
                </select>
            </fieldset>

            <fieldset>

                <div class=\"typenourriture\">
                    <label>Français</label>
                    <input name=\"fr\" value=\"Français\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Italien</label>
                    <input name=\"it\" value=\"Italien\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger US</label>
                    <input name=\"brgUS\" value=\"Burger US\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Burger Chic</label>
                    <input name=\"brgChic\" value=\"Burger chic\" type=\"checkbox\">
                </div>

                <div class=\"typenourriture\">
                    <label>Indien</label>
                    <input name=\"Ind\" value=\"Indien\" type=\"checkbox\">
                </div>

            </fieldset>
            <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-primary\"><!--bouton envoyer-->
        </form>
    </aside>


    <section>
        {% for result in filterresults %}
            <div>
                <p><a href=\"{{ url('search.index', {'slugRestaurant': result.slug}) }}\">{{ result.name }}</a></p>
                <img src=\"{{ asset('img/restaurant/'~result.photo)  }}\" class=\"img-fluid\" alt=\"\">
                <p>{{ result.region }}</p>
                <p class=\"note\">Note moyenne : {{ result.avgRate|number_format(1) }} /5</p>
                <p>{{ result.mainFood }}</p>
                <p>Prix moyen: {{ result.averagePrice }} euros </p>
            </div>
        {% endfor %}
    </section>

</main>

{% endblock %}


", "searchbyfilter/index.html.twig", "/Applications/MAMP/htdocs/lacuillere2/app/Resources/views/searchbyfilter/index.html.twig");
    }
}
