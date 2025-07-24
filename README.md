
###  `README.md`

````markdown
# Projeto Laravel com Docker — Monstros S.A.

Este projeto utiliza Laravel 12 com Docker e MySQL. Siga os passos abaixo para subir o ambiente e executar as configurações iniciais.

---

##  Subindo o ambiente

Execute este comando para construir e iniciar os containers:

```bash
docker-compose up -d --build
````

---

##  Acessando o container da aplicação

Entre no container do Laravel (chamado `app`):

```bash
docker-compose exec app bash
```

---

##  Instalando as dependências do Laravel

Dentro do container, vá para a pasta do projeto:

```bash
cd src
```

Instale as dependências com o Composer:

```bash
composer install
```

---

## Configurando o ambiente

Copie o arquivo de exemplo `.env` e gere a chave da aplicação:

```bash
cp .env.example .env
php artisan key:generate
```

---

##  Executando as migrations

Crie as tabelas no banco de dados com:

```bash
php artisan migrate
```

---

##  Rodando os seeders

Popule o banco de dados com dados iniciais:

```bash
php artisan db:seed
```

---

##  Pronto!

Acesse sua aplicação em:

```
http://localhost:8080
```

A API `/api/doors` já deve estar disponível se o projeto estiver configurado corretamente.

---

##  Requisitos

* Docker
* Docker Compose

```

---

Se quiser, posso gerar o arquivo `README.md` automaticamente e colocá-lo dentro do seu projeto `src/` agora. Deseja?
```
