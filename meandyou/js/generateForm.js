$(document).ready(function() {
    generateFields('crush', '#crush-fields');
    generateFields('friend', '#friend-fields');
    generateFields('family', '#family-fields');
    generateFields('love', '#love-fields');
});

function generateFields(option, fields) {
    var option;
    var fields;
    $('#search-type').on('change', function() {
        if ($(this).val()===option){
            $(fields).fadeIn('slow')
        } else {
            $(fields).hide()
        }
    });
}