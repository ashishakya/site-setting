<?php
return [

    /**
     * Add fields that is required in site setting
     *
     * Available option name, label, type
     * type => text | textarea | select | checkbox | Radio
     */
    'fields' => [
        [
            'name'  => 'textfield',
            'label' => 'TextField',
            'type'  => 'text'
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
                '1' => 'Inactive'
            ]
        ],
        [
            'name'  => 'checkbox',
            'label' => 'Checkbox',
            'type'  => 'checkbox'
        ],
        [
            'name'  => 'radio',
            'label' => 'Radio',
            'type'  => 'radio',
            'options' => [
                '0' => 'Active',
                '1' => 'Inactive'
            ]
        ],
    ]
];
