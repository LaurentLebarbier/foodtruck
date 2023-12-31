<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__User__CLASSMETADATA__' => 0,
'App__Entity__Option__CLASSMETADATA__' => 1,
'App__Entity__Produits__CLASSMETADATA__' => 2,
'App__Entity__OrderProduits__CLASSMETADATA__' => 3,
'App__Entity__Order__CLASSMETADATA__' => 4,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\User',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\User',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\UserRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 180,
                            'unique' => true,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'roles' => [
                            'fieldName' => 'roles',
                            'type' => 'json',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'roles',
                        ],
                        'password' => [
                            'fieldName' => 'password',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'password',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 100,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'firstname' => [
                            'fieldName' => 'firstname',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 100,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'firstname',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'name' => 'name',
                        'firstname' => 'firstname',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'email' => 'email',
                        'roles' => 'roles',
                        'password' => 'password',
                        'name' => 'name',
                        'firstname' => 'firstname',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'user',
                    ],
                ],
                'associationMappings' => [
                    [
                        'orders' => [
                            'fieldName' => 'orders',
                            'mappedBy' => 'user',
                            'targetEntity' => 'App\\Entity\\Order',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\User',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Option',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Option',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\OptionRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'option',
                        'quoted' => true,
                    ],
                ],
                'associationMappings' => [
                    [
                        'produits' => [
                            'fieldName' => 'produits',
                            'joinTable' => [],
                            'targetEntity' => 'App\\Entity\\Produits',
                            'mappedBy' => 'options',
                            'inversedBy' => null,
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Option',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Produits',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Produits',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ProduitsRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'name' => [
                            'fieldName' => 'name',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'name',
                        ],
                        'description' => [
                            'fieldName' => 'description',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'description',
                        ],
                        'created_at' => [
                            'fieldName' => 'created_at',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'created_at',
                        ],
                        'base64' => [
                            'fieldName' => 'base64',
                            'type' => 'text',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'base64',
                        ],
                        'filename' => [
                            'fieldName' => 'filename',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'filename',
                        ],
                        'prix' => [
                            'fieldName' => 'prix',
                            'type' => 'decimal',
                            'scale' => 2,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => 10,
                            'columnName' => 'prix',
                        ],
                        'stock' => [
                            'fieldName' => 'stock',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'options' => [
                                'default' => true,
                            ],
                            'columnName' => 'stock',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'description' => 'description',
                        'created_at' => 'created_at',
                        'base64' => 'base64',
                        'filename' => 'filename',
                        'prix' => 'prix',
                        'stock' => 'stock',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'name' => 'name',
                        'description' => 'description',
                        'created_at' => 'created_at',
                        'base64' => 'base64',
                        'filename' => 'filename',
                        'prix' => 'prix',
                        'stock' => 'stock',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'produits',
                    ],
                ],
                'associationMappings' => [
                    [
                        'options' => [
                            'fieldName' => 'options',
                            'joinTable' => [
                                'name' => 'produits_option',
                                'joinColumns' => [
                                    [
                                        'name' => 'produits_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                                'inverseJoinColumns' => [
                                    [
                                        'name' => 'option_id',
                                        'referencedColumnName' => 'id',
                                        'onDelete' => 'CASCADE',
                                    ],
                                ],
                            ],
                            'targetEntity' => 'App\\Entity\\Option',
                            'mappedBy' => null,
                            'inversedBy' => 'produits',
                            'cascade' => [],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 8,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Produits',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'joinTableColumns' => [
                                'produits_id',
                                'option_id',
                            ],
                            'isOnDeleteCascade' => true,
                            'relationToSourceKeyColumns' => [
                                'produits_id' => 'id',
                            ],
                            'relationToTargetKeyColumns' => [
                                'option_id' => 'id',
                            ],
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
3 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\OrderProduits',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\OrderProduits',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\OrderProduitsRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'quantity' => [
                            'fieldName' => 'quantity',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'quantity',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'quantity' => 'quantity',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'quantity' => 'quantity',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'order_produits',
                    ],
                ],
                'associationMappings' => [
                    [
                        'produits' => [
                            'fieldName' => 'produits',
                            'joinColumns' => [
                                [
                                    'name' => 'produits_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => null,
                            'targetEntity' => 'App\\Entity\\Produits',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\OrderProduits',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'produits_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'produits_id' => 'produits_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'produits_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                        'command' => [
                            'fieldName' => 'command',
                            'joinColumns' => [
                                [
                                    'name' => 'command_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'orderProduits',
                            'targetEntity' => 'App\\Entity\\Order',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\OrderProduits',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'command_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'command_id' => 'command_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'command_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
4 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Order',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Order',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\OrderRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'reference' => [
                            'fieldName' => 'reference',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'reference',
                        ],
                        'price' => [
                            'fieldName' => 'price',
                            'type' => 'decimal',
                            'scale' => 2,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => 10,
                            'columnName' => 'price',
                        ],
                        'created_at' => [
                            'fieldName' => 'created_at',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'created_at',
                        ],
                        'stripeToken' => [
                            'fieldName' => 'stripeToken',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'stripe_token',
                        ],
                        'brandStripe' => [
                            'fieldName' => 'brandStripe',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'brand_stripe',
                        ],
                        'last4Stripe' => [
                            'fieldName' => 'last4Stripe',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'last4_stripe',
                        ],
                        'idChargeStripe' => [
                            'fieldName' => 'idChargeStripe',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'id_charge_stripe',
                        ],
                        'statusStripe' => [
                            'fieldName' => 'statusStripe',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'status_stripe',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'reference' => 'reference',
                        'price' => 'price',
                        'created_at' => 'created_at',
                        'stripe_token' => 'stripeToken',
                        'brand_stripe' => 'brandStripe',
                        'last4_stripe' => 'last4Stripe',
                        'id_charge_stripe' => 'idChargeStripe',
                        'status_stripe' => 'statusStripe',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'reference' => 'reference',
                        'price' => 'price',
                        'created_at' => 'created_at',
                        'stripeToken' => 'stripe_token',
                        'brandStripe' => 'brand_stripe',
                        'last4Stripe' => 'last4_stripe',
                        'idChargeStripe' => 'id_charge_stripe',
                        'statusStripe' => 'status_stripe',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'order',
                        'quoted' => true,
                    ],
                ],
                'associationMappings' => [
                    [
                        'user' => [
                            'fieldName' => 'user',
                            'joinColumns' => [
                                [
                                    'name' => 'user_id',
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'orders',
                            'targetEntity' => 'App\\Entity\\User',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Order',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'user_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'user_id' => 'user_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'user_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                        'orderProduits' => [
                            'fieldName' => 'orderProduits',
                            'mappedBy' => 'command',
                            'targetEntity' => 'App\\Entity\\OrderProduits',
                            'cascade' => [],
                            'orphanRemoval' => true,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Order',
                            'isCascadeRemove' => true,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
