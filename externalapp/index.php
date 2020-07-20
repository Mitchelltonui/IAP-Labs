
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <script type="text/javascript" src="placeorder.js"></script>
    

</head>                    
                    
                    
    <body>
    <div  style = "margin-left:500px;">
        <h3 > Place Order</h3>
                        <div>
                       
                            <form  method="post" name="order_form" id="order_form" >
                                
                                <label  for="name_of_food" style = "margin-right:30px;">Food Name</label><input  id="name_of_food" name="name_of_food" type="text" placeholder="Food Name" required="true" /><br><br>
                               <label for="unit_price" style = "margin-right:30px;">Unit Price</label><input  id="unit_price" name="unit_price" type="number" placeholder=" Unit Price" required="true" /><br><br>
                                <input id="status" name="status" type="hidden" value="Order Placed and is being processed." />
                              
                                
                                <div ><button  type="submit" name = "btn-place-order" id="btn-place-order" >Place Order</button></div>
                            </form>
                        </div>
                        <div >
                            <p >Check order status<br><br> <input  id="order_id" type="number" placeholder="Order ID" /><button  type="submit" id="btn-check-order" >Check</button></p>
                        </div>

                    
    </div>
    </body>


</html>