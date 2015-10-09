<?php
/**
 * Created by PhpStorm.
 * User: Anh Đức
 * Date: 9/10/2015
 * Time: 10:39 AM
 */
include_once 'database.php';
class product extends database {
	public $id_san_pham = NULL;
	public $id_loai_sp = NULL;
	protected $ten_sp = NULL;
	protected $gia_sp = NULL;
	protected $mo_ta = NULL;
	protected $trang_thai = NULL;

	public function __construct() {
		$this->connect();
	}
	public function set_id_sp($id_san_pham) {
		$this->id_san_pham = $id_san_pham;
	}
	public function set_id_loai_sp($id_loai_sp) {
		$this->id_loai_sp = $id_loai_sp;
	}
	public function set_ten_sp($ten_sp) {
		$this->ten_sp = $ten_sp;
	}
	public function set_gia_sp($gia_sp) {
		$this->gia_sp = $gia_sp;
	}
	public function set_mo_ta($mo_ta) {
		$this->mo_ta = $mo_ta;
	}
	public function set_trang_thai($trang_thai) {
		$this->trang_thai = $trang_thai;
	}

	public function add_sp() {
			$sql = "INSERT INTO san_pham (id_loai_sp, ten_sp, gia_sp, mo_ta, trang_thai)
                    VALUES ($this->id_loai_sp, '$this->ten_sp', $this->gia_sp, '$this->mo_ta', $this->trang_thai)";
			$this->query($sql);
	}
	public function edit_sp() {
			$sql = "UPDATE san_pham SET id_loai_sp = $this->id_loai_sp, ten_sp = '$this->ten_sp', gia_sp = $this->gia_sp,
            mo_ta = '$this->mo_ta', trang_thai = $this->trang_thai
            WHERE id_san_pham = $this->id_san_pham";
			$this->query($sql);
	}
	public function del_sp() {
		$sql = "DELETE FROM san_pham WHERE id_san_pham = $this->id_san_pham";
		$this->query($sql);
	}
}