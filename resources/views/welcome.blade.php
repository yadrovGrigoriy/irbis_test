<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container  mt-5">
        @if (Route::has('login'))
                <div class="top-right links float-right mr-3 ">
                    @auth
                        <a  class="btn btn-info" href="{{ url('/home') }}">Home</a>
                  
                    @endauth
                </div>
            @endif
           
            {!!  Form::open([ 'url' => 'email'])  !!} 
                <h2 class="title text-center">Hello</h2>
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'enter your Email']) !!}
                </div>   
                <div class="form-group">
                {!! Form::submit('Отправить', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </body>
</html>
