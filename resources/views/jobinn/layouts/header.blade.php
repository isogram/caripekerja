<header id="header" style="padding: 0;">

    <div class="banner-outer">

        <div style="height: @if(Request::url() === route('home')) 460px @else 119px @endif" id="banner" class="element kenburnsy">
            @if(Request::url() === route('home'))
                <img src="{{ asset("images/bg") }}/bg-new.png" alt="banner">
            @endif
        </div>

    <div class="container home-custom">

        <!--NAVIGATION START-->

        <div class="navigation-col">

            <nav style="margin-top: 20px" class="navbar navbar-inverse">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

                    <strong style="" class="logo"><a href="{{url('/')}}"><img style="width: 150px" src="{{ asset("images") }}/logocpbeta.png" alt="logo"></a></strong> </div>

                <div id="navbar" class="collapse navbar-collapse">

                    <ul class="nav navbar-nav" id="nav">

                        @if($authRole != 'employer') <li><a style="color: #fff;margin-top: 10px" href="{{route('job-list')}}">Lowongan Kerja</a></li> @endif

                        @if($authRole != 'worker') <li><a style="color: #fff;margin-top: 10px" href="{{route('worker-list')}}">Cari Pekerja</a></li> @endif

                        @if($authRole != 'worker') <li><a style="color: #fff;margin-top: 10px" href="{{route('job-create')}}">Buat Lowongan</a></li> @endif

                    </ul>

                </div>

            </nav>

        </div>

        <!--NAVIGATION END-->

    </div>



    <!--USER OPTION COLUMN START-->
    <div class="user-option-col" style="margin-top: 20px">

        @if($isLogged)

                <div class="dropdown-box">

                    <button style="color: #fff;background: none" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="hi-user">Hi, {{$authUser['name']}} @if($authRole == 'employer') | Anda memiliki {{$authUser['quota']}} Kuota @endif</span>
                    </button>
                    @if($authRole == 'employer') <a href="{{route('topup-create')}}" class="button-link link-white topup-link">TOP UP</a> @endif

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                        <li><a href="{{route('myaccount-profile')}}">Akun Saya</a></li>

                        <li><a href="{{url('/keluar')}}">Log off</a></li>

                    </ul>

                </div>


        @else
            <div class="dropdown-box" style="color: #fff;">
                <span><a  style="color: #fff;" href="{{route('login')}}">Masuk</a></span> | <span><a  style="color: #fff;" href="{{route('register')}}">Daftar</a>
                <a href="{{route('topup-create')}}" class="button-link link-white topup-link">TOP UP</a></span>
            </div>
        @endif

    </div>

        @if(Request::url() === route('home'))

        <div style="margin-top: 127px" class="caption">

            <div class="holder">

                <h1>CariPekerja adalah Mitra Pencari Pekerja untuk <span style="display: block;margin-top: 13px"> Usaha Kecil dan Menengah</span></h1>

                <div class="btn-row">
                    <a href="{{route('job-list')}}"><i class="fa fa-user"></i>Saya cari pekerjaan</a>
                    <a href="{{route('worker-list')}}"><i class="fa fa-building-o"></i>Saya butuh pekerja</a>
                </div>

            </div>

        </div>

            @endif
    </div>

    <!--USER OPTION COLUMN END-->

</header>