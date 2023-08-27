/*global $, jquery , alert , console,document,window,value,pageXOffset,rem,e,sc,pageXOffset , top*/
$(document).ready(function () {
    "use strict";
    new WOW().init();
    $('.all_articles .article-info').niceScroll();
   /* $(".page-content").load(function() {
      $(".loader").fadeOut();
    });*/
    var url = document.URL.split('?');
   
    if(url.length > 1 ){
        window.location = document.URL.split('?')[0];
    }
    
    $("a.delete").click(function(e){
       if(!confirm("هل انت متأكد من عمليه الحذف")){
           e.preventDefault();
       } 
    });
    
    // body height and make footer fixed
    console.log($('.body-data').height() > $('body').height());
    if($('.body-data').height() > $('body').height() ){
        $('body').css('height',parseInt($('.body-data').css('height')) + parseInt($('footer').css('height'))+ parseInt(20) +'px');
    }else{
        $('html').css('height','100%');
    }
   
    // table plugin
    $('table.data').DataTable( {
        "language": {
            "url": "/public/js/Arabic.json"
        }
    } );
    $(".dataTables_wrapper .dataTables_filter input").attr('placeholder','ابحث عن الاسم او البريد الالكتروني او العنوان');
    $('.carousel').carousel({
        interval: 2000
    });
    
    
    
    

    
    /*--------------------------start of index controller --------------------------------------------*/
   
    
    // main home page slider feedback Start  ==>  Home Page
    $("#feedback-slider").lightSlider({
        loop:true,
        auto:false,
        speed:1000,
        pauseOnHover:true,
        item:3,
        pager: false,
        prevHtml: '<i class="fas fa-chevron-left"></i>',
        nextHtml: '<i class="fas fa-chevron-right"></i>',
        keyPress:true,
            responsive : [
            
            {
                breakpoint:1000,
                settings: {
                    item:2,
                    slideMove:1
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
    });
   

    
    
    $('.all-categories .ads > span:last-of-type').click(function(){
        
        if($(this).parent().find('li.active').index() == 0){
             $(this).parent().find('li:last-of-type').addClass('active').siblings().removeClass('active');
        }else{
             $(this).parent().find('li.active').removeClass('active').prev().addClass('active');
        }
        
            var header = $(this).parent();
            var liWidth = header.find('ul li').outerWidth();
            var ul = header.find('ul'); 
            var liIndex = ul.find('li.active').index();
            
           
            
             ul.animate({
                right:-liIndex*liWidth+'px'
            },1000);
    });
    

    /*--------------------------end of index controller --------------------------------------------*/

    
    /*--------------------------start of auth controller --------------------------------------------*/
    
    
    
    
    $('.login-box form select[name="country_id"]').change(function(){
       if($(this).val() !== ""){
           var country_id = $(this).val();
           var cities = $(this).parent().parent().find('select[name="city_id"]');
           $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/auth/changecountry',
            type:'POST',
            dataType:'JSON',
            data:{country_id:country_id},
            success:function(data){
                var cities_data = "<option value=''>اختر المدينه</option>";
                for(var i=0; i<data.length; i++){
                    cities_data += "<option value='"+data[i].id+"'>"+data[i].name+"</option>";
                }
                cities.html(cities_data);
                
            },error(data){
                console.log(data);
            }
        });
       }
        
    });

    
    /*--------------------------start of profile controller --------------------------------------------*/

    // edit profile info
    $('.profile .profile-content .profile-body > div:first-of-type div button').click(function(){
        $('.bk-layout').find('.edit-info').parent().fadeIn(); 
    });
    
    // activate || deactivate profile
    $('.profile .profile-content .profile-body > div input[type="checkbox"]').click(function(){
     if(!$(this).hasClass('checked')){
         $(this).addClass('checked');
         
         $('.bk-layout .inner-msg img').attr('src','../images/gif/happy.gif');
         $('.bk-layout .inner-msg p').html('تم تنشيط الحساب الخاص بك وهذا يعني انك تستطيع استقبال رسائل اصدقائك كما انك ستظهر في محرك البحث نحن سعداء بعودتك الي مجتمعنا');
         $(this).next().html('نشط');
         $('.bk-layout').find('.inner-msg').parent().delay(200).fadeIn();
         var active = 1;
     }else{
         $(this).removeClass('checked');
         
         $('.bk-layout .inner-msg img').attr('src','../images/gif/sad.gif');
         $('.bk-layout .inner-msg p').html('تم تعطيل الحساب الخاص بك وهذا يعني انك لا تستطيع استقبال اي رسائل من اي شخص كمان انك لن تظهر ف محرك البحث الخاص بالموقع');
         $(this).next().html('معطل');
         $('.bk-layout').find('.inner-msg').parent().delay(200).fadeIn();
         var active = 0;
     }
     $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url:'/profile/edititem',
        type:'POST',
        data:{active:active,table:'user_active'},
        success:function(data){
            console.log(data);
        }
     });
    });
    // button bk layout
    $('.bk-layout > div button.closeBtn').click(function(){
       $(this).parent().parent().fadeOut(); 
    });
    // send suggestion form action 
    $('.bk-layout .guess-who form').submit(function(e){
       e.preventDefault();
       var table = $(this).attr('name');
       var data = new FormData($(this)[0]);
       var form = $(this);
       data.append('table',table);
       form.find('input[type="text"]').val("");
       $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url:'/profile/additem',
            type:'POST',
            processData: false,
            contentType: false,
            dataType:'JSON',
            data:data,
            success:function(data){
                console.log(data);
                
            }
        });
       
       $(this).parent().parent().fadeOut();
       $('.note-top-left').fadeIn().delay(3000).fadeOut();
    });
    // click for close
    $('.bk-layout').click(function(){
       $(this).fadeOut(); 
    });
    $('.bk-layout > div').click(function(e){
       e.stopPropagation(); 
    });
    
    // tabs
    $('ul.tabs li').click(function(){
        $(this).siblings('li').removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().parent().find('#'+$(this).attr('custom-data')).siblings('div').fadeOut();
        $(this).parent().parent().parent().find('#'+$(this).attr('custom-data')).fadeIn();
    });
    
    // guess who
    $('.profile .profile-content .profile-body #website-messages .content #inbox  div div button').click(function(){
       var id = $(this).attr('id');
       var patent_id = $(this).parent().attr('parent');
       if(id === patent_id){
           $('.bk-layout').find('.guess-who').find('form input[name="msg_id"]').val(id);
           $('.bk-layout').find('.guess-who').parent().fadeIn(); 
           $(this).fadeOut();
       }else{
           alert('حدث خطأ ما يرجي اعاده تحميل الصفحه');
       }
    });
    
    // remove favourtire from profile
    $('#favourite .person .image > span').click(function(){
        var span = $(this);
        swal({
          title: "هل انت متأكد من ازاله الشخص المفضله",
          text: "عند الموافقه سيتم ازالته من الفضله لديك",
          icon: "warning",
          buttons: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url:'/profile/deleteitem',
               type:'POST',
               data:{id:span.attr('id'),table:'favourites'},
               success:function(data){
                    console.log(data);
                    if(data == 1){
                        $('.bk-layout').find('.remove-fav').parent().fadeIn(); 
                        span.parent().parent().parent().remove();
                    }else{
                        swal("هناك خطأ في اكمال العمليه", "", "error");
                    }
               },error(exception){
                   console.log(exception);
               }
            });
            
          }
        });
        
    });
    
    // trade coins with messages
    $('.profile .profile-content .profile-body #statics > button:first-of-type').click(function(){
        $('.bk-layout').find('.trade-coins').parent().fadeIn(); 
    });
    
    // send coins to friends
    $('.profile .profile-content .profile-body #statics > button:last-of-type').click(function(){
        $('.bk-layout').find('.send-coins').parent().fadeIn(); 
    });
    
    // close the note in the top left
    $('.note-top-left span.close').click(function(){
       $(this).parent().fadeOut(); 
    });
    
    // stop instructions that appear to new user
    $('.profile .profile-content .profile-body > div:first-of-type button').eq(1).click(function(){
        $("#carousel-example-generic").carousel("pause");
        $(".carousel-inner > .item").removeClass('active');
        $(".carousel-inner > .item").eq(0).addClass('active');
        $('.bk-layout').find('#carousel-example-generic').parent().fadeIn();
    });
    
    // slider next
    $(".carousel-inner > .item button:first-of-type").click(function(e){
        e.preventDefault();
        $("#carousel-example-generic").carousel("next");
    });
    
    // slider prev
    $(".carousel-inner > .item button:last-of-type").click(function(e){
        e.preventDefault();
        $("#carousel-example-generic").carousel("prev");
    });
    
    /*--------------------------end of profile controller --------------------------------------------*/
    
    /*------------------------start of auth--------------------------------*/
    // show conditions of register
    $('.login-box form button.btn-primary').click(function(e){
       e.preventDefault();
       var err = 0;
       console.log($(this).parent().parent().find('input'));
       console.log('abc click');
       $(this).parent().parent().find('input').each(function(){
          if($(this).attr('type') == "password" || $(this).attr('type') == "text" ){
              if($(this).val().length === 0){
                  err = 1;

              } 
          }
       });
       if(err == 0){
           $(this).parent().parent().parent().find('>div').fadeOut();
           $(this).parent().parent().parent().find('>div:last-of-type').fadeIn();
       }else{
           swal("من فضلك قم باكمال حقول الادخال الاول", "", "error");
       }
    });
    
    // agree conditions
    $('.login-box form input[type="checkbox"]').click(function(){
       if($(this).prop('checked')){
           $(this).parent().next().find('input').removeAttr('disabled')
       }else{
           $(this).parent().next().find('input').attr('disabled','disabled');
       }
    });
    
    
    /*------------------------end of auth--------------------------------*/
    
    
    /*--------------------------start of posts controller --------------------------------------------*/
    // add fixed to filters when scrolling
    $(window).on('scroll',function(){
        var filters = $('.social-media .col-md-2 .filters');
        if(window.innerWidth >= 767){
            if(window.pageYOffset >= 130){
                filters.css('width',filters.parent().width() + 30);
                filters.addClass('fixed');
            }else{
                filters.css('width','auto');
                filters.removeClass('fixed');
            }
        }else{
            $('.social-media .col-md-2').css('height','auto');
        }
        
        /*if(window.innerHeight + window.scrollY >= document.body.offsetHeight - $('footer').height()){
            filters.css('height','calc(100% -'+$('footer').height()+' )');
        }*/
        
    });
    
    // add tag
    $('.social-media .tags-info form').submit(function(e){
        e.preventDefault();
        var input = $(this).find('input');
        $(this).parent().find('.tags').append('<div class="bk-text-icon"><span>'+input.val()+'</span><span class="icon icon-remove"><i class="las la-times"></i></span></div>');
        input.val('');
    });
    
    
    // remove element
    $('div').on('click','.icon-remove',function(){
       $(this).parent().remove(); 
    });
    
    // do react action when hover
    $('.social-media .posts .post .do-react div p').click(function(){
       if($(this).hasClass('hover')){
           $(this).removeClass('hover');
          // $(this).parent().siblings().find('p').removeClass('hover');
       }else{
           $(this).parent().siblings().find('p').removeClass('hover');
           $(this).addClass('hover');
       }
    });
    
    // open box of mentions
    $('.social-media .share .requirments div:nth-of-type(2)').click(function(){
        $('.bk-layout').find('.mention-friends').parent().fadeIn();
    });
    
    // open box of key words
    $('.social-media .share .requirments div:nth-of-type(3)').click(function(){
        $('.bk-layout').find('.keys_words').parent().fadeIn();
    });
    
    // click on someone to mention him
    $('.bk-layout .search ul li').click(function(){
        var id = $(this).attr('id');
        $(this).parent().parent().find('.friends-mentions').append('<p id="'+id+'"><span class="icon-remove"><i class="las la-times"></i></span><span>'+$(this).find(" div p:first-of-type").html()+'</span></p>');
    });
    
    // show image of post in big image box
    $('.social-media .posts .post img').click(function(){
        $('.bk-layout .big_image').parent().fadeIn();
    });
    
    // show reaction box tabs
    $('.social-media .posts .post .reactions .no-reactions span').click(function(){
        $('.bk-layout .reactions_list').parent().fadeIn();
    });
    
    // reaction box tabs naviation
    $('.bk-layout .reactions_list .header-data p').click(function(){
        var colors = {'0':'gray','1':'blue','2':'yellow','3':'green','4':'red'};
        $(this).parent().find('p').removeAttr('class');
        $(this).addClass(colors[$(this).index()]);
        $(this).parent().parent().find('.body-data-info > div').fadeOut();
        $(this).parent().parent().find('.body-data-info').find(' > div').eq($(this).index()).fadeIn();
    });
    
    /*--------------------------end of posts controller --------------------------------------------*/
    
    
    
    /*--------------------------start of search controller --------------------------------------------*/
    
    // open cities of specifi country
    $('.filter .country p:first-of-type').click(function(){
       $(this).next().slideToggle(); 
    });
    
    // remove person from favourite
    $('.persons').on('click','.person .image > span',function(){
        var id = $(this).attr('id');
        if($(this).hasClass('fav')){
            $(this).removeClass('fav');
            $(this).html('<i class="lar la-heart"></i>');
            
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:'/profile/deleteitem',
                type:'POST',
                dataType:'JSON',
                data:{id:id,table:'favourites'},
                success:function(data){
                    console.log(data);
                    $('.bk-layout').find('.fav-person p').html('تم ازالته من المفضله');
                    $('.bk-layout').find('.fav-person').parent().fadeIn().delay(1500).fadeOut();
                }
            });
            
        }else{
            $(this).addClass('fav');
            $(this).html('<i class="las la-heart"></i>');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:'/profile/additem',
                type:'POST',
                data:{id:id,table:'favourites'},
                success:function(data){
                    console.log(data);
                    $('.bk-layout').find('.fav-person p').html('تم اضافته الي المفضله');
                    $('.bk-layout').find('.fav-person').parent().fadeIn().delay(1500).fadeOut();
                },error(data , exception){
                    console.log(data);
                    console.log(exception);
                }
            });
            
        }
         
    });
    
    // toggle filter up , down
    $('.search-filter .filter > p:first-of-type span:last-of-type').click(function(){
       $(this).parent().parent().find('>div:first-of-type').slideToggle(); 
    });
    
    
    // more data
    // pagenation
    $('.search .see-more').click(function(){
       $(this).attr('id',$('.search .persons > div').last().attr('id')); 
       var id = $(this).attr('id');
       var data = $('.search form').serialize();
       var btn = $(this);
       data = data+'&id='+id+'&search=users';
       $.ajax({
           headers:{
             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')  
           },
           url:'/search/searchitem',
           type:'POST',
           dataType:'JSON',
           data:data,
           success:function(data){
               if(data != ""){
                $('.search .persons').append(data);
               }else{
                   swal("لا يوجد مزيد من البيانات لعرضها", {
                          icon: "info",
                        });
               }
           },error(error){
               console.log(error);
               swal("حدث خطأ اثناء عميله الادخال", {
                          icon: "warning",
                        });
           }
        });
    });
    
    
    /*--------------------------end of search controller --------------------------------------------*/

    
    /*--------------------------end of auth controller --------------------------------------------*/
    
    
    
    /*--------------------------start of dashbord controller --------------------------------------------*/
    $("table tr td a.delete , .personal-info .steps p a.delete").click(function(e){
       
       if(confirm("هل انت متأكد من عمليه الحذف")){
           
       }else{
            e.preventDefault();
       }
    });
    
   /*--------------------------start of navbar controller --------------------------------------------*/
    $('.navbar .list .inner-list ul li.normal_li_nav').hover(
       function(){
           $(this).addClass('background').siblings().removeClass('background');
       },
       function(){
           $(this).removeClass('background');
           $(this).parent().find('li.active').addClass('background');
       }
    );
    
    $('.navbar .list .inner-list ul li.articles_nav a').click(function(){
       $(this).parent().find('>ul').slideToggle(); 
    });
    
    $('.navbar .list .inner-list ul li.nav-icon').click(function(){
       $(this).parent().find('ul').fadeOut();
       $(this).find('ul').slideToggle(); 
    });
    $('.body-data > div:not(.navbar)').click(function(){
       $('.navbar .list .inner-list ul li ul').fadeOut(); 
    });
    $('.navbar .list .inner-list ul li.nav-icon ul').click(function(e){
       e.stopPropagation(); 
    });
    $('.navbar .btns-info > ul > li > ul > li').click(function(){
        $('.navbar .btns-info > ul > li > ul > li').removeClass('blue_background');
        $(this).addClass('blue_background');
        $('.navbar .btns-info > ul ul ul').hide();
        $(this).find('ul').fadeIn();
    });
    
    $('.navbar .btns-info > ul > li p').click(function(){
       $(this).parent().find('>ul').slideToggle(); 
    });
    
    
    // class shadow and fixed to navbar
    $(window).scroll(function(){
       if($(window).scrollTop() > 80){
           //('nav').addClass('navbar-first');
           //$('.navbar').addClass('navbar-second');
       }else{
           //$('nav').removeClass('navbar-first');
           //$('.navbar').removeClass('navbar-second');
       }
    });
    
    // mobile list
    $('.navbar .container > span').click(function(){
       $(this).parent().find('.list').slideToggle(); 
    });
    
    /*--------------------------end of navbar controller --------------------------------------------*/
    
   /*------------------------start of control panel--------------------------------*/
    // admin navbar
    $('.control-panel .admin-nav > span').click(function(){
       $(this).parent().find('ul').slideToggle(); 
    });
    
    if(document.URL.split('/')[document.URL.split('/').length-2] === "controlpanel"){
        var itemSelected = document.URL.split('/')[document.URL.split('/').length-1];
        $('.control-panel .admin-nav ul li').each(function(){
            
            if($(this).attr('id') === itemSelected){
                $(this).addClass('active');
            }
        })
    }
    
    // icon removing input
    $('form').on('click','.icon-removing-input',function(){
       
       $(this).parent().remove(); 
    });
    
    /****************************page defaul*********************/
    // tabs of the personal info
    $('.preview-box ul.check_inner_li_order li').click(function(){
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        var content = $(this).parent().parent().parent().find('.content');
        content.find('>div').fadeOut();
        content.find('>div').eq($(this).index()).fadeIn();
    });
    // open preview box
    $('.control-panel  span.preview-icon').click(function(){
        $('.outpage-bk-gray').find('.showing').parent().fadeIn();
        $('body').css('overflow','hidden');
    });
    
    
    
    // open edit box 
    $('.control-panel .edit-icon').click(function(){
       $('.outpage-bk-gray').find('.edit-box').parent().fadeIn();
        $('body').css('overflow','hidden');
    });
    // close box
    $('.close_box').click(function(){
        $('body').css('overflow','auto');
       $(this).parent().parent().fadeOut(); 
    });
    
    // filter icon of filters action
    $('.project-plan-status-filter form > span').click(function(){
       $(this).parent().find('div').slideToggle(); 
    });
    
    // tags autocomplete
    
    // open adding process
    $('.page-title span:not(:first-of-type)').click(function(){
        $('.outpage-bk-gray').find('.adding-process').parent().fadeIn();    
        $('body').css('overflow','hidden');
    });
    // close gray background
    $('.outpage-bk-gray').click(function(){
        $(this).fadeOut();
        $('body').css('overflow','auto');
    });
    
    $('.outpage-bk-gray > div').click(function(e){
        e.stopPropagation();
    });
    
    // close adding process
    $('.adding-process header span:last-of-type').click(function(){
       $(this).parent().parent().parent().fadeOut(); 
        $('body').css('overflow','auto');
    });
    
    
    
    // delete box data (open the box)
    $('.delete-icon').click(function(e){
       e.preventDefault();
       $('audio')[0].play();
       $('.delete-area').fadeIn(); 
       $('.delete-area .delete-box button:first-of-type').attr('url',$(this).attr('href'));
    });
    
    // close delete box
    $('.delete-area .delete-box button:last-of-type').click(function(){
       $(this).prev().removeAttr('url');
       $(this).parent().parent().fadeOut(); 
    });
    
    // delete from delete box
    $('.delete-area .delete-box button:first-of-type').click(function(){
       window.location = $(this).attr('url');
    });
    
    
    
    // switch on 
    $('input.custom-switch').click(function(){
       $(this).toggleClass('switchon'); 
    });
    
    
   
    $('.control-panel.services .last_services .row .col-xs-12 .service').click(function(){
       if(window.outerWidth <= 767){
            $('.outpage-bk-gray').find('.edit-box').parent().fadeIn();
        }
    });
    
    
    
    //camera men
    
    // open edit box of public information
    $('.order .order-header p:last-of-type span:nth-of-type(2)').click(function(){
       $('.outpage-bk-gray').find('.edit-box.public-info').parent().fadeIn(); 
    });
    
    // open edit box of works of camera man
    $('.edit-box .content div p span:nth-of-type(4)').click(function(){
        $('.outpage-bk-gray').find('.edit-box.public-info').parent().fadeOut(); 
        $('.outpage-bk-gray').find('.edit-box.works-info').parent().fadeIn(); 
    });
    
   
  // config of ckeditor
  function ckconfig(){
      return {
            height: '200px',
            extraPlugins: 'forms',
            baseFloatZIndex: 10005,
            filebrowserUploadMethod: 'form',
            filebrowserUploadUrl:'/controlpanel/uploadimage?_token=' + $('meta[name=csrf-token]').attr("content"),
            filebrowserImageUploadUrl:'/controlpanel/uploadimage?_token=' + $('meta[name=csrf-token]').attr("content"),
        };
  }
   if(document.URL.split('/')[document.URL.split('/').length-1] == "articles"){
      // ckeditor 
       CKEDITOR.replace( 'article-ckeditor', ckconfig());
   }
   
    
    
    
    
    // print
    $('.print-btn').click(function(e){
       e.preventDefault();
       window.print(); 
    });
    /*------------------------end of control panel--------------------------------*/
    
    /*----------------start of sending message-----------------------------*/
    
    $('.sending form textarea').keyup(function(){
       $('.sending form textarea + p span:first-of-type').html($(this).val().length); 
    });
    
    // send message
    $('.sending form').submit(function(e){
       e.preventDefault();
       var data = new FormData($(this)[0]);
       var form = $(this);
       data.append('edited_id',$(this).attr('edited_id'));
       data.append('table','messages');
       data.append('receiver_id',document.URL.split('/')[document.URL.split('/').length - 1]);
       data.append('no_characters',$('.sending form textarea + p span:first-of-type').html())
       $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:'/profile/additem',
           type:'POST',
           data:data,
           dataType:'JSON',
           cache:false,
           contentType:false,
           processData:false,
           success:function(data){
               console.log(data);
               if(data == 1){
                    swal("تمت  ارسال الرساله بنجاح", {
                      icon: "success",
                    });
                    form.find('textarea').val('');
                }else if(data == 2){
                  swal("لا نسطيع ارسال رساله عن طريق الهاتف لصديقك المقيم خارج بلدك", "", "error");
                }else{
                    swal("هناك خطأ في اكمال العمليه تأكد من توفر رسائل هاتف لديك كافيه في حاله استخدامك الارسال عن طريق الموبايل", "", "error");
                }
           },
           error:function(error){
               console.log(error);
               swal("هناك خطأ في اكمال العمليه تأكد من توفر رسائل هاتف لديك كافيه في حاله استخدامك الارسال عن طريق الموبايل", "", "error");

           }
       });
    });
    
    /*--------------------end of sending message-----------------------------*/
    
    /*----------------------start of ajax requests--------------------------------*/
    /*----------start of control panel----------*/
    // add new article
    $('.outpage-bk-gray .adding-article form').submit(function(e){
       e.preventDefault();
       CKEDITOR.instances['article-ckeditor'].updateElement();
       var data = new FormData($(this)[0]);
       $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:'/controlpanel/addarticle',
           type:'POST',
           data:data,
           dataType:'JSON',
           cache:false,
           contentType:false,
           processData:false,
           success:function(data){
               if(data == 1){
                    swal("تمت  اضافه المقال بنجاح", {
                      icon: "success",
                    });
                }
           },
           error:function(error){
               console.log(error);
           }
       });
    });
    // preview article data
    $('.articles .box-info-media .heading p:last-of-type span:first-of-type').click(function(){
        var id = $(this).attr('id');
        var table = $(this).attr('table');
        $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           },
           url:'/controlpanel/previewinfo',
           type:'POST',
           data:{id:id,table:table},
           dataType:'JSON',
           success:function(data){
               console.log(data['status']);
               if(data['status'] == 200){
                   $('.edit-box.edit_article').html(data['response']);
                   CKEDITOR.replace( 'article-ckeditor-update', ckconfig());
                   CKEDITOR.instances['article-ckeditor-update'].setData(data['content']);
               }
               
           },
           error:function(error){
               console.log(error);
           }
        });
    });
    
    // submit data editing
    $('.body-data').on('submit','.outpage-bk-gray .edit-box.edit_article form',function(e){
       e.preventDefault();
       CKEDITOR.instances['article-ckeditor'].updateElement();
       var data = new FormData($(this)[0]);
       data.append('edited_id',$(this).attr('edited_id'));
       data.append('table',$(this).attr('table'));
       $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:'/controlpanel/submitediting',
           type:'POST',
           data:data,
           dataType:'JSON',
           cache:false,
           contentType:false,
           processData:false,
           success:function(data){
               console.log(data);
               if(data == 1){
                    swal("تمت  تعديل المقال بنجاح", {
                      icon: "success",
                    });
                }
           },
           error:function(error){
               console.log(error);
           }
       });
    });
    // delete item
    $('.delete-btn').click(function(){
       var id = $(this).attr('id'),
           table = $(this).attr('table'),
           button = $(this);
        swal({
          title: "هل انت متأكد من عميله الحذف",
          text: "عند مسحه لن تستطيع ارجاعه مره اخري !",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url:'/controlpanel/delete',
               type:'POST',
               data:{id:id,table:table},
               success:function(data){
                    console.log(data);
                    if(data == 1){
                        swal("تمت عمليه المسح بنجاح", {
                          icon: "success",
                        });
                    }
                   button.parent().parent().parent().parent().remove();
               },error(exception){
                   console.log(exception);
               }
            });
            
          }
        });
        
        
    });
    /*----------end of control panel----------*/
    
    
    /*--------------------------start of profile-------------------------*/
    
    // verify number
    $('.bk-layout').find('.verify_number form').submit(function(e){
       e.preventDefault();
       var phone_activation = $(this).find('input[name="phone_activation"]').val();
       var bk_layout = $(this).parent();
       $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url:'/profile/edititem',
          type:'POST',
          data:{phone_activation:phone_activation,table:'users_activation'},
          success:function(data){
              if(data == 1){
                  swal("تمت تفعيل حسابك بنجاح", {
                      icon: "success",
                    });
                  bk_layout.parent().fadeOut();
              }else if(data == 2){
                  swal("الرمز الذي ادخلته غير مطابق للرمز الذي تم ارساله لك", "", "error");
              }
          },
          error:function(data){
              console.log(data);
          }
       });
    });
    
    // edit profile info
     $('.bk-layout').find('.edit-info form').submit(function(e){
        e.preventDefault();
        var data = new FormData($(this)[0]);
       data.append('table','users');
         var parent = $(this).parent().parent();
         
       $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:'/profile/edititem',
           type:'POST',
           data:data,
           dataType:'JSON',
           cache:false,
           contentType:false,
           processData:false,
           success:function(data){
               console.log(data);
               if(data == 1){
                    swal("تمت  تعديل البيانات بنجاح", {
                      icon: "success",
                    });
                }else{
                    swal("هناك خطأ في اكمال العمليه", "", "error");
                }
               parent.fadeOut();
           },
           error:function(error){
               console.log(error);
           }
       });
         
     });
    
     // accept expectation
     $('.profile .profile-content .profile-body #website-messages .content #guess-who  div div p.right button').click(function(){
         var button = $(this);
         var parent = button.parent();
         swal({
          title: "هل انت متأكد من الموافقه علي هذا التوقع",
          text: "عند الموافقه سيتم ارسال عشر نقاط الي المتوقع",
          icon: "info",
          buttons: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url:'/profile/edititem',
               type:'POST',
               data:{id:button.attr('id'),table:'expectations',status:1},
               success:function(data){
                    console.log(data);
                    parent.html('<span><i class="las la-check-circle"></i></span>                    <span>توقع صحيح</span>');
                    parent.next().remove();
                    parent.parent().append('<p></p>');
                    swal({
                         icon:"success",
                         title:"تم الموفقه علي التوقع بنجاح"
                     })
                   button.parent().parent().parent().parent().remove();
               },error(exception){
                   console.log(exception);
               }
            });
            
          }
        });

     });
    
    // wrong expectation
     $('.profile .profile-content .profile-body #website-messages .content #guess-who  div div p.wrong button').click(function(){
         var button = $(this);
         var parent = button.parent();
         swal({
          title: "هل انت متأكد من عدم الموافقه علي هذا التوقع",
          text: "عند عدم الموافقه سيتم خصم عشر نقاط من المتوقع",
          icon: "warning",
          buttons: true,
        })
        .then((willDelete) => {
          if (willDelete) {
              $.ajax({
               headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url:'/profile/edititem',
               type:'POST',
               data:{id:button.attr('id'),table:'expectations',status:0},
               success:function(data){
                    console.log(data);
                    parent.prev().remove();
                    parent.html('<span><i class="las la-times-circle"></i>                           </span><span>توقع خاطئ</span>');
                    parent.parent().append('<p></p>');
                    swal({
                         icon:"success",
                         title:"تم الموفقه علي التوقع بنجاح"
                     })
                   button.parent().parent().parent().parent().remove();
               },error(exception){
                   console.log(exception);
               }
            });
            
          }
        });

     });
     
     
    
    
    /*---------------------end of profile----------------------*/
    
    /*--------------------------start of search-------------------------*/
     // search about someone
     $('.search form').submit(function(e){
        e.preventDefault(); 
        var data = new FormData($(this)[0]);
       data.append('search','users');
       $.ajax({
           headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:'/search/searchitem',
           type:'POST',
           data:data,
           dataType:'JSON',
           cache:false,
           contentType:false,
           processData:false,
           success:function(data){
               if(data == ""){
                   $('.search .persons').html("<img class='no_data_to_display' src='/images/icons/no_data.svg'>");
               }else{
                   $('.search .persons').html(data);
               }    
           },
           error:function(error){
               console.log(error);
           }
       });
     });
    /*----------------------------end of search-------------------------*/

    
    /*----------------------end of ajax requests--------------------------------*/

    
    
    
    

   

});