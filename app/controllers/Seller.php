<?php 

class Seller
{
    use Controller;
    public $sidebarMenu = [
        [
            'text' => 'Home',
            'url' => '/seller/dashboard'
        ],
        [
            'text' => 'products',
            'url' => '/seller/products'
        ],
        [
            'text' => 'vehicles',
            'url' => '/seller/vehicles'
        ],
        [
            'text' => 'Logout',
            'url' => '/home'
        ]
    ];

    public function index()
    {
        // echo "farm controller";

        $this->render('seller','dashboard');
    }

    public function products()
    {
        // echo "farm controller";

        $this->render('seller','products');
    }

    public function vehicles()
    {
        // echo "farm controller";

        $this->render('seller','vehicles');
    }
}
