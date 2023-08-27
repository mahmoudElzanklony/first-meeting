@extends('index')
    @section('content')
    <div class="home articles">
        <div class="header">
         <div class="container">

             <div class="row">
                 <div class="col-xs-6">
                     <div class="mockup-header" itemscope itemtype="https://schema.org/Property">
                         <img itemprop="image" src="{{asset('images/home/home-part2-design-mockup.png')}}">
                     </div>
                 </div>
                 <div class="col-xs-6">
                     <div class="logo" itemscope itemtype="https://schema.org/Organization">
                         <meta itemprop="url" content="http://www.first-meeting.com">
                         <img itemprop="logo" src="{{asset('images/icons/logo.png')}}">
                         <h2 itemprop="name">first meeting</h2>
                     </div>
                 </div>
                 <div class="clear"></div>
                 
                 @if (session('status'))
                     <div class="alert alert-success">
                         {{ session('status') }}
                     </div>
                 @endif
             </div>
         </div>
     </div>
        <div class="article-defails">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <div class="info">
                            <h2 class="special-heading">{{$article->name}}</h2>
                            <p>
                                <span><i class="las la-tag"></i></span>
                                <span>{{$article->article_type->name}}</span>
                            </p>
                            
                            <p>
                                <span><i class="las la-eye"></i></span>
                                <span>{{$article->seen}}</span>
                            </p>
                            <p>
                                <span><i class="las la-calendar"></i></span>
                                <span>{{$article->created_at}}</span>
                            </p>
                            <div class="clear"></div>
                            <div class="article_data_info">
                                {!!html_entity_decode($article->content)!!}
                            </div>
                            </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="all_articles">              
                            <h2 class="special-heading">مقالات مشابهه</h2>
                            @foreach($same_articles as $article)
                               <?php
                                 $type = \App\article_type::find($article->article_type_id);
                                 $category_name = \App\categories::find($type->category_id)->name;
                               ?>
                                <div class="article-info">
                                <a href="/articles/{{urlencode($category_name)}}/{{urlencode($type->name)}}/{{urlencode($article->name)}}"><img src="{{asset('images/articles')}}/{{$article->image}}"></a>
                                <p><a href="/articles/{{urlencode($category_name)}}/{{urlencode($type->name)}}/{{urlencode($article->name)}}">{{$article->name}}</a></p>
                                    <p>
                                        <span>{{$article->description}}</span>
                                        <span>{{$article->created_at}}</span>
                                    </p>
                                    <div class="tags">
                                        <?php
                                          $tags = explode('-', $article->tags);
                                          for($i=0; $i<count($tags); $i++){
                                              echo '<span>'.$tags[$i].'</span>';
                                          }
                                        ?>

                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

