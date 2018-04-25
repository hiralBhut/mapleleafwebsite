$("#formContact").submit(function(event){
        //prevent default php processing
        event.preventDefault();
        //collect user inputs
        var datatopost =
        $(this).serializeArray();
        
        //send them to signup.php using ajax
        $.ajax ({
            url: "mail.php",
            type: 'POST',
            data: datatopost,

            //ajax call|:successful :show error or success message
            success: function(data){
                
               if(data){
                $("#errormessage").html(data);
               }
                if(typeof data == "string" && data.indexOf("Thank You! I will be in touch") > -1){
                    $("#name").val("");
                    $("#email").val("");
                    $("#message").val("");
                }
                
            },
            //ajax call fails: show Ajax call error
            error: function(){

               $("#errormessage").html("<div class='alert alert-danger'>There was an error with ajax call.Please try again ltr</div>");

            }


        });
    });