<!DOCTYPE html>
<html>
<head>
<style>
#regform {
    border: 7px outset black;
    background-color: wheat;
    text-align: center;
    width: 600px; 
    height: 650px; 
    margin: auto;
}
table {
    border-collapse: collapse;
    width: 50%;
    margin: 20px 0;
}
table, th, td {
    border: 1px solid black;
}
th, td {
    padding: 10px;
    text-align: left;
}
.center {
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>

    <div id="regform">
        <h2>BOOK REGISTRATION</h2>
        <table class="center">
            <tr>
                <td>
                    <form name="BOOKform" action="form.php" method="post">
                        <label for="id">Book ID:</label>
                        <input type="text" id="id" name="id" required><br><br>
                        <label for="name">Title:</label>
                        <input type="text" id="title" name="title" required><br><br>
                        <label for="author">Book Author:</label>
                        <input type="text" id="author" name="author" required><br><br>
                        <label for="edition">Book Edition:</label>
                        <input type="text" id="edition" name="edition" required><br><br>
                        <label for="edition">Book Publisher:</label>
                        <input type="text" id="publisher" name="publisher" required><br><br>
                        <input type="submit" name="register" value="Register"><br><br>
                    </form>
                </td>
            </tr>
        </table>

        <h4>SEARCH BY AUTHOR</h4>
        <table class="center">
            <tr>
                <td>
                    <form name="searchForm" action="form.php" method="post">
                        <label for="author">AUTHOR NAME:</label>
                        <input type="text" name="author" id="author">
                        <input type="submit" name="search" value="Search"><br><br>
                    </form>
                </td>
            </tr>
        </table>
        </div>
    </body>
    </html>