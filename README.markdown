Código fonte do site partidopirata.org
===

Este repositório compreende o arquivo [docker-compose](https://docs.docker.com/compose/overview) e os arquivos de [plugins](https://wordpress.org/plugins/) e [temas](https://wordpress.org/themes/) do [wordpress](https://wordpress.org/) para o site <http://partidopirata.org>.

Instruções
---

### Docker

Para usar o site localmente, é necessário primeiro instalar o [Docker](https://docs.docker.com).

#### Instalar docker-engine

As instruções para isto dependem do sistema operacional de quem for instalar. Leia o manual: <https://docs.docker.com/engine/installation/>

#### Instalar docker-compose

A instalação do `docker-compose` também depende do ambiente. Leia o manual: <https://docs.docker.com/compose/install/>

#### Configurar ambiente

Copie os arquivos `mariadb.env.exemplo` e `wordpress.env.exemplo` para `mariadb.env` e `wordpress.env`, respectivamente. Defina as senhas do banco de dados nestes arquivos.

O seguintes valores devem ser **iguais**:

Valor em `mariadb.env` | Valor em `wordpress.env`
--- | ---
`MYSQL_DATABASE` | `WORDPRESS_DB_NAME`
`MYSQL_USER` | `WORDPRESS_DB_USER`
`MYSQL_PASSWORD` | `WORDPRESS_DB_PASSWORD`

### Iniciar serviço

Caso tudo esteja devidamente instalado e configurado, o seguinte comando fará tudo acontecer magicamente (ou causar um problema difícil de recuperar caso as instruções não tenham sido lidas):

```
docker-compose up -d
```

O site deve estar acessível no navegador web no endereço `http://localhost`.

#### Erro ao conectar ao banco de dados!

A primeira vez que o serviço for iniciado, o banco de dados será populado com o conteúdo do arquivo `dump.sql` o que pode levar algum tempo dependendo da velocidade da máquina. Enquando os dados estiverem sendo carregados, o wordpress vai ficar tentando conectar sem sucesso. Após alguns minutos tudo deve funcionar e nas próximas vezes o wordpress vai rodar instantâneamente.


Problemas
---

Ajuda é bem vinda.

### Como ajudar

Tente falar com o GTI pelos métodos propostos no [site](https://gti.partidopirata.org), ou então envie pull requests no [github](https://github.com/piratas) ou mesmo no [notabug](https://notabug.org/piratas).
