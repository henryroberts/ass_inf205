<?php
include_once 'header.php';
include_once 'lib/product.php';
$ma = $_GET['ma'];
$product = new product();
$sql = "SELECT * FROM san_pham
		WHERE id_san_pham = $ma";
$product->query($sql);
$row = $product->fetch();
if(isset($_POST['btn-update'])) {

	$product = new product();
	$product->set_id_sp($ma);
	$product->set_id_loai_sp( $_POST['id_loai'] );
	$product->set_ten_sp( $_POST['ten_sp'] );
	$product->set_gia_sp( $_POST['gia_sp'] );
	$product->set_mo_ta( $_POST['mo_ta'] );
	$product->set_trang_thai( $_POST['trang_thai'] );
	echo $product->edit_sp();
	header('location:products.php');
}
?>
	<div class="clearfix"></div><br />

	<div class="container">

		<form method='post'>

			<table class='table table-bordered'>

				<tr>
					<td><label for="id_loai" style="font-weight: normal;">ID loại sản phẩm</label></td>
					<td><input type='number' id="id_loai" name='id_loai' class='form-control' value="<?php if(isset($_POST['id_loai'])){echo $_POST['id_loai'];}else{echo $row['id_loai_sp'];}?>" required></td>
				</tr>

				<tr>
					<td><label for="ten_sp" style="font-weight: normal;">Tên sản phẩm</label></td>
					<td><input type='text' id="ten_sp" name='ten_sp' class='form-control' value="<?php if(isset($_POST['ten_sp'])){echo $_POST['ten_sp'];}else{echo $row['ten_sp'];}?>" required></td>
				</tr>

				<tr>
					<td><label for="gia_sp" style="font-weight: normal;">Giá sản phẩm</label></td>
					<td><input type='number' id="gia_sp" name='gia_sp' class='form-control' value="<?php if(isset($_POST['gia_sp'])){echo $_POST['gia_sp'];}else{echo $row['gia_sp'];}?>" required></td>
				</tr>

				<tr>
					<td><label for="mo_ta" style="font-weight: normal;">Mô tả</label></td>
					<td><input type='text' id="mo_ta" name='mo_ta' class='form-control' value="<?php if(isset($_POST['mo_ta'])){echo $_POST['mo_ta'];}else{echo $row['mo_ta'];}?>" required></td>
				</tr>

				<tr>
					<td><label for="trang_thai" style="font-weight: normal;">Trạng thái</label></td>
					<td><input type='number' id="trang_thai" name='trang_thai' class='form-control' value="<?php if(isset($_POST['trang_thai'])){echo $_POST['trang_thai'];}else{echo $row['trang_thai'];}?>" required></td>
				</tr>

				<tr>
					<td colspan="2">
						<button type="submit" class="btn btn-primary" name="btn-update">
							<span class="glyphicon glyphicon-edit"></span> Cập nhật bản ghi này
						</button>
						<a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Quay lại trang index</a>
					</td>
				</tr>

			</table>
		</form>
	</div>
<?php include_once 'footer.php'; ?>