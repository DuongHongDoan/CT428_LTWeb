<?php
    $sql_danhmuc = "SELECT * FROM tbl_category";
    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
?>

<div class="col-lg-3">
    <div class="category">
        <h4 class="category-heading" style="    display: flex;
    padding-top: 16px;"><i class="category-heading-icon fa-solid fa-list"></i><p style="padding-top: 2px;">Danh mục</p></h4>
        
        <?php
        while ($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
        ?>
        <ul class="category-list">
            <li class="category-item">
                <a href="index.php?quanly=categories&id=<?php echo $row_danhmuc['id_danhmuc']?>" class="category-item-link"><?php echo $row_danhmuc['tendanhmuc'] ?></a>
            </li>
        </ul>
        <?php
        }
        ?>
    </div>
</div>