<?php

require_once 'session.php';

//handle add new review ajax request

if(isset($_POST['action']) && $_POST['action'] == 'add_note'){
	$title = $cuser->test_input($_POST['title']);
	$note = $cuser->test_input($_POST['note']);

	$cuser->add_new_note($cid, $title, $note);
}

//Handle Display All reviews of an user

if(isset($_POST['action']) && $_POST['action'] == 'display_notes'){
	$output = '';

	$notes = $cuser->get_notes($cid);

	if($notes){
		$output .= ' <table class="table table-striped text-center">
          <thead>
            <tr>
              <th>#</th>
              <th>Hospital name & Location</th>
              <th>Reviews & Experience</th>
              <th>Action</th>

            </tr>
          </thead>
          <tbody>';
        foreach ($notes as $row) {
          	$output .= ' <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['title'].'</td>
            <td> '.substr($row['note'],0, 75).'...</td>
            <td>
              <a href="#" id="'.$row['id'].'" title="View Details" class="text-success infoBtn">
              <i class="fas fa-info-circle fa-lg" data-toggle="modal" data-target="#editNoteModal"></i></a>&nbsp;

              <a href="#" id="'.$row['id'].'" title="Edit Review" class="text-success editBtn">
              <i class="fas fa-edit fa-lg" data-toggle="modal" data-target="#editNoteModal"></i></a>&nbsp;

              <a href="#" id="'.$row['id'].'" title="Delete Review" class="text-danger deleteBtn">
              <i class="fas fa-trash-alt fa-lg"></i></a>
            </td>
            </tr>';
          }
          $output .= '</tbody></table>';
          echo $output;
	}
	else{
		echo '<h3 class="text-center text-secondary">:( You have not written any review yet! Write your first review now!)</h3>';
	}
}

//Handle delete a review of an user ajax request

if(isset($_POST['del_id'])){
  $id = $_POST['del_id'];

  $cuser->delete_note($id);
}


//Handle display review details ajex request

if(isset($_POST['info_id'])){
  $id = $_POST['info_id'];
}


?>