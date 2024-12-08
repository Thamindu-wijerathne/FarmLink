<?php 

class Farmer
{
    use Controller;

    public $sidebarMenu = [
        [
            'text' => 'Home',
            'url' => '/farmer/dashboard'
        ],
        [
            'text' => 'Products',
            'url' => '/farmer/products'
        ],
        [
            'text' => 'Calender',
            'url' => '/farmer/calendar'
        ],
        [
            'text' => 'Account',
            'url' => '/farmer/account'
        ],
        [
            'text' => 'Logout',
            'url' => '/home'
        ]
    ];

    public function index()
    {
        // echo "farm controller";

        $this->render('farmer','dashboard');
    }

    public function products()
    {
        // echo "farm controller";

        $this->render('farmer','products');
    }

    public function calendar()
    {
        // echo "farm controller";

        $this->render('farmer','calendar');
    }

    public function account()
    {
        // echo "farm controller";

        $this->render('farmer','account');
    }
}
