<div class="row">

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label>Nome</label>
            <input
                name="name"
                max="20"
                placeholder="Nome"
                value="@isset($user) {{old('name', $user->name) }} @endisset"
                class="@error('name') is-invalid @enderror form-control"
                #required
            >
            @error('name')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="cpf">
                CPF
            </label>
            <input
                name="cpf"
                placeholder="CPF"
                value="@isset($user) {{ old('cpf', $user->cpf) }} @endisset"
                class="@error('cpf') is-invalid @enderror form-control"
                #required
            >
            @error('cpf')
                <span class="text-end text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input
                name="phone"
                placeholder="Telefone"
                value="@isset($user) {{ old('phone', $user->phone) }} @endisset"
                class="@error('phone') is-invalid @enderror form-control"
                #required
            >
            @error('phone')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="birthdate">Data de Nascimento</label>
            <input
                name="birthdate"
                type="date"
                value="@isset($user) {{ old('birthdate', $user->birthdate) }} @endisset"
                class="@error('birthdate') is-invalid @enderror form-control"
                #required
            >
            @error('birthdate')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                name="email"
                placeholder="E-mail"
                value="@isset($user) {{ old('email', $user->email) }} @endisset"
                class="@error('email') is-invalid @enderror form-control"
                #required
            >
            @error('email')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label for="password">Senha</label>
            <input
                name="password"
                type="password"
                placeholder="Senha"
                class="@error('password') is-invalid @enderror form-control"
                #required
            >
            @error('password')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
