
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

<h1 style="color:DodgerBlue;text-align: center;"> Receptionist Profile</h1>

<div>
   <form action="{{URL::to('/save-update-reception',$reception_description_profile->reception_id)}}" method="post">
     {{csrf_field()}}
      

    <label for="Doctor Name:">Receptionist Name:</label>
                  <input type="text" name="reception_name" class="form-control form-control-lg"  value="{{($reception_description_profile->reception_name)}}"> 

    <label for="Doctor Designation:">Phone:</label>
                  <input type="text" name="reception_phone" class="form-control form-control-lg" value="{{($reception_description_profile->reception_phone)}}">

     <label for="Doctor Specalist:">Address:</label>
                  <input type="text" name="reception_address" class="form-control form-control-lg" value="{{($reception_description_profile->reception_address)}}">
    <label for="Doctor Fees:">Username:</label>
                  <input type="text" name="reception_username" class="form-control form-control-lg" value="{{($reception_description_profile->reception_username)}}">
     <label for="Doctor Fees:">Password:</label><br>
                  <input type="Password" name="reception_password" style="width: 1306px;height: 35px;" value="{{($reception_description_profile->reception_password)}}">
      <input type="submit" value="Update">
  </form>
</div>

</body>
</html>
 
             