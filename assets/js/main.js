var city = geoplugin_city();
var link = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + '&appid=b3cd3658e8a64d8050b54e12162b1384';

function setTempBackground(data)
{
    if(data.main.temp < 8)
    {
        $('#temperature').css('background', '#3498db');
    }
    else if(data.main.temp > 22)
    {
        $('#temperature').css('background', '#e74c3c');
    }
    else
    {
        $('#temperature').css('background', '#2ecc71');
    }
}
function printTemperatureToSidebar(data)
{
    $('#temperature #temp_num').html(Math.round(data.main.temp - 273));
}
function printCityToSidebar()
{
    $('#location #loc').html(city);
}
function clearInput()
{
    $('input[type=text]').val('');
    $('input[type=date]').val('');
    $('input[type=time]').val('');
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
}

function setup(data)
{
    clearInput();
    openModule();
    setTempBackground(data);
    printCityToSidebar();
    printTemperatureToSidebar(data);
}

$(document).ready(function()
{
    $.ajax({
        url: link,
        method: 'POST',
        dataType: 'JSON',
        success: function (json)
        {
            setup(json);
        },
        error: function () {alert('Error!');}
    });
});