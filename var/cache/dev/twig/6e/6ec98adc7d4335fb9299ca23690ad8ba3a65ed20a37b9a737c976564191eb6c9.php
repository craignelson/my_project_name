<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_35ab73784676f72b57027f9c02694f9e48181d536828f505c665862b7a32b4bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4fc79f9d8b8f4ab2208bc37dfe6dcbfcf6b85940d7d7ec7057384bab399cb95 = $this->env->getExtension("native_profiler");
        $__internal_a4fc79f9d8b8f4ab2208bc37dfe6dcbfcf6b85940d7d7ec7057384bab399cb95->enter($__internal_a4fc79f9d8b8f4ab2208bc37dfe6dcbfcf6b85940d7d7ec7057384bab399cb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4fc79f9d8b8f4ab2208bc37dfe6dcbfcf6b85940d7d7ec7057384bab399cb95->leave($__internal_a4fc79f9d8b8f4ab2208bc37dfe6dcbfcf6b85940d7d7ec7057384bab399cb95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_170dbb8f9e046de829496dd22ddca0dfb6c84bcbff3d300b47c4fa10c9f83b6f = $this->env->getExtension("native_profiler");
        $__internal_170dbb8f9e046de829496dd22ddca0dfb6c84bcbff3d300b47c4fa10c9f83b6f->enter($__internal_170dbb8f9e046de829496dd22ddca0dfb6c84bcbff3d300b47c4fa10c9f83b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_170dbb8f9e046de829496dd22ddca0dfb6c84bcbff3d300b47c4fa10c9f83b6f->leave($__internal_170dbb8f9e046de829496dd22ddca0dfb6c84bcbff3d300b47c4fa10c9f83b6f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11bd7614d999f21abf2a50195154efd33f650f0be191a6f90b88d2aa952a75a8 = $this->env->getExtension("native_profiler");
        $__internal_11bd7614d999f21abf2a50195154efd33f650f0be191a6f90b88d2aa952a75a8->enter($__internal_11bd7614d999f21abf2a50195154efd33f650f0be191a6f90b88d2aa952a75a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11bd7614d999f21abf2a50195154efd33f650f0be191a6f90b88d2aa952a75a8->leave($__internal_11bd7614d999f21abf2a50195154efd33f650f0be191a6f90b88d2aa952a75a8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d457df923dd12acf5654c67d244476bc0a1a93bd7870d9056fed4011bf3e6c3f = $this->env->getExtension("native_profiler");
        $__internal_d457df923dd12acf5654c67d244476bc0a1a93bd7870d9056fed4011bf3e6c3f->enter($__internal_d457df923dd12acf5654c67d244476bc0a1a93bd7870d9056fed4011bf3e6c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d457df923dd12acf5654c67d244476bc0a1a93bd7870d9056fed4011bf3e6c3f->leave($__internal_d457df923dd12acf5654c67d244476bc0a1a93bd7870d9056fed4011bf3e6c3f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
