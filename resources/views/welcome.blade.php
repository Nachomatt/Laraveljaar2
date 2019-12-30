@extends('layouts.app')
    @section('content')
        <body class="homepagina">
        <div class="flex-center position-ref full-height">


            <div class="content">

                <div class="title wt m-b-md weclothehome">
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        <img class="Logohome" src="/images/Logo.png"><br>
                    </a> Weclothe
                </div>
                @if (Route::has('login'))
                    <div class="links">
                        @auth
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card cardhome">
                                <div class="card-header"><h2 class="kaarttekst">Welcome to the website</h2></div>

                                <div class="card-body">
                                    <h2 class="Homepagetekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam facilisis est vel dolor dictum, ac dictum lorem elementum. Quisque justo est, finibus at mi quis, tincidunt blandit dui. Vivamus efficitur tortor sit amet quam elementum egestas. Praesent ac malesuada orci. Phasellus molestie eros sed massa venenatis, a volutpat lectus commodo. Proin rhoncus bibendum urna quis volutpat. Duis vestibulum id ex auctor facilisis. Nulla pulvinar semper justo. Quisque vel vulputate erat.

                                        Ut ullamcorper, velit nec pellentesque sodales, nibh ligula suscipit mauris, in interdum est risus a libero. Sed ipsum leo, dignissim ut libero ac, viverra congue augue. Nullam a luctus elit. Donec ullamcorper felis in lacus finibus, eget aliquet libero auctor. Quisque at enim sit amet nisl convallis condimentum nec eu ligula. Mauris pharetra luctus metus, vel fermentum nunc ornare a. Sed venenatis sodales viverra. Nullam pellentesque lectus nec lacinia eleifend. Curabitur ac massa in tellus pellentesque egestas sit amet at mauris.

                                        Duis porta hendrerit nisl, non vestibulum arcu finibus eget. Nunc vel urna quis risus condimentum tempor imperdiet non erat. Nam ultrices semper dolor et aliquet. Ut at ullamcorper nisi. Mauris ac nisi sit amet elit fringilla imperdiet. Maecenas dui neque, suscipit ac lectus et, porta fringilla quam. Vivamus cursus semper tellus at malesuada. Quisque dignissim tellus a arcu viverra, id euismod mauris tempus. Nulla non tincidunt lorem, eu tincidunt dolor. Mauris pretium eu mi eu ultricies. Morbi ac tortor vitae lacus vehicula fermentum vel et ligula.

                                        Duis id mi at nibh blandit pulvinar. Phasellus fermentum eros a risus commodo sagittis. Morbi sit amet fermentum mi. Mauris congue tortor quam, at laoreet urna lobortis ut. Aenean tempus quis nulla eu molestie. Ut feugiat, neque quis posuere finibus, arcu nibh malesuada metus, non faucibus sem mi in dui. Nam risus nisl, luctus a vulputate a, dictum a sapien.

                                        Quisque tempus non orci auctor ullamcorper. Nullam porttitor metus eu sem cursus, et vulputate neque posuere. Vestibulum faucibus turpis euismod pulvinar aliquet. Vivamus pulvinar orci eu commodo blandit. Pellentesque sit amet consectetur ligula, at fermentum quam. Curabitur pharetra nulla nec odio tincidunt, sit amet posuere quam vehicula. Quisque laoreet ullamcorper diam, vel volutpat leo fermentum eu. Mauris varius quam id justo volutpat ultricies. Nam quis volutpat elit. Phasellus diam lorem, dictum vitae sem non, pharetra hendrerit elit. Sed nibh dolor, sollicitudin id nisi tincidunt, pretium sodales nunc.</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="links wt">
                    <a href="#">Clothes</a>
                    <a href="#">For</a>
                    <a href="#">Everyone</a>
                    <a href="#">In</a>
                    <a href="#">Every</a>
                    <a href="#">Size</a>
                    <a href="#">Just for you</a>
                </div>
            </div>
        </div>
        </body>
@endsection
