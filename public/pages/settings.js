function formSubmit(formId){
    // var file = document.getElementById('uploadedFile').files[0];
    var form = $('#'+formId)[0];
    var formData = new FormData(form);
    var files = $('input[type=file]');
    for (var i = 0; i < files.length; i++) {
        // if (files[i].value == "" || files[i].value == null) {
        //     return false;
        // }
        // else {
            formData.append(files[i].name, files[i].files[0]);
        // }
    }
    // alert("Hello")

    $.ajax({
        type: 'POST',
        data:formData,
        contentType: false,
        processData: false,
        cache: false,
        url: $('#'+formId).attr('action'),
        success: function (response) {
           if (response.Success == true) {
               return true;
           }
           else {
               return false;
           }
        },
        error: function () {
           return false;
        },
        failure: function () {
           return false;
        }
    });
}