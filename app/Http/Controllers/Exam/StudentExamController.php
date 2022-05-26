<?php

namespace App\Http\Controllers\Exam;

use App\Http\Controllers\Controller;
use App\Models\StudentExam;
use Illuminate\Http\Request;

class StudentExamController extends Controller
{
    public function create(){
        
        return view('Admin.exam.exam_form');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'question' => 'required',
            'opa' => 'required',
            'opb' => 'required',
            'opc' => 'required',
            'opd' => 'required',
            'ans' => 'required'
        ]);

        $questions = new StudentExam();

        $questions->question = $request->question;
        $questions->a = $request->opa;
        $questions->b = $request->opb;
        $questions->c = $request->opc;
        $questions->d = $request->opd;
        $questions->ans = $request->ans;
        $questions->save();

        return redirect()->back()->with('message', 'Question inserted successfully');
    }

    public function show(){
        $allQuestions = StudentExam::all();
        return view('Admin.exam.exam_manage', compact('allQuestions'));
    }

    public function edit($id){
        $editData = StudentExam::where('id', $id)->first();
        return view('Admin.exam.edit', compact('editData'));
    }

    public function updateData(Request $request, $id){
        $questions = StudentExam::where('id', $id)->first();

        $questions->question = $request->question;
        $questions->a = $request->opa;
        $questions->b = $request->opb;
        $questions->c = $request->opc;
        $questions->d = $request->opd;
        $questions->ans = $request->ans;
        $questions->save();

        return redirect()->back()->with('message', 'Question updated successfully');
    }

    
    public function destroy($id){
        $deleteData = StudentExam::find($id);
        $deleteData->delete();

        return redirect()->route('question')->with('message', 'Data is successfully DELETED.');
    }


}
