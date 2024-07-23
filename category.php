<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning | All Courses</title>
    <link rel='stylesheet' href="css/style.css" />
    <script src="https://kit.fontawesome.com/87438ec136.js" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    
</head>
<body>
    <?php
        include("inc/header.php");
    ?>
    <div id='wrap'>
        <div id='cat_bodyleft'>
            <h2>Course</h2>
            <ul>
            <?php echo cat_menu() ?>
            </ul>
            <h2>Sub Courses</h2>
            <ul>
            <?php echo cat_sub_menu() ?>
            </ul>
        </div>
        <div id='cat_bodyright'>
        <div id='crumb'>  
            <span><a href='index.php'>Home</a></span><b> > </b>
            <span>Development</span>
         </div>
         <h2>Web Development <span><a href='#'><i class="fas fa-arrow-right"></i></a></span></h2>
         <ul>
        <li>
            <a href="course_details.php">
                <img src="imgs/course/course1.jpg" alt="image not loaded">
                <h3>Java Full Course</h3>
                <h4>Price : Rs.199</h4>
                <h5>Teacher: Rajendra Kumar Panday </h5>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="imgs/course/course1.jpg" alt="image not loaded">
                <h3>Java Full Course</h3>
                <h4>Price : Rs.199</h4>
                <h5>Teacher: Rajendra Kumar Panday </h5>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="imgs/course/course1.jpg" alt="image not loaded">
                <h3>Java Full Course</h3>
                <h4>Price : Rs.199</h4>
                <h5>Teacher: Rajendra Kumar Panday </h5>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="imgs/course/course1.jpg" alt="image not loaded">
                <h3>Java Full Course</h3>
                <h4>Price : Rs.199</h4>
                <h5>Teacher: Rajendra Kumar Panday </h5>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="imgs/course/course1.jpg" alt="image not loaded">
                <h3>Java Full Course</h3>
                <h4>Price : Rs.199</h4>
                <h5>Teacher: Rajendra Kumar Panday </h5>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="imgs/course/course1.jpg" alt="image not loaded">
                <h3>Java Full Course</h3>
                <h4>Price : Rs.199</h4>
                <h5>Teacher: Rajendra Kumar Panday </h5>
            </a>
        </li><br clear="all"/>
    </ul>
        </div><br clear="all"/>
    <?php include("inc/footer.php"); ?>
    </div>
</body>
</html>