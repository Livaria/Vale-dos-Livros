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

![App Screenshot](https://static0.gamerantimages.com/wordpress/wp-content/uploads/2021/12/Yakuza-Dancing-Friday-Night-Majima-Kiryu.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5)


![App Screenshot](https://static0.gamerantimages.com/wordpress/wp-content/uploads/2021/12/Yakuza-Dancing-Friday-Night-Majima-Kiryu.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5)


![App Screenshot](https://static0.gamerantimages.com/wordpress/wp-content/uploads/2021/12/Yakuza-Dancing-Friday-Night-Majima-Kiryu.jpg?q=50&fit=contain&w=1140&h=&dpr=1.5)

