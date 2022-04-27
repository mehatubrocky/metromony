<?php include_once("includes/basic_includes.php");?>
<?php include_once("function.php"); ?>
<?php register(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	   <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
<input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
  	</div>
  	<div class="input-group">
  	  <label>Date Of Birth</label>
    
      <div class="date">
                    <select name="day">
                      <option value="">Day</option>
                       <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                 
            
           
                  
                    <select name="month">
                      <option value="">Month</option>
                      <option value="01">January</option>
                      <option value="02">February</option>
                      <option value="03">March</option>
                      <option value="04">April</option>
                      <option value="05">May</option>
                      <option value="06">June</option>
                      <option value="07">July</option>
                      <option value="08">August</option>
                      <option value="09">September</option>
                      <option value="10">October</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                 
                    <select name="year">
                      <option value="">Year</option>
                        <option value="1980">1980</option>
                        <option value="1981">1981</option>
                        <option value="1981">1981</option>
                        <option value="1983">1983</option>
                        <option value="1984">1984</option>
                        <option value="1985">1985</option>
                        <option value="1986">1986</option>
                        <option value="1987">1987</option>
                        <option value="1988">1988</option>
                        <option value="1989">1989</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                    </select>
                  
                  </div>
  	   <span class="inst">(Day-Month-Year)</span>
  	</div>
    <div class="input-group">
      Sex :
       <label class="container">
                   Male <input type="radio" name="gender" value="male" > 
                <span class="checkmark"></span>
              </label>
               <label class="container">
                 Female   <input type="radio" name="gender" value="female"> 
                 <span class="checkmark"></span>
                </label>
              
    </div>
  
  	<div class="input-group">
  	  <button type="submit" id="edit-submit" class="btn"  name="op" value="Submit">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>