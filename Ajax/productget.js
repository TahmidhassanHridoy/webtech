    
         document.getElementById('grab').addEventListener('click',showValues);

         function showValues() {
             var req = new XMLHttpRequest();
             req.open('POST','/SparePartsMarket/PHP Handler/getproductinfo.php');
             req.onload = function() {
                 if(req.status == 200){
                     var details = JSON.parse(req.responseText);

                     var display = ' ';
                     for(var i in details){
                         display += '<ol>' +
                         '<li> id: '+details[i].id+'</li>'+
                         '<li> Product-name: '+details[i].productname+'</li>'+
                         '<li> Price-name: '+details[i].price+' tk </li>'+
                         '</ol>';
                     }
                     document.getElementById('INFO').innerHTML = display;
                 }

             }
             req.send();
         }