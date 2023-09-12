<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controller
{
    
    public function all() {
        $meta_description = 'مقالات تتيح للناس قرائه اخر الاخبار وتصفح اخر الاحداث من خلالها';
        $keywords = 'first meeting , articles , مقالات , اخر الاخبار';
        $url = 'first-meeting.net';
        $og_image = 'first-meeting.net/public/images/icons/logo.png';
        $articles_types_all = \App\article_type::all();
        $most_read = \App\articles::orderBy('seen','DESC')->limit(6)->get();
        return view('articles.all',
                [
                    'title'=>'اللقاء الاول | اخر مقالاتنا واخبارنا',
                    'meta_description'=>$meta_description,
                    'keywords'=>$keywords,
                    'url'=>$url,
                    'og_image'=>$og_image,
                    'articles_types_all'=>$articles_types_all,
                    'most_read'=>$most_read,
                ]
        );
    }
    
    
    public function sub() {
        $sub = request()->segment(3);
        $sub = str_replace('+',' ',$sub);
        $sub_data = \App\article_type::where('name','=',$sub)->first();
        if($sub_data == null){
            return redirect('/articles/all')->send();
        }else{
            $meta_description = 'مقالات تتيح للناس قرائه اخر الاخبار وتصفح اخر الاحداث من خلالها';
            $keywords = 'first meeting , articles , مقالات , اخر الاخبار';
            $url = 'first-meeting.net';
            $og_image = 'first-meeting.net/public/images/icons/logo.png';
            $articles_types_all = $sub_data;
            $most_read = \App\articles::where('article_type_id','=',$sub_data->id)->orderBy('seen','DESC')->limit(6)->get();
            return view('articles.all',
                    [
                        'title'=>'اللقاء الاول | اخر مقالاتنا واخبارنا',
                        'meta_description'=>$meta_description,
                        'keywords'=>$keywords,
                        'url'=>$url,
                        'og_image'=>$og_image,
                        'articles_types_all'=>[$articles_types_all],
                        'most_read'=>$most_read,
                    ]
            );
        }
    }
    

    
    public function article(){
        $article_type = request()->segment(3);
        $article_type = str_replace('+',' ',$article_type);
        $article_name = request()->segment(4);
        $article_name = str_replace('+',' ',$article_name);
        $article_type_data = \App\article_type::where('name','=',$article_type)->first();
        if($article_type_data != null){
            $article = \App\articles::where('article_type_id','=',$article_type_data->id)->where('name','=',$article_name)->first();
                if(!empty($article)){
                    $article->seen = $article->seen + 1;
                    $article->save();
                    $keywords = str_replace('-', ',', $article->tags);
                    $meta_description = $article->description;
                    $url = 'first-meeting.net';
                    $og_image = 'first-meeting.net/public/images/icons/logo.png';
                    $same_articles = \App\articles::where('article_type_id','=',$article_type_data->id)->where('id','!=',$article->id)->limit(4)->get();
                    return view('articles.article',
                            [
                                'title'=>$article->name,
                                'meta_description'=>$meta_description,
                                'keywords'=>$keywords,
                                'url'=>$url,
                                'og_image'=>$og_image,
                                'article'=>$article,
                                'same_articles'=>$same_articles,
                            ]
                    );
            }else{
                return redirect('/articles/all')->send();
            }
        }else{
            return redirect('/')->send();
        }
        
    }
}