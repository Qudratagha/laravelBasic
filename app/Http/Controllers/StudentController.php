<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Student::select('*');
            return Datatables::of($query)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '
                    <a href="'. route('student.show',$row->id) .'" class="btn btn-success">View</a>

                      <a href="'. route('student.edit',$row->id) .'" class="btn btn-success">Edit</a>
                      <form action="'.route('student.destroy',$row->id).'" method="POST" style="float:left;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <button type="submit" class="btn btn-danger" onsubmit="return confirm(\'Are you sure you want to delete this?\');" style="display: inline-block;"><i class="fa fa-trash" style="font-size:20px" ></i>Del</button>
                        </form>

                              ';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('/student.stuend');
    }
    public function getStudents(Request $request)
    {
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show(Student $student)
    {
        return view('student.show',compact('student'));
    }
    public function edit(Student $student)
    {
        return view('student.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect(route('student.index'));
    }
    public function destroy(Student $student)
    {
       $student->delete();
        return view('/student.stuend');
    }
}
