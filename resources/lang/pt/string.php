<?php

	return 	[ 'loginIndex' =>[
                'tituloLogin' => 'Autenticação',
                'campoEmail' => 'Seu e-mail',
                'campoSenha' => 'Sua senha',
                'btEntar'=> 'Entar',
                'linkRegistro'=> 'Novo cadastro',
                'linkRecuperarSenha'=>'Recuperar Senha'
            ],
             'pageRegistro' =>[
                'titulo' => 'Novo cadastro',
                'campoEmail' => 'Seu e-mail',
                'campoNome' => 'Seu nome',
                'campoSobreNome' => 'Seu sobre nome',
                'campoSenha' => 'Sua senha',
                'campoRepitirSenha' => 'Repita sua senha',
                'btSalvar'=> 'Salvar',
                'linkLogin'=> 'Voltar ao Login',
                'linkRecuperarSenha'=>'Recuperar Senha'
             ],
             'pageRecuperarSenha' =>[ 
                'titulo' => 'Recuperar Senha!',
                'mensagemInfo' => 'Você esqueceu sua senha?',
                'mensagemInstrucao' => 'Informe seu endereço de e-mail de acesso e enviaremos uma nova senha!',
                'campoEmail' => 'Informe seu e-mail',
                'btEnviar'=> 'Enviar nova senha',
                'linkRegistro'=> 'Novo cadastro',
                'linkLogin'=> 'Voltar ao Login',
             ],
             'pageHome' =>[
                'menu1'=>'Inicio',
                'menu2'=>'Registro de OP', 
                'menu3'=>'Produtos',
                'menu4'=>'Processos',
                'headPesquisa' =>'Pesquisa OP..',
                'headConfig' =>'Configurações',
                'headSair' =>'Sair',
                'tituloInicio'=>'Lista de Ordens de Produção (OP)',
                'tabOP'=>['N. Op','Descrição','Data Criação','Total Peças','Produzido(s)','Produto','Processo','Status','prioridade'],
                'tabOp1'=>'N. Op',
                'tabOp2'=>'Descrição',
                'tabOp3'=>'Data',
                'tabOp4'=>'Total Peças',
                'tabOp5'=>'Processo',
                'tabOp6'=>'Status',
                'tabOp7'=>'Prioridade',
                'tabOp8'=>'Detalhes',
                'footOP'=>'Ultimas atualizações ',    
                'btDetail'=>'Editar',    
                'btCriar'=>'Criar Novo',
                'btSalvar'=>'Salvar',
                'prioridade'=>[['st'=>'Normal','key'=>'1'],['st'=>'Média','key'=>'2'],['st'=>'Alta','key'=>'3']],
                'tituloProduto'=>'Lista de Produtos',
                'tabProduto'=>['Código','Nome','Data Criação'],
                'btGerarOp'=>'Gerar OP',
                'situacao'=>[['st'=>'Enable','key'=>'1'],['st'=>'Disable','key'=>'2']],
                'tituloCadastroProd'=>'Cadastro de Produto', 
                'campo1'=>'Código do Produto',
                'campo2'=>'Nome do Produto',
                'campo3'=>'Descricão do Produto',
                'tituloProcesso'=>'Lista Processo',
                'tabProcesso'=>['Código','Nome','Data Criação','status'],
                'tituloCadastroProcesso' =>'Cadastro de processo',
                'campoProcesso'=>'Código do processo',
                'campoNomeProcesso'=>'Nome do processo',
                'campoDecricaoProcesso'=>'Descrição do processo',
                'btAddFluxo'=>'Adicionar fluxo',
                'labelFluxoProcesso'=>'Fluxo do processo',
                'btRemover'=>'Remover',
                'tituloRegistroOp'=>'Registro de Ordem de Produção',
                'campoNumeroOp'=>'N. Op',
                'campoQuantidadeOp'=>'Quantidade',
                'campoDataInicioOp'=>'Data Inicio',
                'campoDataFimOp'=>'Data Fim',
                'campoDescricaoOp'=>'Descrição',
                'campoPrioridadeOp'=>'Prioridade',
                'campoProcessoOp'=>'Processo',
                'status'=>[['st'=>'Aguardando','key'=>'1'],['st'=>'Iniciado','key'=>'2'],['st'=>'Pausado','key'=>'3'],['st'=>'Finalizado','key'=>'4'],['st'=>'Cancelado','key'=>'5']],
                'btAtualizar'=>'Apontar',
                'qtdPrdud'=>'Quantidade produzido',
                'tituloApontamentoOp'=>"Apontamento de Ordem de Produção"
                ]   
            ];
        