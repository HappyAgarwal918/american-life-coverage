<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('asset/img/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" href="{{ asset('asset/img/favicon-192x192.png')}}" sizes="192x192">
    <link rel="apple-touch-icon" href="{{ asset('asset/img/favicon-180x180.png')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('asset/css/style.css')}}">
    @yield('css')
    <style type="text/css">
        .content-container{
            max-width: 1140px;
            padding: 80px 0px;
        }
        .disable_policy_btn{
            background-color: #e17e7e !important;
        }
        .disable_agree_btn{
            background-color: #5da6cf !important;
        }
    </style>
	<title>@yield('title')</title>
</head>
<body>
	<main>
	@include('layout.header')
	  @yield('content')
	@include('layout.footer')
	</main>
</body>
</html>
<script src="{{ asset('asset/js/jquery-3.4.1.js')}}"></script>
<script>
$(function() {
    $("input[name='age']").click(function() {
        if($("#form-field-age-0").is(":checked")){
            $(".purpose1").removeClass("d-none");
        }else{ 
            $(".purpose1").addClass("d-none");
            $("input[name='purpose']").prop('checked', false);
        }
    });
})
</script>
<script type="text/javascript">
$("#dob_year").change(function(){
    var today = new Date();
    var birthDate = new Date($('#dob_year').val());
    var age = today.getFullYear() - birthDate.getFullYear();
    if(age <= 65){
        $(".age_factor").removeClass("d-none");
    }else{
        $(".age_factor").addClass("d-none");
        $("input[name='yearly_income']").prop('checked', false);
        $('#type_value').val("Medicare");
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script src="{{ asset('asset/js/multistep_form.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".btn-submit").click(function () {
            $(".success_msg").show();
            $(".form-stepper-active").addClass("form-stepper-completed");
            $(".form-stepper-active").removeClass("form-stepper-active");
        });
        $(".x-mark").click(function () {
            $(".fixed-call").hide();
        });

        setInterval(function () {
            $('.main_h2').toggleClass('e-hide-highlight');
        }, 1500);
    });
    $(document).ready(function () {
        if ($(".form-stepper-active").hasClass("form-stepper-unfinished")) {
            $(".form-stepper-active").removeClass("form-stepper-unfinished");
        }
        $(".next").click(function () {
            if ($(".form-stepper-active").hasClass("form-stepper-unfinished")) {
                $(".form-stepper-active").removeClass("form-stepper-unfinished");
            }
        });
    });
</script>
<script>
    $(function() {
    $('#privacy_policy').click(function() {
        if ($(this).is(':checked')) {
            $('#id_of_your_button').removeAttr('disabled');
            $('#id_of_your_button').removeClass('disable_policy_btn');
        } else {
            $('#id_of_your_button').attr('disabled', 'disabled');
            $('#id_of_your_button').addClass('disable_policy_btn');
        }
    });
    $('#agree').click(function() {
        if ($(this).is(':checked')) {
            $('#id_of_your_button').removeAttr('disabled');
            $('#id_of_your_button').removeClass('disable_agree_btn');
        } else {
            $('#id_of_your_button').attr('disabled', 'disabled');
            $('#id_of_your_button').addClass('disable_agree_btn');
        }
    });
});
</script>
@yield('js')