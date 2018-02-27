<?php

/* inc/footer.html.twig */
class __TwigTemplate_b3a9d6a88a08fe3c963b3ed9ef8e61612064fc73cde2de00c3baa0b8de776547 extends Twig_Template
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
        $__internal_d4c33218f36ed71ac583f065e68b89b1a3e7df6bdd233fb528987c0442bd44fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c33218f36ed71ac583f065e68b89b1a3e7df6bdd233fb528987c0442bd44fa->enter($__internal_d4c33218f36ed71ac583f065e68b89b1a3e7df6bdd233fb528987c0442bd44fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/footer.html.twig"));

        $__internal_8543a6d6c610ada28b7c70ecb80578ad0b969f3f228496e8668fe54b7e004d6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8543a6d6c610ada28b7c70ecb80578ad0b969f3f228496e8668fe54b7e004d6e->enter($__internal_8543a6d6c610ada28b7c70ecb80578ad0b969f3f228496e8668fe54b7e004d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "inc/footer.html.twig"));

        // line 1
        echo "<footer class=\"container\">

    <div class=\"app\">
        <a href='https://itunes.apple.com/fr/app/la-cuill%C3%A8re-dor%C3%A9e/id1257591030?mt=8'><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/css/ios.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
    </div>

    <p>© La Cuillère - Tous droits réservés</p>




</footer>";
        
        $__internal_d4c33218f36ed71ac583f065e68b89b1a3e7df6bdd233fb528987c0442bd44fa->leave($__internal_d4c33218f36ed71ac583f065e68b89b1a3e7df6bdd233fb528987c0442bd44fa_prof);

        
        $__internal_8543a6d6c610ada28b7c70ecb80578ad0b969f3f228496e8668fe54b7e004d6e->leave($__internal_8543a6d6c610ada28b7c70ecb80578ad0b969f3f228496e8668fe54b7e004d6e_prof);

    }

    public function getTemplateName()
    {
        return "inc/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"container\">

    <div class=\"app\">
        <a href='https://itunes.apple.com/fr/app/la-cuill%C3%A8re-dor%C3%A9e/id1257591030?mt=8'><img src=\"{{ asset('img/css/ios.jpg') }}\" alt=\"logo\"></a>
    </div>

    <p>© La Cuillère - Tous droits réservés</p>




</footer>", "inc/footer.html.twig", "/Applications/MAMP/htdocs/lacuillere2/app/Resources/views/inc/footer.html.twig");
    }
}
