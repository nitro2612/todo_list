$(document).ready(function()
{
   clearInput();
   openModule();
   toggleRegistrationFrame();


});

function clearInput()
{
    $('input[type=text]').val('');
    $('input[type=date]').val('');
    $('input[type=time]').val('');
    $('input[type=checkbox]').prop('checked', false);
}
function openModule()
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
        $('#btn_login_land').animate({marginRight: '-20%'});
    });

    $('#btn_hide_login').click(function ()
    {
        $("#login").animate({marginLeft: '120%'});
        $("#todo_list").animate({marginLeft: '30%'});
        $('#btn_login_land').animate({marginRight: '1.5%'});
    });

    $('#btn_management').click(function ()
    {
        window.open('management.php');
    });

    $('#btn_man_back_home').click(function ()
    {
        window.open('index.php');
    });
}

function toggleRegistrationFrame()
{
    var registration = false;

    $('#acc_create a').click(function () {

        if(registration === false) //Show Registration frame
        {
            let box_input = $('#login_input');

            $('#login h2').html('Registration');

            $('#login_input #username_id').remove();
            $('#login_input #password_id').remove();

            box_input.append('<input type="text" name="register_first_name" id="first_name_id" placeholder="First name"/>');
            box_input.append('<input type="text" name="register_last_name" id="last_name_id" placeholder="Last name"/>');
            box_input.append('<input type="text" name="register_username" id="username_id" placeholder="Username"/>');
            box_input.append('<input type="date" name="register_birthday" id="birthday_id" placeholder="Birthday"/>');
            box_input.append('<input type="email" name="register_email" id="email_id" placeholder="E-Mail"/>');
            box_input.append('<input type="email" name="register_email_r" id="email_r_id" placeholder="Repeat E-Mail"/>');
            box_input.append('<input type="password" name="register_password" id="password_id" placeholder="Password"/>');
            box_input.append('<input type="password" name="register_password_r" id="password_r_id" placeholder="Repeat password"/>');

            $('#login p#acc_create a').html('Login');
            $('#login button#btn_login').html('Register');
            registration = true;
            $('#reg_log').prop('action', 'php/register.php');
        }
        else if(registration === true) //Show Login frame
        {
            $('#login h2').html('Login');

            $('#first_name_id').remove();
            $('#last_name_id').remove();
            $('#birthday_id').remove();
            $('#email_id').remove();
            $('#email_r_id').remove();
            $('#password_r_id').remove();

            $('#login p#acc_create a').html('Create an account');
            $('#login button#btn_login').html('Login');

            registration = false;

            $('#reg_log').prop('action', 'php/login.php');

        }

    });
}