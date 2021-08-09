<form method="POST" action="{{ route('register') }}">

  @csrf  
    <label for="first_name">Prénom :</label>
        <input type="text" name="first_name" value="{{old('first_name')}}"/><br><br>
        <label for="last_name">Nom :</label>
        <input type="text" name="last_name" value="{{old('last_name')}}"/><br><br>
        <label for="last_name">Email :</label>
        <input type="email" name="email" value="{{old('email')}}"/><br><br>
        <label for="user_type">Utilisateur :</label>
        <select name="user_type">
            <option value=""></option>
            <option value="1">Administration</option>
            <option value="2">Etudiant</option>
            <option value="3">tuteur</option>
        </select><br>

        <input type="submit" name="">
   
</form>