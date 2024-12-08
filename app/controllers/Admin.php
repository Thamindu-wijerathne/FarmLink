<?php 

class Admin
{
    use Controller;

    public $sidebarMenu = [
        [
            'text' => 'Home',
            'url' => '/farmer/dashboard'
        ],
        [
            'text' => 'Farmers',
            'url' => '/admin/farmers'
        ],
        [
            'text' => 'Sellers',
            'url' => '/admin/sellers'
        ],
        [
            'text' => 'Locations',
            'url' => '/admin/locations'
        ],
        [
            'text' => 'Logout',
            'url' => '/home'
        ]
    ];

    public function index()
    {
        // echo "farm controller";

        $this->render('admin','dashboard');
    }

    public function farmers()
    {
        // echo "farm controller";

        $this->render('admin','farmers');
    }

    public function sellers()
    {
        // echo "farm controller";

        $this->render('admin','sellers');
    }

    public function locations()
    {
        // echo "farm controller";

        $this->render('admin','locations');
    }

}
