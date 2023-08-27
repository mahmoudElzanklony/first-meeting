@extends('index')
@section('content')
    <div class="home articles policy">
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
     


<!---------------------------------------start of contact-------------------------------------------->
    <div class="contact">
        <div class="container">
            <h2>تواصل معنا</h2>
            <div class="content-data">
                    <div class="container">
                    <p class="special-heading">الامور التي يجب تتواصل بنا من شانها</p>
                    <p>حقوق الطبع والنشر والحقوق الفكرية والملكية لاى شئ يخص المحتوي الخاص بالمقالات</p>
                    <p>تعدي احد الاشخاص برساله بها سب وطعن فيرجي في هذه الحاله اخبارنا</p>
                    <p> التواصل للشكاوى بخصوص المحتوي المخالف يرجي ذكر اسم المقال او رابط المقال</p>
                    <p>لاقتراحات للتطوير او اقتراحات لاي شئ يخص التطوير الموقع</p>
                    <p> ارسال اخبار يجب ان تتاكد ان الخبر الذي ترسلة ان يكون لا يوجد به اى مخالفات او حقوق ملكية فكرية</p>
                    <p>قد تتغير هذه الاتفاقيه من فتره لاخري بما نراه مناسب لهدف الموقع لذا ارجو منك مراجعتها والتقيد بما فيها</p>
                    </div>
           </div>
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form" itemscope itemtype="https://schema.org/ContactPoint">
                        <form>
                            <div class="form-group">
                                <img class="img-icon-input-right" src="{{asset('images/icons/mail-icon.png')}}">
                                <input itemprop="email" class="form-control" type="email" placeholder="البريد الالكتروني" required>
                            </div>
                            <div class="form-group">
                                <img style="top: 0px;" class="img-icon-input-right" src="{{asset('images/icons/user-icon.png')}}">
                                <input itemprop="contactType" class="form-control" type="text" placeholder="عنوان الرساله" required>
                            </div>
                            <div class="form-group">
                                <img class="img-icon-input-right" src="{{asset('images/icons/questions-icon.png')}}">
                                <textarea itemprop="contactOption" class="form-control" name="message" placeholder="نص الرساله" required></textarea>
                            </div>
                            <div class="form-group">
                                <span class="icon-input-submit">
                                    <i class="fa fa-location-arrow"></i>
                                </span>
                                <input class="form-control btn btn-primary" type="submit" value="ارسال">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="image" itemscope itemtype="https://schema.org/Property">
                        <img itemprop="image" src="{{asset('images/home/call-center.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    </div> 
@endsection