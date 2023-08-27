@if(!$data->isEmpty())
   @foreach($data as $user)
        <div class="col-md-3 col-sm-6 col-xs-12" id="{{$user->id}}">
            <div class="person" itemscope itemtype="https://schema.org/person">
                <div class="image">
                    <span id="{{$user->id}}" class="@if(\App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$user->id)->count() > 0)fav @endif">
                        <i class="@if(empty(\App\favourite::where('user_id','=', auth()->user()->id)->where('favourite_id','=',$user->id)->count() > 0))lar la-heart @else las la-heart @endif"></i></span>
                    <img src="{{asset('images/users')}}/{{$user->image}}">
                    <button><span>{{\App\messages::where('sender_id','=',auth()->user()->id)->where('receiver_id','=',$user->id)->count()}}</span><span>من الرسائل ارسلتها له</span></button>
                </div>
                <p class="text-center" itemprop="name">{{$user->username}}</p>
                <p itemprop="description" title="{{$user->short_note}}">{{$user->short_note}}</p>
                <button><a href="/sending/{{$user->id}}">ارسل رساله</a></button>
            </div>
        </div>
    @endforeach

@endif