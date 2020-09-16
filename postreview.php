<?php
require_once 'assets/php/header.php';

?>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <?php if($verified == 'Not Verified'): ?>
       <div class="alert alert-danger alert-dismissible text-center mt-2 m-0">
        <button class="close" type="button" data-dismiss="alert">&times;</button>
        <strong>Your e-mail is not verified! we have sent you an e-mail varification link on your e-mail, check and verify now!</strong>
       </div>
     <?php endif; ?>
     <h4 class="text-center text-primary mt-2">Write your Reviews here & Access anytime!!</h4>


    </div>
  </div>
  
  <div class="card">
    <h5 class="card-header bg-primary d-flex justify-content-between">
      <span class="text-light lead align-self-center">All Reviews</span>
      <a href="#" class="btn btn-light" data-toggle="modal" data-target="#addNoteModal"><i class="fas fa-plus-circle fa-lg"></i>&nbsp;Add Reviews</a>
    </h5>
    <div class="card-body">
      <div class="table-responsive" id="showNote">
       <p class="text-center lead mt-5">Please Wait</p>
         
      </div>
    </div>
  </div>
</div>

<!--Start Add new review -->
<div class="modal fade" id="addNoteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h4 class="modal-title text-light">Add new review</h4>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form action="#" method="post" id="add-note-form" class="px-3">
          <div class="form-group">
            <input type="text" name="title" class="form-control form-control-lg" placeholder="Enter Hospital name & location" required>
          </div>
          <div class="form-group">
            <textarea name="note" class="form-control form-control-lg" placeholder="Write your review Here..." rows="6" required>
              
            </textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="addNote" id="addNoteBtn" value="Add Review" class="btn btn-success btn-block btn-lg">
          </div>
        </form>
      </div>
      
    </div>
    
  </div>
  
</div>

<!--End Add new review -->

<!--Start edit review  -->
<div class="modal fade" id="editNoteModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h4 class="modal-title text-light">Edit Review</h4>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <form action="#" method="post" id="edit-note-form" class="px-3">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Enter Hospital name & location" required>
          </div>
          <div class="form-group">
            <textarea name="note" id="note" class="form-control form-control-lg" placeholder="Write your review Here" rows="6" required>
              
            </textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="editNote" id="editNoteBtn" value="Update Review" class="btn btn-info btn-block btn-lg">
          </div>
        </form>
      </div>
      
    </div>
    
  </div>
  
</div>

<!--End Add new review -->

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

   <script type="text/javascript">
     $(document).ready(function(){


      //Add new review ajax request

      $("#addNoteBtn").click(function(e){
        if($("#add-note-form")[0].checkValidity()){
          e.preventDefault();

          $("#addNoteBtn").val('Please Wait...');

          $.ajax({
            url: 'assets/php/process.php',
            method: 'post',
            data: $("#add-note-form").serialize()+'&action=add_note',
            success:function(response){
              $("#addNoteBtn").val('Add Review');
              $("#add-note-form")[0].reset();
              $("#addNoteModal").modal('hide');
              Swal.fire({
                title: 'Review added sucessfully!!',
                type: 'success'

              });
              displayAllNotes();

            }

          });
        }

      });


    displayAllNotes();

      //Display All reviews of an user

      function displayAllNotes(){
        $.ajax({
          url: 'assets/php/process.php',
          method: 'post',
          data: { action: 'display_notes'},
          success:function(response){
            $("#showNote").html(response);
            $("table").dataTable({
              order: [0, 'desc']

            });
          }

        });
      }

    });

   </script>
</body>
</html>
