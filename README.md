# Teste InovareTI

#### Objetivo:

Desenvolver uma aplicação Laravel ou PHP Puro, onde seja possível fazer o processo de reembolso de despesas. 
Autenticação

Permissão: Funcionário pode fazer pedidos de reembolso, gestores podem aprovar os pedidos

Tela de digitação de um novo reembolso:
- Deverá pegar automaticamente o usuário logado
- Informar o tipo de despesa (deverá ter um cadastro de tipos)
- Informar o valor
- O formulário deve permitir mais de um tipo de despesa por vez
Tela de aprovação:
- Irá exibir uma lista de reembolsos pendentes
- Permitir o gestor ver os detalhes
- Permitir o gestor aprovar ou reprovar

Para o front pode usar o que achar melhor, um template, VueJS e ou Bootstrap.

----------

#### tecnologias utilizadas
- Composer
- Wamp server
- VsCode
- PHP 7.4
- laravel 8x
- npm (gerenciador de pacotes) - node.js
  
#### Bibliotecas / Packages
- Jetstream (laravel/jetstream) + Livewire
- tailwindcss 3x
- Jquery-3.6.0
- Jquery-ui

----------

#### Instalação
Para instalação, irei partir do pressuposto que já tenha instalado e configurado o básico para rodar o PHP com o Laravel. Lembrando que eu utilizei as tecnologias ja citadas a cima.

1º Faça o clone desse repositório

2º Crie um Banco de Dados MySql (aqui eu utilizei o PHPMyAdmin para a criação).

3º Duplique o arquivo ".env.example" e renomeie para ".env".

4º Dentro do arquivo ".env" procure as configurações de Banco de Dados DB_CONNECTION=mysql DB_HOST=[NOME DO SEU HOST] DB_PORT=3306 DB_DATABASE=[NOME DO BANCO CRIADO NA ETAPA 2] DB_USERNAME=[USUARIO DO BANCO] DB_PASSWORD=[SENHA DO BANCO]

5º Irá precisar gerar uma "APP_KEY", abra em um terminal/CMD/Shell e navegue até a Raiz desse projeto, onde se localiza o arquivo artisan e execute o seguinte comando

`php artisan key:generate`

6º Agora precisa rodar as migration e para o banco não vir vazio pode rodar o seguinte comando

`php artisan migrate:fresh --seed`

Esse comando irá criar as tabelas no DB e popular com 40 produtos aleatórios e um usuário Admin.

Usuário: admin@gmail.com
Senha: admin

7º Por final basta rodar o servidor local do Laravel com o comando:

`php artisan serve`

----------

Por padrão o servidor iniciará no endereço: [http://127.0.0.1:8000](http://127.0.0.1:8000)

Se tudo ocorreu bem é para estar vendo a página inicial do Teste.

Obrigado!
Mateus Brandt
