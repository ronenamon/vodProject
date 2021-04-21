// by ronen amon
  $(document).ready(function(){


    $('#regBtn').click(function(){
        $.ajax(
          {
            type: "POST",
            url:  "api.php",
            data:{
              user : $("#username").val(),
              email    : $("#email").val(),
              password : $("#password").val(),
              operation: "register"
            },
            success:function(data){
              var obj = JSON.parse(data);
              var str = obj.result;
              if(str.includes("success")){

                      setTimeout(function() {
                          $("#success").fadeIn();
                          $("#success").html("<p style='color:green;'>Registration OK!...</p>");
                      }, 1500);

                      setTimeout(function() {
                          $("#success").fadeOut();
                          $("#success").html("");
                      }, 5000);


              }
              else{
                  $("#success").fadeIn( 4000, function() {
                      $("#success").html("<p style='color:red'>Registration Error...</p>");
                  });
              }

            }
          }
        );//end ajax
    });//reg btn



    $('#loginBtn').click(function(){
      $.ajax(
        {
          type: "POST",
          url:  "api.php",
          data:{
                email : $("#email").val(),
                password : $("#pwd").val(),
                operation: "login"
          },
          success:function(data){
            var obj = JSON.parse(data);
            var str = obj.result;
            alert(str);
            // if(str.includes("success")){
            //     $("#success").html("<p style='color:green;'>Registration Success...</p>");
            // }
            // else{
            //     alert(obj.result);
            //     $("#success").html("<p style='color:red'>Registration Error...</p>");
            // }

          }
        }
      );//end ajax
    });
  });// end jquery
