<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AllDemo extends Seeder
{
    public function run()
    {
        $this->call('Country');
        $this->call('Modules');
        $this->call('ModulesSettings');        
        $this->call('Pages');
        $this->call('PaymentMethod');
        $this->call('ProductCategory');
        $this->call('Role');
        $this->call('Settings');       
        $this->call('Stores');
        $this->call('ThemeSettings');
        $this->call('Users');
        $this->call('Zone');        
        $this->call('ThemeSettingsFT3');
    }
}
