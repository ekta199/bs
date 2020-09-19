<?php
include "navbar.php"
?>
<?php
include "pic.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>second page</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/sp.css">
</head>
<body>
<div class="container mt-5 mb-5"><!--container start-->
	<div class="row"><!--row start-->
		<div class="col-md-3" ><!--col3 start-->
			<ul class="list-group list-group-flush" style="color: #e67a00;">
  <li class="list-group-item text-center"><div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01" style=" background-color:white; color:#e67a00;">Search</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" style="color:#e67a00;">
    <option selected>Choose School....</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
</div>
</li>
  <li class="list-group-item text-center">C.B.SE</li>
  <li class="list-group-item text-center">I.C.S.E</li>
  <li class="list-group-item text-center">C.C.E</li>
  <li class="list-group-item text-center">State Board</li>
</ul>
		</div><!--col 3 close-->
		<div class="col-md-9"><!--col9 start-->
			<div class="card mb-3" style="max-width: 800px;"><!--1-->
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/saint.gif" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Sant Kabir School</h5>
        <p class="card-text">Sant Kabir was established way back in 1985 as a modest attempt to render quality education, today it has grown to be a school with great repute and has nearly 7000 students and more than 300 teachers.
The school offers both CBSE and Gujarat state syllabus curriculum. It has classes from Kindergarten all the way to class XII.

Large airy classrooms, well equipped labs and a skilled staff, make this school a worthy one for your child!</p>
        <p class="card-text"><small class="text-muted"><span>Address:</span>Behind H.L College of Commerce,
Navrangpura, Ahmedabad, Gujarat 380009 <a href="about.php">...Know more</a> </small></p>
      </div>
    </div>
  </div>
</div><!--1 close-->
<div class="card mb-3" style="max-width: 800px;"><!--2-->
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/mahatma.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Mahatma Gandhi International School</h5>
        <p class="card-text">This is another top schools in Ahmedabad that is named after perhaps the most famous Gujarati ever. And, true its name, the quality of education rendered here is of international standards.
The faculty is drawn from diverse and eclectic backgrounds. What is also interesting about this school is that it uses the concept of learning spaces to organize its physical buildings and structures. This is oriented towards more wholesome teaching that can take place not just in the classroom, but also in all the other spaces where students interact with the teaching faculty.</p>
        <p class="card-text"><small class="text-muted"><span>Address:</span>Sheth Motilal Hirabhai Bhavan,
Opp. Induben Khakhrawala, Mithakali,
Navrangpura, Ahmedabad, Gujarat 380006</small></p>
      </div>
    </div>
  </div>
</div><!--2 close-->
<div class="card mb-3" style="max-width: 800px;"><!--3-->
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="img/agrsen.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Maharaja Agrasen Vidyalaya</h5>
        <p class="card-text">This school is a part of the Maharaj Agrasen group of educational institutions that are spread throughout Uttar Pradesh – and especially in Lucknow. The reputation of the group schools in Uttar Pradesh has followed the branch of this school group in Ahmedabad.
This school has also made a reputation for itself for being a school that gives equal importance to academics as well as extra-curricular activities such as singing, dance, tennis, karate, etc.</p>
        <p class="card-text"><small class="text-muted"><span>Address:</span>Near Sterling Hospital, Gurukul Road,
Memnagar, Ahmedabad, Gujarat 380052</small></p>
      </div>
    </div>
  </div>
</div><!--3 close-->
		</div><!--col9 close-->
	</div><!--row close-->
</div><!--container close-->
<?php
include "footer.php";
?>
</body>
</html>