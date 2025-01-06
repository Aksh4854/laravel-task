<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        $ramesh = Employee::create(['name' => 'Ramesh']);
        $deepu = Employee::create(['name' => 'Deepu']);
        $prem = Employee::create(['name' => 'Prem Chopra']);

        $gaurav = Employee::create(['name' => 'Gaurav', 'manager_id' => $ramesh->id]);
        $shalu = Employee::create(['name' => 'Shalu', 'manager_id' => $ramesh->id]);

        $amit = Employee::create(['name' => 'Amit', 'manager_id' => $deepu->id]);
        $shamLal = Employee::create(['name' => 'Sham Lal', 'manager_id' => $amit->id]);
        $kapil = Employee::create(['name' => 'Kapil', 'manager_id' => $deepu->id]);
    }
}
