<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Models\Kategori;
use App\Models\Tag;

class PostController extends Controller
{

    public function blog(Post $post, Request $request)
    {   

        $post = $post->select('*')->newQuery();

        if($request->has('q')) {
            $search = $request->get('q');
            $post->where(function($query) use ($search) {
                $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('content', 'LIKE', '%' . $search . '%');
            })
            ;
        }

        $posts = $post->orderBy('created', 'desc')->where('Kategori_id',1)->paginate()->appends(['q' => $request->q]);
        $meta = [
            "title" => "Blog Sigit Wahyudi",
            "desc" => "blog dan tulisan Sigit Wahyudi"
        ];

        return view('front.blog', compact('posts', 'meta'))->withQuery($request->q);
    }

    public function category($slug, Request $request)
    {   

        $kategori = Kategori::where('slug',$slug)->first();
        $items = $kategori->post()->orderBy('created', 'desc')->paginate(6);

            if($slug = "catatan"){
                $meta = [
                    "title" => "Catatan Sigit Wahyudi",
                    "desc" => "Catatan seorang programmer dalam pekerjaan sehari hari sebagai ASN di Kampus"
                ];
            }elseif($slug = "blog"){
                $meta = [
                    "title" => "Blog Sigit Wahyudi",
                    "desc" => "blog dan tulisan Sigit Wahyudi"
                ];
            }


        return view('front.category', compact('kategori','items', 'meta'))->withQuery($request->q);
    }

    public function tag($slug, Request $request)
    {   

        $tag = Tag::where('slug',$slug)->first();
        // dd($tag->posts);
        $items = $tag->posts()->orderBy('created', 'desc')->paginate(6);
        // dd($items);

        $meta = [
            "title" => "post with tag $slug | Sigit Wahyudi blog",
            "desc" => "post with tag $slug"
        ];


        return view('front.tag', compact('tag','items', 'meta'))->withQuery($request->q);
    }

    public function note(Post $post, Request $request)

    {   

        $post = $post->select('*')->newQuery();

        if($request->has('q')) {
            $search = $request->get('q');
            $post->where(function($query) use ($search) {
                $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('content', 'LIKE', '%' . $search . '%')
                ->where('kategori_id', 3);
            })
            ;
        }

        $posts = $post->orderBy('created', 'desc')->where('kategori_id', 2)->paginate(9)->appends(['q' => $request->q]);
        $meta = [
            "title" => "Catatan Sigit Wahyudi",
            "desc" => "Catatan seorang programmer dalam pekerjaan sehari hari sebagai ASN di Kampus"
        ];
        return view('front.blog', compact('posts', 'meta'))->withQuery($request->q);
    }


    public function single($slug)
    {
        $item = Post::where('url_seo',$slug)->first();
        return view('front.single', compact('item'));
    }

    public function index(Post $post, Request $request)
    {   
        
        // return Post::onlyTrashed()
        //         ->get();

        $post = $post->select('*')->newQuery();

        if($request->has('q')) {
            $search = $request->get('q');
            $post->where(function($query) use ($search) {
                $query->where('title', 'LIKE', '%' . $search . '%')
                ->orWhere('content', 'LIKE', '%' . $search . '%')
                ->orderBy('id', 'DESC');
            })
            ;
        }

        $posts = $post->orderBy('created', 'desc')->paginate(8)->appends(['q' => $request->q]);

        return view('admin.post', compact('posts'))->withQuery($request->q);
    }

    public function tambahpostform()
    {   
        $kat = \App\Models\Kategori::all();
        $tags = \App\Models\Tag::all();
        return view('admin.tambahpostform', compact('kat', 'tags'));
    }

    public function upload(Request $request){
        $fileName=$request->file('file')->getClientOriginalName();
        $path=$request->file('file')->storeAs('uploads', $fileName, 'public');
        return response()->json(['location'=>"/storage/$path"]); 
    }

    public function simpanpost(Request $request)
    {   
        // return $request;
        $this->validate($request,[
           'title'          => 'required|unique:posts,title',
           'description'    => 'required',
           'category'       => 'required',
           'content'        => 'required'
        ]);
        
        $seo        = Str::slug($request->title, '-');
        $date       = date('Y-m-d H:i:s');

       $post = Post::create([
        'title'         => $request->title,
        'description'   => $request->description,
        'kategori_id'   => $request->category,
        'content'       => $request->content,
        'url_seo'       => $seo,
        ]);

        $post->tags()->attach($request->tags);

        return redirect('/admin/post')->with('status', 'post added!!');
    }

    public function editpostform(Request $request)
    {   
        $id = $request->id;
        $post = Post::find($id);
        $kat = \App\Models\Kategori::all();
        $tags = \App\Models\Tag::all();
        return view('admin.editpostform', compact('post','kat', 'tags'));
    }

    public function updatepost(Request $request)
    {   

        $this->validate($request,[
           
           'title'          => 'required|unique:posts,title,'.$request->id,
           'description'   =>   'required',
           'category'       => 'required',
           'content'        => 'required'
        ]);
        
        $seo        = Str::slug($request->title, '-');
        $date       = date('Y-m-d H:i:s');

        
        Post::where('id', $request->id)
        ->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'kategori_id'  	=> $request->category,
            'content'       => $request->content,
            'url_seo'       => $seo,
        ]);

        $post = Post::find($request->id);
        $post->tags()->sync($request->tags);

       return redirect('/admin/post')->with('status', 'post updated!!');
    }

    public function delete($id)
    {
        
        $post = Post::find($id);
        $post->delete();
        // $post->tags()->detach();
        // $post->delete();
        return redirect('/admin/post')->with('status', "post $id deleted!!");
    }
}