<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/
    include_once 'Crud.php';
    $crud = new Crud();
    $query = "Select * from exchange_table order by id DESC";
    $result = $crud->getData($query);
?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.edit {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 2px 6px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.edit:hover {
  background-color: RoyalBlue;
}
</style>

        <table class="table table-sm">
                <thead class="bg-danger">
                    <tr>
                        <th scope="col">Send</th>
                        <th scope="col">Receive</th>
                        <th scope="col">Send($)</th>
                        <th scope="col">Receive(TK)</th>
                        <th scope="col">Send AC/</th>
                        <th scope="col">Receive AC/</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                             foreach($result as $key=>$res){
                                echo "<tr >";
                                echo "<td>".$res['send_method']."</td>";
                                echo "<td>".$res['receive_method']."</td>";
                                echo "<td>".$res['send_amount']."</td>";
                                echo "<td>".$res['receive_amount']."</td>";                                    
                                echo "<td>".$res['send_AC_email']."</td>";
                                echo "<td>".$res['receive_AC_email']."</td>";
                                echo "<td>".$res['dates']."</td>";
                                echo "<td>".$res['status']."</td>";
                                echo "<td><button id=".$res['id']." class='btn edit'><i class='fa fa-edit'></i></button>";                        
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>

<script type="text/javascript">
    $(document).ready(function(){
        
        $('.edit').click(function(){
            var id = $(this).attr('id');
            //alert(id);
            $.ajax({
                url:"exchangeEdit.php",
                type:"POST",
                data: {id:id},
                success: function(data){
                    $('html,body').animate({scrollTop:0}, 'slow', function(){
                        $('#edit-form').slideDown();
                        $('#edit-form').html(data);
                    })

                }
            });
        });      
        
    });
</script>