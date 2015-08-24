<h1>Edit Order</h1>

<?php 

    if ($status != '') {
        if ($status == 'success') { ?>
        <p class="alert bg-success">Data updated!</p>
        <?php }
        else { ?>
        <p class="alert bg-danger">Error saving data</p>
        <?php }
    }
?>

<form method="post" action="<?php echo site_url('index/edit/'. $cd['orderid']); ?>">
  <div class="form-group">
    <label for="title">Order ID</label>
    <input type="text" class="form-control" id="orderid" name="orderid" value="<?php echo $cd['orderid']?>">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <input type="text" class="form-control" id="status" name="status" value="<?php echo $cd['status']?>">
  </div>

  <div class="form-group">
    <label for="follow">Follow</label>
    <input type="text" class="form-control" id="follow" name="follow" value="<?php echo $cd['follow']?>">
  </div>

  <button type="button" class="btn btn-default" id="cancel-btn" onclick="window.location.href='<?php echo site_url('cd')?>';">Cancel</button>
  <button type="submit" class="btn btn-default" name="submit" value="submit">Save</button>
</form>                