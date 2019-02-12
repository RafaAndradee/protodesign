<?php get_header(); ?>



<style>



</style>

<div id="slider">
  <a class="soc-whatsapp soc-icon-last" href="#">55 91 98209 2966</a>
	<div id="carouselExampleIndicators" class="carousel carousel-fade" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>

			 <div class="carousel-inner" role="listbox">


					<?php
					$new_query = new WP_Query( array(
				    'posts_per_page' => 3,
				    'post_type'      => 'slider',
				    'orderby'        => 'menu_order',
				    'paged'          => $paged
					) );

					$i = 1;

					while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

				<div class="carousel-item <?php if($i == 1) echo 'active'?>">
				      <?php the_post_thumbnail('Slider_thumb') ?>
				      <div class="carousel-caption">
				        <h1><?php the_title() ?></h1>
				      </div>
				</div>

					<?php $i++; endwhile; wp_reset_postdata(); ?>

			</div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

	</div>

</div>




<div id="revista">


<!-- <p class="plogo"><img src="wp-content/themes/Prototheme/assets/images/logo-rev.png" alt=""></p> -->

<a id="linkRev" href="http://www.protodesignbrasil.com/wp-content/uploads/2019/02/Revista-Arte-Norte2.pdf"><p class="pbaxeaqui"><img src="wp-content/themes/Prototheme/assets/images/baixe-aqui.png" alt=""></p></a>


</div>
<!--  <h5>Baixe <a id="linkRev" href="http://www.protodesignbrasil.com/wp-content/uploads/2018/11/ArteNorte1-Spreads.pdf">aqui</a> nossa Revista digital</h5> -->




<?php echo get_theme_mod(campo3); ?>

<?php echo get_theme_mod(campo2); ?>

	<div id="consultoria">
		<h1>[Consultoria]</h1>
		<p id="textoConsultoria"><?php echo get_theme_mod(textoSessao1); ?></p>
			<div class="anime">
				<ul id="serviceswrap">
					<li class="box1">

						<span class="svg-icon flat-filled" id="filled-mic"></span>
            <h2><?php echo get_theme_mod(titulodescricao1); ?></h2>
						<p id="textoBox"><?php echo get_theme_mod(descricao1); ?></p>
					</li>
					<li class="box2">
            <span class="svg-icon flat-filled" id="filled-rocket"></span>
						<h2><?php echo get_theme_mod(titulodescricao2); ?></h2>
						<p id="textoBox"><?php echo get_theme_mod(descricao2); ?></p>
					</li>
					<li class="box3">
						<span class="svg-icon flat-filled" id="filled-robot"></span>
						<h2><?php echo get_theme_mod(titulodescricao3); ?></h2>
						<p id="textoBox"><?php echo get_theme_mod(descricao3); ?></p>
					</li>
				</ul>
			</div>
	</div>






<!--
  'No início de 2018, quando numa reunião interna com a equipe, percebi que precisávamos de uma empresa que pudesse nos orientar nos rumos que tomaríamos no ano em relação ao caminho já traçado até então. Foi quando recebemos o portifólio da Protodesign com uma proposta de consultoria nas áreas de criação e inovação do nosso Negócio Social.
  Foi então que contratamos o serviço da Proto. O relatório entregue foi direto ao ponto como devem ser os verdadeiros consultores nas áreas de criação e inovação. Foi determinante para o Ano de 2018 e tudo que desenvolvemos, demos uma guinada nos Negócios Sociais que desenvolvemos. Conseguimos encontrar ações que pudessem revelar com mais fidelidade a missão do nosso empreendimento.
  Ted Vale - Fundador e Conselheiro do Instituto Alachaster Empreendimentos Sociais.

  Ted Vale, Instituto Alachaster Empreendimentos Sociais
  www.institutoalachaster.org'



  'É fundamental para o designer de jogos que busque a contratação do serviço com empresa especializada e know how para execução, de acordo com a necessidade de tempo de entrega, qualidade e orçamento justo e adequado a realidade do cliente. Neste e em outros aspectos, recomendo conhecer o portfólio da  Protodesign para que suas ideias virem realidade e possam ganhar o Mundo, o espaço e além...

  José Alves, no mercado sou conhecido como JJ ALVES. Atuo como escritor e designer de jogos
  www.jjalves.com.br'




  'A Protodesign tem sido uma importante parceira para a Terras. Ao longo dos últimos meses tem feitos trabalhos personalizados, nas mais variadas mídias, que conseguem passar com maestria as nossas mensagens aos nossos clientes. Trabalhos estes realizados com profissionalismo e respeito ao prazos. Obrigado Protodesign pela frutífera parceria.

  Victor Lins - Co-fundador - Terras App Solutions https://www.terras.agr.br/
-->

	<div id="abordagem">
		<h1>[Abordagem]</h1>
		<p id="textoAbordagem">Entrega antecipada visando lean process, market sharing, agilidade. protagonismo e inovação no cenário de startups fora do eixo. Compromisso, atendimento personalizado, otimização de processos com tecnologia, crescimento organizacional atraves da compartilhamento de saberes, e ruptura com processos que nao agregam.</p>

<!--
		<div class="anime">
			<ul id="abordagemwrap">
				<li class="box1">
					<img class="service1" src="wp-content/themes/Prototheme/assets/images/Layer 5.png" alt="">
				</li>
				<li class="box2">
					<img class="service2" src="wp-content/themes/Prototheme/assets/images/Layer 7.png" alt="">
				</li>
				<li class="box3">
					<img class="service3" src="wp-content/themes/Prototheme/assets/images/Layer 8.png" alt="">
				</li>
				<li class="box4">
					<img class="service3" src="wp-content/themes/Prototheme/assets/images/Layer 9.png" alt="">
				</li>
			</ul>
		</div>
-->
    <h2>Quer dar uma olhada nos projetos que já aplicamos no mercado? <br> Acesse nosso portfólio no behance!</h2> <br>
    <a href="https://www.behance.net/protodesig71d1"><div class="svg-icon social-line" id="line-behance"></div></a>


	</div>


<div id="sobre">
	<h1>[Sobre]</h1>
	<div class="anime">
	<div id="cerebro">
		<img src="wp-content/themes/Prototheme/assets/images/sobrebrain.png" alt="">
	</div>
	</div>
</div>




<div id="testmonials">
  <h1>[Depoimentos]</h1>


  <ul id="serviceswrap">
    <li class="box1">


      <p id="textoBox"><i>"A Protodesign tem sido uma importante parceira para a Terras. Ao longo dos últimos meses tem feitos trabalhos personalizados, nas mais variadas mídias, que conseguem passar com maestria as nossas mensagens aos nossos clientes. Trabalhos estes realizados com profissionalismo e respeito ao prazos. Obrigado Protodesign pela frutífera parceria."</i>
        <br>
        <br>

        Victor Lins - Co-fundador - Terras App Solutions <a href="https://www.terras.agr.br/
">https://www.terras.agr.br/</a>
    </li>
    <li class="box2">

      <p id="textoBox"><i>"No início de 2018, quando numa reunião interna com a equipe, percebi que precisávamos de uma empresa que pudesse nos orientar nos rumos que tomaríamos no ano em relação ao caminho já traçado até então. Foi quando recebemos o portifólio da Protodesign com uma proposta de consultoria nas áreas de criação e inovação do nosso Negócio Social.
Foi então que contratamos o serviço da Proto. O relatório entregue foi direto ao ponto como devem ser os verdadeiros consultores nas áreas de criação e inovação. Foi determinante para o Ano de 2018 e tudo que desenvolvemos, demos uma guinada nos Negócios Sociais que desenvolvemos. Conseguimos encontrar ações que pudessem revelar com mais fidelidade a missão do nosso empreendimento.
Ted Vale - Fundador e Conselheiro do Instituto Alachaster Empreendimentos Sociais."</i>
        <br>
        <br>
        Ted Vale, Instituto Alachaster Empreendimentos Sociais
        <a href="www.institutoalachaster.org
">www.institutoalachaster.org
</a></p>
    </li>
    <li class="box3">

      <p id="textoBox"><i>É fundamental para o designer de jogos que busque a contratação do serviço com empresa especializada e know how para execução, de acordo com a necessidade de tempo de entrega, qualidade e orçamento justo e adequado a realidade do cliente. Neste e em outros aspectos, recomendo conhecer o portfólio da  Protodesign para que suas ideias virem realidade e possam ganhar o Mundo, o espaço e além...</i>
      <br>
      <br>

      José Alves, no mercado sou conhecido como JJ ALVES. Atuo como escritor e designer de jogos
<a href="www.jjalves.com.br">www.jjalves.com.br</a></p>
    </li>
  </ul>
    </div>
</div>

<!--

<div id="testmonials">
  <h1>[Depoimentos]</h1>
      <ul id="serviceswrap">
        <li class="box1">
          <h2><?php echo get_theme_mod(titulodescricao1); ?></h2>
          <p id="textoBox"><?php echo get_theme_mod(descricao1); ?></p>
        </li>
        <li class="box2">
          <h2><?php echo get_theme_mod(titulodescricao2); ?></h2>
          <p id="textoBox"><?php echo get_theme_mod(descricao2); ?></p>
        </li>
        <li class="box3">
          <h2><?php echo get_theme_mod(titulodescricao3); ?></h2>
          <p id="textoBox"><?php echo get_theme_mod(descricao3); ?></p>
        </li>
      </ul>
    </div>
</div>


-->




<div id="contato">
	<h1>[Contato]</h1>
	<p id="textoContato">Vem falar com a gente</p>
	<div class="anime">
		<ul class="soc">
		    <li><a class="soc-facebook" href="https://www.facebook.com/protodesignbrasil"></a></li>
		    <li><a class="soc-behance" href="https://www.behance.net/protodesig71d1"></a></li>
		    <li><a class="soc-instagram" href="https://www.instagram.com/protodesignbrasil/"></a></li>
		    <li><a class="soc-twitter" href="https://twitter.com/protodesignbr"></a></li>
		</ul>
	</div>
		<?php
			$new_query = new WP_Query( array(
		    'posts_per_page' => 1,
		    'post_type'      => 'page',
		    'pagename'      => 'contato',
		    'paged'          => $paged
			) );


			while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

		   <?php the_content() ?>

		<?php endwhile; wp_reset_postdata(); ?>

    <?php //get_template_part('inc/template-parts/contato-form') ?>

</div>

<?php get_footer(); ?>
