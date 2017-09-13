<?php
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'User has access to all system functionality'
            ],
            [
                'name' => 'customer',
                'display_name' => 'Customer',
                'description' => 'User has all permissions assigned to a customer'
            ],
            [
                'name' => 'sales',
                'display_name' => 'Sales Representative',
                'description' => 'User has all permissions assigned to a Sales Rep'
            ],
            [
                'name' => 'marketer',
                'display_name' => 'Marketer representative',
                'description' => 'User has all the permissions assigned to a marketer'
            ],
            [
                'name' => 'account',
                'display_name' => 'Account Representative',
                'description' => 'User has all the permissions assigned to a accountant'
            ],
            [
                'name' => 'customer-care',
                'display_name' => 'Customer Care Representative',
                'description' => 'User has all the permissions assigned to a Customer care Rep'
            ]
            
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}