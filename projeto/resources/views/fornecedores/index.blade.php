<h1> Pagina de FORNECEDORES</h1>



@foreach ($fornecedores as $fornecedor)
<ul>
    <li>Nome do fornecedor: {{$fornecedor->nome}}</li>
    <li>Telefone do fornecedor: {{$fornecedor->telefone}}</li>
    <li>CNPJ: {{$fornecedor->cnpj}}</li>
</ul>
@endforeach