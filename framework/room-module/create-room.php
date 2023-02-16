<html>
    <head>
        <title>Reservation</title>
    </head>
<body>
    <div class="room">
        <h1>Add Room</h1>
        <form action="room-module/room-con.php" method="post">
			<label for="number">Room Number: </label>
			<input type="text" id="number" class="text" name="number" placeholder="Enter Room Number..." required>
				<br><br>
			<label for="type">Room Type: </label>
		    <input type="text" id="type" class="text" name="type" placeholder="Enter Room Type..." required>
				<br><br>
			<label for="description">Description: </label>
			<input type="text" id="description" class="text" name="description" placeholder="Add Description..." required>
				<br><br>
			<label for="price">Price: </label>
			<input type="text" id="price" class="text" name="price" placeholder="Enter Price..." required>
				<br><br>
			<label for="floor">Room Floor: </label>
			<input type="text" id="floor" class="text" name="floor" placeholder="Enter Room Floor..." required>
				<br><br><br>
			<input type="submit" value="SUBMIT">
		</form>
    </div>
</body>
</html>