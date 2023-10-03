<!doctype html>

<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AM Pizzaria</title>
	<style type="text/css">
	.agendamento{
			float:left;
			margin-left:100px;
		}
	.contato{
		
	}
	</style>
	<link rel="icon" href="logo.ico" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <header>
  	<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="logo.png" alt="Logo" width="70" class="d-inline-block align-text-top"></a>
				<a class="navbar-brand" href="#">AM PIZZARIA</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cardapio">Cardápio</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#reservar">Reservar mesa</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#delivery">Delivery</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
      </ul>
    </div>
	
  </div>
  </nav>
  </header>
  
  <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slideam/1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="slideam/2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="slideam/3.jpg" class="d-block w-100" alt="...">
    </div>
 
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>
<h2 id="cardapio" class="text-center">Cardápio</h2>
<br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="cardapio/pizzacalabresa.avif" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pizza Calabresa</h5>
        <p class="card-text">A pizza calabresa é uma explosão de sabor clássico: generosas fatias de linguiça calabresa, acentuadas por molho de tomate e queijo derretido, proporcionam uma experiência deliciosa e reconfortante, perfeita para os amantes da simplicidade e autenticidade.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="cardapio/pizzaportuguesa.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pizza Portuguesa</h5>
        <p class="card-text">A pizza portuguesa une tradições de Portugal à perfeição da pizza: presunto, linguiça, cebola, pimentões e azeitonas pretas dançam sobre queijo derretido e molho de tomate, um tributo saboroso à culinária global.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="cardapio/pizzamarguerita.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pizza Margherita</h5>
        <p class="card-text">
A pizza Margherita é um hino à simplicidade elegante: uma base de massa fina coberta com molho de tomate fresco, mussarela derretida e folhas de manjericão. Uma combinação clássica que celebra o equilíbrio perfeito entre sabores autênticos e prazeres gastronômicos.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="cardapio/pizzaromeuejulieta.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pizza Romeu e Julieta</h5>
        <p class="card-text">A pizza Romeu e Julieta é uma doce harmonia: a união irresistível do queijo branco com a goiabada, derrete na boca em uma base macia. Uma história de amor culinária que encanta paladares com sua combinação única e saborosa.</p>
      </div>
    </div>
  </div>
</div>
<br>
<div class="text-bg-danger p-3">
<H1 id ="delivery" class="text-center">ACESSE O NOSSO DELIVERY!</H1>
	<br>
<div class="text-center">	

<div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
  <a href="https://www.ifood.com.br"> <button type="button" class="btn btn-danger" href="ifood.com">iFood</button></a>
  <a href="https://www.ubereats.com/br"> <button type="button" class="btn btn-dark">Uber Eats</button></a>
</div>
</div>
</div>

<br><br>

<div class="container-fluid" id="reservar" >
	<div class="text-center">
		<h2>RESERVAR MESA PRÓXIMA AO PALCO</h2>
		<br>
<div class="agendamento">
		
		<!-- Google Calendar Appointment Scheduling begin -->
<link href="https://calendar.google.com/calendar/scheduling-button-script.css" rel="stylesheet">
<script src="https://calendar.google.com/calendar/scheduling-button-script.js" async></script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 1',
      target,
    });
  });
})();
</script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 2',
      target,
    });
  });
})();
</script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 3',
      target,
    });
  });
})();
</script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 4',
      target,
    });
  });
})();
</script>
<br><br>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 5',
      target,
    });
  });
})();
</script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 6',
      target,
    });
  });
})();
</script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 7',
      target,
    });
  });
})();
</script>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 8',
      target,
    });
  });
})();
</script>
<br><br>
<script>
(function() {
  var target = document.currentScript;
  window.addEventListener('load', function() {
    calendar.schedulingButton.load({
      url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ38u3ZsNM9p_WNo1_wc2EFvj_EIXEHRNzC39JjDpN7LQ8G_5t2kOPnIS0bAXqorXr2EyS9uenHW?gv=true',
      color: '#D50000',
      label: 'Mesa 9',
      target,
    });
  });
})();
</script>
</div>
<!-- end Google Calendar Appointment Scheduling -->
	<img src="copa.jpg" width="600px "class="rounded float-end" alt="..."/>
	</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class=".container-sm">
<div  class="text-center"> 
<div class="p-3 mb-2 bg-dark text-white">

	<footer>
	
	<h1>CONTATO</H2><br>

		<form action="https://api.staticforms.xyz/submit" method="post">
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Nome</label><p>
        <input class="form-control" id="exampleInputEmail1" type="text" name="name" placeholder="Seu nome"><p>
		<label for="exampleInputEmail1" class="form-label">Email</label><p>
        <input class="form-control" id="exampleInputEmail1" type="text" name="email" placeholder="Seu email" /><p>
		<label>Mensagem</label><p>
        <textarea class="form-control" id="exampleInputEmail1" name="message"></textarea><p>
        <input type="text" name="honeypot" style="display:none">
        <input type="hidden" name="accessKey" value="74e02e25-abf2-41cd-a976-bf6437575a32">
		<input type="hidden" name="redirectTo" value="http://localhost/ampizzaria/index.php">
        <input type="submit" class="btn btn-light" value="Enviar" />
		</div>
    </form><br>
	<h3> Entre em contato conosco via WhatsApp</h3>
	<a href="https://wa.link/dni4fc"><svg  xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></a>
	<br><br><br><br>
			 <h2 class="text-center">Desenvolvido por © Samuel Rangel</h2>
	</div>
	</div>
    </div>


	</footer>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>