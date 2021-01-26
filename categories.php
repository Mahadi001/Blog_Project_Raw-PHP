<?php include "inc/header.php";?>
<?php 

  $post_per_page = 3;

  if(!isset($_GET['category']) || $_GET['category'] == NULL){
    header("Location:404.php");
  }
  else{
    $cat_id = $_GET['category'];
  }
  $query = "SELECT * FROM post_tbl where cat_id = $cat_id";
  $courses = $db->read_data($query);
    
?>

  <!-- Breadcrumb -->
  <ol class="breadcrumb">
    <div class="container">
      <ul class="flex m-0 p-0">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Courses</li>
      </ul> 
    </div>
  </ol>
 

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="mt-4 mb-3">Courses</h1>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <?php 
          if($courses) {
            while($course = $courses->fetch_assoc()){
        ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="admin/upload/<?php echo $course['image'];?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $course['title']; ?></h2>
            <p class="card-text"><?php echo $formatter->strimText($course['body']); ?></p>
            <a href="course.php?id=<?php echo $course['id']; ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo $formatter->formatDate($course['date']);?> by
            <a href="#"><?php echo $course['author'];?></a>
          </div>
        </div>
        <?php 
            } #end of while loop    
        ?>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <?php echo "<li class='page-item'><a class='page-link' href='categories.php?category=1'>&larr; First Page</a></li>";?>
          <?php 
          $query  = "SELECT * FROM post_tbl where cat_id = $cat_id";
          $result = $db->read_data($query);
          $total_rows = mysqli_num_rows($result);
          $total_pages = ceil($total_rows / $post_per_page);
          for($i = 1; $i <= $total_pages; $i++){
            echo "<li class='page-item'><a class='page-link' href='categories.php?category=".$i."'>".$i."</a></li>";
          }
          ?>
          <?php echo "<li class='page-item'><a class='page-link' href='categories.php?category=".$total_pages."'>Last Page &rarr;</a></li>"?> 
        </ul>
        <?php 
          }   #end of if   
          else{
            header("Location:404.php");
          }
        ?>
      </div>
    <?php include "inc/sidebar.php"; ?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<?php include "inc/footer.php"; ?>