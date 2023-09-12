<?php


namespace App\Http\Controllers;
use DB;
class controlpanelController extends Controller{
    
  
    public function  __construct(){
        $this->middleware('ControlPanel_MW',['except' => [
            'showLogin','login'
        ]] );
       
    }
    
    public function home() {
        return view('controlpanel.default',['title'=>'لوحه التحكم']);
    }
    
    
    public function showLogin() {
            $meta_description = 'اللقاء الاول هو موقع يعبر فيه كل صديق عن رائيه في اول لقاء بين اقرب الاصدقاء له بدون معرفه هويته   كما  يستطيع اخباره بأنطباعه عنه  عن طريق ارسال رساله الي الحساب الخاص به او علي جواله في سريه تامه ';
            $keywords = 'first meeting , first , meeting , اللقاء الاول , الانطباعات , اول لقاء , اول انطباع عن صديقك المقرب';
            $url = 'first-meeting.net';
            $og_image = 'first-meeting.net/public/images/icons/logo.png';
                    

        if(auth()->guard('web')->check()){
            // get type of user
            $type = auth()->user()->type;
            if($type == 'admin'){
                return view('controlpanel.login',['title'=>'صفحه تسجيل الاداره']);
            }else{
                return redirect()->route('home')->with([
                        'title'=>'اللقاء الاول | الصفحه الرئيسيه',
                        'meta_description'=>$meta_description,
                        'keywords'=>$keywords,
                        'url'=>$url,
                        'og_image'=>$og_image,
                    ]);
               
            }
        }else{
           
            return redirect('index/welcome',
                    [
                        'title'=>'اللقاء الاول | الصفحه الرئيسيه',
                        'meta_description'=>$meta_description,
                        'keywords'=>$keywords,
                        'url'=>$url,
                        'og_image'=>$og_image,
                    ]
            );
        }
    }
    
    public function login() {
        $this->validate(request(), [
           'email'=>'required|string',
           'password'=>'required',
        ]);
        if(auth()->guard('admin')->attempt(['email'=> request('email') , 'password'=> request('password')])){
            return redirect('/controlpanel')->with(['title'=>'لوحه الاداره']);
        }else{
            return back();
        }
    }
    
    public function uploadimage() {
        $this->validate(request(), [
            'upload' => 'mimes:jpeg,jpg,gif,png'
        ]);

        $file = request()->file('upload');
        $fileExten = $file->extension();
        $filename = rand()."_article_image.".$fileExten;
        $path = str_replace('\\', '/', public_path("images/articles/"));
        $file->move($path, $filename);

        $url = asset('/images/articles/'.$filename);
        $msg = 'image uploaded successfully';
        $CKEditorFuncNum = request('CKEditorFuncNum');

      //  $url = $path . $filename;
        //@header('Content-type: text/html; charset=utf-8');
        echo "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum,'$url','');</script>";
    }
    
    
    public function articles(){
        $articles = \App\articles::all();
        $articles_types = \App\article_type::all();
        return view('controlpanel.articles',['title'=>'جميع المقالات','articles'=>$articles,'article_types'=>$articles_types]);
    }
    // add new article
    public function addarticle() {
        $article_type_id = request('article_type_id');
        $name = request('name');
        $description = request('description');
        $keys_words = request('keys_words');
        $file = request()->file('image');
        $extension = $file->extension();
        $image_name = 'image_art.'. date('y-m-d'). rand(0, 99999).'.'.$extension;
        $article_data = request('article_data');
        DB::table('articles')->insert(
            array(
                'article_type_id'=>$article_type_id,
                'name'=>$name,
                'description'=>$description,
                'image'=> $image_name,
                'tags'=> $keys_words,
                'content'=>$article_data,
                'seen'=>0,
                'created_at'=>date('y-m-d H:i:s')
                )
        );
        
        $file->move(public_path('images/articles'), $image_name);
        echo json_encode(1);
    }
    // preview info
    public function previewinfo() {
        $id = request('id');
        $table = request('table');
        // check table
        if($table == "articles"){
            $article = \App\articles::find($id);
            $article_types = \App\article_type::all();
            if(!empty($article)){
                $html = view('ajax_response.articles.edit_article',['article'=>$article,'article_types'=>$article_types])->render();
            }
        }
        $data = ['response'=>$html,'content'=>$article->content,'status'=>200];
        echo json_encode($data,JSON_UNESCAPED_UNICODE);
    }
    
    // submit editing
    public function submitediting(){
        $status = 0;
        if(request('table') == "articles"){
            // edit articles
            $article = \App\articles::find(request('edited_id'));
            if(!empty($article)){
                $article->article_type_id = request('article_type_id');
                $article->name = request('name');
                $article->description = request('description');
                $article->tags = request('keys_words');
                $article->content = request('article_data_update');
                if(request()->hasFile('image')){
                    if(file_exists(public_path('/images/articles/').$article->image)){
                        \Illuminate\Support\Facades\File::delete(public_path('/images/articles/').$article->image);
                     }
                    $file = request()->file('image');
                    $extension = $file->extension();
                    $image_name = 'image_art.'. date('y-m-d'). rand(0, 99999).'.'.$extension;
                    $file->move(public_path('images/articles'), $image_name);
                    
                    $article->image = $image_name;
                }
            }
            $article->save();
            $status = 1;
        }
        echo json_encode($status);
    }
    
    public function delete() {
        $id = request('id');
        $status = 0;
        $table = request('table');
        $item = DB::table($table)->where('id',$id);
        if(!empty($item)){
            DB::table($table)->delete($id);
            $status = 1;
        }
        echo $status;
    }
}

