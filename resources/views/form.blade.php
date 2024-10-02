<div class="row">

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label>Nome <span class="text-danger text-sm">*</span></label>
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
            <label for="cpf">CPF <span class="text-danger text-sm">*</span></label>
            <input
                name="cpf"
                placeholder="000.000.000-00"
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
            <label for="phone">Telefone <span class="text-danger text-sm">*</span></label>
            <input
                name="phone"
                placeholder="Telefone"
                value="@isset($user) {{ old('phone', $user->phone) }} @endisset"
                class="@error('phone') is-invalid @enderror form-control phone_with_ddd"
                #required
            >
            @error('phone')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="birthdate">Data de Nascimento <span class="text-danger text-sm">*</span></label>
            <input
                name="birthdate"
                placeholder="dd/mm/aaaa"
                value="@isset($user) {{ old('birthdate', $user->birthdate) }} @endisset"
                class="@error('birthdate') is-invalid @enderror form-control date"
                #required
            >
            @error('birthdate')
                <span class="text-danger position-absolute">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="email">E-mail <span class="text-danger text-sm">*</span></label>
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

    <div class="col-md-6 mb-4">
        <div class="form-group">
            <label for="password">Senha <span class="text-danger text-sm">*</span></label>
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
