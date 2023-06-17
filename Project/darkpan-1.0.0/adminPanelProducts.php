<?php
include("header.php");

?>


            <!-- category  table start  -->
            <div class="container pt-4">
                <div class="bg-secondary rounded p-4">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="d-flex justify-content-between">

                                <h4>Products Table</h4>

                                <button type="button" class="btn  insert" data-bs-toggle="modal"
                                    data-bs-target="#insert-modal" name="insertCategory">Add more Products ...
                                </button>


                            </div>

                            <table class="table table-dark table-hover  w-100 mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">Product ID</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Product Price</th>
                                        <th scope="col">Categroy </th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $query = $pdo->query("select * from products join category on products.product_category_id = category.category_id ORDER BY product_id");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
               
                        foreach($result as $row){
                        ?>
                                    <tr>
                                        <td>
                                            <?php echo $row['product_id'] ?>
                                        </td>

                                        <td id="c_name">
                                            <?php echo $row['product_name'] ?>
                                        </td>
                                        <td id="c_name">
                                            <?php echo '$'.$row['product_price'] ?>
                                        </td>
                                        <td id="c_name">
                                            <?php echo $row['category_name'] ?>
                                        </td>
                                        <td style="width: 30%;"><img id="c_image"
                                                src="cozastoreimages/<?php echo $row['product_image'] ?>" style="width: 30%;"
                                                alt=""></td>
                                        <td class="">
                                            <button class="btn btn-secondary edit-btn " data-bs-toggle="modal"
                                                data-bs-target="#edit-modal<?php echo $row['product_id']  ?>">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <button class="btn btn-secondary" name="delete">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                        </td>
                                    </tr>

                                    <!-- The Modal -->
                                    <div class="modal" id="edit-modal<?php echo $row['product_id'] ?>">
                                        <div class="modal-dialog modal-xl bg-secondary ">
                                            <div class="modal-content bg-secondary">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Information</h4>
                                                    <button type="button" class="btn-close  bg-white"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <form method="post" action="" enctype="multipart/form-data">


                                                        <div class="mb-3 row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">ID</label>
                                                            <div class="col-sm-10">
                                                                <input value="<?php echo $row['product_id'] ?>" readonly
                                                                    class="form-control bg-dark" name="product_id_input">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                                <input value="<?php echo $row['product_name'] ?>"
                                                                    class="form-control bg-dark"
                                                                    name="product_name">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">Price</label>
                                                            <div class="col-sm-10">
                                                                <input value="<?php echo $row['product_price'] ?>"
                                                                   class="form-control bg-dark"
                                                                    name="product_price">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">Category</label>
                                                                <div class="col-sm-10">
                                                                <?php
$sqlc = "SELECT * FROM category";
$resultc = $pdo->query($sqlc);
$classes = $resultc->fetchAll(PDO::FETCH_ASSOC);
?>

<select name="product_category" class="form-control bg-dark" >
    <?php foreach ($classes as $rowc){?>
        <?php $selected = ($row['product_category_id'] == $rowc['category_id']) ? "selected" : ""; ?>
        <option <?php echo $selected; ?> value="<?php echo $rowc['category_id']; ?>">
            <?php echo $rowc['category_name']; ?>
        </option>
    <?php 
    };
    ?>
</select>

                                                        </div>
                                                        </div>

                                                        <div class="mb-3 mt-3 row form-group">
                                                            <label for="" class="col-sm-2 col-form-label">Change
                                                                Image</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" name="product_image"
                                                                    class="form-control bg-dark">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row form-group">
                                                            <label for="" class="col-sm-2 col-form-label">Category
                                                                Image</label>
                                                            <div class="col-sm-10"><img width="70%"
                                                                    id="modal-category-image"
                                                                    src="cozastoreimages/<?php echo $row['product_image']  ;?>"
                                                                    alt="">
                                                            </div>

                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-dark text-white"
                                                                name="update_product">
                                                                Update</button>
                                                            <button type="button" class="btn btn-danger"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                        </div>
                        <?php
                        }
                        ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        

        <!-- model for insert button start -->
        <div class="modal" id="insert-modal">
            <div class="modal-dialog modal-xl bg-secondary">
                <div class="modal-content bg-secondary">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Product</h4>
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"></button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="" enctype="multipart/form-data">

                            <div class="mb-3 row form-group">
                                <label for="" class="col-sm-2 col-form-label">ID</label>
                                <?php
                                $sqlx = "SELECT MAX(product_id) AS last_id FROM products";
                                $queryx = $pdo->query($sqlx);
                                $resultx = $queryx->fetch(PDO::FETCH_ASSOC);
                                // $lastId = $result['product_id'];
                                foreach($resultx as $rowx ){
                                   
                                ?>
                                <div class="col-sm-10"> <input class="form-control bg-dark"  value="<?php echo $rowx+1 ?>" readonly name="productName"></div>
                                <?php 
                                }
                                ?>
                            </div>
                            <div class="mb-3 row form-group">
                                <label for="" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10"> <input class="form-control bg-dark" name="productName"></div>
                            </div>
                            <div class="mb-3 row form-group">
                                <label for="" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10"> <input class="form-control bg-dark" name="productPrice"></div>
                            </div>
                            <div class="mb-3 row">
                                                            <label for="inputPassword"
                                                                class="col-sm-2 col-form-label">Category</label>
                                                                <div class="col-sm-10">
                                                                <?php
$sqlc = "SELECT * FROM category";
$resultc = $pdo->query($sqlc);
$classes = $resultc->fetchAll(PDO::FETCH_ASSOC);
?>

<select name="product_category" class="form-control bg-dark" >
    <?php foreach ($classes as $rowc){?>

        <option  value="<?php echo $rowc['category_id']; ?>">
            <?php echo $rowc['category_name']; ?>
        </option>
    <?php 
    };
    ?>
</select>

                                                        </div>
                            <div class="mb-3 mt-3 row form-group">
                                <label for="" class="col-sm-2 col-form-label"> Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="productImage" class="form-control bg-dark">
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="submit" name="insertProduct" class="btn btn-dark text-white">Add</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- model for insert button end -->
    </div>
      <?php
      
      include("footer.php")
      ?>