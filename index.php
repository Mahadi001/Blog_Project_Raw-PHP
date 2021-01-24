<?php include "inc/header.php";?>
<?php include "inc/slider.php"; ?>
<?php 

$query = "SELECT * FROM post_tbl limit 9";
$all_courses = $db->read_data($query);

?>

  <!-- Page Content -->
  <div class="container">

    <h1 class="text-center my-5">Welcome to Learning Norms</h1>

    <!-- Marketing Icons Section -->
    <div class="row mb-5">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header text-center">Free Courses</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header text-center">Paid Couses</h4>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
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
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
          </div>
          <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <h2 class="text-center">Available Courses</h2>

    <div class="row mt-5">
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
        <h2>Modern Business Features</h2>
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li>
            <strong>Bootstrap v4</strong>
          </li>
          <li>jQuery</li>
          <li>Font Awesome</li>
          <li>Working contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
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
        <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
      </div>
    </div>

  </div>
  <!-- /.container -->


<?php include "inc/footer.php"; ?>