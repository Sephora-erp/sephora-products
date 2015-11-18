<?php

class Products {
    //Basic activation data
    public $basic = [
        'name' => 'Products',
        'description' => 'Products module allow\'s to manage products in the ERP',
        'version' => '0.0.1',
        'vendor' => 'Inforfenix',
        'package' => 'sephora.basic.products',
        'min-sephora' => '0.0.1',
        'max-sephora' => '0.0.1',
        'icon' => '',
        'has_triggers' => 0,
        'has_hooks' => 1
    ];
    //Menus array
    public $menus = [
        0 => [
            'type' => 'top',
            'title' => 'Products',
            'uuid' => 'products_top',
            'icon' => 'fa fa-square',
            'url' => '/',
            'package' => 'sephora.basic.products'
        ],
        1 => [
            'type' => 'child',
            'title' => 'New product',
            'uuid' => 'products_new-product',
            'url' => '/products/new',
            'parent' => 'products_top',
            'package' => 'sephora.basic.products'
        ],
    ];
    //Routes data
    public $routes = [
    ];
   /* //Triggers
    public $triggers = [
        0 => [
            'action' => 'pageLoad'
        ]
    ];*/
    //Hooks declaration
    public $hooks = [
        0 => [
            'container' => 'headerCss',
        ]
    ];
}
