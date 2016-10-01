<?php require_once('header.php');
?>
    <h1>CS 313 03.6 - Individual Activity</h1>
    <form method="post" action="ballot.php">
            <label for="name">Name: </label>
            <input type="text" name="name">
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email">
            <br>

            <label for="favoriteBook">Favorite Book:</label><br>
            <input type="text" name="favoriteBook">
            

            <label for="visit">Place you would like to visit: </label><br>
            <input type="checkbox" name="visit[]" value="Philippines">
            Philippines<br>
            <input type="checkbox" name="visit[]" value="Russia">
            Russia<br>
            <input type="checkbox" name="visit[]" value="England">
            England<br>
            <input type="checkbox" name="visit[]" value="Ireland">
            Ireland<br>
            <input type="checkbox" name="visit[]" value="Australia">
            Australia<br>
            <input type="checkbox" name="visit[]" value="Israel">
            Israel<br>
            <input type="checkbox" name="visit[]" value="Antartica">
            Antartica<br>
			
			<label for="favoriteSeason">Favorite Season</label><br>
			<input type="radio" name="favoriteSeason" value="Summer">Summer<br>
			<input type="radio" name="favoriteSeason" value="Fall">Fall<br>
			<input type="radio" name="favoriteSeason" value="Winter">Winter<br>
			<input type="radio" name="favoriteSeason" value="Spring">Spring<br>
			
			<label for="favoriteTree">Favorite Tree</label><br>
			<input type="text" name="favoriteTree">
			<br>

            <label for="comments">Comments: </label><br>
            <textarea name="comments" cols="30" rows="10"></textarea><br>

            <input type="submit">
    </form>
<?php require_once('footer.php');?>