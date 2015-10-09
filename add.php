<?php
include_once 'header.php';
include_once 'lib/product.php';
if(isset($_POST['btn-save'])) {

	$product = new product();
	$product->set_id_loai_sp( $_POST['id_loai'] );
	$product->set_ten_sp( $_POST['ten_sp'] );
	$product->set_gia_sp( $_POST['gia_sp'] );
	$product->set_mo_ta( $_POST['mo_ta'] );
	$product->set_trang_thai( $_POST['trang_thai'] );
	$product->add_sp();
	header('location:products.php');
}
?>
<div class="clearfix"></div><br />

<div class="container">

	<form method='post'>

		<table class='table table-bordered'>

			<tr>
			    <td><label for="id_loai" style="font-weight: normal;">ID loại sản phẩm</label></td>
			    <td><input type='number' id="id_loai" name='id_loai' class='form-control' required></td>
			</tr>

			<tr>
			    <td><label for="ten_sp" style="font-weight: normal;">Tên sản phẩm</label></td>
			    <td><input type='text' id="ten_sp" name='ten_sp' class='form-control' required></td>
			</tr>

			<tr>
			    <td><label for="gia_sp" style="font-weight: normal;">Giá sản phẩm</label></td>
			    <td><input type='number' id="gia_sp" name='gia_sp' class='form-control' required></td>
			</tr>

			<tr>
			    <td><label for="mo_ta" style="font-weight: normal;">Mô tả</label></td>
			    <td><input type='text' id="mo_ta" name='mo_ta' class='form-control' required></td>
			</tr>

			<tr>
			    <td><label for="trang_thai" style="font-weight: normal;">Trạng thái</label></td>
			    <td><input type='number' id="trang_thai" name='trang_thai' class='form-control' required></td>
			</tr>

			<tr>
			    <td colspan="2">
			    <button type="submit" class="btn btn-primary" name="btn-save">
			    <span class="glyphicon glyphicon-plus"></span> Khởi tạo bản ghi mới
			                                                                    </button>
			    <a href="index.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Quay lại trang index</a>
			    </td>
			</tr>

		</table>
	</form>
</div>
<?php include_once 'footer.php'; ?>