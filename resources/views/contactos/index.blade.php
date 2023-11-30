@extends('template')
@section('content')

<div class="Content__bePartner">
    <div class="container">
        <div class="Content__bePartner--container">
            <div class="Content__bePartner--left">
                <div class="Content__bePartner--icon">
                    <img src="./images/heart-circle.png" alt="">
                </div>
                <div class="Content__bePartner--title">
                    <h2>¡Contactános!</h2>
                </div>
                <div class="Content__bePartner--description">
                    <p>Si tienes alguna duda o necesitas ponerte en contacto con nosotros, deja tu comentario en esta sección, aunque no seamos los más rápidos del mundo siempre estaremos dispuestos a ayudarte, también puedes ver los contactos de otras personas por si te son de utilidad, muchas gracias :D</p>
                </div>
                <div class="Content__bePartner--slogan">
                    <h4>Lento pero seguro!</h4>
                </div>
            </div>
            <div class="Content__bePartner--form">
                <form action="{{ route('contactos.store') }}" method="POST">

                    @csrf

                    <div class="Content__bePartner--form-text">
                        <p>Ingresa tus datos y te responderemos a la brevedad, no te desesperes puede tardar un poco.</p>
                    </div>
                    <div class="Content__bePartner--form-inputField">
                        <div class="Content__bePartner--form-inputContainer">
                            <label for="name">Nombre <span>*</span></label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="Content__bePartner--form-inputContainer" required>
                            <label for="email">Email <span>*</span></label>
                            <input type="email" name="email" id="email" required>
                        </div>
                    </div>
                    <div class="Content__bePartner--form-inputContainer">
                        <label for="asunto">Asunto <span>*</span></label>
                        <input type="text" name="asunto" id="asunto" required>
                    </div>
                    <div class="Content__bePartner--form-inputContainer">
                        <label for="comment">Mensaje</label>
                        <textarea name="comment" id="comment" cols="30" rows=""></textarea>
                    </div>
                    <div class="Content__bePartner--form-button">
                        <button type="submit" onclick="validarFormulario()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="Content__contactos">
    <div class="container">
        <div class="Content__contactos--container">
            <div class="Content__contactos--title">
                <h2>Ellos ya nos han contactado</h2>
            </div>
            <div class="Content__contactos--grid">
                @foreach ($contactos as $contacto)
                    <div class="Content__contactos--contacto">
                        <div class="Content__contactos--contacto-icon">
                            <img src="./images/testimonial_icon.webp" alt="">
                        </div>
                        <div class="Content__contactos--contacto-name">
                            <h2>{{ $contacto->nombre }}</h2>
                        </div>
                        <div class="Content__contactos--contacto-email">
                            <h4>{{ $contacto->correo }}</h4>
                        </div>
                        <div class="Content__contactos--contacto-asunto">
                            <p>{{ $contacto->asunto }}</p>
                        </div>
                        <div class="Content__contactos--contacto-message">
                            <p>{{ $contacto->comentario }}</p>
                        </div>
                        <div class="Content__contactos--contacto-date">
                            <p>{{ $contacto->fecha }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination paginationActive">
                {{ $contactos->links() }}
            </div>
        </div>
    </div>
</div>
    
<script src="{{asset('js/formValidation.js')}}"></script>

@endsection