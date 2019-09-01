$(document).ready(function()
{

	$('#btn_add').click(function () {
	    $('#item_add').animate({marginLeft: '35%'});
	    $('#todo_list').animate({marginLeft: '-45%'});
    });

    $('#btn_hide').click(function () {
        $("#item_add").animate({marginLeft: '120%'});
        $("#todo_list").animate({marginLeft: '30%'});
    });

});