# Operações CRUD

## Resumo

- C CREATE (INSERT) -> inserir dados
- R: READ (SELECT) -> ler/carregar dados
- U: UPDATE (UPDATE) -> atualizar dados
- D: DELETE (DELETE) -> excluir dados

## Exemplos
### INSERT na tabela de usuários
```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES('Vinicius','meuemail@hotmail.com','0123','admin');
```
```sql
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES('Fulanoo','fulano0123@hotmail.com','fulano123','admin');
```

### SELECT na tabela de usuários

```sql
SELECT nome, email FROM usuarios;
```

```sql
SELECT nome, email FROM usuarios;
WHERE tipo = 'admin';
```

```sql
SELECT * FROM usuarios WHERE id >1;
```

### UPDATE na tabela de usúarios
```sql
UPDATE usuarios SET tipo = 'editor'
WHERE id = 1;
```

### DELETE NA TABELA DE USÚARIOS

```SQL
DELETE FROM usuarios WHERE ID = 2;
```

```SQL
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES('Sr Madruga','madruga123@hotmail.com','madruga123','admin');
```

```SQL
INSERT INTO usuarios (nome, email, senha, tipo)
VALUES('Kiko','kiko123@hotmail.com','kiko123','editor');
```

```sql
SELECT nome, id, tipo FROM usuarios;
```
## Exemplo para notícias
### Inserir nóticias
```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
' Meu pai acertou uns numeros e ganhou na mega sena',
'jogou bons numeros e bla bla',
'vai pegar o premîo',
'premio.jpg',
1
);
```

```sql
INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES(
' Minha mãe ganhou na mega sena',
'e comprou uma casa ',
'e um carro',
'recompensa.jpg',
3
);
```
### Select em nóticias
```sql
SELECT titulo, data FROM noticias ORDER BY data DESC;
-- Usamos o ORDER BY data DESC para classificar em ordem
-- decrescente pela data
```
### SELECT com JOIN (consulta com junção de tabelas)
**Objetivo** realizar uma consulta que mostre a data o titulo da **e** e o nome do autor da noticia.

```sql
SELECT
noticias.data,
noticias.titulo,
usuarios.nome
FROM noticias JOIN usuarios
ON noticias.usuario_id = usuarios.id;
```