<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Comment;
use App\Models\Info;
use Illuminate\Support\Facades\Auth;
use Truc;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $infos = Info::all();
        $categories = Categorie::all();
        return view('pages.backoffice.blog.backCreateBlog', compact('infos', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleRequest $request)
    {
                // pour le re-size des images ici en l'occurence l'image de Product
        // format 270x270
        $image = $request->file('file');
        $input['file'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/thumbnail/images/270x230');
        $imgFile = Truc::make($image->getRealPath());
        $imgFile->resize(270, 230, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['file']);

        // format 1090x450
        $destinationPath = public_path('/thumbnail/images/1090x450');
        $imgFile->resize(1090, 450, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');
        

        // création de l'image du product
        $blog = new Blog();
        $blog->src = $input['file'];
        $blog->save();
        $blogbis = $blog;
        


        $article = new Article();
        $article->content1 = $request->content1;
        $article->content2 = $request->content2;
        $article->categorie_id = $request->categorie_id;
        $article->user_id = Auth::user()->id;
        $article->blog_id = $blogbis->id;
        $article->save();

         return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $infos = Info::all();
        $banners = Banner::all();
        $comments = Comment::orderBy('id', 'desc')->limit(5)->get();
        return view('pages.showBlog', compact('article', 'infos', 'banners', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $infos = Info::all();
        $articles = Article::all();
        $categories = Categorie::all();
        return view('pages.backoffice.blog.backEditBlog', compact('article', 'infos', 'articles', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleRequest  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        
        if ($request->file) {
        // pour le re-size des images ici en l'occurence l'image de Product
        // format 270x270
        $image = $request->file('file');
        $input['file'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/thumbnail/images/270x230');
        $imgFile = Truc::make($image->getRealPath());
        $imgFile->resize(270, 230, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $input['file']);

        // format 1090x450
        $destinationPath = public_path('/thumbnail/images/1090x450');
        $imgFile->resize(1090, 450, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath . '/' . $input['file']);
        $destinationPath = public_path('/uploads');
        
        // edit de l'image du product
        $blog = new Blog();
        $blog->src = $input['file'];
        $blog->save();
        $blogbis = $blog;
        $article->blog_id = $blogbis->id;
        
    }
    //Création de l'article en lui même

    $article->content1 = $request->content1;
    $article->content2 = $request->content2;
    $article->categorie_id = $request->categorie_id;
    $article->user_id = Auth::user()->id;
    $article->save();


    return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back();
    }
}
