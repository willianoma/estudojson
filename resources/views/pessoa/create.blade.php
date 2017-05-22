<div class="col-md-12">

    <form action="{{ route('pessoa.store') }} " method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="col-md-12">

            <label>Nome</label>
            <input type="text" name="nome" id="pessoa-nome" class="form-control">

            <label>Sexo </label>
            <input type="text" name="sexo" id="pessoa-sexo" class="form-control">

            <label>CPF </label>
            <input type="text" name="cpf" id="pessoa-cpf" class="form-control">

            <button type="submit" class="btn btn-primary">Create</button>

        </div>

    </form>

</div>


