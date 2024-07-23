<?php
// fetch link from database
function head_link()
{
    include("inc/db.php");
    $get_link = $con->prepare("select * from contact");
    $get_link->setFetchMode(PDO::FETCH_ASSOC);
    $get_link->execute();
    $row = $get_link->fetch();
    // Make links
    echo "<ul> 
      <li><a href='https://www.facebook.com/" . $row['fb'] . "' target='_blank'><i class='fab fa-facebook'></i></a></li>
      <li><a href='https://www.twitter.com/" . $row['tw'] . "' target='_blank'><i class='fab fa-twitter'></i></a></li>
      <li><a href='https://www.google.com/" . $row['gp'] . "' target='_blank'><i class='fab fa-google-plus'></i></a></li>
      <li><a href='https://www.youtube.com/" . $row['yt'] . "' target='_blank'><i class='fab fa-youtube'></i></a></li>
      <li><a href='https://www.linkedin.com/" . $row['link'] . "' target='_blank'><i class='fab fa-linkedin'></i></a></li>
    </ul>";
}
// course menu's fetch from database
function cat_menu()
{
    include("inc/db.php");
    $get_cat = $con->prepare("select * from cat");
    $get_cat->setFetchMode(PDO::FETCH_ASSOC);
    $get_cat->execute();
    while ($row = $get_cat->fetch()) :
        echo "<li><a href='courses.php'>" . $row['cat_icon'] . " " . $row['cat_name'] . "</a></li> ";
    endwhile;
}
// sub course menu's fetch from database
function cat_sub_menu()
{
    include("inc/db.php");
    $get_cat = $con->prepare("select * from sub_cat");
    $get_cat->setFetchMOde(PDO::FETCH_ASSOC);
    $get_cat->execute();
    $i = 1;
    while ($row = $get_cat->fetch()) :
        echo "<li><a href='courses.php'>" . $row['sub_cat_name'] . "</a></li> ";
    endwhile;
}
// courses are fetch from database
function home_cat()
{
    include("inc/db.php");

    $get_cat = $con->prepare("select * from cat");
    $get_cat->setFetchMode(PDO::FETCH_ASSOC);
    $get_cat->execute();
    while ($row = $get_cat->fetch()) :
        echo "<li>
            <a href='courses.php'>
                <center>
               " . $row['cat_icon'] . "
                <h4>" . $row['cat_name'] . "</h4>
                <p>24</p>
                </center>
            </a>
        </li> ";
    endwhile;
}

// fetch cart section
function cart()
{
    include("inc/db.php");
    echo "<div id='wrap'>  
         <div id='crumb'>  
            <span><a href='index.php'>Home</a></span><b> > </b>
            <span>My Cart</span>
         </div>
         <div id='cart'> 
        <table cellspacing='0'> 
            <tr>
                <th id='cart_f'>Name</th>
                <th>Instructor</th>
                <th>Language</th>
                <th>Lactures</th>
                <th>Price</th>
            </tr>
            <tr>
                <td id='cart_f'>
                    <img src='imgs/course/course1.jpg' />
                    <span><a href='https://www.youtube.com/watch?v=IsLyduxZ9sc&list=PLX9Zi6XTqOKQ7TdRz0QynGIKuMV9Q2H8E'>JAVA Programming</a></span>
                    <b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>    
                </td>
                <td> Sourabh Shukla</td>
                <td> English</td>
                <td> 75</td>
                <td> Free</td>
            </tr>
            <tr>
                <td id='cart_f'>
                    <img src='imgs/course/course2.jpeg' />
                    <span><a href='https://www.youtube.com/watch?v=aqvDTCpNRek&list=PLu0W_9lII9agICnT8t4iYVSZ3eykIAOME'>Python Programming</a></span>
                    <b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>    
                </td>
                <td> Harry</td>
                <td> English</td>
                <td> 129</td>
                <td> Free</td>
            </tr>
            <tr>
                <td id='cart_f'>
                    <img src='imgs/course/course3.jpg' />
                    <span><a href='https://www.youtube.com/playlist?list=PLdo5W4Nhv31a8UcMN9-35ghv8qyFWD9_S'>C Programming</a></span>
                    <b><a href='#'><i class='fas fa-trash-alt'></i>Remove</a></b>    
                </td>
                <td> Jenny</td>
                <td> English</td>
                <td> 107</td>
                <td> Free</td>
            </tr>
            <tr>
                <td>
                    <button><a href='index.php'>Keep Shoping</a></button>
                    <button><a href='#'>Chckout</a></button>
                </td>
                <td></td><td></td>
                <td style='text-align:right'>Amount Payble :</td>
                <td>00</td>
            </tr>
        </table>
    </div><br clear='all' />
    </div>";
}
function signup()
{
    require('admin/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
        <form class="form" action="" method="post">
            <center>
                <h3> <i class="fas fa-user-plus"></i></h3>
                <h4>Signup</h4>
            </center>
            <div id='input_f'>
                <i class="fas fa-user"></i>
                <input type="text" class="login-input" name="username" placeholder="Enter Your Name" required />
            </div>
            <div id='input_f'>
                <i class="fas fa-envelope"></i>
                <input type="text" class="login-input" name="email" placeholder="Enter Your Email" />
            </div>
            <div id='input_f'>
                <i class="fas fa-phone"></i>
                <input type="text" name="s_phn" placeholder="Enter Your Phone No." />
            </div>
            <div id='input_f'>
                <i class="fas fa-lock"></i>
                <input type="password" class="login-input" name="password" placeholder="Enter Your Password" />
            </div>
            <div id='input_f'>
                <i class="fas fa-lock"></i>
                <input type="password" name="s_pass2" placeholder="ReEnter Your Password" />
            </div>
            <center><input type="submit" name="submit" value="Register" class="login-button"></center>
        </form>

        <?php
    }
    function login()
    {
        require('admin/db.php');
        session_start();
        // When form submitted, check and create user session.
        if (isset($_POST['username'])) {
            $username = stripslashes($_REQUEST['username']);    // removes backslashes
            $username = mysqli_real_escape_string($con, $username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con, $password);
            // Check user is exist in the database
            $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
            $result = mysqli_query($con, $query) or die();
            $rows = mysqli_num_rows($result);
            if ($rows == 1) {
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: admin/index.php");
            } else {
                echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                   <p class='link'>Click here to <a href='admin/inc/login.php'>Login</a> again.</p>
                  </div>";
            }
        } else {
        ?>
            <form class="form" method="post"> name="login">
                <center>
                    <h3> <i class="fas fa-user"></i></h3>
                    <h4>Login</h4>
                </center>
                <div id='input_f'>
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="login-input" name="username" placeholder="Enter User Name: " autofocus="true" />
                </div>
                <div id='input_f'>
                    <i class="fas fa-lock"></i>
                    <input type="password" class="login-input" name="password" placeholder="Enter User Password" />
                </div>
                <h5>Forget Password</h5><br clear="all" />
                <center><input type="submit" value="Login" name="submit" class="login-button" /> </center>
                <!-- <center><button name="login">Login</button></center> -->
            </form>
            <!-- <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
         </form> -->
<?php
        }
    }
}
