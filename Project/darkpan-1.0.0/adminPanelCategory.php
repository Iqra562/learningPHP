<?php
include("header.php")
?>
            <!-- category  table start  -->
            <div class="container pt-4">
                <div class="bg-secondary rounded p-4">
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="d-flex justify-content-between">

                                <h4>Category Table</h4>
                         
  <button type="button"class="btn  insert"  data-bs-toggle="modal" data-bs-target="#insert-modal" name="insertCategory">Add more Category ...
  </button>
                              

                            </div>

                            <table class="table table-dark table-hover  w-100 mt-2">
                                <thead>
                                    <tr>
                                        <th scope="col">Category ID</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Category Image</th>
                                        <th scope="col"> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        $query = $pdo->query("SELECT * FROM category");
                        $result = $query->fetchAll(PDO::FETCH_ASSOC);
               
                        foreach($result as $row){
                        ?>
                                    <tr>
                                        <td id="c_id">
                                            <?php echo $row['category_id'] ?>
                                        </td>

                                        <td id="c_name">
                                            <?php echo $row['category_name'] ?>
                                        </td>
                                        <td style="width: 30%;"><img id="c_image"
                                                src="cozastoreimages/<?php echo $row['category_image'] ?>" style="width: 30%;"
                                                alt=""></td>
                                        <td class="">
                                            <button class="btn btn-secondary edit-btn " data-bs-toggle="modal"
                                                data-bs-target="#edit-modal<?php echo $row['category_id']  ?>">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <input type="hidden" name="category_id_input" value="<?php echo $row['category_id']; ?>">
<button class="btn btn-secondary" name="delete">
    <i class="fa fa-trash"></i>
</button>

                                        </td>
                                    </tr>

                                    <!-- The Modal -->
                                    <div class="modal" id="edit-modal<?php echo $row['category_id'] ?>">
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
                                                                <input id="modal-category-id"
                                                                    value="<?php echo $row['category_id'] ?>"
                                                                    readonly class="form-control bg-dark" name="model-id">
                                                            </div>
                                                        </div >
                                                        <div class="mb-3 row form-group">
                                                            <label for=""  class="col-sm-2 col-form-label">Name</label>
                                                            <div class="col-sm-10">
                                                            <input value="<?php echo $row['category_name'] ?>"
                                                                id="modal-category-name" name="model-name"
                                                                class="form-control" type="text">
                                                        </div>
                                                        <div class="mb-3 mt-3 row form-group">
                                                            <label for=""  class="col-sm-2 col-form-label">Change Image</label>
                                                            <div class="col-sm-10">
                                                            <input type="file" name="model-image"           class="form-control bg-dark" >
                                                        </div>
                                                        </div>
                                                        <div class="mb-3 row form-group">
                                                            <label for="" class="col-sm-2 col-form-label">Category Image</label>
                                                            <div class="col-sm-10" ><img  width="50%" id="modal-category-image" 
                                                            src="cozastoreimages/<?php echo $row['category_image']  ?>" alt="">
                                                        </div>
                                             
                                                    </div>
                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                            <button type="submit" class="btn btn-dark text-white" name="update">
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


        <?php
        
        if(isset($_POST['delete'])) {
    
        $c_idc = $_POST['category_id_input'];
        $queryz = $pdo->prepare("DELETE FROM category WHERE category_id = :id");
        $queryz->bindParam("id", $c_idc);
        $queryz->execute();
        if ($queryz->execute()) {
            echo "<script>alert('Deleted successfully')</script>";
        } else {
            echo "<script>alert('Failed to delete')</script>";
        }
    }
    ?>
<!-- model for insert button start -->
<div class="modal" id="insert-modal">
    <div class="modal-dialog modal-xl bg-secondary">
        <div class="modal-content bg-secondary">
            <div class="modal-header">
                <h4 class="modal-title">Add Category</h4>
                <button type="button" class="btn-close bg-white" data-bs-dismiss="modal"></button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">
                
                    <div class="mb-3 row form-group">
                        <label for="" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">  <input  class="form-control bg-dark" name="categoryName"></div>
                    </div>
                    <div class="mb-3 mt-3 row form-group">
                        <label for="" class="col-sm-2 col-form-label"> Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="categoryImage" class="form-control bg-dark">
                        </div>
                    </div>
                  
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" name="insertCategory" class="btn btn-dark text-white">Add</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- model for insert button end -->

    </div>
    <!-- Content End -->

<?php
include("footer.php")
?>