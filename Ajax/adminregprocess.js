document.getElementById('send').addEventListener('click',submitdetail);
        function submitdetail(){ //pd into function
            //pd.preventDefault();
             var usern = document.getElementById('username').value;
             var pass = document.getElementById('pwd').value;
             var cpass = document.getElementById('cpwd').value;
             if(usern == ""){
                 alert("please fillup the username first")
            }else if(pass == ""){
                alert("please fillup the password")
            }else if(pass == cpass){

                var un = 'username='+usern;
                var pa = 'pass='+pass;
                var req = new XMLHttpRequest();
   
                req.open('POST','/SparePartsMarket/Session/adminregistration.php');
   
                req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
   
                req.send('username='+usern+'&pass='+pass);

                alert("registration complated. Now you can Login")
                
             }else{
                alert("Password didn't matched")
            }
        }