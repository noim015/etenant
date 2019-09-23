<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

           

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .landlord{
                background: #03A9F4;
                padding: 30% 0 30% 0;
                color: #ffffff;
                font-size: 40px!important;
            }
            .landlord h2{
                font-size: 60px;
                color: #034563;
            }
            .renter{
                background: #00BCD4;
                padding: 30% 0 30% 0;
                color: #086c79;
                font-size: 40px!important;
            }
            .renter h2{
                font-size: 60px;
                color: #034563;
            }
            body{
                background:url({{ asset('img/bg.jpg') }});
                background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
            }
            .top_links{
                background: #3F51B5;
               padding: 10px 0 10px 0;
            }
            .top_links a{
                color: #f9f6f9;
    font-size: 20px;
    padding: 0px 5% 0 0;
            }

            .top_links span{
                color: #03A9F4;
                 font-size: 18px;
            }
            .content h1{
                color: #fff;
    font-size: 60px;
    font-weight: 900;
    background: #F44336;
    padding: 15px 0;
    margin:5% 0;
            }
        </style>
    </head>
    <body>




    
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div>
                   <h1>Tenant Online Form Submission</h1>
                   @if (Route::has('login'))
                <div class="top_links">
                    @auth
                        <a href="{{ url('/home') }}">Profile</a>
                        <span>{{ Auth::user()->name }} </span>
                        <span><img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;"></span>
                    @else
                       

                        
                           
                       
                    @endauth
                </div>
            @endif

                </div>

                
                <div class="container">
		           <div class="row">
		             <div class="col-md-6">
		              <div class="landlord">
			             <h2>Landlord</h2>
                         <a class="btnn" href="{{ route('login') }}">Login</a> /
                         <a class="btnn" href="{{ route('register') }}">Register</a>
			          </div>
		          </div>
		           <div class="col-md-6">
		              <div class="renter">
			        <h2>Tenant</h2>
				   <a class="btnn" href="{{ route('login') }}">Login</a> /
                   <a class="btnn" href="{{ route('register') }}">Register</a>
			 </div>
		   </div>
		</div>
	</div>



                
            </div>
        </div>
    </body>
</html>
