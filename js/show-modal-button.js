$(document).on('click', '.showModalButton', function() {
    var url = $(this).attr('value');

    $.ajax({
        url: $(this).attr('value'),
        type: 'get',
        dataType: 'json',
        error: function(xhr, status, error) {
            if(xhr.status==200) {
                return loadModal(url);
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

function loadModal(url) {
    $('#modal').find('#modalContent')
        //.html("<div style='text-align: center;'><img src='/images/ajax-loader.gif' /></div>");
    $('#modal').modal('show')
            .find('#modalContent')
            .load(url);
    $('#modal').on('shown.bs.modal', function () {
        $('textarea:visible:first').focus();
        $('input:visible:first').focus();
    })

    return true;
};

function getErrorMessage(message) {
    return message.substring(11);
};
