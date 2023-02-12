<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Studentsresult extends Controller
{
    public function index(){
        return view('Students.fetchresult');
    }
    public function FetchStudents(Request $request){
        if($request->ajax()){
            $search = $request->get('search');
            $data = Student::where('std_roll_no', 'like', '%' .$search. '%')->get();
            // echo json_encode($data);
            $output = "";
            $output.= "<table>";
            $output.= "<tr>
                            <th>Roll no</th>
                            <th>Student Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>Result</th>
                        </tr>";
            if($data){
                foreach ($data as $row){
                    $output.="<tr>
                        <td>$row->std_roll_no</td>
                        <td>$row->std_name</td>
                        <td>$row->std_gender</td>
                        <td>$row->std_address</td>
                        <td>$row->std_result</td>
                    </tr>";
                }
            }else{
                $output.="<tr><td>No Data Found</td></tr>";
            }
            $output.= "</table>";
           return $output;
        }
        
    }
}
