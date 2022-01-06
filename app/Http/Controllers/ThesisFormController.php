<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ThesisForm;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ThesisFormController extends Controller
{
    /**
     * Display a thesis form of the resource
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.thesis-form');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string|min:3|max:255|unique:thesis',
            'abstract' => 'required|string|min:3|max:255',
            'year' => 'required|string|min:3|max:255',
            'pages' => 'required|string|min:3|max:255',
            'submission_date' => 'required|string|min:3|max:255',
            'thesis_type' => 'required|string|min:3|max:255'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('insert')
                ->withInput()
                ->withErrors($validator);
        }
        else {
            $data = $request->input();
            try {
                $thesis = new ThesisForm();
                $thesis->title = $data['title'];
                $thesis->abstract = $data['abstract'];
                $thesis->year = $data['year'];
                $thesis->pages = $data['pages'];
                $thesis->submission_date = $data['submission_date'];
                $thesis->save();
                return redirect('insert')->with('status',"Insert succesfully");
            }
            catch (Exception $e) {
                return redirect('insert')->with('failed',"Operation failed");
            }
        }
    }

}
