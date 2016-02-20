        <form  method="post">
            <div class=" col-sm-6 col-md-4 col-lg-3">
                        <div class="location-box">
                            <div class="name"> 
                                <h5><?php $name ?></h5>
                            </div>
                            <div class="image-wrap"> 
                                <img src="/test/img/$image">
                            </div>
                            <div class="description"> 
                                $description
                            </div>
                        </div>

<!-- <!--                 <input type="hidden" class="input-small" name="id" value="<?php
                echo(htmlspecialchars($location['id'], ENT_QUOTES, 'UTF-8'));?>"> --> -->
            
                <button type="submit" name="action" value="Edit" class="btn btn-xs btn-primary">Edit</button>           
                <button type="submit" name="action" value="Delete"  class="btn btn-xs btn-danger">Delete</button>
            
        </div> <!-- end col-->
        </form>