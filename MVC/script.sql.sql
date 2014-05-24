CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razao_social` varchar(100),
  `nome_fantasia` varchar(100),
  `cnpj` varchar(14),
  `insc_est` varchar(9),
  `data_fun` Date,
  `ramo_atv` varchar(30),
  `endereco` varchar(100),
  `bairro` varchar(100),
  `cep` int(8),
  `cidade` varchar(100),
  `uf` char(2),
  `telefone` int(8),
  `email` varchar(100),
  `socio` varchar(80),
  `cargo` varchar(80),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;


CREATE TABLE `marketin_Comunicacao` (
  `produto_Mven` varchar(40),
  `qtde_Mens` int(),
  `und_Med` CHAR(2),
  `marg_lucro` int(),
  `faturamento` int(),
  `concorrente` varchar(14),
  `vi_concorrente` CHAR(3),
  `ponto_forte` varchar(100),
  `ponto_melhoria` varchar(100),
  `promocao` varchar(30),
  `meio_ut` varchar(10),
  `ponto_forte` varchar(100),
  `sinalizacao` CHAR(3),
  `espaco_prom` CHAR(3),
) ENGINE=InnoDB;

CREATE TABLE `preco` (
  `forma_preco` varchar(20),
  `preco_conc` varchar(10),
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

CREATE TABLE `recursos_humanos` (
  `colab` int(),
  `colab_treino` varchar(40),
  `escolaridade` varchar(15),
  `crit_colab` varchar(35),
  `fat_cand` varchar(15),
  `atv_mot` varchar(25),
  `demi_contrat` varchar(100)
) ENGINE=InnoDB;

CREATE TABLE `administ_FinanContabil`(
  `fluxo_caixa` varchar(15),
  `controle_est` varchar(15),
  `contas_pagar` varchar(15),
  `contas_receb` varchar(15),
  `adm_compra` varchar(15),
  `adm_venda` varchar(15),
  `faturamento` varchar(15),
  `outros` varchar(40),
  `planej` varchar(30),
  `recurs_terc` varchar(30),
  `maior_gasto` varchar(30),
) ENGINE=InnoDB;

CREATE TABLE `administ_FinanContabil`(
  `impost` CHAR(3),
  `atu_fiscal` CHAR(3),
  `acao_judi` CHAR(3),
  `trat_forn` varchar(15),
  `cob_emp` varchar(20),
  `ass_juridica` CHAR(3),
  `parc_acic` varchar(100),
  `parc_unipar` varchar(100)
) ENGINE=InnoDB;
