$(document).ready(function()
{
    $("#item_add").hide();

	$('#btn_add').click(function () {
        $("#item_add").toggle(1000);
        $("#todo_list").toggle(1000);
    });

    $('#btn_hide').click(function () {
        $("#item_add").toggle(1000);
        $("#todo_list").toggle(1000);
    });

});