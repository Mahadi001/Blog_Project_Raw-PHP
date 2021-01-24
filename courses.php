<?php include "inc/header.php";?>
<?php 
  $db = new Database(); 
  $query = "SELECT * FROM post_tbl limit 3";
  $read_values = $db->read_data($query);
  $formatter = new Format();
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
        if($read_values) {
          while($values = $read_values->fetch_assoc()){
      ?>
        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="admin/upload/<?php echo $values['image'];?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $values['title']; ?></h2>
            <p class="card-text"><?php echo $formatter->strimText($values['body']); ?></p>
            <a href="course.php?id=<?php echo $values['id']; ?>" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo $formatter->formatDate($values['date']);?> by
            <a href="#"><?php echo $values['author'];?></a>
          </div>
        </div>
      <?php 
          } #end of while loop    
      ?>
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <?php echo "<li class='page-item'><a class='page-link' href='#'>&larr; Older</a></li>";?>
          <?php echo "<li class='page-item'><a class='page-link' href='#'>1</a></li>";?>
          <?php echo "<li class='page-item'><a class='page-link' href='#'>2</a></li>";?>
          <?php echo "<li class='page-item disabled'><a class='page-link' href='#'>Newer &rarr;</a></li>"?> 
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