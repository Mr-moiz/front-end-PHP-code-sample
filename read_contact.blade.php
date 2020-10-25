@extends('manager&header&footer')

@section('title', 'Page Title')

@section('content')

<section class="s-content s-content--top-padding s-content--narrow">

<div class="col-six tab-full">

@if(session()->has('success'))
<div class="alert-box alert-box--success hideit">
                    <p>{{ session()->get('success') }}</p>
                    <i class="fa fa-times alert-box__close"></i>
                </div>                
    @endif
    </div>

<div class="row narrow">
    <div class="col-full s-content__header">
        <h1 class="display-1 display-1--with-line-sep">إتصل بنا </h1>

    </div>
</div>

<div class="row">
    <div class="col-full s-content__main">
    <div class="table-responsive">

<table>
        <thead>
        <tr>
            <th>الإسم </th>
            <th>البريد</th>
            <th>الرساله</th>
            <th>التاريخ</th>
            <th>حزف</th>
        </tr>
        </thead>
        <tbody>
       @foreach($data as $d)
        <tr>
            <td>{{$d->name}}</td>
            <td>{{$d->email}}</td>
            <td>{{$d->messege}}</td>
            <td>{{$d->date}}</td>
            <td><a href="{{url('contact_delete/'. $d->id)}}">حزف</a></td>
        </tr>
@endforeach

        </tbody>
</table>

</div>

    </div> <!-- s-content__main -->
</div> <!-- end row -->

</section> <!-- end s-content -->


@endsection