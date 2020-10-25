@extends('header&footer')

@section('title', 'Page Title')

@section('content')

<section class="s-content s-content--top-padding s-content--narrow" style="direction: rtl;>

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
        <h1 class="display-1 display-1--with-line-sep"> البورصه </h1>

    </div>
</div>

<div class="row">
    <div class="col-full s-content__main">
    <div class="table-responsive">

<table>
        <thead>
        <tr>
        <th  style="text-align: center">التاريخ </th>
        <th  style="text-align: center"> نوع المحصول </th>
            <th  style="text-align: center">الوحده  </th>
      
            <th  style="text-align: center">سعر الإفتتاح</th>
            <th  style="text-align: center">سعر الإغلاق</th>
            
        </tr>
        </thead>
        <tbody>
       @foreach($data as $d)
        <tr>
        <td style="text-align: center">{{$d->day}} / {{$d->date}}</td>
         <td style="text-align: center">{{$d->name}}</td>
         <td style="text-align: center">{{$d->unit}}</td>
            <td  style="text-align: center">{{$d->open_price}}</td>
            <td  style="text-align: center">{{$d->close_price}}</td>
         
        </tr>
@endforeach

        </tbody>
</table>

</div>

    </div> <!-- s-content__main -->
</div> <!-- end row -->

</section> <!-- end s-content -->


@endsection