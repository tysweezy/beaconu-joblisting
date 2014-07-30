

$('.alert-success').show();
jQuery(document).ready(function ($) {
    updateCountdownAll();
    $('.message').on('input', updateCountdown);

});

function updateCountdownAll() {
    $('.message').each(function () {
        updateCountdown(this);
    });
}

function updateCountdown(e) {

    var currentElement;
    if (e.target) {
        currentElement = e.target;
    } else {
        currentElement = e;
    }

    var maxLengh = $(currentElement).attr('maxlength');
    var remaining = maxLengh - $(currentElement).val().length;
    $(currentElement).nextAll('.countdown:first').text(remaining + ' characters remaining.');


}



/*$('form').submit(function(event) {
 var formData = {
   'job-title' : $('input[name=job-title]').val(),
   'company'   : $('input[name=company]').val(),
   'email'     : $('input[name=email]').val()
 };



 $.ajax({
    type: "POST",
    url: "./ajax/ajax.php",
    data: $('form').serialize(),
    dataType: 'json',
    encode: true,

  })

    .done(function(data){
        console.log(data);

    });

 event.preventDefault();

});*/

