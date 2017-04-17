{{--Model open list--}}
<div class="modal fade" id="confirm-model" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="todo-list-title">Delete Confirmaitons</h4>
            </div>
            <div class="modal-body" id="todo-list-body">
                <form action="">
                    {{csrf_field()}}
                    <p></p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="todo-list-remove-btn">Yes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{--Model Closing list--}}