<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table border="2">
    <tr>
        <th>name</th>
        <td><input type="text" name="name" id="name"></td>
    
    </tr>
    <tr>
        <th>email</th>
        <td><input type="email" name="email" id="email" required="@"></td>
    </tr>
    <tr>
        <th>password</th>
        <td><input type="password" name="password" id="password"></td>

    </tr>
   <tr>
    <th>DOB</th>
    <td><input type="date" name="dob" id="dob"></td>
   </tr>
   <tr>
    <th>Gender</th>
    <td>
        male<input type="radio" name="gender" id="gender">
   female <input type="radio" name="gender" id="gender"></td>
   </tr>
   <tr>
    <th>Vehical</th>
    <td>Car<input type="checkbox" name="vehical" id="vehical">
    
Bike <input type="checkbox" name="vehical" id="vhecical"></td>
   </tr>
   <tr>
    <th>Village</th>
    <td><select name="village" id="village">
        <option value="1" style='>tehi</option>
        <option value="2">sangwala</option>
        <option value="3">markhal</option>
    </select></td>
   </tr>
   
  
  </table> 
  <input type="submit" name="submit" id="submit"> 
 
</body>
</html>