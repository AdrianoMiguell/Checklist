
# Checklist Sistem 

Sistema de checklist para organização de tarefas diárias, semanais mensais. Feito em laravel.
<p align="right"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="150" alt="Laravel Logo"></a></p>
## Inicio

O github disponibiliza de diversos modos para fazer upload do codigo. 
<p align="center"> 
<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-git-upload-code.png" width="400" alt="Upload code">
</p>
Aqui estão duas dessas formas:
<p style="display: block"> 
   <strong> 1 - </strong>  Vá até uma pasta reservada para o projeto e use o comando no "git bash" : 
    
    git clone https://github.com/AdrianoMiguell/Checklist.git

</p>
<p style="display: block"> 
    <strong> 2 - </strong>  Baixe o arquivo .zip do código, clicando no botão "Download .ZIP"
</p>

## Pré Requisitos

``` Ter suporte a linguagem PHP em sua maquina ```

``` Ter um editor de código (Ex.: Visual Studio Code) ```

``` Ter um sistema de hospedagem local, com suporte a banco de dados (Ex.: Xampp ) ```

``` Ter instalado em sua maquina o Gerenciador de dependências Composer ```

``` Ter instalado em sua maquina o framework Laravel ```


## Preparando ambiente

-- Abra o terminal, e na pasta do projeto, execute o código: ``` composer install ```

-- Ligue o seu servidor local apache e o servidor de banco de dados

-- Acesse a sua ferramenta de banco de dados, e crie um banco de dados com um nome que desejar (Ex: checklist);

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-create-database.png" width="600" alt="criando o database" />

-- Agora, vá a raiz do código, copie um arquivo chamado  ``` .env.example ```  e cole-o nesse mesmo local.

-- Encontre esse trecho do código ``` DB_DATABASE ```  e troque o nome do banco, pelo nome do banco de dados que você acabou de criar. 

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-copiar-colar-.env-e-renomear-DB_DATABASE.png" width="600" alt="criando o database" />

-- Vá ao terminal e digite este código para que as tabelas do banco sejam construidas altomaticamente:  ``` php artisan migrate ``` .  
As seguintes tabelas devem aparecer no banco de dados.

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-tabelas-criadas.png" width="600" alt="criando o database" />

-- Agora, execute esse código no terminal, para geração de uma chave criptografada exigida pelo artisan: ``` php artisan key:generate ```

-- Finalmente, execute o código no terminal, para visualização do sistema:  ``` php artisan serve ``` . 

<div align="center">
<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-homepage.jpg" width="400" alt="visualização do sistema" />

<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-workspace.jpg" width="400" alt="visualização do sistema" />
</div>

<div align="center">
<img src="https://github.com/AdrianoMiguell/Checklist/blob/main/.github/github_images/checklist-example-tasks.jpg" width="400" alt="visualização do sistema" />
</div>



