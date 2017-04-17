<div class="alert alert-success" id="add-new-alert" style="display: none;"></div>
{!! Form::Model($todolist,[
"route"=>$todolist->exists ? ["todo.update",$todolist->id] : "todo.store",
"method"=>$todolist->exists ? "PUT": "POST"

]) !!}

    <div class="form-group">
        <label class="control-label">List Name</label>
        {!! Form::text("title",null,["class"=>"form-control","id"=>"title"]) !!}
    </div>
    {!! Form::hidden("id") !!}
    <div class="form-group">
        <label class="control-label">Description</label>
        {!! Form::textarea("description",null,["class"=>"form-control","id"=>"description","rows"=>"2"]) !!}
    </div>
{!! Form::close() !!}