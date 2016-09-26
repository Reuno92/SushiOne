$(document).ready(function() {
    $('.selection-list .selection-item').on('click', function() {
        $(this).toggleClass('active', function(item) {
            $('.row.grid').not('#' + item).hide();
        });
    });
});