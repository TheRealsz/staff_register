<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de funcionarios</title>
</head>
<body>
    <div class="titleDiv">
        <h2>Cadastro de funcionarios</h2>
    </div>
    <form name="register" action="register.php" method="POST">
        <div class="formDiv">
            <div>
                <label for="">Nome completo</label>
                <input type="text" placeholder="Insira o nome completo" name="nome" />
            </div>
            <div>
                <label for="">Função</label>
                <input type="text" placeholder="Insira a função" name="funcao" />
            </div>
            <div>
                <label for="">Data de admissão</label>
                <input type="date" placeholder="Insira a data de admissão" name="admissao" />
            </div>
            <div>
                <label for="">Endereco residencial</label>
                <input type="text" placeholder="Insira o endereço residencial" name="endereco" />
            </div>
            <div>
                <label for="">Complemento</label>
                <input type="text" placeholder="Insira o complemento" name="complemento" />
            </div>
            <div>
                <label for="">Cidade</label>
                <input type="text" placeholder="Insira a cidade" name="cidade" />
            </div>
            <div>
                <label for="">Estado</label>
                <input type="text" placeholder="Insira o estado" name="estado" />
            </div>
            <div>
                <label for="">CEP</label>
                <input type="text" placeholder="Insira o CEP" name="cep" />
            </div>
            <div>
                <label for="">Telefone residencial</label>
                <input type="text" placeholder="Insira o telefone residencial" name="tel" pattern="[0-9()+\- ]+" />
            </div>
            <div>
                <label for="">Telefone celular</label>
                <input type="text" placeholder="Insira o telefone celular" name="phone" pattern="[0-9()+\- ]+"/>
            </div>
            <div>
                <label for="">CPF</label>
                <input type="text" placeholder="Insira o CPF" name="cpf"/>
            </div>
            <div>
                <label for="">RG</label>
                <input type="text" placeholder="Insira o RG" name="rg" />
            </div>
            <div>
                <label for="">Email</label>
                <input type="email" placeholder="Insira o email" name="email" />
            </div>
            <div>
                <label for="">Data de nascimento</label>
                <input type="date" placeholder="Insira a data de nascimento" name="nasc" />
            </div>
        </div>    
        <div class="buttonDiv">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</body>
</html>