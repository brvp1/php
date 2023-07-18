<?php include "header.php"; ?>

<form action="handle_form.php" method="POST">

    <p>Name: 
        <select name="title" required>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs.</option>
            <option value="Ms.">Ms.</option>
        </select>
        <input type="text" name="name" size="20" required>
    </p>

    <p>Email Address:
        <input type="email" name="email" size="20" required>       
    </p>

    <p>Response: This is..
        <input type="radio" name="response" value="excellent" required>
        excellent
        <input type="radio" name="response" value="okay" required>
        okay
        <input type="radio" name="response" value="boring" required>
        boring
    </p>

    <p>Comments:
        <textarea name="comments" rows="3" cols="30" required>
        </textarea>
    </p>

    <input type="submit" name="submit" value="Send My Feedback">

</form>
<?php include "footer.html"; ?>