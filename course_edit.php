<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning | Home</title>
    <link rel='stylesheet' href="css/style.css" />
    <script src="https://kit.fontawesome.com/87438ec136.js" crossorigin="anonymous"></script>
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    
</head>
<body>
    <?php
        include("inc/header.php");
    ?>
    <div id='wrap'>
        <div id='c_edit_l'>
            <h1>Course Management</h1>
            <ul>
                <li><a href='#'><i class="fas fa-user"></i>Title And Image</a></li>
                <li><a href='#'><i class="fas fa-user"></i>Course Goal</a></li>
                <li><a href='#'><i class="fas fa-user"></i>Course Details</a></li>
                <li><a href='#'><i class="fas fa-user"></i>Course Price</a></li>
                <li><a href='#'><i class="fas fa-user"></i>Curriculum</a></li>
            </ul>
            <button>Submit For Review</button>
        </div>
        <div id='c_edit_r'>
            <div id='crumb'>  
                <span><a href='index.php'>Home</a></span><b> > </b>
                <span>Course Edit</span>
            </div>
            <h2>Course Title</h2>
            <form method='post'>
                <div id='c_edit_input'>
                    <input type='text' name='c_name' placeholder='Enter Course Name' />
                    <p>100</p>
                </div><br clear='all' />
                <h2>Course Image</h2>
                <img src='imgs/course/course2
                .jpeg' />
                <span>Learn Python Programming Course Starting to end</span>
                    <input id='c_img' type='file' name='c_img'/>
                    <button>Save</button>
            </form>
        </div>
    </div>
</body>
</html>