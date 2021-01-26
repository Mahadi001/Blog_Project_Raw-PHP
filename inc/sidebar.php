      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                <?php 
                  $query = "SELECT * FROM category_tbl";
                  $categories = $db->read_data($query);
                  if($categories){
                    while($category = $categories->fetch_assoc()){ 
                ?>
                  <li>
                    <a href="categories.php?category=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a>
                  </li>
                  <?php 
                    }
                  }
                  else{
                    echo "<li>No Category Found !!!</li>";
                  }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>