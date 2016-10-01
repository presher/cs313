<?php require_once('header.php');?>

    <h1>CS 313 03.6 - Individual Activity</h1>
    <form  action="poll_results.php" method="post">
            
            <label for="favoriteBook">Favorite Book:</label>
            <input type="text" name="favoriteBook" required="required">
			<br>            

            <label for="visit">Place you would like to visit: </label><br>
            <input type="radio" name="visit" value="Philippines" required="required">
            Philippines<br>
            <input type="radio" name="visit" value="Russia">
            Russia<br>
            <input type="radio" name="visit" value="England">
            England<br>
            <input type="radio" name="visit" value="Ireland">
            Ireland<br>
            <input type="radio" name="visit" value="Australia">
            Australia<br>
            <input type="radio" name="visit" value="Israel">
            Israel<br>
            <input type="radio" name="visit" value="Antartica">
            Antartica<br>
			
			<label for="favoriteSeason">Favorite Season</label><br>
			<input type="radio" name="favoriteSeason" value="Summer" required="required">Summer<br>
			<input type="radio" name="favoriteSeason" value="Fall">Fall<br>
			<input type="radio" name="favoriteSeason" value="Winter">Winter<br>
			<input type="radio" name="favoriteSeason" value="Spring">Spring<br>
			
			<label for="favoriteTree">Favorite Tree</label><br>
			<input type="text" name="favoriteTree" required>
			<br>

            <label for="comments">Comments: </label><br>
            <textarea name="comments" cols="30" rows="10"></textarea><br>

            <input type="submit" >
    </form>
<?php require_once('footer.php');?>