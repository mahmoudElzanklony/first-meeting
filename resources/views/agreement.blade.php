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
            <h2 class="special-heading">أتفاقيه الاستخدام</h2>
            <p>يجب عليك ألا تعدل او تغير في مواضيع الموقع او استخدامها بطرق غير مشروعه بأي طرق يمكن ان تضر او تعطل الموقع</p>
            <p>يقوم الموقع بجمع بيانات شخصيه عنك والهدف من ذلك تحسين الخدمه ونتائج البحث لك</p>
            <p>يحق للموقع مشاركه البيانات السابقه مع طرف ثالث دون ان تقوم بالربط بين هذه البيانات وهويتك الشخصيه</p>
            <p>لا يحق لك نقل محتوى الموقع من مواضيع و شروحات
                و فيديوهات إلى موقعك بدون ذكر المصدر   مع رابط مباشر يؤدي إلى الموضوع الأصلي الذي تم نقله.</p>
            <p>قد تتغير هذه الاتفاقيه من فتره لاخري بما نراه مناسب لهدف الموقع لذا ارجو منك مراجعتها والتقيد بما فيها</p>
            <p class="special-heading">اخلاء المسؤليه</p>
            <p>نشر اعلانات المنتجات او الخدمات والروابط الدعائيه لا يعني تزكيتنا لها ولا نقدم اي ضمانات جوده بخصوصها</p>
            <p>نعرض بالموقع مراجعات لخدمات مواقع ومؤسسات، قد تكون تلك ﺍﻟﻤﺮﺍﺟﻌﺎﺕ مدفوعه الاجر وقد تكون مجانيه وبعضها الاخر قد نستخدم فيه روابط “affiliate” والتي ﺗﺘﻴﺢ لنا ﺗﺤﺼﻴﻞ ﻋﻤﻮﻟﺔ ﻣﻌﻴﻨﺔ في حاله اشتراكك ﺃﻭ شرائك من ذلك ﺍﻟﺮﺍﺑﻂ، وندون هذه المراجعات استنادا الي المعلومات التي نحصل عليها من مدراء تسويق هذه المواقع والمؤسسات، او من تجربه خاصه او من خلال معلومات عامه اخري، ومنه فلا اقدم لك اي ضمانات خاصه بخصوص جوده المنتجات او الخدمات.</p>
            <p>نعرض كذلك تدوينات تحمل في مضمونها سيرا ذاتيه لاشخاص، استنادا الي المراسلات او المقابلات التي تتم بيننا، ﻭﺭﻏﻢ أننا سنطلع ﻋﻠﻰ الشهادات الوثائق التي تبين المستوي والكفائات الا اننا ﻻ نضمن صحتها %100، ومنه فان اي مغالطات تقع مسؤليتها علي اصحابها.</p>
            <p>ﻻ نتحمل مسؤليه الاضرار التي قد تكون ناتجه عن عدم حسن تطبيق بعض الشروحات والدروس!</p>
            </div>
        </div>
    </div> 
@endsection