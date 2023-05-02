<?php declare(strict_types=1);

namespace zenit\PlatformStratus\Core;

use Exception;
use Shopware\Core\Content\Category\CategoryDefinition;
use Shopware\Core\Content\LandingPage\LandingPageDefinition;
use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\System\CustomField\CustomFieldTypes;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\ContainsFilter;

class CustomFieldsHelper {
    /**
     * @var $customFieldSetRepository;
     */
    private $customFieldSetRepository;

    public function __construct(EntityRepositoryInterface $customFieldSetRepository){
        $this->customFieldSetRepository = $customFieldSetRepository;
    }

    public function getCustomFields($container, $context): void
    {

        $relationLanding1 = [
            'id' => '7dbb74bcc4024fceb5e1390950458a3c',
            'entityName' =>  $container->get(LandingPageDefinition::class)->getEntityName()
        ];

        $relationCategory1 = [
            'id' => '54b16250f1eb11eaadc10242ac120002',
            'entityName' =>  $container->get(CategoryDefinition::class)->getEntityName()
        ];

        $relationCategory2 = [
            'id' => '54b1648af1eb11eaadc10242ac120002',
            'entityName' =>  $container->get(CategoryDefinition::class)->getEntityName()
        ];

        $relationCategory3 = [
            'id' => '6b6771a44f4244e6b3e6e3b2d7fbf200',
            'entityName' =>  $container->get(CategoryDefinition::class)->getEntityName()
        ];

        $relationCategory4 = [
            'id' => '9f59afcad0ec4b1abe09a0415472b60c',
            'entityName' =>  $container->get(CategoryDefinition::class)->getEntityName()
        ];

        $relationProduct1 = [
            'id' => '54b16584f1eb11eaadc10242ac120002',
            'entityName' =>  $container->get(ProductDefinition::class)->getEntityName()
        ];

        $relationProduct2 = [
            'id' => '54b16584f1eb11eaadc10222ac120002',
            'entityName' =>  $container->get(ProductDefinition::class)->getEntityName()
        ];

        $relationProduct3 = [
            'id' => '54b13984f1eb11eaadc10222ac120002',
            'entityName' =>  $container->get(ProductDefinition::class)->getEntityName()
        ];

        $customCategoryFields = [
            [
                'id' => '80a4ec59f356454ba0f43974f06b1ebc',
                'name' => 'zenit_stratus_category_classes',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'customFieldType' => 'text',
                    'customFieldPosition' => 20,
                    'label' => [
                        'en-GB' => 'CSS-Classes',
                        'de-DE' => 'CSS-Klassen',
                    ],
                    'helpText' => [
                        'en-GB' => 'Multiple classes can be added by separating them with a space. No dots before class names.',
                        'de-DE' => 'Mehrere Klassen können mit einem Leerzeichen getrennt hinzugefügt werden. Keine Punkte vor den Klassennamen.',
                    ]
                ]
            ],
            [
                'id' => '51008edb515e401f811418d7a0da3ab6',
                'name' => 'zenit_stratus_category_badge_text',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'customFieldType' => 'text',
                    'customFieldPosition' => 30,
                    'label' => [
                        'en-GB' => 'Badge - text',
                        'de-DE' => 'Label - Text',
                    ],
                    'placeholder' => [
                        'en-GB' => 'e.g. New, Top',
                        'de-DE' => 'z.B. Neu, Top',
                    ],
                    'helpText' => [
                        'en-GB' => 'Displays a badge in main navigation.',
                        'de-DE' => 'Zeigt ein Label im Menü an.',
                    ]
                ]
            ],
            [
                'id' => '1e2fd7fafa9b4a6b83b959b6fdb3e2d8',
                'name' => 'zenit_stratus_category_badge_bg',
                'type' => CustomFieldTypes::COLORPICKER,
                'config' => [
                    'componentName' => 'sw-field',
                    'customFieldType' => 'colorpicker',
                    'customFieldPosition' => 40,
                    'label' => [
                        'en-GB' => 'Badge - background color',
                        'de-DE' => 'Label - Hintergrundfarbe',
                    ],
                ],
            ],
            [
                'id' => '6806dd0401dc48c4a5807cc408158867',
                'name' => 'zenit_stratus_category_badge_color',
                'type' => CustomFieldTypes::COLORPICKER,
                'config' => [
                    'componentName' => 'sw-field',
                    'customFieldType' => 'colorpicker',
                    'customFieldPosition' => 50,
                    'label' => [
                        'en-GB' => 'Badge - text color',
                        'de-DE' => 'Label - Textfarbe',
                    ],
                ],
            ],
        ];

        $productListingColumnsCategoryFields = [
            [
                'id' => '01c3c71e28b14c6297cfac55d5529b6f',
                'name' => 'zenit_stratus_product_listing_columns_xs',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 10,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Small Smartphones',
                        'de-DE' => 'Kleine Smartphones',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Number of columns per row. Indicates how many articles are displayed in one line in the selected viewport.',
                        'de-DE' => 'Anzahl der Spalten pro Zeile. Gibt an, wie viele Artikel in einer Zeile im gewählten Viewport angezeigt werden.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '1',
                            'label' => [
                                'en-GB' => '1',
                                'de-DE' => '1',
                            ]
                        ],
                        [
                            'value' => '2',
                            'label' => [
                                'en-GB' => '2',
                                'de-DE' => '2',
                            ]
                        ],
                    ]
                ],
            ],
            [
                'id' => 'aa5de5db92134031a0c542cea7f86a26',
                'name' => 'zenit_stratus_product_listing_columns_sm',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 20,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Smartphones',
                        'de-DE' => 'Smartphones',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Number of columns per row. Indicates how many articles are displayed in one line in the selected viewport.',
                        'de-DE' => 'Anzahl der Spalten pro Zeile. Gibt an, wie viele Artikel in einer Zeile im gewählten Viewport angezeigt werden.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '1',
                            'label' => [
                                'en-GB' => '1',
                                'de-DE' => '1',
                            ]
                        ],
                        [
                            'value' => '2',
                            'label' => [
                                'en-GB' => '2',
                                'de-DE' => '2',
                            ]
                        ],
                        [
                            'value' => '3',
                            'label' => [
                                'en-GB' => '3',
                                'de-DE' => '3',
                            ]
                        ],
                        [
                            'value' => '4',
                            'label' => [
                                'en-GB' => '4',
                                'de-DE' => '4',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5',
                                'de-DE' => '5',
                            ]
                        ],
                        [
                            'value' => '6',
                            'label' => [
                                'en-GB' => '6',
                                'de-DE' => '6',
                            ]
                        ],
                    ]
                ],
            ],
            [
                'id' => '622a0b4a2f8f4236bf57d7502d142fac',
                'name' => 'zenit_stratus_product_listing_columns_md',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 30,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Tablets',
                        'de-DE' => 'Tablets',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Number of columns per row. Indicates how many articles are displayed in one line in the selected viewport.',
                        'de-DE' => 'Anzahl der Spalten pro Zeile. Gibt an, wie viele Artikel in einer Zeile im gewählten Viewport angezeigt werden.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '1',
                            'label' => [
                                'en-GB' => '1',
                                'de-DE' => '1',
                            ]
                        ],
                        [
                            'value' => '2',
                            'label' => [
                                'en-GB' => '2',
                                'de-DE' => '2',
                            ]
                        ],
                        [
                            'value' => '3',
                            'label' => [
                                'en-GB' => '3',
                                'de-DE' => '3',
                            ]
                        ],
                        [
                            'value' => '4',
                            'label' => [
                                'en-GB' => '4',
                                'de-DE' => '4',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5',
                                'de-DE' => '5',
                            ]
                        ],
                        [
                            'value' => '6',
                            'label' => [
                                'en-GB' => '6',
                                'de-DE' => '6',
                            ]
                        ],
                    ]
                ],
            ],
            [
                'id' => 'd9b4faa1811741e0ba1d6365da0695c3',
                'name' => 'zenit_stratus_product_listing_columns_lg',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 40,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Laptops',
                        'de-DE' => 'Laptops',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Number of columns per row. Indicates how many articles are displayed in one line in the selected viewport.',
                        'de-DE' => 'Anzahl der Spalten pro Zeile. Gibt an, wie viele Artikel in einer Zeile im gewählten Viewport angezeigt werden.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '1',
                            'label' => [
                                'en-GB' => '1',
                                'de-DE' => '1',
                            ]
                        ],
                        [
                            'value' => '2',
                            'label' => [
                                'en-GB' => '2',
                                'de-DE' => '2',
                            ]
                        ],
                        [
                            'value' => '3',
                            'label' => [
                                'en-GB' => '3',
                                'de-DE' => '3',
                            ]
                        ],
                        [
                            'value' => '4',
                            'label' => [
                                'en-GB' => '4',
                                'de-DE' => '4',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5',
                                'de-DE' => '5',
                            ]
                        ],
                        [
                            'value' => '6',
                            'label' => [
                                'en-GB' => '6',
                                'de-DE' => '6',
                            ]
                        ],
                    ]
                ],
            ],
            [
                'id' => 'b90963f8269e4be7952e623d54110f56',
                'name' => 'zenit_stratus_product_listing_columns_xl',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 50,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Desktop',
                        'de-DE' => 'Desktop',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Number of columns per row. Indicates how many articles are displayed in one line in the selected viewport.',
                        'de-DE' => 'Anzahl der Spalten pro Zeile. Gibt an, wie viele Artikel in einer Zeile im gewählten Viewport angezeigt werden.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '1',
                            'label' => [
                                'en-GB' => '1',
                                'de-DE' => '1',
                            ]
                        ],
                        [
                            'value' => '2',
                            'label' => [
                                'en-GB' => '2',
                                'de-DE' => '2',
                            ]
                        ],
                        [
                            'value' => '3',
                            'label' => [
                                'en-GB' => '3',
                                'de-DE' => '3',
                            ]
                        ],
                        [
                            'value' => '4',
                            'label' => [
                                'en-GB' => '4',
                                'de-DE' => '4',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5',
                                'de-DE' => '5',
                            ]
                        ],
                        [
                            'value' => '6',
                            'label' => [
                                'en-GB' => '6',
                                'de-DE' => '6',
                            ]
                        ],
                    ]
                ],
            ],
        ];

        $customCategoryHeaderFields = [
            [
                'id' => '54b16656f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_header_position',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 10,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Header overlay',
                        'de-DE' => 'Header überlagernd',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'The header can also be displayed on listings on an adventure world and overlay it. An impressive layout is created especially when overlaying images, sliders and videos.',
                        'de-DE' => 'Der Header kann auf Listings auch auf einer Erlebniswelt dargestellt werden und diese überlagern. Insbesondere beim Überlagern von Bilder, Slidern und Videos entsteht ein eindrucksvolles Layout.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => 'absolute',
                            'label' => [
                                'en-GB' => 'Yes',
                                'de-DE' => 'Ja',
                            ]
                        ],
                        [
                            'value' => 'relative',
                            'label' => [
                                'en-GB' => 'No',
                                'de-DE' => 'Nein',
                            ]
                        ],
                    ]
                ],
            ],
            [
                'id' => '54b1671ef1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_header_bg_opacity',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 20,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Header Background Opacity',
                        'de-DE' => 'Header Hintergrund Deckkraft',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '0',
                            'label' => [
                                'en-GB' => '0%',
                                'de-DE' => '0%',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5%',
                                'de-DE' => '5%',
                            ]
                        ],
                        [
                            'value' => '10',
                            'label' => [
                                'en-GB' => '10%',
                                'de-DE' => '10%',
                            ]
                        ],
                        [
                            'value' => '15',
                            'label' => [
                                'en-GB' => '15%',
                                'de-DE' => '15%',
                            ]
                        ],
                        [
                            'value' => '20',
                            'label' => [
                                'en-GB' => '20%',
                                'de-DE' => '20%',
                            ]
                        ],
                        [
                            'value' => '25',
                            'label' => [
                                'en-GB' => '25%',
                                'de-DE' => '25%',
                            ]
                        ],
                        [
                            'value' => '30',
                            'label' => [
                                'en-GB' => '30%',
                                'de-DE' => '30%',
                            ]
                        ],
                        [
                            'value' => '35',
                            'label' => [
                                'en-GB' => '35%',
                                'de-DE' => '35%',
                            ]
                        ],
                        [
                            'value' => '40',
                            'label' => [
                                'en-GB' => '40%',
                                'de-DE' => '40%',
                            ]
                        ],
                        [
                            'value' => '45',
                            'label' => [
                                'en-GB' => '45%',
                                'de-DE' => '45%',
                            ]
                        ],
                        [
                            'value' => '50',
                            'label' => [
                                'en-GB' => '50%',
                                'de-DE' => '50%',
                            ]
                        ],
                        [
                            'value' => '55',
                            'label' => [
                                'en-GB' => '55%',
                                'de-DE' => '55%',
                            ]
                        ],
                        [
                            'value' => '60',
                            'label' => [
                                'en-GB' => '60%',
                                'de-DE' => '60%',
                            ]
                        ],
                        [
                            'value' => '65',
                            'label' => [
                                'en-GB' => '65%',
                                'de-DE' => '65%',
                            ]
                        ],
                        [
                            'value' => '70',
                            'label' => [
                                'en-GB' => '70%',
                                'de-DE' => '70%',
                            ]
                        ],
                        [
                            'value' => '75',
                            'label' => [
                                'en-GB' => '75%',
                                'de-DE' => '75%',
                            ]
                        ],
                        [
                            'value' => '80',
                            'label' => [
                                'en-GB' => '80%',
                                'de-DE' => '80%',
                            ]
                        ],
                        [
                            'value' => '85',
                            'label' => [
                                'en-GB' => '85%',
                                'de-DE' => '85%',
                            ]
                        ],
                        [
                            'value' => '90',
                            'label' => [
                                'en-GB' => '90%',
                                'de-DE' => '90%',
                            ]
                        ],
                        [
                            'value' => '95',
                            'label' => [
                                'en-GB' => '95%',
                                'de-DE' => '95%',
                            ]
                        ],
                        [
                            'value' => '100',
                            'label' => [
                                'en-GB' => '100%',
                                'de-DE' => '100%',
                            ]
                        ]
                    ]
                ],
            ],
            [
                'id' => '54b167e6f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_nav_main_opacity',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 20,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Main Navigation Background Opacity',
                        'de-DE' => 'Hauptnavigation Hintergrund Deckkraft',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '0',
                            'label' => [
                                'en-GB' => '0%',
                                'de-DE' => '0%',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5%',
                                'de-DE' => '5%',
                            ]
                        ],
                        [
                            'value' => '10',
                            'label' => [
                                'en-GB' => '10%',
                                'de-DE' => '10%',
                            ]
                        ],
                        [
                            'value' => '15',
                            'label' => [
                                'en-GB' => '15%',
                                'de-DE' => '15%',
                            ]
                        ],
                        [
                            'value' => '20',
                            'label' => [
                                'en-GB' => '20%',
                                'de-DE' => '20%',
                            ]
                        ],
                        [
                            'value' => '25',
                            'label' => [
                                'en-GB' => '25%',
                                'de-DE' => '25%',
                            ]
                        ],
                        [
                            'value' => '30',
                            'label' => [
                                'en-GB' => '30%',
                                'de-DE' => '30%',
                            ]
                        ],
                        [
                            'value' => '35',
                            'label' => [
                                'en-GB' => '35%',
                                'de-DE' => '35%',
                            ]
                        ],
                        [
                            'value' => '40',
                            'label' => [
                                'en-GB' => '40%',
                                'de-DE' => '40%',
                            ]
                        ],
                        [
                            'value' => '45',
                            'label' => [
                                'en-GB' => '45%',
                                'de-DE' => '45%',
                            ]
                        ],
                        [
                            'value' => '50',
                            'label' => [
                                'en-GB' => '50%',
                                'de-DE' => '50%',
                            ]
                        ],
                        [
                            'value' => '55',
                            'label' => [
                                'en-GB' => '55%',
                                'de-DE' => '55%',
                            ]
                        ],
                        [
                            'value' => '60',
                            'label' => [
                                'en-GB' => '60%',
                                'de-DE' => '60%',
                            ]
                        ],
                        [
                            'value' => '65',
                            'label' => [
                                'en-GB' => '65%',
                                'de-DE' => '65%',
                            ]
                        ],
                        [
                            'value' => '70',
                            'label' => [
                                'en-GB' => '70%',
                                'de-DE' => '70%',
                            ]
                        ],
                        [
                            'value' => '75',
                            'label' => [
                                'en-GB' => '75%',
                                'de-DE' => '75%',
                            ]
                        ],
                        [
                            'value' => '80',
                            'label' => [
                                'en-GB' => '80%',
                                'de-DE' => '80%',
                            ]
                        ],
                        [
                            'value' => '85',
                            'label' => [
                                'en-GB' => '85%',
                                'de-DE' => '85%',
                            ]
                        ],
                        [
                            'value' => '90',
                            'label' => [
                                'en-GB' => '90%',
                                'de-DE' => '90%',
                            ]
                        ],
                        [
                            'value' => '95',
                            'label' => [
                                'en-GB' => '95%',
                                'de-DE' => '95%',
                            ]
                        ],
                        [
                            'value' => '100',
                            'label' => [
                                'en-GB' => '100%',
                                'de-DE' => '100%',
                            ]
                        ]
                    ]
                ],
            ],
        ];

        $customCategoryImageFields = [
            [
                'id' => '54b16a98f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 10,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Display Category image',
                        'de-DE' => 'Kategoriebild anzeigen',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'If active, the category image is inserted as a background in the first section of the used shopping experience layout. Categories without a category image represent the background image inserted in the shopping experience as a fallback.',
                        'de-DE' => 'Wenn aktiv, wird das Kategoriebild als Hintergrund in der ersten Section der eingestellten Erlebniswelt eingefügt. Kategorien ohne Kategoriebild stellen das in der Erlebniswelt eingefügte Hintergrundbild als Fallback dar.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => 'display',
                            'label' => [
                                'en-GB' => 'Yes',
                                'de-DE' => 'Ja',
                            ]
                        ],
                        [
                            'value' => 'hide',
                            'label' => [
                                'en-GB' => 'No',
                                'de-DE' => 'Nein',
                            ]
                        ],
                    ]
                ],
            ],
            [
                'id' => '54b16b6af1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image_contrast',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 20,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Text contrast',
                        'de-DE' => 'Text Kontrast',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Specifies the contrast color of the texts in the foreground. For dark backgrounds, use light text for optimal contrast.',
                        'de-DE' => 'Legt die Kontrastfarbe der Texte im Vordergrund fest. Bei dunklen Hintergründen verwende heller Text für einen optimalen Kontrast.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => 'light-text',
                            'label' => [
                                'en-GB' => 'Light text',
                                'de-DE' => 'Heller Text',
                            ]
                        ],
                        [
                            'value' => 'dark-text',
                            'label' => [
                                'en-GB' => 'Dark Text',
                                'de-DE' => 'Dunkler Text',
                            ]
                        ]
                    ]
                ],
            ],
            [
                'id' => '54b16c32f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image_color',
                'type' => CustomFieldTypes::COLORPICKER,
                'config' => [
                    'customFieldPosition' => 30,
                    'label' => [
                        'en-GB' => 'Background color',
                        'de-DE' => 'Hintergrundfarbe',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Overwrites the background color set in the shopping experience for the first section with the category image.',
                        'de-DE' => 'Überschreibt die in der Erlebniswelt gesetzte Hintergrundfarbe für die erste Section mit dem Kategoriebild.',
                    ]
                ]
            ],
            [
                'id' => '54b16cf0f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image_opacity',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 40,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Opacity',
                        'de-DE' => 'Sichtbarkeit',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Opacity of the category image above tha background color. With this option, the background image can be subdued and the text above it can be made more legible.',
                        'de-DE' => 'Sichtbarkeit des Hintergrundbildes über der Hintergrundfarbe. Mit dieser Option kann das Hintergrundbild gedämpft werden und darüberliegender Text lesbarer gestaltet werden.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => '0',
                            'label' => [
                                'en-GB' => '0%',
                                'de-DE' => '0%',
                            ]
                        ],
                        [
                            'value' => '5',
                            'label' => [
                                'en-GB' => '5%',
                                'de-DE' => '5%',
                            ]
                        ],
                        [
                            'value' => '10',
                            'label' => [
                                'en-GB' => '10%',
                                'de-DE' => '10%',
                            ]
                        ],
                        [
                            'value' => '15',
                            'label' => [
                                'en-GB' => '15%',
                                'de-DE' => '15%',
                            ]
                        ],
                        [
                            'value' => '20',
                            'label' => [
                                'en-GB' => '20%',
                                'de-DE' => '20%',
                            ]
                        ],
                        [
                            'value' => '25',
                            'label' => [
                                'en-GB' => '25%',
                                'de-DE' => '25%',
                            ]
                        ],
                        [
                            'value' => '30',
                            'label' => [
                                'en-GB' => '30%',
                                'de-DE' => '30%',
                            ]
                        ],
                        [
                            'value' => '35',
                            'label' => [
                                'en-GB' => '35%',
                                'de-DE' => '35%',
                            ]
                        ],
                        [
                            'value' => '40',
                            'label' => [
                                'en-GB' => '40%',
                                'de-DE' => '40%',
                            ]
                        ],
                        [
                            'value' => '45',
                            'label' => [
                                'en-GB' => '45%',
                                'de-DE' => '45%',
                            ]
                        ],
                        [
                            'value' => '50',
                            'label' => [
                                'en-GB' => '50%',
                                'de-DE' => '50%',
                            ]
                        ],
                        [
                            'value' => '55',
                            'label' => [
                                'en-GB' => '55%',
                                'de-DE' => '55%',
                            ]
                        ],
                        [
                            'value' => '60',
                            'label' => [
                                'en-GB' => '60%',
                                'de-DE' => '60%',
                            ]
                        ],
                        [
                            'value' => '65',
                            'label' => [
                                'en-GB' => '65%',
                                'de-DE' => '65%',
                            ]
                        ],
                        [
                            'value' => '70',
                            'label' => [
                                'en-GB' => '70%',
                                'de-DE' => '70%',
                            ]
                        ],
                        [
                            'value' => '75',
                            'label' => [
                                'en-GB' => '75%',
                                'de-DE' => '75%',
                            ]
                        ],
                        [
                            'value' => '80',
                            'label' => [
                                'en-GB' => '80%',
                                'de-DE' => '80%',
                            ]
                        ],
                        [
                            'value' => '85',
                            'label' => [
                                'en-GB' => '85%',
                                'de-DE' => '85%',
                            ]
                        ],
                        [
                            'value' => '90',
                            'label' => [
                                'en-GB' => '90%',
                                'de-DE' => '90%',
                            ]
                        ],
                        [
                            'value' => '95',
                            'label' => [
                                'en-GB' => '95%',
                                'de-DE' => '95%',
                            ]
                        ],
                        [
                            'value' => '100',
                            'label' => [
                                'en-GB' => '100%',
                                'de-DE' => '100%',
                            ]
                        ]
                    ]
                ]
            ],
            [
                'id' => '54b16daef1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image_attachment',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 50,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Attachment',
                        'de-DE' => 'Fixieren',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Determines whether a background image moves with the scroll or keeps its fixed location on the page.',
                        'de-DE' => 'Bestimmt, ob ein Hintergrundbild beim Scrollen mitwandert oder seinen festen Ort auf der Seite behält.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => 'scroll',
                            'label' => [
                                'en-GB' => 'Scroll',
                                'de-DE' => 'Mitscrollend',
                            ]
                        ],
                        [
                            'value' => 'fixed',
                            'label' => [
                                'en-GB' => 'Fixed',
                                'de-DE' => 'Fixiert',
                            ]
                        ]
                    ]
                ],
            ],
            [
                'id' => '54b16e6cf1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image_position',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 60,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Position',
                        'de-DE' => 'Position',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Sets the position of en background image.',
                        'de-DE' => 'Legt Position eines Hintergrundbildes fest.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => 'left top',
                            'label' => [
                                'en-GB' => 'left top',
                                'de-DE' => 'left top',
                            ]
                        ],
                        [
                            'value' => 'left center',
                            'label' => [
                                'en-GB' => 'left center',
                                'de-DE' => 'left center',
                            ]
                        ],
                        [
                            'value' => 'left bottom',
                            'label' => [
                                'en-GB' => 'left bottom',
                                'de-DE' => 'left bottom',
                            ]
                        ],
                        [
                            'value' => 'center top',
                            'label' => [
                                'en-GB' => 'center top',
                                'de-DE' => 'center top',
                            ]
                        ],
                        [
                            'value' => 'center center',
                            'label' => [
                                'en-GB' => 'center center',
                                'de-DE' => 'center center',
                            ]
                        ],
                        [
                            'value' => 'center bottom',
                            'label' => [
                                'en-GB' => 'center bottom',
                                'de-DE' => 'center bottom',
                            ]
                        ],
                        [
                            'value' => 'right top',
                            'label' => [
                                'en-GB' => 'right top',
                                'de-DE' => 'right top',
                            ]
                        ],
                        [
                            'value' => 'right center',
                            'label' => [
                                'en-GB' => 'right center',
                                'de-DE' => 'right center',
                            ]
                        ],
                        [
                            'value' => 'right bottom',
                            'label' => [
                                'en-GB' => 'right bottom',
                                'de-DE' => 'right bottom',
                            ]
                        ],
                    ]
                ],
            ],
        ];

        $customProductFields = [
            [
                'id' => '54b85f20f1eb33eaadc10242ac350002',
                'name' => 'zenit_stratus_features',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'customFieldType' => 'text',
                    'customFieldPosition' => 0,
                    'label' => [
                        'en-GB' => 'Product features',
                        'de-DE' => 'Produkt Features',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Feature 1; Feature 2; Feature 3; ...;',
                        'de-DE' => 'Feature 1; Feature 2; Feature 3; ...;',
                    ],
                    'helpText' => [
                        'en-GB' => 'Multiple features can be entered separated by semicolon.',
                        'de-DE' => 'Mehrere Features können, durch ein Semikolon getrennt, eingetragen werden.',
                    ]
                ]
            ],
            [
                'id' => '54b16f20f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_youtube_ids',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'customFieldType' => 'text',
                    'customFieldPosition' => 10,
                    'label' => [
                        'en-GB' => 'Youtube IDs',
                        'de-DE' => 'Youtube IDs',
                    ],
                    'placeholder' => [
                        'en-GB' => 'KCRgZXXmJG4,oQAFy229bEU',
                        'de-DE' => 'KCRgZXXmJG4,oQAFy229bEU',
                    ],
                    'helpText' => [
                        'en-GB' => 'Multiple IDs can be entered separated by commas. You will find the YouTube ID in the 11-digit number at the end of the YouTube link in the address line (?v= XXXXXXXXXX))',
                        'de-DE' => 'Mehrere IDs können kommasepariert eingetragen werden. Du findest die Youtube ID in der 11-stelligen Nummer am Ende des Youtube-Links in der Adresszeile (?v=  XXXXXXXXXX))',
                    ]
                ]
            ],
            [
                'id' => '54b1722cf1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_custom_tab1_title',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'customFieldType' => 'text',
                    'customFieldPosition' => 20,
                    'label' => [
                        'en-GB' => 'Tab 1 Title',
                        'de-DE' => 'Tab 1 Titel',
                    ]
                ]
            ],
            [
                'id' => '54b172fef1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_custom_tab1_text',
                'type' => CustomFieldTypes::HTML,
                'config' => [
                    'componentName' => 'sw-text-editor',
                    'customFieldType' => 'textEditor',
                    'customFieldPosition' => 25,
                    'label' => [
                        'en-GB' => 'Tab 1 Text',
                        'de-DE' => 'Tab 1 Text',
                    ]
                ]
            ],
            [
                'id' => '54b173bcf1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_custom_tab2_title',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'customFieldType' => 'text',
                    'customFieldPosition' => 30,
                    'label' => [
                        'en-GB' => 'Tab 2 Title',
                        'de-DE' => 'Tab 2 Titel',
                    ]
                ]
            ],
            [
                'id' => '54b1747af1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_custom_tab2_text',
                'type' => CustomFieldTypes::HTML,
                'config' => [
                    'componentName' => 'sw-text-editor',
                    'customFieldType' => 'textEditor',
                    'customFieldPosition' => 35,
                    'label' => [
                        'en-GB' => 'Tab 2 Text',
                        'de-DE' => 'Tab 2 Text',
                    ]
                ]
            ]
        ];

        $customProductDatasheets = [
            [
                'id' => '54b1747af1eb11eaadc11242ac120002',
                'name' => 'zenit_stratus_datasheet_one',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'componentName' => 'sw-media-field',
                    'customFieldType' => "media",
                    'customFieldPosition' => 10,
                    'label' => [
                        'en-GB' => 'Datasheet 1',
                        'de-DE' => 'Datenblatt 1',
                    ],
                    'helpText' => [
                        'en-GB' => 'Displays a file in the datasheets tab. Useful file formats PDF, TXT, JPG, PNG or GIF.',
                        'de-DE' => 'Stellt eine Datei im Tab für Datenblätter dar. Sinnvolle Dateiformate PDF, TXT, JPG, PNG oder GIF.',
                    ]
                ]
            ],
            [
                'id' => '54b1747af1eb11eaadc12242ac120002',
                'name' => 'zenit_stratus_datasheet_two',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'componentName' => 'sw-media-field',
                    'customFieldType' => "media",
                    'customFieldPosition' => 15,
                    'label' => [
                        'en-GB' => 'Datasheet 2',
                        'de-DE' => 'Datenblatt 2',
                    ],
                    'helpText' => [
                        'en-GB' => 'Displays a file in the datasheets tab. Useful file formats PDF, TXT, JPG, PNG or GIF.',
                        'de-DE' => 'Stellt eine Datei im Tab für Datenblätter dar. Sinnvolle Dateiformate PDF, TXT, JPG, PNG oder GIF.',
                    ]
                ]
            ],
            [
                'id' => '54b1747af1eb11eaadc13242ac120002',
                'name' => 'zenit_stratus_datasheet_three',
                'type' => CustomFieldTypes::TEXT,
                'config' => [
                    'componentName' => 'sw-media-field',
                    'customFieldType' => "media",
                    'customFieldPosition' => 20,
                    'label' => [
                        'en-GB' => 'Datasheet 3',
                        'de-DE' => 'Datenblatt 3',
                    ],
                    'helpText' => [
                        'en-GB' => 'Displays a file in the datasheets tab. Useful file formats PDF, TXT, JPG, PNG or GIF.',
                        'de-DE' => 'Stellt eine Datei im Tab für Datenblätter dar. Sinnvolle Dateiformate PDF, TXT, JPG, PNG oder GIF.',
                    ]
                ]
            ],
        ];

        $customProductGallery = [
            [
                'id' => '54b1747af1eb99eaadc13242ac120002',
                'name' => 'zenit_stratus_gallery_mode',
                'type' => CustomFieldTypes::SELECT,
                'config' => [
                    'customFieldPosition' => 10,
                    'componentName' => 'sw-single-select',
                    'label' => [
                        'en-GB' => 'Gallery mode',
                        'de-DE' => 'Galerie Modus',
                    ],
                    'placeholder' => [
                        'en-GB' => 'Inherit',
                        'de-DE' => 'Vererbt'
                    ],
                    'helpText' => [
                        'en-GB' => 'Switches the image gallery either to slider mode (standard) or to scroller mode.',
                        'de-DE' => 'Schaltet die Image Galerie entweder in den Slider-Modus (Standard) oder in den Scroller Modus.',
                    ],
                    'options' => [
                        [
                            'value' => 'inherit',
                            'label' => [
                                'en-GB' => 'Inherit',
                                'de-DE' => 'Vererbt',
                            ]
                        ],
                        [
                            'value' => 'slider',
                            'label' => [
                                'en-GB' => 'Gallery Slider',
                                'de-DE' => 'Galerie Slider',
                            ]
                        ],
                        [
                            'value' => 'scroller',
                            'label' => [
                                'en-GB' => 'Gallery Scroller',
                                'de-DE' => 'Galerie Scroller',
                            ]
                        ],
                        [
                            'value' => 'grid',
                            'label' => [
                                'en-GB' => 'Gallery Grid',
                                'de-DE' => 'Galerie Raster',
                            ]
                        ]
                    ]
                ],
            ]
        ];

        $customFieldSets = [
            [
                'id' => '54b17542f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_header_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Header (Stratus)',
                        'de-DE' => 'Header (Stratus)',
                    ]
                ],
                'customFields' => $customCategoryHeaderFields,
                'relations' => [$relationCategory1, $relationLanding1]
            ],
            [
                'id' => '54b17600f1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_category_image_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Category Image (Stratus)',
                        'de-DE' => 'Kategoriebild (Stratus)',
                    ]
                ],
                'customFields' => $customCategoryImageFields,
                'relations' => [$relationCategory2]
            ],
            [
                'id' => '385361c63e0e46a49667a8bca3467552',
                'name' => 'zenit_stratus_additional_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Additional (Stratus)',
                        'de-DE' => 'Weitere (Stratus)',
                    ]
                ],
                'customFields' => $customCategoryFields,
                'relations' => [$relationCategory3]
            ],
            [
                'id' => 'ccd8d3eeb72a4c2a86357d72beb99383',
                'name' => 'zenit_stratus_product_listing_columns_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Products per Row (Stratus)',
                        'de-DE' => 'Produkte pro Zeile (Stratus)',
                    ]
                ],
                'customFields' => $productListingColumnsCategoryFields,
                'relations' => [$relationCategory4]
            ],
            [
                'id' => '54b176bef1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_tabs_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Custom content (Stratus)',
                        'de-DE' => 'Zusatzinhalte (Stratus)',
                    ]
                ],
                'customFields' => $customProductFields,
                'relations' => [$relationProduct1]
            ],
            [
                'id' => '54b177bef1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_datasheets_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Datasheets (Stratus)',
                        'de-DE' => 'Datenblätter (Stratus)',
                    ]
                ],
                'customFields' => $customProductDatasheets,
                'relations' => [$relationProduct2]
            ],
            [
                'id' => '54b177abf1eb11eaadc10242ac120002',
                'name' => 'zenit_stratus_gallery_set',
                'config' => [
                    'label' => [
                        'en-GB' => 'Galerie (Stratus)',
                        'de-DE' => 'Galerie (Stratus)',
                    ]
                ],
                'customFields' => $customProductGallery,
                'relations' => [$relationProduct3]
            ],
        ];

        try {
            $this->customFieldSetRepository->upsert($customFieldSets, $context);
        } catch (Exception $e) {}
    }

    public function deleteCustomFields($context): void
    {
        $criteria = new Criteria();
        $criteria->addFilter(new ContainsFilter('name', 'zenit_stratus'));

        $criteriaResult = $this->customFieldSetRepository->search($criteria, $context);
        $ids = $criteriaResult->getIds();

        if(!empty($ids)) {
            $data = [];

            foreach ($ids as $id) {
                $data[] = [
                    'id' => $id
                ];
            }

            $this->customFieldSetRepository->delete($data, $context);
        }
    }
}
