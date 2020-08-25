 <!-- Form---->
 <section class="my-5">
	<!-- Heading  -->
	<div class="py-5">
		<h3 class="text-center">Form</h3>
	</div>
	
	<div class="w-50 m-auto">
		<form action="userinfo.php" method="post">
			 <!-- Fields of Forms start---->
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email Id</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comment"> </textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<!-- Fields of Forms start---->
		</form>
	</div>
 </section>
  <!-- Form End---->