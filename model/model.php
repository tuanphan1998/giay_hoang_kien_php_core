<?php 
class Model
{
	protected $host,$db,$user,$pass,$conn;
	public function __construct(){
		$this->host = 'localhost';
		$this->db = 'web_giay';
		$this->user = 'root';
		$this->pass = '';
		$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		if($this->conn->connect_error){
			die($this->conn->connect_error);
		}
		$this->conn->set_charset("utf8");
	}

	public function count($table){
		$sql = "SELECT * FROM $table";
		$r = $this->conn->query($sql);

		return $r->num_rows;
	}

	public function total($danhmuc){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$danhmuc";
		$r = $this->conn->query($sql);
		return $r->num_rows;
	}

	public function confirmHD($id){
		$sql = "UPDATE hoadon SET tinhtrang = 1 WHERE id_hoadon = $id";
		$r = $this->conn->query($sql);

		if($r)
			return true;
		return false;
	}

	public function getsDanhMuc(){
		$sql = "SELECT * FROM danhmuc";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}	
	}

	public function getsSanPham($limit=4){
		$sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT $limit";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsSanPhamByID($id,$limit=4){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id ORDER BY id_sanpham DESC LIMIT $limit";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsSanPhamByIDrandom($id,$limit=4){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id ORDER BY RAND() LIMIT $limit";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsIphone(){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=1 ORDER BY id_sanpham DESC LIMIT 4";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsSamsung(){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=2 ORDER BY id_sanpham DESC LIMIT 4";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsThanhVien($limit=5){
		$sql = "SELECT * FROM thanhvien LIMIT $limit";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsHoaDon($limit=100){
		$sql = "SELECT * FROM hoadon ORDER BY id_hoadon DESC LIMIT $limit";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getHoaDon($id){
		$sql = "SELECT * FROM hoadon WHERE id_hoadon=$id";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getSanPham($id){
		$sql = "SELECT * FROM sanpham WHERE id_sanpham=$id";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->fetch_assoc();
		} else {
			return null;
		}
	}

	public function getDanhMuc($id){
		$sql = "SELECT * FROM danhmuc WHERE id_danhmuc=$id";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->fetch_assoc();
		} else {
			return null;
		}
	}

	public function getsDanhMuc2($id,$start,$limit){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id LIMIT $start,$limit";
		$result = $this->conn->query($sql);
		//var_dump($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function searchSP($kw){
		$sql = "SELECT * FROM sanpham WHERE sanpham.ten LIKE '%$kw%' 
					OR sanpham.mota LIKE '%$kw%' LIMIT 4
			";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getThanhVien($tendangnhap,$matkhau){
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' AND matkhau='$matkhau'";	
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result->num_rows > 0)
			return $result->fetch_assoc();
		return false;
	}

	public function getThanhVienByID($id){
		$sql = "SELECT * FROM thanhvien WHERE id_thanhvien=$id";	
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result->num_rows > 0)
			return $result->fetch_assoc();
		return false;
	}

	public function checkThanhVien($tendangnhap,$matkhau){
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' AND matkhau='$matkhau'";	
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result->num_rows > 0)
			return true;
		return false;
	}

	public function addThanhVien($thongtin){
		$sql = "INSERT INTO thanhvien (tendangnhap,matkhau,hoten,email,sodienthoai,diachi) VALUES ('".$thongtin['tendangnhap']."','".$thongtin['matkhau']."','".$thongtin['hoten']."','".$thongtin['email']."','".$thongtin['sodienthoai']."','".$thongtin['diachi']."')";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}

	public function addDanhMuc($thongtin){
		$sql = "INSERT INTO danhmuc (ten,mota,anhdaidien) VALUES ('".$thongtin['ten']."','".$thongtin['mota']."','".$thongtin['anhdaidien']."')";
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addSanPham($thongtin){
		$sql = "INSERT INTO sanpham (ten,gia,mota,anhdaidien,mausac,soluong,iddanhmuc) VALUES ('".$thongtin['ten']."','".$thongtin['gia']."','".$thongtin['mota']."','".$thongtin['anhdaidien']."','".$thongtin['mausac']."','".$thongtin['soluong']."','".$thongtin['danhmuc']."')";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addHoaDon($thongtin){
		$sql = "INSERT INTO hoadon (listidsanpham,listsoluongsanpham,listmausac,tongtien,idthanhvien,ngaygiaohang,hoten,email,sodienthoai,diachi,phuongthuc) VALUES ('".$thongtin['listidsanpham']."','".$thongtin['listsoluongsanpham']."','".$thongtin['listmausac']."','".$thongtin['tongtien']."','".$thongtin['idthanhvien']."','".$thongtin['ngaygiaohang']."','".$thongtin['hoten']."','".$thongtin['email']."','".$thongtin['sodienthoai']."','".$thongtin['diachi']."','".$thongtin['phuongthuc']."')";
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function countSanPham($id_danhmuc){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id_danhmuc";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->num_rows;
		} else {
			return 0;
		}
	}

	public function editDanhMuc($thongtin,$id){
		$sql = "UPDATE danhmuc SET 
		ten='".$thongtin['ten']."',mota='".$thongtin['mota']."',
		anhdaidien='".$thongtin['anhdaidien']."' WHERE id_danhmuc=".$id;
		//var_dump($sql);			
		$r = $this->conn->query($sql);
		//var_dump($r);exit;
		if($r) return true;
		return false;
	}

	public function editNguoiDung($thongtin,$id){
		if(empty($thongtin['matkhau'])){
			$sql = "UPDATE thanhvien SET 
			hoten='".$thongtin['hoten']."',email='".$thongtin['email']."',
			sodienthoai='".$thongtin['sodienthoai']."',
			diachi='".$thongtin['diachi']."' WHERE id_thanhvien=".$id;
		} else {
			$sql = "UPDATE thanhvien SET 
			hoten='".$thongtin['hoten']."',email='".$thongtin['email']."',
			sodienthoai='".$thongtin['sodienthoai']."',matkhau='".$thongtin['matkhau']."',
			diachi='".$thongtin['diachi']."' WHERE id_thanhvien=".$id;
		}
		//var_dump($sql);			
		$r = $this->conn->query($sql);
		if($r) return true;
		return false;
	}

	public function editSanPham($thongtin,$id){
		$sql = "UPDATE sanpham SET 
		ten='".$thongtin['ten']."',mota='".$thongtin['mota']."',
		gia='".$thongtin['gia']."',
		anhdaidien='".$thongtin['anhdaidien']."',
		mausac='".$thongtin['mausac']."',
		soluong='".$thongtin['soluong']."',
		iddanhmuc='".$thongtin['danhmuc']."' WHERE id_sanpham=".$id;
		//var_dump($sql);			
		$r = $this->conn->query($sql);
		//var_dump($r);exit;
		if($r) return true;
		return false;
	}

	public function delTV($id){
		$sql = "DELETE FROM thanhvien WHERE id_thanhvien=$id";
		$r = $this->conn->query($sql);
		if($r){
			return true;
		} else {
			return false;
		}
	}

	public function delDM($id){
		$sql = "DELETE FROM danhmuc WHERE id_danhmuc=$id";
		$r = $this->conn->query($sql);
		if($r){
			return true;
		} else {
			return false;
		}
	}

	public function delHD($id){
		$sql = "DELETE FROM hoadon WHERE id_hoadon=$id";
		$r = $this->conn->query($sql);
		if($r){
			return true;
		} else {
			return false;
		}
	}

	public function delSP($id){
		$sql = "DELETE FROM sanpham WHERE id_sanpham=$id";
		$r = $this->conn->query($sql);
		if($r){
			return true;
		} else {
			return false;
		}
	}
}

 ?>

