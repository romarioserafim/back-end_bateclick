
# back End Sistem para gerenciar carros e defeitos


Clone Repositório
```sh
git clone https://github.com/romarioserafim/back-end_bateclick.git
```

```sh
cd back-end_bateclick
```

Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto
```sh
php artisan key:generate
```


Acessar o projeto
[http://localhost:8989](http://localhost:8989)


as rotas disponiveis são :

## Para cadastrar novo veículo  - http://localhost:8989/api/veiculo - POST.
curl --location 'http://localhost:8989/api/veiculo' \
--header 'Content-Type: application/json' \
--data '{
    "modelo": "Palio",
    "fabricante": "Fiat",
    "ano": "2013",
    "preco": "20.000"
}'

## Para Editar veículo - http://localhost:8989/api/veiculo/9 - PUT

curl --location --request PUT 'http://localhost:8989/api/veiculo/9' \
--header 'Content-Type: application/json' \

--data '{
    "modelo": "Palio",
    "fabricante": "GM",
    "ano": "2008",
    "preco": "10.000"
}'


## Para deletar veículo - http://localhost:8989/api/defeito/8 - DELETE
curl --location --request DELETE 'http://localhost:8989/api/veiculo/1'

## Para listar veículos cadastrados http://localhost:8989/api/veiculo - GET

curl --location 'http://localhost:8989/api/veiculo'


## Para Salvar novo defeito - http://localhost:8989/api/defeito - POST

curl --location 'http://localhost:8989/api/defeito' \
--header 'Content-Type: application/json' \
--data '{
    "idVeiculo": "10",
    "descricao_defeito": "Problemas  no chicote"
}'

## Para Editar Defeito - http://localhost:8989/api/defeito/8 - PUT

curl --location --request PUT 'http://localhost:8989/api/defeito/8' \
--header 'Content-Type: application/json' \

--data '{
    "idVeiculo": "8",
    "descricao_defeito": "Problemas  correia"
}'

## Para deletar defeito - http://localhost:8989/api/defeito/8 - DELETE

curl --location --request DELETE 'http://localhost:8989/api/defeito/8' \













