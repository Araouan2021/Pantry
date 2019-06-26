<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title>
                NoteBook App
            </title>
            <link href="{{ asset('dist/css/main.css') }}" rel="stylesheet">
                <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
                </link>
            </link>
        </meta>
    </head>

<body>

<div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Add Notebook
                </h1>
                

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Add Notebook form==================== -->
                <form action="{{route('recipes.save')}}" method="post">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="text" class="form-control" name="title" placeholder="Enter Recipe Title Here">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Recipe</button>
                </form>
            </div>

            <script src="{{ asset('dist/js/jquery3.min.js') }}">
            </script>
            <script src="{{ asset('dist/js/bootstrap.js') }}">
            </script>
        </div>
    </body>
</html>


