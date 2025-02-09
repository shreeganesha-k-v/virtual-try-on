//slides
$(document).ready(function(){

    $("#myCarousel").carousel();
  
    $(".item1").click(function(){
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
      $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
      $("#myCarousel").carousel(3);
    });
      
   
    $(".left").click(function(){
      $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
      $("#myCarousel").carousel("next");
    });
  });

  $(document).ready(function(){
      $("#myCarousel-pick").carousel();
      $("item1").click(function(){
          $("myCarousel-pick").click(function(){
              $("myCarousel-pick").carousel(0);
          });
      });
      $(".left").click(function(){
        $("#myCarousel-pick").carousel("prev");
      });
      $(".right").click(function(){
        $("#myCarousel-pick").carousel("next");
      });
  });
  function givealert()
  {
      alert("Your messege have been submitted. Thank you!");
      
  }

  //products
  $(function (){
 $("#onblush").click(function(){
$("#panel-blush").slideToggle();
var $myObj = $('#myObj1');
$.ajax({
    type: 'GET',
    url: 'https://makeup-api.herokuapp.com/api/v1/products.json?product_type=blush',
    success: function(myObj){
        $.each(myObj , function(i, blush){
           
            $myObj.append('<div class="col-sm-2">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + blush.product_link  + '>'+'<img width="185px" height="180px"src=' + blush.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + blush.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + blush.brand + '</h2>' + '</div>' + '</div>');
            
        });
    
    }
});
 });
});
$(function (){
    $("#oneye").click(function(){
   $("#panel-eye").slideToggle();
   var $myObj = $('#myObj2');
   $.ajax({
       type: 'GET',
       url: 'https://makeup-api.herokuapp.com/api/v1/products.json?product_type=eyeliner',
       success: function(myObj){
           $.each(myObj , function(i, blush){
               $myObj.append('<div class="col-sm-2">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + blush.product_link  + '>'+'<img width="185px" height="180px"src=' + blush.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + blush.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + blush.brand + '</h2>' + '</div>' + '</div>');
           });
       }
   });
    });
   });
   $(function (){
    $("#onshadow").click(function(){
   $("#panel-shadow").slideToggle();
   var $myObj = $('#myObj3');
   $.ajax({
       type: 'GET',
       url: 'https://makeup-api.herokuapp.com/api/v1/products.json?product_type=eyeshadow',
       success: function(myObj){
           $.each(myObj , function(i, blush){
               $myObj.append('<div class="col-sm-2">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + blush.product_link  + '>'+'<img width="185px" height="180px"src=' + blush.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + blush.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + blush.brand + '</h2>' + '</div>' + '</div>');
           });
       }
   });
    });
   });
   $(function (){
    $("#onlipstick").click(function(){
   $("#panel-lipstick").slideToggle();
   var $myObj = $('#myObj4');
   $.ajax({
       type: 'GET',
       url: 'https://makeup-api.herokuapp.com/api/v1/products.json?product_type=lipstick',
       success: function(myObj){
           $.each(myObj , function(i, blush){
               $myObj.append('<div class="col-sm-2">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + blush.product_link  + '>'+'<img width="185px" height="180px"src=' + blush.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + blush.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + blush.brand + '</h2>' + '</div>' + '</div>');
           });
       }
   });
    });
   });
//search-vala aaega idher

// $(document).ready{() =>
// $('#searchForm').on('submit', (e) => {
//     let searchText = $('#top-nav-search').val();
//     getData(searchText);
//     e.preventDefault();
// });
// });

// function getData(searchText){
//     let request = new XMLHttpRequest();
//     request.open('GET','https://makeup-api.herokuapp.com/api/v1/products.json&s='+ searchText);
//     request.onload= function(){
//         let data = JSON.parse(this.response);
//         let product= data.Search;
//         let output='';
//         $.each(product, (index, products) => {
//             output += '<div class="col-md-3"> <div class="card card-body"> <img src="$(products.img_link)"> <h2> $(products.name) </h2> </div></div>';

//         });
//         $('#product').html(output);
//     }
//     request.send();
// }































// ye brands ki list hai
$(function(){
    $("#almay").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=almay',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#alva").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=alva',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#annasui").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=annasui',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#annabelle").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=annabelle',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#benefit").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=benefit',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#boosh").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=boosh',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#butter").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=butter%20london',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});
$(function(){
    $("#cargo").click(function(){
        var $mybrandlist = $('#panel-brand-list');
        $.ajax({
            type: 'GET',
            url: 'https://makeup-api.herokuapp.com/api/v1/products.json?brand=cargo%20cosmetics',
            success : function(mybrandlist){
                $.each(mybrandlist, function(i, mybrand){
                    $mybrandlist.append('<div class="col-sm-2 brand">' + '<div class="card card-body">' + '<div class="picture">' + '<a target="_blank" href=' + mybrand.product_link  + '>'+'<img width="185px" height="180px"src=' + mybrand.image_link + '>' + '</a>' + '</div>' + '<div>' +'<h2 class="contents">' + mybrand.name + '</h2>' +'</div>'+ '<h2 class="contents-brand">' + mybrand.brand + '</h2>' + '<h2 class="contents-brand">' + mybrand.price + "$" + '</h2>'  + '</div>' + '</div>')
                });
            }
        });
    });
});




