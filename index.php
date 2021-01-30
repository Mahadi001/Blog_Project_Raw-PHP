<?php include "inc/header.php";?>
<?php include "inc/slider.php"; ?>
<?php 

$query = "SELECT * FROM post_tbl limit 9";
$all_courses = $db->read_data($query);

?>

  <!-- Page Content -->
  <div class="container">

    <h1 class="text-center my-5 underline">Welcome to Learning Norms</h1>

    <!-- Marketing Icons Section -->
    <div class="row mb-5">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header text-center">Free Courses</h4>
          <div class="card-body">
            <p class="card-text">Enroll to any of these free courses today!</p>
          </div>
          <div class="card-footer text-center">
            <a href="courses.php" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header text-center">Paid Couses</h4>
          <div class="card-body">
            <p class="card-text">Coming Soon...</p>
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header text-center">Request Courses</h4>
          <div class="card-body">
            <p class="card-text">Coming Soon...</p>
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2 class="text-center underline my-5">Available Courses</h2>

    <div class="row">
    <?php 
    if($all_courses){
      while($courses = $all_courses->fetch_assoc()){      
    ?>
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="course.php?id=<?php echo $courses['id']; ?>"><img class="card-img-top" src="admin/upload/<?php echo $courses['image'];?>" alt="<?php echo $courses['title'];?>"></a>
          <div class="card-body">
            <h4 class="card-title text-center">
              <a href="course.php?id=<?php echo $courses['id']; ?>"><?php echo $courses['title'];?></a>
            </h4>
            <p class="card-text"><?php echo $formatter->strimText($courses['body'], 100); ?></p>
          </div>
        </div>
      </div>
    
    <?php 
        }
      }
      else{
        header("Location:404.php");
      }
    ?>
    </div>
    <!-- /.row -->

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <h2>Learn all in one place!</h2>
        <p>All the courses are focused on helping the students struggling in Computer Science field!</p>
        <ul>
          <li>
            <strong>PHP</strong>
          </li>
          <li>
            <strong>Laravel</strong>
          </li>
          <li>
            <strong>C++</strong>
          </li>
          <li>
            <strong>Python</strong>
          </li>
          <li>
            <strong>Datastructure and Algorithm</strong>
          </li>
          <li>
            <strong>Many more....</strong>
          </li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="images/banner.jpg" alt="">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="courses.php">Check out the courses!</a>
      </div>
    </div>

  </div>
  <!-- /.container -->


<?php include "inc/footer.php"; ?>