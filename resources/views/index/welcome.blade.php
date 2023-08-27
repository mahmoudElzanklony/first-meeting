@extends('index')
@section('content')
<!---------------------------------------start of fixed list------------------------------------------------>

<!---------------------------------------end of fixed list--------------------------------------------------->
<!---------------------------------------start of header-------------------------------------------==-------->
<div class="home">
<div class="header">
    <div class="container">

        <div class="row">
            <div class="col-xs-6 xs-hide">
                <div class="mockup-header" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/home-part2-design-mockup.png')}}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="logo" itemscope itemtype="https://schema.org/Organization">
                    <meta itemprop="url" content="http://www.first-meeting.com">
                    <img itemprop="logo" src="{{asset('images/icons/logo.png')}}">
                    <h2 itemprop="name">first meeting</h2>
                </div>
            </div>
            <div class="clear"></div>
            
            <div class="col-md-6">
                <div class="main-idea-description" itemscope itemtype="http://schema.org/Person">
                    <h2 itemprop="name">اللقاء الاول</h2>
                    <p class="lead" itemprop="description">اخبر صديقك عن اول انطباع عنه في اللقاء الأول الذي تراه فيه</p>
                    <p class="lead" itemprop="description">اخبره عن صفاته وعن مدي حبك وكرهك له</p>
                    <p class="lead" itemprop="description">اطمئن جميع الرسائل مشفره ولن يعرف من صاحب تلك الرسالة</p>
                    <p class="lead" itemprop="description">تستطيع ارسال رساله تصله في صندوق الوارد او رساله تصله</p>
                    <p class="lead" itemprop="description">الي الهاتف المحمول 
                        فقط ابدا بالتسجيل معنا لتستمع بجميع مزايا الموقع                       </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/messages.png')}}">
                </div>
            </div>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>

<!---------------------------------------end of header------------------------------------------------------->
<!---------------------------------------start of features--------------------------------------------------->
<div class="features">
    <div class="container">
    	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- home 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9129513100372677"
     data-ad-slot="3828545748"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>

    	
        <h2 class="text-center bold">ما الذي يميزنا عن الاخرين</h2>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="feature-content" itemscope itemtype="https://schema.org/SoftwareApplication">
                    <p class="bold lead" itemprop="name">رسائل الموبايل</p>
                    <meta itemprop="applicationCategory" content="chatting">
                    <meta itemprop="operatingSystem" content="windows , android , ipone , linux">
                    <p itemprop="featureList">يمكنك ارسال رسائل لأي مستخدم إلي هاتفه بدون معرفه
                        هوية المرسل ستظل رسائلك مشفره كما ان هذه الخدمة متاحه
                        لجميع شبكات مصر، كما انه لا يوجد تكلفه لإرسالك أي رسائل
                        ستظل خدمتنا مجانيه اذا بقيت معنا في هذا المجتمع</p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/chat.jpg')}}">
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/think.jpg')}}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-content" itemscope itemtype="https://schema.org/SoftwareApplication">
                    <p class="bold lead" itemprop="name">استكشف من ؟</p>
                    <meta itemprop="applicationCategory" content="chatting">
                    <meta itemprop="operatingSystem" content="windows , android , ipone , linux">
                    <p itemprop="featureList">يمكن لمستلم الرسالة ان يكتشف من هو مرسل الرسالة ويقوم 
                        بإرسال توقعه الي صاحب الرسالة وفي هذه الحالة يستطيع 
                        صاحب الرسالة الإجابة علي التوقع اما بنعم او لا ومن ثم يتم 
                        ارسال لصاحب الرسالة ان كان توقعه صحيح ام خطأ
                    </p>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-content" itemscope itemtype="https://schema.org/SoftwareApplication">
                    <p class="bold lead" itemprop="name">كسب النقاط</p>
                    <meta itemprop="applicationCategory" content="chatting">
                    <meta itemprop="operatingSystem" content="windows , android , ipone , linux">
                    <p itemprop="featureList">لابد قبل ان تتوقع صاحب الرسالة ان يكون معك علي الأقل
                        عشر نقاظ ولكن لا تقلق مجرد عمل حساب جديد تأخذ عشر
                        نقاط هديه . اذا كان توقعك لصاحب الرسالة صحيح تأخذ عشر
                        نقاط واذا كان التوقع خاطئ يتم خصم منك عشر نقاط</p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/coins.jpg')}}">
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/send-mail.jpg')}}">
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-content" itemscope itemtype="https://schema.org/SoftwareApplication">
                    <p class="bold lead" itemprop="name">ارسل عدد لا نهائي من الرسائل البريدية</p>
                    <meta itemprop="applicationCategory" content="chatting">
                    <meta itemprop="operatingSystem" content="windows , android , ipone , linux">
                    <p itemprop="featureList">لابد قبل ان تتوقع صاحب الرسالة ان يكون معك علي الأقليوجد معك عدد معين من رسائل الهاتف تستخدمها في أي وقت
                        اذا نفذت هذه الكميه منك لا تقلق تستطيع ارسال جميع رسائلك
                        وسيتم ارسال اشعار لمستلم الرسالة بوجود رسائل جديدة
                    </p>
                </div>
            </div>
            <div class="clear"></div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-content" itemscope itemtype="https://schema.org/featureList">
                    <p class="bold lead" itemprop="name">ارسل نقاط الي اصدقائك </p>
                    <meta itemprop="applicationCategory" content="chatting">
                    <meta itemprop="operatingSystem" content="windows , android , ipone , linux">
                    <p itemprop="featureList">اذا كان لديك العديد من النقاط يمكنك من ارسال نقاط الي صديقك 
                        كنوع من أنواع الهدايا كما يمكنك أيضا من استبدال النقاط التي معك
                        الي رسائل نصيه للموبايل لاستخدامها مع اصدقائك
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="feature-image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/gift.jpg')}}">
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>


<!---------------------------------------end of features--------------------------------------------------->

<!---------------------------------------start of statics----------------------------------------------->
<div class="statics">
    <div class="container">
        <h2 class="text-center bold">الاحصائيات العامة عن موقعنا</h2>
        <div class="row">
            <div class="col-md-4 col-xs-12">
                <div class="info">
                    <div class="space-bottom" itemscope itemtype="https://schema.org/StatisticalPopulation">
                        <img itemprop="image" src="{{asset('images/icons/users.png')}}">
                        <p class="bold" itemprop="populationType">عدد المستخدمين</p>
                        <p itemprop="description"><?php echo \App\User::all()->count() ?></p>

                    </div>

                    <div itemscope itemtype="https://schema.org/StatisticalPopulation">
                        <img itemprop="image" src="{{asset('images/icons/visitors.png')}}">
                        <p class="bold" itemprop="populationType">عدد الزيارات</p>
                        <p itemprop="description"><?php echo \App\User::all()->count() * 10?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="image" itemscope itemtype="https://schema.org/Property">
                    <img itemprop="image" src="{{asset('images/home/statics-mockup.png')}}">
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="info">
                    <div class="space-bottom" itemscope itemtype="https://schema.org/StatisticalPopulation">
                        <img itemprop="image" src="{{asset('images/icons/mobile-msg.png')}}">
                        <p itemprop="populationType" class="bold">عدد رسايل الموبايل</p>
                        <p itemprop="description"><?php echo \App\messages::where('message_type','=','mobile')->count()?></p>
                    </div>

                    <div itemscope itemtype="https://schema.org/StatisticalPopulation">
                        <img itemprop="image" src="{{asset('images/icons/mail.png')}}">
                        <p itemprop="populationType" class="bold">عدد رسائل الموقع</p>
                        <p itemprop="description"><?php echo \App\messages::where('message_type','=','web')->count()?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!---------------------------------------end of statics----------------------------------------------->


<!---------------------------------------start of feedback-------------------------------------------->

<!--


<div class="feedback">
    <div class="container">
        <h2 class="text-center bold">ماذا قالو عنا</h2>
        <div class="slider">
            <ul id="feedback-slider">

                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/1.jpg')}}">
                </li>
                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/1.jpg')}}">
                </li>
                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/2.jpg')}}">
                </li>
                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/2.jpg')}}">
                </li>


                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/1.jpg')}}">
                </li>
                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/1.jpg')}}">
                </li>
                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/1.jpg')}}">
                </li>
                <li>
                    <div class="content">
                        <span><i class="fas fa-quote-left"></i></span>
                        <p> فكره الموقع حلوه وجديده واتمني ان يكون في تحديثات اكتر من كده</p>
                        <span><i class="fas fa-quote-right"></i></span>
                    </div>
                    <img src="{{asset('images/home/1.jpg')}}">
                </li>

            </ul>          

        </div>

    </div>
</div>

-->

<!---------------------------------------end of feedback-------------------------------------------->




<!---------------------------------------start of support-------------------------------------------->

<div class="support">
    <div class="layout">
        <div class="container" itemscope itemtype="https://schema.org/ConfirmAction">
            <p class="text-center" itemprop="description">اكتب بريدك الالكتروني لنقوم بإرسال جميع التحديثات ليه </p>
            <p class="text-center" itemprop="description">لكي تتمكن من رؤيه الجديد في موقعنا </p>
            <form>
                <div class="input">
                    <span><i class="las la-envelope"></i></span>
                    <input  type="email">
                </div>
                <div class="bk-blue bk-icon">
                    <a><i class="las la-paper-plane"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>


<!---------------------------------------start of support-------------------------------------------->






<!---------------------------------------start of contact-------------------------------------------->
<div class="contact">
    <div class="container">
        <h2>تواصل معنا</h2>
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
                            <textarea itemprop="contactOption" class="form-control" name="message" placeholder="اكتب استفسارك او الشكوي هنا" required></textarea>
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


<!---------------------------------------end of support-------------------------------------------->
</div>

@endsection