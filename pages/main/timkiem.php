

              <?php 	
		if(isset($_POST['timkiem'])){

			$tukhoa = $_POST['tukhoa'];
			}else{
				$tukhoa = '';
			}
		 $sql_pro = " SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc  AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%' ";
		
        $query_pro = mysqli_query($mysqli,$sql_pro);

       // $row = mysqli_fetch_array()
        
        
?>

				<h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa'] ?></h3> 
				<ul class="product_list">
					<?php
					while ($row = mysqli_fetch_array($query_pro)) {
						# code...
					
					?>
					<li>
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">
						<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="100%">
						<p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham']?></p>
						<p class="price_product">Giá: <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
						<p style="text-align: center; color:#000000"><?php echo $row['tendanhmuc']?></p>
                        <p ><input class="themgiohang" type="submit" value="Thêm giỏ hàng"></p>

						</a>
					</li>
					<?php 
					}
					 ?>					
				</ul>
		