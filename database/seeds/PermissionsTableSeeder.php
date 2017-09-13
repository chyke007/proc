<?php
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{ /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'addsubscription',
                'display_name' => 'Add Subscription only',
                'description' => 'Allow user to only add a subscription'
            ],
            [
                'name' => 'placeorder',
                'display_name' => 'Place an Order',
                'description' => 'Allow user to only add an order'
            ],
            [
                'name' => 'privacy',
                'display_name' => 'Privacy',
                'description' => 'Allow user to edit their details'
            ],
            [
                'name' => 'showproduct',
                'display_name' => 'Show Product',
                'description' => 'Allow user to view all product'
            ],
            [
                'name' => 'showpackage',
                'display_name' => 'Show Package',
                'description' => 'Allow user to view all package'
            ],
            [
                'name' => 'showsales',
                'display_name' => 'Show Sales',
                'description' => 'Allow user to view all sales'
            ],
            [
                'name' => 'showsubscription',
                'display_name' => 'Show Subscription',
                'description' => 'Allow user to view all subscription'
            ],
            [
                'name' => 'addsales',
                'display_name' => 'Add Sales',
                'description' => 'Allow sales rep to add sales'
            ],
            [
                'name' => 'addeditsubscription',
                'display_name' => 'Add,Edit Subscription',
                'description' => 'Allow sales rep to add,edit subscription'
            ],
            
            [
                'name' => 'vieweditpackage',
                'display_name' => 'View,Edit Package',
                'description' => 'Allow admin to view,edit package'
            ],
            
            [
                'name' => 'vieweditproduct',
                'display_name' => 'View,Edit Product',
                'description' => 'Allow admin to view,edit product'
            ],
            
            [
                'name' => 'users',
                'display_name' => 'Superuser',
                'description' => 'Allow admin all the privileges on all users '
            ]
        ];

        foreach ($permissions as $key => $value) {
            Permission::create($value);
        }
    }
}

