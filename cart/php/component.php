<?php
function component($productName, $productPrice, $productIMG, $productID) {

$element = "

<div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
<form action=\"index.php\" method=\"post\">
<div class=\"item cart-body\">
    <a href=\" \">
        <img src=\"$productIMG\" alt=\"\">
    </a>
    <div class=\"product\">
        <a href=\"\" class=\"product-detail\">$productName</a>
        <div class=\"row product-footer\">
            <div class=\"col-6\">
                <p class=\"product-price\">$productPrice</p>
            </div>
            <div class=\"col product-icon\">
                <a href=\"\">
                    <i class=\"lookat-product fa-solid fa-eye\"></i>
                </a>

                <button  type=\"submit\" name = \"add\"><i class=\"add-product fa-solid fa-cart-plus\"></i></button>
                <input type='hidden' name='product_id' value='$productID'>
            </div>
        </div>
    </div>
</div>

</form>
</div>
";

echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid) {
    $element = "
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    <div class=\"border rounded\">
        <div class=\"row bg-white\">
            <div class=\"col-md-3 pl-0\">
                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-6\">
                <h5 class=\"pt-2\">$productname</h5>
                <small class=\"text-secondary\">Seller: Kpops Store</small>
                <h5 class=\"pt-2\">$$productprice</h5>
                <button type=\"submit\" class=\"btn-warning\">Save for Later</button>
                <button type=\"submit\" class=\"btn-danger mx-2\" name=\"remove\">Remove</button>
            </div>
            <div class=\"col-md-3 py-5\">
                <div>
                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                </div>
            </div>
        </div>
    </div>
</form>
";

    echo  $element;
}


?>