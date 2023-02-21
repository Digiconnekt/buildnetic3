// A $( document ).ready() block.
$(document).ready(function () {
    $(".project_form").css('display', 'none');
    var currentStep = 1;
    var steps = {


    };

    disableSteps();
    $('html, body').animate({ scrollTop: $("#step1").offset().top - 200 }, 100);



    jQuery("input[type='radio']").on('click', function () {
        


        currentStep = $(this).data("step-id");
        let $currentStepId = "#step" + currentStep;
       


        $this = $(this);
        steps[$currentStepId] = $this.val();
        console.log(steps);
        if (currentStep == 1) {
            if ($this.val() == 'haveProject') {
                $(".team_form").css('display', 'none');
                $(".project_form").css('display', 'block');
            } else if ($this.val() == 'somethingElse') {
                window.location ='/contact-us.html';
            }else{
                $(".team_form").css('display', 'block');
                $(".project_form").css('display', 'none');
            }
            $(".active-label").removeClass('active-label');
        }


        $($currentStepId).find(".active-label").removeClass('active-label');




        disableSteps();
        // alert(currentStep);
        $label = $('label[for="' + $this.attr('id') + '"]');
        if ($label.length > 0) {
            $label.addClass("active-label");
            //this input has a label associated with it, lets do something!
        }
        let scrollTo = parseInt(currentStep) + 1;

        $('html, body').animate({ scrollTop: $("#step" + scrollTo).offset().top - 150 }, 200);
        //$('body').scrollTo("#step" + scrollTo);
        let stepsValue = JSON.stringify(steps);
        
        document.getElementById('stepsValue').value = stepsValue;
        if (currentStep==8){
            $("#submitcontactForm").attr('disabled',false);
        }

    });

    function stepsCount() {
        // iterates over all properties of your object
        let count = 0;
        for (var i in steps) {
            count++;
        }
        return count;
    }

    function disableSteps() {
        let stepCount = stepsCount();


        let makeActiveStep = currentStep + 1;
        for (let index = makeActiveStep; index < 10; index++) {
            document.getElementById("step" + index).style.opacity = 0.2;
        }
        if (stepCount > 0) {
            document.getElementById("step" + makeActiveStep).style.opacity = 1;
        }
}

    

});

function validateAndSubmit() {

    return true;;
}