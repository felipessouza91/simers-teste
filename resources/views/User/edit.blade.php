<div>
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        @include('user.form')
        <input type="submit" value="Salvar">
    </form>
</div>
