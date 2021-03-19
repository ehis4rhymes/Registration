<?php include 'includes/header.php'; ?>


      <form class="form-signin">
        <h2 class="form-signin-heading">Change Password</h2>
        <label for="inputEmail" class="sr-only">Surname</label>
        <input type="text" id="inputSurname" class="form-control" placeholder="Surname" required autofocus>
        <br />
        <label for="inputEmail" class="sr-only">FirstName</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="FirstName" required autofocus>
        <br />
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <br />
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="New Password" required>
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Confirm New Password" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Change Password</button>
         <br />
        <p>
          Or login here?
          <a href="login.php">login here</a>
        </p>

      </form>

<?php include 'includes/footer.php'; ?>