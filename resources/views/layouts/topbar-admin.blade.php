<head>
    <style>
        li a{
            color: black !important;
        }

        .active{
            background-color: #d4d4d4 !important;
            color: black !important;
        }

        .mm-active .active {
                color: #000000 !important;
            }

        li a .active{
            color: black !important;
        }

        span{
            color: black !important;
        }

    </style>
</head>
<header id="page-topbar">
    <div class="navbar-header" style="background-color: #95ced4 !important">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box" style="background-color: white">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo.svg')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                    </span>
                </a>
                <a href="index" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('frontend/images/SVG/logo.svg')}}" alt="" height="19" style="width: 50%;height: auto;">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>
        </div>
            <!-- App Search--> 
        <div class="row">
            <div class="col-sm">

                 {{-- language --}}
                 <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if(Session::get('lang')=='th')
                            <span> 
                            <img class="" src="{{asset('assets/images/flags/thai.jpg')}}" alt="Header Language" height="16">
                                
                            </span>
                        @else 
                            <span>  
                                <img class="" src="{{asset('assets/images/flags/us.jpg')}}" alt="Header Language" height="16">
                            </span>
                        @endif
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="changelanguage('th');">
                            <img src="{{asset('assets/images/flags/thai.jpg')}}" class="mr-1" height="12"> <span class="align-middle">ไทย</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item notify-item" onclick="changelanguage('en');">
                            <img src="{{asset('assets/images/flags/us.jpg')}}" class="mr-1" height="12"> <span class="align-middle">English</span>
                        </a>
                    </div>
                </div>


                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="opennoti()">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge badge-danger badge-pill" id="count">2</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> การแจ้งเตือน </h6>
                                </div>
                                <div class="col-auto">
                                    <a href="{{url('allnotification')}}" class="small">ทั้งหมด</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div style="max-height: auto;" id="notification"> 
                            @if(count($noti) != 0)
                                @foreach ($noti as $item)
                                <a href="{{$item->link}}" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                {{substr($store->store_name_th,0,3)}}
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">{{$store->store_name_th}}</h6>
                                            <h6 class="mt-0 mb-1">{{$item->title}}</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">{!! substr($text,0,120).'...' !!}</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> {{$str}} ago</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            @else 
                                <a href="่javascript:void(0)" class="text-reset notification-item">
                                    <div class="media">
                                        <div class=" mr-3">
                                            ไม่มีข้อความ
                                        </div>
                                    </div>
                                </a>
                            @endif
                           
                        </div> --}}
                        <div class="p-2 border-top">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                {{-- <i class="mdi mdi-arrow-right-circle mr-1"></i> View More.. --}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{-- <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/avatar-1.jpg')}}"
                            alt="Header Avatar"> --}} 
                        <span class="d-none d-xl-inline-block ml-1">{{!empty(Session::get('admin_name')) ? Session::get('admin_name') :''}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item text-danger" href="javascript:void();" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> {{ __('Logout') }} </a>
                        <form id="logout-form" action="{{ url('Logoutadmin') }}" method="get" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    
    $(document).ready(function(){
           // $.getScript('../assets/libs/simplebar/simplebar.min.js');
        setInterval(function(){ 
            $.ajax({ 
                url:'{{ url("getnotification") }}' ,
                method:'GET',
                dataType : 'html', 
                success:function(data){
                
                    text = JSON.parse(data);

                    $('#count').html(text['count']);
                    $('#notification').html(text['content']);
                    //$('#notification').attr('data-simplebar','init')
                  
                }
            });
        }, 1000*60);
     });

     function opennoti(params) {
        $.ajax({ 
                url:'{{ url("changestatus") }}' ,
                method:'GET',
                dataType : 'html', 
                success:function(data){
                    $('#count').html(data);         
                }
            });
     }
</script>
<script>
    function changelanguage(text){
        // console.log(text);
        $.ajax({
            url: '{{ url("changelanguage")}}/' + encodeURIComponent(text),
            type: 'GET',
            dataType: 'HTML',
            success: function(data) {
                // console.log(data);
                window.location.reload();
            }
        });
    }

</script>