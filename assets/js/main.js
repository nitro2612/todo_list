$(document).ready(function()
{

	$('#btn_add').click(function ()
    {
	    $('#item_add').animate({marginLeft: '35%'});
	    $('#todo_list').animate({marginLeft: '-45%'});
    });

    $('#btn_hide').click(function ()
    {
        $("#item_add").animate({marginLeft: '120%'});
        $("#todo_list").animate({marginLeft: '30%'});
    });

    $('#btn_login_land').click(function ()
    {
        $('#login').animate({marginLeft: '35%'});
        $('#todo_list').animate({marginLeft: '-45%'});
    });

    $('#btn_hide_login').click(function ()
    {
        $("#login").animate({marginLeft: '120%'});
        $("#todo_list").animate({marginLeft: '30%'});
    })

});