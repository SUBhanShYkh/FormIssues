<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- Right Icon menu Sidebar -->
<div class="navbar-right">
    <ul class="navbar-nav">
        <li><a href="#search" class="main_search" title="Search..."><i class="fa-solid fa-magnifying-glass"></i></a></li>
        <li><a href="javascript:void(0);" class="js-right-sidebar" title="Setting"><i class="fa-solid fa-sliders"></i></a></li>
        <li><a href="sign-in.html" class="mega-menu" title="Sign Out"><i class="fa-solid fa-right-from-bracket"></i></a></li>
    </ul>
</div>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="fa-solid fa-gauge"></i></button>
        <a href="http://localhost/JEB/Admin/"><span class="m-l-10">Jenny's Store</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="assets/avatar.png" alt="User"></a>
                    <div class="detail">
                        <h4>SUBHAN</h4>                      
                    </div>
                </div>
            </li>
            <li><a href="http://localhost/JEB/Admin/"><i class="fa-brands fa-hotjar"></i><span>Dashboard</span></a></li>
            
            <li>     
                <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa-solid fa-quote-left"></i>
                    <span>Categories</span>
                </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="http://localhost/JEB/Admin/category/">All Categories</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/category/Add.php">Add Categories</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/category/Update.php">Update</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/category/Delete.php">Delete</a>
                        </li>
                    </ul>
            </li>

            <li> 
                <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa-solid fa-align-left"></i>
                    <span>Products</span>
                </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="http://localhost/JEB/Admin/product/">All Products</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/product/Add.php">Add Products</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/product/Update.php">Update</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/product/Delete.php">Delete</a>
                        </li>
                    </ul>
            </li>
            
            <li> 
                <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa-solid fa-truck"></i>
                    <span>Orders</span>
                </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="http://localhost/JEB/Admin/orders/">All Orders</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin//orders/Pendding.php">Orders IN Pendding</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin//orders/progress.php">Orders Progress</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin//orders/deliverd.php">Orders Progress</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/orders/Delete.php">Delete Orders</a>
                        </li>
                    </ul>
            </li>            

            <li> 
                <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa-solid fa-user"></i>
                    <span>Users</span>
                </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="http://localhost/JEB/Admin/users/">All Users</a>
                        </li>
                        <li>
                            <a href="http://localhost/JEB/Admin/users/UserOrders.php">Users Orders</a>
                        </li>
                    </ul>
            </li>

            <li> 
                <a href="javascript:void(0);" class="menu-toggle">
                <i class="fa-solid fa-comments"></i>
                    <span>Reviews</span>
                </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="http://localhost/JEB/Admin/Reviews/">All Reviews</a>
                        </li>
                    </ul>
            </li>            

        </ul>
    </div>
</aside>
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs sm">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-hc-fw"></i></a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="setting">
            <div class="slim_scroll">
                <div class="card">
                    <h6>Theme Option</h6>
                    <div class="light_dark">
                        <div class="radio">
                            <input type="radio" name="radio1" id="lighttheme" value="light" checked="">
                            <label for="lighttheme">Light Mode</label>
                        </div>
                        <div class="radio mb-0">
                            <input type="radio" name="radio1" id="darktheme" value="dark">
                            <label for="darktheme">Dark Mode</label>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Color Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>                   
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush" class="active"><div class="blush"></div></li>
                    </ul>                    
                </div>
                
            </div>                
        </div>       
    </div>
</aside>