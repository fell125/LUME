<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;
use App\Campeonato;
use App\PostTag;


class PageController extends Controller
{
    public function lume(){
        $postPrincipal = Post::orderBy('id', 'DESC')-> where('status', 'PUBLISHED')->first();
        $postsSecundario1= Post::orderBy('id', 'DESC')-> where('status', 'PUBLISHED')->take(1)->skip(1)->first();
        $postsSecundario2= Post::orderBy('id', 'DESC')-> where('status', 'PUBLISHED')->take(1)->skip(2)->first();
        $campeonatos= Campeonato::orderBy('id', 'DESC')-> where('status', 'PUBLISHED')->take(4)->get();
        $posts = 1;
        return view('web.index', compact('postsSecundario1','postsSecundario2','campeonatos','postPrincipal'));
    }

    public function noticias(){

    	$posts= Post::orderBy('id', 'DESC')-> where('status', 'PUBLISHED')->paginate(24);
        $categories= Category::where('name','!=','league of legends')->where('name','!=','dota 2')->where('name','!=','cs:go')->orderby('name','ASC')->get();
        $back = Post::where('status', 'PUBLISHED')->orderBy('id','DESC')->take(1)->orderBy('id','DESC')->get();
    	return view('web.posts', compact('posts','categories','back'));
    }

    public function campeonatos(){

        $campeonatos= Campeonato::orderBy('id', 'DESC')-> where('status', 'PUBLISHED')->paginate();
        $back = Campeonato::where('status', 'PUBLISHED')->orderBy('id','DESC')->take(1)->orderBy('id','DESC')->get();
        return view('web.campeonatos', compact('campeonatos', 'back'));
    }

    public function category($slug){
    	$category = Category::where('slug', $slug)->pluck('id')->first();
    	$posts    = Post::where('category_id', $category)
    			  -> orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(24);
        $categories= Category::where('name','!=','league of legends')->where('name','!=','dota 2')->where('name','!=','cs:go')->orderby('name','ASC')->get();
        $back = Post::where('status', 'PUBLISHED')->orderBy('id','DESC')->take(1)->orderBy('id','DESC')->get();
        return view('web.posts', compact('posts','categories','back'));    
    }

    public function tag($slug){
    	$posts    = Post::whereHas('tags', function($query) use($slug){

    		$query->where('slug', $slug);

    	})-> orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(24);

        $categories= Category::where('name','!=','league of legends')->where('name','!=','dota 2')->where('name','!=','cs:go')->orderby('name','ASC')->get();
        $back = Post::where('status', 'PUBLISHED')->orderBy('id','DESC')->take(1)->orderBy('id','DESC')->get();
        return view('web.posts', compact('posts','categories','back'));
    }

    public function post($slug){

    	$post= Post::where('slug', $slug)-> first();
        $category= Post::select('category_id')->where('slug', $slug)->get();       
        $category = substr($category, 16, -2);

        $categories= Category::where('name','!=','league of legends')->where('name','!=','dota 2')->where('name','!=','cs:go')->orderby('name','ASC')->get();

        ################################################# PEGAR ID DO POST #################################################

        $idpost = Post::select('id')->where('slug', $slug)->get();
        $idpost = substr($idpost, 7, -2);

        ################################################# PEGAR ID DA TAG #################################################

        $idtag1 = PostTag::select('tag_id')->where('post_id', $idpost)->take(1)->inRandomOrder()->get();
        $idtag1 = substr($idtag1, 11, -2);

        $idtag2 = PostTag::select('tag_id')->where('post_id', $idpost)->where('tag_id', '!=', $idtag1)->take(1)->inRandomOrder()->get();
        $idtag2 = substr($idtag2, 11, -2);

        $idtag3 = PostTag::select('tag_id')->where('post_id', $idpost)->where('tag_id', '!=', $idtag1)->where('tag_id', '!=', $idtag2)->take(1)->inRandomOrder()->get();
        $idtag3 = substr($idtag3, 11, -2);

        $idtag4 = PostTag::select('tag_id')->where('post_id', $idpost)->where('tag_id', '!=', $idtag1)->where('tag_id', '!=', $idtag2)->where('tag_id', '!=', $idtag3)->take(1)->inRandomOrder()->get();
        $idtag4 = substr($idtag4, 11, -2);

        ################################################# PEGAR ID DO POST #################################################

        $postid1 = PostTag::select('post_id')->join('posts','posts.id', '=', 'post_tag.post_id')->where('status','PUBLISHED')->where('tag_id', $idtag1)->where('post_id', '!=', $idpost)->take(1)->inRandomOrder()->get();
        $postid1 = substr($postid1, 12, -2);


        $postid2 = PostTag::select('post_id')->join('posts','posts.id', '=', 'post_tag.post_id')->where('status','PUBLISHED')->where('tag_id', $idtag2)->where('post_id','!=',$postid1)->where('post_id', '!=', $idpost)->take(1)->inRandomOrder()->get();
        $postid2 = substr($postid2, 12, -2);


        $postid3 = PostTag::select('post_id')->join('posts','posts.id', '=', 'post_tag.post_id')->where('status','PUBLISHED')->where('tag_id', $idtag3)->where('post_id','!=',$postid1)->where('post_id', '!=', $idpost)->where('post_id','!=',$postid2)->take(1)->inRandomOrder()->get();
        $postid3 = substr($postid3, 12, -2);
   

        $postid4 = PostTag::select('post_id')->join('posts','posts.id', '=', 'post_tag.post_id')->where('status','PUBLISHED')->where('tag_id', $idtag4)->where('post_id','!=',$postid1)->where('post_id','!=',$postid2)->where('post_id','!=',$postid3)->where('post_id', '!=', $idpost)->take(1)->inRandomOrder()->get();
        $postid4 = substr($postid4, 12, -2);

        ######################################################## QUANTIDADE POSTS #################################################   
        
        $tagsQtd= Post::where('status', 'PUBLISHED')->where('category_id', '!=', $category)->where('id', $postid1)->orWhere('id',$postid2)->orWhere('id',$postid3)->orWhere('id',$postid4)->count();
        $resultado = 4 - $tagsQtd;
        

        $categoriesQtd= Post::where('status', 'PUBLISHED')->where('slug', '!=', $slug)->where('id', '!=', $postid1)->where('id', '!=', $postid2)->where('id', '!=', $postid3)->where('id', '!=', $postid4)->where('category_id',$category)->count();

        if ($tagsQtd + $categoriesQtd == 0) {
            $qtd = 4;
        } elseif ($tagsQtd + $categoriesQtd == 1) {
            $qtd = 3;
        } elseif ($tagsQtd + $categoriesQtd == 2) {
            $qtd = 2;
        } elseif ($tagsQtd + $categoriesQtd == 3) {
            $qtd = 1;
        } else{
            $qtd = 0;
        }

        ######################################################## RETORNOS ########################################################
         
        $tagsrecomendados= Post::where('status', 'PUBLISHED')->where('category_id', '!=', $category)->where('id', $postid1)->orWhere('id',$postid2)->orWhere('id',$postid3)->orWhere('id',$postid4)->take($tagsQtd)->inRandomOrder()->get();

        $categoriesrecomendados= Post::where('status', 'PUBLISHED')->where('slug', '!=', $slug)->where('id', '!=', $postid1)->where('id', '!=', $postid2)->where('id', '!=', $postid3)->where('id', '!=', $postid4)->where('category_id',$category)->take($resultado)->inRandomOrder()->get();

        $postsrecomendados = Post::where('slug','!=', $slug)->take($qtd)->inRandomOrder()->get();

    	return view('web.post', compact('post','tagsrecomendados','categoriesrecomendados', 'categories','postsrecomendados'));
        
    }

    public function campeonato($slug){

        $campeonato= Campeonato::where('slug', $slug)-> first();
        return view('web.campeonato', compact('campeonato'));
    }

    public function pesquisar(){

        $posts = Post::where('name','like','%'.Input::get('texto').'%')->where('status', 'PUBLISHED')->orWhere('body','like','%'.Input::get('texto').'%')->where('status', 'PUBLISHED')->orderBy('id','DESC')->paginate(24);
        
        $categories= Category::where('name','!=','league of legends')->where('name','!=','dota 2')->where('name','!=','cs:go')->orderby('name','ASC')->get();
        $back = Post::where('status', 'PUBLISHED')->orderBy('id','DESC')->take(1)->orderBy('id','DESC')->get();
        return view('web.pesquisa', compact('posts','categories','back'));
    }

}
