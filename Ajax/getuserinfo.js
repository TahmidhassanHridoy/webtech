         document.getElementById('grab').addEventListener('click',showValues);

         function showValues() {
             var req = new XMLHttpRequest();
             req.open('POST','/SparePartsMarket/PHP Handler/getuserinfo.php');
             req.onload = function() {
                 if(req.status == 200){
                     var details = JSON.parse(req.responseText);

                     var display = ' ';
                     for(var i in details){
                         display += '<ol>' +
                         '<li> first-name: '+details[i].id+'</li>'+
                         '<li> first-name: '+details[i].fname+'</li>'+
                         '<li> middle-name: '+details[i].mname+'</li>'+
                         '<li> last-name: '+details[i].lname+'</li>'+
                         '<li> Birth-date: '+details[i].birthday+'</li>'+
                         '<li> Email: '+details[i].email+'</li>'+
                         '<li> phone: '+details[i].phone+'</li>'+
                         '<li> username: '+details[i].username+'</li>'+
                         '<li> password: '+details[i].password+'</li>'+
                         '</ol>';
                     }
                     document.getElementById('INFO').innerHTML = display;
                 }

             }
             req.send();
         }
        
         
        