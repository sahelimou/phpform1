<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><form action="form.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Name:</label> <input type="text" name="name" required="yes">
            </div>
            <div><!-- comment -->
                <label for="email">Email:</label><input type="text" name="email" required="yes"></div>
            <div>
                <label for="website">website:</label><input type="text" name="website" required="yes"></div>
            <div>
                <label for="comment">comment:</label><textarea name="comment" rows="5" cols="40" required="yes"></textarea></div>
            <div>
                <label for="gender">Gender:</label>
<input type="radio" name="gender" value="female" >Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other</div>
            <div
            <label for="qualification">Qualification:</label>
<select name="qf" id="qf">
    <option value="b.tech" selected="yes">B.Tech</option>
	<option value="m.sc">M.Sc</option>
        <option value="b.sc">B.sc</option></select></div>
<div>
<h2>Upload File</h2>
        <label for="fileSelect">Filename:</label>
        <input type="file" name="fileSelect" >

        <!-- comment --><button type="submit" >enter</button></div>  
	
       </form>
    </body>
</html>
