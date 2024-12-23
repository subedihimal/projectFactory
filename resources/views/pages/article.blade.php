@extends('includes.layout')

@section('head')
<title>Article</title>
<link href = "{{asset('css/article.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div>
        <h1 style="text-align: center">Article Details</h1>
    </div>
    <legend>
    <div class = "addArticle">
     <p>Add Article</p>
     <button> Add Article </button>
    </div>
    </legend>
    <form action="/search" method="GET">
        <input type="text" name="query" placeholder="Search..." required>
    </form>
    <table class = 'hoverTable'>
        <thead>
            <tr>
                <th>Article</th>
                <th>Material</th>
                <th>Cutting</th>
                <th>Upper</th>
                <th>Pasting</th>
                <th>Sole</th>
                <th>Finishing</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>5053</td>
                <td>Fiber</td>
                <td>19</td>
                <td>80</td>
                <td>50</td>
                <td>25</td>
                <td>19</td>
                <td>193</td>
                <td>Edit/Delete</td>
            <tr>
        </tbody>
    </table>
@endsection