<?php include "inc/header.php";?>
<?php 

if(!isset($_GET['id']) || $_GET['id'] == NULL){
  header("Location:404.php");
}
else{
  $id = $_GET['id'];
}
$query = "SELECT * FROM post_tbl where id = $id";
$courses = $db->read_data($query);

?>

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <div class="container">
      <ul class="flex m-0 p-0">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Course</li>
      </ul> 
    </div>
  </ol>

<?php 
  if($courses){
  while($course = $courses->fetch_assoc()){ 
?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="mt-4 mb-3"><?php echo $course['title']; ?>
      <small>by
        <a href="#"><?php echo $course['author']; ?></a>
      </small>
    </h1>


    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="admin/upload/<?php echo $course['image'];?>" alt="<?php echo $course['title'];?>" alt="">

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $formatter->formatDate($course['date']);?></p>

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $course['body']; ?></p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>

        <blockquote class="blockquote">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">Someone famous in
            <cite title="Source Title">Source Title</cite>
          </footer>
        </blockquote>

        <div class="text-center">
          <a href="<?php echo $course['link'];?>" target='_blank' class="btn btn-primary my-5">Enroll Now</a>
        </div>

      </div>

      <?php include "inc/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php 
  }
}
else{
  header("Location:404.php");
}
?>
<?php include "inc/footer.php"; ?>