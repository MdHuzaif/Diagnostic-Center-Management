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

<h1 style="color:DodgerBlue;text-align: center;">Appointment</h1>

<div>
   <form action="{{URL::to('/save-update-b-patient',$b_patient_description_profile->b_patient_id)}}" method="post">
     {{csrf_field()}}
      

    <label for="">Patient Name:</label>
                  <input type="text" name="b_patient_name" class="form-control form-control-lg"  value="{{($b_patient_description_profile->b_patient_name)}}"> 

    <label for="">Patient Serial:</label>
                  <input type="text" name="b_patient_serial" class="form-control form-control-lg" value="{{($b_patient_description_profile->b_patient_serial)}}">
     <label for="">Change Appointment Time:</label><br><br>
     <label for="">Date:</label>
                  <input type="date" name="b_patient_date" class="form-control form-control-lg" value="{{($b_patient_description_profile->b_patient_date)}}">

    <label for="">Time:</label>
                  <input type="time" name="b_patient_time" class="form-control form-control-lg" value="{{($b_patient_description_profile->b_patient_time)}}"><br><br>

     <label for="">Contact:</label>
                  <input type="text" name="b_patient_contact" class="form-control form-control-lg" value="{{($b_patient_description_profile->b_patient_contact)}}">
     <label for="">Payment:</label>
                  <input type="text" name="b_patient_payment" class="form-control form-control-lg" value="{{($b_patient_description_profile->b_patient_payment)}}">
     <label for="">Due:</label>
                  <input type="text" name="b_patient_due" class="form-control form-control-lg" value="{{($b_patient_description_profile->b_patient_due)}}">

      <input type="submit" value="Update">
  </form>
</div>

</body>
</html>