$(document).ready(function() {
    "use strict";
    // Step 4
    var wait = 45000; //45 second
    var time = 45;
    setInterval(function(){
     $("#wait_msg").html("You need to wait "+time+" second before you can proceed");
     time--;
    }, 1000);

    setTimeout(function() {
        $("#wait_div").addClass('hide');
        $(".logininfo").removeClass('hide');
    }, wait);

    // Step Complete
    var wait2 = 3000; //3 second
    var time2 = 3;
    setInterval(function(){
     $("#btn-before").html("You need to wait "+time2+" second before you can proceed");
     time2--;
    }, 1000);

    setTimeout(function() {
        $("#btn-before").addClass('hide');
        $("#btn-complete").removeClass('hide');
    }, wait2);

});