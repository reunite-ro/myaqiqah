<html>
    <head>
    <title>Order List</title>
    </head>
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <body>
        

               

               
               <h1>Order List<a class="btn btn-default pull-right" href="<?php echo site_url('index/add');?>">Add New</a></h1>
                
                <table class="table table-bordered">
                    <thead>
                        
                        <tr>
                            <th>Order ID</th>
                            <th>Email</th>
                            <th>Jantina</th>
                            <th>Pakej</th>
                            <th>Nama</th>
                            <th>Telefon</th>
                            <th>Alamat</th>
                            <th>Postcode</th>
                            <th>State</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Follow</th>
                             <th>Edit</th>
                        </tr>
                        
                    </thead>       
                    <tbody>
                        
                        <?php
                        
                         if ($view !== false) {
                           foreach($view as $cd) { ?>
                        <tr>
                            <td><?php echo $cd['orderid'];?></td>
                            <td><?php echo $cd['email'];?></td>
                            <td><?php echo $cd['jantina'];?></td>
                            <td><?php echo $cd['pakej'];?></td>
                            <td><?php echo $cd['name'];?></td>
                            <td><?php echo $cd['tel'];?></td>
                            <td><?php echo $cd['address'];?></td>
                            <td><?php echo $cd['postcode'];?></td>
                            <td><?php echo $cd['state'];?></td>
                           <td><?php echo $cd['date'];?></td>
                            <td><?php echo $cd['status'];?></td>
                            <td><?php echo $cd['follow'];?></td>
                            <td><a href="<?php echo site_url('index/edit/'.$cd['orderid']);?>">EDIT</a></td>
                        </tr>
                        <?php } 
                         } else {
                        ?>
                        <tr>
                            <td colspan="5">no data</td>
                        </tr>
                        <?php } ?>
                    </tbody>             
                </table>
                    </body>
</html>