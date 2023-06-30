(function ( $ ) {
    $.fn.multiStepForm = function(args) {
        if(args === null || typeof args !== 'object' || $.isArray(args))
            throw  " : Called with Invalid argument";
            var form = this;
            var tabs = form.find('.tab');
            var steps = form.find('.step');
            steps.each(function(i, e){
                $(e).on('click', function(ev){
                });
            });
            form.navigateTo = function (i) {/*index*/
            /*Mark the current section with the class 'current'*/
            tabs.removeClass('current').eq(i).addClass('current');
            // Show only the navigation buttons that make sense for the current section:
            form.find('.previous').toggle(i > 0);
            atTheEnd = i >= tabs.length - 1;
            form.find('.next').toggle(!atTheEnd);
            // console.log('atTheEnd='+atTheEnd);
            form.find('.submit').toggle(atTheEnd);
            fixStepIndicator(curIndex());
            return form;
        }
        function curIndex() {
            /*Return the current index by looking at which section has the class 'current'*/
            return tabs.index(tabs.filter('.current'));
        }
        function fixStepIndicator(n) {
            steps.each(function(i, e){
                i == n ? $(e).addClass('form-stepper-active') : $(e).removeClass('form-stepper-active');
            });
        }
        /* Previous button is easy, just go back */
        form.find('.previous').click(function() {
            form.navigateTo(curIndex() - 1);
        });

        /* Next button goes forward iff current block validates */
        form.find('.next').click(function() {
            if('validations' in args && typeof args.validations === 'object' && !$.isArray(args.validations)){
                if(!('noValidate' in args) || (typeof args.noValidate === 'boolean' && !args.noValidate)){
                    form.validate(args.validations);
                    if(form.valid() == true){
                        form.navigateTo(curIndex() + 1);
                        return true;
                    }
                    return false;
                }
            }
            form.navigateTo(curIndex() + 1);
        });
        form.find('.submit').on('click', function(e){
            if(typeof args.beforeSubmit !== 'undefined' && typeof args.beforeSubmit !== 'function')
                args.beforeSubmit(form, this);
                /*check if args.submit is set false if not then form.submit is not gonna run, if not set then will run by default*/        
            if(typeof args.submit === 'undefined' || (typeof args.submit === 'boolean' && args.submit)){
                form.submit();
            }
            return form;
        });
        /*By default navigate to the tab 0, if it is being set using defaultStep property*/
        typeof args.defaultStep === 'number' ? form.navigateTo(args.defaultStep) : null;
        form.noValidate = function() {
    
        }
        return form;
    };
}( jQuery ));

$(document).ready(function () {
    var val = {
        // Specify validation rules
        rules: {
            f_name: "required",
            l_name: "required",
            dob_month: "required",
            dob_day: "required",
            dob_year: "required",
            yearly_income: "required",
            email: "required",
            zip: "required",
            phone_number: "required",
            age: "required",
            purpose: "required",
            policy: "required",
        },
        // Specify validation error messages
        messages: {
            f_name: "Please Enter First name",
            l_name: "Please Enter Last name",
            dob_month: "Please Enter Month",
            dob_day: "Please Enter Day",
            dob_year: "Please Enter Year",
            yearly_income: "Please Enter Yearly income",
            email: "Please Enter Email ID",
            zip: "Please Enter Zip code",
            phone_number: "Please Enter Phone number",
            age: "Please Enter Age",
            purpose: "Please Enter Purpose",
            policy: "Please Check Privacy Policy"
        }
    }
    $("#myForm").multiStepForm(
        {
            // defaultStep:0,
            beforeSubmit: function (form, submit) {
                console.log("called before submiting the form");
                console.log(form);
                console.log(submit);
            },
            validations: val,
        }
    ).navigateTo(0);
});