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
        <div class="content-data">
            <div class="container">
            <h2 class="special-heading">من نحن</h2>
            <p>نحن فريق من المطورين تحت اشراف المهندس محمود عبد الله
                قمنا ببناء فكره اللقاء الاول واردنا ان تتميز في نقاط كثيره لذا لن تجد منافس يقدم
            ما نقدمه لك فهدفنا هو انشاء مجتمع قوي سعيد بما نقدمه له فثقتك بنا تحمسنا علي اضافه
            الكثير من الاضافات والمزايا لك</p>
            <h2 class="special-heading">من هو محمود عبد الله </h2>
            <p>هو المسئول والمالك الاول لحقوق الملكيه والفكريه لموقع اللقاء الاول وهو صاحب كل شئ به هو مهندس خريج 
            كليه حاسبات ومعلومات جامعه الزقازيق يعمل في اكثر من شركه دوليه وهدفه جعل الموقع هو المنصه الاولي للانطباعات
            والاسئله علي المستوي القومي والدولي</p>
            <p class="special-heading">كيف كانت بدايه الفكره</p>
            <p>حقيقه الامر ان الانطباع الاول لك مع اقرب الناس تجده دائما ثابتا في رأسك خصوصا اذا كان شخصا قريبا لك
            فيما بعد تجد ان البدايه بينكما ثابته في رأسك بتفاصيلها
            لذا اردنا توصيل فكره انطباع كل شخص عن صديقه المقرب في رساله سريه اما ان تصل علي الهاتف المحمول
            او علي حسابه الشخصي في اللقاء الاول مع مراعاه الالتزام بالوعد وهو عدم ارسال رساله 
            تحمل معني سياسي او ديني او تحمل معاني سيئه قد تصيب الشخص الاخر بمشاكل</p>
            <p class="special-heading">ما هي خطتنا المستقبليه</p>
            <p>نود حاليا ان نقوم بنشر الموقع علي المستوي المحلي وهو مصر ونود ان ننجح في ذلك ف ان كانت البدايه مبشره
            وكان الاقبال علينا كثير وزاد عدد عملائنا سنقوم بالتوسع للوطن العربي مثل الكويت وعمان والسعوديه
            لذا مساهمتك معنا تؤثر بالايجاب علينا</p>
            </div>
        </div>
    </div> 
@endsection