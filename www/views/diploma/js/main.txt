$(document).ready(function() {
    //---------------------------------------------requests----------------------------------
    //------------search-------------
    $('.start-search-button').click(function(){
        var classes = $('.select.classes').val();
        var type = $('.select.type').val();
        var cost = $('.cost').val();
        var params = {
             classes: classes,
             type: type,
             cost: cost
            };
    $.ajax({
      type: "POST",
      url: "views/diploma/requests.php",
      data: params,
      success: function(data) {
      var result = data;
        $('.search-result').html(result)
      }
   })
 })
    //-----------adding-----------------
    $('.input-flat').click(function(){
        var input_class = $('.input-classes').val();
        var input_type = $('.input-type').val();
        var input_adress = $('#input-adress').val();
        var input_cost = $('#input-cost').val();
        var input_phone = $('#input-phone').val();
        var input_stage = $('#input-stage').val();
        var input_params = {
            input_class: input_class,
            input_type: input_type,
            input_adress: input_adress,
            input_cost: input_cost,
            input_phone: input_phone,
            input_stage: input_stage
        };
    $.ajax({
        type: "POST",
        url: "views/diploma/requests_adding.php",
        data: input_params,
        success: function(number) {
            var input_answer = number;
          alert( 'Номер вашего объявления'+input_answer+'. Пожалуйста, запишите его!' );
        $('#input-adress').val(null);
        $('#input-cost').val(null);
        $('#input-phone').val(null);
        $('#input-stage').val(null);
        }
    })
    })
    //-----------------search-t0-erase-----
    $('.search-erase-button').click(function(){
       var erase_number = $('.number-input').val();
       var search_erase_params = {
        number: erase_number
       }
       $.ajax({
        type: "POST",
        url: "views/diploma/erase_requests.php",
        data: search_erase_params,
        success: function(erasing) {
            $('.search-erase-res').html(erasing);
            $('.erase-button').show();
        }
       })
    })
 //---------------erase-----------------
    $('.erase-button').click(function(){
        var erase_number = $('.number-input').val();
        var erase_params = {
        number: erase_number
       }
      $.ajax({
        type: "POST",
        url: "views/diploma/erase.php",
        data: erase_params,
        success: function(erase){
           $('.search-erase-res').html("Удаление объявления под номером "+erase+" проведено.");
        }
      })
 })   

//---------------------------------------------buttons------------------------------------------------
    $('.button.insert-flat-button').click(function(){
        $('.insert-flat').toggle();
    })
    $('.button.close-insert').click(function(){
        $('.insert-flat').hide();
    })
    $('.open-erase-button').click(function(){
        $('.erase-block').toggle();
        $('.insert-flat').hide();
    })
    $('.button.close-erase').click(function(){
        $('.erase-block').hide();
    })
    $('.adress-to-search').click(function(){
        var adress = $(this).text();
        $('#leaflet-control-geosearch-qry').val(adress);
        $('#leaflet-control-geosearch-qry').focus();
        var e = $.Event('keydown', { keyCode: 13 });
            /*    $('#leaflet-control-geosearch-qry').trigger(e);*/

    })
    $('.button.adress-check').click(function(){
        var adress_check = $('#input-adress').val();
         $('#leaflet-control-geosearch-qry').val(adress_check);
         $('#leaflet-control-geosearch-qry').focus();
         var e = $.Event('keydown', { keyCode: 13 });
          /*      $('#leaflet-control-geosearch-qry').trigger(e);*/
    })

//---------------------------------------------map----------------------------------------------------
    var map = L.map('map').setView([59.95, 30.30], 12);
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a rel="nofollow" href="http://osm.org/copyright">OpenStreetMap</a> contributors',
    maxZoom: 18
}).addTo(map);
    new L.Control.GeoSearch({
            provider: new L.GeoSearch.Provider.Google()
        }).addTo(map);
    
})




/*var classes_gor = [];
var sort = $('.sort');

for ( var i=0, i == sort.length, i++){
    classes_gor[i] = $(this).attr();
}

for (var j=0, j == classes_gor[0], j++){
    if (classes_gor[j] == "Lux"){
        $('.lux').html(classes_gor[j]);
    }
    if 
}*/