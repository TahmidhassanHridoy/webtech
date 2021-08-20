
         document.getElementById('insert').addEventListener('click',submitproduct);

        function submitproduct(){ 
             var pname = document.getElementById('productname').value;
             var price = document.getElementById('price').value;
             if(pname == ""){
               alert("please fillup the product name first")
               }else{
             var pn = 'productname='+pname;
             var p = 'price='+price;
             var req = new XMLHttpRequest();

             req.open('POST','/SparePartsMarket/PHP Handler/productset.php');

             req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
             req.send('productname='+pname+'&price='+price);
               }
             }
          