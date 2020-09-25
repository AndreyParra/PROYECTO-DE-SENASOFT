<div class="modal-content" id="login">
  
  <div class="modal-header bg-white">
    <h5 class=" text-center" >Login <i class="icon-users"></i></h5>
  </div>

   <form method="post">

      <div class="modal-body">

          <div class="form-group">
            <input type="email" class="form-control" id="exampleInputEmail1" name="user" placeholder="Email Address">
         </div>

         <div class="form-group">
           <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
         </div>
         
        
         <div class="form-group">
           <button type="submit" class="btn btn-dark form-control" id="start"> Sign In</button>
         </div>


      </div>

     <?php 

           $login = new LoginController();

           $login-> signIn();
      ?>

  </form>

</div>
