<?php
require "./HasComment.php";
require "./User.php";
require "./Student.php";
require "./admin.php";
require "./DB.php";
// require "./Mail.php";
// require "./Mailables.php";
require "./Course.php";


$firstStudent = new Student("iseMuse");
echo $firstStudent->getFullName();
echo "<br/>";
echo $firstStudent->is_verified();
echo "<br/>";

echo $firstStudent->getUserName();
echo "<pre>";
$nextStudent = new Student("nextStudent", "developer");
echo $nextStudent->getFullName();
echo "<br/>";
echo $nextStudent->verify();
echo "<br/>";
echo $nextStudent->getUserName();
echo "<pre>";
echo "<br/>";
echo $firstStudent->comments("students");

echo "<h2>Admin Here</h2>";


$admin1 = new Admin("Daa`uud", "hussein", "Ahmed");
echo $admin1->getFullName();
echo "<pre>";
echo $admin1->givePermission("show_courses");
echo $admin1->getPermissions();
echo "</pre>";
echo $admin1->comments("admin");
echo "<hr>";
// $query = new DB();
// echo $query->find(5);

echo DB::$driver;
echo "<pre>";
echo DB::table("dhameys")->find(6);
echo "<hr>";

// $gmail = new Mail();
$course = new Course();
echo $course->comments();
