
<?php 
require 'inc/functions.php';
include 'inc/header.php';
?>


<main role="main">
  
  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Project List</h1>
    </div>

    <div class="actions-item">
      <a class="actions-link" href="project.php"><i class="fas fa-folder-open  fa-7x"></i><p>Add Project</p></a>
    </div>

    <div class="form-container">
      <ul class="items"></ul>
        <?php
          foreach(get_project_list() as $item){
                  echo "<li>"  . $item['title'] .  "</li>";
          }
        ?>        
      </ul>
    </div>


  </section>
</main>

<?php include("inc/footer.php"); ?>
