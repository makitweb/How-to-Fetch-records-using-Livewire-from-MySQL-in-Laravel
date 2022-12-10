<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employees;

class Fetchemployees extends Component
{
    public $records;
    public $employeeid = 0;

    // Fetch record by ID 
    public function fetchbyid(){
        $this->records = Employees::select('*')
                        ->where('id',$this->employeeid)
                        ->get();
    }

    // Fetch all records 
    public function fetchall(){
        $this->records = Employees::orderby('id','asc')
                        ->select('*')
                        ->get();
    }

    public function render()
    {
        return view('livewire.fetchemployees');
    } 
}
