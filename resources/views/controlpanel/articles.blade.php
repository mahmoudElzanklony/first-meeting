@extends('indexadmin')
  @section('content')
    <div class="control-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-xs-12">
                    @admin_navbar
                </div>
                 <div class="col-lg-10 col-md-8 col-xs-12">
                   
               <div class="content articles">
                  
        <!-- ************************ start shape ************************ -->
                <div class="admin-area">
                    <p>منطقة التحكم </p>
                     <div class="shape">
                         <div></div>
                         <div></div>
                         <div></div>
                     </div>
                </div>
                <div class="page-title">
                    <img src="{{asset('images/icons/note.png')}}">
                    <span>المقالات</span>                    
                    <span>اضافه</span>
                    <span><i class="fa fa-plus"></i></span>
                </div>
                 <div class="project-plan-status-filter">
                            <form>
                                <span class="search-icon-slide"><i class="fas fa-filter"></i></span>
                                <div>
                                    <input class="form-control" placeholder="البحث برقم  ID" />
                                </div>
                                <div>
                                    <input class="form-control" placeholder="اسم المقال" />
                                </div>
                                <div>
                                    <input type="image" src="{{asset('images/icons/search.png')}}">
                                </div>
                            </form>
                 </div>
                 <div class="row">
                     
                 @foreach($articles as $article)
                 <div class="col-md-4 col-xs-12">
                    <div class="box-info-media">
                        <div class="heading overflow_hidden">
                            <p class="float-right">
                                <span><i class="las la-info-circle"></i></span>
                                <span>{{$article->name}}</span>
                            </p>
                            <p class="float-left">
                                <a href="#"><i class="fas fa-link"></i></a>
                              <span class="edit-icon" id="{{$article->id}}" table="articles"><i class="fas fa-edit"></i></span>
                              <a class="delete-btn" id="{{$article->id}}" table="articles"><span><i class="fa fa-times"></i></span></a>
                            </p>
                        </div>
                        <div class="image">
                            <img src='{{asset("images/articles/")}}/{{$article->image}}'>
                        </div>
                        <div class="footer overflow_hidden">
                            <p class="float-right">
                                <!--<span><i class="las la-heart"></i></span>
                                <span><i class="las la-sad-tear"></i></span>
                                <span><i class="las la-handshake"></i></span>
                                <span><i class="fas fa-angry"></i></span>-->
                                <span><i class="fas fa-eye"></i></span>
                                <span>140</span>
                            </p>
                            <p class="float-left">
                                <span><i class="las la-calendar"></i></span>
                                <span>{{$article->created_at}}</span>
                            </p>
                        </div>
                    </div>
                     </div>
                 @endforeach
               </div>
                     </div>
                <div class="see-more">
                   <a>
                       <span><i class="fas fa-chevron-down"></i></span>
                       <span>اظهار المزيد</span>
                   </a>
               </div>
              </div>
            </div>
        </div>
    </div>
   <div class="outpage-bk-gray">
        <div class="adding-process adding-article" style="top:10px; width:90%; right:5%;     overflow: auto; max-height:550px">
              <header>
                  <span><i class="fa fa-plus"></i></span>
                  <span>مقال جديد</span>
                  <span><i class="fa fa-times"></i></span>
              </header>
                <div class="body-data">
                    <form method="post">
                        {{csrf_field()}}
                        <div class="clear"></div>
                        <div class="form-group-half">
                            <span class="input-icon-right"><i class="fa fa-info"></i></span>
                            <select class="form-control" name="article_type_id">
                                <option>من فضلك اختر نوع المقال</option>
                                @foreach($article_types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group-half">
                            <span class="input-icon-right"><i class="fa fa-file"></i></span>
                            <input class="form-control" name="name" placeholder="اسم المقال " required>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <span class="input-icon-right"><i class="fa fa-paper-plane"></i></span>
                            <input class="form-control" name="description" placeholder="وصف المقال" required>
                        </div>
                        <div class="form-group">
                            <div class="upload gray-bk">
                                  <span>صوره المقال</span>
                                  <span class="input-icon-right"><i class="fa fa-image"></i></span>
                                  <input type="file" name="image" required>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <span class="input-icon-right"><i class="fa fa-key"></i></span>
                            <input class="form-control" name="keys_words" placeholder="الكلمات المفتاحيه (-)" required>
                        </div>
                       
                        <div class="form-group">
                            <textarea id="article-ckeditor" class="form-control" name="article_data" placeholder="نص المقال"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control btn btn-primary" type="submit" name="save" value="حفظ">
                        </div>
                    </form>
                </div>
      
        </div>
   </div>
  <div class="outpage-bk-gray">
      <div class="preview-box listed-ordered box_fixed edit-box edit_article" style="top:10px; width:90%; right:5%;     overflow: auto; max-height:550px;">
      </div>
   </div>
  
  @endsection