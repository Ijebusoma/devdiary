
<form action = "/create" method="POST">
    <input type = text name = "error" placeholder="Error" >
    <input type = text name = "fix" placeholder="Fix" >
    {{ csrf_field()}}

    <input type = "Submit"  value="Save" >
</form>


