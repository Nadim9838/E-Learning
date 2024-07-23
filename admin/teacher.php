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
    <div id='crumb'>  
            <span><a href='index.php'>Home</a></span><b> > </b>
            <span>Instructor Dashboard</span>
         </div>
         <div id="dash">
            <h1>Instructor Dashboard</h1>
            <form method="post">
                <div id="c_form">
                    <input type="text" name="c_name" placeholder="Enter Course Name Here" />
                    <button name="add_course">Create Course</button>
                </div>
            </form> <br clear="all" />
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <th></th>
                    <th>Course Type</th>
                    <th>Course Price</th>
                    <th>Course Status</th>
                    <th>Enroll By</th>
                    <th> Total Earn</th>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/course/course1.jpg" /></a></td>
                    <td>
                        <span>
                            <a href="#">Learn JAVA Programming</a>
                        </span><br /><br />
                        <a href="#">Edit</a>
                    </td>
                    <td>Free</td>
                    <td>Rs. 199</td>
                    <td>Active</td>
                    <td>5</td>
                    <td>199</td>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/course/course2.jpeg" /></a></td>
                    <td>
                        <span>
                            <a href="#">Learn Python Programming</a>
                        </span><br /><br />
                        <a href="#">Edit</a>
                    </td>
                    <td>Free</td>
                    <td>Rs. 199</td>
                    <td>Active</td>
                    <td>5</td>
                    <td>199</td>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/course/course3.jpg" /></a></td>
                    <td>
                        <span>
                            <a href="#">Learn C Programming</a>
                        </span><br /><br />
                        <a href="#">Edit</a>
                    </td>
                    <td>Free</td>
                    <td>Rs. 199</td>
                    <td>Active</td>
                    <td>5</td>
                    <td>199</td>
                </tr>
                <tr>
                    <td><a href="#"><img src="imgs/course/course4.jpg" /></a></td>
                    <td>
                        <span>
                            <a href="#">Learn C++ Programming</a>
                        </span><br /><br />
                        <a href="#">Edit</a>
                    </td>
                    <td>Free</td>
                    <td>Rs. 199</td>
                    <td>Active</td>
                    <td>5</td>
                    <td>199</td>
                </tr>
            </table>
         </div>
    </div>
</body>
</html>