
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

<h1 style="color:DodgerBlue;text-align: center;">Patient Test Description</h1>

<div>
   <form action="{{URL::to('/save-update-t-patient',$t_patient_description_profile->t_patient_id)}}" method="post">
     {{csrf_field()}}
      

    <label for="Doctor Name:">Patient Name:</label>
                  <input type="text" name="t_patient_name" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_name)}}"> 
    <label for="Doctor Name:">Contact:</label>
                  <input type="text" name="t_patient_contact" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_contact)}}"> 
    <label for="Doctor Name:">Serial:</label>
                  <input type="text" name="t_patient_serial" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_serial)}}">
    <label for="Doctor Name:">TestName:</label>
                  <input type="text" name="t_patient_testname" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_testname)}}"> 
    <label for="Doctor Name:">Total:</label>
                  <input type="text" name="t_patient_total" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_total)}}"> 
    <label for="Doctor Name:">Due:</label>
                  <input type="text" name="t_patient_due" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_due)}}"> 
    <label for="Doctor Name:">Discount:</label>
                  <input type="text" name="t_patient_discount" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_discount)}}"> 
     <label for="Doctor Name:">DeliveryDate:</label>
                  <input type="text" name="t_patient_deliverydate" class="form-control form-control-lg"  value="{{($t_patient_description_profile->t_patient_deliverydate)}}"> 

      <input type="submit" value="Update">
  </form>
</div>

</body>
</html>
 
             