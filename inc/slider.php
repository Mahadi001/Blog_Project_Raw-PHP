  <!-- Header -->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Sliders - Set the background image for this slide in the line below -->
        <?php
          $i = 1; 
          $query = "SELECT * FROM slider_tbl";
          $sliders = $db->read_data($query);
          if($sliders){
            while($slider = $sliders->fetch_assoc()){
              $item_class = ($i == 1) ? 'carousel-item active' : 'carousel-item'; 
        ?>
        <div class="<?php echo $item_class; ?>" style="background-image: url('<?php echo $slider['image']?>')">
          <div class=" d-none d-md-block">
            <div class="hero">
              <h1><?php echo $slider['title'];?></h3>
              <p><?php echo $slider['description'];?></p>
            </div>
          </div>
        </div>
        <?php  
          $i++;  
            }
          }else{
            echo "No Slider Found!";
          }
        ?>
      </div>
      
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>