@isset($article)
      <span class="close_box"><i class="fa fa-times"></i></span>
      
      <div class="content">
          
          <div>
              <p>
                  <span><i class="fa fa-file"></i></span>
                  <span>تعديل بيانات المقال</span>
              </p>
              <form method="post" edited_id="{{$article->id}}" table="articles">
                        {{csrf_field()}}
                        <div class="clear"></div>
                        <div class="form-group-half">
                            <span class="input-icon-right"><i class="fa fa-info"></i></span>
                            <select class="form-control" name="article_type_id">
                                <option>من فضلك اختر نوع المقال</option>
                                @foreach($article_types as $type)
                                <option value="{{$type->id}}" @if($type->id == $article->article_type->id) selected @endif>{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group-half">
                            <span class="input-icon-right"><i class="fa fa-file"></i></span>
                            <input class="form-control" name="name" placeholder="اسم المقال "  value="{{$article->name}}" required>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <span class="input-icon-right"><i class="fa fa-paper-plane"></i></span>
                            <input class="form-control" name="description" placeholder="وصف المقال"  value="{{$article->description}}" required>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <div class="upload gray-bk">
                                  <span>صوره المقال</span>
                                  <span class="input-icon-right"><i class="fa fa-image"></i></span>
                                  <input type="file" name="image">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="form-group">
                            <span class="input-icon-right"><i class="fa fa-key"></i></span>
                            <input class="form-control" name="keys_words" placeholder="الكلمات المفتاحيه (-)" value="{{$article->tags}}" required>
                        </div>
                       
                        <div class="form-group">
                            <textarea id="article-ckeditor-update" class="form-control" name="article_data_update" value="{{$article->content}}" placeholder="نص المقال"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="form-control btn btn-primary" type="submit" name="save" value="حفظ">
                        </div>
                    </form>
              
          </div>
    
      </div>
@endisset