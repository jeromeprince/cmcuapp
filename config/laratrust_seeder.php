<?php

return [
    'role_structure' => [
        'superadministrateur' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'gestionnaire' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'medecin' => [
            'profile' => 'r,u'
        ],
        'Infirmier' => [
            'profile' => 'r,u'
        ],
        'secretaire' => [
            'profile' => 'r,u'
        ],
        'pharmacien' => [
            'profile' => 'r,u'
        ],
        'caisse' => [
            'profile' => 'r,u'
        ],
        'logistique' => [
            'profile' => 'r,u'
        ],
        'qualite' => [
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
