<?php 

include 'header.php';

if(isset($_SESSION['username']) && !empty($_SESSION['username']))
	header('Location: dashboard.php');
?>

<div class="container">
	<div class="row">
		<div class="col-sm-4">

		<div class="card" style="width:100%;">
			
	    <div class="card-header">
	    	<h5>ورود</h5>
	    </div>
	   <div class="card-body">
				
				<?php 
					if(isset($_GET['login_error']))
					{
						?>
							<div class="alert alert-danger" style="text-align:right;">
								<?=$_GET['login_error']?>
							</div>

						<?php
					}
				 ?>
				<form action="src/check_login.php" method="POST">
					
					<div class="form-group">
						<label for="username">نام کاربری</label>
					    <input type="text" class="form-control" id="username" name="username"  placeholder="username">
					</div>

					<div class="form-group">
						<label for="password">رمز عبور</label>
					    <input type="password" class="form-control" id="password" name="password"  placeholder="password">
					</div>

					<div class="form-group">
						<input type="submit" name="login" class="form-control btn btn-success" value="ورود">
					</div>

				</form>

			</div>
		</div>
</div>
		<div class="col-sm-7">
		<div class="card" style="width:100%;">
			
	    <div class="card-header">
	    	<h5>ثبت نام</h5>
	    </div>
	   <div class="card-body">

				<?php 
					if(isset($_GET['register_error']))
					{
						?>
							<div class="alert alert-danger" style="text-align:right;">
								<?=$_GET['register_error']?>
							</div>

						<?php
					}
				 ?>

				<form action="src/check_login.php" method="POST">

				<div class="form-group">
						<label for="name">نام و نام خانوادگی</label>
					    <input type="text" class="form-control" id="name" name="name"  placeholder="نام و نام خانوادگی خود را وارد کنید">
					</div>
					
					<div class="form-group">
						<label for="username">نام کاربری</label>
					    <input type="text" class="form-control" id="username" name="username"  placeholder="نام کاربری خود را وارد کنید">
					</div>

					<div class="form-group">
						<label for="password">رمز عبور</label>
					    <input type="password" class="form-control" id="password" name="password"  placeholder="رمز عبور خود را وارد کنید">
					</div>

					<div class="form-group">
						<label for="password_repeat">تکرار رمز عبور</label>
					    <input type="password" class="form-control" id="password_repeat" name="password_repeat"  placeholder="رمز عبور خود را وارد کنید">
					</div>

					<div class="form-group">
					   <input type="submit" name="register" class="form-control btn btn-primary" value="ثبت نام">
					</div>
				</form>	
		</div>
		</div>
</div>

	</div>
</div>


<?php 

include 'footer.php';

?>