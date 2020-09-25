


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

       <form method="post">

          <div class="modal-body">

              <div class="form-group">
                <label for="exampleInputEmail1">Departament</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Departament">
             </div>

             <div class="form-group">
               <label for="exampleInputPassword1">FirstName</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="FirstName">
             </div>

             <div class="form-group">
               <label for="exampleInputPassword1">LastName</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="LastName">
             </div>

             <div class="form-group">
               <label for="exampleInputPassword1">MiddleName</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="MiddleName">
             </div>
     
          </div>
          <div class="modal-footer">

            <div class="btn-group">
              <button type="reset" class="btn btn-secondary"> Limpiar</button>
              <button type="submit" class="btn btn-primary"> Guardar</button>
            </div>

          </div>

          <?php 

               $employee =  new EmployeeController();

               $employee-> new();
           ?>

      </form>

    </div>

  </div>
</div>

<div class="card measure margin-card">
  <div class="card-header bg-white">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      New Employee
    </button>
  </div>
  <div class="card-body">
    
    <table class="table table-striped table-hover table-bordered nowrap dataTables" style="width:100%">
            <thead class="thead-dark">
                <tr>
                    <th>Employed ID</th>
                    <th>Departament</th>
                    <th>Last name</th>
                    <th>Middle Name</th>
                    <th>First Name</th>
                    <th>Last Access</th>
                    <th>Total Access</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

              <?php                   
                   $table ="Employee";
                   $answer = Employee::search($table); 
                   foreach ($answer as $key => $value) { 
                    
                    echo '<tr>
                             <td>'.$value["Employed_ID"].'</td>
                             <td>'.$value["Departament"].'</td>
                             <td>'.$value["LastName"].'</td>
                             <td>'.$value["MiddleName"].'</td>
                             <td>'.$value["FirstName"].'</td>
                             <td>'.$value["LastAccess"].'</td>
                             <td>'.$value["TotalAccess"].'</td>
                             <td>'.$value["Status"].'</td>
                          </tr>';

                } ?>

            </tbody>
    </table>

  </div>
</div>







