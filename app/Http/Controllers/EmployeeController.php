<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function showHierarchy($parentId = null)
    {
        $employees = Employee::all();
        
        return $this->buildHierarchy($employees, $parentId);
    }

    public function buildHierarchy($employees, $parentId)
    {
        $list = [];
        
        foreach ($employees as $employee) {
            if ($employee->manager_id == $parentId) {
                $subordinates = $this->buildHierarchy($employees, $employee->id);
                
                $list[] = [
                    'name' => $employee->name,
                    'subordinates' => $subordinates,
                ];
            }
        }

        return $list;
    }

    public function displayHierarchy()
    {
        $hierarchy = $this->showHierarchy();
        return view('employee-hierarchy', ['hierarchy' => $hierarchy]);
    }
}

