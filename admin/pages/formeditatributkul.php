<div class="row">
<div class="col-xs-12">
	<div class="box">
		<div class="box-body">
			<div id="form">
			<?php if (isset($_GET['id'])){
				$id=$_GET['id'];
				$sql = pg_query("SELECT * FROM culinary_place where id='$id'");
				$data =  pg_fetch_array($sql);
			?>
				<h4 style="text-transform:capitalize;">Ubah Data Atribut <?php echo $data['name'] ?></h4>
				<form role="form" action="act/editatributkulprocess.php" method="post">
				<a href="?page=detailculinary&id=<?php echo $id ?>" class="btn btn-primary pull-left"><i class="fa fa-chevron-left"></i> Back</a>
				<button type="submit" class="btn btn-primary pull-right"><i class="fa fa-floppy-o"></i> Save</button>
				<br><br><br>
					<input type="text" class="form-control hidden" name="id" value="<?php echo $id ?>">
					<div class="form-group" style="clear:both">
						<label for="name">Culinary Name</label>
						<input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>">
					</div>
					<div class="form-group" style="clear:both">
						<label for="address">Address</label>
						<input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>">
					</div>
					<div class="form-group">
						<label for="cp">Phone</label>
						<input type="text" class="form-control" name="cp" value="<?php echo $data['cp'] ?>">
					</div>
					
					<div class="form-group">
						<label for="open">Open</label>
						<input type="time" class="form-control" name="open" value="<?php echo $data['open'] ?>">
					</div>
					<div class="form-group">
						<label for="close">Close</label>
						<input type="time" class="form-control" name="close" value="<?php echo $data['close'] ?>">
					</div>
					<div class="form-group">
						<label for="capacity">Capacity</label>
						<input type="text" class="form-control" name="capacity" value="<?php echo $data['capacity'] ?>">
					</div>
					<div class="form-group">
						<label for="employee">Employee</label>
						<input type="text" class="form-control" name="employee" value="<?php echo $data['employee'] ?>">
					</div>
				</form>
			<?php }	?>
			</div>
		</div>
	</div><!-- /.box -->
</div><!-- /.col -->
</div>