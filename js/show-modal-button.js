$(document).on('click', '.showModalButton', function() {
    var url = $(this).attr('value');

    $.ajax({
        url: $(this).attr('value'),
        type: 'get',
        dataType: 'json',
        error: function(xhr, status, error) {
            if(xhr.status==200) {
                loadModal(url, '#modal');

                return false;
            }

            if(xhr.status==403) {
                swal('Invalid Permission', 'You do not have sufficient permission to carry out this action.', "error");
                return false;
            }

            //swal('Error', getErrorMessage(xhr.responseText), "error");
            console.log(getErrorMessage(xhr.responseText));
        }
    });
});

function loadModal(url, modalId) {
    $(modalId).find('.modal-content')
        //.html("<div style='text-align: center;'><img src='/images/ajax-loader.gif' /></div>");
    $(modalId).modal('show')
            .find(modalId + '-content')
            .load(url);
    $(modalId).on('shown.bs.modal', function () {
        $(modalId).find('textarea:visible:first').focus();
        $(modalId).find('input:visible:first').focus();
    })

    return true;
};

function getErrorMessage(message) {
    return message.substring(11);
};
