$("#sendmail").click(function(){

    Email.send({
        Host: "smtp.gmail.com",
        Username: "santosh.santu22@gmail.com",
        Password: "9866057954",
        To: 'pudisaisantosh@gmail.com',
        From: "santosh.santu22@gmail.com",
        Subject: "Test Email",
        Body: "Test Email",
        success: function(){  
            alert("success");  
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) { 
            alert("Status: " + textStatus); alert("Error: " + errorThrown); 
        }  
      })
        
});