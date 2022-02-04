(function ($) {
    $.fn.getFormData = function () {

        let data = {};

        let dataArray = $(this).serializeArray();
        for (var i = 0; i < dataArray.length; i++) {
            data[dataArray[i].name] = dataArray[i].value;
            delete data['undefined'];
        }

        return JSON.stringify(data);
    }

})(jQuery);
$('#signup-form').submit(function (e) {

    e.preventDefault();

    $('#sign-up-message').html('');

    if ($(this).valid()) {
        // Submit to the backend
        $.ajax({
            url: 'sendRegisterOtp',
            method: 'POST',
            data:{
                data: $(this).getFormData(),
            },
            

            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-Token', csrfToken);
                $('#signup-form').attr('disabled', true);
            },

            complete: function () {
                $('#signup-form').attr('disabled', false);
            },

            success: function (response) {

                // $('input#first-name-otp').val($('#first-name').val());
                // $('input#last-name-otp').val($('#last-name').val());
                // $('input#your-mobile-no-otp').val($('#your-mobile-no').val());
                // $('input#email-otp').val($('#email').val());
                // $('input#city_id-otp').val($('#signup_city').val());
                // $('input#area_id-otp').val($('#signup_area').val());
                // $('input#sub_area_id-otp').val($('#signup_subarea').val());
                // $('input#street-otp').val($('#street').val());

                // $('#signup-form').hide();
                // $('#signup-otp-form').show();

                // var successhtml = '<div class="text-center pt-5 text-smaller"><p class="success">' + response.message + '</p></div>';
                // $('#sign-up-message').html(successhtml);
            },

            error: function (xhr, status, error) {

                var errorMessage = JSON.parse(xhr.responseText);
                var failureHtml = '<div class="error text-center text-smaller"> <span style="color: red"> ' + errorMessage.error + '</span></div>';

                $('#sign-up-message').html(failureHtml);
            }
        });
    }
});
$(document).on('change', '#signup_city', function(){
    var cityid = $('#signup_city').val();
$.ajax({
    type: "GET",
    url: 'citiesAjax',
    data: {
        cityid:cityid,
    },
    cache: false,

    beforeSend: function(xhr) {
        xhr.setRequestHeader('X-CSRF-Token', csrfToken);
        $('.preloader').show();
        $(".preloader").css("opacity", "0.5");
    },
    complete: function() {
        $('.preloader').hide();
    },
    success: function(result) {
        var data = jQuery.parseJSON(result);
        subarea = data.subareadata;
        $('#signup_area').html("");
        var newOption = '';
        var options = '';
        $.each(data.areadata, function(key, response) {
            options = {
                id: response.area_id,
                text: response.area_name

            };
            var newOption = new Option(options.text, options.id, false, false);
            $('#signup_area').append(newOption);
            
        });
    }
});
});
$(document).on('change', '#signup_area', function(){
var subareadata = subarea[$("#signup_area").val()];
$('#signup_subarea').html("");
var newOption = '';
var options = '';
subareadata.forEach(function(subdata) {
    options = {
        id: subdata.sub_area_id,
        text: subdata.subarea_name

    };
    var newOption = new Option(options.text, options.id, false, false);
    newOption.selected = false;    
    $('#signup_subarea').append(newOption);

});
});

$('#area').select2({
closeOnSelect: true,
placeholder: "Select Area"
});
$('#subarea').select2({
closeOnSelect: true,
placeholder: "Select SubArea"
});

$('#popupModallocation').modal({
backdrop: 'static',
keyboard: true,
show: true
});
var subarea = '';
$(".area").hide();
$(".subarea").hide();

$(".cities").on('click', function() {

var jqueryarray = [{"id":1,"name":"Delhi"},{"id":2,"name":"Gurugram"},{"id":3,"name":"Ghaziabad"},{"id":4,"name":"Noida"},{"id":5,"name":"Greater Noida "},{"id":6,"name":"Meerut"}]    ;
const data = Object.values(jqueryarray);
data.forEach(function(name) {
    var changethecolor = document.getElementById(name.name);
    changethecolor.style.color = '';
});
var cityid = $(this).attr("data-id");
this.style.color = 'red';
var url = "https://www.farmery.in/cities/:cityid";
url = url.replace(':cityid', cityid);
$(".area").show();
$(".subarea").hide();

$.ajax({

    type: 'GET',

    url: url,

    data: {
        "_token": "jS1P0BQ9Cm1HdWSevK98qfDcV2tnkrhJlUKFLW33",
    },
    beforeSend: function(){
        $('.preloader').show();
        $(".preloader").css("opacity", "0.5");
    },
    complete: function(){
        $('.preloader').hide();
    },
    success: function(data) {
        subarea = data.subareadata;
        $('#area').html("");
        var newOption = '';
        var options = '';
        $.each(data.areadata, function(key, response) {

            options = {
                id: response.area_id,
                text: response.area_name

            };

            var newOption = new Option(options.text, options.id, false, false);
            $('#area').append(newOption);
        });
    }
});
});
$("#area").on('change', function() {
if($("#area").val()!="0"){
var subareadata = subarea[$("#area").val()];
$(".subarea").show();
$('#subarea').html("");
var newOption = '';
var options = '';
subareadata.forEach(function(subdata) {
    options = {
        id: subdata.hub_id,
        text: subdata.subarea_name

    };
    var newOption = new Option(options.text, options.id, false, false);
    newOption.selected = false;    
    $('#subarea').append(newOption);

});
}else{
    $(".subarea").hide();
}
});
$("#subarea").on('change', function() {

var subareaid = $("#subarea").val();
var url = "https://www.farmery.in/subarea/:subareaid";
url = url.replace(':subareaid', subareaid);
 $.ajax({

    type: 'GET',

    url: url,

    data: {
        "_token": "jS1P0BQ9Cm1HdWSevK98qfDcV2tnkrhJlUKFLW33",
    },
    beforeSend: function(){
        $('.preloader').show();
    },
    complete: function(){
    },
    success: function(data) {
        window.location.reload();
    }
});

});