@extends('layout')

@section('title')
    AutoRent - Notre Catalogue
@endsection

@section('content')
<div class="container">
    <div class="text-center pt-5">
        <h2> Le catalogue</h2>
    </div>

    <div class="pt-3">
        <div class="p-2 text-center">
            <h3>Marque</h3>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">N </th>
                    <th scope="col">Images </th>
                    <th scope="col">Modèles </th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <img src="{{ asset('img/icon/icon-02-primary.png') }}" alt="" style="width:30%">
                    </td>
                    <td class=" ">Otto</td>
                    <td>
                        <a href="" class="btn btn-primary">Voir plus</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>
                        <a href="" class="btn btn-primary">Voir plus</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>
                        <a href="" class="btn btn-primary">Voir plus</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection