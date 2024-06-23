<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 4</title>
</head>
<body>
    <form action="day4.php" method="get">
        <label for="">First Name: </label>
        <input type="text" name="first_name" id="first_name" required>
        <br><br>
        <label for="">Last Name: </label>
        <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name">
        <br><br>
        <label for="">Password: </label>
        <input type="password" name="password" id="password">
        <br><br>
        <br><br>
        <label for="">DOB: </label>
        <input type="date" name="dob" id="dob">
        <br><br>
        <label for="">Email: </label>
        <input type="email" name="email" id="email">
        <label for="" >Gender</label>
                Male <input type="radio" value="male" name="gender" id="gender">
                Female <input type="radio" value="female" name="gender" id="gender">
        <br>
        <br>
                <label for="" >Vehicals</label>
                Car <input type="checkbox" value="car" name="vhcl" id="vhcl">
                Bike <input type="checkbox" value="bike" name="vhcl" id="vhcl">
        <br>
        <label for="">Village</label>
        <select name="village" id="village">
            <option value="1">Tehi</option>
            <option value="2">Singwala</option>
            <option value="3">Misrial</option>
        </select>
        <input type="submit" value="Sign Up" name="btn_submit" id="btn_submit">
    </form>
</body>
</html>