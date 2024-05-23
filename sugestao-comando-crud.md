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