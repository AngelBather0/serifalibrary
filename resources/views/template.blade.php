<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serifa</title>
    <link rel="stylesheet" href="{{ asset('css/components/styles.css') }}">
</head>
<body>
    <header class="Header">
        <div class="Header__topbar">
            <div class="container">
                <div class="Header__topbar--text">
                    <p><strong>Participa por esta causa:</strong> Fundación del cancer necesita ayuda para recontruir su centro de entretención para familias </p>
                </div>
            </div>
        </div>
        <div class="Header__bottom">
            <div class="container">
                <div class="Header__bottom--container">
                    <div class="Header__bottom--logo">
                        <a href="/">
                            <img src="./images/serifa-logo.png" alt="main-logo">
                        </a>
                    </div>
                    <div class="Header__bottom--navbar">
                        <ul>
                            <li><a href="/">Inicio</a></li>
                            <li><a href="{{route('contactos.index')}}">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="Header__bottom--actions">
                        <div class="Header__bottom--actions-action accountAction">
                            <p>
                                <img src="./images/profile-icon.png" alt="">
                                <span><a href="#">Clientes</a></span>
                            </p>
                            <a href="#" class="sociosButton">
                                <img src="./images/white-account.png" alt="">
                                <span>Socios</span>
                            </a>
                        </div>
                        <div class="Header__bottom--actions-action">
                            <img src="./images/search-icon.png" alt="">
                        </div>
                        <div class="Header__bottom--actions-action" onClick={handleToggleResume}>
                            <a href="#">
                                <img src="./images/cart-icon.png" alt="">
                                <span>1</span>
                            </a>
                        </div>
                    </div>
                    <div class="Header__bottom--mobileBars" onClick={handleMenuClick}>
                        <img src="./images/menu.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="Content__mobileMenu">
        <div class="container">
            <div class="Content__mobileMenu--container">
                <div class="Content__mobileMenu--nav">
                    <ul>
                        <li class="linkMenu linkActive"><i class="fas fa-bars" aria-hidden="true"></i><span>Menu</span></li>
                    </ul>
                </div>
                <div class="Content__mobileMenu--mainNavs">
                    <div class="Content__mobileMenu--mainNavs-nav bodyActive2">
                        <ul class="menu">
                            <li><a href="/">Inicio</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="Content__mobileMenu--mainNavs-nav">
                        <ul class="categories">
                            <li class="mundoGamer"><span>Mundo Gamer</span> <i class="fas fa-chevron-right" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="Content__mobileMenu--categoriesBody">
                    <div class="Content__menu--content-body">
                        <ul class="mundoGamerNav">
                            <h4 class="listTitle"><a href="#">Mundo Gamer</a></h4>
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Mousepad</a></li>
                            <li><a href="#">Teclados</a></li>
                            <li><a href="#">Reposamuñecas</a></li>
                            <li><a href="#">Kit Gamer</a></li>
                            <li><a href="#">Microfonos</a></li>
                            <li><a href="#">Audifonos</a></li>
                            <li><a href="#">Parlantes</a></li>
                            <li><a href="#">Soportes de Audifonos</a></li>
                            <li><a href="#">Sillas</a></li>
                            <li><a href="#">Controles</a></li>
                            <li><a href="#">Lentes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="Header__bottom--actions-action mobileAccount">
                    <p>
                        <img src="./images/profile-icon.png" alt="" />
                        <span><a href="/login">Clientes</a></span>
                    </p>
                    <a href="https://panel.serifa.app/" target="blank" class="sociosButton">
                        <img src="./images/white-account.png" alt="" />
                        <span>Socios</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="Content__resume">
        <div class="Content__resume--container">
            <div class="Content__resume--title">
                <h2>Resumen</h2>
            </div>
            <div class="Content__resume--choosenNumbers">
                <div class="Content__resume--choosenNumbers-title">
                    <p>Números elegidos</p>
                </div>
                <div class="Content__resume--choosenNumbers-table">
                    <div class="resume__choosenNumbers--table-number"><p>1</p></div>
                    <div class="resume__choosenNumbers--table-number chosenNumber"><p>2</p></div>
                    <div class="resume__choosenNumbers--table-number soldOutNumber"><p>3</p></div>
                    <div class="resume__choosenNumbers--table-number soldOutNumber"><p>4</p></div>
                    <div class="resume__choosenNumbers--table-number soldOutNumber"><p>5</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>6</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>7</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>8</p></div>
                    <div class="resume__choosenNumbers--table-number soldOutNumber"><p>9</p></div>
                    <div class="resume__choosenNumbers--table-number soldOutNumber"><p>10</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>11</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>12</p></div>
                    <div class="resume__choosenNumbers--table-number chosenNumber"><p>13</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>14</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>15</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>16</p></div>
                    <div class="resume__choosenNumbers--table-number chosenNumber"><p>17</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>18</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>19</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>20</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>21</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>22</p></div>
                    <div class="resume__choosenNumbers--table-number soldOutNumber"><p>23</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>24</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>25</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>26</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>27</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>28</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>29</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>30</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>31</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>32</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>33</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>34</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>35</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>36</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>37</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>38</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>39</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>40</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>41</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>42</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>43</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>44</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>45</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>46</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>47</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>48</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>49</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>50</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>51</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>52</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>53</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>54</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>55</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>56</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>57</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>58</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>59</p></div>
                    <div class="resume__choosenNumbers--table-number"><p>60</p></div>
                </div>
            </div>
            <div class="Content__resume--message">
                <p>* Recuerda revisar tus números antes de hacer el pago</p>
            </div>
            <div class="Content__resume--totalNumbers">
                <div class="Content__resume--totalNumbers-title">
                    <h4>Resumen</h4>
                </div>
                <div class="Content__resume--totalNumbers-table">
                    <div class="resume__totalNumbers--table-heading">
                        <p>Total de números elegidos <strong>250</strong></p>
                    </div>
                    <div class="resume__totalNumbers--table-button">
                        <button>Elegir número a la suerte</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <div class="overlay"></div>
    <div class="Content">
        @yield('content')
    </div>
    <footer class="Footer">
        <div class="container">
            <div class="Footer__container">
                <div class="Footer__logo">
                    <img src="./images/serifa-logo.png" alt="">
                    <p>Todos los derechos reservados serifa 2023</p>
                </div>
                <div class="Footer__item">
                    <h4>Lo que debes saber</h4>
                    <ul>
                        <li><a href="#">Nosotros</a></li>
                        <li><a href="#">Fundaciones</a></li>
                        <li><a href="#">Inscríbete como socio</a></li>
                    </ul>
                </div>
                <div class="Footer__item">
                    <h4>Transparencia</h4>
                    <ul>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Bases legales (pdf)</a></li>
                    </ul>
                </div>
                <div class="Footer__item">
                    <h4>Contáctanos</h4>
                    <ul>
                        <li><a href="tel:+564805550103"><img src="./images/phone-icon.png" alt=""> (480) 555-0103</a></li>
                        <li><a href="#"><img src="./images/address-icon.png" alt=""> 4517 Washington Ave. Manchester, Kentucky 39495</a></li>
                        <li><a href="mailto:seriga@example.com"><img src="./images/envelope-icon.png" alt=""> seriga@example.com</a></li>
                    </ul>
                </div>
                <div class="Footer__item">
                    <h4>Medios de pago</h4>
                    <ul>
                        <li><img src="./images/mastercard.png" alt=""></li>
                        <li><img src="./images/visa.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>