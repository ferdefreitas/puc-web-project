-- Inserir dados na tabela de usuários
INSERT INTO usuarios (nome, senha)
VALUES
    ('João Silva', 'senha123'),
    ('Maria Oliveira', 'senha456'),
    ('Carlos Souza', 'senha789');

-- Inserir dados na tabela de produtos
INSERT INTO produtos (nome, preco)
VALUES
    ('Notebook', 3500.00),
    ('Smartphone', 2000.00),
    ('Tablet', 1500.00),
    ('Fone de Ouvido', 200.00);

-- Inserir dados na tabela de pedidos
INSERT INTO pedidos (id_usuario, id_produto, quantidade)
VALUES
    (1, 1, 1), -- João comprou 1 Notebook
    (1, 3, 2), -- João comprou 2 Tablets
    (2, 2, 1), -- Maria comprou 1 Smartphone
    (3, 4, 3); -- Carlos comprou 3 Fones de Ouvido
