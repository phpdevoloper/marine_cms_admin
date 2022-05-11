
$(document).ready(function(){

    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });

    
$('#mycalendar').monthly({
    mode: 'event',
    //jsonUrl: 'events.json',
    //dataType: 'json'
    xmlUrl: 'events.xml'
});







   

// $('#ho').click(function() {
//   $('html, body').animate({
//     scrollTop: $("div.headoffice").offset().top
//   }, 1000)
// }),

// $('#eng').click(function() {
//   $('html, body').animate({
//     scrollTop: $("div.engineering").offset().top
//   }, 1000)
// }),

// $('#rad').click(function() {
//   $('html, body').animate({
//     scrollTop: $("div.radio").offset().top
//   }, 1000)
// }),

// $('#nau').click(function() {
//   $('html, body').animate({
//     scrollTop: $("div.nautical").offset().top
//   }, 1000)
// }),

// $('#sea').click(function() {
//   $('html, body').animate({
//     scrollTop: $("div.seamen").offset().top
//   }, 1000)
// });

// $(window).scroll(function() {
//    var hH = $('#engineering').outerHeight(),
//    wS = $(this).scrollTop();
//   if (wS > hH){
//     $("#return-to-top").css("display", "block");

//   }
//  });






});


$(document).ready(function() { 


    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    
    
    
    
    
    
    $('#dtBasicExample').DataTable({
        // "ordering": false, // false to disable sorting (or any other option)
        "destroy": true
        });
    $('.dataTables_length').addClass('bs-select');
});



var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


  function egov() {
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/egovernanceeng.aspx";
        target = "_blank"

    }
}
function eler() {
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/E-LEARNING.aspx";
        target = "_blank"

    }
}
function eparn() {
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href=" https://www.dgshipping.gov.in/Content/ExamCertificSeafarersView.aspx?modul_id=12";
        target = "_blank"

    }
}

function epare() {
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/ExamCertificSeafarersView.aspx?modul_id=29";
        target = "_blank"

    }
}

function dgee(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href=" https://www.dgsexams.in/";
        target = "_blank"

    }
}


function mos(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="http://shipmin.gov.in/";
        target = "_blank"

    }
}

function moef(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/";
        target = "_blank"

    }
}

function imo(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="http://www.imo.org/en/Pages/Default.aspx";
        target = "_blank"

    }
}

function ilo(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.ilo.org/global/lang--en/index.htm";
        target = "_blank"

    }
}


function iomou(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="http://www.iomou.org/";
        target = "_blank"

    }
}

function irclass(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.irclass.org/";
        target = "_blank"

    }
}

// ACTS/RULES FUNCTIONS   
function msr(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/MerchantShippingRules.aspx";
        target = "_blank"

    }
}


function orr(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/OtherActs.aspx";
        target = "_blank"

    }
}


function orr(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/MSNotices.aspx";
        target = "_blank"

    }
}


function dgso(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/DGSOrders.aspx";
        target = "_blank"

    }
}

function dgsc(){
    var ask = window.confirm("You are being redirected to an external website. Please note that Mercantile Marine Department, Chennai cannot be held responsible for external websites content & privacy policies.");
    if (ask) {
        window.location.href="https://www.dgshipping.gov.in/Content/DGSCirculars.aspx";
        target = "_blank"

    }
}



//photo gallery css


// Get the elements with class="column"
var elements = document.getElementsByClassName("column");
var diaplay_img = document.getElementsByClassName("img-gal-ptag");


// Declare a loop variable
var i;

// List View
function listView() {
    // $("#img-gal-ptag").css("display", "block");
    for (i = 0; i < diaplay_img.length; i++) {
        diaplay_img[i].style.display = "block";
    }

  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "50%";
    elements[i].style.height = "50%";
    
  }
}

// Grid View
function gridView() {
    // document.getElementById("img-gal-ptag").css("display", "none");
    // $("#img-gal-ptag").css("display", "none");
    // $('#img-gal-ptag').hide();

    for (i = 0; i < diaplay_img.length; i++) {
        diaplay_img[i].style.display = "none";
    }

  for (i = 0; i < elements.length; i++) {
    elements[i].style.width = "25%";
    elements[i].style.height = "50%";
  }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}


$(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});