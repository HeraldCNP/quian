<x-main>
    <!-- Start Title -->
    <section id="page-title" class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="bold text-center my-2">INFORMACIÓN DE <span class="red">CONTACTO</span></h1>
                    <hr class="line">
                </div>
            </div>

        </div>
        <div class="row">
            <h2 class="bold text-center my-2" style="color: #f5c11e">afdsfsd@dfsdfsd.com</h2>
            <h2 class="bold text-center my-3">+591 73867629</h2>
            <h4 class="bold text-center my-4" style="color: #4e5257">POTOSÍ, BOLIVIA</h4>
        </div>
    </section>
    <!-- End Title -->

    <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d469.8713403096378!2d-65.75913205297292!3d-19.58575495309896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sbo!4v1673704550075!5m2!1ses!2sbo" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section id="contact-us" class="container">
        <div class="row">
			<hr class="line">
            <div class="col-md-8 offset-md-2">
				<div class="row">
					<div class="col-md-12">
						<h2 class="bold text-center">CONTACTA CON <span class="red">NOSOTROS</span></h2>
						<p class="regular text-center">Nuestras producciones son de gran valor creativo y cuentan con altos estándares de calidad, nos apasiona capturar historias, crear contenido de video para empresas, marcas, artistas, agencias y más. <br>
							<span class="red">Siempre con un estilo cinematográfico</span>
							 <br>
							¡Comentános tu idea o proyecto, y te asesoramos para darte una solución efectiva!</p>
					</div>

				</div>
                <form action="">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nombre</label>
                            <input type="text" name="name" id="nombre" placeholder="Nombre" required>
                            <label>E-mail</label>
                            <input type="email" name="email" id="email" placeholder="E-mail" required>
                            <label>Subject</label>
                            <input type="text" name="subject" id="asunto" placeholder="Asunto" required>
                        </div>
                        <div class="col-md-8">
							<label>Mensaje</label>
							<textarea name="" id="mensaje" cols="30" rows="10" placeholder="Mensaje" required></textarea>
							<button id="submit" class="btn btn-danger"><span><i class="icon-paper-plane"
								style="font-size: 1rem"></i>Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

	@push('scripts')
        <script src="{{ asset('/js/form.js') }}"></script> 

    @endpush
</x-main>
