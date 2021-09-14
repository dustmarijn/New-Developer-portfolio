<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form name="contactform" method="post" action="/email">
    @csrf
    <table width="450px">
        <tr>
            <td valign="top">
                <label for="first_name">Voornaam*</label>
            </td>
            <td valign="top">
                <input  type="text" name="first_name" maxlength="50" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
            <label for="last_name">Achternaam*</label>
            </td>
            <td valign="top">
                <input  type="text" name="last_name" maxlength="50" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="email">Email Adres*</label>
            </td>
            <td valign="top">
                <input  type="text" name="email" maxlength="80" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="telephone">Telefoon Nummer*</label>
            </td>
            <td valign="top">
                <input  type="text" name="telephone" maxlength="30" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="comments">Commentaar*</label>
            </td>
            <td valign="top">
                <input  type="text" name="comments" maxlength="35" size="30">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                <input type="submit" value="Verstuur">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
