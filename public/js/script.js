$(document).ready(function(){
    $(".login-badge").click(function(e){
        e.preventDefault();
        var parent = $(this).parent();
        parent.toggleClass('open-login');
    });
});