<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    public function index () {
        $file = file_get_contents(public_path('data.json'));
        $db = json_decode($file, false);
        $price = new \stdClass();
        foreach ($db->prices AS $p) {
            $key = $p->name;
            $value = $p->price;
            $price->$key = $value;
        }

        $data = [
            'php_hosting_features' => [
                'Solusi PHP untuk performa query yang lebih cepat.',
                'Konsumsi memori lebih rendah.',
                'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 5.7',
                'Fitur enkripsi IonCube dan Zend Guard Loaders',
            ],
            'packages' => [
                [
                    'active' => false,
                    'discount' => 0,
                    'title' => 'Bayi',
                    'strike_price' => 19900,
                    'price' => $price->bayi,
                    'registered' => 938,
                    'features' => [
                        [
                            'bold' => '0.5X RESOURCE POWER',
                            'text' => null
                        ],
                        [
                            'bold' => '500 MB',
                            'text' => 'Disk Space'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Bandwidth'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Databases'
                        ],
                        [
                            'bold' => 1,
                            'text' => 'Domain'
                        ],
                        [
                            'bold' => 'Instant',
                            'text' => 'Backup'
                        ],
                        [
                            'bold' => 'Unlimited SSL',
                            'text' => 'Gratis Selamanya'
                        ],
                    ]
                ],
                [
                    'active' => false,
                    'discount' => 0,
                    'title' => 'Pelajar',
                    'strike_price' => 46900,
                    'price' => $price->pelajar,
                    'registered' => 4168,
                    'features' => [
                        [
                            'bold' => '1X RESOURCE POWER',
                            'text' => null
                        ],
                        [
                            'bold' => '500 MB',
                            'text' => 'Disk Space'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Bandwidth'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Pop3 Email'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Databases'
                        ],
                        [
                            'bold' => 10,
                            'text' => 'Addon Domain'
                        ],
                        [
                            'bold' => 'Instant',
                            'text' => 'Backup'
                        ],
                        [
                            'bold' => 'Domain Gratis',
                            'text' => 'Selamanya'
                        ],
                        [
                            'bold' => 'Unlimited SSL',
                            'text' => 'Gratis Selamanya'
                        ],
                    ]
                ],
                [
                    'active' => true,
                    'discount' => 0,
                    'title' => 'Personal',
                    'strike_price' => 58900,
                    'price' => $price->personal,
                    'registered' => 10017,
                    'features' => [
                        [
                            'bold' => '2X RESOURCE POWER',
                            'text' => null
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Disk Space'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Bandwidth'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Pop3 Email'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Databases'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Addon Domain'
                        ],
                        [
                            'bold' => 'Instant',
                            'text' => 'Backup'
                        ],
                        [
                            'bold' => 'Domain Gratis',
                            'text' => 'Selamanya'
                        ],
                        [
                            'bold' => 'Unlimited SSL',
                            'text' => 'Gratis Selamanya'
                        ],
                        [
                            'bold' => 'Private',
                            'text' => 'Name Server'
                        ],
                        [
                            'bold' => 'SpamAssasin',
                            'text' => 'Mail Protection'
                        ],
                    ]
                ],
                [
                    'active' => false,
                    'discount' => '40%',
                    'title' => 'Bisnis',
                    'strike_price' => 109900,
                    'price' => $price->bisnis,
                    'registered' => 3552,
                    'features' => [
                        [
                            'bold' => '3X RESOURCE POWER',
                            'text' => null
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Disk Space'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Bandwidth'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Pop3 Email'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Databases'
                        ],
                        [
                            'bold' => 'Unlimited',
                            'text' => 'Addon Domain'
                        ],
                        [
                            'bold' => 'Magic Auto',
                            'text' => 'Backup & Restore'
                        ],
                        [
                            'bold' => 'Domain Gratis',
                            'text' => 'Selamanya'
                        ],
                        [
                            'bold' => 'Unlimited SSL',
                            'text' => 'Gratis Selamanya'
                        ],
                        [
                            'bold' => 'Private',
                            'text' => 'Name Server'
                        ],
                        [
                            'bold' => 'Prioritas',
                            'text' => 'Layanan Support'
                        ],
                        [
                            'bold' => 'SpamExpert',
                            'text' => 'Pro Mail Protection'
                        ],
                    ]
                ],
            ]
        ];
        return view('page.home', $data);
    }
}
