
@extends("../layouts.plantilla")

    @section("cabecera")


      @endsection
    @section("contenido")
    <div class="container-fluid">
            <div class="page-header">
              <h1 class="text-titles">ACTIVIDADES <small>PENDIENTES</small></h1>
            </div>
        </div>
        <div class="full-box text-center" style="padding: 30px 10px;">
            <a href="/productos">
            <article  class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    DISPONIBILIDAD
                </div >
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-account"></i>
                </div>
                <div  class="full-box tile-number text-titles">
                    <p class="full-box">7</p>
                    <small> PRODUCTOS </small>
                </div>
            </article></a>
            <a href="">
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    MONITOREO
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-male-alt"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">10</p>
                    <small> MIEMBROS </small>
                </div>
            </article>
            </a>
            <a href="">
            <article class="full-box tile">
                <div class="full-box tile-title text-center text-titles text-uppercase">
                    BITACORA
                </div>
                <div class="full-box tile-icon text-center">
                    <i class="zmdi zmdi-face"></i>
                </div>
                <div class="full-box tile-number text-titles">
                    <p class="full-box">70</p>
                    <small>ACTIVIDAD</small>
                </div>
            </article>
        </div>
        


        </div>
    </section>

    
    @endsection
        

    @section("pie")
    @endsection