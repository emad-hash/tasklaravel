<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class bookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $allBook = BookModel::all();
        return view('books',['allBook'=>$allBook]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request);
      $book = new BookModel();
      $book->book_title = $request->book_title;
      $book->book_description = $request->book_description;
      $book->book_auther = $request->book_author;
      $book->book_image = $request->book_image;
      $book->save();

     return redirect('index');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $book = DB::table('book_models')->where('id',$id)->first();
         return view('edit' , ['book' => $book]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $book = BookModel::find($id);
        
        $book->book_title = $request->book_title;
        $book->book_description = $request->book_description;
        $book->book_auther = $request->book_author;
        $book->book_image = $request->book_image;
        $book->save();
        return redirect('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = BookModel::find($id);
        $book->delete();
        return redirect('index');    }
}
