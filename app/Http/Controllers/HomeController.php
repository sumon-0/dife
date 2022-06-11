<?php

namespace App\Http\Controllers;

use App\Models\Answers;
use App\Models\CompanyDetails;
use App\Models\Feedback;
use App\Models\Questions;
use App\Models\SubmitedAnswer;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function fire_safety()
    {
        return view('fire_safety.index');
    }

    public function store_company_details(Request $request)
    {
        $data=request()->validate([
            'owner_name'=>'required',
            'company_name'=>'required',
            'address'=>'',
        ]);
        $result=CompanyDetails::create($data);
        if($result!=NULL){
            $company_id=$result->id;
            $question=Questions::where('fk_category_id',1)->first();
            $total_questions=count(Questions::where('fk_category_id',1)->get());
            $answer=Answers::where('fk_question_id',$question->id)->first();
            return view('fire_safety.questions',compact('question','answer','company_id','total_questions'));
        }
        else {
            return redirect()->route('fire-safety')->with('error_status', 'Something went wrong, please try again later !');
        }
    }
    public function submit_answer(Request $request)
    {
       $data=request()->validate([
            'fk_company_id'=>'',
            'question_no'=>'required',
            'selected_answer'=>'required',

        ]);

        $result=SubmitedAnswer::create($data);

        if($result!=NULL){
            $question=$result->question_no;
            $next_question=$question+1;
            $total_questions=count(Questions::where('fk_category_id',1)->get());
            if($next_question>$total_questions){
                return redirect()->route('feedback');
            }

            else {
                return redirect()->to('fire-safety/'.$next_question);
            }

        }

    }

    public function get_question($id)
    {
        $question=Questions::where('id',$id)->first();
        $answer=Answers::where('fk_question_id',$question->id)->first();
        $total_questions=count(Questions::where('fk_category_id',1)->get());
        $company_id=SubmitedAnswer::orderBy('id', 'desc')->pluck('fk_company_id')->first();

        return view('fire_safety.questions',compact('question','answer','total_questions','company_id'));
    }


    public function feedback(){
        $company_id=SubmitedAnswer::orderBy('id', 'desc')->pluck('fk_company_id')->first();
        return view('feedback',compact('company_id'));
    }

    public function submit_feedback(Request $request)
    {
        $data=$request->validate([
            'fk_company_id'=>'required',
            'feedback_answer'=>'required',
        ]);
        $result=Feedback::create($data);
        if($result!=NULL){
            $all_answers = DB::table('tbl_submited_answers')
                ->join('tbl_questions', 'tbl_submited_answers.question_no', '=', 'tbl_questions.id')
                ->join('tbl_answers', 'tbl_submited_answers.question_no', '=', 'tbl_answers.fk_question_id')
                ->join('tbl_company_details', 'tbl_submited_answers.fk_company_id', '=', 'tbl_company_details.id')
                ->select('tbl_submited_answers.*', 'tbl_questions.question', 'tbl_answers.answer_one','tbl_answers.answer_two','tbl_company_details.company_name','tbl_company_details.owner_name','tbl_company_details.address')
                ->where('tbl_submited_answers.fk_company_id',$result['fk_company_id'])
                ->get();
            return view('all_answers',compact('all_answers'));
        }
    }

}
