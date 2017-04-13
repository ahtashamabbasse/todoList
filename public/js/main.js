$(document).ready(function () {

    $("body").on("click",".show-todolist-model",function (event) {
        event.preventDefault();
        var me=$(this),
            url=me.attr("href")
            title=me.attr("title")
        $("#todo-list-title").text(title)
        $("#todo-list-save-btn").text(me.hasClass("edit")?"Update":"Create New")

        $.ajax({
            url:url,
            dataType:"html",
            success:function (response) {
                $("#todo-list-body").html(response);
            }
            
        })
        $("#list-model").modal("show");
    })

    function showMessage(msg) {
        $("#add-new-alert").text(msg).slideDown(500).delay(1000).slideUp(500)
    }
    function updateTodoListCounter() {
        var count=$(".list-group-item").length;
        $("#todo-list-counter").text(count).next().text(count>1?"Records":"Record")
    }

    // $("#list-model").on("keypress",":input:not(textarea)",function (event) {
    //     return event.keyCode!=13;
    // })



    $("#todo-list-save-btn").click(function (event) {
        event.preventDefault();
        var form=$("#todo-list-body form"),
            url=form.attr("action"),

            method=$("input[name=_method]").val()==undefined?"POST":"PUT";
        console.log(method)
        $("form").find(".help-block").remove();
        $("form").find(".form-group").removeClass("has-error")

        $.ajax({
            url:url,
            method:method,
            data:form.serialize(),

            success:function (response) {
                if(method=="Post")
                {
                    $("#todo-list").prepend(response)
                    showMessage("Todo List Has been Created Successfully")
                    form.trigger("reset")
                    $("#title").focus();
                    updateTodoListCounter();
                }
                else
                {
                    var id=$("input[name=id]").val();
                    if(id)
                    {
                        $("#todo-list-"+id).replaceWith(response)

                    }
                    $("#list-model").modal("hide")

                }


            },
            error:function (xhr) {
                var error=xhr.responseJSON
                if($.isEmptyObject(error)==false) {
                    $.each(error,function (key,value) {
                        $("#"+key)
                            .closest(".form-group")
                            .addClass("has-error")
                            .append("<span class='help-block'><strong>"+value+"</strong></span>")
                    })
                }
            }
        })
        
    })






    $(".show-task-model").click(function (event) {
        event.preventDefault();
        $("#task-model").modal("show");
    })


    $("input[type=checkbox]").iCheck({
        checkboxClass: 'icheckbox_square-green',
        increaseArea: '20%' // optional
    })


    $("#check_all").on("ifChecked",function (e) {
        $(".check-item").iCheck("check");
    })

    $("#check_all").on("ifUnchecked",function (e) {
        $(".check-item").iCheck("uncheck");
    })

})