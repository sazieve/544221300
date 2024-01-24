<?php
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Illuminate\App\Models\Admin;

 class adminController extends Controller
 {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
       $admin = Admin::all();
       return view ('index')->with('admin', $admin);
   }

   /**
    * Show the form for creating a new resource.
    *
    *@return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Admin::create($input);
        return redirect('admin')->with('flash_message', 'Makanan telah ditambahkan! ');
        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request
         * @param int $id
         * @return mixed
         */
    }
 }
