$(document).on('change', '#signup_city', function(){
    var cityid = $('#signup_city').val();
var url = "https://www.farmery.in/cities/:cityid";
url = url.replace(':cityid', cityid);

$.ajax({

    type: 'GET',

    url: url,

    data: {
        "_token": "jS1P0BQ9Cm1HdWSevK98qfDcV2tnkrhJlUKFLW33",
    },
    beforeSend: function() {
        $('.preloader').show();
        $(".preloader").css("opacity", "0.5");
    },
    complete: function() {
        $('.preloader').hide();
    },
    success: function(data) {
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