
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: DodgerBlue;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1 style="color:DodgerBlue;text-align: center;"> Admin Profile</h1>



<div>
   <form action="{{url('/save-change-admin')}}" method="post">
     {{csrf_field()}}
      

    <label for="Doctor Name:">Admin Username:</label>
                  <input type="text" name="admin_email" class="form-control form-control-lg"  placeholder="Enter New Username" required=""> 

    <label for="Doctor Fees:">Admin Password:</label><br>
                  <input type="password" name="admin_password" style="width: 1306px;height: 35px;" placeholder="     Enter New Password" required="">
      <input type="submit" value="Change">
  </form>
</div>

</body>
</html>
 
             