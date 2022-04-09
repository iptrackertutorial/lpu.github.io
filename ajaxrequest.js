

function addStu(){
    var stuname=$('#stuname').val();
    var stuemail=$('#stuemail').val();
    var stupass=$('#stupass').val();
    console.log(stuname);
    console.log(stuemail);
    console.log(stupass);
     $.ajax({
        url:'student/addstudent.php',
        method: 'POST',
        dataType: 'json', 
        data:{
            stusignup: "stusignup",
            stuname :stuname,
            stuemail : stuemail,
            stupass : stupass,
             
            
        },
        success:function(data){
            console.log(data);
             
        }
    
     })
    
    

}

// ajax call for student login verification
/*
function stuLog(){
    var logemail=$('#logemail').val();
    var logpass=$('#logpass').val();
    console.log(logemail);
    console.log(logpass);

    $.ajax({
        url:'student/addstudent.php',
        method: 'POST', 
        data:{
            checklogemail:"checklogemail",
            logemail:logemail,
            logpass : logpass,
    
             
            
        },
        success:function(data){
        

            if(data==0){
                $('#stulog').html('<small class="alert alert-danger">invalid email id and password</small>');

            }else if(data== 1){
                $('#stulog').html('<small class="alert alert-success">login successfully</small>');

            }
             
        }
    
    })
    
    

}
*/
 
 