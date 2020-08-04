<!DOCTYPE html>
<html>
<head>
	<title> Form Pendaftaran </title>
</head>
<body>
	<h1> Buat Account Baru </h1>
	<label> First name </label> <br>
	<input type="text" name="awal" placeholder="first"> <br>
	<label> Last name </label> <br>
	<input type="text" name="akhir" placeholder="last"> <br>

	<form action="/welcome1">
		<label> Gender </label> <br>
		<input type="radio" name="gen"> Laki laki <br>
		<input type="radio" name="gen"> Perempuan <br>
		<input type="radio" name="gen"> Other <br>

		<label> Nationality </label> 
		<select>
			<option> Indonesia </option>
			<option> India </option>
			<option> China </option>
			<option> Yang lain </option>
		</select>
		<br>

		<label> Language spoken </label> <br>
		<input type="checkbox" name="ind"> Bahasa Indonesia <br>
		<input type="checkbox" name="ing"> Bahasa Inggris <br>
		<input type="checkbox" name="oth"> Other <br>

		<label> Bio : </label>
		<textarea cols="40" rows="10" placeholder="Tulis deskripsi singkat tentang dirimu"> </textarea>

		
		<br><br>

		<input type="submit" value="Sign Up">

	</form>
	
	&copy; Gilang Rahmat Akbar

</body>
</html>