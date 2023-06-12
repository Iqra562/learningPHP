<?php
include("./php/query.php");
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

    th {
        color: var(--light);
        font-size:18px;
    }

    .insert:hover {
        color: white;
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
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div>
                    </div>
                    <a href="category.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Category</a>
                    <a href="products.php" class="nav-item nav-link active"><i
                            class="fa fa-keyboard me-2"></i>Products</a>
                    <a href="adminPanelCategory.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Category Panel</a>
                    <a href="adminPanelProducts.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Products Panel</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
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
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
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
                                                src="images/<?php echo $row['product_image'] ?>" style="width: 30%;"
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
                                                            <div class="col-sm-10"><img width="50%"
                                                                    id="modal-category-image"
                                                                    src="images/<?php echo $row['product_image']  ?>"
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
    </div>
    <!-- Content End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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