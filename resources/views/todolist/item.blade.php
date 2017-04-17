<li class="list-group-item" id="todo-list-{{$todoList->id}}">
    <h4 class="list-group-item-heading">
        {{$todoList->title}} <span class="badge">10 Tasks</span>
    </h4>
    <p class="list-group-item-text">
        {{$todoList->description}}
    </p>
    <div class="buttons">
        <a href="#" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-ok show-task-model" title="Task Manage"></i></a>
        <a href="{{route('todo.edit',$todoList->id)}}" class="btn btn-info btn-xs show-todolist-model edit" title="Edit {{$todoList->title}}"><i class="glyphicon glyphicon-edit " ></i></a>
        <a href="{{route("todo.destroy",$todoList->id)}}" data-title="{{$todoList->title}}" class="btn btn-danger btn-xs delete"><i class="glyphicon glyphicon-remove" title="Delete {{$todoList->title}}"></i></a>
    </div>
</li>