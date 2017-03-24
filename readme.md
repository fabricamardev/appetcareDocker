MARDEV

Configurando o docker para rodar essa infraestrutura

OBS para windows:

1- Você deve ter o suporte a virtualização habilitado em seu computador;

2- Seu Windows deve ser 64bits versão 1607 e build: 14393.0;

3- Você deve habilitar o recurso do hyper-v;

DOWNLOADS

Docker para windows: https://www.docker.com/products/docker#/windows

Docker para Mac https://www.docker.com/products/docker#/mac

RODAR INFRAESTRUTURA:

1 - Clonar esse repositorio com o comando (pode copiar e colar):

git clone https://github.com/fabricamardev/appetcareDocker.git

2 - Entrar no diretorio docker com o comando (Windows/Mac/linux):

cd appetcareDocker

3 - Rodar os comandos abaixo antes de iniciar o container:

sudo chown -R :www-data appetcareDocker/
sudo chmod -R 755 appetcareDocker/

4 - De dentro do diretorio appetcareDocker iniciar o container com o comando:

docker-compose up -d

------------------------------------------------------------------------------

Feito isso os serviços podem ser acessados nas seguintes portas:

- mysql na porta 3306;
- laravel na porta 80 (http://localhost);
- PhpMyAdmin na porta 81 (http://localhost:81) user: root e senha: 123Mudar

ESTRUTURA DE PASTAS:

- public : Arquivos do módulo web (copiar aqui os arquivos do projeto)
- mysql : Arquivos de dados do Mysql (Não mexer manualmente!!!)
- sessions : Arquivos do PhpMyAdmin (Não mexer manualmente!!!)


Reportar dúvidas e erros para fabricamardev@gmail.com
