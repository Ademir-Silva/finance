<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Painel | FINANCE</title>

    <link href="../css/painel.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,700;1,100;1,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>

    <header>
        <img src="../assets/logo.svg" alt="Logo Finance">
        
        <div class="exit">
            <a href="../pages/sign-in.php" onclick="signOut();"><img src="../assets/exit.svg"></a>
        </div>

    </header>

    <main class="container">

        <section id="balance">
            <h2 class="sr-only">Balanço</h2>

            <div class="card">
                <h3>
                    <span>Entradas</span>
                    <img src="../assets/income.svg" alt="Imagem de entrada">
                </h3>

                <p id="incomeDisplay">R$ 0,00</p>
            </div>

            <div class="card">
                <h3>
                    <span>Saída</span>
                    <img src="../assets/expense.svg" alt="Imagem de saída de valor">
                </h3>

                <p id="expenseDisplay">R$ 0,00</p>
            </div>

            <div class="card total">
                <h3>
                    <span>Total</span>
                    <img src="../assets/total.svg" alt="Imagem do total">
                </h3>

                <p id="totalDisplay">R$ 0,00</p>
            </div>
        </section>

        <section id="transaction">
            <h2 class="sr-only">Transações</h2>

            <a href="#" onclick="Modal.open()" class="button new">+ Nova Transação</a>
            <table id="data-table">

                <thead>
                    <tr>
                        <th></th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>

        </section>

    </main>

    <div class="modal-overlay">
        <div class="modal">
            <div id="form">
                <h2>Nova Transação</h2>

                <form action="" onsubmit="Form.submit(event)">
                    <div class="input-group">
                        <label class="sr-only" for="description">Descrição</label>
                        <input type="text" name="description" id="description" placeholder="Descrição">
                    </div>

                    <div class="input-group">
                        <label class="sr-only" for="amount">Valor</label>
                        <input type="number" name="amount" id="amount" step="0.01" placeholder="0,00">
                        <small class="help">Use o sinal - (Negativo) para despesas e , (Vírgula) para casas decimais. </small>
                    </div>

                    <div class="input-group">
                        <label class="sr-only" for="date">Data</label>
                        <input type="date" name="date" id="date">
                    </div>

                    <div class="input-group actions">
                        <a href="#" onclick="Modal.close()" class="button cancel">Cancelar</a>
                        <button>Salvar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>finance</p>
    </footer>
    
    <script src="../scripts/painel.js"></script>
</body>

</html>