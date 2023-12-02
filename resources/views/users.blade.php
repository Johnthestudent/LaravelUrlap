<h1>User number</h1>
<h3>Enter a numeric value between 1 and 10 to get the n-th secret</h3>
<h4>
The given numeric value will be part of the URL, which will present the
n-th secret
</h4>
<form action="users" method="post">
    @csrf
    <input type="number", name="username" placeholder="enter user id" min="1" max="10"/> <br>
    Text for the secret: <input type="text" name="name" size="100" /><br />
    <button type="submit">Submit</button>
</form>

<!--The following form stands for adding secret. Use it only in the case you get the message secret cannot be found for submitting the first form.-->
<!--<form action="users" method="post" id="secondform">
    @csrf
    Text for the secret: <input type="text" name="name" size="100" /><br />
    <input type="submit", value="Add new secret", name="addsecret"/>
    <button type="submit">Add new secret</button>
</form>-->