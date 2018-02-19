$(document).ready(function() {
    $("ul.inner").each(function() {
        console.log('------------------------------------');
        console.log($(this));
        console.log('------------------------------------');
        /* $(this).on("click", function() {
            console.log('------------------------------------');
            console.log($("#lunchBegins").val());
            console.log('------------------------------------');
        }) */
    })
});