
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

<h1 style="color:DodgerBlue;text-align: center;"> Test Description</h1>

<div>
   <form action="{{URL::to('/save-update-test',$test_description_profile->test_id)}}" method="post">
     {{csrf_field()}}
      

    <label for="Doctor Name:">Test Name:</label>
                  <input type="text" name="test_name" class="form-control form-control-lg"  value="{{($test_description_profile->test_name)}}"> 

 <label for="Doctor Name:">Test Price:</label>
                  <input type="text" name="test_price" class="form-control form-control-lg"  value="{{($test_description_profile->test_price)}}"> 

      <input type="submit" value="Update">
  </form>
</div>

</body>
</html>
 
             