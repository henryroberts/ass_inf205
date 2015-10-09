<?php
include_once 'header.php';
include_once 'lib/product.php';
?>
<div class="clearfix"></div><br />

<div class="container">

	 <form method='post'>

    <table class='table table-bordered'>

        <tr>
            <td>Tên</td>
            <td><input type='text' name='first_name' class='form-control' required></td>
        </tr>

        <tr>
            <td>Họ</td>
            <td><input type='text' name='last_name' class='form-control' required></td>
        </tr>

        <tr>
            <td>Email</td>
            <td><input type='text' name='email_id' class='form-control' required></td>
        </tr>

        <tr>
            <td>Số điện thoại</td>
            <td><input type='text' name='contact_no' class='form-control' required></td>
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
