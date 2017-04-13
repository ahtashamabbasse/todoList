<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
        <link rel="stylesheet" href="{{asset('icheck/skins/all.css')}}"/>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> Todo App</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class=" glyphicon glyphicon-user"></i> Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Loggout</a></li>

                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <header>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h2>
                                <h1 class="header-title">Todo List</h1>
                            </h2>
                        </div>
                        <div class="pull-right">
                            <a href="{{route("todo.create")}}" class="btn btn-success show-todolist-model" title="Create New List" >Create New List</a>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <?php $count=$todoLists->count()?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-warning {{$count?'hidden':""}}" id="no-recrod-alert">
                    No Record Found
                </div>
                <div class="panel panel-default {{ !$count?'hidden':""}}">


                    <ul class="list-group" id="todo-list">
                        @forelse($todoLists as $todoList)
                        @include("todolist.item",compact($todoList))
                        @empty
                            testing
                        @endforelse
                    </ul>

                    <div class="panel-footer">
                        <small ><span id="todo-list-counter">{{$count}}</span>
                            <span >{{ $count > 1 ? "Records" : "Record"}}</span></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("todolist.todoModal")
    @include("todolist.taskModal")


    
    
        <script src="{{asset("js/jquery.js")}}"></script>
        <script src="{{asset("js/bootstrap.js")}}"></script>
        <script src="{{asset("js/main.js")}}"></script>
        <script src="{{asset("icheck/icheck.js")}}"></script>

    </body>

</html>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="pull-right"></div>
            <div class="pull-left"></div>
        </div>
        <div class="col-md-6">
            <div class="pull-right"></div>
            <div class="pull-left"></div>
        </div>
    </div>
</div>



























