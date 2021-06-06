<html>
<body>
    <br/>
    <br/>
    <form action="DisplayResult.php" method="post">
   <center>
      <table border=0>
      <tr>
          <td>
                Student Name
          </td>
          <td>
              <input type=text name="t1" required>
           </td>
       </tr>

       <tr>
           <td>
                Marks for Maths
           </td>
            <td>
                <input type=number min="0" max="100" name="t2" required>
           </td>
                
       </tr>

       <tr>
           <td>
                Marks for Physics
           </td>
            <td>
                <input type=number min="0" max="100" name="t3" required>
           </td>
       </tr>

       <tr>
           <td>
                Marks for Chemistry
           </td>
            <td>
                <input type=number min="0" max="100" name="t4" required>
           </td>
       </tr>

       <tr>
           <td>
                Marks for Biology
           </td>
            <td>
                <input type=number min="0" max="100" name="t5" required>
           </td>
       </tr>
</table>
<br>
<br>
<input type=submit name="Submit" value="Result">
     </center>

</form>

</body>
</html>