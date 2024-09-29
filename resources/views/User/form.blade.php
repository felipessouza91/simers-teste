    <label>Nome</label>
    <input
        name="name"
        max="20"
        placeholder="Nome"
        value="@isset($user) {{old('name', $user->name) }} @endisset"
        class="@error('name') is-invalid @enderror"
        #required
    >
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="cpf">CPF</label>
    <input
        name="cpf"
        placeholder="CPF"
        value="@isset($user) {{ old('cpf', $user->cpf) }} @endisset"
        class="@error('cpf') is-invalid @enderror"
        #required
    >
    @error('cpf')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="phone">Telefone</label>
    <input
        name="phone"
        placeholder="Telefone"
        value="@isset($user) {{ old('phone', $user->phone) }} @endisset"
        class="@error('phone') is-invalid @enderror"
        #required
    >
    @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="email">E-mail</label>
    <input
        name="email"
        placeholder="E-mail"
        value="@isset($user) {{ old('email', $user->email) }} @endisset"
        class="@error('email') is-invalid @enderror"
        #required
    >
    @error('phone')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="password">Senha</label>
    <input
        name="password"
        type="password"
        placeholder="Senha"
        class="@error('password') is-invalid @enderror"
        #required
    >
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="birthdate">Data de Nascimento</label>
    <input
        name="birthdate"
        type="date"
        value="@isset($user) {{ old('birthdate', $user->birthdate) }} @endisset"
        class="@error('birthdate') is-invalid @enderror"
        #required
    >
    @error('birthdate')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
