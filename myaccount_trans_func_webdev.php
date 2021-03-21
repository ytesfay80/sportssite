   public function transactions() {
       $this->db_connection = new mysqli('localhost', 'root', '1', 'test');


                 $sql = "SELECT ticket_result
                         FROM transactions
                         WHERE member_id = '{$_SESSION['user_id']}'";
             $query = $this->db_connection->query($sql); 
                $me2 = array();
               while ($row = $query->fetch_object()) { 
               $me2[] = $row->ticket_result;
                 }  
                 return $me2;
     }
 
 
 
 <h1> <?php $classLogin->transactions(); ?> </h1>
<?php $me2 = $classLogin->transactions(); ?> 

          <?php foreach ($me2 as $value) { ?>
<table class="table table-bordered ">
<thead>
<th>Date</th>
<th>Ticket ID</th>
<th>Result</th>
</thead>
<tr>
<td></td>
<td></td>
<td><?php echo $value; ?> </td>
</tr>
</table>
<?php } ?>
