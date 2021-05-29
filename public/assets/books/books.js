$(".btn").click(function(){
  var attr = $(this).attr("data-li");

  $(".btn").removeClass("active");
  $(this).addClass("active");

  $(".item").hide();

  if(attr == "Sci-Fi"){
    $("." + attr).show();
  }
  else if(attr == "Technology"){
    $("." + attr).show();
  }
  else if(attr == "Science"){
    $("." + attr).show();
  }
  else if(attr == "Programming"){
    $("." + attr).show();
  }
  else if(attr == "Literature"){
    $("." + attr).show();
  }
  else if(attr == "Religion"){
    $("." + attr).show();
  }
  else{
    $(".item").show();
  }
});