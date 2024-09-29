<div>
    <form action="{{route('login')}}" method="post">
        @csrf
        @method('POST')
        <label for="email">E-mail</label>
        <input name="email" placeholder="email" type="email">
        <br>
        <label for="password">Senha</label>
        <input name="password" placeholder="password" type="password">
        <br>
        <input type="submit" value="Login">
    </form>
</div>
