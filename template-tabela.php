<?php

/**
 *Template Name: Tabela
 *
 * @package OnePress
 */

get_header(); ?>

	<div id="content" class="site-content">
<?php if(has_post_thumbnail() && $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true )):?>
		<div class="page-fullheader">
		 <img src="<?php echo $img[0];?>"/>
		</div>
		<?php endif;?>
		<div id="content-inside" class="container no-sidebar">
		<?php the_title( '<h2 class="fullheader-title">', '</h2>' ); ?>
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page' ); ?>
<div class="row">
    <div class="col-sm-6">
    	<br />
		<div class="divTable">
			<h3>Vigência</h3>
			<div class="divTableBody">
				<div class="divTableRow">
					<div class="divTableCell">Mês/Ano em vigência</div>
					<div class="divTableCell">
						<?php $value = get_field( "mesano" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Salário minimo</div>
					<div class="divTableCell">
						R$ <?php $value = get_field( "salario_minimo" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
			</div>
		</div>
			<br />
		<div class="divTable">
			<h3>Salário Família</h3>
			<div class="divTableBody">
				<div class="divTableRow">
					<div class="divTableCell">Descrição</div>
					<div class="divTableCell"><strong>Valor 1</strong></div>
					<div class="divTableCell"><strong>Valor 2</strong></div>
				</div>
			<div class="divTableRow">
				<div class="divTableCell">Limite sal. família</div>
				<div class="divTableCell">
					<?php $value = get_field( "limite_salario_familia_1" );
							if( $value ) {  
							    echo $value;
					} ?>
				</div>
				<div class="divTableCell">
					<?php $value = get_field( "limite_salario_familia_2" );
							if( $value ) {  
							    echo $value;
					} ?>
				</div>
			</div>
			<div class="divTableRow">
				<div class="divTableCell">Até o limte</div>
				<div class="divTableCell">
					<?php $value = get_field( "ate_limite_1" );
							if( $value ) {  
							    echo $value;
					} ?>
				</div>
				<div class="divTableCell">
					<?php $value = get_field( "ate_limite_2" );
							if( $value ) {  
							    echo $value;
					} ?>
				</div>
			</div>
			<div class="divTableRow">
				<div class="divTableCell">Acima do limite</div>
				<div class="divTableCell">&nbsp;</div>
				<div class="divTableCell">&nbsp;</div>
			</div>
			</div>
		</div>
			<br />
		<div class="divTable">
			<h3>Valores Mínimos de Desconto</h3>
			<div class="divTableBody">
				<div class="divTableRow">
					<div class="divTableCell">Mín. desconto GRPS</div>
					<div class="divTableCell">
						<?php $value = get_field( "desconto_grps" );
								if( $value ) {  
								    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Mín. desconto</div>
					<div class="divTableCell">
						<?php $value = get_field( "desconto" );
								if( $value ) {  
								    echo $value;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="col-sm-6">
    	<br />
		<div class="divTable">
				<h3>Contribuição Trabalhador Assalariado</h3>
			<div class="divTableBody">
				<div class="divTableRow">
					<div class="divTableCell"><strong>Salário de</strong></div>
					<div class="divTableCell"><strong>Salário até</strong></div>
					<div class="divTableCell"><strong>Alíquota</strong></div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">
					<?php $value = get_field( "salario_1" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
					<div class="divTableCell">
					<?php $value = get_field( "salario_ate_1" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
					<div class="divTableCell">
					<?php $value = get_field( "aliquota_1" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">
					<?php $value = get_field( "salario_2" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
					<div class="divTableCell">
					<?php $value = get_field( "salario_ate_2" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
					<div class="divTableCell">
					<?php $value = get_field( "aliquota_2" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">
					<?php $value = get_field( "salario_3" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
					<div class="divTableCell">
					<?php $value = get_field( "salario_ate_3" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
					<div class="divTableCell">
					<?php $value = get_field( "aliquota_3" );
							if( $value ) {  
							    echo $value;
					} ?>
					</div>
				</div>
			</div>
		</div>
			<br />
		<div class="divTable">
				<h3>Tabela Progressiva Mensal - IRRF</h3>
			<div class="divTableBody">
				<div class="divTableRow">
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell"><strong>Valor</strong></div>
					<div class="divTableCell"><strong>Alíquota</strong></div>
					<div class="divTableCell"><strong>Parc. Deduzir</strong></div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Até</div>
					<div class="divTableCell">
						<?php $value = get_field( "ate" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "aliquota_ate" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "deduzir_ate" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Acima de</div>
					<div class="divTableCell">
						<?php $value = get_field( "acima_1" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "aliquota_acima_1" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "deduzir_1" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Acima de</div>
					<div class="divTableCell">
						<?php $value = get_field( "acima_2" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "aliquota_acima_2" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "deduzir_2" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Acima de</div>
					<div class="divTableCell">
						<?php $value = get_field( "acima_3" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "aliquota_acima_3" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "deduzir_3" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Acima de</div>
					<div class="divTableCell">
						<?php $value = get_field( "acima_4" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "aliquota_acima_4" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "deduzir_4" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
				<div class="divTableRow">
					<div class="divTableCell">Dedução p/ Dep.</div>
					<div class="divTableCell">&nbsp;</div>
					<div class="divTableCell">
						<?php $value = get_field( "aliquota_dep" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
					<div class="divTableCell">
						<?php $value = get_field( "deduzir_dep" );
							if( $value ) {  
							    echo $value;
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
					<?php endwhile; // End of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer('contact'); ?>
