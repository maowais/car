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

    <form action ="" method="POST" >
        {!! csrf_field() !!}

        <?php echo csrf_field();?>
        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                <div class="title">create new  cars  </div>
                <div class="container">
                <label>make</label>
                <input type="text" name="make"  >    </br>
                <label>model</label>
                <input type="text" name="model"  >    </br>
                <label>produced_on </label>
                    </br>format :yyyy-mm-dd
                <input type="text" name="produced_on"  >    </br>
                    <button type="submit" > create  </button>
                </div>

        </form>
    </body>
</html>
