<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Configurações gerais */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #4f5d95; /* Cor inspirada no PHP */
            margin-bottom: 10px;
        }

        hr {
            border: 0;
            height: 2px;
            background: #ddd;
            margin: 20px 0;
        }

        /* Container dos botões */
        .desafios-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin: 30px 0;
        }

        /* Estilo dos links transformados em botões */
        .btn-desafio {
            background-color: #ffffff;
            color: #4f5d95;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            border: 2px solid #4f5d95;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .btn-desafio:hover {
            background-color: #4f5d95;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Rodapé */
        footer {
            margin-top: 40px;
            color: #666;
            font-size: 0.9rem;
        }
    </style>
    <title>Desafios PHP</title>
</head>
<body>
    <h1>Lista de desafios de PHP</h1>
    <hr>
    <button><a href="/arquivos/desafio-01.php">Desafio 01</a></button><br><br>
    <button><a href="/arquivos/desafio-02.php">Desafio 02</a></button><br><br>
    <button><a href="/arquivos/desafio-03.php">Desafio 03</a></button><br><br>
    <button><a href="/arquivos/desafio-04.php">Desafio 04</a></button><br><br>
    <button><a href="/arquivos/desafio-05.php">Desafio 05</a></button><br><br>
    <button><a href="/arquivos/desafio-06.php">Desafio 06</a></button><br><br>
    <button><a href="/arquivos/desafio-07.php">Desafio 07</a></button><br><br>
    <button><a href="/arquivos/desafio-08.php">Desafio 08</a></button><br><br>
    <button><a href="/arquivos/desafio-09.php">Desafio 09</a></button><br><br>
    <button><a href="/arquivos/desafio-10.php">Desafio 10</a></button><br><br>
    <button><a href="/arquivos/desafio-11.php">Desafio 11</a></button><br><br>
    <button><a href="/arquivos/desafio-12.php">Desafio 12</a></button><br><br>

    <footer>
        <hr>
        <small>Desafios solucionados por Gabriel Braga Vitareli&copy;</small>
    </footer>
</body>
</html>