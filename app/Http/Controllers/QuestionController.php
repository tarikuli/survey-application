<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionOptions;
use App\Questionlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index ()
	{
		$count = 1;
		$questions = Question::orderBy('created_at')
		                      ->where('user_id', Auth::user()->id)
						      ->latest()
		                       ->get();
		
// 		return view('vendors.index', compact('vendors', 'count'));
	    return view('question.index', compact('questions', 'count'));
	}

	public function create ()
	{
	    $questionListOptions = Questionlist::with('QuestionOptions')->get();
	    
// 	    foreach ($questionListOptions as $questionOptions){
	        
// 	        echo "<br>".$questionOptions->questionTxt;
	        
// 	        foreach ($questionOptions->QuestionOptions as $questionOption){
// 	            echo "<br>".$questionOption->id;
// 	            echo " ".$questionOption->questionListId;
// 	            echo " ".$questionOption->questionOptionsTxt;
// 	        }
	        
// 	    }
		# return view('question.create');
		return view('question.create', compact('questionListOptions'));
	}

	public function store (Requests\QuestionCreateRequest $request)
	{
// 	    dd(Auth::user()->id);
// 	    dd($request->get('questions'));
// 	    dd($request->all());
	    
	    $questionObj = new Question();
	    $questionObj->user_id = Auth::user()->id;
	    $questionObj->question_answer = json_encode($request->get('questions'));
	    
	    $questionObj->save();
	    
	    session()->flash('success', 'Saved Successfully.');
	    
	    return redirect()->route('questions.index');
	    
	}

	public function show ($id)
	{
	    $question = Question::where('id', $id)
	                         ->where('user_id', Auth::user()->id)
                    	     ->get();
	    
	    if ( !isset($question[0]) ) {
	        return redirect()->route('questions.index');
		}

		$questionListOptions = Questionlist::with('QuestionOptions')->get();
		$queAnsArray = array_combine(json_decode($question[0]->question_answer),json_decode($question[0]->question_answer));
		
// 		print_r($queAnsArray);
		
		return view('question.show', compact('queAnsArray','questionListOptions'));
	}

	public function edit ($id)
	{
		$vendor = Question::find($id);
		if ( !$vendor ) {
			return view('errors.404');
		}

		return view('vendors.edit', compact('vendor'));
	}

	public function update (Requests\QuestionUpdateRequest $request, $id)
	{
		$vendor = Question::find($id);
		if ( !$vendor ) {
			return view('errors.404');
		}

		$vendor->vendor_name = trim($request->get('vendor_name'));
		$vendor->phone_number = trim($request->get('phone_number'));

		$vendor->contact_person_name = trim($request->get('contact_person_name'));
		$vendor->link = trim($request->get('account_link'));
		$vendor->login_id = trim($request->get('account_login'));

		$vendor->bank_info = trim($request->get('bank_info'));
		$vendor->paypal_info = trim($request->get('paypal_info'));
		$vendor->notes = trim($request->get('notes'));

		if ( $request->hasFile('image') ) {
			$vendor->image = $this->image_manipulator($request->file('image'), $request->get('vendor_name'));
		}


		$vendor->zip_code = trim($request->get('zip_code'));
		$vendor->state = trim($request->get('state'));
		$vendor->country = trim($request->get('country'));

		if ( $request->has('email') ) {
			$vendor->email = trim($request->get('email'));
		}
		if ( $request->has('account_password') ) {
			$vendor->password = $request->get('account_password');
		}

		$vendor->save();

		session()->flash('success', 'Vendor is successfully updated.');

		return redirect()->route('vendors.index');
	}

	public function destroy ($id)
	{
		$vendor = Question::find($id);
		if ( !$vendor ) {
			return view('errors.404');
		}

		$vendor->is_deleted = 1;
		$vendor->save();

		session()->flash('success', 'Vendor successfully deleted.');

		return redirect()->route('vendors.index');

	}

}
