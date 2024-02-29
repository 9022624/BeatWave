<footer>
    <div class="language-selector">
        <form action="#" method="post">
            <select name="language" id="language-select" onchange="this.form.submit()">
                <option value="en" <?php if(isset($_POST['language']) && $_POST['language'] == 'en') echo 'selected'; ?>>English</option>
                <option value="nl" <?php if(isset($_POST['language']) && $_POST['language'] == 'nl') echo 'selected'; ?>>Nederlands</option>
            </select>
        </form>
    </div>
    <div class="copyright">
        <p>&copy; <?php echo date("Y"); ?> BeatWave Festival. All rights reserved.</p>
    </div>
</footer>
