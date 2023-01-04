<x-main>

    <x-banner></x-banner>


    <!-- Start Intro Block -->
    <section class="intro container">
        <div class="row my-5">
            <div class="col-md-12">
                <p class="regular">En <span class="red">QUIAN</span> trabajamos con enfoque personal y eficaz
                    en cada proyecto. <br>
                   <span class="red">¡</span>La imagen de nuestros clientes es lo mas importante<span class="red">!</span></p>
            </div>
        </div>
        <hr class="line">
    </section>
    <!-- End Intro Block -->

    <!-- Start Services Icons -->
    <section id="services" class="container mt-4">

        <div class="row">
            <div class="col-md-6 my-3">
                <div class="d-flex justify-content-around align-items-center">
                    <div><img width="70%" class="img" src="{{ asset('/img/services/video.png') }}" alt="">
                    </div>
                    <div>
                        <h5>Vídeos Corporativos</h5>
                        <p class="regular">Vídeos de empresa que muestran su filosofía y valores,
                            generan confianza y fidelidad con los clientes, comunican
                            de manera emotiva sus principales características</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 my-3">
                <div class="d-flex justify-content-around align-items-center">
                    <div><img width="70%" class="img" src="{{ asset('/img/services/spot.png') }}" alt="">
                    </div>
                    <div>
                        <h5>Spot Comercial</h5>
                        <p class="regular">Vídeos para promocionar negocios o productos de manera
                            fresca y dinámica. Producción ágil, look cinematográfico y un
                            producto final orientado a ser compartido en redes sociales.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 my-3">
                <div class="d-flex justify-content-around align-items-center">
                    <div><img width="70%" class="img" src="{{ asset('/img/services/videos.png') }}" alt="">
                    </div>
                    <div>
                        <h5>Videos Musicales</h5>
                        <p class="regular">Producción de videoclips para solistas, bandas, grupos o dj’s
                            Vídeo Art al servicio de la música, una gran canción merece
                            un video que cuente una historia inolvidable. </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 my-3">
                <div class="d-flex justify-content-around align-items-center">
                    <div><img width="70%" class="img" src="{{ asset('/img/services/films.png') }}" alt="">
                    </div>
                    <div>
                        <h5>Fashion Films</h5>
                        <p class="regular">Making Of, micro-cortos con estilo cinematográfico, secuencias
                            intimistas o lo que sea necesario para promocionar marcas de
                            ropa o complementos de forma sugerente y rompedora.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Services Icons -->

    <x-gallery></x-gallery>
    <x-clients></x-clients>


</x-main>
