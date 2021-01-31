      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <form action="search.php" method="get">
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search for...">
                <span class="input-group-append">
                  <input class="btn btn-secondary" type="submit" name="submit" value="Search">
                </span>
              </div>
            </div>
          </div>
        </form>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-12">
                <?php 
                  $query = "SELECT * FROM category_tbl";
                  $categories = $db->read_data($query);
                  if($categories){
                    while($category = $categories->fetch_assoc()){ 
                ?>
                  <a class="mr-2" href="categories.php?category=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                  <?php 
                    }
                  }
                  else{
                    echo "<li>No Category Found !!!</li>";
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Latest Courses</h5>
          <div class="card-body">
            <!-- Latest Posts -->
            <?php 
              $query = "SELECT * FROM post_tbl ORDER BY ID DESC LIMIT 3";
              $courses = $db->read_data($query);
              if($courses){
                while($course = $courses->fetch_assoc()){       
            ?>
            <div class="card mb-4">
              <a href="course.php?id=<?php echo $course['id']; ?>"><img class="card-img-top" src="admin/upload/<?php echo $course['image']; ?>" alt="Card image cap"></a>
              <div class="card-body">
                <h2 class="card-title"><a href="course.php?id=<?php echo $course['id']; ?>"><?php echo $course['title']; ?></a></h2>
                <p class="card-text"><?php echo $formatter->strimText($course['body'], 60); ?></p>
              </div>
            </div>
            <?php 
                }
              }else{
                echo "No Latest Post !!!";
              }
            ?>
          </div>
        </div>

      </div>