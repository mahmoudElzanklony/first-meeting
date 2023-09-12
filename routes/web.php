<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Spatie\Sitemap\SitemapGenerator;

 Route::get('/','HomeController@index');

/*Route::get('/', function () {
    $meta_description = 'اللقاء الاول هو موقع يعبر فيه كل صديق عن رائيه في اول لقاء بين اقرب الاصدقاء له بدون معرفه هويته   كما  يستطيع اخباره بأنطباعه عنه  عن طريق ارسال رساله الي الحساب الخاص به او علي جواله في سريه تامه ';
    $keywords = 'first meeting , first , meeting , اللقاء الاول , الانطباعات , اول لقاء , اول انطباع عن صديقك المقرب';
    $url = 'first-meeting.net';
    $og_image = 'first-meeting.net/public/images/icons/logo.png';
    return view('index/welcome',
            [
                'title'=>'اللقاء الاول | الصفحه الرئيسيه',
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'og_image'=>$og_image,
            ]
    );
})->name('home');
*/

Route::get('/sitemap', function (){
   SitemapGenerator::create('http://localhost:8000/')->writeToFile('sitemap.xml');

   return 'site map created'; 
});

Route::get('/policy',function(){
    $meta_description = 'سياسه الخصوصيه الخاصه بموقع اللقاء الاول الذي يجب اتباعها';
    $keywords = 'first meeting policy , policy , سياسه الخصويه ';
    $url = 'first-meeting.net';
    $og_image = 'first-meeting.net/public/images/icons/logo.png';
    return view('policy',
            [
                'title'=>'اللقاء الاول | سياسه الخصوصيه ',
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'og_image'=>$og_image,
            ]
    );
});
Route::get('/whous',function(){
    $meta_description = 'من نحن ؟ نحن فريق من المطورين قمنا ببناء المشروع تحت اشراف المهندس محمود عبد الله';
    $keywords = 'من نحن , نبذه عنا ,who us';
    $url = 'first-meeting.net';
    $og_image = 'first-meeting.net/public/images/icons/logo.png';
    return view('whous',
            [
                'title'=>'اللقاء الاول | من نحن  ',
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'og_image'=>$og_image,
            ]
    );
});

Route::get('/contactus',function(){
    $meta_description = 'اذا كان لديك سؤال ما يمكنك التواصل معنا من خلال كتابه نص السؤال وارساله لنا';
    $keywords = 'تواصل معنا , contact us , اكتب رساله استفساراتك هنا';
    $url = 'first-meeting.net';
    $og_image = 'first-meeting.net/public/images/icons/logo.png';
    return view('contactus',
            [
                'title'=>'اللقاء الاول | التواصل   ',
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'og_image'=>$og_image,
            ]
    );
});

Route::get('/usage-agreement', function (){
    $meta_description = 'اتفاقيه الاستخدام  الخاصه بموقع اللقاء الاول الذي يجب اتباعها';
    $keywords = 'first meeting usage-agreement , usage-agreement , اتفاقيه الاستخدام  ';
    $url = 'first-meeting.net/usage-agreement';
    $og_image = 'first-meeting.net/public/images/icons/logo.png';
    return view('agreement',
            [
                'title'=>'اللقاء الاول | سياسه الخصوصيه ',
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'og_image'=>$og_image,
            ]
    );
});

//=============================================> start of profile <=======================================
Route::prefix('/profile')->group(function(){
    
   Route::get('/default','profileController@home')->middleware('auth');
   
   Route::post('/edititem','profileController@edititem')->middleware('auth');
   
   Route::post('/deleteitem','profileController@deleteitem')->middleware('auth');
   
   Route::post('/additem','profileController@additem')->middleware('auth');
   
   
   
});



//=============================================> end of profile <=======================================


//=============================================> start of search <=======================================


Route::get('/search','searchController@search')->middleware('auth');

Route::post('/search/searchitem','searchController@searchitem')->middleware('auth');


//=============================================> end of search <=======================================

//=============================================> start of sending <=======================================


Route::get('/sending/{id}','sendingController@send')->where('id','[0-9]+');




//=============================================> end of sending <=======================================


//=============================================> start of posts <=======================================


Route::get('/posts', function () {
        $meta_description = 'تستطيع ان تخبر الجميع عن انطباعك عن صديقك المقرب او حدث معين في ذاكرتك ويستطيع الجميل رؤيه ذلك الحدث مع التحكم هل تظهر بهويتك الحقيقه ام مجهول الهويه ويقوم كل من رؤيه الحدث بالتفاعل مع هذا الحدث  ';
        $keywords = 'events , reactions , posts , منشورات , الانطباعات  , تفاعلات , انطباعات اللقاء الاول , اللقاء الاول | الانطباعات';
        $url = 'first-meeting.net/posts';
        $og_image = 'first-meeting.net/public/images/icons/logo.png';
    return view('posts/default',
            [
                'title'=>'الانطباعات',             
                'meta_description'=>$meta_description,
                'keywords'=>$keywords,
                'url'=>$url,
                'og_image'=>$og_image,
            ]
    );
});

//=============================================> end of posts <=======================================



/*====================================start of control panel================================================*/
Route::group(['prefix'=>'controlpanel'],function(){
    
    Route::get('/','controlpanelController@home');
    
    Route::get('login','controlpanelController@showLogin')->name('admin.login');
    Route::post('login','controlpanelController@login')->name('admin.login.submit');
    /*------start of ajax call---------*/
    // add new article
    Route::post('addarticle','controlpanelController@addarticle');
    // preview info
    Route::post('previewinfo','controlpanelController@previewinfo');
    // submit editing
    Route::post('submitediting','controlpanelController@submitediting');
    // delete element
    Route::post('delete','controlpanelController@delete');
    /*------end of ajax call---------*/
    
    Route::get('feedbacks',function(){
        return view('controlpanel.feedbacks',['title'=>'التقيمات','nav'=>'adminnav']); 
    });
    
    Route::get('requests',function(){
        return view('controlpanel.requests',['title'=>'كل الرسائل']);
    });
    
    Route::get('levels',function(){
        return view('controlpanel.levels',['title'=>'ترتيب المستخدمين']);
    });
    
    Route::get('articles','controlpanelController@articles');
    
    Route::post('uploadimage','controlpanelController@uploadimage');
    
    Route::get('clientsdata',function(){
        return view('controlpanel.clientsdata',['title'=>'ملفات العملاء']);
    });
    
    Route::get('settings',function(){
        return view('controlpanel.settings',['title'=>'الاعدادت العامه']);
    });
    
    Route::get('questions',function(){
        return view('controlpanel.questions',['title'=>'الشكاوي']);
    });
});



/*=======================================end of control panel================================================*/


//=============================================> start of auth <=======================================



Route::group(['prefix'=>'/auth'], function(){
    Route::get('login', function (){
       return view('auth.login',['title'=>'صفحه الدخول']); 
    })->middleware('guest');
    
    Route::get('reset','Auth\LoginController@showreset')->middleware('guest');
    Route::post('reset','Auth\LoginController@reset')->name('reset.emaill.pass');
    
    // new password
    Route::get('reset/{id}/{key}','Auth\LoginController@showPass')->middleware('guest')->where('id','[0-9]+')->where('key','[0-9]+');
    Route::post('reset/{id}/{key}','Auth\LoginController@insertPass')->middleware('guest');
            
    Route::get('register', function (){
       $cities = \App\cities::all();
       $countries = \App\countries::all();
       return view('auth.register',['title'=>'صفحه مستخدم جديد','cities'=>$cities , 'countries'=>$countries]); 
    })->middleware('guest');
    
    
    Route::post('changecountry','Auth\RegisterController@changecountry');
    
});



Route::get('/auth/logout', function () {
    
    if(auth()->check()){
        if(auth()->guard('admin')->check()){
            auth()->guard('admin')->logout();
        }
  //    $type = auth()->user()->type;
        auth()->logout();
  //    auth()->guard($type)->logout();
        return redirect('/');
    }
});
//=============================================> end of auth <=======================================

//=============================================> start of articles <=================================
Route::group(['prefix'=>'/articles'], function(){
    
    Route::get('all','articlesController@all');
    // sub
    Route::get('/{category}/{type}','articlesController@sub');
    // article
    Route::get('/{category}/{type}/{name}','articlesController@article');
   
});

//=============================================> end of articles <====================================


Auth::routes();




Route::get('/home', 'HomeController@index')->name('home');