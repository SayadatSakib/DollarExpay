<?php  
    session_start();
?>

<?php include 'inc/header.php';?>

<?php
    include_once 'Crud.php';
    $crud = new Crud();

    $query = "Select * from buy_table order by id DESC";

    $result = $crud->getData($query);
?>

<?php
    include_once 'Crud.php';
    $crud = new Crud();

    $query = "Select * from sell_table order by id DESC";

    $Sresult = $crud->getData($query);
?>

<?php
    include_once 'Crud.php';
    $crud = new Crud();

    $query = "Select * from exchange_table order by id DESC";

    $Eresult = $crud->getData($query);
?>


<style>
	#BD:hover {
    color: red ! important;
    transition: 0.5s;
    }
</style>

    
    <div id="body">
    	<br>

		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #383e4c63;"> 
		  <div class="card-header">
		    <h5 style="color: white; font-weight: bold">Welcome to Dashboard !</h5>
		  </div>
		  <div class="card-body" >
		      
		      
		      
		      
		  <div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;"> 
		  <div class="card-header">
		    <h6 style="color: white; font-weight: bold">TRANSACTIONS !</h6>
		  </div>
		  <div class="card-body" >
       
            <div class="container">
            	<div class="justify-content-center row">
            		<div class="col-md-4">
            			<div id="BD" class="textnow" style="background: #9c4100; padding: 10px; margin: 10px">
            				  <a style="text-decoration: none;" class="stylesh" href="buy.php">                               
		                         <div class="col-xs-12 text-center">
		                            <span style="color: black; font-weight: bold">Buy Dollar</span>
		                            <h1><i style="color: black" class="fa fa-shopping-cart"></i></h1>
		                         </div>                                                  
                             </a>
            			</div>
            		</div>
            		<div class="col-md-4 SD">
            			<div class="textnow" style="background: #9c3423; padding: 10px; margin: 10px">
		                      <a style="text-decoration: none;" class="stylesh" href="sell.php">                                
		                         <div class="col-xs-12 text-center">
		                            <span style="color: black; font-weight: bold">Sell Dollar</span> 
		                            <h1><i style="color: black" class="fa fa-shopping-bag"></i></h1>
		                         </div>                                                  
		                      </a>
            			</div>
            		</div>
            		<!--<div class="col-md-4">
            			<div class="textnow" style="background: #e6f706d6; padding: 10px; margin: 10px">
		                      <a style="text-decoration: none;" class="stylesh" href="exchange.php">                                
		                         <div class="col-xs-12 text-center">
		                            <span style="color: black; font-weight: bold">Exchange</span> 
		                            <h1><i style="color: black" class="fa fa-random"></i></h1>
		                         </div>                                                  
		                      </a>
            			</div>
            		</div>-->
                           

            	</div>
            </div>
        </div>
    </div>    
            
            		<br>
            		<br>
            		
            		    <div class="row">
                        	<div class="col-sm-6 mb-5">
                        	    <div class="card" style="background: #1b053e94">
            		            <div class="card-header">
            		            <h6 style="color: white; font-weight: bold">LATEST BUY HISTORY !</h6>
                        		</div>
                        		<div class="card-body" >
                        		<div style="overflow-x:auto;">
                                           <table class="table table-bordered table-dark table-sm">
                                                <thead class="bg" style="    background-color: #af5900bd;">
                                                    <tr>
                                                        <th scope="col">Send</th>
                                                        <th scope="col">Receive</th>
                                                        <th scope="col">Amount($)</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Exchanged</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $count = 0;
                                                        foreach($result as $key=>$res){
                                                            $count = $count + 1;
                                                            if($count == 6){
                                                                break;
                                                            }
                                                            echo "<tr >";
                                                                echo "<td>".$res['send_method']."</td>";
                                                                echo "<td>".$res['receive_method']."</td>";
                                                                echo "<td>".$res['receive_amount']."</td>";                                                
                                                                echo "<td>".$res['status']."</td>"; 
                                                                echo "<td>".$res['dates']."</td>";                                       
                                                            echo "</tr>";
                                                        }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    	</div>
                                    </div>	
                        	</div>
                        	
                        	<div class="col-sm-6">
                        		    <div class="card" style="background: #1b053e94">
                            		<div class="card-header">
                            		    <h6 style="color: white; font-weight: bold">LATEST SELL HISTORY !</h6>
                            		 </div>
                            		<div class="card-body" >
                            		<div style="overflow-x:auto;">
                                               <table class="table table-bordered table-dark table-sm">
                                                    <thead class="bg" style="    background-color: #c3ae14bd;">
                                                        <tr>
                                                            <th scope="col">Send</th>
                                                            <th scope="col">Receive</th>
                                                            <th scope="col">Amount($)</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col">Exchanged</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $count = 0;
                                                            foreach($Sresult as $key=>$res){
                                                                $count = $count + 1;
                                                                if($count == 6){
                                                                    break;
                                                                }
                                                                echo "<tr >";
                                                                    echo "<td>".$res['send_method']."</td>";
                                                                    echo "<td>".$res['receive_method']."</td>";
                                                                    echo "<td>".$res['send_amount']."</td>";                                                
                                                                    echo "<td>".$res['status']."</td>"; 
                                                                    echo "<td>".$res['dates']."</td>";                                       
                                                                echo "</tr>";
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        	</div>
                                        </div>
                        	</div>
                       </div>


                  <!-- <br>
                    <div class="card" style="background: #c7ea0bc4; max-width: 50%; min-width:300px;">
            		<div class="card-header">
            		    <h6 style="color: black; font-weight: bold">LATEST EXCHANGE HISTORY!</h6>
            		 </div>
            		<div class="card-body" >
            		<div style="overflow-x:auto;">
                               <table class="table table-sm">
                                    <thead class="bg-danger">
                                        <tr>
                                            <th scope="col">Send</th>
                                            <th scope="col">Receive</th>
                                            <th scope="col">Amount($)</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Exchanged</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $count = 0;
                                            foreach($Eresult as $key=>$res){
                                                $count = $count + 1;
                                                if($count == 6){
                                                    break;
                                                }
                                                echo "<tr >";
                                                    echo "<td>".$res['send_method']."</td>";
                                                    echo "<td>".$res['receive_method']."</td>";
                                                    echo "<td>".$res['send_amount']."</td>";                                                
                                                    echo "<td>".$res['status']."</td>"; 
                                                    echo "<td>".$res['dates']."</td>";                                       
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        	</div>
                        </div>-->                        
                        
            
    <script type="text/javascript"> window.$crisp=[];window.CRISP_WEBSITE_ID="0ac2cce6-847b-4360-bd90-51b45d71099f";(function(){ d=document;s=d.createElement("script"); s.src="https://client.crisp.chat/l.js"; s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})(); </script>
            

		  </div>
		</div>
		<br>

    </div>



<?php include 'inc/footer.php';?>