<?php
return array(
    'zfctwig' => array(
        'config' => array(
            'cache' => 'data/cache/twig',
            'allow_php_fallback' => true,
            'auto_reload'=>true,
        ),
        'suffix' => '.twig',
        'extensions' => array(

        )
    ),
    'view_manager' => array(
        'strategies'   => array('TwigViewStrategy'),
        'template_map' => array(
        ),
    )
);