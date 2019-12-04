<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function about($name, $contactno){
    //return view('about');
    echo $name;
    echo '<br>';
    echo $contactno;
    
   }
   public function add(){
    return view('add');
   }
   public function store(Request $request){
    $obj = new Employee();
    $obj->name = $request->name;
    $obj->email = $request->email;
    $obj->birth_date = $request->birth_date;
    $obj->salary = $request->salary;
    if($obj->save());
    {
        //echo 'Succesfully inserted';
        return redirect()->to('/all');
    }
   }
   public function get(){
    $data = Employee::all();
    return view('list', ['employees'=>$data]);
   }
   public function edit($id)
   {
     $data = Employee::find($id);
     return view('edit',['employee'=>$data]);
   }
   public function update(Request $request){
    $obj = new Employee();
    $obj->name = $request->name;
    $obj->email = $request->email;
    $obj->birth_date = $request->birth_date;
    $obj->salary = $request->salary;
    if($obj->save());
    {
        echo 'Succesfully inserted';
        return redirect()->to('/all');
   }
   }
    public function delete($id)
   {
     $obj = Employee::find($id);
    if($obj->delete()){
        return redirect()->to('/all');
     }
   }
}
