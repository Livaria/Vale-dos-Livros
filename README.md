# Vale dos livros

Neste projeto, nosso maior objetivo, acima de tudo, foi nossa aprendizagem. Visamos ampliar nosso conhecimento sobretudo na questão de programar, revisitando tanto linguagens que tinhamos mais experiência, quanto aprendendo e aprimorando habilidades em linguagens recém aprendidas. Com isso, é evidente que nossa maior prova de ter de fato dominado tais linguagens seria montando uma aplicação web dinâmica com banco de dados funcional

# Tecnologias utilizadas

Para realizar este projeto, utilizamos

- A linguagem de marcação **HTML**;
Para estilização **CSS** e **BOOTSTRAP**;

- As linguagens de programação **PHP** e **JAVASCRIPT**;

- E, no Banco de Dados, **MYSQL** e **XAMPP**;

## 🔗 Integrantes
[![GitHub](https://img.shields.io/badge/GitHub-Mylena-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Mylenacm)

[![GitHub](https://img.shields.io/badge/GitHub-Kevin-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/KevinBNobre)

[![GitHub](https://img.shields.io/badge/GitHub-Kauã-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Kauto22)

[![GitHub](https://img.shields.io/badge/GitHub-Henry-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/HenryV042)

[![GitHub](https://img.shields.io/badge/GitHub-Kelly-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Kelly-Romualdo)

# Construção do Banco de Dados

## Modelo Entidade Relacionamento (MER)

Nossa ideia de projeto consiste em uma aplicação leve sobre uma livraria que contém 3 entidades:  
- Clientes;
- Livros;
- Atendentes;
Para criar este banco, iniciamos com o **MER**, onde essas entidades se relacionam entre si por meio da *compra*. Isto é possível ver na imagem abaixo:


#### ➞ MER
![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/43fd5984-3a91-4e56-b5f0-8eda1f273bf0)

## Deploy

Logo em seguida, transformamos em um modelo lógico, por meio do **BrModelo**:


#### ➞ Modelo Lógico (Tabela)

![image](https://github.com/Livaria/Vale-dos-Livros/assets/145984011/64f3330a-9ab7-441d-81c0-ecf740541a3d)



## Modelo Físico

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
    id_atendente INT PRIMARY KEY,
    nome VARCHAR(100),
    telefone VARCHAR(100),
    contratacao VARCHAR(100),
    data_de_nascimento DATE,
    turno VARCHAR(100),
    sexo VARCHAR(100)
);

CREATE TABLE livro (
    id_livro INT PRIMARY KEY,
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
    id_compra INT PRIMARY KEY,
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



