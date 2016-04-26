<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_39124590c31eaa3ece25054296417df75b21c92265a47d7e0e6796e8b7991a65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afcf2897a3d6f3dd8fb32fcd743b3296dc482fab290e95f1690567c57468f6c6 = $this->env->getExtension("native_profiler");
        $__internal_afcf2897a3d6f3dd8fb32fcd743b3296dc482fab290e95f1690567c57468f6c6->enter($__internal_afcf2897a3d6f3dd8fb32fcd743b3296dc482fab290e95f1690567c57468f6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afcf2897a3d6f3dd8fb32fcd743b3296dc482fab290e95f1690567c57468f6c6->leave($__internal_afcf2897a3d6f3dd8fb32fcd743b3296dc482fab290e95f1690567c57468f6c6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ee885c1b323d33e7fc31acef4aa2780ec084ba6436a6a14de935e04a167370cc = $this->env->getExtension("native_profiler");
        $__internal_ee885c1b323d33e7fc31acef4aa2780ec084ba6436a6a14de935e04a167370cc->enter($__internal_ee885c1b323d33e7fc31acef4aa2780ec084ba6436a6a14de935e04a167370cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee885c1b323d33e7fc31acef4aa2780ec084ba6436a6a14de935e04a167370cc->leave($__internal_ee885c1b323d33e7fc31acef4aa2780ec084ba6436a6a14de935e04a167370cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41adc77cb157ba031e3dc71b9e9b7afc72277f73a6ad003b854b6006fb1f7444 = $this->env->getExtension("native_profiler");
        $__internal_41adc77cb157ba031e3dc71b9e9b7afc72277f73a6ad003b854b6006fb1f7444->enter($__internal_41adc77cb157ba031e3dc71b9e9b7afc72277f73a6ad003b854b6006fb1f7444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41adc77cb157ba031e3dc71b9e9b7afc72277f73a6ad003b854b6006fb1f7444->leave($__internal_41adc77cb157ba031e3dc71b9e9b7afc72277f73a6ad003b854b6006fb1f7444_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_893da0886075248549b22b86df748d577d80762fd12e5cdbc565959f2b203369 = $this->env->getExtension("native_profiler");
        $__internal_893da0886075248549b22b86df748d577d80762fd12e5cdbc565959f2b203369->enter($__internal_893da0886075248549b22b86df748d577d80762fd12e5cdbc565959f2b203369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_893da0886075248549b22b86df748d577d80762fd12e5cdbc565959f2b203369->leave($__internal_893da0886075248549b22b86df748d577d80762fd12e5cdbc565959f2b203369_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
