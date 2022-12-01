CREATE DATABASE IF NOT EXISTS Captour
DEFAULT CHARACTER SET UTF8
DEFAULT COLLATE UTF8_GENERAL_CI;

USE Captour;

CREATE TABLE IF NOT EXISTS CONTATO (
    IDCONTATO INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    MENSAGEM TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS CADASTRO (
    IDCADASTRO INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL,
    SENHA INT NOT NULL,
    STATUS INT NOT NULL
);

CREATE TABLE IF NOT EXISTS FOTOS (
    IDFOTOS INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IMAGEM TEXT NOT NULL
);
CREATE TABLE IF NOT EXISTS PONTOS (
    IDPONTOS INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(255) NOT NULL,
    DESCRICAO TEXT NOT NULL,
    IDFOTOS INT NOT NULL,
    CONSTRAINT FK_FOTOS FOREIGN KEY (IDFOTOS) REFERENCES FOTOS(IDFOTOS)
);

CREATE TABLE IF NOT EXISTS POUSADAS (
    IDPOUSADAS INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NOME VARCHAR(255) NOT NULL,
    DESCRICAO TEXT NOT NULL,
    IDFOTOS INT NOT NULL,
    CONSTRAINT FK_FOTOS_POUSADAS FOREIGN KEY (IDFOTOS) REFERENCES FOTOS(IDFOTOS)
);
 
INSERT INTO `cadastro` (`IDCADASTRO`, `nome`, `email`, `senha`, `status`) VALUES
(4, 'Jamilly', 'jamilly@gmail.com', 123, 1),
(5, 'Ana', 'ana@gmail.com', 123, 0),
(6, 'Madu', 'madu@gmial.com', 123, 0),
(7, 'Iza', 'Iza@gmail.com', '123', 1);

INSERT INTO FOTOS (IMAGEM)
VALUES ("https://github.com/JamillyNascimento/Captour/blob/main/images/foto1.jpg"),
("https://github.com/JamillyNascimento/Captour/blob/main/images/foto2.jpg"),
("https://github.com/JamillyNascimento/Captour/blob/main/images/foto3.jpg");

INSERT INTO PONTOS (NOME, DESCRICAO, IDFOTOS)
VALUES ("Cachoeira Cascatinha", "A propriedade é particular, por isso é cobrada uma taxa para passar o dia (por volta de R$25,00 por pessoa). Para quem gosta de se aventurar, tem a possibilidade de descer pelas pedras e encontrar outras quedas d’Água. Comum nas cachoeiras, algumas pedras são extremamente lisas e fáceis de escorregar, cuidado redobrado na hora de passar por elas nunca é demais. Quando o tempo forma para chuva é recomendado sair da água, pois a forte tromba d’água pode causar acidentes, deixando algumas pessoas ilhadas. Em dias de verão é um ótimo espaço para tomar sol e aproveitar tudo aquilo que a natureza oferece com calor e diversão.", 1),
("Cachoeira Casca D'Anta", "A cachoeira Casca D’Anta é com certeza a principal atração e cartão-postal da Serra da Canastra. Possui uma sequência de cinco quedas das águas do rio São Francisco, sendo que a maior delas tem mais ou menos 188 metros de altura. Pode ser acessada por duas estradas: por cima, pela portaria 1, a 37km de São Roque de Minas, seguindo pela estrada principal e entrando à esquerda na bifurcação a 28km. Dispõe de quiosque de palha para descanso e banheiros. Os melhores poços para banho da região e a primeira queda da Casca D’Anta. Depois da primeira queda existe um grande poço e o rio segue por uma garganta (local perigoso) para depois despencar 188m. na queda principal.", 2),
("Cachoeira do Filó", "A Cachoeira do Filó costuma fazer parte de diversas rotas de passeio, exatamente por ter acesso muito fácil e estar a apenas 3 km do Mirante dos Cânions de Capitólio. Vale dizer que o valor do ingresso (R$ 10) não costuma estar incluído no passeio com agência. A Cachoeira do Filó é uma das mais fáceis de serem visitadas nos arredores de Capitólio e por isso mesmo costuma ser uma das mais cheias. Localizada à beira da MG-050 e praticamente sem trilha a ser percorrida, ela é o destino ideal para quem não quer esforço nenhum e deseja apenas um delicioso banho sob uma boa queda d’água. Bastará descer poucos metros caminhando na trilha de terra (menos de cinco minutos) para já estar de frente para a cachoeira.", 3);

INSERT INTO POUSADAS (NOME, DESCRICAO, IDFOTOS)
VALUES ("Pousada Serra Verde", "Apresentando uma piscina ao ar livre, a Pousada Serra Verde está localizada a 20 km do Canyon Furnas. Entre as várias comodidades da propriedade estão um jardim e um lounge compartilhado. Para sua comodidade, o Wi-Fi é gratuito.", 1),
("Terrazzo Suítes", "Dispondo de Wi-Fi gratuito em toda a propriedade, a Terrazzo Suites está situada em Capitólio, a 26 km do Canyon de Furnas. Todos os quartos desta pousada possuem ar-condicionado, TV de tela plana e banheiro privativo com chuveiro. Algumas unidades contam com uma sacada ou varanda.", 2),
("Pousada Solar Dona Dora", "Apresentando instalações de esportes aquáticos, a Pousada Solar Dona Dora é uma pousada situada em Capitólio, a 18 km do Cânion de Furnas. Além de serviço de quarto, esta propriedade também conta com restaurante. A propriedade oferece vista da montanha e piscina ao ar livre.", 3);
