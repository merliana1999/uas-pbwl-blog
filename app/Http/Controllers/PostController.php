<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post; 
use App\Category; 

class PostController extends Controller
{  
    public function index()
    {
        $rows = Post::paginate(10);
        return view('post.index', compact('rows'));
    }    
    public function create()
    {
        $cat = category::All();
        return view('post.add', compact('cat'));
    }   
    public function store(Request $request)
    {
       $this->validate($request, [
            'post_date'     => 'required',
            'post_slug'     => 'required',
            'post_tittle'   => 'required',
            'post_text'     => 'required',
            'post_cat_id'   => 'required'
         ]);
        $rows=Post::create([
            'post_date'     => $request->post_date,
            'post_slug'     => $request->post_slug,
            'post_tittle'   => $request->post_tittle,
            'post_text'     => $request->post_text,
            'post_cat_id'   => $request->post_cat_id
        ]);
       return redirect('post'); 
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $cat = Category::All();
         $rows = Post::findOrFail($id);
        return view('post.edit', compact('rows','cat'));
    }

    public function update(Request $request, $id)
    {
         $rows = Post::find($id);
         $rows->update([
            'post_date' => $request->post_date,
            'post_slug' => $request->post_slug,
            'post_tittle' => $request->post_tittle,
            'post_text' => $request->post_text,
            'post_cat_id' => $request->post_cat_id   
         ]);

        return redirect('post');
    }
    
    public function destroy($id)
    {
         {
        $rows = Post::findOrFail($id);
        $rows->delete();

        return redirect('post');
    }
    }
}
