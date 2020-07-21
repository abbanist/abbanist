
// if ( window.location.pathname == '/' ){
//     // ====================================== Sorting elements ========================================
            
//         $(document).ready(function(){
//         var items = $('.owl-item');
//             items.sort(function(a, b){
//                 return -$(a).find("h4").text() - -$(b).find("h4").text()
//             });
//             items.appendTo('.owl-stage');
//         });
    
    
    
//     // ===================================== 1000 -> 1k==========================================
    
       
//            setTimeout( function(){ 
//             var coms = $('.coms');
//             var comsText = [];  
        
//             for (var x = 0; x < coms.length; x++){
//                 var toFloat = parseFloat($(coms[x]).text());
    
//                 comsText.push(toFloat);
//             }
    
//             var decimalNumberArray = [];
    
//             var allSum =$("#allSum").text(); 
    
//             function abbrNum(number, decPlaces) {
//                 var orig = number;
//                 var dec = decPlaces;
//                 decPlaces = Math.pow(10, decPlaces);
//                 var abbrev = ["k", "m", "b", "t"];
//                 for (var i = abbrev.length - 1; i >= 0; i--) {
//                     var size = Math.pow(10, (i + 1) * 3);
//                     if (size <= number) {
//                         var number = Math.round(number * decPlaces / size) / decPlaces;
//                         if((number == 1000) && (i < abbrev.length - 1)) {
//                             number = 1;
//                             i++;
//                         }
//                         number += abbrev[i];
//                         break;
//                     }
//                 }
//                 // console.log('abbrNum('+ orig + ', ' + dec + ') = ' + number);
                
    
//                 decimalNumberArray.push(number);
    
    
//                 $("#allSum").html(number);
//                 return number;
//             }
    
    
//             for(var o=0; o<coms.length; o++){
//                 abbrNum(comsText[o], 2); 
//             }
    
    
//             for(var p=0; p<coms.length; p++) {
//                 coms[p].innerHTML = decimalNumberArray[p];
//             }
//             abbrNum(allSum,2);
    
    
//         }  , 1000 );
    
    
    
            
    
    
//     // ========================================= Ratings ========================================        
    
    
//             setTimeout( function(){ 
//                 // Do something after 1 second 
              
//             var ratinger = $('.ratinger').slice(0, 10); 
            
//             var arrayRatingNum = [1,2,3,4,5,6,7,8,9,10];
    
//             // locating rating numbers on every .coms
//             for(var t=0;t<ratinger.length;t++){
//                 ratinger[t].innerHTML = arrayRatingNum[t];
//                 (ratinger[t]).style.border = "2px solid #13a2db";
//             }
//             }  , 1500 );
    
    
//     // =================================counter background===============================
           
//             setTimeout( function(){ 
//                 var str = document.getElementById("allSum").innerText;
//                 var chars = str.split("");
//                 var result = '';
//                 for (var i = 0; i < chars.length; i++) {
//                     if (chars[i] !== ".") {
//                         result += '<div id="xerox">' + chars[i] + '</div>';
//                     } else {
//                         result += '<div id="dota">' + chars[i] + '</div>';
//                     }
//                 }
//                 document.getElementById("allSum").innerHTML = result;
//             }  , 1500 );
    
//     //=========================================0-9=========================================
               
//                 var counter = 0;
//                 var div = document.getElementById('coun');
//                 setTimeout(function () {
//                     var st = setInterval(function () {
//                         $(div).html(++counter);
//                         if (counter == 9) {
    
//                             ci();
//                         }
//                     }, 1000)
//                 }, 0);
//                 function ci() {
//                     counter = 0;
//                 }
    
//     }//end of location 
    
    
//     // ================================================sidebar banner scroll when fixed=================================
    
//     if ( window.location.pathname !== '/' ){
//             var elementPosition = $('.offs').offset();
//             var footerPosition = $('.footer').offset();
    
//             $(window).scroll(function(){
//                     if($(window).scrollTop() > elementPosition.top){
//                     // console.log("$(window).scrollTop()"+$(window).scrollTop() );
//                     // console.log("elementPosition.top"+elementPosition.top );

//                         // console.log("footerPosition.top"+footerPosition.top );
//                         $('.offs').css('position','fixed').css('top','0');
//                     } else {
//                         $('.offs').css('position','static');
//                     }    

//                     if($(window).scrollTop() > footerPosition.top){
//                         // console.log("$(window).scrollTop()"+$(window).scrollTop() );
//                         // console.log("elementPosition.top"+elementPosition.top );
//                         // console.log("footerPosition.top"+footerPosition.top );
//                         $('.offs').css('position','fixed').css('top','-185px','!important');
//                     }  

                        


//                     if (window.matchMedia('(max-width: 767px)').matches) {
//                         $('.offs').css('position','static');
//                     } else {
                        
//                     }
    
//             });
//     }
    
    
// $(window).load(function(){
// });  

// document.addEventListener("DOMContentLoaded", function(event) {
    
//      setTimeout(function () {

    // $('.current-temp').css('font-size','30px');

    // $(document).find(".current-temp").css("font-size","30px");

    // $('.current-temp').next().css('font-size','30px');      
    // var a = $(".current-temp");  

    // var a = $('.current-temp');    
    // $(a).html("ss");   

    // console.log(a.innerText);

    // portfolio = document.querySelector('current-temp').innerHTML;


//     console.log(portfolio);
    
//     }, 3000);

// });

 // window.addEventListener("load", function(event) {
 //    console.log("All resources finished loading!");
 //  });



var explode = function(){

var aa = $('.box-weather iframe');
   $(aa).contents().find('.forecast .current-temp').html('Hey, i`ve changed content of <body>! Yay!!!');
};

// setTimeout(explode, 2000);







// modal zahialga

$('.zahialga').bind('keyup change',function(){
    
    // get elements that are empty.
    var empty = $('input[type="text"],textarea').map(function(index, el) {
        return !$(el).val().length ? el : null;
    }).get();
    
    // could also be placed outside of the function
    var number = $('.sub');
    
    // check if there are any empty elements, if there are none, show numbers, else hide number.
    !empty.length ? number.show() : number.hide();
});


var title = $('.product_tit').text();
var inputField = $('.pro_name');
$(inputField).attr('value', title);



// breadcrumb

var a = $('.pageTitle').text();

$('.br_call').text(a);

// var a =$('alert-danger');

// if(a !== null){
// }else {
//     console.log("aldaagui");
// }

// if($(".box").hasClass(".alert-danger")){
//     // alert("red");
// };

if ($(".box").find(".alert-danger").length > 0){ 
  ///do something
    console.log("error bn");

    $('#collapseExample').collapse('show');

}

// if ($(".box").hasClass(".alert-danger")) {
//   alert("red");
// }

// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//   }
// });


// $('.order_b').click(function(){
//     // var url = window.origin+'/send';

//     $.get(url, function(data){
//         console.log(data);
//     });
// });




// menu active color with dropdown
/** add active class and stay opened when selected */
var url = window.location;

// for sidebar menu entirely but not cover treeview
$('.nav-item a').filter(function() {
    // if ($(this).parent().find('.nav-item ')) 
        return this.href == url;
}).parents('.nav-item, .dropdown').addClass('active');


// hover dropdown arrow
// $(".dropdown-menu, .dropdown-toggle").hover(function(){
//     $('.arrow').stop(true, false).css('display','block');
// }, function() {
//     $('.arrow').stop(true, false).css( 'display', 'none');
// });





// scroll jquery zahialah deer darahad
$("#zahialah").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#zahialah").offset().top
    }, 500);
});




$(document).ready(function () {

    $('#zahialga-huselt').validate({ // initialize the plugin
        rules: {
            phone: {
                required: true,
            },

            volNeededElement: {
                required: true,
            }
        },
        // submitHandler: function (form) { // for demo
        //     alert('valid form submitted'); // for demo
        //     return false; // for demo
        // }
    });

});



// carousel pdf product

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})

$('.owl-carousel').find('.owl-nav').removeClass('disabled');
$('.owl-carousel').on('changed.owl.carousel', function(event) {
  $(this).find('.owl-nav').removeClass('disabled');
});



// Calcium

// Helper function
// ogogdol nemex
$(document).ready(function(){
  

  $("#calculateThreeSize").on('click', function() {
    var selectCar =    $('#selectCar').val();
    var tireWidth =    $('#tire_width').val();
    var tireHeight =   $('#tire_height').val();
    var obudDiameter = $('#obud_diameter').val();

    console.log("obudDiameter: " + obudDiameter);

    console.log("tireHeight percent: " + tireHeight);


    for(var i = 0 ; i < 40; i++){
        if(obudDiameter == i){
            var tireDiameter = (tireWidth * tireHeight / 2540 * 2) + i;
            console.log("tireDiameter inch: " + tireDiameter);
        }
    }

    var tireHeight = tireWidth * tireHeight / 100;
    console.log("percent to tireHeight: " + tireHeight);


    // 285/75R16 (285 X 75 / 2540 x 2) + 16 = 32.8 
   
   
    var inchToMM = tireDiameter * 25.4;
    console.log("Inch to mm after: " + inchToMM);

    var innerWidth    = tireWidth * 0.92;
    var innerHeight   = tireHeight * 0.88;
    var innerDiameter = inchToMM - tireHeight * 0.12 * 2;

    var arcRadius = innerHeight / 2;

    /* =DEGREES(ACOS((C14-C13)/C14))*2 */
    var angle = Math.acos((arcRadius - selectCar) / arcRadius) * 2 * (180 / Math.PI);

    //return 41
    //=SIN(RADIANS(C15/2))*C14*2

    var rad = angle * (Math.PI / 180);
    var chordlength = Math.sin(rad / 2) * arcRadius * 2;

    var Section_Area = Math.abs(innerWidth - innerHeight) * selectCar + arcRadius * arcRadius * 3.14 * angle / 360 - chordlength * (arcRadius - selectCar) / 2;

    var sealantOneMotion = Section_Area * innerDiameter * 3.14 / 1000000;

    var adhesionCoefficent = 2.7;

    var sealantTwoAdhesion =
      (innerHeight * 3.14 + (innerWidth - innerHeight) * 2) * innerDiameter * 3.14 * adhesionCoefficent / 10000000;

    var volNeeded = sealantTwoAdhesion+sealantOneMotion;
    /* $("body").append(angle); */

    console.log(volNeeded);


  $('#volNeededElement2').val(volNeeded + " л"); 

   if(175 < volNeeded * 1000 && volNeeded * 1000 < 262.5){
        $('#volNeededElement').val(175  + " мл"); 
   }else
   if(262.5 < volNeeded * 1000 && volNeeded * 1000 < 425){
        $('#volNeededElement').val(350 + " мл"); 
   }else
   if(425 < volNeeded  * 1000 && volNeeded * 1000 < 600){
        $('#volNeededElement').val(500 + " мл"); 
   }else
   if(600 < volNeeded * 1000 && volNeeded * 1000 < 775){
        $('#volNeededElement').val(700 + " мл"); 
   }else
   if(775 < volNeeded * 1000 && volNeeded * 1000 < 925){
        $('#volNeededElement').val(850 + " мл"); 
   }else
   if(925 < volNeeded * 1000 && volNeeded * 1000 < 1025){
        $('#volNeededElement').val(1000 + " мл"); 
   }else
   if(1025 < volNeeded * 1000 && volNeeded * 1000 < 1125){
        $('#volNeededElement').val(1050 + " мл"); 
   }else
   if(1125 < volNeeded * 1000 && volNeeded * 1000 < 1275){
        $('#volNeededElement').val(1200 + " мл"); 
   }else
//    9	1350	1275	1375
   if(1275 < volNeeded * 1000 && volNeeded * 1000 < 1375){
        $('#volNeededElement').val(1350 + " мл"); 
   }else
//    10	1400	1375	1450
   if(1375 < volNeeded * 1000 && volNeeded * 1000 < 1450){
        $('#volNeededElement').val(1400 + " мл"); 
   }else
//    11	1500	1450	1600
   if(1450 < volNeeded * 1000 && volNeeded * 1000 < 1600){
        $('#volNeededElement').val(1500 + " мл"); 
   }else
//    12	1700	1600	1725
   if(1600 < volNeeded * 1000 && volNeeded * 1000 < 1725){
        $('#volNeededElement').val(1700 + " мл"); 
   }else
//    13	1750	1725	1875
   if(1725 < volNeeded * 1000 && volNeeded * 1000 < 1875){
        $('#volNeededElement').val(1750 + " мл"); 
   }else
//    14	2000	1875	2125
   if(1875 < volNeeded * 1000 && volNeeded * 1000 < 2125){
        $('#volNeededElement').val(2000 + " мл"); 
   }else
//    15	2250	2125	2375
   if(2125 < volNeeded * 1000 && volNeeded * 1000 < 2375){
        $('#volNeededElement').val(2250 + " мл"); 
   }else
//    16	2500	2375	2625
   if(2375 < volNeeded * 1000 && volNeeded * 1000 < 2625){
        $('#volNeededElement').val(2500 + " мл"); 
   }else
   if(2625 < volNeeded * 1000 && volNeeded * 1000 < 2875){
        $('#volNeededElement').val(2750 + " мл"); 
   }else
   if(2875 < volNeeded * 1000 && volNeeded * 1000 < 3250){
        $('#volNeededElement').val(3000 + " мл"); 
   }else
   if(3250 < volNeeded * 1000 && volNeeded * 1000 < 3750){
        $('#volNeededElement').val(3500 + " мл"); 
   }else
   if(3750 < volNeeded * 1000 && volNeeded * 1000 < 4250){
        $('#volNeededElement').val(4000 + " мл"); 
   }else
   if(4250 < volNeeded * 1000 && volNeeded * 1000 < 4750){
        $('#volNeededElement').val(4500 + " мл"); 
   }else
   if(4750 < volNeeded * 1000 && volNeeded * 1000 < 5250){
        $('#volNeededElement').val(5000 + " мл"); 
   }else
   if(5250 < volNeeded * 1000 && volNeeded * 1000 < 5750){
        $('#volNeededElement').val(5500 + " мл"); 
   }else
   if(5750 < volNeeded * 1000 && volNeeded * 1000 < 6250){
        $('#volNeededElement').val(6000 + " мл"); 
   }else
   if(6250 < volNeeded * 1000 && volNeeded * 1000 < 6750){
        $('#volNeededElement').val(6500 + " мл"); 
   }else
   if(6750 < volNeeded * 1000 && volNeeded * 1000 < 7250){
        $('#volNeededElement').val(7000 + " мл"); 
   }else
   if(7250 < volNeeded * 1000 && volNeeded * 1000 < 7750){
        $('#volNeededElement').val(7500 + " мл"); 
   }else
   if(7750 < volNeeded * 1000 && volNeeded * 1000 < 8250){
        $('#volNeededElement').val(8000 + " мл"); 
   }else
   if(8250 < volNeeded * 1000 && volNeeded * 1000 < 8750){
        $('#volNeededElement').val(8500 + " мл"); 
   }else
   if(8750 < volNeeded * 1000 && volNeeded * 1000 < 9250){
        $('#volNeededElement').val(9000 + " мл"); 
   }else
   if(9250 < volNeeded * 1000 && volNeeded * 1000 < 9750){
        $('#volNeededElement').val(9500 + " мл"); 
   }else
   if(9750 < volNeeded * 1000 && volNeeded * 1000 < 10000){
        $('#volNeededElement').val(10000 + " мл"); 
   }


  });






// Big size

  $("#calculateBigSize").click(function() {
        var selectCar =    $('#selectCarBig').val();
        var tireWidth =    $('#tire_width_big').val();
        var tireHeight =   $('#tire_height_big').val();
        var tireDiameter = $('#tire_diameter_big').val();
    
    
        var innerWidth    = tireWidth * 0.92;
        var innerHeight   = tireHeight * 0.88;
        var innerDiameter = tireDiameter - tireHeight * 0.12 * 2;
    
        var arcRadius = innerHeight / 2;
    
        /* =DEGREES(ACOS((C14-C13)/C14))*2 */
        var angle = Math.acos((arcRadius - selectCar) / arcRadius) * 2 * (180 / Math.PI);
    
        //return 41
        //=SIN(RADIANS(C15/2))*C14*2
    
        var rad = angle * (Math.PI / 180);
        var chordlength = Math.sin(rad / 2) * arcRadius * 2;
    
        var Section_Area = Math.abs(innerWidth - innerHeight) * selectCar + arcRadius * arcRadius * 3.14 * angle / 360 - chordlength * (arcRadius - selectCar) / 2;
    
        var sealantOneMotion = Section_Area * innerDiameter * 3.14 / 1000000;
    
        var adhesionCoefficent = 2.7;
    
        var sealantTwoAdhesion =
          (innerHeight * 3.14 + (innerWidth - innerHeight) * 2) * innerDiameter * 3.14 * adhesionCoefficent / 10000000;
    
        var volNeeded = sealantTwoAdhesion+sealantOneMotion;
        /* $("body").append(angle); */
    
        console.log(volNeeded);
    
    
      $('#volNeededElementBig2').val(volNeeded + " мл"); 
    
       if(175 < volNeeded * 1000 && volNeeded * 1000 < 262.5){
            $('#volNeededElementBig').val(175  + " мл"); 
       }else
       if(262.5 < volNeeded * 1000 && volNeeded * 1000 < 425){
            $('#volNeededElementBig').val(350 + " мл"); 
       }else
       if(425 < volNeeded  * 1000 && volNeeded * 1000 < 600){
            $('#volNeededElementBig').val(500 + " мл"); 
       }else
       if(600 < volNeeded * 1000 && volNeeded * 1000 < 775){
            $('#volNeededElementBig').val(700 + " мл"); 
       }else
       if(775 < volNeeded * 1000 && volNeeded * 1000 < 925){
            $('#volNeededElementBig').val(850 + " мл"); 
       }else
       if(925 < volNeeded * 1000 && volNeeded * 1000 < 1025){
            $('#volNeededElementBig').val(1000 + " мл"); 
       }else
       if(1025 < volNeeded * 1000 && volNeeded * 1000 < 1125){
            $('#volNeededElementBig').val(1050 + " мл"); 
       }else
       if(1125 < volNeeded * 1000 && volNeeded * 1000 < 1275){
            $('#volNeededElementBig').val(1200 + " мл"); 
       }else
    //    9	1350	1275	1375
       if(1275 < volNeeded * 1000 && volNeeded * 1000 < 1375){
            $('#volNeededElementBig').val(1350 + " мл"); 
       }else
    //    10	1400	1375	1450
       if(1375 < volNeeded * 1000 && volNeeded * 1000 < 1450){
            $('#volNeededElementBig').val(1400 + " мл"); 
       }else
    //    11	1500	1450	1600
       if(1450 < volNeeded * 1000 && volNeeded * 1000 < 1600){
            $('#volNeededElementBig').val(1500 + " мл"); 
       }else
    //    12	1700	1600	1725
       if(1600 < volNeeded * 1000 && volNeeded * 1000 < 1725){
            $('#volNeededElementBig').val(1700 + " мл"); 
       }else
    //    13	1750	1725	1875
       if(1725 < volNeeded * 1000 && volNeeded * 1000 < 1875){
            $('#volNeededElementBig').val(1750 + " мл"); 
       }else
    //    14	2000	1875	2125
       if(1875 < volNeeded * 1000 && volNeeded * 1000 < 2125){
            $('#volNeededElementBig').val(2000 + " мл"); 
       }else
    //    15	2250	2125	2375
       if(2125 < volNeeded * 1000 && volNeeded * 1000 < 2375){
            $('#volNeededElementBig').val(2250 + " мл"); 
       }else
    //    16	2500	2375	2625
       if(2375 < volNeeded * 1000 && volNeeded * 1000 < 2625){
            $('#volNeededElementBig').val(2500 + " мл"); 
       }else
       if(2625 < volNeeded * 1000 && volNeeded * 1000 < 2875){
            $('#volNeededElementBig').val(2750 + " мл"); 
       }else
       if(2875 < volNeeded * 1000 && volNeeded * 1000 < 3250){
            $('#volNeededElementBig').val(3000 + " мл"); 
       }else
       if(3250 < volNeeded * 1000 && volNeeded * 1000 < 3750){
            $('#volNeededElementBig').val(3500 + " мл"); 
       }else
       if(3750 < volNeeded * 1000 && volNeeded * 1000 < 4250){
            $('#volNeededElementBig').val(4000 + " мл"); 
       }else
       if(4250 < volNeeded * 1000 && volNeeded * 1000 < 4750){
            $('#volNeededElementBig').val(4500 + " мл"); 
       }else
       if(4750 < volNeeded * 1000 && volNeeded * 1000 < 5250){
            $('#volNeededElementBig').val(5000 + " мл"); 
       }else
       if(5250 < volNeeded * 1000 && volNeeded * 1000 < 5750){
            $('#volNeededElementBig').val(5500 + " мл"); 
       }else
       if(5750 < volNeeded * 1000 && volNeeded * 1000 < 6250){
            $('#volNeededElementBig').val(6000 + " мл"); 
       }else
       if(6250 < volNeeded * 1000 && volNeeded * 1000 < 6750){
            $('#volNeededElementBig').val(6500 + " мл"); 
       }else
       if(6750 < volNeeded * 1000 && volNeeded * 1000 < 7250){
            $('#volNeededElementBig').val(7000 + " мл"); 
       }else
       if(7250 < volNeeded * 1000 && volNeeded * 1000 < 7750){
            $('#volNeededElementBig').val(7500 + " мл"); 
       }else
       if(7750 < volNeeded * 1000 && volNeeded * 1000 < 8250){
            $('#volNeededElementBig').val(8000 + " мл"); 
       }else
       if(8250 < volNeeded * 1000 && volNeeded * 1000 < 8750){
            $('#volNeededElementBig').val(8500 + " мл"); 
       }else
       if(8750 < volNeeded * 1000 && volNeeded * 1000 < 9250){
            $('#volNeededElementBig').val(9000 + " мл"); 
       }else
       if(9250 < volNeeded * 1000 && volNeeded * 1000 < 9750){
            $('#volNeededElementBig').val(9500 + " мл"); 
       }else
       if(9750 < volNeeded * 1000 && volNeeded * 1000 < 10000){
            $('#volNeededElementBig').val(10000 + " мл"); 
       }
    
    
      });
      });






// looking for тооцоолуур үг
$( ".search-tootsooluur-word>li:contains('Тооцоолуур')" ).css({ "display":"none", "height":"0"} );