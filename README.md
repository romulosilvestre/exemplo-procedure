

# Executando Procedures com PHP

Esse projeto serve como base para a aula de Stored Proceudre do dia
09/11




## Professores


- [@Rômulo C. Silvestre](https://www.github.com/romulosilvestre)
- [@Karython Gomes](https://www.github.com/karythongomes)


## Autores

- [@Vinicius Ramos](https://www.github.com/viniciusr888)
- [@Otavio Mendes](https://www.github.com/otaviomendessantos)







## Stack utilizada

**Front-end:**  
![HTML](https://icons.iconarchive.com/icons/cornmanthe3rd/plex/48/Other-html-5-icon.png)  
![Bootstrap](https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white)  
**Back-end:**  
![PHP](https://icons.iconarchive.com/icons/simpleicons-team/simple/48/php-icon.png)  
**Banco de Dados**  
![MicrosoftSQLServer](https://img.shields.io/badge/Microsoft%20SQL%20Server-CC2927?style=for-the-badge&logo=microsoft%20sql%20server&logoColor=white)  


**Sites Utilizados para Markdown**  

https://readme.so/pt  
https://shields.io/  
https://simpleicons.org/  
https://github.com/Ileriayo/markdown-badges  
https://www.iconarchive.com/ 










## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/romulosilvestre/exemplo-procedure.git
```
---
Entre no diretório do projeto

```bash
  cd exemplo-procedure
```
---

Inicie o servidor

```bash
  Clique em Start no XAMPP para rodar o Apache (PHP)
```
---
Inicie o SGBD SQL Server

```bash
   Autenticar e abrir o SQL Server usuário:sa e senha:sena
```

```bash
   Executar código SQL no editor do SGBD SQL Server
```
---
Crie o banco

```bash
   CREATE DATABASE Romullus;
```
---

Use o banco
```bash
   USE Romullus;
```
---
Crie a procedure
```bash
IF OBJECT_ID('SomarNumeros','P') is not null 
  DROP PROCEDURE SomarNumeros; 
GO
CREATE PROCEDURE SomarNumeros  
    @X INT, 
    @Y INT
AS
BEGIN
    SELECT @X + @Y AS Soma; 
END;

GO  
IF OBJECT_ID('SomarNumeros','P') is not null 
  DROP PROCEDURE SomarNumeros; 
GO
CREATE PROCEDURE SomarNumeros  
    @X INT, 
    @Y INT
AS
BEGIN
    SELECT @X + @Y AS Soma; --realizando a soma
END;
```
---
Execute a procedure 
```bash
  EXEC SomarNumeros @X = 10, @Y = 20; 
```



