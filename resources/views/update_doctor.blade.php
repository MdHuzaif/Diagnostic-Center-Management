
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

<h1 style="color:DodgerBlue;text-align: center;"> Doctor Profile</h1>

<div>
   <form action="{{URL::to('/save-update',$doctor_description_profile->doctor_id)}}" method="post">
     {{csrf_field()}}
      

    <label for="Doctor Name:">Doctor Name:</label>
                  <input type="text" name="doctor_name" class="form-control form-control-lg"  value="{{($doctor_description_profile->doctor_name)}}"> 

    <label for="Doctor Designation:">Designation:</label>
                  <input type="text" name="qualification" class="form-control form-control-lg" value="{{($doctor_description_profile->qualification)}}">

     <label for="Doctor Specalist:">Specialist:</label>
                  <input type="text" name="specialist" class="form-control form-control-lg" value="{{($doctor_description_profile->specialist)}}">
    <label for="Doctor Fees:">Doctor Fees:</label>
                  <input type="text" name="doctor_fees" class="form-control form-control-lg" value="{{($doctor_description_profile->doctor_fees)}}">
      <input type="submit" value="Update">
  </form>
</div>

</body>
</html>
 
             