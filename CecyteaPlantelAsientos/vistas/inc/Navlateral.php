<!-- Nav lateral -->
<section class="full-box nav-lateral">
<div class="full-box nav-lateral-bg show-nav-lateral"></div>
<div class="full-box nav-lateral-content">
<figure class="full-box nav-lateral-avatar">
<i class="far fa-times-circle show-nav-lateral"></i>
<img src="<?php echo SERVERURL; ?>vistas/assets/avatar/Avatar.png" class="img-fluid" alt="Avatar">
<figcaption class="roboto-medium text-center">
Cecytea Planetel Asientos <br><small class="roboto-condensed-light">Control Escolar</small>
		</figcaption>
</figure>
<div class="full-box nav-lateral-bar"></div>
<nav class="full-box nav-lateral-menu">
	<ul>
		<li>
			<a href="<?php echo SERVERURL; ?>home/"><i class="fab fa-dashcube fa-fw"></i> &nbsp; Menu Principal</a>
		</li>

		<li>
			<a href="#" class="nav-btn-submenu"><i class="fas fa-users fa-fw"></i> &nbsp; Alumnos <i class="fas fa-chevron-down"></i></a>
			<ul>
				<li>
					<a href="<?php echo SERVERURL; ?>almno-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Alumnos</a>
				</li>
				<li>
					<a href="<?php echo SERVERURL; ?>almno/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Almnos</a>
				</li>
				<li>
					<a href="<?php echo SERVERURL; ?>almno-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Alumno</a>
				</li>
			</ul>
			</li>

			<li>
				<a href="#" class="nav-btn-submenu"><i class="fas fa-pallet fa-fw"></i> &nbsp; Docentes <i class="fas fa-chevron-down"></i></a>
				<ul>
					<li>
						<a href="<?php echo SERVERURL; ?>docente-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agrgar Docentes</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>docente-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Docentes</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>docente-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Docentes</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#" class="nav-btn-submenu"><i class="fas fa-file-invoice-dollar fa-fw"></i> &nbsp; Horarios<i class="fas fa-chevron-down"></i></a>
				<ul>
					<li>
						<a href="<?php echo SERVERURL; ?>horario/"><i class="fas fa-plus fa-fw"></i> &nbsp; Horarios</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>horario-new/"><i class="far fa-calendar-alt fa-fw"></i> &nbsp; Reservaciones</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>horario-pending/"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; Colegiaturas</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>reservacion-cita/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Finalizados</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>reservacion-search/"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; Buscar por fecha</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#" class="nav-btn-submenu"><i class="fas  fa-user-secret fa-fw"></i> &nbsp; Adminstradivos <i class="fas fa-chevron-down"></i></a>
				<ul>
					<li>
						<a href="<?php echo SERVERURL; ?>admin-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; Agregar Administrativo</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>admin-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; Lista de Administrativos</a>
					</li>
					<li>
						<a href="<?php echo SERVERURL; ?>admin-search/"><i class="fas fa-search fa-fw"></i> &nbsp; Buscar Administrativos</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="<?php echo SERVERURL; ?>company/"><i class="fas fa-store-alt fa-fw"></i> &nbsp; INSTITUCION</a>
			</li>
		</ul>
	</nav>
</div>
</section>