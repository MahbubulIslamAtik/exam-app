<?php

namespace App\Http\Controllers;

use App\Models\StudentExam;
use Illuminate\Http\Request;

class StartExamController extends Controller
{
    public function create(){
        session()->put('nextq', '1');
        session()->put('wrongans', '0');
        session()->put('currectans', '0');
        $question=StudentExam::all()->first();

        return view('frontend.question', compact(['question']));
    }

    public function submitAnswer(Request $request){
       $nextq= session()->get('nextq');
       $wrongans= session()->get('wrongans');
       $currectans= session()->get('currectans');
       
       $nextq += 1;

       if($request->db_ans == $request->ans){
           $currectans += 1;
       }else{
           $wrongans += 1;
       }

        session()->put('nextq', $nextq);
        session()->put('wrongans', $wrongans);
        session()->put('currectans', $currectans);
    
       $i = 0;
       $questions = StudentExam::all();

       foreach($questions as $question){
           $i++;
           if($question->count() < $nextq){
               return view('frontend.end_exam');
           }

           if($i == $nextq){
               return view('frontend.question', compact(['question']));
           }
       }
    }
}
