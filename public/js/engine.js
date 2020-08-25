$(document).ready(function(){
  var count_in_list = 25;
  $.ajax({
      url: "/goods/",
      type: "POST",
      data:{
        count_in_list: count_in_list
      },
      error: function() {alert("Что-то пошло не так..."); },
      success: function(answer){
        if(answer != "") 
          $("#ajax_catalog").html(answer);
        else
            alert("Что-то пошло не так...");
      }
  })
  $('.yet').on('click', function(){
    count_in_list += 25;
    $.ajax({
      url: "/goods/",
      type: "POST",
      data:{
        count_in_list: count_in_list
      },
      error: function() {alert("Что-то пошло не так..."); },
      success: function(answer){
        if(answer != "")
          $("#ajax_catalog").html(answer);
        else
            alert("Что-то пошло не так...");
      }
  })
});
});