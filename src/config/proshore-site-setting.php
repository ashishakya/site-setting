<?php

return [
    /*
     * Blade path for main layout Eg: layouts.main
     */
    'layout-extend-path' => 'layouts.layout',
    /*
     * prefix for the route. leave empty if not required
     */
    'prefix' => 'admin',
    /*
     * Add additional middleware if required
     */
    'middleware' => ['web', 'auth'],
    /*
     * Form class for create and edit menu
     */
    'form-class' => 'site-setting',
    /*
     * Add fields that is required in site setting
     *
     * Available option name, label, type
     * type => text | textarea | select | checkbox | Radio
     */
    'fields' => [
        [
            'name'  => 'textfield',
            'label' => 'TextField',
            'type'  => 'text',
        ],
        [
            'name'       => 'textarea',
            'label'      => 'TextArea',
            'type'       => 'textarea',
        ],
        [
            'name'    => 'select',
            'label'   => 'Select',
            'type'    => 'select',
            'options' => [
                '0' => 'Active',
                '1' => 'Inactive',
            ],
        ],
        [
            'name'  => 'checkbox',
            'label' => 'Checkbox',
            'type'  => 'checkbox',
        ],
        [
            'name'  => 'radio',
            'label' => 'Radio',
            'type'  => 'radio',
            'options' => [
                '0' => 'Active',
                '1' => 'Inactive',
            ],
        ],
    ],
];
