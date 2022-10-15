<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ trans('panel.site_title') }}</title>
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  


    @yield('styles')
    <!--Laravel pwa directiva para compilarla-->
    @laravelPWA

</head>

<body >

   <!-- <div id="loading">
        <div class="loader simple-loader" >
            <div class="loader-body" role="status">
            <span class="visually-hidden">Loading...</span>

            </div>
        </div>
      </div>-->



    <div class="wrapper">
        @include('partials.menu')


                <div  class="main">
                    @include('partials.navar')
                    
                    @yield('content')
                    @if(session('message'))
                        <div class="">
                            <div class="">
                                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                            </div>
                        </div>
                    @endif
                    @if($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
    
    
            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    <!--nuevos scripts-->

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    
    @yield('scripts')
</body>

</html>
