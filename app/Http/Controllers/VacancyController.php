<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\controllers\vacancyController;
use App\Models\vacancy;

use DB;
// use Auth;
class vacancyController extends Controller
{        
    public function index()
    {   //dd(1);
        $vacancy = DB::table('vacancy')->get();
        return view('vacancy\index',[
            'vacancy' => $vacancy
        ]);
    }
   /**
*     * Show the form for creating a new resource.
    */
    public function create() {
        //
        //dd('inside create ');
        return view ('vacancy\create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //step 1 
        //get all the data from request and store it in variables
        //HAndeled !empty because a is passed from form (feilds left empty) toh database mei null chala jaaye
        $title = !empty($request->title)?$request->title:NULL;
        $min_exp = !empty($request->min_exp)?$request->min_exp:NULL;
        $max_exp = !empty($request->max_exp)?$request->max_exp:NULL;
        $description = !empty($request->description)?$request->description:NULL;
        $skills = !empty($request->skills)?$request->skills:NULL;
        $salary = !empty($request->salary)?$request->salary:NULL;
        $display_from = !empty($request->display_from)?$request->display_from:NULL;
        $display_till = !empty($request->display_till)?$request->display_till:NULL;
        $status=!empty($request->status)?$request->status:NULL;
        $sequence=!empty($request->sequence)?$request->sequence:NULL;
        $created_by = 1;
        $updated_by = 1;
        $created_at = date('Y-m-d H:i:s');
        $updated_at = date('Y-m-d H:i:s');
        //step 2
        //create an array to store data in database
        $insert_arr = [
            'title'        => $title,
            'min_exp'      => $min_exp,
            'max_exp'      => $max_exp,
            'description'  => $description,
            'skills'       => $skills,
            'salary'       => $salary,
            'display_from' => $display_from,
            'display_till' => $display_till,
            'status'       => $status,
            'sequence'     => $sequence,
            'updated_at'   => $updated_at,
            'updated_by'   => $updated_by,
            'created_at'   => $created_at,
            'created_by'   => $created_by
        ];
        //step 3 
        //store in database , run query
        // $query = DB::table('vacancy')->create($insert_arr);
        $query = DB::table('vacancy')->insert($insert_arr);
        //step 4
        //check if data is inserted or not
        if($query) {
            return redirect('vacancy')->with('success', 'vacancy created successfully');
        }
        else {
            return redirect()->back()->with('error', 'Error creating vacancy');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            // Find the vacancy by ID
            $vacancy = vacancy::findOrFail($id);
            // Assuming you have a 'show' view, pass the vacancy data to it
            return view('vacancy.show', compact('vacancy'));
        } catch (\Exception $e) {
            // Log the error or handle it in a way that makes sense for your application
            return redirect()->route('vacancy.index')->with('error', 'vacancy not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {  
            $vacancy = vacancy::findOrFail($id);
            return view('vacancy.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
    $vacancy = vacancy::findOrFail($id);
  
    $vacancy->update([
        'title'        => $request->input('title'),
        'min_exp'      => $request->input('min_exp'),
        'max_exp'      => $request->input('max_exp'),
        'description'  => $request->input('description'),
        'skills'       => $request->input('skills'),
        'salary'       => $request->input('salary'),
        'display_from' => $request->input('display_from'),
        'display_till' => $request->input('display_till'),
        'status'       => $request->input('status'),
        'sequence'     => $request->input('sequence'),
        'updated_by' => 1,
        'updated_at' => now()
    ]);
    return redirect()->route('vacancy.index')->with('success', 'vacancy updated successfully');
}
    public function destroy($id)
{
    $vacancy = vacancy::findOrFail($id);
    $vacancy->delete();
    return redirect()->route('vacancy.index')->with('success', 'vacancy deleted successfully');
}
}