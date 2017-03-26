<div class="page-header">
    <h1><i class="glyphicon glyphicon-plus"></i> Pessoas / Index </h1>
</div>

<a href="{{ route('pessoa.create') }}">Create</a>


<div class="row">
    <div class="col-md-12">
        @if($pessoas->count())
            <table class="table table-condensed table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>SEXO</th>
                    <th>CPF</th>

                </tr>
                </thead>

                <tbody>
                @foreach($pessoas as $pessoa)
                    <tr>
                        <td>{{$pessoa->id}}</td>
                        <td>{{$pessoa->nome}}</td>
                        <td>{{$pessoa->sexo}}</td>
                        <td>{{$pessoa->cpf}}</td>


                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        @else
            <h3 class="text-center alert alert-info">Empty!</h3>
        @endif

    </div>
</div>


<?php


/**
 * Created by PhpStorm.
 * User: willian
 * Date: 14/03/17
 * Time: 11:16
 */

