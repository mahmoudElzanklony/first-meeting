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
                         <meta itemprop="url" content="http://www.first-meeting.net">
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
        <header class="content-data">
            <div class="container">
                <h1 class="special-heading"> سياسة خصوصية First Meeting</h1>
                <span>تاريخ السريان: 10 اكتوبر 2020</span>
                <hr>
                <h3 class="special-heading"><strong>سبب مشاركتنا لسياسة الخصوصية هذه معك</strong></h3>
                <ul>
                    <li class="description-content">حمايه خصوصيه معلوماتك علي ان يتم التحلي بالانفتاح  والشفافيه فيما يتعلق بكيفيه جمع معلوماتك الشخصيه.</li>
                    <li class="description-content">نحن ملتزمون بالحفاظ علي سريه بياناتك والتي تتضمن رقم الهاتف المحمول واظهار هويتك.</li>
                    <li class="description-content">تتلقي First Meeting قدرآ محدودآ من المعلومات الشخصيه منك => وهي تحديدآ رقم الهاتف المحمول والجيميل الخاص بك والموقع الجغرافي لديك.</li>
                </ul>
                <h4 class="special-heading"><strong>كيفية استخدام معلوماتك</strong></h4>
                <p class="description-content">عندما تقدم معلوماتك الشخصيه الي First Meeting، فإننا نستخدم هذه المعلومات فقط لمساعدتك في ارسال الرسائل عبر الهاتف المحمول وتحديد اقرب الاشخاص الذين يستخدمون الموقع في منطقتك. </p>
                <h4 class="special-heading"><strong>كيفية مشاركه معلوماتك</strong></h4>
                <ul>
                    <li class="description-content">لن تشارك First Meeting معلوماتك الشخصيه مع اي جهه لأي غرض كان دون موافقه صريحه منك .</li>
                    <li class="description-content">لن نقوم ببيع معلوماتك الشخصيه لأي جهه خارج First Meeting، ولن تمنح هذه المعلومات لأحد الا اذا كان ذلك بموجب طلبات قانونيه، كأن يكون ذلك استجابه لمذكره احضار. ونطلب من اي جهه تتلقي هذه المعلومات ان تقصر استخدامها علي هذه الاغراض</li>
                </ul>
                <h4 class="special-heading"><strong>كيفة الحفاظ علي امان معلوماتك الشخصية</strong></h4>
                <ul>
                    <li class="description-content">تتخذ الاجراءات الامنيه اللازمه للحمايه ضد الوصول الغير مصرح به لمعلوماتك الشخصيه او تغيرها او مشاركتها او اتلافها، تشمل تلك الاجراءات الامنيه الحمايه من الوصول غير المصرح به لانظمه تخزين البيانات الشخصيه لدينا.</li>
                    <li class="description-content">يعتمد امان حسابك ايضآ علي الاحتفاظ بكلمه السر الخاصه بك بسريه تامه. ينبغي الا تشاركلمه السر مع اي شخص لانك اذا اعيطته كلمه السر فسيحق له الدخول الي حسابك والي معلوماتك الشخصيه.</li>
                </ul>
                <h4 class="phone special-heading"><strong>الاتصال</strong></h4>
                <p class="description-content">  لتوجيه اسئله أو استفسارات بشأن سياسه الخصوصيه او للشكوي يجب الذهاب للصفحه الرئيسيه وكتابه استفساراتك</p>
                <h3 class="special-heading"><strong>مراجعات على سياسة الخصوصية</strong></h3>
                <p class="description-content">قد نقوم بتغيير سياسة الخصوصية هذه من وقت لآخر. ولكن عندما قيامنا بذلك، سوف نخبرك بطريقة أو بأخرى. في بعض الأحيان، سوف نتيح لك معرفة ذلك من خلال مراجعة التاريخ في الجزء العلوي من سياسة الخصوصية التي تتوفر على موقعنا على الانترنت. وفي أوقات أخرى، قد نوفر لك إخطار إضافي (مثل إضافة بيان إلى الصفحات الرئيسية لمواقعنا الإلكترونية أو تزويدك بإشعار داخل التطبيق).</p>
                <p class="special-heading">سياسه الخصوصيه لجوجل</p>
                <p><a href="https://policies.google.com/privacy?hl=ar">موقعنا يدعم سياسه الخصوصيه الخاصه بجوجل</a></p>
            </div>
        </header>
    </div> 
@endsection