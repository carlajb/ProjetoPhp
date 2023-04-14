<html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>>
<script type="text/javascript" src="./assets/Ajax/returnClick.js"></script>
</html>

<?php require_once "./DataRequest.php";
 include_once "./DataRequest.php";
 require_once "./index.php"; 
 include_once "./assets/includes/header.php"; ?>
<body class="page-header-fixed">

	<div class="clearfix">
	</div>
	 <div class="page-container">
	  <div class="page-sidebar-wrapper">
			<div class="page-sidebar navbar-collapse collapse">
				<ul class="page-sidebar-menu">
					<li class="sidebar-toggler-wrapper">
			 			<div class="sidebar-toggler hidden-phone"></div>
					</li>
					<li class="sidebar-search-wrapper">
						<form class="sidebar-search" action="extra_search.html" method="POST">
							<div class="form-container">
								<div class="input-box">
									<a href="javascript:;" class="remove"></a>
									<input type="text" placeholder="Search..."/>
									<input type="button" class="submit" value=" "/>
								</div>
							</div>
						</form>
					</li>
					<li class="start active ">
						<a href="index.html">
						<i class="fa fa-home"></i>
						<span class="title">
							Dashboard
						</span>
						<span class="selected">
						</span>
						</a>
					</li>
					<li class="">
						<a href="javascript:;">
						<i class="fa fa-file-text"></i>
						<span class="title">
							Cadastro
						</span>
						<span class="arrow ">
						</span>
						</a>
						 <?php include_once "./assets/menuList/cadastro.php"; ?> 
					</li>
					<li class="">
						<a href="javascript:;">
						<i class="fa fa-bar-chart-o"></i>
						<span class="title">
							Relatório
						</span>
						<span class="arrow ">
						</span>
						</a>
						<?php include_once "./assets/menuList/relatorio.php"; ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="page-content-wrapper">
			<div class="page-content">	
				<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
								<h4 class="modal-title">Modal title</h4>
							</div>
							<div class="modal-body">
								Widget settings form goes here
							</div>
							<div class="modal-footer">
								<button type="button" class="btn blue">Save changes</button>
								<button type="button" class="btn default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<h3 class="page-title">
						Dashboard <small>tudo que você precisa à um click.</small>
						</h3>
						<ul class="page-breadcrumb breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="index.html">Home</a>
								<i class="fa fa-angle-right"></i>
							</li>
							<li>
								<a href="#">Dashboard</a>
							</li>
							<li class="pull-right">
								<div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
									<i class="fa fa-calendar"></i>
									<span>
									</span>
									<i class="fa fa-angle-down"></i>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat blue">
							<div class="visual">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<div class="details" >
								<div class="number" >
									1349 
								</div>
								<div class="desc">
									Clientes
								</div>
							</div>
							<a  class="more" data-acao="dadosClientes" href="#" id="blue">
							Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat green">
							<div class="visual">
								<i class="fa fa-group"></i>
							</div>
							<div class="details">
								<div class="number">
							    549		
								</div>
								<div class="desc">
									Usuários
								</div>
							</div>
							<a class="more" data-acao="dadosUsuarios" href="#" id="green">
							Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
						<div class="dashboard-stat purple">
							<div class="visual">
								<i class="fa fa-globe"></i>
							</div>
							<div class="details">
								<div class="number">
									89 								
								</div>
								<div class="desc">
									Fornecedores
								</div>
							</div>
							<a class="more" data-acao="dadosFornecedores" href="#"  id="purple">
							Visualizar <i class="m-icon-swapright m-icon-white"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="clearfix">
				</div>
				<div class="row">
					<div class="col-md-12">			
						<div class="portlet box grey">
							<div class="portlet-title">
								<div class="caption" >
									<i class="fa fa-folder-open" ></i>Tabela Simples
								</div>
								<div class="tools" >
									<a href="javascript:;" class="collapse"></a>
									<a href="#portlet-config" data-toggle="modal" class="config"></a>
									<a href="javascript:;" class="reload"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body" >
								<div class="table-responsive" id="tabela">
									<table  class="table table-hover" >
									<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											Nome
										</th>
										<th>
											Sobrenome
										</th>
										<th>
											Usuario
										</th>
										<th>
											Status
										</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>
											1
										</td>
										<td>
											Mark
										</td>
										<td>
											Otto
										</td>
										<td>
											makr124
										</td>
										<td>
											<span class="label label-sm label-success">
												Aprovado
											</span>
										</td>
									</tr>
									<tr>
										<td>
											2
										</td>
										<td>
											Jacob
										</td>
										<td>
											Nilson
										</td>
										<td>
											jac123
										</td>
										<td>
											<span class="label label-sm label-info">
												Pendente
											</span>
										</td>
									</tr>
									<tr>
										<td>
											3
										</td>
										<td>
											Larry
										</td>
										<td>
											Cooper
										</td>
										<td>
											lar
										</td>
										<td>
											<span class="label label-sm label-warning">
												Suspenso
											</span>
										</td>
									</tr>
									<tr>
										<td>
											4
										</td>
										<td>
											Sandy
										</td>
										<td>
											Lim
										</td>
										<td>
											sanlim
										</td>
										<td>
											<span class="label label-sm label-danger">
												Bloqueado
											</span>
										</td>
									</tr>
									</tbody>
									</table>
								</div>
							</div>
						</div>    
		<?php
			include_once "./DataRequest.php";

				function getData($num1, $num2, $num3) {
					return array($num1, $num2, $num3);
				}

				$num1 = 1349;
				$num2 = 549;
				$num3 = 89;
				$result = getData($num1, $num2, $num3);
    ?>

<script>
    var result = <?php echo json_encode($result); ?>;
    console.log(result);
</script>
	<script>
  document.getElementById("blue").addEventListener("click", function() {
    document.getElementById("tabela").style.backgroundColor = "blue";
  });
  document.getElementById("green").addEventListener("click", function() {
    document.getElementById("tabela").style.backgroundColor = "green";
  });
  document.getElementById("purple").addEventListener("click", function() {
    document.getElementById("tabela").style.backgroundColor = "purple";
		
  });
</script>				
					</div>
				</div>
			</div>
		</div>	
	</div>
	<?php include_once "./assets/includes/menu.php"; ?>
	<?php include_once "./assets/includes/footer.php"; ?>
	
</body>
</html>