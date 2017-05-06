<?php
/**
 * @desc
 * @author zhan <grianchan@gmail.com>
 * @since 2017/5/6 0006 15:27
 */

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function getStudents()
    {
        $result = Student::all();
        return response()->json($result);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function addStudent(Request $request)
    {
        $student = new Student();
        $student->name = $request->get('name', 'noName');
        $student->time = $request->get('time', '2012-12-12');
        $student->age = $request->get('age', 0);
        $student->save();
        return response('添加成功');
    }
}