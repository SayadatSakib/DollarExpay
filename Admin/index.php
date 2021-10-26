<?php

    session_start();
    if(!isset($_SESSION['email']))
    {
        header("location:login.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

?>
<?php include 'inc/header.php';?>



    
    <div id="body" style=" ">
    	<br>

		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #383e4c63;"> 
		  <div class="card-header">
		    <h5 style="color: black; font-weight: bold">Welcome to Dashboard !</h5>
		  </div>
		  <div class="card-body" >
       

            <div class="container">
            	<div class="row">
            		<div class="col-md-4">
            			<div class="textnow" style="background: #15e809; padding: 10px; margin: 10px">
            				  <a class="stylesh" href="#">                               
		                         <div class="col-xs-12 text-center">
		                            <span style="color: black; font-weight: bold">Top Buy</span>
		                            <h1><i style="color: black" class="fa fa-shopping-cart"></i></h1>
		                         </div>                                                  
                             </a>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="textnow" style="background: #98f706d6; padding: 10px; margin: 10px">
		                      <a class="stylesh" href="#">                                
		                         <div class="col-xs-12 text-center">
		                            <span style="color: black; font-weight: bold">Top Sell</span> 
		                            <h1><i style="color: black" class="fa fa-shopping-bag"></i></h1>
		                         </div>                                                  
		                      </a>
            			</div>
            		</div>
            		<div class="col-md-4">
            			<div class="textnow" style="background: #e6f706d6; padding: 10px; margin: 10px">
		                      <a class="stylesh" href="#">                                
		                         <div class="col-xs-12 text-center">
		                            <span style="color: black; font-weight: bold">Top Exchange</span>
		                            <h1><i style="color: black" class="fa fa-random"></i></h1>
		                         </div>                                                  
		                      </a>
            			</div>
            		</div>            		            		

            	</div>
            </div>
    
            <div id="page-BuyDollar"> </div>

		  </div>
		</div>

    </div>




<script type="text/javascript">
    $(document).ready(function(){
        
        
        $('.buy').click(function(){
            var cat_id = $(this).attr('id');
            alert("acsc");
            $.ajax({
                url:"CatEdit.php",
                type:"POST",
                data: {cat_id:cat_id},
                success: function(data){
                    $('#edit-form').slideDown();
                    $('#edit-form').html(data);
                }
            });
        });
              
        
    });
</script>



<?php include 'inc/footer.php';?>