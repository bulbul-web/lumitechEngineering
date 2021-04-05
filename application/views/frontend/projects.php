<!-- MAIN -->
<main role="main">
      <!-- Content -->
      <article>
        <header class="section background-primary text-center">
            <h1 class="text-white margin-bottom-0 text-size-50 text-thin text-line-height-1">All Projects</h1>
        </header>
        <div class="section background-white"> 
          <div class="line">
            
            <div class="margin text-center">

              <?php foreach ($allprojects as $projects): ?>
                  <div class="s-12 m-12 l-4 min-height-400px margin-bottom">
                      <div class="padding-2x custom-padding-2x block-bordered border-radius">
                      <img class="project-list-img" src="<?php echo base_url().$projects->project_image;?>" />
                      <h2 class="text-thin"><?php echo $projects->title;?></h2>
                      <p class="margin-bottom-30"><?php echo substr($projects->details, 0, 50);?></p>
                      <a class="button border-radius background-primary text-size-12 text-white text-strong" href="<?php echo base_url().'project-details/'.$projects->id;?>">GET MORE INFO</a>
                      </div>
                  </div>
              <?php endforeach;?>



            </div>
            
          </div>
          
        </div> 
      </article>
    </main>