<?php
include_once 'header.php';
include_once 'lib/product.php';
$product = new product();
$sql = 'SELECT * FROM san_pham';
$product->query($sql);
?>
<div class="clearfix"></div>
<div class="container">
	<a href="add.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Thêm sản phẩm</a>
</div>
<div class="clearfix"></div><br />
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-responsive mytable">
				<thead>
				<tr>
					<th>Mã sản phẩm</th>
					<th>Mã loại</th>
					<th>Tên sản phẩm</th>
					<th>Giá sản phẩm</th>
					<th>Mô tả</th>
					<th>Trạng thái</th>
					<th colspan="2" align="center"><center>Hành động</center></th>
				</tr>
				</thead>
				<tbody>
				<?php
				while ($row = $product->fetch()) {
				 ?>
				<tr>
					<td><?php echo $row['id_san_pham']; ?></td>
					<td><?php echo $row['id_loai_sp']; ?></td>
					<td style="text-align: left;"><?php echo $row['ten_sp']; ?></td>
					<td><?php echo $row['gia_sp']; ?></td>
					<td style="text-align: left;"><?php echo $row['mo_ta']; ?></td>
					<td><?php echo $row['trang_thai']; ?></td>
					<td align="center">
						<a href="edit.php?ma=<?php echo $row['id_san_pham']; ?>"><i class="glyphicon glyphicon-edit"></i></a>
					</td>
					<td align="center">
						<a href="del.php?id=<?php echo $row['id_san_pham']; ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
					</td>
				</tr>
					 <?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once 'footer.php' ?>