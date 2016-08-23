<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: start;
                display: table-cell;
                vertical-align: top;
                font-size: 30px;
                color : black;

            }

            .content {
                text-align: center;
                display: inline-block;

            }

            .title {
                font-size: 46px;
                color : black;
            }
        </style>
    </head>
    <body>

    <form action ="edit" method="post" >
        {!! csrf_field() !!}
        <input name="_method" type="hidden" value="put">

        <input type = "hidden" name = "id" value = "{{$car->id}}" >

                <div class="title">create new  cars  </div>
                <div class="container">
                <label>make</label>
                <input type="text" name="make" value="{{$car->make}}" >    </br>
                <label>model</label>
                <input type="text" name="model" value="{{$car->model}}" >    </br>
                <label>produced_on</label>
                <input type="text" name="produced_on" value="{{$car->produced_on}}"  >    </br>
                    <button type="submit" > update  </button>
                    <a href="{{ URL::route('destroy',$car->id)}}"> delete </a>
                </div>
                 <br/>
        <div class="title">
    <br/>

            <a href ="http://localhost:8000/car/" > back to home </a>
        </div>
        </form>
    </body>
</html>
