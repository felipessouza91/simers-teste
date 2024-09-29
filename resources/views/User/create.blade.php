<div>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('user.form')
        <input type="submit" value="Cadastrar">
    </form>
</div>
