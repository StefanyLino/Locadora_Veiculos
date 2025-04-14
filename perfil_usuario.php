
<?php
// Back-end
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM - Locadora de Veículos</title>

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link ícones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body class="container py-4">
    <div class="container py-4">
        <!-- Mensagem de "Bem-Vindo" -->
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center inicio">
                    <h1>Sistema de Locadora de Veículos</h1>
                    <div class="d-flex align-items-center gap-3 user-info mx-3">
                        <span class="user-icon">
                            <i class="bi bi-person-circle" style="font-size: 24px;"></i>
                        </span>
                        <!-- Bem vindo, [usuário] -->
                        <span class="welcome-text">
                            Bem-vindo, <strong>Usuário</strong>!
                        </span>
                        <!-- Botão de LogOut -->
                        <a href="#" class="btn btn-outline-danger d-flex align-items-center gap-1">
                            <i class="bi bi-box-arrow-right"></i>
                            Sair
                        </a>
                    </div>
                </div>
            </div>
        </div>

            <div class="col md-6">
                <div class="card h-100">
                    <div class="card-header">
                        <h4 class="mb-0">Calcular a previsão de aluguel 💵</h4>
                    </div>
                    <div class="card-body">
                        <form action="" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="tipo" class="input-label">
                                    Tipo de veículo:
                                </label>
                                <select class="form-select" name="tipo" id="tipo" required>
                                    <option value="empty"></option>
                                    <option value="carro">Carro</option>
                                    <option value="moto">Moto</option>
                                    <option value="caminhão">Caminhão</option>
                                    <option value="van">Van</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">
                                    Quantidade de dias:
                                </label>
                                <input type="number" name="dias_calculo" class="form-control" value="1" required>
                            </div>
                            <button class="btn btn-success w-100" type="submit" name="calcular">Calcular previsão</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABELA DE VEÍCULOS CADASTRADOS -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2">
                            Veículos Cadastrados 
                        </h4>
                        <p class="mt-2">Clique em cima para mais detalhes:</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <th>Tipo</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </thead>
                                <tbody data-bs-toggle="modal" data-bs-target="#carro">
                                    <td>Carro</td>
                                    <td>Uno</td>
                                    <td>ABC1D34</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <!-- Veículo disponível -->
                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>
                                            </div>
                                            </form>
                                        </div>
                                    </td>

                                    <div class="modal fade" id="carro">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Carro</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>🚗 Fiat Uno Mille Economy 1.0 – 2013<br>
                                                        <br>
                                                        Prático, econômico e resistente, o Uno Mille é o carro ideal para quem procura baixo custo de manutenção e consumo eficiente de combustível. Com motor 1.0 flex, esse compacto se destaca no uso urbano, enfrentando o dia a dia com leveza e agilidade. Ideal para frotas, entregas rápidas ou uso pessoal simples.<br>
                                                        <br>
                                                        <b>Cor:</b> Branco<br>
                                                        <b>Combustível:</b> Gasolina/Etanol<br>
                                                        <b>Destaques:</b> Direção mecânica, vidros manuais, manutenção barata.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tbody>
                                <tbody data-bs-toggle="modal" data-bs-target="#moto">
                                    <td>Moto</td>
                                    <td>Honda CG 160 Titan</td>
                                    <td>FAL1K23</td>
                                    <td>
                                        <span class="badge bg-warning">
                                            Alugado
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <div class="modal fade" id="moto">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Moto</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        🏍️ Honda CG 160 Titan – 2022<br><br>
                                                        A CG 160 Titan é sinônimo de confiabilidade e economia. Com visual moderno, painel digital e motor flex 160cc, essa moto oferece ótimo desempenho tanto para uso urbano quanto para pequenas viagens. Confortável, com baixa vibração e excelente autonomia, é uma das motos mais queridas do Brasil.<br><br>
                                                        <b>Cor:</b> Vermelha<br>
                                                        <b>Combustível:</b> Gasolina/Etanol<br>
                                                        <b>Destaques:</b> Injeção eletrônica, freios CBS, tanque de 16,1L.<br>
                                                        
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </td>
                                </tbody>
                                <tbody data-bs-toggle="modal" data-bs-target="#caminhao">
                                    <td>Caminhão</td>
                                    <td>Volvo FH 540</td>
                                    <td>GRT9X77</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <!-- Veículo disponível -->
                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                <button class="btn btn-primary" name="alugar" type="submit">Alugar</button>

                                                <div class="modal fade" id="caminhao">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Caminhão</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        🚛 Volvo FH 540 – 2020<br><br>
                                                        Potência, segurança e tecnologia definem o FH 540. Esse caminhão pesado da Volvo é voltado para transporte de longa distância, com motor de 13 litros e 540 cavalos de potência. Equipado com freios ABS, ar-condicionado, computador de bordo e cabine leito, oferece conforto ao motorista e robustez na estrada.<br><br>
                                                        <b>Cor:</b> Branco<br>
                                                        <b>Combustível:</b> Diesel<br>
                                                        <b>Destaques:</b> Transmissão I-Shift, controle de estabilidade, baixo consumo para a categoria.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>
                                            </form>
                                        </div>
                                    </td>
                                </tbody>
                                <tbody data-bs-toggle="modal" data-bs-target="#van">
                                    <td>Van</td>
                                    <td>Fiat Ducato Maxi</td>
                                    <td>MVD4J89</td>
                                    <td>
                                        <span class="badge bg-success">
                                            Disponível
                                        </span>
                                    </td>
                                    <td>
                                        <div class="action-wrapper">
                                            <form action="post" class="btn-group-actions">

                                            <!-- Botão Deletar (sempre disponível para 'ADM') -->
                                             <button class="btn btn-danger btn-sm delete-btn" type="submit" name="Deletar">
                                                Deletar
                                            </button>

                                            <!-- Botões condicionais -->
                                            <div class="rent-group">
                                                <!-- Veículo alugado -->
                                                <button class="btn btn-warning btn-sm" type="submit" name="Devolver">Devolver</button>

                                                <!-- Veículo disponível -->
                                                <input type="number" name="dias" class="form-control days-input" value="1" min="1" required>
                                                <button class="btn btn-primary" name="alugar"  data-bs-toggle="modal" data-bs-target="#formulario">Alugar</button>
                                                <div class="modal fade" id="formulario">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Banheiro</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Este projeto de banheiro foi desenvolvido para oferecer um ambiente sofisticado e funcional, ideal para o bem-estar diário. Utilizei materiais nobres, como revestimentos em porcelanato de grandes formatos e bancadas de mármore, que conferem um visual elegante e clean. A distribuição dos elementos foi pensada para otimizar o espaço, garantindo conforto e praticidade. A iluminação foi cuidadosamente planejada para destacar os detalhes e criar uma atmosfera relaxante, com luz suave e pontual. O resultado é um banheiro moderno, aconchegante e eficiente, proporcionando uma experiência de cuidados pessoais única e agradável.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="modal fade" id="van">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Van</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        🚐 Fiat Ducato Maxi Cargo – 2023<br><br>
                                                        Versátil e moderna, a Fiat Ducato Maxi é ideal para entregas urbanas ou transporte de cargas leves com agilidade. Possui espaço interno otimizado, motor econômico e direção hidráulica. Uma ótima escolha para empresas que buscam eficiência logística com conforto e economia.<br><br>
                                                        <b>Cor:</b> Prata<br>
                                                        <b>Combustível:</b> Diesel<br>
                                                        <b>Destaques:</b> Capacidade de carga de até 1.600 kg, ar-condicionado, porta lateral deslizante.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            </div>

                                            </form>
                                        </div>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>