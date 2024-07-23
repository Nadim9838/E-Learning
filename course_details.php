<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning | Course_details</title>
    <link rel='stylesheet' href="css/style.css" />
    <script src="https://kit.fontawesome.com/87438ec136.js" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    
</head>
<body>
    <?php include("inc/header.php"); ?>
    <div id='wrap'>
    <?php
     
 // Course detail section

    include("inc/db.php");
    $get_link = $con->prepare("select * from contact");
    $get_link->setFetchMode(PDO::FETCH_ASSOC);
    $get_link->execute();
    $row = $get_link->fetch();

    include("inc/db.php");
    echo "<div id='crumb'>  
        <span><a href='index.php'>Home</a></span><b> > </b>
        <span>Advance Search</span>
    </div>
    <div id='course_left'>
    <img src='imgs/course/course2.jpeg' />
        <div id='course_share'>
        <div id='fb'><a href='https://www.facebook.com/" . $row['fb'] . "' target='_blank'><i class='fab fa-facebook-f'> Share</i></a></div>
        <div id='gp'><a href='https://www.google.com/" . $row['gp'] . "' target='_blank'><i class='fab fa-google-plus'> Share</i></a></div>
        <div id='tw'><a href='https://www.twitter.com/" . $row['tw'] . "' target='_blank'><i class='fab fa-twitter'> Share</i></a></div>
        <div id='w'><a href='https://www.whatsapp.com/' target='_blank'><i class='fab fa-whatsapp'> Share</i></a></div>
        </div>
    </div>
    <div id='course_right'>
    <h2>Python Programming</h2>
    <table>
        <tr>
            <td>Instructor</td>
            <td>Nadim Ahmad</td>
        </tr>
        <tr>
            <td>Enrolment By</td>
            <td>10 Student</td>
        </tr>
        <tr>
            <td>Level</td>
            <td>Expert Level</td>
        </tr>
        <tr>
            <td>Language</td>
            <td>English</td>
        </tr>
        <tr>
            <td>Lecture</td>
            <td>52</td>
        </tr>
    </table>
    <div id='price'>
        <h3>Price : Rs.199 <span>50%</span> <b>70%</b> Saving Rs.140 </h3>
    </div>
    <form>
        <center>
            <button><i class='fas fa-shopping-cart'></i> Add To Cart</button>
            <div><a href='#'><i class='fas fa-bolt'></i> Enroll Now</a></div>
        </center>
    </form>
    </div><br clear='all' />
    <div id='c_desc'>
        <h2>Course Details</h2>
        <p>This is full python course for  bigginers to expert level</p>
        <h2>What will i learn ?</h2>
        <p>At the end of this course you will able to solve any problem with python</p>
        <h2>Before Starting</h2>
        <p>You must knowledge the basics of programming</p>
        <h2>Instructor</h2>
         <img src='imgs/course/nadim2.jpg' />
            <p> I am Python Programmer</p>
            <div id='course_share'>
            <div id='fb'><a href='https://www.facebook.com/" . $row['fb'] . "' target='_blank'><i class='fab fa-facebook-f'> Share</i></a></div>
            <div id='gp'><a href='https://www.google.com/" . $row['gp'] . "' target='_blank'><i class='fab fa-google-plus'> Share</i></a></div>
            <div id='tw'><a href='https://www.twitter.com/" . $row['tw'] . "' target='_blank'><i class='fab fa-twitter'> Share</i></a></div>
            <div id='w'><a href='https://www.whatsapp.com/' target='_blank'><i class='fab fa-whatsapp'> Share</i></a></div>
        </div><br clear='all' />
        <h2>Curriculum</h2>
        <ul>
            <li><i class='fas fa-video'></i><span>1. Introduction</span></li>
            <li><i class='fas fa-video'></i><span>2. Quick Overview</span></li>
            <li><i class='fas fa-video'></i><span>3. Define Algorithm</span></li>
            <li><i class='fas fa-video'></i><span>4. Creating Programs </span></li>
            <li><i class='fas fa-video'></i><span>5. Quiz</span></li>
        </ul>
    </div>
    <div id='c_rel'>
    <h2>Related Courses</h2>
    <ul>
        <li>
            <a href='#'>
                <img src='imgs/course/course1.jpg' />
                <p>Learn JAVA Programming</p>
            </a><br clear='all' />
        </li>
        <li>
            <a href='#'>
                <img src='imgs/course/course2.jpeg' />
                <p>Learn Python Programming</p>
            </a><br clear='all' />
        </li>
        <li>
            <a href='#'>
                <img src='imgs/course/course3.jpg' />
                <p>Learn C Programming</p>
            </a><br clear='all' />
        </li>
        <li>
            <a href='#'>
                <img src='imgs/course/course4.jpg' />
                <p>Learn C++ Programming</p>
            </a><br clear='all' />
        </li>
        <li>
            <a href='#'>
                <img src='imgs/course/course5.png' />
                <p>Learn Data Structure</p>
            </a><br clear='all' />
        </li>
    </ul>
    </div><br clear='all' />";

        include("inc/footer.php");
    ?>
        </div>
</body>
</html>