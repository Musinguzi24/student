<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>STUDENT REGISTRATION SYSTEM </title>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<style type="text/css">
<!--
.style6 {color: #000000; }
.style6 {font-size: 14px}
-->
</style>
</head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
}

a:link, a:visited {
    display: block;
    width: 120px;
    font-weight: bold;
    color: #FFFFFF;
    background-color: #0099FF;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

a:hover, a:active {
    background-color:#0099FF;
}
.style1 {
	font-family: Mistral;
	font-weight: bold;
}
.style7 {
	font-size: 36px
}
</style>
<body background="bg.jpg">
<form action="connection.php" method="post">
  <div align="center" class="style6 style7">STUDENT REGISTRATION SYSTEM 2015  </div>

<table width="714" border="0" align="center" bgcolor="#00BFFE">
  <tr>
    <td bgcolor="#00BFFE"><div align="center" class="style1 style2">LETS GET STARTED </div></td>
    <td bgcolor="#2F7ECD"><div align="center"><a href="index.php">STUDENTS</a></div></td>
    <td bgcolor="#2F7ECD"><div align="center"><a href="accounts.php">ACCOUNTS</a></div></td>
    <td bgcolor="#2F7ECD"><div align="center"><a href="parents.php">PARENTS</a></div></td>
  </tr>
  <tr>
    <td width="198">FIRST NAME</td>
    <td width="330">
      <label>
        <input type="text" name="fname" id="textfield" />
      </label>
  </td>
  </tr>
  <tr>
    <td>LAST NAME</td>
    <td>
      <label>
        <input type="text" name="lname" id="textfield2" />
      </label>
   </td>
  </tr>
  <tr>
    <td>SESSION</td>
    <td align="left"><span class="style6">
      <label> </label>
      </span>
  
          <select name="session">
            <option>Select Session</option>
          </select>
    </td>
  </tr>
  <tr>
    <td>ID NO</td>
    <td>
      <label>
        <input type="text" name="idno" id="textfield3" />
      </label>
   </td>
  </tr>
  <tr>
    <td>BRANCH</td>
    <td>
      <select name="branch_name" >
        <option>kampala campus</option>
           <option>Mukono campus</option>

      </select>
   </td>
  </tr>
  <tr>
    <td>YEAR </td>
    <td>
      <p>
        <select name="year">
          <option> Year one</option>  
           <option>Year two</option>
           <option>Year three</option>
        </select>
      </p>
   </td>
  </tr>
  <tr>
    <td>SEMISTER</td>
    <td>
      <select name="semester">
        <option>semester one</option>
            <option>semester two</option>
      </select>
   </td>
  </tr>
  <tr>
    <td>Date of Birth (DD-MM-YYY)</td>
    <td>
      <select name="date" >
        <option>Select  Day</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
      </select>
      <select name="month">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
      </select>
     
    </td>
  </tr>
  <tr>
    <td>ADRESS</td>
    <td>
      <label>
        <input type="text" name="address" id="textfield8" />
      </label>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
      <label>
        <input type="submit" name="submit" id="button" value="submit" />
      </label>
</form>
  </td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
</table>
</body>
</html>
