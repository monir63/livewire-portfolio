<!DOCTYPE html>
<html lang="en">
<head>
    <title>Materialize</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
      src="backend/assets/fontAwesome.kit.js"
      crossorigin="anonymous"
    ></script>
    <script src="backend/assets/bootstrap.min.js"></script>
    <link href="backend/assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="backend/assets/style.css">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <!-- delete alert -->
    <div id="alert" class="delete-alert">
        <div class="delete-alert-content">
            <h4 class="text-center">Alert</h4>
            <p>Are you sure you want to delete this item?</p>
            <div class="d-flex align-items-center justify-content-between">
                <button onclick="deleteAlert()" class="btn btn-secondary">Cancel</button>
                <button class="btn btn-danger">Delete</button>
            </div>
        </div>
    </div>
    <!-- client added -->
    <div id="client_added" class="client_added">
        <div class="added_header">
            <h4>Client Add</h1>
            <i onclick="addClient()" class="fas fa-times pointer"></i>
        </div>
        <div class="single_input">
            <label for="name">Full Name</label>
            <input class="form-control" type="text" placeholder="Full Name">
        </div>
        <div class="single_input">
            <label for="name">Username</label>
            <input class="form-control" type="text" placeholder="Username">
        </div>
        <div class="single_input">
            <label for="name">Email</label>
            <input class="form-control" type="text" placeholder="Email">
        </div>
        <div class="single_input">
            <label for="name">Company</label>
            <input class="form-control" type="text" placeholder="Company">
        </div>
        <div class="single_input">
            <label for="name">Country</label>
            <input class="form-control" type="text" placeholder="Country">
        </div>
        <div class="single_input">
            <label for="name">Contact</label>
            <input class="form-control" type="text" placeholder="Contact">
        </div>
        <div class="single_input">
            <label for="name">Select Role</label>
            <select name="" id="">
                <option value="">Select Role</option>
                <option value="">Admin</option>
                <option value="">User</option>
            </select>
        </div>
        <div class="single_input d-flex align-items-center justify-content-between">
            <button class="btn btn-success">Submit</button>
            <button class="btn btn-danger" onclick="addClient()">Cancel</button>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="modal_container">
            <div class="modal_header">
                <h4>Modal</h4>
                <i onclick="toggleModal()" class="fas fa-times pointer"></i>
            </div>
            <div class="modal_body">
                <div class="single_input">
                    <label for="name">Name</label>
                <input type="text" placeholder="Name">
                </div>
                <div class="single_input">
                    <label for="">Total Invoiced</label>
                <input type="text" placeholder="Total Invoiced">
                </div>
                <div class="single_input">
                    <label for="">Payment Received</label>
                <input type="text" placeholder="Payment Received">
                </div>
                <div class="single_input">
                    <label for="">Due</label>
                <input type="text" placeholder="Due">
                </div>
                <div class="single_input d-flex align-items-center justify-content-between">
                    <button class="btn btn-success">Submit</button>
                    <button class="btn btn-danger" onclick="toggleModal()">Cancel</button>
                </div>

            </div>
        </div>
    </div>
    <div class="top_bar">
        <div class="container-fluid">
            <div class="row">
               <div class="col-2">
                <div class="left d-flex align-items-center">
                    <div class="responsive">
                        <div id="image" class="img">
                            <img src="https://rise.fairsketch.com/files/system/default-stie-logo.png" alt="">
                            <img src="https://rise.fairsketch.com/assets/images/favicon.png" alt="">
                        </div>
                    </div>
                    <ul class="icon d-flex align-items-center">
                        <li onclick="leftMenuToggle()"><p><i  class="fa fa-bars"></i></p></li>
                        <!-- <li><p><i class="fa fa-calendar"></i> Event</p></li>
                        <li><p><i class="fa fa-file"></i> Pages</p>
                            <ul>
                                <li><a href="#">Sub Pages</a></li>
                                <li><a href="#">Sub Pages</a></li>
                                <li><a href="#">Sub Pages</a></li>
                                <li><a href="#">Sub Pages</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
               </div>
                <div class="col-10 d-flex justify-content-end">
                    <div class="right">
                        <div class="d-flex align-items-center">
                            <div class="icon">
                                <i  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="fas fa-bell"></i>
                                <div  class="dropdown-menu info_item notify" aria-labelledby="dropdownMenuButton1">
                                    <div class="notification_header">
                                        <p>Notification</p>
                                    <p>3</p>
                                    </div>
                                    <div class="notification_body">
                                        <ul>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="https://pixinvent.com/demo/materialize-mui-react-nextjs-admin-template/demo-5/images/avatars/4.png" alt="">
                                                    </div>
                                                    <div class="notification_text">
                                                        <h6>Congratulation Flora! 🎉</h6>
                                                        <p>Won the monthly best seller badge</p>
                                                    </div>
                                                </div>
                                                <div class="notification_time">
                                                    <p>Today</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="https://pixinvent.com/demo/materialize-mui-react-nextjs-admin-template/demo-5/images/avatars/4.png" alt="">
                                                    </div>
                                                    <div class="notification_text">
                                                        <h6>Congratulation Flora! 🎉</h6>
                                                        <p>Won the monthly best seller badge</p>
                                                    </div>
                                                </div>
                                                <div class="notification_time">
                                                    <p>Today</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex align-items-center">
                                                    <div class="image">
                                                        <img src="https://pixinvent.com/demo/materialize-mui-react-nextjs-admin-template/demo-5/images/avatars/4.png" alt="">
                                                    </div>
                                                    <div class="notification_text">
                                                        <h6>Congratulation Flora! 🎉</h6>
                                                        <p>Won the monthly best seller badge</p>
                                                    </div>
                                                </div>
                                                <div class="notification_time">
                                                    <p>Today</p>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="icon">
                                <img id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false"  aria-labelledby="dropdownMenuButton2" src="https://rise.fairsketch.com/files/profile_images/_file62ad94f892365-avatar.png" alt="">
                                <div class="dropdown-menu info_item" aria-labelledby="dropdownMenuButton2">
                                    <div class="profile">
                                        <img src="https://rise.fairsketch.com/files/profile_images/_file62ad94f892365-avatar.png" alt="">
                                        <div class="name">
                                            <p>John Dev</p>
                                            <p style="font-size: 10px;"><span>@johnDev</span></p>
                                        </div>
                                    </div>
                                    <div class="menu_item">
                                        <ul class="m-0 p-0">
                                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                                            <li><a href="#"><i class="fa fa-comment"></i> Chat</a></li>
                                            <li><a href="#"><i class="fa fa-envelope"></i> Inbox</a></li>
                                        </ul>
                                    </div>
                                    <div class="menu_item">
                                        <ul class="m-0 p-0">
                                            <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"><svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-2y1ax9" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="LogoutVariantIcon"><path d="M14.08,15.59L16.67,13H7V11H16.67L14.08,8.41L15.5,7L20.5,12L15.5,17L14.08,15.59M19,3A2,2 0 0,1 21,5V9.67L19,7.67V5H5V19H19V16.33L21,14.33V19A2,2 0 0,1 19,21H5C3.89,21 3,20.1 3,19V5C3,3.89 3.89,3 5,3H19Z"></path></svg> Logout</a></li>
                                        </ul>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                            <?php echo csrf_field(); ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row">
            <div id="leftMenu" class="col-md-2 active position-relative">
                <div class="left_menu">
                    <ul>
                        <li><a href="index.html"> <i class="fa fa-desktop"></i>Dashboard</a></li>
                        <li><a href="about.html"> <i class="fa fa-desktop"></i>User</a></li>
                        <li><a class="<?php echo e(request()->is("banner*") ? "active" : ""); ?>" href="<?php echo e(route('admin.banner')); ?>"> <i class="fa fa-desktop"></i>Banner</a></li>
                        <li><a href="contact.html"> <i class="fa fa-desktop"></i>About</a></li>
                        <li><a href="login.html"> <i class="fa fa-desktop"></i>Login</a></li>
                        <li><a href="register.html"> <i class="fa fa-desktop"></i>Register</a></li>
                        <li onclick="slideToggleItem('product')">
                            <a  class="d-flex align-items-center justify-content-between" href="javascript:void(0)"> <span><i class="fa fa-desktop"></i>Product</span> <i class="fa fa-angle-down"></i></a>
                            <ul class="slideItem" id="product">
                                <li><a href="blog-detail.html">All Product</a></li>
                                <li><a href="blog-list.html">Add Product</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                            </ul>
                        </li>
                        <li onclick="slideToggleItem('slide3')">
                            <a  class="d-flex align-items-center justify-content-between" href="javascript:void(0)"> <span><i class="fa fa-desktop"></i>Menu</span> <i class="fa fa-angle-down"></i></a>
                            <ul class="slideItem" id="slide3">
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                            </ul>
                        </li>
                        <li><a href="profile.html"> <i class="fa fa-desktop"></i>Profile</a></li>
                        <li><a href="cart.html"> <i class="fa fa-desktop"></i>Cart</a></li>
                        <li><a href="checkout.html"> <i class="fa fa-desktop"></i>Checkout</a></li>
                        <li onclick="slideToggleItem('slide')"><a class="d-flex align-items-center justify-content-between" href="javascript:void(0)"> <span><i class="fa fa-desktop"></i>Product</span> <i class="fa fa-angle-down"></i></a>
                        <ul class="slideItem" id="slide">
                            <li><a href="product-detail.html">Product Detail</a></li>
                        <li><a href="product-list.html">Product List</a></li>
                        <li><a href="product-list-2.html">Product List 2</a></li>
                        <li><a href="product-list-3.html">Product List 3</a></li>
                        <li><a href="product-list-4.html">Product List 4</a></li>
                        </ul>
                        </li>
                        <li onclick="slideToggleItem('slide2')">
                            <a class="d-flex align-items-center justify-content-between" href="javascript:void(0)"> <span><i class="fa fa-desktop"></i>Blog</span> <i class="fa fa-angle-down"></i></a>
                            <ul class="slideItem" id="slide2">
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <script src="backend/assets/jquery.min.js"></script>
    <script src="backend/assets/app.js"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldContent('footer.js'); ?>
</body>
</html>
<?php /**PATH F:\livewire-portfolio\resources\views/layouts/base.blade.php ENDPATH**/ ?>