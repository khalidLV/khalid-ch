<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class newsController extends Controller
{
    public function index()
    {
        // $news = news::where('user_id', Auth::id())->paginate(5);
        $news = news::all();
        $count = news::count();
        return view('new.index',  compact('news', 'count'));
    }

    public function create()
    {
        return view('new.create');
    }

    public function store(Request $request)
    {

        // $request->validate([

        //     'title' =>  'required',
        //     'discraption' => 'required'

        // ]);

        $news = new news();

        $news->title   =  $request->title;
        $news->discraption =  $request->discraption;
     
    //    $image->storeAs('/images');
    //    $news->image = $request->$imagename;

    // $path = $request->image->storeAs('images', 'filename.jpg');
                

        $news->save();

        // $news->categories()->attach($request->title);



        return redirect('/news')->with('status', 'news was updated !');
    }

    public function edit($id)
    {
        // $news = news::all();
        $news = news::find($id);

        return view('new.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([

            'title' =>  'required',
            'discraption' => 'required'

        ]);

        $news = news::find($id);
        $news->title =  $request->title;
        $news->discraption =  $request->discraption;

        $news->save();

        // $news->categories()->sync($request->title);

        return redirect('/news')->with('status', 'news was updated !');
    }

        public function destroy(Request $request,$id)
    {
        dd('f');
        $news = news::find($id) ;
        $news->delete();
        // $news->categories()->detach($request->title);
        return redirect('/news');
    }

}
