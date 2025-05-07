# 🌐 AliceNET – Mini Rede Social Multilíngue

AliceNET é uma rede social simples e funcional onde os usuários podem criar contas, fazer amizades, postar atualizações em tempo real e interagir por meio de um feed de notícias dinâmico. O sistema está traduzido em 20 idiomas, tornando-o acessível para uma audiência global.

🔗 Acesse o projeto online: [https://crowphilis.42web.io/AliceNET/](https://crowphilis.42web.io/AliceNET/)

---

## 🚀 Funcionalidades

- ✅ Cadastro e login de usuários
- ✅ Sistema de amizades (solicitações, aceitação, remoção)
- ✅ Publicações em tempo real no feed de notícias
- ✅ Visualização de nome e foto de perfil nos posts
- ✅ Suporte a **20 idiomas** com persistência via POST (sem recarregar páginas)
- ✅ Interface simples e intuitiva
- ✅ Totalmente responsivo e compatível com dispositivos móveis
- ✅ Projeto hospedado com SSL gratuito (HTTPS)

---

## 🧪 Tecnologias Utilizadas

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP (com uso do método POST para persistência)
- **Banco de Dados**: MySQL
- **Hospedagem**: InfinityFree
- **Outros recursos**: i18n manual com PHP, sistema de sessões, formulário com POST persistente

---

## 🛠️ Estrutura do Projeto

AliceNET/

├── assets/ # Imagens, ícones, CSS e JS

├── includes/ # Arquivos de conexão, funções e configurações

├── idiomas/ # Arquivos de tradução para os 20 idiomas

├── pages/ # Páginas internas como perfil, feed, login, etc.

├── index.php # Página inicial

├── login.php # Tela de login

├── register.php # Tela de cadastro

└── ... # Outros arquivos PHP e auxiliares

---

## ⚙️ Como rodar localmente

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/seu-usuario/AliceNET.git
   
Importe o banco de dados:

Abra o phpMyAdmin (via XAMPP ou Laragon)

Importe o arquivo de.sql (incluir no repositório)

Configure a conexão no arquivo:

includes/connection.php com seus dados de acesso local

Abra no navegador:

http://localhost/AliceNET/

---

📚 Créditos
Desenvolvido por KyleNT
Hospedagem gratuita com SSL: InfinityFree

📄 Licença
Este projeto é de código aberto e livre para fins de estudo e aprendizado.
