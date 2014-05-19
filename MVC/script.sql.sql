CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(100) NOT NULL,
  `nome_fantasia` varchar(100) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `insc_est` varchar(9) NOT NULL,
  `data_fun` Date NOT NULL,
  `ramo_atv` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` int(8) NOT NULL NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` char(2) NOT NULL,
  `telefone` int(8) NOT NULL,
  `email` varchar(100),
  `socio` varchar(80),
  `cargo` varchar(80),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


CREATE TABLE `marketin_Comunicacao` (
  `produto_Mven` varchar(40) NOT NULL,
  `qtde_Mens` int() NOT NULL,
  `und_Med` CHAR(2) NOT NULL,
  `marg_lucro` int() NOT NULL,
  `faturamento` int() NOT NULL,
  `concorrente` varchar(14) NOT NULL,
  `vi_concorrente` CHAR(3) NOT NULL,
  `ponto_forte` varchar(100) NOT NULL,
  `ponto_melhoria` varchar(100) NOT NULL,
  `promocao` varchar(30) NOT NULL,
  `meio_ut` varchar(10) NOT NULL,
  `ponto_forte` varchar(100) NOT NULL,
  `sinalizacao` CHAR(3) NOT NULL,
  `espaco_prom` CHAR(3) NOT NULL,
) ENGINE=InnoDB;

CREATE TABLE `preco` (
  `forma_preco` varchar(20) NOT NULL,
  `preco_conc` varchar(10) NOT NULL,
) ENGINE=InnoDB;

CREATE TABLE `venda` (
`fat_MesAno` double(),
`fat_valor` double(),
`mov_incio` data,
`mov_fim` date,
`mov_dia` char(3),
`mov_horario` CHAR(5),
`form_pag` Varchar(20),
`vlr_diario` double(),
`vlr_mensal` double(),
)ENGINE=InnoDB;


CREATE TABLE `compra` (
`razao` varchar(80),
`uf` CHAR(2),
`produto` varchar(60),
`lot_minimo` int(),
`rela_forn` varchar(30),
`vlrCompra_mesAno` double(),
`vlr_compra` double()
)ENGINE=InnoDB;


CREATE TABLE `perfCliente` (
`cli_mensal` int(),
`perf_classA` float(),
`perf_classB` float(),
`perf_classC` float(),
`perf_classD` float(),
`perf_idadeA` float(),
`perf_idadeB` float(),
`perf_idadeC` float(),
`perf_idadeD` float(),
`perf_masc` float(),
`perf_fem` float(),
`venEmp_situ` CHAR(3),
`perct_fat` float(),
`vpesquisa_resp` varchar(15),
`frequencia` float()
)ENGINE=InnoDB;
