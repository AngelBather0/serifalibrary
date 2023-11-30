@extends('template')
@section('content')

<div class="Content__portada">
    <div class="container">
        <div class="Content__portada--container">
            <div class="Content__portada--details">
                <div class="Content__portada--details-slogan">
                    <p>Lee un libro y obtendrás conocimiento</p>
                </div>
                <div class="Content__portada--details-title">
                    <h2>Lee, <br /> Aprende y Explora!</h2>
                </div>
                <div class="Content__portada--details-description">
                    <p>Imagina que te sumerges en un mundo completamente fantasioso, con todo tipo de escenarios que no podrás creer, un libro es capaz de transportarte a este tipo de mundos.</p>
                </div>
                <div class="Content__portada--details-buttons">
                    <button>Comienza a leer</button>
                    <a href="{{route('contactos.index')}}"><button>Contactános</button></a>
                </div>
            </div>
            <div class="Content__portada--banner">
                <img src="./images/port-banner.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="Content__raffles">
    <div class="container">
        <div class="Content__raffles--tabs">
            <div class="Content__raffles--tabs-tab activeTab" navFor="Libros">
                <h4>Libros</h4>
            </div>
            <div class="Content__raffles--tabs-tab" navFor="Autores">
                <h4>Autores</h4>
            </div>
        </div>
        <form action="{{route('library.index')}}">
            <div class="Content__raffles--search">
                <input type="search" name="search" id="search" placeholder="Buscar... (Nota: Filtrar por Titulo para libros y por Nombre para autores.)" value="{{$search}}">
                <button type="submit"><img src="./images/search-icon-body.png" alt=""></button>
            </div>
        </form>
        <div class="Content__raffles--container Libros bodyActive">
            @if( count($libros) > 0)
                @foreach ($libros as $libro)
                    <div class="Content__raffles--raffleCard">
                        <div class="Content__raffles--raffleCard-foundation">
                            <p>{{$libro->titulo}}</p>
                        </div>
                        <div class="Content__raffles--raffleCard-icon">
                            <img src="./images/book.png" alt="">
                        </div>
                        <div class="Content__raffles--raffleCard-name">
                            <?php $publicador = App\Models\publicadores::where('id_pub', $libro->id_pub)->first(); ?>
                            <h4>{{$publicador->nombre_pub}}</h4>
                        </div>
                        <div class="Content__raffles--raffleCard-date">
                            <p>{{$libro->tipo}}</p>
                        </div>
                        <div class="Content__raffles--raffleCard-numbers">
                            <div class="raffles__raffleCard--numbers-number">
                                <p>Ventas: {{$libro->total_ventas ?? 0}}</p>
                            </div>
                        </div>
                        <div class="Content__raffles--raffleCard-numAmount">
                            <p>Precio: ${{$libro->precio}}</p>
                        </div>
                        <div class="Content__raffles--raffleCard-availableNumbers">
                            <p>Avance: {{$libro->avance}}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="Content__raffles--raffleCard-foundation" style="text-align: left;">
                    <p>No hay libros con este criterio de búsqueda.</p>
                </div>
            @endif
        </div>
        <div class="pagination paginationLibros paginationActive">
            {{ $libros->links() }}
        </div>

        <div class="Content__raffles--container Autores">
            @if (count($autores) > 0)
                @foreach ($autores as $autor)
                    <div class="Content__raffles--raffleCard">
                        <div class="Content__raffles--raffleCard-foundation">
                            <p>{{$autor->nombre}} {{$autor->apellido}}</p>
                        </div>
                        <div class="Content__raffles--raffleCard-icon">
                            <img src="./images/writer.png" alt="">
                        </div>
                        <div class="Content__raffles--raffleCard-name">
                            <h4>{{$autor->ciudad}}</h4>
                        </div>
                        <div class="Content__raffles--raffleCard-date">
                            <p>{{$autor->telefono}}</p>
                        </div>
                        <div class="Content__raffles--raffleCard-numbers">
                            <div class="raffles__raffleCard--numbers-number">
                                <p>{{$autor->pais}}</p>
                            </div>
                            <div class="raffles__raffleCard--numbers-number">
                                <p>{{$autor->estado}}</p>
                            </div>
                            <div class="raffles__raffleCard--numbers-number">
                                <p>{{$autor->ciudad}}</p>
                            </div>
                        </div>
                        <div class="Content__raffles--raffleCard-numAmount">
                            <p>Código postal: {{$autor->cod_postal}}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="Content__raffles--raffleCard-foundation" style="text-align: left;">
                    <p>No hay autores con este criterio de búsqueda.</p>
                </div>
            @endif
        </div>
        <div class="pagination paginationAutores">
            {{ $autores->links() }}
        </div>
    </div>
</div>
<div class="Content__testimonials">
    <div class="container">
        <div class="Content__testimonials--container">
            <div class="Content__testimonials--title">
                <h2>Ellos dieron su opinión sobre los libros</h2>
            </div>
            <div class="Content__testimonials--slider">
                <div class="Content__testimonials--slide">
                    <div class="Content__testimonials--slide-text">
                        <p>Es íncreible, al principio no era muy fan de leer pero esta página me convenció y vaya que fue una excelente decisión, he pasado una de las mejores experiencias de mi vida leyendo mi primer libro :D </p>
                    </div>
                    <div class="Content__testimonials--slide-name">
                        <h4>Max Sulivan - 30/11/2023</h4>
                    </div>
                </div>
            </div>
            <div class="Content__testimonials--arrows">
                <div class="Content__testimonials--arrows-leftArrow">
                    <img src="./images/left-arrow.png" alt="">
                </div>
                <div class="Content__testimonials--arrows-rightArrow">
                    <img src="./images/right-arrow.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Content__characteristics">
    <div class="container">
        <div class="Content__characteristics--container">
            <div class="Content__characteristics--item">
                <div class="Content__characteristics--icon">
                    <img src="./images/credit-card-icon.png" alt="">
                </div>
                <div class="Content__characteristics--details">
                    <div class="Content__characteristics--details-title">
                        <h4>Abre tu mente</h4>
                    </div>
                    <div class="Content__characteristics--details-description">
                        <p>Te nutre de conocimiento.</p>
                    </div>
                </div>
            </div>
            <div class="Content__characteristics--item">
                <div class="Content__characteristics--icon">
                    <img src="./images/credit-card-icon.png" alt="">
                </div>
                <div class="Content__characteristics--details">
                    <div class="Content__characteristics--details-title">
                        <h4>Pasatiempo sano</h4>
                    </div>
                    <div class="Content__characteristics--details-description">
                        <p>No daña el entorno ni tu cuerpo.</p>
                    </div>
                </div>
            </div>
            <div class="Content__characteristics--item">
                <div class="Content__characteristics--icon">
                    <img src="./images/credit-card-icon.png" alt="">
                </div>
                <div class="Content__characteristics--details">
                    <div class="Content__characteristics--details-title">
                        <h4>Ejercita tu cerebro</h4>
                    </div>
                    <div class="Content__characteristics--details-description">
                        <p>Te mantiene atento beneficiando tu cerebro.</p>
                    </div>
                </div>
            </div>
            <div class="Content__characteristics--item">
                <div class="Content__characteristics--icon">
                    <img src="./images/credit-card-icon.png" alt="">
                </div>
                <div class="Content__characteristics--details">
                    <div class="Content__characteristics--details-title">
                        <h4>Sumamente divertido</h4>
                    </div>
                    <div class="Content__characteristics--details-description">
                        <p>Que la imaginación vuele, esa es la mejor parte.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection