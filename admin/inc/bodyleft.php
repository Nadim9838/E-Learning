<div id='bodyleft'>
    <h3>Categories Management</h3>
    <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="index.php?cat">View Categories</a></li>
        <li><a href="index.php?sub_cat">View Sub Categories</a></li>
        <li><a href="index.php?lang">View Languages</a></li>
    </ul>
    <h3>Courses Management</h3>  
    <ul>
        <li><a href='teacher.php'>Active Courses</a></li>
        <li><a href='teacher.php'>Panding Courses</a></li>
        <li><a href='teacher.php'>Unpublish Courses</a></li>
        <li><a href='teacher.php'>Advance Course Searching</a></li>
    </ul>
    <h3>User Management</h3>
    <ul>
        <li><a href='#'>View All Students</a></li>
        <li><a href='#'>View All Teachers</a></li>
        <li><a href='#'> Advance User Search</a></li>
    </ul>
    <h3>Pages Management</h3>
    <ul>
        <li><a href="index.php?terms">Terms & Conditions page</a></li>
        <li><a href="index.php?contact">Contact US Page</a></li>
        <li><a href="index.php?about">About Us Page</a></li>
        <li><a href="index.php?faqs">FAQ Pages</a></li>
        <li><a href='#'>Edit Slider</a></li>
    </ul>
</div>
<?php
if(isset($_GET['cat'])){
    include("cat.php");
}
if(isset($_GET['lang'])){
    include("lang.php");
}
if(isset($_GET['sub_cat'])){
    include("sub_cat.php");
}
if(isset($_GET['terms'])){
    include("terms.php");
}
if(isset($_GET['contact'])){
    include("contact.php");
}
if(isset($_GET['faqs'])){
    include("faqs.php");
}
if(isset($_GET['about'])){
    include("about.php");
    
if(isset($_GET['log'])){
        include("log.php");
    }
}
?>