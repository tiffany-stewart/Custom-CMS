<?php include "includes/admin_header.php"; ?>
<?php include "functions.php"; ?>

<?php ob_start() ?>

    <div id="wrapper">

    <?php include "includes/admin_navigation.php" ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            The Great Bowery Admin
                            <!-- <small>author</small> -->
                        </h3>
                        <div class="col-xs-6">

                          <?php insert_categories(); ?>


                          <form action="" method="post">

                            <div class="form-group">
                              <label for="cat_title">Category Title</label>
                              <input class="form-control" type="text" name="cat_title">
                            </div>

                            <div class="form-group">
                              <input class="btn btn-success" type="submit" name="submit" value="Add Category">
                            </div>

                          </form>

                          <!-- //////////////////////////////// -->

                          <form action="" method="post">

                            <!-- <div class="form-group">
                              <label for="cat_title">Edit Category</label>

                              <?php

                              if(isset($_GET['edit'])) {
                                $cat_id = $_GET['edit'];

                                $query = "SELECT * FROM categories WHERE cat_id = $cat_id";
                                $select_categories_id = mysqli_query($connection, $query);

                                while($row = mysqli_fetch_assoc($select_categories_id)) {
                                  $cat_id = $row['cat_id'];
                                  $cat_title = $row['cat_title'];

                                  ?>

                                  <input value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" type="text" class="form-control" name ="cat_title">

                                <?php }} ?>

                                <?php // UPDATE QUERY
                                  if(isset($_POST['update_category'])){

                                    $the_cat_title = $_POST['cat_title'];
                                    $query = "UPDATE categories SET 'cat_title' = '{$the_cat_title}' WHERE cat_id = {cat_id}";
                                    $update_query = mysqli_query($connection, $query);
                                  }
                                 ?> -->



                              <!-- <input class="form-control" type="text" name="cat_title"> -->
                            </div>

                            <!-- <div class="form-group">
                              <input class="btn btn-success" type="submit" name="update_category" value="Update">
                            </div> -->

                          </form>

                        </div><!-- Add Category Form -->

                        <div class="col-xs-6">

                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                              </thead>

                              <tbody>

                                <?php // FIND ALL CATEGORIES QUERY
                                  find_categories();
                                ?>

                                <?php // DELETE QUERY
                                  delete_categories();
                                 ?>

                              </tbody>

                          </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

        <?php include "includes/admin_footer.php"; ?>
