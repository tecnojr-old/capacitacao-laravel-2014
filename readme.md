Projeto Escola - Aplicação Laravel Framework.
=

O Objetivo desse projeto é demonstrar as funcionalidades básicas do laravel a partir da construção de um aplicativo para escolas, onde teremos: Alunos, Professores, Disciplinas e Turmas cadastrados.

Dependências do projeto
=
* [Bower](http://bower.io/) - Gerenciador de dependêncais Front-End
* [Composer](http://getcomposer.org) - Gerenciador de dependências Back-End*

Após instalar o composer e o bower na sua máquina e baixar os códigos em, por exemplo, <code>/projects/tecnojr-escola</code>, 
a instalação deve ser feita por terminal, shell, bash ou ms-dos: (Execute os comandos um por vez, e sem copiar os comentários, pode dar erro)

```sh
cd /projects/tecnoje-escola #caminha ate a pasta do projeto
composer update #atualiza as dependencias do back-end
bower pudate    #atualiza as dependencias do front-end
```

Feito isso, a aplicação está pronta para ser iniciada. Na pasta do projeto <code>/projects/tecnojr-escola</code> :
```sh
php artisan serve --port=80
```

e então no seu navegador você poderá acessar http://localhost.
