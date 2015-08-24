
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

</head>
<h1>Edit Order</h1>
<form method="post" action="<?php echo site_url('index/edit/'. $cd['orderid']); ?>">
  <div class="form-group">
    <label for="title">Order ID</label>
    <input type="text" class="form-control" id="orderid" value="<?php echo $cd['orderid']?>">
  </div>

  <div class="form-group">
    <label for="jahr">Status</label>
    <input type="text" class="form-control" id="status" value="<?php echo $cd['status']?>">
  </div>

  <div class="form-group">
    <label for="interpret">Follow</label>
    <input type="text" class="form-control" id="follow" value="<?php echo $cd['follow']?>">
  </div>

  <button type="button" class="btn btn-default" id="cancel-btn" onclick="window.history.go(-1);">Cancel</button>
  <button type="submit" class="btn btn-default">Save</button>
</form>                
</html>
