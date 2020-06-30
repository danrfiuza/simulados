# Desafio gerador de programas de estudo

## Requisitos:
* Linguagem backend: Preferência por PHP;
* inguagem frontend: Vuejs;
* Banco de dados: MySQL.

1 - Montar uma árvore de assuntos

* Um assunto pode ter N assuntos como filhos. Um assunto filho pertencente a uma árvore não pode estar contida em outra.

2 - Criar uma entidade de Banca, Órgão e Questão

* Uma questão possui um assunto, um órgão e uma banca vinculada.

3 - Criar uma página de programa de estudos onde o aluno irá selecionar um órgão e banca

* Após criar o programa, deverá ser apresentado a árvore de assuntos para os filtros selecionados;

* Ao lado de cada assunto deverá ser apresentado a quantidade de questões.

RN1: O assunto que não possuir pai, será o primeiro nó da árvore;

RN2: Criar mais de uma árvore de assuntos;

RN3: Preciso de muitas questões para poder gerar programas de estudos diversos.

----
## Inicializando o projeto:

```
cp configs/php-fpm/.env.example simulados-web/.env
```
ou

```
./init.sh
```

## Portas da aplicação:
* 8000: API
* 8080: front-end
* 8082: Banco de dados
* 9000: webserver

## Estrutura do projeto:
* Pastas:
    * configs: diretório contendo as cofigurações do projeto
        * frontend: configurações do front-end
        * nginx: configurações do webserver
        * php-fpm: configurações da API
    * simulados-web: API
    * frontend: aplicação front-end
    * db: volume para armazenar o banco de dados localmente

## Diagrama ER
![img](https://raw.githubusercontent.com/danrfiuza/simulados/master/documentos/diagram.png)

## Funcionamento da aplicação
![img](https://raw.githubusercontent.com/danrfiuza/simulados/master/documentos/simulados.gif)
