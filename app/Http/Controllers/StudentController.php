<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // 一覧表示
    public function index() {
        $students = Student::all();
        return response()->json([
            'data' => $students
        ], 200);
    }

    // 登録
    public function store(Request $request) {
        $student = new Student();
        $student->name = $request->name;
        $student->save();
        return response()->json([
            'data' => $student
        ], 201);
    }

    // 更新
    public function update(Request $request, Student $student) {
        $student->fill($request->all());
        $student->save();
        return response()->json([
            'data' => $student
        ], 200);
    }

    // 削除
    public function delete(Student $student) {
        $student->delete();
        return response()->json([
            'message' => 'deleted successfully.'
        ], 200);
    }
}

