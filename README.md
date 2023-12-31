# Vale dos livros

Neste projeto, nosso maior objetivo, acima de tudo, foi nossa aprendizagem. Visamos ampliar nosso conhecimento sobretudo na questão de programar, revisitando tanto linguagens que tinhamos mais experiência, quanto aprendendo e aprimorando habilidades em linguagens recém aprendidas. Com isso, é evidente que nossa maior prova de ter de fato dominado tais linguagens seria montando uma aplicação web dinâmica com banco de dados funcional

## Tecnologias utilizadas

Para realizar este projeto, utilizamos

- A linguagem de marcação **HTML**;
Para estilização **CSS** e **BOOTSTRAP**;

- As linguagens de programação **PHP** e **JAVASCRIPT**;

- E, no Banco de Dados, **MYSQL** e **XAMPP**;

## 🔗 Integrantes
[![GitHub](https://img.shields.io/badge/GitHub-Mylena35-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Mylenacm)

[![GitHub](https://img.shields.io/badge/GitHub-Kevin32-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/KevinBNobre)

[![GitHub](https://img.shields.io/badge/GitHub-Kauã30-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Kauto22)

[![GitHub](https://img.shields.io/badge/GitHub-Henry25-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/HenryV042)

[![GitHub](https://img.shields.io/badge/GitHub-Kelly31-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Kelly-Romualdo)

# Construção do Banco de Dados

## Modelo Entidade Relacionamento (MER)

Nossa ideia de projeto consiste em uma aplicação leve sobre uma livraria que contém 3 entidades:  
- Clientes;
- Livros;
- Atendentes;
Para criar este banco, iniciamos com o **MER**, onde essas entidades se relacionam entre si por meio da *compra*. Isto é possível ver na imagem abaixo:


#### ➞ MER
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/43fd5984-3a91-4e56-b5f0-8eda1f273bf0)


Logo em seguida, transformamos em um modelo lógico, por meio do **BrModelo**:


#### ➞ Modelo Lógico (Tabela)

![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/64f3330a-9ab7-441d-81c0-ecf740541a3d)



####  ➞ Modelo Físico

Enfim, passamos as tabelas para modelo físico, tendo o código sql gerado pelo próprio **BrModelo**:

```SQL
  CREATE TABLE cliente_ (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    telefone VARCHAR(100),
    nome VARCHAR(100),
    cpf VARCHAR(100),
    sexo VARCHAR(100),
    endereco VARCHAR(100)
);

CREATE TABLE atendente (
    id_atendente INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100),
    telefone VARCHAR(100),
    contratacao VARCHAR(100),
    data_de_nascimento DATE,
    turno VARCHAR(100),
    sexo VARCHAR(100)
);

CREATE TABLE livro (
    id_livro INT PRIMARY KEY AUTO_INCREMENT,
    titulo VARCHAR(100),
    categoria VARCHAR(100),
    isbn INT,
    editora VARCHAR(100),
    autor VARCHAR(100),
    estoque INT,
    valor DECIMAL
);

CREATE TABLE compra_cliente__atendente_livro (
    fk_cliente__id_cliente INT,
    fk_atendente_id_atendente INT,
    fk_livro_id_livro INT,
    id_compra INT PRIMARY KEY AUTO_INCREMENT,
    titulo_livro VARCHAR(100),
    nome_cliente VARCHAR(100),
    nome_atendente VARCHAR(100),
    data_compra DATE,
    valor_unit DECIMAL(10,2),
    quantidade INT,
    valor_total DECIMAL(10,2)
);
 
ALTER TABLE compra_cliente_atendente_livro ADD CONSTRAINT FK_compra_cliente_atendente_livro_1
    FOREIGN KEY (fk_cliente__id_cliente)
    REFERENCES cliente_ (id_cliente)
    ON DELETE RESTRICT;
 
ALTER TABLE compra_cliente_atendente_livro ADD CONSTRAINT FK_compra_cliente_atendente_livro_2
    FOREIGN KEY (fk_atendente_id_atendente)
    REFERENCES atendente (id_atendente)
    ON DELETE RESTRICT;
 
ALTER TABLE compra_cliente_atendente_livro ADD CONSTRAINT FK_compra_cliente_atendente_livro_3
    FOREIGN KEY (fk_livro_id_livro)
    REFERENCES livro (id_livro)
    ON DELETE NO ACTION;
```

Gerando, assim, as tabelas e seus atributos:

#### ➞ Atendente
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/13c45ac8-fba5-4c14-98f6-2a61d34935b5)

#### ➞ Cliente
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/7d73aca6-eaf0-4b38-baab-12d06f480967)

#### ➞ Livro
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/a0bfc5bc-7d3d-4f03-a771-773b0c656047)

#### ➞ Compra
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/a6a4642d-d721-41ce-aa48-b073d4f47c4a)

## Aplicação

Com o banco de dados criado e estruturado, partimos para a construção da aplicação web;

Logo abaixo, temos a tela inicial, composta por 5 botões:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/f00dcb1a-39d9-4cda-9db9-1507cf83113e)
Cada um desses botões acima leva para diferentes áreas, ou telas, como preferir.
#### ➞ Livros:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/a1b36992-b7ee-4faa-8d7a-5d07ec50911b)
#### ➞ Cadastro de cliente:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/526c1875-3233-4063-afa8-743cf9bd66a0)
#### ➞ Cadastro de atendente:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/5dfa6a3a-9f2b-4e88-9176-531f59ce3d7d)
#### ➞ Compras:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/55579274-9e25-4248-9f02-81ebb98dc37a)
#### ➞ Dados:
Após preencher os dados em cada tela (atendentes, clientes, livros e compras), há um botão escrito "Dados", no qual é possível ver os dados em geral do sitema:

####  • Atendente:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/f41fbb3b-df0d-477e-ac1d-e5369a3aa475)

####  • Cliente:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/3ef623f2-f14b-452d-a649-ab62c82fd8ed)

####  • Livro:
![alo](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/078ccc41-c329-42bf-941e-288284265031)

####  • Compra:
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/e0b73c9f-2f1e-4f0a-bc74-5421a0048c29)

####  • Gráficos:
Na aplicação, por fim, também é possível visualizar gráficos com alguns dados do sistema, como, por exemplo divisão de gênero dos clientes, livros mais vendidos, entre outros.
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/42dce57f-99fe-4f00-ae58-e139b774e048)

## Consultas
Para fnalizar, iremos realizar dez consultas no banco de dados.

####  ➞ Listar todos os clientes no banco de dados

```Sql
  SELECT * FROM cliente;
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/89d07771-6d5d-4804-bf42-3a38abc380f4)

####  ➞ Listar todos os atendentes do sexo feminino contratados após uma data específica

```Sql
  SELECT * FROM atendente WHERE sexo = 'Feminino' AND contratacao > '2023-01-01';
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/4a5291fc-65bf-436a-a9b3-a838350bf799)

####  ➞ Calcular o valor total gasto por cada cliente em compras:
```Sql
  SELECT nome_cliente, SUM(valor_total) AS total_gasto
  FROM compra
  GROUP BY nome_cliente;
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/54fd2e77-b1ad-408a-aaea-eaf98aa1e0c6)



####  ➞ Encontrar o atendente que fez o maior número de vendas:

```Sql
    SELECT nome_atendente, COUNT(*) AS num_vendas
    FROM compra
    GROUP BY nome_atendente
    ORDER BY num_vendas DESC
    LIMIT 1;
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/0dabcb7d-aba8-4812-b9cf-6a5dcf7849ea)

####  ➞ Listar os livros com estoque abaixo de 60 unidades:

```Sql
  SELECT * FROM livro WHERE estoque < 60;
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/18347d45-ed17-4379-976d-2c4ccd410e7c)

####  ➞ Calcular o valor total das compras de um cliente específico(João Silva):

```Sql
    SELECT SUM(valor_total) AS total_gasto
    FROM compra
    WHERE nome_cliente = 'João Silva';
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/39c469a4-fd3d-4e04-9cde-8689e11f78e5)

####  ➞ Encontrar os clientes que compraram livros da categoria 'Romance':

```Sql
  SELECT DISTINCT c.nome
    FROM cliente c
    JOIN compra com ON c.nome = com.nome_cliente
    JOIN livro l ON com.titulo_livro = l.titulo
    WHERE l.categoria = 'Romance';
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/d0c2dcad-2634-40af-a82a-b97f3e395970)

####  ➞ Listar os livros comprados por um cliente específico(João da Silva):

```Sql
  SELECT com.titulo_livro
    FROM compra com
    WHERE com.nome_cliente = 'João Silva';
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/025e18a6-d26c-43ea-ade0-55b9e3000de3)

####  ➞ Encontrar o autor com mais livros no catálogo:

```Sql
  SELECT autor, COUNT(*) AS num_livros
    FROM livro
    GROUP BY autor
    ORDER BY num_livros DESC
    LIMIT 1;
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/4f7e8458-94b8-452c-bad0-3e0af1d2604d)

####  ➞ Calcular o valor médio dos livros em cada categoria:

```Sql
    SELECT categoria, AVG(valor) AS valor_medio
    FROM livro
    GROUP BY categoria;
```
####  ➞ Saída
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/4695d751-910c-4945-9e9b-a55016296312)

## Conclusão

O trabalho de banco de dados proposto pelo professor Adeilson representou uma oportunidade valiosa para nossa equipe composta por José Henry Viana Saboia - 25, Mylena Carvalho Duarte Mourão - 35, Kevin Beserra Nobre - 32, Kelly Romualdo Palhano Bezerra - 30 e Kauã Silva Barreto Caldas - 31. Neste projeto, aplicamos nossos conhecimentos em SQL e PHP para criar um banco de dados responsivo e eficiente.

Todos os arquivos relacionados ao trabalho estão prontamente disponíveis em nosso repositório no github, demonstrando nossa dedicação e comprometimento com a transparência e a acessibilidade. Trabalhamos de forma colaborativa e bem coordenada para atender aos requisitos do projeto e alcançar nossos objetivos com sucesso.

Este projeto de banco de dados não apenas fortaleceu nossa compreensão dos conceitos fundamentais de gerenciamento de dados, mas também aprimorou nossas habilidades práticas em SQL e PHP. Estamos orgulhosos do trabalho que realizamos e estamos ansiosos para aplicar esse conhecimento em projetos futuros e desafios relacionados a banco de dados.


