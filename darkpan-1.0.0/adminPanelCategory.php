<?php
include("./adminPanelPhp/query.php");
if(!isset($_SESSION['admin_id'])){
    header('location:signup.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
    h4 {
        color: var(--light);
    }

    .insert {
        /* color:var(--light); */
        color: white;
        /* background-color: var(--light); */
        background-color: black;
    }

    .insert:hover {
        color: white;
    }
th{
      color:var(--light);
      font-size:20px;
}
    .modal-dialog {
        background-color: ;
    }
</style>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
       
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="container-fluid">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
<a href="adminPanelProducts.php" class="nav-link"> Products Panel<span class="d-none d-lg-inline-flex"></span></a>

                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt=""
                                        style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt=""
                                style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item text-white">My Profile</a>
                            <a href="#" class="dropdown-item text-white">Settings</a>
                            <form method="post" action="signup.php">
    <button type="submit" class="dropdown-item text-white" name="logout">Log Out</button>
</form>



                            
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
   <!-- Footer Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distributed By: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>