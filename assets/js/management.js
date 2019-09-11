$('document').ready(function ()
{
    $('#man_search_role option').click(function ()
    {
        var select_value = $(this).attr('value');
        var search_input = $('#user_search_id');

        switch (select_value)
        {
            case 'id':
                search_input.attr('placeholder', 'Search for ID');
                search_input.prop('disabled', false);
                break;
            case 'first_name':
                search_input.attr('placeholder', 'Search for first name');
                search_input.prop('disabled', false);
                break;
            case 'last_name':
                search_input.attr('placeholder', 'Search for last name');
                search_input.prop('disabled', false);
                break;
            case 'username':
                search_input.attr('placeholder', 'Search for username');
                search_input.prop('disabled', false);
                break;
            case 'email':
                search_input.attr('placeholder', 'Search for E-Mail');
                search_input.prop('disabled', false);
                break;
            case 'date_of_birth':
                search_input.attr('placeholder', 'Search for Date of birth');
                search_input.prop('disabled', false);
                break;
            case 'created_at':
                search_input.attr('placeholder', 'Search for Creation Date');
                search_input.prop('disabled', false);
                break;
            case 'updated_at':
                search_input.attr('placeholder', 'Search for last updated');
                search_input.prop('disabled', false);
                break;
            case 'authority':
                search_input.attr('placeholder', 'Search for Role');
                search_input.prop('disabled', false);
                break;
            case 'all':
                search_input.attr('placeholder', 'Search for everything');
                search_input.prop('disabled', true);
                break;
            default:
                search_input.attr('placeholder', 'Search');
                search_input.prop('disabled', false);
                break;
        }

    });
});

function convert_to_csv() //TODO: Create CSV-download function
{

}