<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee');
    }

    public function create(Request $request)
    {
        // echo "Insert data work here";

        $name = request('name');
        $age = request('age');
        $salary = request('salary');

        // echo $name . "         " . $age . "          " . $salary;

        $query = DB::insert('insert into employees (name, age, salary) values (?, ?, ?)', [$name, $age, $salary]);

        if($query)
        {
            // echo "Data Inserted Successfully";
            return redirect('employee')->with('status', 'Data Inserted Successfully');
        }
        else{
            echo "Data Insertion Failled";

        }

    }

    public function display()
    {

        $data = DB::select('select * from employees');
        // dd($data);
        return view('display', compact('data'));
    }

    public function update($id)
    {
        $id = $id;
        // echo $id;
        // echo "update work here";

        $data = DB::select('select * from employees where id = ?', [$id]);

        // dd($data);

        return view('update', compact('data'));
    }

    public function updateData(Request $request)
    {

        $id = request('id');
        $name = request('name');
        $age = request('age');
        $salary = request('salary');

        // echo $id . "      " . $name . "  " . $age . "  " . $salary;

        $query = DB::update('update employees set name = ?, age = ?, salary = ? where id = ?', [$name, $age, $salary, $id]);

        if($query)
        {
            // echo "Data Updated Successfully";

            return redirect('display')->with('status', 'Data Updated Successfully');
        }
        else
        {
            // echo "Data Updation Failled";
            return redirect('display')->with('warning', 'Similar data could not be update');
        }
    }

    public function delete($id)
    {
        $id = $id;
        // echo $id;

        $query = DB::delete('delete from employees where id = ?', [$id]);

        if($query)
        {
            return redirect('display')->with('status', 'Data Deleted Successfully');
        }
        else{
            echo "Data Deletion failled";
        }
    }

}
