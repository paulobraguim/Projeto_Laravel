@extends('site.layouts.base')

@section('titulo', 'Página Sobre Nós')

@section('conteudo') 
<main>
    <div class="container">
        <div class="row row-edit">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <h3>Sobre a Empresa</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quia obcaecati 
                            adipisci fuga iste officia! Eum veniam fuga adipisci est aspernatur nesciunt debitis 
                            voluptate minus, laudantium qui ipsum maxime distinctio.
                        </p>

                        <p>
                            Suspendisse potenti. Maecenas at fringilla mauris. Suspendisse vitae nisi consectetur, mollis nisi mollis, 
                            facilisis magna. Morbi suscipit lectus erat, eget volutpat tortor interdum quis. Pellentesque mollis 
                            nulla eu ornare egestas. Donec eleifend felis et mauris tempus ullamcorper. Duis quis elit sem. 
                            Etiam efficitur eu turpis eget gravida. In sit amet rutrum nisl. Sed eget magna eget arcu scelerisque 
                            commodo. Pellentesque sit amet felis ut diam tincidunt egestas a nec nibh. Maecenas elementum nulla egestas 
                            est gravida, quis efficitur tellus consectetur. Aliquam bibendum quam id felis interdum, eget vehicula erat 
                            scelerisque.
                        </p>
                    </div>

                    <div class="col-6">
                        <p>
                            Sed quis neque quis sem ullamcorper imperdiet eu quis mauris. Nam nec sem diam. Nullam sed massa ex. 
                            Phasellus pellentesque et est vitae feugiat. Vivamus interdum ut felis id aliquet. Nunc dictum accumsan ex a 
                            varius. Sed eget ante nunc. Suspendisse potenti. Pellentesque eu faucibus orci, nec elementum neque. Fusce erat 
                            justo, feugiat ac pharetra vel, tincidunt non tellus. Donec posuere elit vel mauris gravida, commodo ultricies 
                            arcu blandit. Vivamus aliquet tincidunt pharetra. Suspendisse lacinia augue quis quam placerat iaculis. 
                            Nulla euismod porta imperdiet. Donec enim nisi, finibus et laoreet id, cursus a lorem.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <img src="{{ asset('img/imagem-sobre-nos.jpg') }}" class="img-fluid" alt="Responsive image">
            </div>
        </div>
    </div>
</main>
@endsection