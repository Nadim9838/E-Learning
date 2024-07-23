<?php include("inc/function.php"); ?>
<!-- create header section -->
<div id='header'>
    <div id='up_head'>
        <div id='link'>
          <?php echo head_link(); ?>
        </div>
        <div id="date">
            <p><?php echo date(' l, d F Y '); ?></p>
        </div> 
        <div id='slog'>
            <p>E-Learning Portal : By Nadim Ahmad</p>
        </div>
        <div id='title'>
        <img src='imgs/course/au_img.png' />
        <h4><a href='index.php'>UNIVERSITY<br>OF<br>ALLAHABAD</a></h4>    
        </div>
        <div id="menu">
        <h2><i class="fas fa-bars"></i></h2>
        <?php include("inc/cat_menu.php"); ?>
        </div>
        <div id='head_search'>
            <form action="course_details.php" method="post" enctype="multipart/form-data">
           <input type="search" name="query" placeholder="Search Courses From Here" />
           <button name="search"><i class="fas fa-search"></i></button></a>
            </form>
        </div>
        <div id='head_cart'>
            <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>3</span></a>
        </div>
        <div id='head_login'> 
            <h4><i class="far fa-user"></i>  Login</h4>
            <form method="post">
               <center>
                   <h3> <i class="fas fa-user"></i></h3>
                   <h4>Login</h4>
                </center>
                <div id='input_f'>
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="u_email" placeholder="Enter User Email" />
                </div>
                <div id='input_f'>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="u_pass" placeholder="Enter User Password" />
                </div>
                <h5>Forget Password</h5><br clear="all" />
                <center><button name="login">Login</button></center>
            </form>
        </div>

        <div id='head_signup'> 
            <h4><i class="fas fa-user-plus"></i>  Signup</h4>
            <?php echo signup(); ?>
            
        </div>
    </div>
</div>