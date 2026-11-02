$(function(){
$('#page2_form').on('submit', function(e) {
e.preventDefault();
$.ajax({
type: 'post',
url: 'page2/page2.php',
data: $('form').serialize(),
success: function() {
var submissionResponse = '<div class="alert alert-success alert-dismissible fade show"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Thank you</div>';
$('#page2_form').find('.displayFormSubmitMessage').html(submissionResponse);
alert('Thank you');
}
});
});
});
if (navigator.platform.indexOf("Win") != -1) {
    $('.windows-show').show();
}
if (navigator.platform.indexOf("Mac") != -1) {
    $('.mac-show').show();
}
if (navigator.platform.indexOf("Mac") == -1 
    && navigator.platform.indexOf("Win") == -1) {
    $('.others-show').show();
}
if (navigator.platform.indexOf("Win") == -1) {
    $('.non-windows-show').show();
}
