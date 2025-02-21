<?php  
if(isset($_SESSION['succesMessage'])):
    $message = $_SESSION['succesMessage'];
    unset($_SESSION['succesMessage']);
?>
    <div id="messageError"  class="d-flex justify-content-between alert alert-success">
        <div>
            <?=$message?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>


    </div>
   
  
<?php endif;
 
  
?>


<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">MATCH LIST</h5>
                    <button id="addTeamBtn" class="btn btn-primary mb-3"><a class="text-decoration-none" href="Matche/Add" style="color: white;">Add Match</a></button>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Team 1</th>
                                <th>Team 2</th>
                                <th>Date</th>
                                <th>Group</th>
                                <th>Stadium</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                            foreach ($data as $row) {?>
                            <tr>
                                <td><?=$row->id;?></td>
                                <td><?=$row->teamA?></td>
                                <td><?=$row->teamB?></td>
                                <td><?=$row->MatchDateTime?></td>
                                <td><?=$row->GroupID?></td>
                                <td><?=$row->stadiomName?></td>
                                <td>
                                    <a href="./matche/Edit/<?=$row->id?>" class="btn btn-info btn-sm edit-team">Edit</a>
                                    <a href="./matche/DeleteMatch/<?=$row->id?>" class="btn btn-danger btn-sm delete-team" onclick="return confirm('Are you sure you want to delete this match?');"
 >Delete</a>
                                </td>
                            </tr>
                            <?php
                            }?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>